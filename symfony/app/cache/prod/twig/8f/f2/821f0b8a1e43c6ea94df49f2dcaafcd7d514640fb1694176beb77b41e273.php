<?php

/* AllotoolsFaqBundle:Admin/Statistiques:categories.articles.html.twig */
class __TwigTemplate_8ff2821f0b8a1e43c6ea94df49f2dcaafcd7d514640fb1694176beb77b41e273 extends Twig_Template
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

    // line 13
    public function block_general($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
        <p class=\"well h4\">
            Catégorie : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "route"), "html", null, true);
        echo "
        </p>
        <div class=\"panel\">
            <div id=\"chartContainer\">
            </div>
            <div id=\"noVue\">
            </div>
        </div>
        <div class=\"row\">
            <form method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_article_dans_categorie", array("route" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "route"))), "html", null, true);
        echo "\">
                <div class=\"col-sm-6 col-sm-offset-3\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" name=\"libelle\" placeholder=\"Rechercher un article\">
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-info\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
                          </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
            </form>
        </div>
        <h2>Liste des articles</h2>
        <table class=\"table table-bordered table-striped table-hover text-left\">
            <thead class=\"bg-info\">
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th class=\"col-sm-2 text-center\">Statistiques</th>
                    <!-- <td>Supprimer</td> -->
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "auteur"), "html", null, true);
            echo "</td>
                        <td class=\"text-center\"><a id=\"routeArticle";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_articles_annee", array("route" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "route"), "article" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-stats\"></span></a></td>
                        <!--  <td><a href=\"Supprimer/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\">X</a></td> -->
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("allotools_faq_statistiques_categories");
        echo "\" class=\"btn btn-default\">Retour</a>
    ";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Statistiques:categories.articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  155 => 61,  197 => 64,  192 => 62,  188 => 61,  184 => 60,  178 => 57,  174 => 56,  170 => 55,  160 => 51,  83 => 22,  110 => 30,  58 => 13,  126 => 44,  96 => 40,  134 => 44,  172 => 63,  150 => 47,  146 => 46,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 38,  120 => 38,  157 => 51,  113 => 33,  97 => 47,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 57,  152 => 52,  52 => 11,  129 => 41,  118 => 52,  114 => 35,  90 => 26,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 97,  167 => 64,  127 => 55,  74 => 20,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 49,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 47,  128 => 40,  111 => 40,  107 => 31,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 48,  131 => 57,  119 => 35,  108 => 50,  102 => 31,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  79 => 25,  75 => 19,  68 => 18,  56 => 12,  50 => 11,  29 => 5,  87 => 27,  72 => 25,  55 => 12,  21 => 2,  26 => 6,  98 => 28,  93 => 38,  88 => 28,  78 => 22,  46 => 8,  27 => 4,  40 => 8,  44 => 8,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 71,  163 => 60,  158 => 56,  156 => 50,  151 => 60,  142 => 45,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 44,  115 => 35,  105 => 46,  101 => 48,  91 => 27,  69 => 17,  66 => 16,  62 => 16,  49 => 9,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 51,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 28,  92 => 26,  86 => 25,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
