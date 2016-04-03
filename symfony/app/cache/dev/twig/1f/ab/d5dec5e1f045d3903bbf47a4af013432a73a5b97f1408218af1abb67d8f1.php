<?php

/* AllotoolsFaqBundle:Admin/Articles:modifier.html.twig */
class __TwigTemplate_1fabd5dec5e1f045d3903bbf47a4af013432a73a5b97f1408218af1abb67d8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
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
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo " - Modifier un article
";
    }

    // line 7
    public function block_entete($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_general($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
    <div class=\"container\">
        <h3>Modifier l'article</h3>
        <div class=\"well col-sm-6 col-sm-offset-3\">
            <form method=\"post\" class=\"text-left\" role=\"form\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                <div class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'errors');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'label', array("label" => "Catégories"));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok\"></span> Modifier</button>
            </form>
        </div>
    </div>
    <div class=\"row\">
        <a class=\"btn btn-default\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_articles");
        echo "\">Retour</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Articles:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  150 => 54,  146 => 52,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 53,  113 => 36,  97 => 32,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 71,  161 => 70,  152 => 63,  129 => 43,  118 => 41,  114 => 40,  90 => 30,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 38,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 46,  128 => 44,  107 => 36,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 65,  143 => 48,  135 => 55,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  38 => 6,  94 => 31,  89 => 37,  85 => 21,  75 => 17,  68 => 19,  56 => 9,  87 => 23,  21 => 2,  26 => 6,  93 => 38,  88 => 33,  78 => 23,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 58,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 48,  121 => 46,  117 => 44,  105 => 34,  91 => 34,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 16,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 115,  157 => 51,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 52,  115 => 41,  111 => 40,  108 => 45,  101 => 34,  98 => 31,  96 => 31,  83 => 25,  74 => 35,  66 => 32,  55 => 15,  52 => 8,  50 => 12,  43 => 9,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 72,  164 => 56,  162 => 57,  154 => 56,  149 => 51,  147 => 58,  144 => 51,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 39,  103 => 53,  99 => 36,  95 => 35,  92 => 28,  86 => 25,  82 => 24,  80 => 38,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
