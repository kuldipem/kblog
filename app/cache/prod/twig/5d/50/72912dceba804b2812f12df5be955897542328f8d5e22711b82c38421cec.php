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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_0") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_style_1.css");
            // line 14
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_1") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_bootstrap_2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_2") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_font-awesome_3.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_3") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_responsive_4.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_4") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_colors_5.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "19fd17d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d_5") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d_tipsy_6.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        } else {
            // asset "19fd17d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_19fd17d") : $this->env->getExtension('assets')->getAssetUrl("css/19fd17d.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["jquery_cdn_url"]) ? $context["jquery_cdn_url"] : null), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>
            <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
        <![endif]-->
        ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "247de94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_0") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_custom_1.js");
            // line 26
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_1") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_favico_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_2") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery-transit_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_3") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.camera_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_4") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.countdown_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_5") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.elastic_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_6") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.gmap_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_7") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_8") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.kwicks_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_9") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.layerslider_10.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_10") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.nivo_11.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_11") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.refine_12.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_12") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.themepunch.plugins_13.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_13") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_jquery.themepunch.revolution_14.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_14") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_layerslider.transitions_15.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_15") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_plugins_16.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_16") : $this->env->getExtension('assets')->getAssetUrl("js/247de94_part_1_switcher_17.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "247de94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94") : $this->env->getExtension('assets')->getAssetUrl("js/247de94.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        return array (  830 => 270,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 257,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 193,  576 => 186,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  508 => 153,  505 => 152,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 140,  460 => 139,  454 => 136,  438 => 133,  410 => 165,  394 => 126,  373 => 118,  190 => 179,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 145,  478 => 144,  473 => 110,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 128,  412 => 174,  401 => 141,  356 => 121,  334 => 119,  328 => 116,  320 => 113,  317 => 70,  307 => 82,  206 => 58,  198 => 55,  195 => 54,  172 => 46,  96 => 19,  392 => 104,  389 => 130,  377 => 99,  349 => 90,  332 => 118,  324 => 82,  287 => 68,  282 => 66,  276 => 57,  234 => 48,  231 => 33,  218 => 59,  83 => 86,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  527 => 159,  522 => 156,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 129,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 120,  336 => 99,  333 => 98,  329 => 75,  266 => 52,  244 => 65,  233 => 62,  205 => 56,  200 => 55,  188 => 178,  178 => 123,  157 => 64,  118 => 46,  90 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 59,  274 => 77,  263 => 55,  236 => 35,  216 => 28,  192 => 53,  120 => 47,  70 => 29,  77 => 25,  181 => 80,  175 => 122,  161 => 71,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 149,  489 => 136,  483 => 129,  479 => 153,  475 => 143,  462 => 108,  448 => 140,  421 => 126,  414 => 98,  408 => 119,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 123,  375 => 106,  372 => 105,  354 => 92,  348 => 80,  342 => 79,  325 => 93,  313 => 90,  310 => 89,  308 => 67,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  180 => 124,  155 => 38,  146 => 47,  137 => 59,  126 => 55,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 213,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 195,  585 => 347,  581 => 182,  579 => 187,  577 => 341,  571 => 178,  567 => 173,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 129,  422 => 134,  420 => 112,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 77,  331 => 187,  326 => 83,  304 => 66,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 103,  114 => 92,  104 => 21,  97 => 33,  124 => 52,  76 => 28,  321 => 91,  318 => 80,  316 => 89,  288 => 60,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  253 => 148,  250 => 93,  237 => 64,  232 => 31,  222 => 30,  215 => 78,  210 => 22,  191 => 69,  185 => 177,  153 => 49,  145 => 60,  110 => 46,  194 => 181,  186 => 51,  170 => 55,  160 => 59,  150 => 48,  139 => 59,  129 => 56,  84 => 29,  65 => 26,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 78,  327 => 74,  323 => 114,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 51,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 28,  213 => 126,  211 => 81,  202 => 77,  197 => 54,  174 => 47,  165 => 52,  148 => 101,  134 => 45,  127 => 56,  113 => 42,  74 => 82,  52 => 17,  53 => 22,  37 => 12,  23 => 13,  34 => 15,  100 => 41,  81 => 26,  58 => 23,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 130,  398 => 128,  393 => 132,  387 => 127,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 116,  362 => 94,  360 => 109,  355 => 101,  341 => 131,  337 => 87,  322 => 72,  314 => 85,  312 => 68,  309 => 76,  305 => 74,  298 => 63,  294 => 61,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 49,  252 => 70,  247 => 66,  241 => 37,  229 => 30,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 47,  128 => 47,  111 => 25,  107 => 36,  61 => 24,  273 => 56,  269 => 75,  254 => 102,  246 => 66,  243 => 38,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 32,  224 => 60,  221 => 67,  219 => 29,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 32,  67 => 26,  63 => 22,  59 => 26,  47 => 17,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 102,  166 => 114,  163 => 68,  158 => 75,  156 => 93,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 95,  117 => 93,  115 => 26,  105 => 45,  91 => 31,  69 => 55,  62 => 25,  49 => 18,  101 => 40,  94 => 90,  89 => 16,  85 => 87,  79 => 35,  75 => 34,  68 => 31,  56 => 21,  50 => 22,  29 => 16,  87 => 28,  72 => 56,  66 => 30,  55 => 21,  41 => 7,  21 => 11,  98 => 39,  93 => 39,  88 => 30,  78 => 84,  46 => 19,  32 => 21,  27 => 16,  43 => 15,  40 => 19,  44 => 21,  35 => 4,  31 => 17,  25 => 12,  38 => 19,  26 => 14,  24 => 13,  22 => 11,  19 => 11,  209 => 96,  203 => 277,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 116,  168 => 44,  164 => 113,  162 => 40,  154 => 67,  149 => 62,  147 => 69,  144 => 99,  141 => 98,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 39,  112 => 38,  109 => 37,  106 => 44,  103 => 34,  99 => 20,  95 => 41,  92 => 35,  86 => 17,  82 => 36,  80 => 25,  73 => 27,  64 => 25,  60 => 26,  57 => 23,  54 => 26,  51 => 21,  48 => 22,  45 => 14,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 3,);
    }
}
