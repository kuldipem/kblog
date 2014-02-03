<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_0f40b8e82293ba8dab5186948973ff05921066311ddc94287198dcb949609767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 57,  321 => 123,  318 => 122,  316 => 121,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 95,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  215 => 78,  210 => 75,  191 => 69,  185 => 68,  153 => 56,  145 => 52,  110 => 77,  194 => 87,  186 => 82,  170 => 74,  160 => 58,  150 => 55,  139 => 60,  129 => 57,  84 => 39,  65 => 30,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 112,  293 => 109,  289 => 112,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  197 => 70,  174 => 64,  165 => 59,  148 => 60,  134 => 59,  127 => 54,  113 => 41,  74 => 34,  52 => 21,  53 => 10,  37 => 18,  23 => 18,  34 => 26,  100 => 36,  81 => 24,  58 => 18,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 65,  169 => 66,  140 => 55,  132 => 58,  128 => 49,  111 => 37,  107 => 36,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 84,  217 => 79,  208 => 68,  204 => 73,  179 => 66,  159 => 61,  143 => 59,  135 => 53,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 19,  67 => 28,  63 => 50,  59 => 49,  47 => 21,  28 => 13,  201 => 72,  196 => 90,  183 => 82,  171 => 63,  166 => 71,  163 => 62,  158 => 62,  156 => 57,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  123 => 54,  121 => 46,  117 => 51,  115 => 43,  105 => 47,  91 => 34,  69 => 25,  62 => 29,  49 => 21,  101 => 73,  94 => 35,  89 => 35,  85 => 34,  79 => 18,  75 => 17,  68 => 31,  56 => 24,  50 => 22,  29 => 15,  87 => 25,  72 => 56,  66 => 24,  55 => 14,  41 => 18,  21 => 11,  98 => 44,  93 => 68,  88 => 6,  78 => 32,  46 => 35,  32 => 15,  27 => 13,  43 => 20,  40 => 13,  44 => 19,  35 => 16,  31 => 15,  25 => 12,  38 => 17,  26 => 20,  24 => 12,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 65,  173 => 65,  168 => 60,  164 => 59,  162 => 71,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 34,  106 => 33,  103 => 46,  99 => 31,  95 => 43,  92 => 21,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 17,  60 => 15,  57 => 22,  54 => 16,  51 => 13,  48 => 40,  45 => 19,  42 => 18,  39 => 9,  36 => 17,  33 => 6,  30 => 14,);
    }
}
