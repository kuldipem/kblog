<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_6f87246dbc300c3cc3eea037dce2b0a14bb3a5a2ea7d003f0670aebec956a47d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  76 => 57,  321 => 123,  318 => 122,  316 => 121,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 95,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  215 => 78,  210 => 75,  191 => 69,  185 => 68,  153 => 56,  145 => 52,  110 => 77,  194 => 87,  186 => 82,  170 => 74,  160 => 58,  150 => 55,  139 => 60,  129 => 57,  84 => 39,  65 => 30,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 112,  293 => 109,  289 => 112,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  197 => 70,  174 => 64,  165 => 59,  148 => 60,  134 => 59,  127 => 32,  113 => 41,  74 => 34,  52 => 17,  53 => 10,  37 => 18,  23 => 18,  34 => 16,  100 => 36,  81 => 25,  58 => 23,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 65,  169 => 66,  140 => 55,  132 => 58,  128 => 49,  111 => 37,  107 => 36,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 84,  217 => 79,  208 => 68,  204 => 73,  179 => 66,  159 => 61,  143 => 59,  135 => 35,  131 => 48,  119 => 28,  108 => 39,  102 => 37,  71 => 19,  67 => 28,  63 => 24,  59 => 49,  47 => 21,  28 => 14,  201 => 72,  196 => 90,  183 => 82,  171 => 63,  166 => 71,  163 => 62,  158 => 62,  156 => 57,  151 => 63,  142 => 59,  138 => 36,  136 => 56,  123 => 54,  121 => 46,  117 => 51,  115 => 43,  105 => 27,  91 => 34,  69 => 25,  62 => 29,  49 => 21,  101 => 73,  94 => 35,  89 => 35,  85 => 34,  79 => 18,  75 => 28,  68 => 31,  56 => 24,  50 => 22,  29 => 15,  87 => 25,  72 => 56,  66 => 25,  55 => 22,  41 => 18,  21 => 11,  98 => 44,  93 => 68,  88 => 6,  78 => 29,  46 => 35,  32 => 15,  27 => 13,  43 => 20,  40 => 13,  44 => 19,  35 => 16,  31 => 15,  25 => 12,  38 => 17,  26 => 20,  24 => 12,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 65,  173 => 65,  168 => 60,  164 => 59,  162 => 71,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 34,  106 => 33,  103 => 46,  99 => 26,  95 => 43,  92 => 21,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 13,  48 => 40,  45 => 19,  42 => 18,  39 => 9,  36 => 17,  33 => 6,  30 => 14,);
    }
}
