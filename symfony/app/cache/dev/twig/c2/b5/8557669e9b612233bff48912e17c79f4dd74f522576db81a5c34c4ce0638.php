<?php

/* AllotoolsFaqBundle:Admin/Statistiques:index.html.twig */
class __TwigTemplate_c2b58557669e9b612233bff48912e17c79f4dd74f522576db81a5c34c4ce0638 extends Twig_Template
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
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 16
    public function block_general($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
        <p class=\"well h4\">
                Statistiques sur les avis des articles<br><br>
                Année : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "annee"), "html", null, true);
        echo "<br><br>
                Total de votes : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes"), "html", null, true);
        echo ", Tolal de vues : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "vues"), "html", null, true);
        echo "
            </p>
            <div class=\"row\">
                <form method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles");
        echo "\" name=\"formDate\">
                    <div class=\"col-sm-2 col-sm-offset-5\">
                        <div class=\"form-group\">
                            <select class=\"form-control\" name=\"annee\" onChange=\"document.forms['formDate'].submit();\">
                                <option ";
        // line 28
        if (($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "annee") == "Toutes les années")) {
            echo " selected ";
        }
        echo " value=\"";
        echo "Toutes les années";
        echo "\">Toutes les années</option>
                                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "anneeMin"), $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "anneeMax")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                                    <option ";
            if (($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "annee") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </select>
                        </div>
                    </div>
                </form>
            </div>
        ";
        // line 37
        if ((($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_positif") == 0) && ($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_negatif") == 0))) {
            // line 38
            echo "            <p>Aucuns votes</p>
        ";
        } elseif ((($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_positif") == 0) || ($this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_negatif") == 0))) {
            // line 40
            echo "            <p><b>Votes positifs : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_positif"), "html", null, true);
            echo " / Votes négatifs : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_negatif"), "html", null, true);
            echo "</b></p>
        ";
        } else {
            // line 42
            echo "            <div id=\"chartContainer\" class=\"col-sm-12 chart\"></div>
        ";
        }
        // line 44
        echo "        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_categories");
        echo "\" class=\"btn btn-primary pull-left\">Avis sur les catégories</a>
                <a class=\"btn btn-default pull-right\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>
            </div>
        </div>
    ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        window.onload = function () {

            var chart = new CanvasJS.Chart(\"chartContainer\",
                    {
                        title:{
                            text: \"\",
                            verticalAlign: 'top',
                            horizontalAlign: 'center'
                        },
                        data: [
                            {
                                type: \"doughnut\",
                                startAngle:20,

                                dataPoints: [

                                    {  y: ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_positif"), "html", null, true);
        echo ", label: \"Votes positifs\" },
                                    {  y: ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donnees"]) ? $context["donnees"] : $this->getContext($context, "donnees")), "votes_negatif"), "html", null, true);
        echo ", label: \"Votes négatifs\" }
                                ]
                            }
                        ]
                    });
            chart.render();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Statistiques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 20,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 70,  174 => 56,  170 => 55,  160 => 51,  110 => 30,  58 => 13,  126 => 44,  134 => 44,  172 => 63,  150 => 47,  146 => 56,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 38,  113 => 33,  97 => 47,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 85,  161 => 57,  152 => 52,  129 => 37,  118 => 52,  114 => 35,  90 => 28,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 69,  167 => 64,  127 => 55,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 49,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 95,  140 => 53,  132 => 47,  128 => 40,  107 => 30,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  119 => 35,  102 => 30,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  75 => 19,  68 => 18,  56 => 12,  87 => 27,  21 => 2,  26 => 6,  93 => 38,  88 => 24,  78 => 22,  46 => 8,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 45,  138 => 42,  136 => 42,  121 => 46,  117 => 32,  105 => 46,  91 => 27,  62 => 16,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 25,  69 => 17,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 51,  145 => 46,  139 => 49,  131 => 38,  123 => 47,  120 => 38,  115 => 35,  111 => 40,  108 => 50,  101 => 48,  98 => 29,  96 => 40,  83 => 24,  74 => 20,  66 => 16,  55 => 12,  52 => 11,  50 => 11,  43 => 9,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 44,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 32,  116 => 39,  112 => 51,  109 => 34,  106 => 32,  103 => 29,  99 => 29,  95 => 28,  92 => 26,  86 => 25,  82 => 26,  80 => 21,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
