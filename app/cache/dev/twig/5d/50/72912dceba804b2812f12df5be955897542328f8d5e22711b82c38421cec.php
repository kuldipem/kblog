<?php

/* CoreBundle::frontend.html.twig */
class __TwigTemplate_5d5072912dceba804b2812f12df5be955897542328f8d5e22711b82c38421cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'baseJavascripts' => array($this, 'block_baseJavascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
        ";
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700\" rel=\"stylesheet\" type=\"text/css\" />

            ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "19fd17d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_style_1.css");
            // line 14
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_bootstrap_2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_font-awesome_3.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_responsive_4.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_colors_5.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d_tipsy_6.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        } else {
            // asset "19fd17d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/19fd17d.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        <link rel=\"stylesheet\" media=\"only screen and (-webkit-min-device-pixel-ratio: 2)\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CoreBundle/css/retina.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 19
    public function block_baseJavascripts($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->displayParentBlock("baseJavascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["jquery_cdn_url"]) ? $context["jquery_cdn_url"] : $this->getContext($context, "jquery_cdn_url")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>
            <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
        <![endif]-->
        ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "247de94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_custom_1.js");
            // line 26
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_favico_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery-transit_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.camera_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.countdown_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.elastic_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.gmap_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.kwicks_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.layerslider_10.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.nivo_11.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.refine_12.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.themepunch.plugins_13.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.themepunch.revolution_14.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_layerslider.transitions_15.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_plugins_16.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_switcher_17.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "247de94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "           ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "CoreBundle::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 31,  229 => 30,  225 => 28,  111 => 25,  99 => 20,  96 => 19,  89 => 16,  35 => 4,  30 => 3,  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  830 => 47,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  230 => 165,  134 => 70,  132 => 67,  115 => 26,  112 => 50,  110 => 47,  104 => 21,  101 => 42,  65 => 9,  45 => 14,  41 => 7,  36 => 3,  33 => 2,);
    }
}
