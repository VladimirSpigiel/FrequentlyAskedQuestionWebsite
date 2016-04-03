<?php

/* AllotoolsFaqBundle:Admin:index.html.twig */
class __TwigTemplate_bc20a217fb780c5e17167aeb5eba87694c2dfeb5424346eb34e422b7410e07dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_entete($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_general($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
    <br><br>
    <div class=\"row\">

        <div class=\"btn-group\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageusers");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl user\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Utilisateurs\">
                    <span class=\"glyphicon glyphicon-user\"></span>
                </button>
            </a>


            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageprofiles");
        echo "\">
                <button class=\"btn btn-default btn-circle space-md btn-xl profil\" data-toggle=\"tooltip\"
                        data-placement=\"bottom\" title=\"Profils\">
                    <span class=\"glyphicon glyphicon-wrench\"></span>
                </button>
            </a>
        </div>

        <div class=\"btn-group\">
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageservers");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl server\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Serveurs\">
                    <span class=\"glyphicon glyphicon-hdd\"></span>
                </button>
            </a>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_articles");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl article\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Articles\">
                    <span class=\"glyphicon glyphicon-file\"></span>
                </button>
            </a>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_categories");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl categ\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Catégories\">
                    <span class=\"glyphicon glyphicon-folder-open\"></span>
                </button>
            </a>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles");
        echo "\">
                <button class=\"btn btn-default btn-circle space-md btn-xl stat\" data-toggle=\"tooltip\"
                        data-placement=\"bottom\" title=\"Statistiques\">
                    <span class=\"glyphicon glyphicon-stats\"></span>
                </button>
            </a>
        </div>

        <div class=\"btn-group\">
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl arbre\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Arbres\">
                    <span class=\"glyphicon glyphicon-tree-deciduous\"></span>
                </button>
            </a>
            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_questions");
        echo "\">
                <button class=\"btn btn-default btn-circle btn-xl question\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                        title=\"Questions\">
                    <span class=\"glyphicon glyphicon-question-sign\"></span>
                </button>
            </a>
        </div>


    </div>
    <br><br>
";
    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$(\"button\").tooltip();
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  134 => 43,  172 => 63,  150 => 50,  146 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 53,  113 => 36,  97 => 31,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 70,  152 => 52,  129 => 41,  118 => 36,  114 => 52,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 31,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 41,  128 => 40,  107 => 36,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 67,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  38 => 6,  94 => 27,  89 => 37,  85 => 27,  75 => 25,  68 => 18,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 38,  88 => 28,  78 => 22,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 58,  156 => 66,  151 => 80,  142 => 47,  138 => 45,  136 => 42,  121 => 46,  117 => 44,  105 => 46,  91 => 34,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 17,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 115,  157 => 51,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 52,  115 => 41,  111 => 40,  108 => 32,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 35,  66 => 32,  55 => 12,  52 => 11,  50 => 11,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 56,  162 => 57,  154 => 81,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 55,  130 => 41,  125 => 39,  122 => 37,  116 => 48,  112 => 42,  109 => 34,  106 => 39,  103 => 53,  99 => 36,  95 => 35,  92 => 29,  86 => 25,  82 => 24,  80 => 38,  73 => 17,  64 => 17,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
