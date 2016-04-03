<?php

/* AllotoolsFaqBundle:Admin/Statistiques:categories.html.twig */
class __TwigTemplate_48172d909c0e2c2e5376f6d900823827f74a55fb86b2a307ad72b4982c9160cd extends Twig_Template
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
    <p class=\"well h4\">
        Statistiques par categorie<br><br>
        Année : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : null), "html", null, true);
        echo "
    </p>

    <!-- <canvas id=\"canvas\" height=\"100\" width=\"500\" style=\"width:100%; height: 450px;\"></canvas>-->
    <form method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_categories");
        echo "\" name=\"formDate\">
        <div class=\"col-sm-2 col-sm-offset-5\">
            <div class=\"form-group\">
                <select class=\"form-control\" name=\"annee\" onChange=\"document.forms['formDate'].submit();\">
                    <option ";
        // line 28
        if (((isset($context["annee"]) ? $context["annee"] : null) == "Toutes les années")) {
            echo " selected ";
        }
        echo " value=\"";
        echo "Toutes les années";
        echo "\">Toutes les années</option>
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["anneeMin"]) ? $context["anneeMin"] : null), (isset($context["anneeMax"]) ? $context["anneeMax"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
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
        // line 32
        echo "                </select>
            </div>
        </div>
    </form>

    <div class=\"row\">
        <div class=\"col-sm-6 col-sm-offset-3\">
            <div class=\"panel panel-success panel-link\">
                <div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#categories_positives\">Catégories à majorité de votes positifs</div>
                <div class=\"list-group collapse in\" id=\"categories_positives\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-sm-offset-3 panel-link\">
            <div class=\"panel panel-danger\">
                <div class=\"panel-heading\" data-toggle=\"collapse\" data-target=\"#categories_negatives\">Catégories à majorité de votes négatifs</div>
                <div class=\"list-group collapse in\" id=\"categories_negatives\">
                </div>
            </div>
        </div>
    </div>
    <a class=\"btn btn-default\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles");
        echo "\">Retour</a>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        var nom = new Array();
        var positifs = new Array();
        var negatifs = new Array();
        var vues = new Array();
        var route = new Array();

        ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 67
            echo "        nom.push('";
            echo $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "lib");
            echo "')
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 71
            echo "        route.push('";
            echo $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "route");
            echo "')
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positifs"]) ? $context["positifs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["positif"]) {
            // line 75
            echo "        positifs.push(";
            echo twig_escape_filter($this->env, (isset($context["positif"]) ? $context["positif"] : null), "html", null, true);
            echo ")
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['positif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["negatifs"]) ? $context["negatifs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["negatif"]) {
            // line 79
            echo "        negatifs.push(";
            echo twig_escape_filter($this->env, (isset($context["negatif"]) ? $context["negatif"] : null), "html", null, true);
            echo ")
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['negatif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vues"]) ? $context["vues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vue"]) {
            // line 83
            echo "        vues.push(";
            echo twig_escape_filter($this->env, (isset($context["vue"]) ? $context["vue"] : null), "html", null, true);
            echo ")
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
        var nb_positif = 0;
        var nb_negatif = 0;

        nom.forEach(function (data, key) {
            var path = \"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_article_dans_categorie", array("route" => "PLACEHOLDER"));
        echo "\";
            path = path.replace(\"PLACEHOLDER\", route[key]);

            \$appendData = '' +
                    '<a href=\"' + path + '\" class=\"list-group-item\">' +
                    '<h4 class=\"list-group-item-heading\">' + data + ' - Nombre de consultations :  ' + vues[key] + '</h4>' +
                    '<p class=\"list-group-item-text\">' +
                    '<span class=\"glyphicon glyphicon-thumbs-up text-success\"></span> ' + positifs[key] +
                    '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' +
                    '<span class=\"glyphicon glyphicon-thumbs-down text-danger\"></span> ' + negatifs[key] + '</p>' +
                    '</a>' +
                    '';

            \$no_data = '<div class=\"list-group-item\">' +
                    '<h4 class=\"list-group-item-heading\">Aucunes catégories</h4> ' +
                    '</div>';

            if (positifs[key] >= negatifs[key]){
                \$(\".panel-success .list-group\").append(\$appendData);
                nb_positif++;
            } else if (positifs[key] < negatifs[key]) {
                \$(\".panel-danger .list-group\").append(\$appendData);
                nb_negatif++;
            }
        });

        if (nb_positif == 0) {
            \$(\".panel-success .list-group\").append(\$no_data);
        }
        if (nb_negatif == 0) {
            \$(\".panel-danger .list-group\").append(\$no_data);
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Statistiques:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 20,  180 => 67,  155 => 61,  197 => 64,  192 => 62,  188 => 61,  184 => 60,  178 => 70,  174 => 56,  170 => 55,  160 => 51,  83 => 24,  110 => 30,  58 => 13,  126 => 44,  96 => 40,  134 => 44,  172 => 63,  150 => 47,  146 => 56,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 38,  120 => 38,  157 => 51,  113 => 33,  97 => 47,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 85,  161 => 57,  152 => 52,  52 => 11,  129 => 41,  118 => 52,  114 => 35,  90 => 28,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 69,  167 => 64,  127 => 55,  74 => 20,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 49,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 95,  140 => 53,  132 => 47,  128 => 40,  111 => 40,  107 => 31,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 48,  131 => 57,  119 => 35,  108 => 50,  102 => 30,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  79 => 25,  75 => 19,  68 => 18,  56 => 12,  50 => 11,  29 => 5,  87 => 27,  72 => 25,  55 => 12,  21 => 2,  26 => 6,  98 => 29,  93 => 38,  88 => 28,  78 => 22,  46 => 8,  27 => 4,  40 => 5,  44 => 8,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 67,  163 => 60,  158 => 56,  156 => 50,  151 => 60,  142 => 45,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 32,  115 => 35,  105 => 46,  101 => 48,  91 => 27,  69 => 17,  66 => 16,  62 => 16,  49 => 9,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 51,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 28,  92 => 26,  86 => 25,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
