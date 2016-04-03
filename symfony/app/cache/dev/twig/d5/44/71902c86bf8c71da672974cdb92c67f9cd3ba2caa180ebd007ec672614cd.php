<?php

/* AllotoolsFaqBundle:Public/Affiche/Article/Contenu:layout.html.twig */
class __TwigTemplate_d54471902c86bf8c71da672974cdb92c67f9cd3ba2caa180ebd007ec672614cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) > 0)) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "actif") == 1)) {
                // line 3
                echo "    <article class=\"well col-sm-10 col-sm-offset-1\">
        <header>
            <h4>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h4>
            <p class=\"text-muted\">Publié le ";
                // line 6
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d-m-Y"), "html", null, true);
                echo "</p>
        </header>
        <div class=\"text-left\">
            <p>";
                // line 9
                echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu");
                echo "</p>
        </div>
        <footer class=\"text-muted\">
            Auteur : ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo "
        </footer>
    </article>
    <div class=\"well col-sm-10 col-sm-offset-1 h4\">
        Cet article vous a été utile ?<br><br>
        <a class=\"btn btn-success\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_feedback_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "bool" => "true")), "html", null, true);
                echo "\">Oui</a>
        -
        <a class=\"btn btn-danger\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_feedback_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "bool" => "false")), "html", null, true);
                echo "\">Non</a>
    </div>
     ";
            } else {
                // line 22
                echo "        <p>cette article n'ai pas disponible</p>
     ";
            }
        } else {
            // line 25
            echo "    <div class=\"well col-sm-10 col-sm-offset-1 h4\">
        Article introuvable !
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Public/Affiche/Article/Contenu:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 20,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 64,  174 => 56,  170 => 55,  160 => 51,  110 => 38,  58 => 13,  126 => 41,  134 => 44,  172 => 63,  150 => 47,  146 => 56,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 39,  113 => 33,  97 => 33,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 58,  161 => 57,  152 => 52,  129 => 41,  118 => 52,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 63,  167 => 64,  127 => 55,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 36,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 60,  140 => 48,  132 => 47,  128 => 40,  107 => 30,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  119 => 35,  102 => 35,  71 => 22,  67 => 15,  63 => 22,  59 => 13,  38 => 9,  94 => 27,  89 => 25,  85 => 27,  75 => 19,  68 => 25,  56 => 12,  87 => 27,  21 => 2,  26 => 6,  93 => 32,  88 => 24,  78 => 22,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 5,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 49,  138 => 42,  136 => 42,  121 => 46,  117 => 32,  105 => 32,  91 => 27,  62 => 16,  49 => 9,  24 => 3,  25 => 3,  19 => 1,  79 => 25,  72 => 25,  69 => 17,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 55,  145 => 46,  139 => 48,  131 => 38,  123 => 47,  120 => 38,  115 => 35,  111 => 34,  108 => 50,  101 => 31,  98 => 29,  96 => 28,  83 => 24,  74 => 20,  66 => 16,  55 => 12,  52 => 17,  50 => 11,  43 => 8,  41 => 7,  35 => 4,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 50,  144 => 51,  141 => 44,  133 => 44,  130 => 43,  125 => 39,  122 => 32,  116 => 37,  112 => 51,  109 => 33,  106 => 32,  103 => 29,  99 => 29,  95 => 28,  92 => 26,  86 => 25,  82 => 26,  80 => 21,  73 => 17,  64 => 16,  60 => 15,  57 => 19,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
