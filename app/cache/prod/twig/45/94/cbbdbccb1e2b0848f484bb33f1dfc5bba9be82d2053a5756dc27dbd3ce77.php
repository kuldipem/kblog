<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_4594cbbdbccb1e2b0848f484bb33f1dfc5bba9be82d2053a5756dc27dbd3ce77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  181 => 80,  175 => 77,  161 => 71,  553 => 186,  548 => 184,  541 => 180,  537 => 178,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 81,  255 => 74,  184 => 64,  180 => 62,  155 => 53,  146 => 49,  137 => 59,  126 => 42,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 393,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 128,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  346 => 99,  335 => 188,  331 => 187,  326 => 185,  304 => 174,  291 => 169,  272 => 158,  267 => 156,  242 => 140,  152 => 92,  114 => 71,  104 => 67,  97 => 63,  124 => 41,  76 => 57,  321 => 183,  318 => 122,  316 => 121,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  253 => 148,  250 => 93,  237 => 70,  232 => 136,  222 => 81,  215 => 78,  210 => 75,  191 => 69,  185 => 68,  153 => 56,  145 => 52,  110 => 48,  194 => 88,  186 => 83,  170 => 74,  160 => 58,  150 => 55,  139 => 60,  129 => 57,  84 => 39,  65 => 30,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 109,  289 => 112,  281 => 105,  277 => 78,  271 => 108,  265 => 99,  262 => 105,  260 => 77,  257 => 149,  251 => 101,  248 => 100,  239 => 97,  228 => 68,  225 => 87,  213 => 126,  211 => 81,  202 => 77,  197 => 119,  174 => 60,  165 => 59,  148 => 64,  134 => 45,  127 => 56,  113 => 41,  74 => 34,  52 => 20,  53 => 10,  37 => 17,  23 => 18,  34 => 16,  100 => 36,  81 => 30,  58 => 23,  20 => 11,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 116,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 87,  298 => 173,  294 => 90,  285 => 111,  283 => 166,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 61,  169 => 74,  140 => 55,  132 => 58,  128 => 49,  111 => 37,  107 => 36,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 67,  219 => 129,  217 => 79,  208 => 124,  204 => 66,  179 => 107,  159 => 70,  143 => 48,  135 => 35,  131 => 48,  119 => 28,  108 => 39,  102 => 38,  71 => 19,  67 => 27,  63 => 24,  59 => 23,  47 => 19,  28 => 13,  201 => 65,  196 => 90,  183 => 82,  171 => 102,  166 => 100,  163 => 62,  158 => 62,  156 => 93,  151 => 63,  142 => 61,  138 => 36,  136 => 56,  123 => 54,  121 => 53,  117 => 51,  115 => 50,  105 => 47,  91 => 34,  69 => 24,  62 => 24,  49 => 20,  101 => 73,  94 => 35,  89 => 40,  85 => 30,  79 => 18,  75 => 28,  68 => 31,  56 => 40,  50 => 20,  29 => 21,  87 => 33,  72 => 25,  66 => 25,  55 => 22,  41 => 18,  21 => 12,  98 => 44,  93 => 34,  88 => 60,  78 => 36,  46 => 35,  32 => 16,  27 => 13,  43 => 18,  40 => 18,  44 => 19,  35 => 16,  31 => 14,  25 => 12,  38 => 17,  26 => 13,  24 => 13,  22 => 12,  19 => 11,  209 => 82,  203 => 122,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 65,  173 => 65,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 48,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 40,  106 => 33,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 26,  60 => 22,  57 => 22,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 6,  30 => 15,);
    }
}
