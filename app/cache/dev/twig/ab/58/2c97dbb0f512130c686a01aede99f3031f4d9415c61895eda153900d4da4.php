<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_ab582c97dbb0f512130c686a01aede99f3031f4d9415c61895eda153900d4da4 extends Twig_Template
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
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 123,  318 => 122,  316 => 121,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 95,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  215 => 78,  210 => 75,  191 => 69,  185 => 68,  153 => 56,  110 => 40,  194 => 87,  186 => 82,  170 => 74,  160 => 58,  150 => 55,  129 => 57,  84 => 39,  65 => 30,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 112,  293 => 109,  289 => 112,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  197 => 70,  174 => 64,  165 => 59,  148 => 60,  134 => 59,  127 => 54,  113 => 41,  53 => 10,  23 => 12,  34 => 16,  100 => 36,  81 => 24,  58 => 18,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 65,  169 => 66,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 84,  217 => 79,  208 => 68,  204 => 73,  179 => 66,  159 => 61,  143 => 59,  135 => 53,  119 => 43,  102 => 37,  71 => 19,  67 => 28,  63 => 15,  59 => 23,  28 => 14,  201 => 72,  196 => 90,  183 => 82,  171 => 63,  166 => 71,  163 => 62,  158 => 62,  156 => 57,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 51,  105 => 47,  91 => 34,  62 => 29,  49 => 21,  94 => 35,  89 => 35,  85 => 34,  75 => 17,  68 => 31,  56 => 24,  87 => 25,  21 => 12,  93 => 29,  88 => 6,  78 => 32,  46 => 11,  27 => 13,  44 => 19,  31 => 15,  25 => 12,  38 => 17,  26 => 13,  24 => 13,  19 => 11,  79 => 18,  72 => 22,  69 => 25,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 40,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 44,  96 => 31,  83 => 25,  74 => 34,  66 => 24,  55 => 14,  52 => 21,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 65,  173 => 65,  168 => 60,  164 => 59,  162 => 71,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 34,  106 => 36,  103 => 46,  99 => 31,  95 => 43,  92 => 21,  86 => 28,  82 => 33,  80 => 19,  73 => 29,  64 => 17,  60 => 15,  57 => 22,  54 => 16,  51 => 13,  48 => 12,  45 => 19,  42 => 18,  39 => 9,  36 => 17,  33 => 6,  30 => 14,);
    }
}
