<?php

/* AllotoolsFaqBundle:Public/Recherche:index.html.twig */
class __TwigTemplate_bd44bab9f510046626855729bef7a6dc76a5da897cbb6a65da5af4885b7af030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Public:layout.html.twig");

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AllotoolsFaqBundle:Public:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_entete($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 11
    public function block_general($context, array $blocks = array())
    {
        // line 12
        echo "        <div class=\"row\">
            <div class=\"alert bg-primary col-sm-6 col-sm-offset-3\">
                <h2>Résultats</h2>
                ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["arbres"]) ? $context["arbres"] : $this->getContext($context, "arbres"))) > 0)) {
            // line 16
            echo "                    <h4>Dans l'aide accompagnée : <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["arbres"]) ? $context["arbres"] : $this->getContext($context, "arbres"))), "html", null, true);
            echo "</span></h4>
                    <div class=\"list-group\">
                        ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arbres"]) ? $context["arbres"] : $this->getContext($context, "arbres")));
            foreach ($context['_seq'] as $context["_key"] => $context["arbre"]) {
                // line 19
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_question", array("id" => $this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "id"))), "html", null, true);
                echo "\"
                               class=\"list-group-item\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "libelle"), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </div>
                ";
        } else {
            // line 24
            echo "                    <!--<h4>Aucun arbre trouvé</h4>-->
                ";
        }
        // line 26
        echo "
                ";
        // line 27
        $this->env->loadTemplate("AllotoolsFaqBundle:Public/Affiche/Article/Liste:layout.html.twig")->display($context);
        // line 28
        echo "
                ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) > 0)) {
            // line 30
            echo "                    <h4>Dans les catégories : <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))), "html", null, true);
            echo "</span></h4>
                    <div class=\"list-group\">
                        ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 33
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_display_category_content", array("route" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "route"))), "html", null, true);
                echo "\"
                               class=\"list-group-item\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "lib"), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </div>
                ";
        } else {
            // line 38
            echo "                    <h4>Aucune catégorie trouvée</h4>
                ";
        }
        // line 40
        echo "            </div>
        </div>
        <div class=\"alert\">
            <a class=\"btn btn-default\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("allotools_faq_homepage");
        echo "\">Retour</a>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Public/Recherche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  153 => 53,  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 20,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 64,  174 => 56,  170 => 55,  160 => 51,  110 => 38,  58 => 15,  126 => 41,  134 => 44,  172 => 63,  150 => 47,  146 => 56,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 36,  113 => 33,  97 => 33,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 58,  161 => 57,  152 => 52,  129 => 41,  118 => 52,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 63,  167 => 64,  127 => 55,  23 => 1,  84 => 32,  77 => 21,  65 => 18,  34 => 4,  137 => 43,  104 => 36,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 60,  140 => 48,  132 => 40,  128 => 38,  107 => 32,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  119 => 35,  102 => 35,  71 => 19,  67 => 15,  63 => 17,  59 => 13,  38 => 9,  94 => 27,  89 => 25,  85 => 27,  75 => 20,  68 => 25,  56 => 13,  87 => 24,  21 => 2,  26 => 6,  93 => 32,  88 => 24,  78 => 22,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 49,  138 => 42,  136 => 42,  121 => 46,  117 => 32,  105 => 32,  91 => 26,  62 => 16,  49 => 9,  24 => 3,  25 => 3,  19 => 1,  79 => 25,  72 => 25,  69 => 20,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 55,  145 => 46,  139 => 48,  131 => 38,  123 => 47,  120 => 38,  115 => 35,  111 => 33,  108 => 50,  101 => 30,  98 => 29,  96 => 28,  83 => 22,  74 => 20,  66 => 18,  55 => 12,  52 => 17,  50 => 11,  43 => 8,  41 => 7,  35 => 4,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 50,  144 => 51,  141 => 44,  133 => 44,  130 => 43,  125 => 39,  122 => 32,  116 => 34,  112 => 51,  109 => 33,  106 => 32,  103 => 29,  99 => 29,  95 => 28,  92 => 26,  86 => 24,  82 => 26,  80 => 21,  73 => 21,  64 => 16,  60 => 16,  57 => 14,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
