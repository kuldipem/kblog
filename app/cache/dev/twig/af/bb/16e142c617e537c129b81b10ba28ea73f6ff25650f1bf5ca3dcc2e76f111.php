<?php

/* CoreBundle::footer.html.twig */
class __TwigTemplate_afbb16e142c617e537c129b81b10ba28ea73f6ff25650f1bf5ca3dcc2e76f111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"footer\" class=\"footer-dark\">
    <div class=\"container clearfix\">
        <div class=\"footer-widgets-wrap clearfix\">


            <div class=\"col_one_fourth\">


                <div class=\"widget portfolio-widget clearfix\">


                    <h4>About <span>Co</span>Worker</h4>

                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh.</p>

                    <div style=\"background: url('images/world_map.png') no-repeat center center; height: 100px;\">

                        <ul style=\"font-size: 13px;\">

                            <li class=\"icon-map-marker\">13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>
                            <li class=\"icon-phone\">+91-22-21144113</li>
                            <li class=\"icon-envelope-alt\">info@coworker.com</li>

                        </ul>

                    </div>


                </div>


            </div>


            <div class=\"col_one_fourth\">


                <div id=\"linkcat-2\" class=\"widget widget_links clearfix\">

                    <h4 class=\"widget-title\">Blogroll</h4>

                    <ul class='xoxo blogroll'>

                        <li><a href=\"http://codex.wordpress.org/\">Documentation</a></li>
                        <li><a href=\"http://wordpress.org/support/forum/requests-and-feedback\">Feedback</a></li>
                        <li><a href=\"http://wordpress.org/extend/plugins/\">Plugins</a></li>
                        <li><a href=\"http://wordpress.org/support/\">Support Forums</a></li>
                        <li><a href=\"http://wordpress.org/extend/themes/\">Themes</a></li>
                        <li><a href=\"http://wordpress.org/news/\">WordPress Blog</a></li>
                        <li><a href=\"http://planet.wordpress.org/\">WordPress Planet</a></li>

                    </ul>

                </div>


            </div>


            <div class=\"col_one_fourth\">


                <div id=\"flickr_widget-1\" class=\"widget flickr-widget clearfix\">

                    <h4 class=\"widget-title\">Flickr Photostream</h4>

                    <div id=\"flickr_widget\" class=\"flickrfeed\" data-id=\"52617155@N08\" data-count=\"9\" data-type=\"user\"></div>

                </div>


            </div>


            <div class=\"col_one_fourth\">


                <div class=\"widget clearfix\">

                    <h4>Quick Contact</h4>

                    <div id=\"quick-contact-form-result\"></div>

                    <form id=\"quick-contact-form\" name=\"quick-contact-form\" action=\"http://themes.semicolonweb.com/html/coworker/functions/footeremail.php\" method=\"post\" class=\"quick-contact-form nobottommargin\">


                        <input type=\"text\" class=\"required input-block-level\" id=\"quick-contact-form-name\" name=\"quick-contact-form-name\" value=\"\" placeholder=\"Full Name\" />

                        <input type=\"text\" class=\"required email input-block-level\" id=\"quick-contact-form-email\" name=\"quick-contact-form-email\" value=\"\" placeholder=\"Email Address\" />

                        <textarea class=\"required input-block-level short-textarea\" id=\"quick-contact-form-message\" name=\"quick-contact-form-message\" rows=\"30\" cols=\"10\" placeholder=\"Message\"></textarea>

                        <button type=\"submit\" id=\"quick-contact-form-submit\" name=\"quick-contact-form-submit\" class=\"btn btn-small btn-inverse nomargin\" value=\"submit\">Send Email</button>


                    </form>

                    <script type=\"text/javascript\">

                        jQuery(document).ready(function(\$) {

                            \$(\"#quick-contact-form\").validate({
                                messages: {
                                    'quick-contact-form-name': '',
                                    'quick-contact-form-email': '',
                                    'quick-contact-form-message': ''
                                },
                                submitHandler: function(form) {

                                    \$(form).find('.btn').prepend('<i class=\"icon-spinner icon-spin\"></i>').addClass('disabled').attr('disabled', 'disabled');

                                    \$(form).ajaxSubmit({
                                        target: '#quick-contact-form-result',
                                        success: function() {
                                            \$(\"#quick-contact-form\").fadeOut(500, function() {
                                                \$('#quick-contact-form-result').fadeIn(500);
                                            });
                                        },
                                        error: function() {
                                            \$('#quick-contact-form-result').fadeIn(500);
                                            \$(\"#quick-contact-form\").find('.btn').remove('<i class=\"icon-spinner icon-spin\"></i>').removeClass('disabled').removeAttr('disabled');
                                        }
                                    });

                                }
                            });

                        });

                    </script>


                </div>


            </div>


        </div>
    </div>
</div>
<div class=\"clear\"></div>
<div id=\"copyrights\" class=\"copyrights-dark\">
    <div class=\"container clearfix\">
        <div class=\"col_half\">
            Copyrights &copy; 2014 &amp; All Rights Reserved by K-Blog.
        </div>
        <div class=\"col_half col_last tright\">
            <a href=\"#\">Privacy Policy</a><span class=\"link-divider\">/</span><a href=\"#\">Terms of Service</a><span class=\"link-divider\">/</span><a href=\"#\">FAQs</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle::footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  27 => 2,  20 => 1,  97 => 16,  92 => 15,  87 => 14,  82 => 11,  77 => 10,  71 => 8,  62 => 16,  59 => 15,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  31 => 5,  25 => 1,  232 => 31,  229 => 30,  225 => 28,  111 => 25,  99 => 20,  96 => 19,  89 => 16,  35 => 6,  30 => 3,  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  830 => 47,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  230 => 165,  134 => 70,  132 => 67,  115 => 26,  112 => 50,  110 => 47,  104 => 21,  101 => 42,  65 => 17,  45 => 14,  41 => 7,  36 => 3,  33 => 2,);
    }
}
