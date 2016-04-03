<?php

/* AllotoolsFaqBundle:Admin/User:affiche.html.twig */
class __TwigTemplate_20e04b34e7810150016fa241d3e8044b7002e1dcd594f642d3cb8ad7cc9a1fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AllotoolsFaqBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'general' => array($this, 'block_general'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tooltip.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_general($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("general", $context, $blocks);
        echo "
    <h3>Liste des utilisateurs</h3>
    <table class=\"table table-bordered table-hover text-left\">
        <thead>
        <tr class=\"bg-info\">
            <th>Pseudo</th>
            <th>Email</th>
            <th>Profil</th>
            <th class=\"text-center\">Modifier</th>
            <th class=\"text-center\">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "username"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "email"), "html", null, true);
            echo "</td>

                ";
            // line 35
            if ($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "profil")) {
                // line 36
                echo "                    <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "profil"), "libelle"), "html", null, true);
                echo "
                        <a href=\"#\" class=\"role_tooltip\" data-toggle=\"tooltip\" data-placement=\"right\"
                           title=\"Description : ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "profil"), "description"), "html", null, true);
                echo "&#013;";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "profil"), "role"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
                    echo "&#013;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\">?</a>
                    </td>
                ";
            } else {
                // line 41
                echo "                    <td>Aucun profil</td>
                ";
            }
            // line 43
            echo "                <td class=\"text-center\">
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageusersedit", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "id"))), "html", null, true);
            echo "\"><span
                                class=\"glyphicon glyphicon-pencil text-warning\"></span></a>
                </td>
                <td class=\"text-center\">
                    ";
            // line 48
            if ((($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "id") != 1) && ($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "id") != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id")))) {
                // line 49
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageusersdelete", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "id"))), "html", null, true);
                echo "\"
                           onclick=\"return confirm('Attention, êtes-vous sûr de vouloir supprimer l\\'utilisateur ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "username"), "html", null, true);
                echo " ?')\"><span
                                    class=\"glyphicon glyphicon-remove text-danger\"></span></a>
                    ";
            } else {
                // line 53
                echo "                        <span class=\"glyphicon glyphicon-ban-circle text-danger\"></span>
                    ";
            }
            // line 55
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
    <a class=\"btn btn-default\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('.role_tooltip').tooltip({html: true});
    </script>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/User:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  239 => 85,  226 => 82,  223 => 81,  210 => 78,  198 => 75,  191 => 73,  76 => 20,  180 => 67,  155 => 47,  197 => 64,  192 => 72,  188 => 71,  184 => 60,  178 => 64,  174 => 56,  170 => 55,  160 => 51,  83 => 24,  110 => 38,  58 => 13,  126 => 41,  96 => 40,  134 => 44,  172 => 63,  150 => 47,  146 => 56,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 74,  190 => 94,  148 => 63,  124 => 38,  120 => 38,  157 => 55,  113 => 33,  97 => 33,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 77,  165 => 58,  161 => 57,  152 => 52,  52 => 11,  129 => 37,  118 => 52,  114 => 35,  90 => 31,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 70,  185 => 101,  181 => 99,  175 => 63,  167 => 64,  127 => 55,  74 => 20,  23 => 1,  84 => 32,  77 => 21,  65 => 13,  34 => 4,  137 => 60,  104 => 36,  100 => 30,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 79,  177 => 65,  169 => 60,  140 => 48,  132 => 47,  128 => 40,  111 => 40,  107 => 30,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 83,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 72,  204 => 117,  179 => 69,  159 => 82,  143 => 42,  135 => 40,  131 => 38,  119 => 35,  108 => 50,  102 => 35,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 27,  89 => 25,  85 => 27,  79 => 25,  75 => 19,  68 => 18,  56 => 12,  50 => 11,  29 => 5,  87 => 27,  72 => 25,  55 => 12,  21 => 2,  26 => 6,  98 => 29,  93 => 32,  88 => 24,  78 => 22,  46 => 8,  27 => 4,  40 => 5,  44 => 8,  35 => 4,  31 => 3,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 71,  183 => 68,  171 => 65,  166 => 53,  163 => 52,  158 => 56,  156 => 50,  151 => 46,  142 => 49,  138 => 42,  136 => 42,  123 => 47,  121 => 46,  117 => 32,  115 => 35,  105 => 46,  101 => 48,  91 => 27,  69 => 17,  66 => 16,  62 => 16,  49 => 9,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 69,  182 => 71,  176 => 65,  173 => 65,  168 => 86,  164 => 63,  162 => 66,  154 => 55,  149 => 57,  147 => 50,  144 => 51,  141 => 44,  133 => 44,  130 => 43,  125 => 39,  122 => 32,  116 => 39,  112 => 51,  109 => 34,  106 => 32,  103 => 29,  99 => 29,  95 => 28,  92 => 26,  86 => 30,  82 => 26,  80 => 21,  73 => 17,  64 => 16,  60 => 16,  57 => 13,  54 => 14,  51 => 13,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
