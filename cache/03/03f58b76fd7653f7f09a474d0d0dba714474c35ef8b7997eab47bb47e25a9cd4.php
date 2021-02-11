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

/* portfolio/portfolio.twig */
class __TwigTemplate_07bf8ad23c69ecfbae9d89a4b41f64907937790f80730203feb9065de324fc89 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "portfolio/portfolio.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">Мои работы_</h1>
\t\t\t\t<div class=\"common-header__description\">
\t\t\t\t\tВ этома разделе вы можете посомтреть некоторые мои работы_
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"portfolio-header__body\">
\t\t\t<div class=\"filters\" id=\"pf_tags\">

\t\t\t\t<label class=\"filter\" data-name=\"all\">
\t\t\t\t\t<span class=\"title\" data-name=\"all\">Все работы:
\t\t\t\t\t</span>
\t\t\t\t\t<input type=\"checkbox\" name=\"all\" data-name=\"all\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "\t\t\t\t\t<label class=\"filter\">
\t\t\t\t\t\t<span class=\"title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo ":
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\"/>
\t\t\t\t\t</label>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t<button id=\"pf_filter\">Применить</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"portfolio-catalog\">
\t\t\t";
        // line 31
        if ((($context["admin"] ?? null) && (0 === twig_compare(($context["del"] ?? null), "ok")))) {
            // line 32
            echo "\t\t\t\t<p class=\"result_loader\">Работа была удалена успешно...</p>
\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        if (($context["admin"] ?? null)) {
            // line 35
            echo "\t\t\t\t<a href=\"/work/add\" class=\"portfolio-catalog__outside-work\">Добавить работу</a>
\t\t\t\t<a href=\"/work/filters\" class=\"portfolio-catalog__outside-filters\">Фильтры</a>
\t\t\t";
        }
        // line 38
        echo "\t\t\t<div class=\"portfolio-catalog__cont\">
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catalog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 40
            echo "\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img src=\"/src/smallimages/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "img", [], "any", false, false, false, 42), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "\" width=\"417\" height=\"292\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t<span class=\"title\">Tехнологии:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "tags", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "\t\t\t\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"/work/work?id=";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" class=\"link\">Подробнее...</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t\t<script src=\"/src/js/portfolio.js\"></script>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "portfolio/portfolio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 56,  152 => 53,  149 => 52,  140 => 50,  136 => 49,  129 => 45,  121 => 42,  117 => 40,  113 => 39,  110 => 38,  105 => 35,  102 => 34,  98 => 32,  96 => 31,  90 => 27,  81 => 24,  76 => 22,  73 => 21,  69 => 20,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Мои работы_</h1>
\t\t\t\t<div class=\"common-header__description\">
\t\t\t\t\tВ этома разделе вы можете посомтреть некоторые мои работы_
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"portfolio-header__body\">
\t\t\t<div class=\"filters\" id=\"pf_tags\">

\t\t\t\t<label class=\"filter\" data-name=\"all\">
\t\t\t\t\t<span class=\"title\" data-name=\"all\">Все работы:
\t\t\t\t\t</span>
\t\t\t\t\t<input type=\"checkbox\" name=\"all\" data-name=\"all\" checked=\"checked\"/>
\t\t\t\t</label>
\t\t\t\t{% for tag in tags %}
\t\t\t\t\t<label class=\"filter\">
\t\t\t\t\t\t<span class=\"title\">{{tag.name}}:
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"{{tag.name}}\"/>
\t\t\t\t\t</label>
\t\t\t\t{% endfor %}
\t\t\t\t<button id=\"pf_filter\">Применить</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"portfolio-catalog\">
\t\t\t{% if admin and del == 'ok' %}
\t\t\t\t<p class=\"result_loader\">Работа была удалена успешно...</p>
\t\t\t{% endif %}
\t\t\t{% if admin %}
\t\t\t\t<a href=\"/work/add\" class=\"portfolio-catalog__outside-work\">Добавить работу</a>
\t\t\t\t<a href=\"/work/filters\" class=\"portfolio-catalog__outside-filters\">Фильтры</a>
\t\t\t{% endif %}
\t\t\t<div class=\"portfolio-catalog__cont\">
\t\t\t\t{% for work in catalog %}
\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img src=\"/src/smallimages/{{work.img}}\" alt=\"{{work.title}}\" width=\"417\" height=\"292\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t{{work.title}}</p>
\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t<span class=\"title\">Tехнологии:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% for tag in work.tags %}
\t\t\t\t\t\t\t\t<span>{{tag}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"/work/work?id={{work.id}}\" class=\"link\">Подробнее...</a>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t\t<script src=\"/src/js/portfolio.js\"></script>
\t</section>

{% endblock %}
", "portfolio/portfolio.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\portfolio.twig");
    }
}
