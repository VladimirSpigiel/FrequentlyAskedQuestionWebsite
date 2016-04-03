function init_tree() {

    var opts = {
        chartElement: '#chart',
        dragAndDrop: false
    };
    $("#chart").html("");
    $("#org").jOrgChart(opts);
}
var click_flag = true;
var node_to_edit;


var id_primary = 1;

$(document).on("ready", function () {
    init_tree();
    var add_to_node, del_node, classList;

    $(".edit").live("click",function (e) {
        classList = $(this).parent().parent().attr('class').split(/\s+/);
        $.each(classList, function (index, item) {
            if (item != "temp"
                && item != "node"
                && item != "child"
                && item != "ui-draggable"
                && item != "ui-droppable"
                && item != "Non"
                && item != "Oui") {
                add_to_node = item;

            }
        });

        $(".selector span").text("Elija una opción");

        var tipo_n;
        $.each(classList, function (index, item) {
            if (item != "temp"
                && item != "node"
                && item != "child"
                && item != "ui-draggable"
                && item != "ui-droppable"
                && item != "Non"
                && item != "Oui") {
                del_node = item;

            }
            if (item == "root" || item == "child") {
                tipo_n = item;
            }
        });
        node_to_edit = $("li." + del_node + ":not('.temp')");

        var $node = $("li." + node_to_edit + ":not('.temp')");

        var question = $('#fancy_edit .question');
        var article = $('#fancy_edit .article');
        var choix = node_to_edit.attr("data-etat")

        question.val("");
        article.val("");

        if (node_to_edit.attr("data-type") == "question")
            question.val(node_to_edit.attr("data-id-etat"))
        else if (node_to_edit.attr("data-type") == "article")
            article.val(node_to_edit.attr("data-id-etat"))

        $("#fancy_edit input[value='" + choix + "']").prop("checked", true);

        article.val(node_to_edit.attr("data-id-etat"))

    }).fancybox({
        maxWidth: 800,
        maxHeight: 800,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: true,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });

    $(".del").live("click", function (e) {
        var nodo = $(this);

        if (!nodo.parent().parent().hasClass("temp")) {
            var nodeDiv = nodo.parent().parent();
            var cu = nodeDiv.find("a").attr("rel");
            classList = nodeDiv.attr('class').split(/\s+/);

            $.each(classList, function (index, item) {
                if (item != "temp"
                    && item != "node"
                    && item != "child"
                    && item != "ui-draggable"
                    && item != "ui-droppable"
                    && item != "Non"
                    && item != "Oui") {

                    del_node = item;

                }
            });
            var element = $("li." + del_node + ":not('.temp')");
            element.remove();

            init_tree();
        }

    });
    $(".add").live("click",function (e) {
        click_flag = false;

        classList = $(this).parent().parent().attr('class').split(/\s+/);
        $.each(classList, function (index, item) {
            if (item != "temp"
                && item != "node"
                && item != "child"
                && item != "ui-draggable"
                && item != "ui-droppable"
                && item != "Non"
                && item != "Oui") {

                add_to_node = item;

            }
        });


    }).fancybox({
        maxWidth: 800,
        maxHeight: 800,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: true,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none',
        afterClose: function () {
            click_flag = true;
            init_tree()
        }
    })

    $('#fancy_edit #edit_node').click(function (e) {
        e.preventDefault();

        $("#fancy_edit .erreur").empty();

        var question = $("#fancy_edit .question");
        var libQuestion = question.find('option:selected').html();
        var idQuestion = question.val();
        var $node = node_to_edit;

        var article = $("#fancy_edit .article");
        var libArticle = article.find('option:selected').html();
        var idArticle = article.val();

        var typeParent = $node.attr("data-type");


        var etatNoeud = $('#fancy_edit input[name="Etat"]:checked').val();


        var trouve = false;
        if (idArticle != "") {
            var nodeId = $node.attr('data-id');

            if ($node.children("ul").find("li:not('.temp')").length > 0) {
                trouve = true
                $('#fancy_edit .erreur').html("Ce noeud contient des enfants, alors que vous voulez insérer un article")
            }


        }

        if ((idQuestion != "" && idArticle != "") && (idQuestion == "" && idArticle == ""))
            $('#fancy_edit .erreur').html("Merci de sélectionner une question OU un article")


        if ((idQuestion != "" ^ idArticle != "") && !trouve) {
            var type = "";
            if (idQuestion != "") {
                type = "question"
                node_to_edit.attr("data-id-etat", question.val())
                node_to_edit.find("> span").html('<h4>' + type.toUpperCase() + '</h4>' + libQuestion)

            }
            else {
                type = "article"
                node_to_edit.attr("data-id-etat", article.val())
                node_to_edit.find("> span").html('<h4>' + type.toUpperCase() + '</h4>' + libArticle)

            }
            node_to_edit.attr("data-type", type);
            node_to_edit.attr("data-etat", etatNoeud);

            node_to_edit.removeClass("Oui").removeClass("Non").addClass(etatNoeud)


            $.fancybox.close();
            init_tree()

        }

    })


    $("#fancy #add_node").click(function (e) {
        e.preventDefault();

        var tipo_nodo = "";

        $("#fancy .erreur").empty();

        var question = $("#fancy .question");
        var libQuestion = question.find('option:selected').html();
        var idQuestion = question.val();
        var $node = $("li." + add_to_node + ":not('.temp')");

        var article = $("#fancy .article");
        var libArticle = article.find('option:selected').html();
        var idArticle = article.val();

        var typeParent = $node.attr("data-type");


        var etatNoeud = $('#fancy input[name="Etat"]:checked').val();

        var etatNoeudVoisins = new Array();

        $node.find("ul:first > li:not('.temp')").each(function () {

            etatNoeudVoisins.push($(this).attr("data-etat"))

        })

        var etatOK = false;

        if (etatNoeudVoisins.indexOf(etatNoeud) == -1 || etatNoeudVoisins.length == 0)
            etatOK = true;
        else
            $('#fancy .erreur').html("Ce choix existe déjà dans le noeud !")

        if (typeParent == "article") {
            $('#fancy .erreur').html("L'article ci dessus représente la fin du noeud")
        }

        if (idQuestion != "" && idArticle != "")
            $('#fancy .erreur').html("Merci de sélectionner une question OU un article")


        if (idQuestion != "" ^ idArticle != "" && etatOK && typeParent != "article") {
            question.val("");


            var childs = $node.find("ul:eq(0) > li:not('.temp')").size();
            childs++;
            tipo_nodo += add_to_node + "_" + childs;


            if (idQuestion == "") {
                var append_text = "<li class='child " + tipo_nodo + " " + etatNoeud + "' data-type='article' data-node='" + tipo_nodo + "' data-etat='" + etatNoeud + "' data-id-etat='" + idArticle + "' data-id='" + id_primary + "'>";
                append_text += "<span class='label_node'><h4>ARTICLE</h4>" + libArticle + "</span>";
            }
            else if (idArticle == "") {
                var append_text = "<li class='child " + tipo_nodo + " " + etatNoeud + "' data-type='question' data-node='" + tipo_nodo + "' data-etat='" + etatNoeud + "' data-id-etat='" + idQuestion + "' data-id='" + id_primary + "'>";
                append_text += "<span class='label_node'><h4>QUESTION</h4>" + libQuestion + "</span>";
            }

            append_text += "</li>";
            if ($node.find("ul").size() == 0) {
                append_text = "<ul>" + append_text + "</ul>";
                $node.append(append_text);
            } else {


                $node.find("ul:eq(0)").append(append_text);
            }

            id_primary++;
            $.fancybox.close();
            init_tree();
        }

    });


//forms behavior
    $("#new_node_name, #edit_node_name").on("keyup", function (evt) {

        var id = $(this).attr("id");
        if ($(this).val() != '') {
            if (id == "new_node_name")
                $("#add_node").show();

        } else {
            if (id == "new_node_name")
                $("#add_node").hide();

        }
    });

});

jQuery(document).ready(function () {

    prettyPrint();
    /* Custom jQuery for the example */
    $("#show-list").click(function (e) {
        e.preventDefault();

        $('#list-html').toggle('fast', function () {
            if ($(this).is(':visible')) {
                $('#show-list').text('Hide underlying list.');
                $(".topbar").fadeTo('fast', 0.9);
            } else {
                $('#show-list').text('Show underlying list.');
                $(".topbar").fadeTo('fast', 1);
            }
        });
    });

    $('#list-html').text($('#org').html());

    $("#org").bind("DOMSubtreeModified", function () {
        $('#list-html').text('');

        $('#list-html').text($('#org').html());

        prettyPrint();
    });


});
