<?php

/* AllotoolsFaqBundle:Admin:layout.html.twig */
class __TwigTemplate_d72538f170224c27f152643435fce8ec657e1e42fdc73bc16c10e937cca2eeea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AllotoolsFaqBundle::layout.html.twig";
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
        echo " - Administration
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
        echo "    <ul style=\"list-style: none;\">
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageusers");
        echo "\">Utilisateurs</a></li>
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageprofiles");
        echo "\">Profils</a></li>
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageservers");
        echo "\">Serveurs</a></li>
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_articles");
        echo "\">Articles</a></li>
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_categories");
        echo "\">Catégories</a></li>
        <li style=\"display: inline;\"><a class=\"btn btn-default\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles");
        echo "\">Statistiques</a></li>
    </ul>
";
    }

    // line 22
    public function block_general($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
    <h2>Administration</h2>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  77 => 18,  65 => 15,  34 => 4,  137 => 61,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 58,  128 => 49,  111 => 46,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 15,  47 => 9,  38 => 6,  94 => 28,  89 => 37,  85 => 35,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 12,  29 => 3,  87 => 23,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 8,  35 => 5,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 16,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 17,  64 => 17,  60 => 13,  57 => 13,  54 => 12,  51 => 11,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
