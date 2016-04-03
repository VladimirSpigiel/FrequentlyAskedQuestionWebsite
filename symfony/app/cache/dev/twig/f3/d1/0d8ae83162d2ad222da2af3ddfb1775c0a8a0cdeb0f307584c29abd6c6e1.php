<?php

/* AllotoolsFaqBundle:Admin/Servers:updateAllArticles.html.twig */
class __TwigTemplate_f3d10d8ae83162d2ad222da2af3ddfb1775c0a8a0cdeb0f307584c29abd6c6e1 extends Twig_Template
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
    <div class=\"row\">
        <div class=\"alert alert-success col-sm-6 col-sm-offset-3\">
            ";
        // line 15
        if (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_ajouts") > 1)) {
            // line 16
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_ajouts"), "html", null, true);
            echo "</b> articles ont été ajoutés</p>
            ";
        } elseif (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_ajouts") == 1)) {
            // line 18
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_ajouts"), "html", null, true);
            echo "</b> article a été ajouté</p>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_updates") > 1)) {
            // line 21
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_updates"), "html", null, true);
            echo "</b> articles ont été mis à jour</p>
            ";
        } elseif (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_updates") == 1)) {
            // line 23
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_updates"), "html", null, true);
            echo "</b> article a été mis à jour</p>
            ";
        }
        // line 25
        echo "            ";
        if (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_deletes") > 1)) {
            // line 26
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_deletes"), "html", null, true);
            echo "</b> articles ont été supprimés</p>
            ";
        } elseif (($this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_deletes") == 1)) {
            // line 28
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_changes"]) ? $context["nb_changes"] : $this->getContext($context, "nb_changes")), "nb_deletes"), "html", null, true);
            echo "</b> article a été supprimé</p>
            ";
        }
        // line 30
        echo "            ";
        if (((isset($context["nbArbreInactif"]) ? $context["nbArbreInactif"] : $this->getContext($context, "nbArbreInactif")) > 1)) {
            // line 31
            echo "                <p>Attention ! <b>";
            echo twig_escape_filter($this->env, (isset($context["nbArbreInactif"]) ? $context["nbArbreInactif"] : $this->getContext($context, "nbArbreInactif")), "html", null, true);
            echo "</b> arbres ont été désactivés</p>
            ";
        } elseif (((isset($context["nbArbreInactif"]) ? $context["nbArbreInactif"] : $this->getContext($context, "nbArbreInactif")) == 1)) {
            // line 33
            echo "                <p>Attention ! <b>";
            echo twig_escape_filter($this->env, (isset($context["nbArbreInactif"]) ? $context["nbArbreInactif"] : $this->getContext($context, "nbArbreInactif")), "html", null, true);
            echo "</b> arbre a été désactivé</p>
            ";
        }
        // line 35
        echo "        </div>
    </div>
    <div class=\"row\">
        <a class=\"btn btn-default\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageservers");
        echo "\">Retour</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Servers:updateAllArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 64,  192 => 62,  188 => 61,  184 => 60,  178 => 57,  174 => 56,  170 => 55,  160 => 51,  110 => 33,  58 => 13,  126 => 61,  134 => 44,  172 => 63,  150 => 47,  146 => 46,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 38,  113 => 33,  97 => 30,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 57,  152 => 52,  129 => 41,  118 => 36,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 40,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 30,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 41,  128 => 40,  107 => 31,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 67,  119 => 35,  102 => 31,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  75 => 24,  68 => 18,  56 => 9,  87 => 27,  21 => 2,  26 => 6,  93 => 38,  88 => 28,  78 => 22,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 56,  156 => 50,  151 => 52,  142 => 45,  138 => 42,  136 => 42,  121 => 46,  117 => 44,  105 => 46,  91 => 34,  62 => 16,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 20,  69 => 17,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 115,  157 => 51,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 38,  115 => 35,  111 => 40,  108 => 32,  101 => 32,  98 => 28,  96 => 40,  83 => 23,  74 => 20,  66 => 32,  55 => 12,  52 => 11,  50 => 11,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 52,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 35,  92 => 26,  86 => 25,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
