<?php

/* AllotoolsFaqBundle:Admin/Statistiques:categories.articles.annee.html.twig */
class __TwigTemplate_0fc5db66a7ec674d0b16450700f6c4a97816eff9471673268e7740885c510974 extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/statistiques.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_general($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
    <div class=\"well h4\">
        Article : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
        echo ", Année : ";
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : null), "html", null, true);
        echo "
    </div>
    <form method=\"post\"
          action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles_annee", array("route" => (isset($context["route"]) ? $context["route"] : null), "article" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\"
          name=\"formDate\">
        <div class=\"col-sm-2 col-sm-offset-5\">
            <div class=\"form-group\">
                <select class=\"form-control\" name=\"annee\" onChange=\"document.forms['formDate'].submit();\">
                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["anneeMin"]) ? $context["anneeMin"] : null), (isset($context["anneeMax"]) ? $context["anneeMax"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "                        <option ";
            if (((isset($context["annee"]) ? $context["annee"] : null) == (isset($context["i"]) ? $context["i"] : null))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </select>
            </div>
        </div>
    </form>
    <div class=\"row\">
        <div class=\"panel col-sm-6 col-sm-offset-1\">
            <div id=\"chartContainer\" style=\"height: 400px !important; width: 0; !important;\">
                <!-- prob width=\"100%\" style=\"border: 1px solid #000; height: 250px; width: 30%;\" style=\"border: 1px solid #000; height: 800px !important; width: 100% !important;\"-->
            </div>
            <div id=\"lineLegend\"></div>
            <div id=\"noVue\">
            </div>
        </div>
    </div>
    <a class=\"btn btn-default\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_article_dans_categorie", array("route" => (isset($context["route"]) ? $context["route"] : null))), "html", null, true);
        echo "\">Retour</a>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">


        var positifs = new Array();
        var negatifs = new Array();
        var vues = new Array();

        \$(document).ready(function () {



            ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positifs"]) ? $context["positifs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["positif"]) {
            // line 61
            echo "            positifs.push(";
            echo twig_escape_filter($this->env, (isset($context["positif"]) ? $context["positif"] : null), "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['positif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
            ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["negatifs"]) ? $context["negatifs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["negatif"]) {
            // line 65
            echo "            negatifs.push(";
            echo twig_escape_filter($this->env, (isset($context["negatif"]) ? $context["negatif"] : null), "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['negatif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vues"]) ? $context["vues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vue"]) {
            // line 69
            echo "            vues.push(";
            echo twig_escape_filter($this->env, (isset($context["vue"]) ? $context["vue"] : null), "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "

            window.onload = function () {
                var chart = new CanvasJS.Chart(\"chartContainer\",
                        {
                            width: 900,
                            height: 400,
                            theme: \"theme3\",
                            title: {
                                text: \"\",
                                fontSize: 30
                            },
                            toolTip: {
                                shared: true
                            },
                            axisX: {
                                title: \"\"
                            },

                            axisY: {
                                title: \"\"
                            },

                            legend: {
                                verticalAlign: \"top\",
                                horizontalAlign: \"center\"
                            },
                            data: [
                                {
                                    type: \"column\",
                                    name: \"positif\",
                                    legendText: \"positif\",
                                    showInLegend: true,
                                    dataPoints: [
                                        {label: \"Janvier\", y: positifs[0]},
                                        {label: \"Fevrier\", y: positifs[1]},
                                        {label: \"Mars\", y: positifs[2]},
                                        {label: \"Avril\", y: positifs[3]},
                                        {label: \"Mai\", y: positifs[4]},
                                        {label: \"Juin\", y: positifs[5]},
                                        {label: \"Juillet\", y: positifs[6]},
                                        {label: \"Aout\", y: positifs[7]},
                                        {label: \"Septembre\", y: positifs[8]},
                                        {label: \"Octobre\", y: positifs[9]},
                                        {label: \"Novembre\", y: positifs[10]},
                                        {label: \"Decembre\", y: positifs[11]}

                                    ]
                                },
                                {
                                    type: \"column\",
                                    name: \"negatif\",
                                    legendText: \"negatif\",
                                    showInLegend: true,
                                    dataPoints: [
                                        {label: \"Janvier\", y: negatifs[0]},
                                        {label: \"Fevrier\", y: negatifs[1]},
                                        {label: \"Mars\", y: negatifs[2]},
                                        {label: \"Avril\", y: negatifs[3]},
                                        {label: \"Mai\", y: negatifs[4]},
                                        {label: \"Juin\", y: negatifs[5]},
                                        {label: \"Juillet\", y: negatifs[6]},
                                        {label: \"Aout\", y: negatifs[7]},
                                        {label: \"Septembre\", y: negatifs[8]},
                                        {label: \"Octobre\", y: negatifs[9]},
                                        {label: \"Novembre\", y: negatifs[10]},
                                        {label: \"Decembre\", y: negatifs[11]}


                                    ]
                                },
                                {
                                    type: \"column\",
                                    name: \"vue\",
                                    legendText: \"vue\",
                                    showInLegend: true,
                                    dataPoints: [
                                        {label: \"Janvier\", y: vues[0]},
                                        {label: \"Fevrier\", y: vues[1]},
                                        {label: \"Mars\", y: vues[2]},
                                        {label: \"Avril\", y: vues[3]},
                                        {label: \"Mai\", y: vues[4]},
                                        {label: \"Juin\", y: vues[5]},
                                        {label: \"Juillet\", y: vues[6]},
                                        {label: \"Aout\", y: vues[7]},
                                        {label: \"Septembre\", y: vues[8]},
                                        {label: \"Octobre\", y: vues[9]},
                                        {label: \"Novembre\", y: vues[10]},
                                        {label: \"Decembre\", y: vues[11]}


                                    ]
                                }

                            ],
                            legend: {
                                cursor: \"pointer\",
                                itemclick: function (e) {
                                    if (typeof(e.dataSeries.visible) === \"undefined\" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    }
                                    else {
                                        e.dataSeries.visible = true;
                                    }
                                    chart.render();
                                }
                            }
                        });

                chart.render();
            }


        });


    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Statistiques:categories.articles.annee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  155 => 61,  197 => 64,  192 => 62,  188 => 61,  184 => 60,  178 => 57,  174 => 56,  170 => 55,  160 => 51,  83 => 22,  110 => 30,  58 => 13,  126 => 44,  96 => 40,  134 => 44,  172 => 63,  150 => 47,  146 => 46,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 38,  120 => 38,  157 => 51,  113 => 33,  97 => 30,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 57,  152 => 52,  52 => 11,  129 => 41,  118 => 36,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 97,  167 => 64,  127 => 40,  74 => 20,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 30,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 47,  128 => 40,  111 => 40,  107 => 31,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 48,  131 => 52,  119 => 35,  108 => 32,  102 => 31,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  79 => 25,  75 => 19,  68 => 18,  56 => 12,  50 => 11,  29 => 5,  87 => 27,  72 => 20,  55 => 12,  21 => 2,  26 => 6,  98 => 28,  93 => 38,  88 => 28,  78 => 22,  46 => 8,  27 => 4,  40 => 5,  44 => 8,  35 => 4,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 71,  163 => 60,  158 => 56,  156 => 50,  151 => 60,  142 => 45,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 44,  115 => 35,  105 => 46,  101 => 32,  91 => 27,  69 => 17,  66 => 16,  62 => 16,  49 => 9,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 28,  92 => 26,  86 => 25,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
