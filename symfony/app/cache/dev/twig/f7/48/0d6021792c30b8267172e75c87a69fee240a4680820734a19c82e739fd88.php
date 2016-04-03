<?php

/* AllotoolsFaqBundle:Admin/Arbres:reconstruit.html.twig */
class __TwigTemplate_f7480d6021792c30b8267172e75c87a69fee240a4680820734a19c82e739fd88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AllotoolsFaqBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/statistiques.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jOrgChart.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettify.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 12
    public function block_entete($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 20
    public function block_general($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "

    <br>
    <h3>Modification de l'arbre</h3>

    <ul id=\"org\" style=\"display:none\">
    </ul>

    <div id=\"chart\" class=\"orgChart\"></div>
    <div id=\"fancy\" style='display:none;'>
        <form action=\".\" method=\"post\" id=\"add_node_form\" class=\"well\">
            <h3>Nouveau noeud</h3>
            <span class=\"erreur\" style=\"color: #F33;\"></span>
            <br>
            <label for=\"etat\">
                Selectionnez un état pour cet enfant [ Oui, Non ] puis une question ou un article
            </label>

            <div class=\"form-group\">
                <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"Etat\" value=\"Oui\" id=\"etat\" checked>Oui
                </label>
                <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"Etat\" value=\"Non\" id=\"etat\">Non
                </label>
            </div>

            <div class=\"form-group\">
                <label for=\"question\">Selectionnez une question pour ce noeud :</label>
                <select name=\"question\" id=\"question\" class=\"form-control question\">
                    <option value=\"\">Selectionnez une question</option>
                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 53
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "libelle"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"article\">Ou selectionnez un article pour ce noeud :</label>
                <select class=\"article form-control\" id=\"article\" name=\"article\">
                    <option value=\"\">Selectionnez un article</option>
                    ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 63
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </select>
            </div>

            <button id=\"add_node\" class=\"btn btn-success\">Ajouter</button>
        </form>
    </div>

    <div id=\"fancy_edit\" style='display:none;'>
        <form action=\".\" method=\"post\" id=\"edit_node_form\" class=\"well\">
            <h3>Modifier ce noeud</h3>
            <span class=\"erreur\" style=\"color: #F33;\"></span>
            <br>
            <label for=\"etat\">
                Selectionnez un état pour cet enfant [ Oui, Non ] puis une question ou un article
            </label>

            <div class=\"form-group\">
                <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"Etat\" value=\"Oui\" id=\"etat\" checked>Oui
                </label>
                <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"Etat\" value=\"Non\" id=\"etat\">Non
                </label>
            </div>

            <div class=\"form-group\">
                <label for=\"question\">Selectionnez une question pour ce noeud :</label>
                <select name=\"question\" id=\"question\" class=\"form-control question\">
                    <option value=\"\">Selectionnez une question</option>
                    ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 95
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "libelle"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"article\">Ou selectionnez un article pour ce noeud :</label>
                <select class=\"article form-control\" id=\"article\" name=\"article\">
                    <option value=\"\">Selectionnez un article</option>
                    ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 105
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                </select>
            </div>

            <button id=\"edit_node\" class=\"btn btn-warning\">Modifier</button>
        </form>
    </div>

    <button class=\"btn btn-warning submit\">
        <span class=\"glyphicon glyphicon-edit\"></span> Modifier l'arbre
    </button>
    <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
        echo "\" class=\"btn btn-default\"
       style=\"margin-left: 20px;\">Retour</a>

";
    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jOrgChart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.tree.js"), "html", null, true);
        echo "\"></script>
    <script>
        function functiontofindIndexByKeyValue(arraytosearch, key, valuetosearch) {

            for (var i = 0; i < arraytosearch.length; i++) {

                if (arraytosearch[i][key] == valuetosearch) {
                    return i;
                }
            }
            return null;
        }

        \$(document).ready(function () {

            var filsJSON = \$.parseJSON('";
        // line 143
        echo (isset($context["json"]) ? $context["json"] : $this->getContext($context, "json"));
        echo "')

            id_primary = filsJSON[filsJSON.length - 1][\"id\"] + 1;

            var id_arbre = \"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "html", null, true);
        echo "\";


            \$('#org').append(\"<li class='root' data-type='init' data-id-etat='";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionPrincipale"]) ? $context["questionPrincipale"] : $this->getContext($context, "questionPrincipale")), "id"), "html", null, true);
        echo "' data-id='0' data-lib='";
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "' data-categ='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"), "html", null, true);
        echo "' data-fils-oui='\" + filsJSON[0][\"oui\"] + \"' data-fils-non='\" + filsJSON[0][\"non\"] + \"'>\" +
                    \"<span class='label_node'>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionPrincipale"]) ? $context["questionPrincipale"] : $this->getContext($context, "questionPrincipale")), "libelle"), "html", null, true);
        echo "</span>\" +
                    \"</li>\");

            filsJSON.forEach(function (value, index) {

                if (value[\"type\"] == \"question\") {

                    var \$nodeParent = value;
                    var \$nodeFilsOui = filsJSON[functiontofindIndexByKeyValue(filsJSON, \"id\", \$nodeParent['oui'])];
                    var \$nodeFilsNon = filsJSON[functiontofindIndexByKeyValue(filsJSON, \"id\", \$nodeParent['non'])];

                    /*   Creer le Noeud */
                    \$('#org').find(\"li[data-fils-oui=\" + value['oui'] + \"]\").append(\"<ul></ul>\")

                    /*   Creer le Fils Oui dans le Noeud */
                    if (\$nodeFilsOui != null)
                        if (\$nodeFilsOui['type'] == \"question\")
                            \$('#org').find(\"li[data-fils-oui=\" + value['oui'] + \"] ul\").append(\"\" +

                                    \"<li class='child root_\" + \$nodeFilsOui['id'] + \" Oui' data-etat='Oui' data-type='question' data-id='\" + \$nodeFilsOui['id'] + \"' data-id-etat='\" + \$nodeFilsOui['id-type'] + \"' data-fils-oui='\" + \$nodeFilsOui['oui'] + \"' data-fils-non='\" + \$nodeFilsOui['non'] + \"'>\" +
                                    \"<span><h4>QUESTION</h4>\" + \$nodeFilsOui['content-type'] + \"</span>\" +
                                    \"</li>\"

                            )
                        else
                            \$('#org').find(\"li[data-fils-oui=\" + value['oui'] + \"] ul\").append(\"\" +

                                    \"<li class='child root_\" + \$nodeFilsOui['id'] + \" Oui' data-etat='Oui' data-type='article' data-id='\" + \$nodeFilsOui['id'] + \"' data-id-etat='\" + \$nodeFilsOui['id-type'] + \"' data-fils-oui='\" + \$nodeFilsOui['oui'] + \"' data-fils-non='\" + \$nodeFilsOui['non'] + \"'>\" +
                                    \"<span><h4>ARTICLE</h4>\" + \$nodeFilsOui['content-type'] + \"</span>\" +
                                    \"</li>\"

                            )
                    /*   Creer le Fils Non dans le Noeud */
                    if (\$nodeFilsNon != null)
                        if (\$nodeFilsNon['type'] == \"question\")
                            \$('#org').find(\"li[data-fils-oui=\" + value['oui'] + \"] ul\").append(\"\" +

                                    \"<li class='child root_\" + \$nodeFilsNon['id'] + \" Non' data-etat='Non' data-type='question' data-id='\" + \$nodeFilsNon['id'] + \"' data-id-etat='\" + \$nodeFilsNon['id-type'] + \"' data-fils-oui='\" + \$nodeFilsNon['oui'] + \"' data-fils-non='\" + \$nodeFilsNon['non'] + \"'>\" +
                                    \"<span><h4>QUESTION</h4>\" + \$nodeFilsNon['content-type'] + \"</span>\" +
                                    \"</li>\"

                            )
                        else
                            \$('#org').find(\"li[data-fils-oui=\" + value['oui'] + \"] ul\").append(\"\" +

                                    \"<li class='child root_\" + \$nodeFilsNon['id'] + \" Non' data-etat='Non' data-type='article' data-id='\" + \$nodeFilsNon['id'] + \"' data-id-etat='\" + \$nodeFilsNon['id-type'] + \"' data-fils-oui='\" + \$nodeFilsNon['oui'] + \"' data-fils-non='\" + \$nodeFilsNon['non'] + \"'>\" +
                                    \"<span><h4>ARTICLE</h4>\" + \$nodeFilsNon['content-type'] + \"</span>\" +
                                    \"</li>\"

                            )

                }
            })

            \$('.submit').click(function () {


                var hierarchy = [];
                var valid = true;

                \$(\"#org li\").each(function () {
                    var type = \$(this).attr(\"data-type\");
                    var name = \$(this).clone().children().remove().end().text();

                    var hid = \$(this).parents(\"li\");

                    if (!\$(this).hasClass(\"temp\")) {


                        var fils = new Object();

                        fils.type = type;
                        fils.id_primary = \$(this).attr(\"data-id\")
                        fils.id_etat = \$(this).attr(\"data-id-etat\")

                        if (hid.length != 0) {
                            fils.id_foreign = \$(this).parents(\"li[class='\" + type + \"']\").attr(\"data-id\")
                        }

                        else {
                            fils.id_foreign = null;
                            fils.lib = \$(this).attr(\"data-lib\")
                            fils.cat = \$(this).attr(\"data-categ\")
                        }


                        if (fils.id_etat == \"null\") {
                            valid = false;
                            var classes = \$(this).attr('class');
                            var classesSplitted = classes.split(\" \");

                            if (hid.length == 0)
                                \$(\".\" + classesSplitted[0]).effect(\"highlight\", 300)
                            else
                                \$(\".\" + classesSplitted[1]).effect(\"highlight\", 300)
                        }

                        if (type != \"article\") {


                            fils.oui = \$(this).find('> ul > li[data-etat=\"Oui\"]').attr(\"data-id\");
                            fils.non = \$(this).find('> ul > li[data-etat=\"Non\"]').attr(\"data-id\");


                            if (fils.oui == undefined || fils.non == undefined) {
                                \$('.erreur').html(\"Il manque des noeuds dans votre arbre !\");

                                valid = false;


                                var classes = \$(this).attr('class');
                                var classesSplitted = classes.split(\" \");

                                if (hid.length == 0)
                                    \$(\".\" + classesSplitted[0]).effect(\"highlight\", 300)
                                else
                                    \$(\".\" + classesSplitted[1]).effect(\"highlight\", 300)


                            }
                        } else {
                            fils.oui = null;
                            fils.non = null;
                        }


                        hierarchy.push(fils);
                    }

                });

                if (valid == true) {

                    \$.ajax({
                        data: {data: hierarchy, arbre: id_arbre},
                        type: \"POST\",
                        url: \"";
        // line 287
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_reconstruit");
        echo "\",
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('.submit').prop(\"disabled\", true);
                        },
                        success: function (data) {
                            if (data.valid == true) {
                                window.location.replace(\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
        echo "\");
                            }
                        },
                        error: function (a, b, c) {
                            \$('.submit').prop(\"disabled\", false);
                            // console.log(a,b,c)
                        }
                    })

                }
            })
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Arbres:reconstruit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 53,  113 => 36,  97 => 32,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 71,  161 => 70,  152 => 63,  129 => 43,  118 => 41,  114 => 40,  90 => 30,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  23 => 1,  84 => 22,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 45,  128 => 44,  107 => 36,  61 => 30,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 65,  143 => 48,  135 => 55,  119 => 37,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  38 => 6,  94 => 31,  89 => 37,  85 => 21,  75 => 17,  68 => 19,  56 => 9,  87 => 23,  21 => 2,  26 => 6,  93 => 38,  88 => 6,  78 => 23,  46 => 7,  27 => 4,  44 => 6,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 34,  91 => 27,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 16,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 115,  157 => 51,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 52,  115 => 43,  111 => 58,  108 => 45,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 35,  66 => 32,  55 => 15,  52 => 8,  50 => 12,  43 => 9,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 73,  173 => 65,  168 => 72,  164 => 56,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 32,  103 => 53,  99 => 31,  95 => 48,  92 => 21,  86 => 42,  82 => 20,  80 => 38,  73 => 17,  64 => 17,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
