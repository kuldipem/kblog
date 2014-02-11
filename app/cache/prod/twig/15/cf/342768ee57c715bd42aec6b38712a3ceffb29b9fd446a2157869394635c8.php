<?php

/* UIBundle:Slider:index.html.twig */
class __TwigTemplate_15cf342768ee57c715bd42aec6b38712a3ceffb29b9fd446a2157869394635c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "



";
        // line 5
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"sidebar col_last nobottommargin\">

    <div class=\"sidebar-widgets-wrap clearfix\">


        <div id=\"flickr_widget-1\" class=\"widget flickr-widget clearfix\">

            <h4 class=\"widget-title\">Flickr Photostream</h4>

            <div id=\"flickr_widget\" class=\"flickrfeed\" data-id=\"613394@N22\" data-count=\"9\" data-type=\"group\"></div>

        </div>

        <div id=\"twitter_widget-2\" class=\"widget twitter-widget clearfix\">

            <h4 class=\"widget-title\">Twitter Feed</h4>

            <script type=\"text/javascript\">

                jQuery(document).ready(function(\$) {
                    \$.getJSON('functions/twitter/tweets2687.html?username=envato', function(tweets) {
                        \$(\"#twitter_list_1\").html(sm_format_twitter(tweets));
                    });
                });

            </script>

            <ul id=\"twitter_list_1\">

                <li></li>

            </ul>

            <a class=\"twitter-follow-me ntip\" href=\"http://www.twitter.com/envato\" title=\"Follow @envato\">Follow us on Twitter</a>

            <div class=\"clear\"></div>

        </div>


        <div class=\"widget tabbed-widget clearfix\">


            <div class=\"tab_widget nobottommargin\" id=\"tabwidget-1\">

                <ul class=\"tabs\">
                    <li><a href=\"#tab-tab1\" data-href=\"#tab-tab1\">Popular</a></li>
                    <li><a href=\"#tab-tab2\" data-href=\"#tab-tab2\">Recent</a></li>
                    <li><a href=\"#tab-tab3\" data-href=\"#tab-tab3\"><i class=\"icon-comments-alt norightmargin\"></i></a></li>
                </ul>

                <div class=\"tab_container\">

                    <div id=\"tab-tab1\" class=\"tab_content clearfix\">

                        <ul class=\"sposts-list clearfix\">        

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/2.jpg\" width=\"64\" height=\"64\" alt=\"Post 2\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Donec sed odio dui</a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments-alt\"></i> 3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/3.jpg\" width=\"64\" height=\"64\" alt=\"Post 3\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Nullam id dolor id nibh</a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments-alt\"></i> 15 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/4.jpg\" width=\"64\" height=\"64\" alt=\"Post 4\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Lorem ipsum donec</a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments-alt\"></i> 12 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <div id=\"tab-tab2\" class=\"tab_content clearfix\">

                        <ul class=\"sposts-list clearfix\">        

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/1.jpg\" width=\"64\" height=\"64\" alt=\"Post 1\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Cras mattis consectetur </a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><i class=\"icon-calendar\"></i> 24th January</li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/6.jpg\" width=\"64\" height=\"64\" alt=\"Post 6\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Lorem ipsum donec</a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><i class=\"icon-calendar\"></i> 2nd December</li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"blog-single.html\"><img src=\"images/blog/mini/5.jpg\" width=\"64\" height=\"64\" alt=\"Post 5\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\">
                                    <div class=\"spost-title\"><a href=\"blog-single.html\">Nullam id dolor id nibh</a></div>
                                    <div class=\"spost-meta clearfix\">
                                        <ul>
                                            <li><i class=\"icon-calendar\"></i> 5th November</li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <div id=\"tab-tab3\" class=\"tab_content clearfix\">

                        <ul class=\"sposts-list clearfix\">        

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"#\"><img src=\"images/icons/avatar.png\" width=\"64\" height=\"64\" alt=\"Avatar\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\"><strong>Admin:</strong> Morbi leo risus, porta ac ....</div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"#\"><img src=\"images/icons/avatar.png\" width=\"64\" height=\"64\" alt=\"Avatar\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\"><strong>Admin:</strong> Duis mollis, est non commodo ....</div>

                            </li>

                            <li class=\"clearfix\">

                                <div class=\"spost-image\">
                                    <a href=\"#\"><img src=\"images/icons/avatar.png\" width=\"64\" height=\"64\" alt=\"Avatar\" /></a>
                                </div>

                                <div class=\"spost-content clearfix\"><strong>Admin:</strong> Vestibulum id ligula porta felis ....</div>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>


            <script type=\"text/javascript\">

                jQuery(document).ready(function(\$) {

                    tab_widget('#tabwidget-1');

                });

            </script>


        </div>

        <div class=\"widget portfolio-widget clearfix\">


            <h4>Portfolio Widget</h4>

            <div id=\"widget-portfolio-1\" class=\"portfolio-widget-scroll\">


                <div class=\"portfolio-item pf-icons pf-media\">

                    <div class=\"portfolio-image\">

                        <a href=\"images/portfolio/full/1.jpg\"><img src=\"images/portfolio/4/1.jpg\" alt=\"Cloud Icon\" /></a>
                        <a class=\"hidden\" href=\"images/portfolio/full/1-2.jpg\" rel=\"prettyPhoto[gal1]\"></a>
                        <a class=\"hidden\" href=\"images/portfolio/full/1-3.jpg\" rel=\"prettyPhoto[gal1]\"></a>

                        <div class=\"portfolio-overlay\">

                            <div class=\"p-overlay-icons clearfix\">

                                <a href=\"images/portfolio/full/1.jpg\" class=\"p-o-gallery\" rel=\"prettyPhoto[gal1]\"></a>
                                <a href=\"portfolio-single-gallery.html\" class=\"p-o-link\"></a>

                            </div>

                        </div>

                    </div>

                    <div class=\"portfolio-title\">

                        <h3 title=\"Cloud Icon\"><a href=\"portfolio-single-gallery.html\">Cloud Icon</a></h3>

                    </div>

                </div>


                <div class=\"portfolio-item pf-uielements\">

                    <div class=\"portfolio-image\">

                        <a href=\"#\"><img src=\"images/portfolio/4/2.jpg\" alt=\"Grey UI Kit\" title=\"Grey UI Kit\" /></a>

                        <div class=\"portfolio-overlay\">

                            <div class=\"p-overlay-icons clearfix\">

                                <a href=\"images/portfolio/full/2.jpg\" class=\"p-o-image\" rel=\"prettyPhoto\"></a>
                                <a href=\"portfolio-single.html\" class=\"p-o-link\"></a>

                            </div>

                        </div>

                    </div>

                    <div class=\"portfolio-title\">

                        <h3 title=\"Grey UI Kit\"><a href=\"portfolio-single.html\">Grey UI Kit</a></h3>

                    </div>

                </div>


                <div class=\"portfolio-item pf-illustrations\">

                    <div class=\"portfolio-image\">

                        <a href=\"images/portfolio/full/3.jpg\"><img src=\"images/portfolio/4/3.jpg\" alt=\"Calendar Widget\" /></a>
                        <a class=\"hidden\" href=\"images/portfolio/full/3-2.jpg\" rel=\"prettyPhoto[gal2]\"></a>

                        <div class=\"portfolio-overlay\">

                            <div class=\"p-overlay-icons clearfix\">

                                <a href=\"images/portfolio/full/3.jpg\" class=\"p-o-gallery\" rel=\"prettyPhoto[gal2]\"></a>
                                <a href=\"portfolio-single-gallery.html\" class=\"p-o-link\"></a>

                            </div>

                        </div>

                    </div>

                    <div class=\"portfolio-title\">

                        <h3 title=\"Calendar Widget\"><a href=\"portfolio-single-gallery.html\">Calendar Widget</a></h3>

                    </div>

                </div>


                <div class=\"portfolio-item pf-illustrations pf-graphics\">

                    <div class=\"portfolio-image\">

                        <a href=\"#\"><img src=\"images/portfolio/4/4.jpg\" alt=\"Apple Keyboard\" title=\"Apple Keyboard\" /></a>

                        <div class=\"portfolio-overlay\">

                            <div class=\"p-overlay-icons clearfix\">

                                <a href=\"images/portfolio/full/4.jpg\" class=\"p-o-image\" rel=\"prettyPhoto\"></a>
                                <a href=\"portfolio-single.html\" class=\"p-o-link\"></a>

                            </div>

                        </div>

                    </div>

                    <div class=\"portfolio-title\">

                        <h3 title=\"Apple Keyboard\"><a href=\"portfolio-single.html\">Apple Keyboard</a></h3>

                    </div>

                </div>


                <div class=\"portfolio-item pf-uielements\">

                    <div class=\"portfolio-image\">

                        <a href=\"#\"><img src=\"images/portfolio/4/5.jpg\" alt=\"Growl Notification\" title=\"Growl Notification\" /></a>

                        <div class=\"portfolio-overlay\">

                            <div class=\"p-overlay-icons clearfix\">

                                <a href=\"images/portfolio/full/5.jpg\" class=\"p-o-image\" rel=\"prettyPhoto\"></a>
                                <a href=\"portfolio-single.html\" class=\"p-o-link\"></a>

                            </div>

                        </div>

                    </div>

                    <div class=\"portfolio-title\">

                        <h3 title=\"Growl Notification\"><a href=\"portfolio-single.html\">Growl Notification</a></h3>

                    </div>

                </div>


            </div>


            <div id=\"widget-portfolio-1-prev\" class=\"widget-scroll-prev\"></div>
            <div id=\"widget-portfolio-1-next\" class=\"widget-scroll-next\"></div>


            <script type=\"text/javascript\">

                jQuery(document).ready(function(\$) {

                    var portfolioCarousel = \$(\"#widget-portfolio-1\");

                    portfolioCarousel.carouFredSel({
                        width: \"100%\",
                        height: \"auto\",
                        circular: false,
                        responsive: true,
                        infinite: false,
                        auto: false,
                        items: {
                            width: 280,
                            visible: {
                                max: 1
                            }
                        },
                        scroll: {
                            wipe: true
                        },
                        prev: {
                            button: \"#widget-portfolio-1-prev\",
                            key: \"left\"
                        },
                        next: {
                            button: \"#widget-portfolio-1-next\",
                            key: \"right\"
                        },
                        onCreate: function() {
                            \$(window).on('resize', function() {
                                portfolioCarousel.parent().add(portfolioCarousel).css('height', portfolioCarousel.children().first().outerHeight() + 'px');
                            }).trigger('resize');
                        }
                    });

                });

            </script>


        </div>

        <div id=\"recent-comments-2\" class=\"widget widget_recent_comments clearfix\">

            <h4 class=\"widget-title\">Recent Comments</h4>

            <ul id=\"recentcomments\">

                <li class=\"recentcomments\">John Doe on <a href=\"#\">Donec Sed Ui</a></li>

                <li class=\"recentcomments\">Mary Jane on <a href=\"#\">Nullam lulla ceribro</a></li>

                <li class=\"recentcomments\">Collis on <a href=\"#\">Lorem ipsum amet</a></li>

                <li class=\"recentcomments\"><a href=\"#\">Mr WordPress</a> on <a href=\"#\">Hello world!</a></li>

            </ul>

        </div>

        <div class=\"widget video-widget clearfix\">

            <h4>Video Widget</h4>

            <iframe src=\"http://player.vimeo.com/video/54439068?title=0&amp;byline=0&amp;portrait=0&amp;badge=0\" width=\"210\" height=\"118\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

        </div>


    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UIBundle:Slider:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  830 => 270,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 257,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 193,  576 => 186,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  508 => 153,  505 => 152,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 140,  460 => 139,  454 => 136,  438 => 133,  410 => 165,  394 => 126,  373 => 118,  190 => 179,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 145,  478 => 144,  473 => 110,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 128,  412 => 174,  401 => 141,  356 => 121,  334 => 119,  328 => 116,  320 => 113,  317 => 70,  307 => 82,  206 => 58,  198 => 55,  195 => 54,  172 => 46,  96 => 19,  392 => 104,  389 => 130,  377 => 99,  349 => 90,  332 => 118,  324 => 82,  287 => 68,  282 => 66,  276 => 57,  234 => 48,  231 => 33,  218 => 59,  83 => 86,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  527 => 159,  522 => 156,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 129,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 120,  336 => 99,  333 => 98,  329 => 75,  266 => 52,  244 => 65,  233 => 62,  205 => 56,  200 => 55,  188 => 178,  178 => 123,  157 => 64,  118 => 46,  90 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 59,  274 => 77,  263 => 55,  236 => 35,  216 => 28,  192 => 53,  120 => 47,  70 => 29,  77 => 20,  181 => 80,  175 => 122,  161 => 71,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 149,  489 => 136,  483 => 129,  479 => 153,  475 => 143,  462 => 108,  448 => 140,  421 => 126,  414 => 98,  408 => 119,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 123,  375 => 106,  372 => 105,  354 => 92,  348 => 80,  342 => 79,  325 => 93,  313 => 90,  310 => 89,  308 => 67,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  180 => 124,  155 => 38,  146 => 47,  137 => 59,  126 => 55,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 213,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 195,  585 => 347,  581 => 182,  579 => 187,  577 => 341,  571 => 178,  567 => 173,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 129,  422 => 134,  420 => 112,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 77,  331 => 187,  326 => 83,  304 => 66,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 103,  114 => 92,  104 => 21,  97 => 16,  124 => 52,  76 => 28,  321 => 91,  318 => 80,  316 => 89,  288 => 60,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  253 => 148,  250 => 93,  237 => 64,  232 => 31,  222 => 30,  215 => 78,  210 => 22,  191 => 69,  185 => 177,  153 => 49,  145 => 60,  110 => 46,  194 => 181,  186 => 51,  170 => 55,  160 => 59,  150 => 48,  139 => 59,  129 => 56,  84 => 29,  65 => 5,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 78,  327 => 74,  323 => 114,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 51,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 28,  213 => 126,  211 => 81,  202 => 77,  197 => 54,  174 => 47,  165 => 52,  148 => 101,  134 => 45,  127 => 56,  113 => 42,  74 => 19,  52 => 22,  53 => 12,  37 => 12,  23 => 1,  34 => 6,  100 => 41,  81 => 26,  58 => 23,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 130,  398 => 128,  393 => 132,  387 => 127,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 116,  362 => 94,  360 => 109,  355 => 101,  341 => 131,  337 => 87,  322 => 72,  314 => 85,  312 => 68,  309 => 76,  305 => 74,  298 => 63,  294 => 61,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 49,  252 => 70,  247 => 66,  241 => 37,  229 => 30,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 47,  128 => 47,  111 => 25,  107 => 36,  61 => 24,  273 => 56,  269 => 75,  254 => 102,  246 => 66,  243 => 38,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 32,  224 => 60,  221 => 67,  219 => 29,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 40,  108 => 42,  102 => 42,  71 => 8,  67 => 26,  63 => 22,  59 => 3,  47 => 17,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 102,  166 => 114,  163 => 68,  158 => 75,  156 => 93,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 95,  117 => 93,  115 => 26,  105 => 45,  91 => 31,  69 => 9,  62 => 4,  49 => 18,  101 => 40,  94 => 90,  89 => 16,  85 => 87,  79 => 35,  75 => 34,  68 => 31,  56 => 21,  50 => 19,  29 => 3,  87 => 14,  72 => 56,  66 => 30,  55 => 21,  41 => 7,  21 => 11,  98 => 39,  93 => 39,  88 => 30,  78 => 84,  46 => 19,  32 => 6,  27 => 2,  43 => 15,  40 => 11,  44 => 9,  35 => 5,  31 => 5,  25 => 1,  38 => 6,  26 => 5,  24 => 13,  22 => 11,  19 => 1,  209 => 96,  203 => 277,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 116,  168 => 44,  164 => 113,  162 => 40,  154 => 67,  149 => 62,  147 => 69,  144 => 99,  141 => 98,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 39,  112 => 87,  109 => 37,  106 => 44,  103 => 34,  99 => 20,  95 => 41,  92 => 15,  86 => 17,  82 => 11,  80 => 21,  73 => 27,  64 => 25,  60 => 26,  57 => 14,  54 => 26,  51 => 21,  48 => 10,  45 => 14,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 3,);
    }
}
