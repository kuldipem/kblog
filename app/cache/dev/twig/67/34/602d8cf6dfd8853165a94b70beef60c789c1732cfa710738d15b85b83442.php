<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6734602d8cf6dfd8853165a94b70beef60c789c1732cfa710738d15b85b83442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  441 => 196,  431 => 189,  270 => 102,  226 => 84,  207 => 75,  378 => 157,  345 => 147,  340 => 145,  290 => 119,  259 => 103,  810 => 492,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  746 => 478,  727 => 476,  706 => 473,  702 => 472,  690 => 469,  686 => 468,  677 => 465,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  363 => 153,  357 => 123,  212 => 78,  672 => 345,  664 => 342,  651 => 337,  644 => 335,  640 => 334,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  606 => 449,  591 => 309,  569 => 300,  563 => 298,  559 => 296,  519 => 278,  515 => 276,  497 => 267,  471 => 253,  465 => 249,  436 => 235,  428 => 230,  380 => 160,  376 => 205,  367 => 155,  353 => 149,  297 => 104,  295 => 178,  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  830 => 47,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 491,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 485,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 471,  687 => 221,  684 => 220,  682 => 467,  679 => 466,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 327,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 308,  576 => 186,  552 => 293,  549 => 411,  546 => 165,  540 => 162,  508 => 153,  505 => 270,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 248,  460 => 139,  454 => 244,  438 => 236,  410 => 221,  394 => 168,  373 => 156,  190 => 76,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 291,  529 => 409,  524 => 162,  517 => 404,  485 => 145,  478 => 144,  473 => 254,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 224,  412 => 222,  401 => 172,  356 => 121,  334 => 141,  328 => 139,  320 => 127,  317 => 185,  307 => 128,  206 => 58,  198 => 55,  195 => 54,  172 => 64,  392 => 104,  389 => 160,  377 => 99,  349 => 90,  332 => 116,  324 => 113,  287 => 68,  282 => 66,  276 => 111,  234 => 48,  231 => 83,  218 => 59,  12 => 34,  710 => 475,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 464,  652 => 193,  649 => 462,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 317,  593 => 310,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 284,  530 => 168,  527 => 408,  522 => 406,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 246,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 214,  397 => 213,  395 => 118,  385 => 116,  371 => 156,  352 => 91,  344 => 119,  339 => 120,  336 => 99,  333 => 98,  329 => 131,  266 => 52,  244 => 65,  233 => 87,  205 => 108,  200 => 72,  188 => 90,  178 => 66,  118 => 49,  90 => 27,  306 => 107,  303 => 122,  300 => 121,  286 => 112,  280 => 59,  274 => 110,  263 => 95,  236 => 35,  216 => 79,  192 => 53,  70 => 19,  77 => 20,  181 => 65,  175 => 65,  161 => 63,  553 => 186,  548 => 292,  541 => 290,  537 => 178,  525 => 280,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 268,  496 => 149,  489 => 262,  483 => 258,  479 => 256,  475 => 143,  462 => 202,  448 => 240,  421 => 126,  414 => 98,  408 => 176,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 159,  375 => 106,  372 => 105,  354 => 92,  348 => 140,  342 => 137,  325 => 129,  313 => 183,  310 => 89,  308 => 67,  302 => 125,  296 => 121,  292 => 135,  255 => 101,  184 => 63,  180 => 124,  155 => 47,  146 => 47,  137 => 59,  126 => 55,  694 => 470,  685 => 406,  680 => 403,  678 => 202,  668 => 344,  663 => 199,  658 => 391,  654 => 389,  647 => 336,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 319,  599 => 184,  592 => 195,  585 => 307,  581 => 305,  579 => 187,  577 => 303,  571 => 178,  567 => 414,  557 => 295,  550 => 185,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  518 => 307,  514 => 160,  509 => 272,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 195,  429 => 188,  424 => 129,  422 => 184,  420 => 112,  415 => 180,  396 => 234,  383 => 207,  366 => 210,  361 => 146,  346 => 102,  335 => 134,  331 => 140,  326 => 138,  304 => 181,  291 => 102,  272 => 158,  267 => 101,  242 => 113,  152 => 46,  114 => 92,  104 => 32,  97 => 16,  124 => 52,  76 => 25,  321 => 135,  318 => 111,  316 => 89,  288 => 118,  284 => 67,  279 => 65,  275 => 105,  256 => 96,  253 => 100,  250 => 93,  237 => 64,  232 => 88,  222 => 83,  215 => 78,  210 => 77,  191 => 67,  185 => 66,  153 => 56,  110 => 47,  194 => 70,  186 => 51,  170 => 56,  160 => 59,  150 => 55,  129 => 56,  84 => 24,  65 => 9,  358 => 151,  351 => 141,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 125,  301 => 80,  299 => 72,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 59,  265 => 105,  262 => 98,  260 => 70,  257 => 149,  251 => 67,  248 => 94,  239 => 97,  228 => 68,  225 => 28,  213 => 78,  211 => 81,  202 => 94,  197 => 71,  174 => 65,  165 => 60,  148 => 101,  134 => 54,  127 => 35,  113 => 48,  53 => 12,  23 => 13,  34 => 5,  100 => 39,  81 => 23,  58 => 25,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 215,  398 => 128,  393 => 211,  387 => 164,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 197,  362 => 94,  360 => 109,  355 => 143,  341 => 118,  337 => 87,  322 => 72,  314 => 85,  312 => 124,  309 => 129,  305 => 74,  298 => 120,  294 => 61,  285 => 175,  283 => 115,  278 => 106,  268 => 58,  264 => 84,  258 => 94,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 48,  169 => 69,  140 => 58,  132 => 67,  128 => 47,  107 => 36,  61 => 17,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 65,  238 => 139,  235 => 89,  230 => 165,  227 => 86,  224 => 81,  221 => 67,  219 => 29,  217 => 79,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 45,  119 => 40,  102 => 40,  71 => 8,  67 => 20,  63 => 18,  59 => 16,  28 => 3,  201 => 106,  196 => 92,  183 => 125,  171 => 102,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 58,  138 => 46,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  94 => 21,  89 => 16,  85 => 24,  75 => 19,  68 => 30,  56 => 21,  87 => 34,  21 => 11,  93 => 27,  88 => 32,  78 => 84,  46 => 13,  27 => 3,  44 => 10,  31 => 4,  25 => 1,  38 => 7,  26 => 2,  24 => 13,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 12,  22 => 11,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 52,  111 => 47,  108 => 42,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 82,  66 => 30,  55 => 13,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 5,  29 => 16,  209 => 96,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 113,  162 => 59,  154 => 60,  149 => 62,  147 => 54,  144 => 42,  141 => 51,  133 => 49,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 34,  99 => 31,  95 => 41,  92 => 43,  86 => 17,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 26,  57 => 14,  54 => 26,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
