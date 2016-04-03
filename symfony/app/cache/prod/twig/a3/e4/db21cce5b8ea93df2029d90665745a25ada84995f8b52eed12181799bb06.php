<?php

/* AllotoolsFaqBundle:Admin/Categories:affiche.html.twig */
class __TwigTemplate_a3e4db21cce5b8ea93df2029d90665745a25ada84995f8b52eed12181799bb06 extends Twig_Template
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
        echo " - Liste des catégories
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
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("allotools_faq_managecategories_add");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Créer une catégorie</a>
    <h3>Liste des catégories</h3>
    <table class=\"table table-responsive table-bordered table-striped table-hover text-left\">
        <thead class=\"bg-info\">
            <tr>
                <th>Libéllé</th> <th>Profils</th> <th class=\"text-center\">Publique</th> <th class=\"text-center\">Modifier</th> <th class=\"text-center\">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "lib"), "html", null, true);
            echo "</td>
                    ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "profil")) > 0)) {
                // line 30
                echo "                       <td>
                           <label class=\"sr-only\" for=\"select_profil_";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id"), "html", null, true);
                echo "\">Sélectionnez un profil</label>
                           <select id=\"select_profil_";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id"), "html", null, true);
                echo "\">
                           ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "profil"));
                foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
                    // line 34
                    echo "                               <option>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : null), "libelle"), "html", null, true);
                    echo "</option>
                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                           </select>(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "profil")), "html", null, true);
                echo ")
                       </td>
                    ";
            } else {
                // line 39
                echo "                        <td>Aucun profil</td>
                    ";
            }
            // line 41
            echo "                    <td class=\"text-center\">
                    ";
            // line 42
            if ($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "public")) {
                // line 43
                echo "                        <span class=\"text-success glyphicon glyphicon-eye-open\"></span>
                    ";
            } else {
                // line 45
                echo "                        <span class=\"text-muted glyphicon glyphicon-eye-close\"></span>
                    ";
            }
            // line 47
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_managecategoriesedit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id"))), "html", null, true);
            echo "\"><span class=\"text-warning glyphicon glyphicon-pencil\"></span></a>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_managecategoriesdelete", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Attention, êtes-vous sûr de vouloir supprimer la catégorie ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "lib"), "html", null, true);
            echo " ?')\"><span class=\"text-danger glyphicon glyphicon-remove\"></span></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
    <a class=\"btn btn-default\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>

";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Categories:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  172 => 63,  150 => 54,  146 => 49,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 53,  120 => 52,  157 => 51,  113 => 36,  97 => 31,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 71,  161 => 70,  152 => 52,  52 => 8,  129 => 41,  118 => 36,  114 => 40,  90 => 30,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  74 => 35,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 38,  100 => 41,  81 => 26,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 42,  128 => 44,  111 => 40,  107 => 36,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 65,  143 => 48,  135 => 55,  131 => 52,  119 => 42,  108 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  47 => 9,  38 => 6,  94 => 30,  89 => 37,  85 => 27,  79 => 18,  75 => 17,  68 => 19,  56 => 9,  50 => 12,  29 => 5,  87 => 23,  72 => 20,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 38,  88 => 28,  78 => 23,  46 => 7,  27 => 4,  40 => 5,  44 => 8,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 58,  156 => 66,  151 => 50,  142 => 47,  138 => 45,  136 => 48,  123 => 47,  121 => 46,  117 => 44,  115 => 41,  105 => 33,  101 => 32,  91 => 34,  69 => 17,  66 => 32,  62 => 12,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 58,  164 => 56,  162 => 59,  154 => 56,  149 => 51,  147 => 58,  144 => 51,  141 => 61,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 39,  103 => 53,  99 => 36,  95 => 35,  92 => 29,  86 => 25,  82 => 24,  80 => 38,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
