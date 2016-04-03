<?php

/* AllotoolsFaqBundle:Admin/Profiles:affiche.html.twig */
class __TwigTemplate_8b12d18f6afc79ea859dd7e298a55c2741e605fd266cf34a0c1a0687c30ae697 extends Twig_Template
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
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageprofilesadd");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Créer un profil</a>
    <h3>Liste des profils</h3>
    <table class=\"text-left table table-bordered table-striped table-hover\">
        <thead class=\"bg-info\">
            <tr>
                <th>Libéllé</th>
                <th>Roles</th>
                <th>Description</th>
                <th class=\"text-center\">Modifier</th>
                <th class=\"text-center\">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "libelle"), "html", null, true);
            echo "</td>
                <td>
                    <label class=\"sr-only\" for=\"select_profil_";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id"), "html", null, true);
            echo "\">Roles</label>
                    <select id=\"select_profil_";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id"), "html", null, true);
            echo "\">
                    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "role"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 33
                echo "                       <option>";
                echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </select>
                    (";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "role")), "html", null, true);
            echo ")
                </td>
                <td>
                    ";
            // line 39
            if (($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "description") != "")) {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "description"), "html", null, true);
                echo "
                    ";
            } else {
                // line 42
                echo "                        Aucune description
                    ";
            }
            // line 44
            echo "                </td>
                <td class=\"text-center\">
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageprofilesedit", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil text-warning\"></span></a>
                </td>
                <td class=\"text-center\">
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageprofilesdelete", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Attention, êtes-vous sûr de vouloir supprimer le profil ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "libelle"), "html", null, true);
            echo " ?')\"><span class=\"glyphicon glyphicon-remove text-danger\"></span></a>
                </td>
             </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
    <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Profiles:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  58 => 13,  126 => 61,  134 => 43,  172 => 63,  150 => 53,  146 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 42,  113 => 36,  97 => 31,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 70,  152 => 52,  129 => 41,  118 => 40,  114 => 52,  90 => 31,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 68,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 31,  100 => 30,  81 => 28,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 46,  128 => 44,  107 => 35,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 67,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 31,  59 => 15,  38 => 6,  94 => 32,  89 => 37,  85 => 27,  75 => 25,  68 => 18,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 38,  88 => 28,  78 => 27,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 58,  156 => 66,  151 => 80,  142 => 47,  138 => 49,  136 => 42,  121 => 46,  117 => 44,  105 => 46,  91 => 34,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 17,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 115,  157 => 51,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 52,  115 => 41,  111 => 40,  108 => 32,  101 => 32,  98 => 33,  96 => 40,  83 => 25,  74 => 26,  66 => 32,  55 => 12,  52 => 11,  50 => 11,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 56,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 55,  130 => 41,  125 => 39,  122 => 37,  116 => 39,  112 => 42,  109 => 34,  106 => 39,  103 => 53,  99 => 36,  95 => 35,  92 => 29,  86 => 30,  82 => 24,  80 => 38,  73 => 17,  64 => 17,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
