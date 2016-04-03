<?php

/* AllotoolsFaqBundle:Admin/Arbres:affiche.html.twig */
class __TwigTemplate_180c859b9124f3f9595566bfadd34d86593cae6fd923fbd0aca9370baea1b572 extends Twig_Template
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

            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_ajoute");
        echo "\" class=\"btn btn-success\">
                    <span class=\"glyphicon glyphicon-plus-sign\"></span>
                    Créer un arbre
                </a>

            <h3>Liste des arbres</h3>
            <table class=\"table table-bordered table-hover table-striped text-left\">
                <thead class=\"bg-info\">
                    <tr>
                        <th>Libéllé</th>
                        <th>Catégorie</th>

                        <th class=\"text-center\">Complet</th>
                        <th class=\"text-center\">Modifier</th>
                        <th class=\"text-center\">Supprimer</th>

                    </tr>
                </thead>
                <tbody>
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arbres"]) ? $context["arbres"] : $this->getContext($context, "arbres")));
        foreach ($context['_seq'] as $context["_key"] => $context["arbre"]) {
            // line 35
            echo "                    <tr>

                            <td >";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "libelle"), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "categorie"), "lib"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                ";
            // line 40
            if ($this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "actif")) {
                // line 41
                echo "                                    <span class=\"text-success glyphicon glyphicon-thumbs-up\"></span>
                                ";
            } else {
                // line 43
                echo "                                    <span class=\"text-danger glyphicon glyphicon-thumbs-down\"></span>
                                ";
            }
            // line 45
            echo "                            </td>
                            <td class=\"text-center\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_modifie", array("id" => $this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil text-warning\"></span></a></td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manage_arbres_supprime", array("id" => $this->getAttribute((isset($context["arbre"]) ? $context["arbre"] : $this->getContext($context, "arbre")), "id"))), "html", null, true);
            echo "\"
                                onclick=\"return confirm('Attention, êtes-vous sûr de vouloir supprimer cet arbre ?')\">
                                    <span class=\"glyphicon glyphicon-remove text-danger\">

                                    </span>
                                </a>
                            </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </tbody>
            </table>
            <br>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\" class=\"btn btn-default\">Retour</a>

    ";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Arbres:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  104 => 43,  100 => 41,  81 => 34,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 15,  38 => 6,  94 => 28,  89 => 37,  85 => 35,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 38,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 46,  108 => 45,  101 => 32,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 12,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 4,);
    }
}
