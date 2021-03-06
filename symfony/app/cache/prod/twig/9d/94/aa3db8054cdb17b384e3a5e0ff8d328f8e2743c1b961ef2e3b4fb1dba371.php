<?php

/* AllotoolsUserBundle:Security:login.html.twig */
class __TwigTemplate_9d94aa3db8054cdb17b384e3a5e0ff8d328f8e2743c1b961ef2e3b4fb1dba371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'general' => array($this, 'block_general'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_general($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("general", $context, $blocks);
        echo "

\t";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "\t
";
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 16
        echo "\t\t\t
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t<form class=\"form-signin\" role=\"form\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t<h2 class=\"form-signin-heading\">Connectez-vous</h2>
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<input class=\"form-control\" placeholder=\"Identifiant\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t<br />
\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t<label class=\"checkbox text-left\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Se souvenir de moi
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t</div>
\t\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "AllotoolsUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  70 => 19,  153 => 53,  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 17,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 64,  174 => 56,  170 => 55,  160 => 51,  83 => 22,  110 => 21,  58 => 15,  126 => 41,  96 => 28,  134 => 44,  172 => 63,  150 => 47,  146 => 38,  139 => 48,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 25,  120 => 38,  157 => 55,  113 => 33,  97 => 30,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 58,  161 => 57,  152 => 52,  52 => 25,  129 => 27,  118 => 52,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 63,  167 => 64,  127 => 55,  74 => 20,  23 => 2,  84 => 39,  77 => 19,  65 => 15,  34 => 4,  137 => 29,  104 => 19,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 60,  140 => 48,  132 => 40,  128 => 38,  111 => 33,  107 => 20,  61 => 12,  273 => 132,  269 => 128,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  131 => 38,  119 => 23,  108 => 50,  102 => 35,  71 => 19,  67 => 15,  63 => 13,  59 => 13,  47 => 10,  38 => 6,  94 => 27,  89 => 17,  85 => 27,  79 => 20,  75 => 19,  68 => 25,  56 => 11,  50 => 11,  29 => 3,  87 => 23,  72 => 16,  55 => 37,  21 => 2,  26 => 6,  98 => 29,  93 => 32,  88 => 24,  78 => 36,  46 => 9,  27 => 4,  40 => 7,  44 => 9,  35 => 4,  31 => 5,  43 => 8,  41 => 5,  28 => 5,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 31,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 32,  115 => 22,  105 => 32,  101 => 30,  91 => 26,  69 => 16,  66 => 14,  62 => 16,  49 => 9,  24 => 3,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 50,  144 => 51,  141 => 44,  133 => 44,  130 => 43,  125 => 39,  122 => 32,  116 => 34,  112 => 51,  109 => 33,  106 => 32,  103 => 29,  99 => 29,  95 => 19,  92 => 18,  86 => 24,  82 => 38,  80 => 21,  73 => 16,  64 => 13,  60 => 12,  57 => 11,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 4,  33 => 5,  30 => 4,);
    }
}
