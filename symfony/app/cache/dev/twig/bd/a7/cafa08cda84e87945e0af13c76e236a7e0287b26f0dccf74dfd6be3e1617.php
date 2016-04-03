<?php

/* ::layout.html.twig */
class __TwigTemplate_bda7cafa08cda84e87945e0af13c76e236a7e0287b26f0dccf74dfd6be3e1617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'general' => array($this, 'block_general'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#menu-gauche\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("allotools_faq_homepage");
        echo "\">AlloTools-FAQ</a>
        </div>
        ";
        // line 30
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 31
            echo "            <p class=\"navbar-text\">Connecté en tant que : <a
                        href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a>
            </p>
        ";
        }
        // line 35
        echo "        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"menu-gauche\">
            ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Administration <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
            echo "\">
                                    <span class=\"glyphicon glyphicon-home\"></span>
                                    &nbsp;&nbsp; Interface Admin
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manageusers");
            echo "\">
                                    <span class=\"glyphicon glyphicon-user\"></span>
                                    &nbsp;&nbsp; Utilisateurs
                                </a>
                            </li>
                            <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manageprofiles");
            echo "\">
                                    <span class=\"glyphicon glyphicon-wrench\"></span>
                                    &nbsp;&nbsp; Profils
                                </a>
                            </li>
                            <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manageservers");
            echo "\">
                                    <span class=\"glyphicon glyphicon-hdd\"></span>
                                    &nbsp;&nbsp; Serveurs
                                </a>
                            </li>
                            <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_articles");
            echo "\">
                                    <span class=\"glyphicon glyphicon-file\"></span>
                                    &nbsp;&nbsp; Articles
                                </a>
                            </li>
                            <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_categories");
            echo "\">
                                    <span class=\"glyphicon glyphicon-folder-open\"></span>
                                    &nbsp;&nbsp; Catégories
                                </a>
                            </li>
                            <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles");
            echo "\">
                                    <span class=\"glyphicon glyphicon-stats\"></span>
                                    &nbsp;&nbsp; Statistiques
                                </a>
                            </li>
                            <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres");
            echo "\">
                                    <span class=\"glyphicon glyphicon-tree-deciduous\"></span>
                                    &nbsp;&nbsp; Arbres
                                </a>
                            </li>
                            <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_questions");
            echo "\">
                                    <span class=\"glyphicon glyphicon-question-sign\"></span>
                                    &nbsp;&nbsp; Questions
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            ";
        }
        // line 93
        echo "            <form class=\"navbar-form navbar-right\" role=\"login\">
                ";
        // line 94
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 95
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Se connecter</a>
                ";
        } else {
            // line 97
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-danger\">Se déconnecter</a>
                ";
        }
        // line 99
        echo "            </form>
            <form method=\"post\" class=\"navbar-form navbar-right\" role=\"search\"
                  action=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("allotools_faq_search");
        echo "\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"keywords\" class=\"form-control\" placeholder=\"Mots clés\" size=\"50\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span>
                    Rechercher
                </button>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class=\"container\">
    <div class=\"row text-center\">
        ";
        // line 117
        $this->displayBlock('general', $context, $blocks);
        // line 119
        echo "    </div>
    <hr>
    <footer class=\"row text-center\">
        <p class=\"text-muted\">SONN - BENSAID - CORDARY - SPIGIEL © 2014</p>
    </footer>
</div>
";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "
</body>
</html>";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Allotools";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 117
    public function block_general($context, array $blocks = array())
    {
        // line 118
        echo "        ";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/canvasjs.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 130,  261 => 129,  257 => 128,  253 => 127,  248 => 126,  245 => 125,  231 => 7,  228 => 6,  222 => 5,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  23 => 1,  84 => 22,  77 => 18,  65 => 15,  34 => 4,  137 => 61,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 118,  229 => 73,  220 => 70,  214 => 125,  177 => 65,  169 => 95,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 61,  143 => 78,  135 => 73,  119 => 63,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  38 => 6,  94 => 28,  89 => 37,  85 => 35,  75 => 17,  68 => 14,  56 => 28,  87 => 23,  21 => 2,  26 => 6,  93 => 38,  88 => 6,  78 => 37,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 83,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 16,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 58,  108 => 45,  101 => 32,  98 => 40,  96 => 31,  83 => 25,  74 => 35,  66 => 32,  55 => 15,  52 => 21,  50 => 12,  43 => 9,  41 => 7,  35 => 9,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 93,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 36,  103 => 53,  99 => 31,  95 => 48,  92 => 21,  86 => 42,  82 => 22,  80 => 38,  73 => 17,  64 => 16,  60 => 6,  57 => 13,  54 => 12,  51 => 11,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 4,);
    }
}
