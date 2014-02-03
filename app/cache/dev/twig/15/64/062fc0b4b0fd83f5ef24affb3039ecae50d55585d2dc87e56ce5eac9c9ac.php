<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_1564062fc0b4b0fd83f5ef24affb3039ecae50d55585d2dc87e56ce5eac9c9ac extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  21 => 2,  94 => 22,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  32 => 12,  22 => 2,  54 => 21,  43 => 8,  26 => 3,  27 => 4,  20 => 1,  97 => 16,  92 => 21,  87 => 20,  82 => 11,  77 => 10,  71 => 8,  62 => 23,  59 => 15,  57 => 14,  53 => 12,  50 => 8,  48 => 10,  44 => 10,  40 => 8,  31 => 5,  25 => 4,  232 => 31,  229 => 30,  225 => 28,  111 => 25,  99 => 20,  96 => 19,  89 => 20,  35 => 4,  30 => 3,  982 => 756,  872 => 754,  868 => 753,  863 => 752,  860 => 751,  856 => 746,  853 => 745,  850 => 744,  846 => 69,  843 => 68,  840 => 67,  836 => 49,  833 => 48,  830 => 47,  825 => 759,  821 => 756,  819 => 751,  813 => 747,  811 => 744,  230 => 165,  134 => 70,  132 => 67,  115 => 43,  112 => 42,  110 => 47,  104 => 21,  101 => 24,  65 => 17,  45 => 14,  41 => 9,  36 => 7,  33 => 5,);
    }
}
