<?php

/* AllotoolsFaqBundle:Admin/Arbres:construit.html.twig */
class __TwigTemplate_a4cf3348b4c8018efb659752255700bc1dd9bcd7bf83fc2318c6513607db89ac extends Twig_Template
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
        echo "\" type=\"text/css\" />
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
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 13
    public function block_entete($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 21
    public function block_general($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "




            <br>
            <h3>Création d'un arbre</h3>

            <ul id=\"org\" style=\"display:none\">
                <li class='root' data-type='init' data-id-etat='";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionPrincipale"]) ? $context["questionPrincipale"] : null), "id"), "html", null, true);
        echo "' data-id=\"0\" data-lib=\"";
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : null), "html", null, true);
        echo "\" data-categ=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id"), "html", null, true);
        echo "\">
                    <span class=\"label_node\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionPrincipale"]) ? $context["questionPrincipale"] : null), "libelle"), "html", null, true);
        echo "</span>
                </li>
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
                        <input  type=\"radio\" name=\"Etat\" value=\"Oui\" id=\"etat\" checked>Oui
                    </label>
                    <label class=\"radio-inline\">
                        <input  type=\"radio\" name=\"Etat\" value=\"Non\" id=\"etat\">Non
                    </label>
                </div>

                <div class=\"form-group\">
                    <label for=\"question\">Selectionnez une question pour ce noeud :</label>
                    <select name=\"question\" id=\"question\" class=\"form-control question\">
                        <option value=\"\">Selectionnez une question</option>
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 61
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "libelle"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"article\">Ou selectionnez un article  pour ce noeud :</label>
                    <select class=\"article form-control\" id=\"article\" name=\"article\">
                        <option value=\"\">Selectionnez un article</option>
                        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 71
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </select>
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
                        <input  type=\"radio\" name=\"Etat\" value=\"Oui\" id=\"etat\" checked>Oui
                    </label>
                    <label class=\"radio-inline\">
                        <input  type=\"radio\" name=\"Etat\" value=\"Non\" id=\"etat\">Non
                    </label>
                </div>

                <div class=\"form-group\">
                    <label for=\"question\">Selectionnez une question pour ce noeud :</label>
                    <select name=\"question\" id=\"question\" class=\"form-control question\">
                        <option value=\"\">Selectionnez une question</option>
                        ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 103
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "libelle"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"article\">Ou selectionnez un article  pour ce noeud :</label>
                    <select class=\"article form-control\" id=\"article\" name=\"article\">
                        <option value=\"\">Selectionnez un article</option>
                        ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 113
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                    </select>
                </div>

                <button id=\"edit_node\" class=\"btn btn-warning\">Modifier</button>
            </form>
        </div>

        <button class=\"btn btn-success submit\" >
            <span class=\"glyphicon glyphicon-ok\"></span> Créer l'arbre
        </button>
        <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
        echo "\" class=\"btn btn-default\" style=\"margin-left: 20px;\">Retour</a>

    ";
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jOrgChart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.tree.js"), "html", null, true);
        echo "\"></script>



    <script>
        \$(document).ready(function(){
            \$('.submit').click(function(){




                var hierarchy = [];
                var valid = true;

                \$(\"#org li\").each(function(){
                    var type = \$(this).attr(\"data-type\");
                    var name = \$(this).clone().children().remove().end().text();
                    var hidSTR = \"\";
                    var hid = \$(this).parents(\"li\");


                    for(var i=hid.length-1; i>=0; i--)
                    {
                        if(i != hid.length-1)
                        {
                            hidSTR = hidSTR+hid[i].id+\".\";
                        }else{
                            hidSTR = hidSTR+\"\"+hid[i].id;
                        }
                    }
                    if(!\$(this).hasClass(\"temp\")){


                        var fils = new Object();

                        fils.type = type;
                        fils.id_primary = \$(this).attr(\"data-id\")
                        fils.id_etat = \$(this).attr(\"data-id-etat\")

                        if(hid.length != 0){
                            fils.id_foreign = \$(this).parents(\"li[class='\"+type+\"']\").attr(\"data-id\")
                        }

                        else{
                            fils.id_foreign = null;
                            fils.lib = \$(this).attr(\"data-lib\")
                            fils.cat = \$(this).attr(\"data-categ\")
                        }


                        if(type != \"article\"){


                            fils.oui = \$(this).find('> ul > li[data-etat=\"Oui\"]').attr(\"data-id\");
                            fils.non= \$(this).find('> ul > li[data-etat=\"Non\"]').attr(\"data-id\");


                            if(fils.oui == undefined || fils.non == undefined){
                                \$('.erreur').html(\"Il manque des noeuds dans votre arbre !\");

                                valid = false;


                                var classes = \$(this).attr('class');
                                var classesSplitted = classes.split(\" \");

                                if(hid.length == 0)
                                    \$(\".\"+classesSplitted[0]).effect( \"highlight\",300 )
                                else
                                    \$(\".\"+classesSplitted[1]).effect( \"highlight\",300 )

                            }
                        }else{
                            fils.oui = null;
                            fils.non = null;
                        }


                        hierarchy.push(fils);
                    }

                });

                if(valid ==true){

                    \$.ajax({
                        data: {data:hierarchy},
                        type: \"POST\",
                        url: \"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_construit");
        echo "\",
                        dataType: \"json\",
                        beforeSend: function(){
                            \$('.submit').prop(\"disabled\", true);
                        },
                        success : function(data){
                            if(data.valid == true){
                                window.location.replace(\"";
        // line 231
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
        echo "\");
                            }
                        },
                        error : function(a,b,c){
                            \$('.submit').prop(\"disabled\", false);
                            console.log(a,b,c)
                        }
                    })

                    //console.log(hierarchy);
                }

            })

        })

    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Arbres:construit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 71,  161 => 70,  152 => 63,  52 => 8,  129 => 43,  118 => 41,  114 => 40,  90 => 30,  265 => 130,  261 => 129,  257 => 128,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  74 => 35,  23 => 1,  84 => 22,  77 => 18,  65 => 14,  34 => 4,  137 => 60,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 80,  247 => 78,  241 => 118,  229 => 73,  220 => 70,  214 => 125,  177 => 65,  169 => 95,  140 => 55,  132 => 58,  128 => 49,  111 => 58,  107 => 36,  61 => 30,  273 => 132,  269 => 94,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 61,  143 => 78,  135 => 73,  131 => 52,  119 => 63,  108 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  47 => 9,  38 => 6,  94 => 31,  89 => 37,  85 => 22,  79 => 18,  75 => 18,  68 => 19,  56 => 9,  50 => 12,  29 => 5,  87 => 23,  72 => 17,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 38,  88 => 6,  78 => 23,  46 => 7,  27 => 4,  40 => 5,  44 => 6,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 83,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 33,  101 => 32,  91 => 27,  69 => 16,  66 => 32,  62 => 13,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 73,  173 => 65,  168 => 72,  164 => 93,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 32,  103 => 53,  99 => 31,  95 => 48,  92 => 21,  86 => 42,  82 => 21,  80 => 38,  73 => 17,  64 => 17,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
