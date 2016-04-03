<?php

/* AllotoolsUserBundle::layout.html.twig */
class __TwigTemplate_1604fa9f58bb786fcadd39c006cd91bc524bdabba30a5b70432dba9fea17967e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "FOS User Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 36
        echo "
        <div class=\"block\">
            ";
        // line 38
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 39
        echo "        </div>
    ";
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "            <ul id=\"menu\">
                ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 32
        echo "            </ul>

            <div style=\"clear: both\"></div>
        ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                        <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a></li>
                        <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Profile</a></li>
                    ";
        } else {
            // line 27
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        </li>
                        <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                    ";
        }
        // line 31
        echo "                ";
    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AllotoolsUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  153 => 53,  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 17,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 64,  174 => 56,  170 => 55,  160 => 51,  110 => 21,  58 => 15,  126 => 41,  134 => 44,  172 => 63,  150 => 47,  146 => 38,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 25,  113 => 33,  97 => 32,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 58,  161 => 57,  152 => 52,  129 => 27,  118 => 52,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 63,  167 => 64,  127 => 55,  23 => 1,  84 => 39,  77 => 21,  65 => 18,  34 => 4,  137 => 29,  104 => 19,  100 => 30,  81 => 23,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 60,  140 => 48,  132 => 40,  128 => 38,  107 => 20,  61 => 12,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  119 => 23,  102 => 35,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  38 => 9,  94 => 27,  89 => 17,  85 => 27,  75 => 20,  68 => 25,  56 => 11,  87 => 24,  21 => 2,  26 => 6,  93 => 32,  88 => 24,  78 => 36,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 31,  138 => 42,  136 => 42,  121 => 46,  117 => 32,  105 => 32,  91 => 26,  62 => 16,  49 => 9,  24 => 3,  25 => 3,  19 => 1,  79 => 25,  72 => 25,  69 => 20,  47 => 8,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 55,  145 => 46,  139 => 48,  131 => 38,  123 => 47,  120 => 38,  115 => 22,  111 => 33,  108 => 50,  101 => 30,  98 => 29,  96 => 28,  83 => 22,  74 => 20,  66 => 18,  55 => 12,  52 => 17,  50 => 11,  43 => 8,  41 => 5,  35 => 4,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 50,  144 => 51,  141 => 44,  133 => 44,  130 => 43,  125 => 39,  122 => 32,  116 => 34,  112 => 51,  109 => 33,  106 => 32,  103 => 29,  99 => 29,  95 => 19,  92 => 18,  86 => 24,  82 => 38,  80 => 21,  73 => 16,  64 => 13,  60 => 16,  57 => 14,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 4,  33 => 3,  30 => 3,);
    }
}
