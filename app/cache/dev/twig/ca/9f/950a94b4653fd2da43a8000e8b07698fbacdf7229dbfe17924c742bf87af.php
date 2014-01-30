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
        return array (  97 => 16,  92 => 15,  87 => 14,  82 => 11,  77 => 10,  71 => 8,  65 => 17,  59 => 15,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  31 => 5,  25 => 1,  230 => 30,  227 => 29,  115 => 25,  111 => 24,  104 => 20,  99 => 19,  96 => 18,  89 => 15,  45 => 13,  41 => 6,  35 => 6,  1893 => 1707,  1783 => 1705,  1779 => 1704,  1774 => 1703,  1771 => 1702,  1766 => 1707,  1764 => 1702,  101 => 43,  98 => 42,  62 => 16,  42 => 7,  38 => 4,  33 => 3,  30 => 2,);
    }
}
