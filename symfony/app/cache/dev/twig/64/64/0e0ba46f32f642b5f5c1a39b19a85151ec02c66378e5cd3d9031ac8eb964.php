<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_64640e0ba46f32f642b5f5c1a39b19a85151ec02c66378e5cd3d9031ac8eb964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  291 => 102,  274 => 97,  263 => 95,  255 => 93,  212 => 78,  202 => 77,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 198,  353 => 121,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 101,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 206,  373 => 156,  361 => 195,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  213 => 78,  200 => 72,  20 => 1,  70 => 19,  153 => 56,  239 => 85,  226 => 84,  223 => 81,  210 => 78,  198 => 75,  191 => 67,  76 => 25,  180 => 67,  155 => 47,  197 => 104,  192 => 72,  188 => 102,  184 => 101,  178 => 66,  174 => 65,  170 => 96,  160 => 51,  110 => 21,  58 => 14,  126 => 41,  134 => 54,  172 => 64,  150 => 55,  146 => 38,  447 => 287,  308 => 151,  300 => 105,  287 => 143,  249 => 123,  218 => 105,  205 => 108,  194 => 70,  190 => 76,  148 => 63,  124 => 25,  113 => 48,  97 => 30,  377 => 224,  286 => 112,  282 => 135,  277 => 133,  211 => 103,  207 => 75,  165 => 60,  161 => 63,  152 => 52,  129 => 27,  118 => 49,  114 => 35,  90 => 26,  265 => 96,  261 => 126,  257 => 125,  253 => 127,  248 => 94,  245 => 125,  231 => 83,  228 => 6,  222 => 105,  216 => 79,  206 => 70,  185 => 74,  181 => 65,  175 => 65,  167 => 64,  127 => 55,  23 => 3,  84 => 24,  77 => 20,  65 => 15,  34 => 5,  137 => 29,  104 => 32,  100 => 39,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 147,  285 => 175,  283 => 100,  278 => 98,  268 => 131,  264 => 84,  258 => 94,  252 => 124,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 79,  177 => 65,  169 => 60,  140 => 58,  132 => 40,  128 => 38,  107 => 20,  61 => 15,  273 => 174,  269 => 128,  254 => 92,  243 => 92,  240 => 86,  238 => 117,  235 => 85,  230 => 83,  227 => 81,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 98,  159 => 90,  143 => 51,  135 => 40,  119 => 40,  102 => 40,  71 => 19,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 27,  89 => 17,  85 => 24,  75 => 19,  68 => 25,  56 => 11,  87 => 34,  21 => 2,  26 => 2,  93 => 27,  88 => 25,  78 => 36,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 106,  196 => 71,  183 => 68,  171 => 65,  166 => 95,  163 => 52,  158 => 62,  156 => 62,  151 => 59,  142 => 31,  138 => 42,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  24 => 6,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 7,  37 => 10,  22 => 1,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 38,  115 => 22,  111 => 47,  108 => 50,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 20,  66 => 14,  55 => 13,  52 => 12,  50 => 8,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 71,  176 => 63,  173 => 65,  168 => 61,  164 => 63,  162 => 59,  154 => 60,  149 => 57,  147 => 54,  144 => 51,  141 => 51,  133 => 44,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 32,  103 => 29,  99 => 31,  95 => 19,  92 => 27,  86 => 24,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 12,  57 => 11,  54 => 14,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
