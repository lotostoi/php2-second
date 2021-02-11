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

/* portfolio/filters.twig */
class __TwigTemplate_23cce1e0a39cf1924b9b355d09794066cbafde1e15577e6b26ced3ac00fb59e6 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "portfolio/filters.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Редактировать фильтры_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"admin-filters\">
\t\t\t\t<p class=\"filters-message hiden\"></p>
\t\t\t\t<p class=\"filters-error hiden\"></p>
\t\t\t\t<div class=\"admin-filters__wrapper\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"filter\" data-tag=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" data-input=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button data-save=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">Сохранить</button>
\t\t\t\t\t\t\t<button data-delete=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">Удалить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"admin-filters__add\">
\t\t\t\t\t<form action=\"\" method=\"POST\" id=\"new-tag\">
\t\t\t\t\t\t<input type=\"text\" name=\"tag\" id=\"admin-filters-tag\" placeholder=\"новый фильтр\">
\t\t\t\t\t\t<button id=\"add-tag\">Добавить</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/functions.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/server.js\"></script>
\t<script src=\"/src/js/filters.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "portfolio/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  82 => 18,  78 => 17,  72 => 16,  67 => 15,  63 => 14,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Редактировать фильтры_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"admin-filters\">
\t\t\t\t<p class=\"filters-message hiden\"></p>
\t\t\t\t<p class=\"filters-error hiden\"></p>
\t\t\t\t<div class=\"admin-filters__wrapper\">
\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t<div class=\"filter\" data-tag=\"{{tag.id}}\">
\t\t\t\t\t\t\t<input type=\"text\" data-input=\"{{tag.id}}\" value=\"{{tag.name}}\">
\t\t\t\t\t\t\t<button data-save=\"{{tag.id}}\">Сохранить</button>
\t\t\t\t\t\t\t<button data-delete=\"{{tag.id}}\">Удалить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"admin-filters__add\">
\t\t\t\t\t<form action=\"\" method=\"POST\" id=\"new-tag\">
\t\t\t\t\t\t<input type=\"text\" name=\"tag\" id=\"admin-filters-tag\" placeholder=\"новый фильтр\">
\t\t\t\t\t\t<button id=\"add-tag\">Добавить</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/functions.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/server.js\"></script>
\t<script src=\"/src/js/filters.js\"></script>

{% endblock %}
", "portfolio/filters.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\filters.twig");
    }
}
