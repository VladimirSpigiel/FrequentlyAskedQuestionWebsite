<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1413bbceadaa0a4c18eb32f9371e305fd9c1a4e818b1992bf2eea9046cbd91b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  213 => 78,  200 => 72,  20 => 1,  70 => 19,  153 => 56,  239 => 85,  226 => 84,  223 => 81,  210 => 78,  198 => 75,  191 => 67,  76 => 25,  180 => 67,  155 => 47,  197 => 71,  192 => 72,  188 => 71,  184 => 60,  178 => 66,  174 => 56,  170 => 55,  160 => 51,  110 => 21,  58 => 15,  126 => 41,  134 => 54,  172 => 64,  150 => 55,  146 => 38,  447 => 287,  308 => 151,  300 => 121,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 70,  190 => 94,  148 => 63,  124 => 25,  113 => 48,  97 => 30,  377 => 224,  286 => 112,  282 => 135,  277 => 133,  211 => 103,  207 => 75,  165 => 60,  161 => 63,  152 => 52,  129 => 27,  118 => 49,  114 => 35,  90 => 27,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 94,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 79,  206 => 70,  185 => 66,  181 => 65,  175 => 65,  167 => 64,  127 => 55,  23 => 3,  84 => 24,  77 => 19,  65 => 15,  34 => 5,  137 => 29,  104 => 19,  100 => 39,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 147,  285 => 89,  283 => 88,  278 => 106,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 79,  177 => 65,  169 => 60,  140 => 58,  132 => 40,  128 => 38,  107 => 20,  61 => 17,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  119 => 40,  102 => 40,  71 => 19,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 27,  89 => 17,  85 => 27,  75 => 19,  68 => 25,  56 => 11,  87 => 34,  21 => 2,  26 => 2,  93 => 32,  88 => 32,  78 => 36,  46 => 13,  27 => 3,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 62,  156 => 58,  151 => 59,  142 => 31,  138 => 42,  136 => 42,  121 => 50,  117 => 32,  105 => 34,  91 => 33,  62 => 16,  49 => 14,  24 => 6,  25 => 3,  19 => 1,  79 => 20,  72 => 16,  69 => 16,  47 => 10,  40 => 7,  37 => 10,  22 => 1,  246 => 93,  157 => 55,  145 => 46,  139 => 48,  131 => 38,  123 => 42,  120 => 38,  115 => 22,  111 => 47,  108 => 50,  101 => 30,  98 => 29,  96 => 37,  83 => 33,  74 => 20,  66 => 14,  55 => 13,  52 => 12,  50 => 8,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 63,  173 => 65,  168 => 61,  164 => 63,  162 => 59,  154 => 60,  149 => 57,  147 => 54,  144 => 51,  141 => 51,  133 => 44,  130 => 46,  125 => 51,  122 => 32,  116 => 39,  112 => 51,  109 => 33,  106 => 32,  103 => 29,  99 => 31,  95 => 19,  92 => 18,  86 => 24,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 12,  57 => 11,  54 => 14,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
