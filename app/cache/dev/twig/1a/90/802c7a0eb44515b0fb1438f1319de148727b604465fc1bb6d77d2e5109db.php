<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_1a90802c7a0eb44515b0fb1438f1319de148727b604465fc1bb6d77d2e5109db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  270 => 102,  226 => 84,  207 => 75,  378 => 157,  345 => 147,  340 => 145,  290 => 119,  259 => 103,  810 => 492,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  746 => 478,  727 => 476,  706 => 473,  702 => 472,  690 => 469,  686 => 468,  677 => 465,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  363 => 153,  357 => 123,  212 => 78,  672 => 345,  664 => 342,  651 => 337,  644 => 335,  640 => 334,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  606 => 449,  591 => 309,  569 => 300,  563 => 298,  559 => 296,  519 => 278,  515 => 276,  497 => 267,  471 => 253,  465 => 249,  436 => 235,  428 => 230,  380 => 160,  376 => 205,  367 => 339,  353 => 328,  297 => 104,  295 => 178,  830 => 270,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 491,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 485,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 471,  687 => 221,  684 => 220,  682 => 467,  679 => 466,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 327,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 308,  576 => 186,  552 => 293,  549 => 411,  546 => 165,  540 => 162,  508 => 153,  505 => 270,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 248,  460 => 139,  454 => 244,  438 => 236,  410 => 221,  394 => 168,  373 => 156,  190 => 76,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 291,  529 => 409,  524 => 162,  517 => 404,  485 => 145,  478 => 144,  473 => 254,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 224,  412 => 222,  401 => 172,  356 => 121,  334 => 141,  328 => 139,  320 => 127,  317 => 185,  307 => 128,  206 => 58,  198 => 55,  195 => 54,  172 => 64,  392 => 104,  389 => 160,  377 => 99,  349 => 90,  332 => 116,  324 => 113,  287 => 68,  282 => 66,  276 => 111,  234 => 48,  231 => 83,  218 => 59,  12 => 34,  710 => 475,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 464,  652 => 193,  649 => 462,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 317,  593 => 310,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 284,  530 => 168,  527 => 408,  522 => 406,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 246,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 214,  397 => 213,  395 => 118,  385 => 116,  371 => 156,  352 => 91,  344 => 119,  339 => 120,  336 => 99,  333 => 98,  329 => 131,  266 => 52,  244 => 65,  233 => 87,  205 => 108,  200 => 72,  188 => 90,  178 => 66,  118 => 49,  90 => 27,  306 => 286,  303 => 122,  300 => 121,  286 => 112,  280 => 59,  274 => 110,  263 => 95,  236 => 35,  216 => 79,  192 => 53,  70 => 26,  77 => 25,  181 => 65,  175 => 65,  161 => 63,  553 => 186,  548 => 292,  541 => 290,  537 => 178,  525 => 280,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 268,  496 => 149,  489 => 262,  483 => 258,  479 => 256,  475 => 143,  462 => 202,  448 => 240,  421 => 126,  414 => 98,  408 => 176,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 159,  375 => 106,  372 => 105,  354 => 92,  348 => 140,  342 => 137,  325 => 129,  313 => 183,  310 => 89,  308 => 287,  302 => 125,  296 => 121,  292 => 135,  255 => 101,  184 => 63,  180 => 124,  155 => 47,  146 => 47,  137 => 59,  126 => 55,  694 => 470,  685 => 406,  680 => 403,  678 => 202,  668 => 344,  663 => 199,  658 => 391,  654 => 389,  647 => 336,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 319,  599 => 184,  592 => 195,  585 => 307,  581 => 305,  579 => 187,  577 => 303,  571 => 178,  567 => 414,  557 => 295,  550 => 185,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  518 => 307,  514 => 160,  509 => 272,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 195,  429 => 188,  424 => 129,  422 => 184,  420 => 112,  415 => 180,  396 => 234,  383 => 207,  366 => 210,  361 => 146,  346 => 102,  335 => 134,  331 => 140,  326 => 138,  304 => 181,  291 => 102,  272 => 158,  267 => 101,  242 => 113,  152 => 46,  114 => 92,  104 => 31,  97 => 16,  124 => 52,  76 => 28,  321 => 135,  318 => 111,  316 => 89,  288 => 118,  284 => 67,  279 => 65,  275 => 105,  256 => 96,  253 => 100,  250 => 93,  237 => 64,  232 => 88,  222 => 83,  215 => 78,  210 => 77,  191 => 67,  185 => 66,  153 => 56,  110 => 46,  194 => 70,  186 => 51,  170 => 56,  160 => 59,  150 => 55,  129 => 56,  84 => 25,  65 => 11,  358 => 151,  351 => 141,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 125,  301 => 80,  299 => 72,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 59,  265 => 105,  262 => 98,  260 => 70,  257 => 149,  251 => 67,  248 => 94,  239 => 97,  228 => 68,  225 => 28,  213 => 78,  211 => 81,  202 => 94,  197 => 71,  174 => 65,  165 => 60,  148 => 101,  134 => 54,  127 => 35,  113 => 40,  53 => 15,  23 => 1,  34 => 5,  100 => 36,  81 => 24,  58 => 18,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 215,  398 => 128,  393 => 211,  387 => 164,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 197,  362 => 94,  360 => 109,  355 => 329,  341 => 118,  337 => 87,  322 => 72,  314 => 85,  312 => 124,  309 => 129,  305 => 74,  298 => 120,  294 => 61,  285 => 175,  283 => 115,  278 => 106,  268 => 58,  264 => 84,  258 => 94,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 48,  169 => 69,  140 => 58,  132 => 47,  128 => 47,  107 => 36,  61 => 23,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 65,  238 => 139,  235 => 89,  230 => 61,  227 => 86,  224 => 81,  221 => 67,  219 => 29,  217 => 79,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 45,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 21,  59 => 13,  28 => 3,  201 => 106,  196 => 92,  183 => 125,  171 => 102,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 58,  138 => 46,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 14,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  93 => 28,  88 => 32,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  25 => 1,  38 => 6,  26 => 3,  24 => 2,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 15,  40 => 8,  37 => 6,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 26,  111 => 47,  108 => 33,  101 => 43,  98 => 29,  96 => 30,  83 => 30,  74 => 19,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 12,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 113,  162 => 59,  154 => 60,  149 => 62,  147 => 54,  144 => 42,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 34,  99 => 31,  95 => 34,  92 => 28,  86 => 17,  82 => 28,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 8,  42 => 12,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
