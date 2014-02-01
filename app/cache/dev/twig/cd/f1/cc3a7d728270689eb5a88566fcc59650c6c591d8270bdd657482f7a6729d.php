<?php

/* kblogfrontendHomeBundle:Home:index.html.twig */
class __TwigTemplate_cdf1cc3a7d728270689eb5a88566fcc59650c6c591d8270bdd657482f7a6729d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::frontend.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sticky_menu' => array($this, 'block_sticky_menu'),
            'menu' => array($this, 'block_menu'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f7ac693_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7ac693_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f7ac693_prettyPhoto_1.css");
            // line 7
            echo "<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
     ";
            // asset "f7ac693_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7ac693_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f7ac693_layerslider_2.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
     ";
        } else {
            // asset "f7ac693"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f7ac693") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f7ac693.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
     ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "<style type=\"text/css\">
    .layer-features p {
        font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif;
        padding: 0px 10px;
        height: 30px;
        line-height: 30px;
        box-shadow: 0px 4px 10px -5px black;
        color: white;
        font-size: 20px;
        background: #8bae4e;
        background: -moz-linear-gradient(left, #8bae4e 0%, #b1c758 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8bae4e), color-stop(100%,#b1c758));
        background: -webkit-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
        background: -o-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
        background: -ms-linear-gradient(left, #8bae4e 0%,#b1c758 100%);
        background: linear-gradient(to right, #8bae4e 0%,#b1c758 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8bae4e', endColorstr='#b1c758',GradientType=1 );
    }

    .l1-s4 {
        font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, Serif;
        padding: 0px 10px;
        height: 40px;
        line-height: 40px;
        box-shadow: 0px 4px 10px -5px black;
        color: white;
        text-shadow: none;
        font-size: 28px;
        color: #4f6716;
        background: white;
    }

</style>
";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "<div id=\"wrapper\" class=\"clearfix\">


    <div id=\"sticky-menu\" class=\"clearfix\">
         ";
        // line 47
        $this->displayBlock('sticky_menu', $context, $blocks);
        // line 50
        echo "    </div>
        ";
        // line 52
        echo "    <div id=\"header\">


        <div class=\"container clearfix\">


            <div id=\"logo\">

                <a href=\"index-2.html\" class=\"standard-logo\"><img src=\"images/logo.png\" alt=\"CoWorker\" title=\"CoWorker\" /></a>
                <a href=\"index-2.html\" class=\"retina-logo\"><img src=\"images/logo%402x.png\" alt=\"CoWorker\" title=\"CoWorker\" width=\"204\" height=\"120\" /></a>

            </div>


            <div id=\"primary-menu\">
                ";
        // line 67
        $this->displayBlock('menu', $context, $blocks);
        // line 70
        echo "            </div>


        </div>


    </div>


    <div id=\"slider\" class=\"layerslider-wrap\">

        <div class=\"container clearfix\">


            <div id=\"layerslider\" class=\"clearfix\" style=\"height: 400px;\">


                <div class=\"ls-layer layer-features\" style=\"slidedelay: 8000;slidedirection: left;\">

                    <img src=\"images/slider/layer/1/bg.jpg\" class=\"ls-bg\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/1/mac.png\" style=\"position: absolute; top:65px; left: 400px; slidedirection:top; slideoutdirection:bottom; durationin:800; durationout:800; easingin:easeOutBack; easingout:easeInBack; delayin:1300;\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/1/lipad.png\" style=\"position: absolute; top:210px; left: 410px; slidedirection:right; slideoutdirection:bottom; durationin:800; durationout:800; easingin:easeOutBack; easingout:easeInBack; delayin:2100;\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/1/pipad.png\" style=\"position: absolute; top:180px; left: 730px; slidedirection:bottom; slideoutdirection:bottom; durationin:800; durationout:800; easingin:easeOutBack; easingout:easeInBack; delayin:2600;\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/1/iphone.png\" style=\"position: absolute; top:240px; left: 845px; slidedirection:right; slideoutdirection:bottom; durationin:800; durationout:800; easingin:easeOutBack; easingout:easeInBack; delayin:3000;\" />

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:70px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 1800;\">Fully Responsive Design</h2>

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:115px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 2300;\">Sharp Retina Graphics</h2>

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:160px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 2800;\">Touch Swipe Support</h2>

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:205px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 3300;\">Premium Sliders Included</h2>

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:250px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 3800;\">Tons of Customizations</h2>

                    <h2 class=\"ls-s3 l1-s4\" style=\"position: absolute; top:295px; left: 30px; slidedirection : fade; slideoutdirection : top; durationin : 1100; durationout : 750; easingout:easeInBack; delayin : 4300;\">Awesome 3D Animations</h2>

                </div>


                <div class=\"ls-layer layer-features\" style=\"slidedelay: 8000;slidedirection: top;\">

                    <img src=\"images/slider/layer/2/bg.jpg\" class=\"ls-bg\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/2/aunty.png\" style=\"position: absolute; top:77px; left: 40px; slidedirection:left; slideoutdirection:bottom; durationin:1000; durationout:800; easingin:easeOutQuad; easingout:easeInQuad; delayin:1000;\" />

                    <p class=\"ls-s3\" style=\"position: absolute; top:30px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 1000; showuntil : 2000; background: #ff7700;\"> Responsive to the Core </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:62px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 1500; showuntil : 2000; background: #ff7900;\"> Unlimited Color Options </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:94px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 2000; showuntil : 2000; background: #ff7d00;\"> Premium Sliders worth \$22 Included </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:126px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 2500; showuntil : 2000; background: #ff8000;\"> 12 Slider Plugins Included </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:158px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 3000; showuntil : 2000; background: #ff8600;\"> Boxed &amp; Wide Layout modes </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:190px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 3500; showuntil : 2000; background: #ff8b00;\"> 7 Homepage Layouts </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:222px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 4000; showuntil : 2000; background: #ff9100;\"> 7 Portfolio Item &amp; 15 Portfolio Single Page Layouts </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:254px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 4500; showuntil : 2000; background: #ff9500;\"> Touch Control for Mobile Devices </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:286px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 5000; showuntil : 2000; background: #ff9a00;\"> 6 Blog Page &amp; 4 Contact Page Layouts </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:318px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 5500; showuntil : 2000; background: #ff9f00;\"> Bootstrap Components Compatible </p>
                    <p class=\"ls-s3\" style=\"position: absolute; top:350px; left: 420px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 6000; showuntil : 2000; background: #ffa500;\"> Dark &amp; Light Footer Color Modes </p>

                </div>


                <div class=\"ls-layer\" style=\"slidedelay: 8000;slidedirection: bottom;\">

                    <img src=\"images/slider/layer/3/bg.jpg\" class=\"ls-bg\" />

                    <img class=\"ls-s2\" src=\"images/slider/layer/3/b1.png\" style=\"position: absolute; top:120px; left: 430px; slidedirection:bottom; slideoutdirection:top; durationin:1500; durationout:1200; easingin:easeOutQuad; easingout:easeInQuad; delayin:1000;\" />

                    <img class=\"ls-s3\" src=\"images/slider/layer/3/b2.png\" style=\"position: absolute; top:70px; left: 580px; slidedirection:bottom; slideoutdirection:top; durationin:3000; durationout:1500; easingin:easeOutQuad; easingout:easeInQuad; delayin:1400;\" />

                    <img class=\"ls-s4\" src=\"images/slider/layer/3/b4.png\" style=\"position: absolute; top:85px; left: 800px; slidedirection:bottom; slideoutdirection:top; durationin:1700; durationout:1400; easingin:easeOutQuad; easingout:easeInQuad; delayin:1600;\" />

                    <img class=\"ls-s5\" src=\"images/slider/layer/3/b3.png\" style=\"position: absolute; top:230px; left: 670px; slidedirection:bottom; slideoutdirection:top; durationin:2200; durationout:1500; easingin:easeOutQuad; easingout:easeInQuad; delayin:1500;\" />

                    <img class=\"ls-s3\" src=\"images/slider/layer/3/1.png\" style=\"position: absolute; top:40px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:3500;\" alt=\"sublayer\" />
                    <img class=\"ls-s4\" src=\"images/slider/layer/3/2.png\" style=\"position: absolute; top:78px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:3700;\" alt=\"sublayer\" />
                    <img class=\"ls-s5\" src=\"images/slider/layer/3/3.png\" style=\"position: absolute; top:145px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:4200;\" alt=\"sublayer\" />
                    <img class=\"ls-s6\" src=\"images/slider/layer/3/4.png\" style=\"position: absolute; top:183px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:4400;\" alt=\"sublayer\" />
                    <img class=\"ls-s7\" src=\"images/slider/layer/3/5.png\" style=\"position: absolute; top:250px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:4900;\" alt=\"sublayer\" />
                    <img class=\"ls-s8\" src=\"images/slider/layer/3/6.png\" style=\"position: absolute; top:288px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:5100;\" alt=\"sublayer\" />
                    <img class=\"ls-s9\" src=\"images/slider/layer/3/7.png\" style=\"position: absolute; top:325px; left: 20px; slidedirection:top; slideoutdirection:top; durationin:500; durationout:500; easingin:easeOutQuad; easingout:easeInQuad; delayin:5300;\" alt=\"sublayer\" />

                </div>


                <div class=\"ls-layer\" style=\"slidedelay: 7000;slidedirection: right;\">

                    <img src=\"images/slider/layer/4/bg.jpg\" class=\"ls-bg\" />

                    <div class=\"ls-s2\" style=\"position: absolute; top:44px; left: 410px; slidedirection:bottom; slideoutdirection:top; durationin:750; durationout:750; easingin:easeOutBack; easingout:easeInBack; delayin:1000;\">

";
        // line 165
        echo "
                    </div>

                    <h2 class=\"ls-s3\" style=\"position: absolute; top:44px; left: 10px; slidedirection:top; slideoutdirection:top; durationin:750; durationout:750; easingin:easeOutQuad; easingout:easeInQuad; delayin:1300; color: #FFF; background-color: #46364E; font-size: 28px; font-family: 'Droid Serif'; line-height: 36px; padding: 5px 9px;\">Youtube &amp; Vimeo Support</h2>

                    <h3 class=\"ls-s4\" style=\"position: absolute; top:90px; left: 10px; slidedirection:left; slideoutdirection:left; durationin:750; durationout:750; easingin:easeOutQuad; easingout:easeInQuad; delayin:1800; color: #888; width: 295px; background-color: #FFF; font-weight: bold; font-size: 14px; line-height: 22px; padding: 10px 15px;\">Embed Videos directly from your favourite video websites like Vimeo or Youtube &amp; show off your Creativity.</h3>

                    <img class=\"ls-s5\" src=\"images/slider/layer/4/youtube.png\" style=\"position: absolute; top:220px; left: 25px; slidedirection:fade; slideoutdirection:top; durationin:1200; durationout:1200; easingin:easeOutQuad; easingout:easeInQuad; delayin:2800;\" />

                    <img class=\"ls-s5\" src=\"images/slider/layer/4/vimeo.png\" style=\"position: absolute; top:220px; left: 195px; slidedirection:fade; slideoutdirection:top; durationin:1200; durationout:1200; easingin:easeOutQuad; easingout:easeInQuad; delayin:3500;\" />

                </div>


            </div>

            <script type=\"text/javascript\">
                jQuery(document).ready(function(\$) {
                    \$('#layerslider').layerSlider({
                        autoStart: true,
                        skin: 'noskin',
                        skinsPath: '/coworker/html/css/ls/skins/',
                        animateFirstLayer: true,
                        navPrevNext: true,
                        responsiveUnder: 979,
                        sublayerContainer: 960,
                        pauseOnHover: false
                    });
                });
            </script>

            <div class=\"slider-line\"></div>


        </div>


    </div>


    <div id=\"content\">


        <div class=\"content-wrap\">


            <div class=\"container clearfix\">


                <div class=\"col_full center\">

                    <h2 style=\"line-height: 1.6;\">Welcome! This is CoWorker, a very clean, <span>responsive</span> &amp; super flexible <span>multipurpose</span> theme that makes it easy to showcase your work</h2>

                    <a href=\"#pricing-signup\" data-scrollto=\"#pricing-signup\" class=\"simple-button\"><i class=\"icon-tasks\"></i>See Pricing</a>
                    <a href=\"#home-portfolio-list\" data-scrollto=\"#home-portfolio-list\" class=\"simple-button\"><i class=\"icon-briefcase\"></i>See Portfolio</a>

                </div>


                <div class=\"dotted-divider\"></div>


                <div class=\"col_two_third\">

                    <div class=\"col_half\"><div class=\"product-feature\"><span class=\"icon-copy\"></span><h3>95+ HTML Pages</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"col_half col_last\"><div class=\"product-feature\"><span class=\"icon-fullscreen\"></span><h3>Fully Responsive</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"clear\"></div>

                    <div class=\"col_half\"><div class=\"product-feature\"><span class=\"icon-picture\"></span><h3>12 Slider Plugins</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"col_half col_last\"><div class=\"product-feature\"><span class=\"icon-briefcase\"></span><h3>Bootstrap Compatible</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"clear\"></div>

                    <div class=\"col_half\"><div class=\"product-feature\"><span class=\"icon-cogs\"></span><h3>Ample Customizations</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"col_half col_last\"><div class=\"product-feature\"><span class=\"icon-group\"></span><h3>Dedicated Support</h3><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></div></div>

                    <div class=\"clear\"></div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"well nobottommargin\">

                        <h3>Get a <span>Co</span>Worker Account</h3>

                        <form action=\"#\" method=\"post\" id=\"landing-page-form\" name=\"landing-page-form\" class=\"nobottommargin\">

                            <div class=\"col_half nobottommargin\">

                                <label for=\"lpform-firstname\">First Name</label>
                                <input class=\"input-block-level\" id=\"lpform-firstname\" name=\"lpform-firstname\" type=\"text\" value=\"\" />

                            </div>

                            <div class=\"col_half nobottommargin col_last\">

                                <label for=\"lpform-lastname\">Last Name</label>
                                <input class=\"input-block-level\" id=\"lpform-lastname\" name=\"lpform-lastname\" type=\"text\" value=\"\" />

                            </div>

                            <div class=\"clear\"></div>

                            <div class=\"col_full nobottommargin\">

                                <label for=\"lpform-email\">Email Address</label>
                                <input class=\"input-block-level\" id=\"lpform-email\" name=\"lpform-email\" type=\"text\" value=\"\" />

                            </div>

                            <div class=\"col_full nobottommargin\">

                                <label for=\"lpform-phone\">Phone Number</label>
                                <input class=\"input-block-level\" id=\"lpform-phone\" name=\"lpform-phone\" type=\"text\" value=\"\" />

                            </div>

                            <div class=\"clear\"></div>

                            <div class=\"col_full center nobottommargin\">

                                <button class=\"btn btn-inverse\" id=\"lpform-submit\" name=\"lpform-submit\" type=\"submit\" value=\"submit\">Sign Up Now</button>

                            </div>

                        </form>

                    </div>

                </div>

                <div class=\"dotted-divider\"></div>


                <h2 id=\"home-portfolio-list\" class=\"center\">Something we've <span>worked</span> on</h2>

                <div id=\"portfolio\" class=\"clearfix\">


                    <div class=\"portfolio-item pf-icons pf-media\">

                        <div class=\"portfolio-image port-gallery\">

                            <div class=\"fslider\" data-animate=\"fade\" data-pause=\"2500\" data-speed=\"400\">

                                <div class=\"flexslider\">

                                    <div class=\"slider-wrap\">

                                        <div class=\"slide\">

                                            <img src=\"images/portfolio/4/1.jpg\" alt=\"Gallery\" />

                                        </div>

                                        <div class=\"slide\">

                                            <a href=\"images/portfolio/full/1-2.jpg\" rel=\"prettyPhoto[gal1]\"><img src=\"images/portfolio/4/1-2.jpg\" alt=\"Gallery\" /></a>

                                        </div>

                                        <div class=\"slide\">

                                            <a href=\"images/portfolio/full/1-3.jpg\" rel=\"prettyPhoto[gal1]\"><img src=\"images/portfolio/4/1-3.jpg\" alt=\"Gallery\" /></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

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

                                <div class=\"portfolio-overlay-wrap\">

                                    <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                    <span><span></span></span>

                                    <a href=\"#\">UI Elements</a>

                                </div>

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

                        <div class=\"portfolio-image port-gallery\">

                            <div class=\"fslider\" data-direction=\"vertical\" data-easing=\"easeOutQuad\" data-pause=\"3500\">

                                <div class=\"flexslider\">

                                    <div class=\"slider-wrap\">

                                        <div class=\"slide\">

                                            <img src=\"images/portfolio/4/3.jpg\" alt=\"Gallery\" />

                                        </div>

                                        <div class=\"slide\">

                                            <a href=\"images/portfolio/full/3-2.jpg\" rel=\"prettyPhoto[gal2]\"><img src=\"images/portfolio/4/3-2.jpg\" alt=\"Gallery\" /></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

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

                                <div class=\"portfolio-overlay-wrap\">

                                    <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                    <span><span></span></span>

                                    <a href=\"#\">Graphics</a> &middot; <a href=\"#\">Illustrations</a>

                                </div>

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


                </div>


                <div class=\"dotted-divider\"></div>


                <div class=\"tab_widget side-tabs clearfix bottommargin\" id=\"tabwidget-1\">

                    <ul class=\"tabs\">
                        <li><a href=\"#\" data-href=\"#tab-tab1\"><i class=\"icon-resize-full\"></i> Responsive Design</a></li>
                        <li><a href=\"#\" data-href=\"#tab-tab2\"><i class=\"icon-font\"></i> Google Fonts Support</a></li>
                        <li><a href=\"#\" data-href=\"#tab-tab3\"><i class=\"icon-picture\"></i> 12 Awesome Sliders</a></li>
                        <li><a href=\"#\" data-href=\"#tab-tab4\"><i class=\"icon-pencil\"></i> Unlimited Colors</a></li>
                        <li><a href=\"#\" data-href=\"#tab-tab5\"><i class=\"icon-beaker\"></i> Bootstrap Components</a></li>
                        <li><a href=\"#\" data-href=\"#tab-tab6\"><i class=\"icon-th-large\"></i> 2 Main Layouts</a></li>
                    </ul>

                    <div class=\"tab_container\">

                        <div id=\"tab-tab1\" class=\"tab_content clearfix\">

                            <div class=\"wp-caption alignright notopmargin\">

                                <img src=\"images/slider/sample.jpg\" class=\"img-polaroid\" alt=\"Image\" title=\"Image\" />

                                <p class=\"wp-caption-text\">Out of the Blue.</p>

                            </div>

                            <h3>Ultra Responsive Layouts</h3>

                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.</p>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.</p>

                        </div>


                        <div id=\"tab-tab2\" class=\"tab_content clearfix\">

                            <h3>Icons List</h3>

                            <div class=\"dropcap\">D</div><p>onec sed odio dui. Nulla <span class=\"highlight ntip\" title=\"ToolTip Example\">vitae elit</span> libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>
                            <div class=\"nobottommargin entry_content\">

                                <div class=\"col_one_fourth\">

                                    <ul class=\"nobottommargin\">

                                        <li class=\"icon-reorder\">Styled List 1</li>
                                        <li class=\"icon-reorder\">Styled List 2</li>
                                        <li class=\"icon-reorder\">Styled List 3</li>
                                        <li class=\"icon-reorder\">Styled List 4</li>

                                    </ul>

                                </div>

                                <div class=\"col_one_fourth\">

                                    <ul class=\"nobottommargin\">

                                        <li class=\"icon-phone\">Styled List 1</li>
                                        <li class=\"icon-phone\">Styled List 2</li>
                                        <li class=\"icon-phone\">Styled List 3</li>
                                        <li class=\"icon-phone\">Styled List 4</li>

                                    </ul>

                                </div>

                                <div class=\"col_one_fourth\">

                                    <ul class=\"nobottommargin\">

                                        <li class=\"icon-search\">Styled List 1</li>
                                        <li class=\"icon-search\">Styled List 2</li>
                                        <li class=\"icon-search\">Styled List 3</li>
                                        <li class=\"icon-search\">Styled List 4</li>

                                    </ul>

                                </div>

                                <div class=\"col_one_fourth col_last\">

                                    <ul class=\"nobottommargin\">

                                        <li class=\"icon-download-alt\">Styled List 1</li>
                                        <li class=\"icon-download-alt\">Styled List 2</li>
                                        <li class=\"icon-download-alt\">Styled List 3</li>
                                        <li class=\"icon-download-alt\">Styled List 4</li>

                                    </ul>

                                </div>


                            </div>

                        </div>

                        <div id=\"tab-tab3\" class=\"tab_content clearfix\">

                            <h3>12 Awesome Responsive Sliders</h3>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>

                            <div class=\"col_half entry_content \">

                                <ul class=\"bottommargin\">

                                    <li class=\"icon-ok\">Layer Slider</li>
                                    <li class=\"icon-ok\">Revolution Slider</li>
                                    <li class=\"icon-ok\">Refine Slider</li>
                                    <li class=\"icon-ok\">Refine Thumb Slider</li>
                                    <li class=\"icon-ok\">Nivo Slider</li>
                                    <li class=\"icon-ok\">3D Slider</li>

                                </ul>

                            </div>

                            <div class=\"col_half col_last entry_content \">

                                <ul class=\"bottommargin\">

                                    <li class=\"icon-ok\">Flex Slider</li>
                                    <li class=\"icon-ok\">Flex Thumb Slider</li>
                                    <li class=\"icon-ok\">Elastic Slider</li>
                                    <li class=\"icon-ok\">Camera Slider</li>
                                    <li class=\"icon-ok\">Accordion Slider</li>
                                    <li class=\"icon-ok\">Image/Video Static</li>

                                </ul>

                            </div>

                        </div>

                        <div id=\"tab-tab4\" class=\"tab_content clearfix\">

                            <h3>Unlimited Colors.</h3>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>

                            <div class=\"quote quote-left\">Duis mollis, est non commodo luctus</div><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Duis mollis, est non commodo luctus. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.</p>

                        </div>

                        <div id=\"tab-tab5\" class=\"tab_content clearfix\">

                            <h3>Bootstrap Components.</h3><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
                            <blockquote class=\"topmargin\"><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p></blockquote>

                        </div>

                        <div id=\"tab-tab6\" class=\"tab_content clearfix\">

                            <h3>2 main Layouts.</h3>

                            <h6><span>Wide </span>Layout</h6>

                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p>

                            <h6><span>Boxed </span>Layout</h6>

                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>

                        </div>

                    </div>

                </div>

                <script type=\"text/javascript\">
                    \$(document).ready(function() {

                        tab_widget('#tabwidget-1');

                    });
                </script>

                <div class=\"clear\"></div>


                <div style=\"position: relative;\">

                    <h4>Our <span>Clients</span></h4>

                    <ul id=\"clients-scroller\" class=\"our-clients clearfix\">

                        <li><a href=\"http://www.logospire.com/logos/3122\"><img src=\"images/clients/3122.jpg\" alt=\"Client 1\" title=\"Client 1\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/4044\"><img src=\"images/clients/4044.png\" alt=\"Client 2\" title=\"Client 2\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/4122\"><img src=\"images/clients/4112.jpg\" alt=\"Client 3\" title=\"Client 3\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/4147\"><img src=\"images/clients/4147.jpg\" alt=\"Client 4\" title=\"Client 4\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/4487\"><img src=\"images/clients/4487.png\" alt=\"Client 5\" title=\"Client 5\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/4999\"><img src=\"images/clients/4999.jpg\" alt=\"Client 6\" title=\"Client 6\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/5055\"><img src=\"images/clients/5055.jpg\" alt=\"Client 7\" title=\"Client 7\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/5393\"><img src=\"images/clients/5393.jpg\" alt=\"Client 8\" title=\"Client 8\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/5909\"><img src=\"images/clients/5909.png\" alt=\"Client 7\" title=\"Client 7\" /></a></li>
                        <li><a href=\"http://www.logospire.com/logos/6002\"><img src=\"images/clients/6002.png\" alt=\"Client 8\" title=\"Client 8\" /></a></li>

                    </ul>

                    <div class=\"widget-scroll-prev\" id=\"ourclients_prev\"></div>
                    <div class=\"widget-scroll-next\" id=\"ourclients_next\"></div>

                    <script type=\"text/javascript\">

                        jQuery(document).ready(function(\$) {

                            var clientsCarousel = \$(\"#clients-scroller\");

                            clientsCarousel.carouFredSel({
                                width: \"100%\",
                                height: \"auto\",
                                circular: false,
                                responsive: true,
                                infinite: false,
                                auto: false,
                                items: {
                                    width: 160,
                                    visible: {
                                        min: 1,
                                        max: 6
                                    }
                                },
                                scroll: {
                                    wipe: true
                                },
                                prev: {
                                    button: \"#ourclients_prev\",
                                    key: \"left\"
                                },
                                next: {
                                    button: \"#ourclients_next\",
                                    key: \"right\"
                                },
                                onCreate: function() {
                                    \$(window).on('resize', function() {
                                        clientsCarousel.parent().add(clientsCarousel).css('height', clientsCarousel.children().first().outerHeight() + 'px');
                                    }).trigger('resize');
                                }
                            });

                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 744
        $this->displayBlock('footer', $context, $blocks);
        // line 747
        echo "</div>


<div id=\"gotoTop\" class=\"icon-angle-up\"></div>
     ";
        // line 751
        $this->displayBlock('javascripts', $context, $blocks);
        // line 756
        echo "  

";
        // line 759
        echo "</body>
";
    }

    // line 47
    public function block_sticky_menu($context, array $blocks = array())
    {
        // line 48
        echo "                    ";
        $this->env->loadTemplate("CoreBundle::sticky_menu.html.twig")->display($context);
        // line 49
        echo "         ";
    }

    // line 67
    public function block_menu($context, array $blocks = array())
    {
        // line 68
        echo "                    ";
        $this->env->loadTemplate("CoreBundle::menu.html.twig")->display($context);
        // line 69
        echo "                ";
    }

    // line 744
    public function block_footer($context, array $blocks = array())
    {
        // line 745
        echo "        ";
        $this->env->loadTemplate("CoreBundle::footer.html.twig")->display($context);
        // line 746
        echo "    ";
    }

    // line 751
    public function block_javascripts($context, array $blocks = array())
    {
        // line 752
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 753
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "247de94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_custom_1.js");
            // line 754
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_favico_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery-transit_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.camera_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.countdown_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.elastic_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.gmap_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery_8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.kwicks_9.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.layerslider_10.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.nivo_11.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.refine_12.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.themepunch.plugins_13.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_jquery.themepunch.revolution_14.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_layerslider.transitions_15.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_plugins_16.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "247de94_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94_part_1_switcher_17.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "247de94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_247de94") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/247de94.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 756
        echo "    ";
    }

    public function getTemplateName()
    {
        return "kblogfrontendHomeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  830 => 47,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 257,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 193,  576 => 186,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  508 => 153,  505 => 152,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 140,  460 => 139,  454 => 136,  438 => 133,  410 => 165,  394 => 126,  373 => 118,  190 => 179,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 145,  478 => 144,  473 => 110,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 128,  412 => 174,  401 => 141,  356 => 121,  334 => 119,  328 => 116,  320 => 113,  317 => 70,  307 => 82,  206 => 58,  198 => 55,  195 => 54,  172 => 46,  392 => 104,  389 => 130,  377 => 99,  349 => 90,  332 => 118,  324 => 82,  287 => 68,  282 => 66,  276 => 57,  234 => 48,  231 => 33,  218 => 59,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  527 => 159,  522 => 156,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 129,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 120,  336 => 99,  333 => 98,  329 => 75,  266 => 52,  244 => 65,  233 => 62,  205 => 56,  200 => 55,  188 => 178,  178 => 123,  118 => 46,  90 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 59,  274 => 77,  263 => 55,  236 => 35,  216 => 28,  192 => 53,  70 => 29,  77 => 10,  181 => 80,  175 => 122,  161 => 71,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 149,  489 => 136,  483 => 129,  479 => 153,  475 => 143,  462 => 108,  448 => 140,  421 => 126,  414 => 98,  408 => 119,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 123,  375 => 106,  372 => 105,  354 => 92,  348 => 80,  342 => 79,  325 => 93,  313 => 90,  310 => 89,  308 => 67,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  180 => 124,  155 => 38,  146 => 47,  137 => 59,  126 => 55,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 213,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 195,  585 => 347,  581 => 182,  579 => 187,  577 => 341,  571 => 178,  567 => 173,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 129,  422 => 134,  420 => 112,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 77,  331 => 187,  326 => 83,  304 => 66,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 103,  114 => 92,  104 => 43,  97 => 16,  124 => 52,  76 => 28,  321 => 91,  318 => 80,  316 => 89,  288 => 60,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  253 => 148,  250 => 93,  237 => 64,  232 => 31,  222 => 30,  215 => 78,  210 => 22,  191 => 69,  185 => 177,  153 => 49,  110 => 47,  194 => 181,  186 => 51,  170 => 55,  160 => 59,  150 => 48,  129 => 56,  84 => 29,  65 => 9,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 78,  327 => 74,  323 => 114,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 51,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 28,  213 => 126,  211 => 81,  202 => 77,  197 => 54,  174 => 47,  165 => 52,  148 => 101,  134 => 70,  127 => 56,  113 => 42,  53 => 12,  23 => 13,  34 => 15,  100 => 41,  81 => 26,  58 => 23,  20 => 1,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 130,  398 => 128,  393 => 132,  387 => 127,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 116,  362 => 94,  360 => 109,  355 => 101,  341 => 131,  337 => 87,  322 => 72,  314 => 85,  312 => 68,  309 => 76,  305 => 74,  298 => 63,  294 => 61,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 49,  252 => 70,  247 => 66,  241 => 37,  229 => 30,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 67,  128 => 47,  107 => 36,  61 => 24,  273 => 56,  269 => 75,  254 => 102,  243 => 38,  240 => 65,  238 => 139,  235 => 63,  230 => 165,  227 => 32,  224 => 60,  221 => 67,  219 => 29,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  119 => 40,  102 => 42,  71 => 8,  67 => 26,  63 => 22,  59 => 15,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 102,  166 => 114,  163 => 68,  158 => 75,  156 => 93,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  121 => 95,  117 => 93,  105 => 45,  91 => 31,  62 => 16,  49 => 18,  94 => 90,  89 => 16,  85 => 87,  75 => 34,  68 => 31,  56 => 21,  87 => 14,  21 => 11,  93 => 39,  88 => 30,  78 => 84,  46 => 19,  27 => 2,  44 => 9,  31 => 5,  25 => 1,  38 => 19,  26 => 2,  24 => 13,  19 => 1,  79 => 35,  72 => 56,  69 => 55,  47 => 17,  40 => 8,  37 => 12,  22 => 11,  246 => 66,  157 => 64,  145 => 60,  139 => 59,  131 => 43,  123 => 48,  120 => 47,  115 => 52,  111 => 25,  108 => 42,  101 => 42,  98 => 39,  96 => 19,  83 => 86,  74 => 82,  66 => 30,  55 => 21,  52 => 17,  50 => 11,  43 => 15,  41 => 4,  35 => 6,  32 => 21,  29 => 16,  209 => 96,  203 => 277,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 116,  168 => 44,  164 => 113,  162 => 40,  154 => 67,  149 => 62,  147 => 69,  144 => 99,  141 => 98,  133 => 49,  130 => 57,  125 => 42,  122 => 45,  116 => 39,  112 => 50,  109 => 37,  106 => 44,  103 => 34,  99 => 20,  95 => 41,  92 => 15,  86 => 17,  82 => 11,  80 => 25,  73 => 27,  64 => 25,  60 => 26,  57 => 14,  54 => 26,  51 => 21,  48 => 10,  45 => 7,  42 => 17,  39 => 16,  36 => 3,  33 => 2,  30 => 3,);
    }
}
