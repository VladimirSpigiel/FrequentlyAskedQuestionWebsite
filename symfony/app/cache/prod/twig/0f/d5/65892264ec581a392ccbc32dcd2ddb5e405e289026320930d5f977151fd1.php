<?php

/* AllotoolsFaqBundle:Admin/Arbres:ajoute.html.twig */
class __TwigTemplate_0fd565892264ec581a392ccbc32dcd2ddb5e405e289026320930d5f977151fd1 extends Twig_Template
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

    // line 4
    public function block_entete($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 12
    public function block_general($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "

        <br>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "            <div class=\"row col-sm-6 col-sm-offset-3\">
                <div class=\"alert alert-danger\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <div class=\"well text-left col-sm-6 col-sm-offset-3\">

            <form method=\"POST\" action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_ajoute");
        echo "\">
                <div class=\"form-group\">
                    <label for=\"route\">Selectionnez une catégorie auquel l'arbre sera associé :</label>
                    <select id=\"route\" class=\"form-control\" name=\"route\">

                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 31
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "route"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "lib"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"question\"> Selectionnez la question de départ :</label>
                    <select id=\"question\" name=\"question\" class=\"form-control\">

                        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 41
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "libelle"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"libelle\">Choisissez un libéllé pour cet arbre : </label>
                    <input type=\"text\" id=\"libelle\" name=\"libelle\" class=\"form-control\" required>
                </div>

                <button type=\"submit\" class=\"btn btn-success\">Commencer la construction</button>
            </form>

        </div>



    ";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Arbres:ajoute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  118 => 41,  114 => 40,  90 => 30,  265 => 130,  261 => 129,  257 => 128,  253 => 127,  248 => 126,  245 => 125,  231 => 7,  228 => 6,  222 => 5,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  74 => 35,  23 => 1,  84 => 22,  77 => 18,  65 => 15,  34 => 4,  137 => 61,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 118,  229 => 73,  220 => 70,  214 => 125,  177 => 65,  169 => 95,  140 => 55,  132 => 58,  128 => 49,  111 => 58,  107 => 36,  61 => 30,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 117,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 61,  143 => 78,  135 => 73,  131 => 52,  119 => 63,  108 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  47 => 9,  38 => 6,  94 => 31,  89 => 37,  85 => 35,  79 => 18,  75 => 17,  68 => 19,  56 => 28,  50 => 12,  29 => 5,  87 => 23,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 6,  78 => 23,  46 => 7,  27 => 4,  40 => 8,  44 => 8,  35 => 9,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 83,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 33,  101 => 32,  91 => 27,  69 => 16,  66 => 32,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 93,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 33,  103 => 53,  99 => 31,  95 => 48,  92 => 21,  86 => 42,  82 => 25,  80 => 38,  73 => 17,  64 => 17,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
