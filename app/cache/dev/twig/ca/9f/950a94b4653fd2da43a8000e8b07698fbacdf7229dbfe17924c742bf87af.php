<?php

/* ::base.html.twig */
class __TwigTemplate_ca9f950a94b4653fd2da43a8000e8b07698fbacdf7229dbfe17924c742bf87af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'baseJavascripts' => array($this, 'block_baseJavascripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'lazyLoadStylesheets' => array($this, 'block_lazyLoadStylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"author\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "html", null, true);
        echo "\" />
        <meta name=\"email\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - K-Blog</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('baseJavascripts', $context, $blocks);
        // line 12
        echo "    </head>
    <body class=\"stretched\" >
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('lazyLoadStylesheets', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome !!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_baseJavascripts($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 16
    public function block_lazyLoadStylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  92 => 15,  87 => 14,  82 => 11,  77 => 10,  71 => 8,  62 => 16,  59 => 15,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  31 => 5,  25 => 1,  232 => 31,  229 => 30,  225 => 28,  111 => 25,  99 => 20,  96 => 19,  89 => 16,  35 => 6,  30 => 3,  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  830 => 47,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  230 => 165,  134 => 70,  132 => 67,  115 => 26,  112 => 50,  110 => 47,  104 => 21,  101 => 42,  65 => 17,  45 => 14,  41 => 7,  36 => 3,  33 => 2,);
    }
}
