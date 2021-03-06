<?php

/* AllotoolsFaqBundle:Admin/Servers:affiche.html.twig */
class __TwigTemplate_a872c6927ce7baea87a2bcaf5baa616fdf3547b556f47cac5b8fe9631ca64445 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("allotools_faq_manageserversadd");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter un serveur</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("allotools_faq_updateall");
        echo "\"><span class=\"glyphicon glyphicon-repeat\"></span> Mettre tous les serveurs à jour</a>
    <h3>Liste des serveurs</h3>
    <table class=\"table table-bordered table-striped table-hover text-left\">
        <thead class=\"bg-info\">
            <tr>
                <th>Libéllé</th> <th>Hôte</th> <th>Login</th> <th>Mot de passe</th> <th>Nom de la bdd</th> <th>Table</th>
                <th>Type de bdd</th> <th>Service à instancier</th> <th class=\"text-center\">Modifier</th> <th class=\"text-center\">Supprimer</th> <th class=\"text-center\">Mettre à jour</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "lib"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "host"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "user"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "pwd"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "dbname"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "tbname"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "typebdd"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "typeservice"), "html", null, true);
            echo "</td>
                <td class=\"text-center\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageserversedit", array("id" => $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil text-warning\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageserversdelete", array("id" => $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Attention, êtes-vous sûr de vouloir supprimer le serveur ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "lib"), "html", null, true);
            echo " ?')\"><span class=\"glyphicon glyphicon-remove text-danger\"></span></a></td>
                <td class=\"text-center\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("allotools_faq_manageserversupdate", array("id" => $this->getAttribute((isset($context["server"]) ? $context["server"] : null), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-refresh text-success\"></span></a></td>
             </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    <div class=\"alert\">
        <a class=\"btn btn-default\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("allotools_faq_admin");
        echo "\">Retour</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AllotoolsFaqBundle:Admin/Servers:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  110 => 33,  58 => 13,  126 => 61,  96 => 40,  134 => 44,  172 => 63,  150 => 53,  146 => 49,  139 => 49,  447 => 287,  308 => 151,  300 => 150,  287 => 143,  249 => 123,  218 => 105,  205 => 97,  194 => 95,  190 => 94,  148 => 63,  124 => 36,  120 => 38,  157 => 51,  113 => 36,  97 => 30,  377 => 224,  286 => 136,  282 => 135,  277 => 133,  211 => 103,  207 => 102,  165 => 85,  161 => 57,  152 => 52,  52 => 11,  129 => 41,  118 => 35,  114 => 34,  90 => 28,  265 => 127,  261 => 126,  257 => 125,  253 => 127,  248 => 126,  245 => 125,  231 => 112,  228 => 6,  222 => 105,  216 => 132,  206 => 119,  185 => 101,  181 => 99,  175 => 97,  167 => 94,  127 => 40,  74 => 26,  23 => 1,  84 => 32,  77 => 18,  65 => 13,  34 => 4,  137 => 60,  104 => 31,  100 => 31,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 294,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 231,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 147,  285 => 89,  283 => 88,  278 => 86,  268 => 131,  264 => 84,  258 => 125,  252 => 124,  247 => 78,  241 => 117,  229 => 107,  220 => 70,  214 => 104,  177 => 65,  169 => 95,  140 => 55,  132 => 46,  128 => 44,  111 => 40,  107 => 35,  61 => 15,  273 => 132,  269 => 128,  254 => 92,  246 => 115,  243 => 88,  240 => 86,  238 => 117,  235 => 113,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 117,  179 => 69,  159 => 82,  143 => 48,  135 => 67,  131 => 52,  119 => 42,  108 => 35,  102 => 31,  71 => 22,  67 => 15,  63 => 31,  59 => 13,  47 => 9,  38 => 6,  94 => 29,  89 => 28,  85 => 27,  79 => 25,  75 => 24,  68 => 18,  56 => 9,  50 => 11,  29 => 5,  87 => 27,  72 => 20,  55 => 12,  21 => 2,  26 => 6,  98 => 30,  93 => 38,  88 => 28,  78 => 22,  46 => 7,  27 => 4,  40 => 7,  44 => 8,  35 => 4,  31 => 3,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 56,  156 => 66,  151 => 52,  142 => 47,  138 => 42,  136 => 45,  123 => 47,  121 => 46,  117 => 44,  115 => 35,  105 => 46,  101 => 32,  91 => 34,  69 => 17,  66 => 32,  62 => 14,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 86,  164 => 56,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 44,  133 => 39,  130 => 41,  125 => 39,  122 => 39,  116 => 39,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 29,  95 => 35,  92 => 29,  86 => 27,  82 => 26,  80 => 38,  73 => 17,  64 => 16,  60 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
