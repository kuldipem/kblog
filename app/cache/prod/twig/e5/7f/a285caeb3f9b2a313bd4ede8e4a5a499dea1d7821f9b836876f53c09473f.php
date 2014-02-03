<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_e57fa285caeb3f9b2a313bd4ede8e4a5a499dea1d7821f9b836876f53c09473f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu_before' => array($this, 'block_sonata_nav_menu_before'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_nav_menu_after' => array($this, 'block_sonata_nav_menu_after'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta charset=\"UTF-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
            ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 86
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 87
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 89
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 90
                echo "                    -
                    ";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 92
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 93
                        echo "                            &gt;
                        ";
                    }
                    // line 95
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                ";
            }
            // line 98
            echo "            ";
        }
        // line 99
        echo "        </title>
    </head>
    <body ";
        // line 101
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 103
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 113
        if (array_key_exists("admin_pool", $context)) {
            // line 114
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 116
            $this->displayBlock('logo', $context, $blocks);
            // line 122
            echo "
                        ";
            // line 123
            $this->displayBlock('sonata_nav_menu_before', $context, $blocks);
            // line 124
            echo "
                        ";
            // line 125
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 177
            echo "
                        ";
            // line 178
            $this->displayBlock('sonata_nav_menu_after', $context, $blocks);
            // line 179
            echo "
                    ";
        }
        // line 181
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 186
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 277
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" media=\"all\">

            ";
        // line 37
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 38
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" media=\"all\">
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 49
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" media=\"all\">

        ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 59
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 60
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 61
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 63
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 74
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 75
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 79
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\"></script>";
        }
        // line 80
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 101
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc ";
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\"";
    }

    // line 116
    public function block_logo($context, array $blocks = array())
    {
        // line 117
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "\">
                                ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 123
    public function block_sonata_nav_menu_before($context, array $blocks = array())
    {
    }

    // line 125
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 126
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 128
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 129
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 162
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 163
        echo "                                </ul>

                                ";
        // line 165
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 174
        echo "
                            </div>
                        ";
    }

    // line 128
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 129
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 130
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 131
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 132
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 133
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 134
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 135
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "
                                                ";
                // line 138
                echo "                                                ";
                $context["item_count"] = 0;
                // line 139
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 140
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : null) == 0)) {
                            // line 141
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 142
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : null) + 1);
                                // line 143
                                echo "                                                        ";
                            }
                            // line 144
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                                ";
                }
                // line 146
                echo "
                                                ";
                // line 147
                if (((isset($context["display"]) ? $context["display"] : null) && ((isset($context["item_count"]) ? $context["item_count"] : null) > 0))) {
                    // line 148
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 149
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 151
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 152
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 153
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 155
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 159
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                                        ";
        }
        // line 161
        echo "                                    ";
    }

    // line 162
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 165
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 166
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 167
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            </div>
                                        </form>
                                    ";
        }
        // line 173
        echo "                                ";
    }

    // line 178
    public function block_sonata_nav_menu_after($context, array $blocks = array())
    {
    }

    // line 186
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 187
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 190
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 192
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 193
            echo "                        <div class=\"span6\">
                            <ul class=\"breadcrumb\">
                                ";
            // line 195
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 196
                echo "                                    ";
                if (array_key_exists("action", $context)) {
                    // line 197
                    echo "                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 198
                        echo "                                            ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 199
                            echo "                                                <li>
                                                    ";
                            // line 200
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 201
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "</a>
                                                    ";
                            } else {
                                // line 203
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                    ";
                            }
                            // line 205
                            echo "                                                    <span class=\"divider\">/</span>
                                                </li>
                                            ";
                        } else {
                            // line 208
                            echo "                                                <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</li>
                                            ";
                        }
                        // line 210
                        echo "                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                                    ";
                }
                // line 212
                echo "                                ";
            } else {
                // line 213
                echo "                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                ";
            }
            // line 215
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 218
        echo "
                    ";
        // line 219
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
            // line 220
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 221
            echo (isset($context["_actions"]) ? $context["_actions"] : null);
            echo "
                        </div>
                    ";
        }
        // line 224
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 227
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) {
            // line 228
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 229
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : null);
            echo "</div>
                        </div>
                    ";
        }
        // line 232
        echo "
                    <div class=\"content ";
        // line 233
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 234
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 266
        echo "                    </div>
                </div>

                ";
        // line 269
        $this->displayBlock('footer', $context, $blocks);
        // line 276
        echo "            ";
    }

    // line 187
    public function block_notice($context, array $blocks = array())
    {
        // line 188
        echo "                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 189
        echo "                ";
    }

    // line 234
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 235
        echo "
                            ";
        // line 236
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 237
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                            ";
        }
        // line 239
        echo "
                            ";
        // line 240
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 241
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                            ";
        }
        // line 243
        echo "
                            ";
        // line 244
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 245
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                            ";
        }
        // line 247
        echo "
                            ";
        // line 248
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 249
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                            ";
        }
        // line 251
        echo "
                            ";
        // line 252
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 253
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list ";
            // line 254
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                echo "span10";
            } else {
                echo "span12";
            }
            echo "\">
                                        ";
            // line 255
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                    </div>
                                    ";
            // line 257
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 258
                echo "                                        <div class=\"sonata-ba-filter span2\">
                                            ";
                // line 259
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                                        </div>
                                    ";
            }
            // line 262
            echo "                                </div>
                            ";
        }
        // line 264
        echo "
                        ";
    }

    // line 269
    public function block_footer($context, array $blocks = array())
    {
        // line 270
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span2 offset10 pull-right\">
                            <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 270,  827 => 269,  822 => 264,  818 => 262,  812 => 259,  809 => 258,  807 => 257,  802 => 255,  794 => 254,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 276,  723 => 269,  718 => 266,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  597 => 197,  588 => 193,  576 => 186,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  508 => 153,  505 => 152,  501 => 151,  493 => 148,  491 => 147,  488 => 146,  472 => 142,  463 => 140,  460 => 139,  454 => 136,  438 => 133,  410 => 165,  394 => 126,  373 => 118,  190 => 179,  598 => 188,  594 => 196,  586 => 192,  575 => 180,  573 => 179,  558 => 169,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 145,  478 => 144,  473 => 110,  458 => 107,  451 => 103,  447 => 135,  442 => 101,  418 => 128,  412 => 174,  401 => 141,  356 => 121,  334 => 119,  328 => 116,  320 => 113,  317 => 70,  307 => 82,  206 => 58,  198 => 55,  195 => 54,  172 => 46,  96 => 19,  392 => 104,  389 => 130,  377 => 99,  349 => 90,  332 => 118,  324 => 82,  287 => 68,  282 => 66,  276 => 57,  234 => 48,  231 => 33,  218 => 59,  83 => 86,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 224,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 198,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 190,  565 => 174,  544 => 172,  539 => 171,  536 => 161,  533 => 160,  530 => 168,  527 => 159,  522 => 156,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 163,  400 => 129,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 120,  336 => 99,  333 => 98,  329 => 75,  266 => 52,  244 => 65,  233 => 62,  205 => 56,  200 => 55,  188 => 178,  178 => 123,  157 => 64,  118 => 49,  90 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 59,  274 => 77,  263 => 55,  236 => 35,  216 => 28,  192 => 53,  120 => 49,  70 => 29,  77 => 25,  181 => 80,  175 => 122,  161 => 71,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 155,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 149,  489 => 136,  483 => 129,  479 => 153,  475 => 143,  462 => 108,  448 => 140,  421 => 126,  414 => 98,  408 => 119,  403 => 162,  399 => 136,  391 => 125,  388 => 112,  386 => 123,  375 => 106,  372 => 105,  354 => 92,  348 => 80,  342 => 79,  325 => 93,  313 => 90,  310 => 89,  308 => 67,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  180 => 124,  155 => 38,  146 => 34,  137 => 59,  126 => 45,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 213,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 205,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 195,  585 => 347,  581 => 182,  579 => 187,  577 => 341,  571 => 178,  567 => 173,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 129,  422 => 134,  420 => 112,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 77,  331 => 187,  326 => 83,  304 => 66,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 103,  114 => 92,  104 => 40,  97 => 91,  124 => 52,  76 => 32,  321 => 91,  318 => 80,  316 => 89,  288 => 60,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  253 => 148,  250 => 93,  237 => 64,  232 => 136,  222 => 30,  215 => 78,  210 => 22,  191 => 69,  185 => 177,  153 => 62,  145 => 59,  110 => 46,  194 => 181,  186 => 51,  170 => 79,  160 => 59,  150 => 27,  139 => 57,  129 => 56,  84 => 36,  65 => 26,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 78,  327 => 74,  323 => 114,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 51,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  202 => 77,  197 => 54,  174 => 47,  165 => 77,  148 => 101,  134 => 45,  127 => 56,  113 => 42,  74 => 82,  52 => 17,  53 => 20,  37 => 12,  23 => 13,  34 => 18,  100 => 41,  81 => 26,  58 => 22,  20 => 11,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 134,  435 => 132,  430 => 131,  427 => 130,  423 => 142,  413 => 134,  409 => 87,  407 => 242,  402 => 130,  398 => 128,  393 => 132,  387 => 127,  384 => 126,  381 => 115,  379 => 119,  374 => 98,  368 => 117,  365 => 116,  362 => 94,  360 => 109,  355 => 101,  341 => 131,  337 => 87,  322 => 72,  314 => 85,  312 => 68,  309 => 76,  305 => 74,  298 => 63,  294 => 61,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 84,  258 => 49,  252 => 70,  247 => 66,  241 => 37,  229 => 61,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 47,  128 => 47,  111 => 40,  107 => 46,  61 => 27,  273 => 56,  269 => 75,  254 => 102,  246 => 66,  243 => 38,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 32,  224 => 60,  221 => 67,  219 => 29,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 55,  131 => 48,  119 => 44,  108 => 45,  102 => 42,  71 => 29,  67 => 28,  63 => 22,  59 => 26,  47 => 17,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 102,  166 => 114,  163 => 68,  158 => 75,  156 => 93,  151 => 61,  142 => 58,  138 => 97,  136 => 155,  123 => 50,  121 => 95,  117 => 93,  115 => 47,  105 => 45,  91 => 89,  69 => 55,  62 => 25,  49 => 18,  101 => 37,  94 => 90,  89 => 37,  85 => 87,  79 => 31,  75 => 30,  68 => 30,  56 => 21,  50 => 22,  29 => 16,  87 => 28,  72 => 56,  66 => 23,  55 => 21,  41 => 14,  21 => 11,  98 => 36,  93 => 39,  88 => 33,  78 => 84,  46 => 22,  32 => 21,  27 => 16,  43 => 15,  40 => 19,  44 => 21,  35 => 11,  31 => 17,  25 => 12,  38 => 19,  26 => 14,  24 => 13,  22 => 11,  19 => 11,  209 => 96,  203 => 277,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 116,  168 => 44,  164 => 113,  162 => 40,  154 => 67,  149 => 36,  147 => 69,  144 => 99,  141 => 98,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 108,  106 => 44,  103 => 38,  99 => 30,  95 => 41,  92 => 35,  86 => 17,  82 => 33,  80 => 25,  73 => 24,  64 => 24,  60 => 26,  57 => 23,  54 => 26,  51 => 19,  48 => 22,  45 => 16,  42 => 13,  39 => 13,  36 => 19,  33 => 16,  30 => 17,);
    }
}
