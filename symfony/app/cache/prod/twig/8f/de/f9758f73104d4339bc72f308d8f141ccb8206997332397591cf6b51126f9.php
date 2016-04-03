<?php

/* AllotoolsFaqBundle:Admin/Articles:affiche.html.twig */
class __TwigTemplate_8fdef9758f73104d4339bc72f308d8f141ccb8206997332397591cf6b51126f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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
    public function block_titre($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("titre", $context, $blocks);
        echo " - Liste des articles
";
    }

    // line 7
    public function block_entete($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_general($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
        <h3>Liste des articles</h3>
        <table class=\"table table-bordered table-responsive table-striped table-hover text-left\">
            <thead class=\"bg-info\">
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Catégorie(s)</th>
                    <th>Serveur</th>
                    <th class=\"text-center\">Actif</th>
                    <th class=\"text-center\">Modifier</th>
                    <!-- <th>Supprimer</th> -->
                </tr>
            </thead>
            <tbody>
                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "auteur"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date"), "d/m/Y à h:m:s"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "categories")) > 0)) {
                // line 39
                echo "                                <label class=\"sr-only\" for=\"select_categ_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
                echo "\">Catégorie</label>
                                <select id=\"select_categ_";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
                echo "\">
                                    ";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "categories"));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 42
                    echo "                                        <option>";
                    echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : null), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                </select>
                            ";
            } else {
                // line 46
                echo "                                Aucune catégorie
                            ";
            }
            // line 48
            echo "                        </td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "server"), "lib"), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">
                            ";
            // line 51
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "actif")) {
                // line 52
                echo "                                <span class=\"text-success glyphicon glyphicon-eye-open\"></span>
                            ";
            } else {
                // line 54
                echo "                                <span class=\"text-muted glyphicon glyphicon-eye-close\"></span>
                            ";
            }
            // line 56
            echo "                        </td>
                        <td class=\"text-center\">
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manage_articles_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil text-warning\"></span></a>
                        </td>
                        <!--  <td><a href=\"Supprimer/";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
            echo "\">X</a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>
        <a class=\"btn btn-default\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Articles:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  150 => 54,  146 => 52,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 53,  120 => 52,  157 => 51,  113 => 36,  97 => 32,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 71,  161 => 70,  152 => 63,  52 => 8,  129 => 43,  118 => 41,  114 => 40,  90 => 30,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  74 => 35,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 38,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 46,  128 => 44,  111 => 40,  107 => 36,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 65,  143 => 48,  135 => 55,  131 => 52,  119 => 42,  108 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  47 => 9,  38 => 6,  94 => 31,  89 => 37,  85 => 21,  79 => 18,  75 => 17,  68 => 19,  56 => 9,  50 => 12,  29 => 5,  87 => 23,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 38,  88 => 33,  78 => 23,  46 => 7,  27 => 4,  40 => 5,  44 => 8,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 58,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 48,  123 => 47,  121 => 46,  117 => 44,  115 => 41,  105 => 34,  101 => 32,  91 => 34,  69 => 16,  66 => 32,  62 => 12,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 72,  164 => 56,  162 => 59,  154 => 56,  149 => 51,  147 => 58,  144 => 51,  141 => 61,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 39,  103 => 53,  99 => 36,  95 => 35,  92 => 21,  86 => 42,  82 => 20,  80 => 38,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
