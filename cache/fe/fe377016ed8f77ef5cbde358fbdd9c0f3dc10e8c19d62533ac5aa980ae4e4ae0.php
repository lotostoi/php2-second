<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* p404.twig */
class __TwigTemplate_b5d500f316311959f9ca7aa5e80e0266757e6d3c0b3f1a88adce9a765ce9216f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "mainLayuot.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mainLayuot.twig", "p404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<section class=\"p404\">
\t\t<header class=\"header404\"></header>
\t\t<div class=\"message\">
\t\t\t<h1>404</h1>
\t\t\t<p class=\"mess\">
\t\t\t\tСтраница \"";
        // line 8
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "\" - не найдена</p>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "p404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"p404\">
\t\t<header class=\"header404\"></header>
\t\t<div class=\"message\">
\t\t\t<h1>404</h1>
\t\t\t<p class=\"mess\">
\t\t\t\tСтраница \"{{message}}\" - не найдена</p>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t</section>

{% endblock %}
", "p404.twig", "D:\\PHP\\open_server_5_3_7_basic\\OpenServer\\domains\\php2-second\\twigViews\\p404.twig");
    }
}
