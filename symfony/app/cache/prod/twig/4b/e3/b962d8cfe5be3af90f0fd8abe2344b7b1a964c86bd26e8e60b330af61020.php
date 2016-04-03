<?php

/* AllotoolsFaqBundle:Admin/Servers:ajoute.html.twig */
class __TwigTemplate_4be3b962d8cfe5be3af90f0fd8abe2344b7b1a964c86bd26e8e60b330af61020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
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
    <div class=\"container\">
        <h3>Ajouter un serveur</h3>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "            <div class=\"row col-sm-6 col-sm-offset-3\">
                <div class=\"alert alert-danger\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <div class=\"well col-sm-6 col-sm-offset-3\">
            <form method=\"post\" class=\"text-left\" role=\"form\" ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lib"), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lib"), 'label', array("label" => "Libellé"));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lib"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Libellé du serveur")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "host"), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "host"), 'label', array("label" => "Host"));
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "host"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "localhost, ...")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user"), 'errors');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user"), 'label', array("label" => "Login"));
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "root, ...")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwd"), 'errors');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwd"), 'label', array("label" => "Mot de passe"));
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pwd"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dbname"), 'errors');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dbname"), 'label', array("label" => "Nom de la base de données"));
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dbname"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "phpmyfaq, ...")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tbname"), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tbname"), 'label', array("label" => "Nom de la table contenant les articles"));
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tbname"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "faqdata, ...")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_bdd"), 'errors');
        echo "
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_bdd"), 'label', array("label" => "Type de base de données"));
        echo "
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_bdd"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mysql, postgresql, ...")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_service"), 'errors');
        echo "
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_service"), 'label', array("label" => "Nom du service à instancier"));
        echo "
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type_service"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ServiceMajPHPMyFaq, ...")));
        echo "
                </div>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                <button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter</button>
            </form>
        </div>
    </div>
    <div class=\"row\">
        <a class=\"btn btn-default\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageservers");
        echo "\">Retour</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Servers:ajoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 64,  192 => 62,  188 => 61,  184 => 60,  178 => 57,  174 => 56,  170 => 55,  160 => 51,  83 => 26,  110 => 33,  58 => 13,  126 => 61,  96 => 40,  134 => 44,  172 => 63,  150 => 47,  146 => 46,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 36,  120 => 38,  157 => 51,  113 => 36,  97 => 30,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 57,  152 => 52,  52 => 11,  129 => 41,  118 => 36,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 40,  74 => 26,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 31,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 41,  128 => 40,  111 => 40,  107 => 35,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 67,  131 => 52,  119 => 42,  108 => 32,  102 => 31,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 27,  89 => 28,  85 => 27,  79 => 25,  75 => 24,  68 => 18,  56 => 9,  50 => 11,  29 => 5,  87 => 27,  72 => 20,  55 => 12,  21 => 2,  26 => 6,  98 => 30,  93 => 38,  88 => 28,  78 => 22,  46 => 7,  27 => 4,  40 => 7,  44 => 8,  35 => 4,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 56,  156 => 50,  151 => 52,  142 => 45,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 44,  115 => 35,  105 => 46,  101 => 32,  91 => 34,  69 => 17,  66 => 32,  62 => 14,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 52,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 35,  92 => 29,  86 => 25,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
