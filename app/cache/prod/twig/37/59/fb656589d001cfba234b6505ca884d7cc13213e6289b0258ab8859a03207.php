<?php

/* UIBundle:UI:switcher.html.twig */
class __TwigTemplate_3759fb656589d001cfba234b6505ca884d7cc13213e6289b0258ab8859a03207 extends Twig_Template
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
        // line 1
        echo "<div class=\"switcher clearfix\">

    <div class=\"switcher-head\">
    
        <span>Choose your Style</span>
    
        <div class=\"switcher-trigger icon-magic\"></div>
    
    </div>
    
    <div class=\"switcher-body clearfix\">
    
        <div class=\"switcher-op-layout\">
        
            <select id=\"switcher-option-layout\" name=\"switcher-option-layout\" class=\"input-block-level nobottommargin\">
            
                <option value=\"layout-boxed\">Boxed</option>
                <option value=\"layout-full\" selected=\"selected\">Full Width</option>
            
            </select>
        
        </div>
        
        <div class=\"line\"></div>
        
        <div class=\"switcher-op-colors\">
        
            <p><strong>Predefined Colors:</strong></p>
        
            <ul id=\"switcher-option-color\" class=\"switcher-op-selectors clearfix\">
            
                <li style=\"background-color: #D13A3F;\" data-color=\"D13A3F\"></li>
                <li style=\"background-color: #857D50;\" data-color=\"857D50\"></li>
                <li style=\"background-color: #774095;\" data-color=\"774095\"></li>
                <li style=\"background-color: #f96e5b;\" data-color=\"f96e5b\"></li>
                <li style=\"background-color: #28AE91;\" data-color=\"28AE91\"></li>
                <li style=\"background-color: #3CB026;\" data-color=\"3CB026\"></li>
                <li style=\"background-color: #B07926;\" data-color=\"B07926\"></li>
                <li style=\"background-color: #555555;\" data-color=\"555555\"></li>
            
            </ul>
            
            <small>* You can use Unlimited Colors</small>
        
        </div>
        
        <div class=\"line\"></div>
        
        <div class=\"switcher-op-patterns\">
        
            <p><strong>Predefined Patterns:</strong></p>
        
            <ul id=\"switcher-option-pattern\" class=\"switcher-op-selectors clearfix\">
            
                <li style=\"background-image: url('images/patterns/light/pattern1.png');\" data-url=\"images/patterns/light/pattern1.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern9.png');\" data-url=\"images/patterns/light/pattern9.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern3.png');\" data-url=\"images/patterns/light/pattern3.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern4.png');\" data-url=\"images/patterns/light/pattern4.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern10.png');\" data-url=\"images/patterns/light/pattern10.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern6.png');\" data-url=\"images/patterns/light/pattern6.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern7.png');\" data-url=\"images/patterns/light/pattern7.png\"></li>
                <li style=\"background-image: url('images/patterns/light/pattern8.png');\" data-url=\"images/patterns/light/pattern8.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern1.png');\" data-url=\"images/patterns/dark/pattern1.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern2.png');\" data-url=\"images/patterns/dark/pattern2.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern3.png');\" data-url=\"images/patterns/dark/pattern3.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern4.png');\" data-url=\"images/patterns/dark/pattern4.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern5.png');\" data-url=\"images/patterns/dark/pattern5.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern6.png');\" data-url=\"images/patterns/dark/pattern6.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern7.png');\" data-url=\"images/patterns/dark/pattern7.png\"></li>
                <li style=\"background-image: url('images/patterns/dark/pattern8.png');\" data-url=\"images/patterns/dark/pattern8.png\"></li>
            
            </ul>
            
            <small>* Only for Boxed Layout</small>
        
        </div>
        
        <div class=\"line\"></div>
        
        <div class=\"switcher-op-bgimages\">
        
            <p><strong>Background Images:</strong></p>
        
            <ul id=\"switcher-option-bgimage\" class=\"switcher-op-selectors clearfix\">
            
                <li data-url=\"demo/bgimages/1.jpg\"><img src=\"demo/bgimages/small/1.jpg\" alt=\"Background Image 1\" title=\"Background Image 1\" /></li>
                <li data-url=\"demo/bgimages/2.jpg\"><img src=\"demo/bgimages/small/2.jpg\" alt=\"Background Image 2\" title=\"Background Image 2\" /></li>
                <li data-url=\"demo/bgimages/3.jpg\"><img src=\"demo/bgimages/small/3.jpg\" alt=\"Background Image 3\" title=\"Background Image 3\" /></li>
                <li data-url=\"demo/bgimages/4.jpg\"><img src=\"demo/bgimages/small/4.jpg\" alt=\"Background Image 4\" title=\"Background Image 4\" /></li>
                <li data-url=\"demo/bgimages/5.jpg\"><img src=\"demo/bgimages/small/5.jpg\" alt=\"Background Image 5\" title=\"Background Image 5\" /></li>
                <li data-url=\"demo/bgimages/6.jpg\"><img src=\"demo/bgimages/small/6.jpg\" alt=\"Background Image 6\" title=\"Background Image 6\" /></li>
                <li data-url=\"demo/bgimages/7.jpg\"><img src=\"demo/bgimages/small/7.jpg\" alt=\"Background Image 7\" title=\"Background Image 7\" /></li>
                <li data-url=\"demo/bgimages/8.jpg\"><img src=\"demo/bgimages/small/8.jpg\" alt=\"Background Image 8\" title=\"Background Image 8\" /></li>
            
            </ul>
            
            <small>* Only for Boxed Layout</small>
        
        </div>
        
        <div class=\"line\"></div>
        
        <div id=\"switcher-option-footer\" class=\"switcher-op-footerc clearfix\">
        
            <a href=\"#\" data-color=\"dark\" class=\"swfooter-active\">Dark Footer</a>
            <a href=\"#\" data-color=\"light\">Light Footer</a>
        
        </div>
    
    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "UIBundle:UI:switcher.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  830 => 270,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 257,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 193,  576 => 186,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  508 => 153,  505 => 152,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 140,  460 => 139,  454 => 136,  438 => 133,  410 => 165,  394 => 126,  373 => 118,  190 => 179,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 145,  478 => 144,  473 => 110,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 128,  412 => 174,  401 => 141,  356 => 121,  334 => 119,  328 => 116,  320 => 113,  317 => 70,  307 => 82,  206 => 58,  198 => 55,  195 => 54,  172 => 46,  96 => 19,  392 => 104,  389 => 130,  377 => 99,  349 => 90,  332 => 118,  324 => 82,  287 => 68,  282 => 66,  276 => 57,  234 => 48,  231 => 33,  218 => 59,  83 => 86,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  527 => 159,  522 => 156,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 129,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 120,  336 => 99,  333 => 98,  329 => 75,  266 => 52,  244 => 65,  233 => 62,  205 => 56,  200 => 55,  188 => 178,  178 => 123,  157 => 64,  118 => 46,  90 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 59,  274 => 77,  263 => 55,  236 => 35,  216 => 28,  192 => 53,  120 => 47,  70 => 29,  77 => 20,  181 => 80,  175 => 122,  161 => 71,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 149,  489 => 136,  483 => 129,  479 => 153,  475 => 143,  462 => 108,  448 => 140,  421 => 126,  414 => 98,  408 => 119,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 123,  375 => 106,  372 => 105,  354 => 92,  348 => 80,  342 => 79,  325 => 93,  313 => 90,  310 => 89,  308 => 67,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  180 => 124,  155 => 38,  146 => 47,  137 => 59,  126 => 55,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 213,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 195,  585 => 347,  581 => 182,  579 => 187,  577 => 341,  571 => 178,  567 => 173,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 129,  422 => 134,  420 => 112,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 77,  331 => 187,  326 => 83,  304 => 66,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 103,  114 => 92,  104 => 21,  97 => 16,  124 => 52,  76 => 28,  321 => 91,  318 => 80,  316 => 89,  288 => 60,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  253 => 148,  250 => 93,  237 => 64,  232 => 31,  222 => 30,  215 => 78,  210 => 22,  191 => 69,  185 => 177,  153 => 49,  145 => 60,  110 => 46,  194 => 181,  186 => 51,  170 => 55,  160 => 59,  150 => 48,  139 => 59,  129 => 56,  84 => 29,  65 => 5,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 78,  327 => 74,  323 => 114,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 51,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 28,  213 => 126,  211 => 81,  202 => 77,  197 => 54,  174 => 47,  165 => 52,  148 => 101,  134 => 45,  127 => 56,  113 => 42,  74 => 19,  52 => 22,  53 => 12,  37 => 12,  23 => 1,  34 => 6,  100 => 41,  81 => 26,  58 => 23,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 130,  398 => 128,  393 => 132,  387 => 127,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 116,  362 => 94,  360 => 109,  355 => 101,  341 => 131,  337 => 87,  322 => 72,  314 => 85,  312 => 68,  309 => 76,  305 => 74,  298 => 63,  294 => 61,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 49,  252 => 70,  247 => 66,  241 => 37,  229 => 30,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 47,  128 => 47,  111 => 25,  107 => 36,  61 => 24,  273 => 56,  269 => 75,  254 => 102,  246 => 66,  243 => 38,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 32,  224 => 60,  221 => 67,  219 => 29,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 8,  67 => 26,  63 => 22,  59 => 3,  47 => 17,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 102,  166 => 114,  163 => 68,  158 => 75,  156 => 93,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 95,  117 => 93,  115 => 26,  105 => 45,  91 => 31,  69 => 9,  62 => 4,  49 => 18,  101 => 40,  94 => 90,  89 => 16,  85 => 87,  79 => 35,  75 => 34,  68 => 31,  56 => 21,  50 => 19,  29 => 3,  87 => 14,  72 => 56,  66 => 30,  55 => 21,  41 => 7,  21 => 11,  98 => 39,  93 => 39,  88 => 30,  78 => 84,  46 => 19,  32 => 6,  27 => 2,  43 => 15,  40 => 11,  44 => 9,  35 => 5,  31 => 5,  25 => 1,  38 => 6,  26 => 5,  24 => 13,  22 => 11,  19 => 1,  209 => 96,  203 => 277,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 116,  168 => 44,  164 => 113,  162 => 40,  154 => 67,  149 => 62,  147 => 69,  144 => 99,  141 => 98,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 39,  112 => 87,  109 => 37,  106 => 44,  103 => 34,  99 => 20,  95 => 41,  92 => 15,  86 => 17,  82 => 11,  80 => 21,  73 => 27,  64 => 25,  60 => 26,  57 => 14,  54 => 26,  51 => 21,  48 => 10,  45 => 14,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 3,);
    }
}
