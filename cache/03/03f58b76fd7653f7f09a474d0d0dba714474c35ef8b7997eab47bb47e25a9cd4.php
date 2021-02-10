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
\t\t\t\t<?php foreach (\$tags as \$tag) : ?>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "\t\t\t\t\t<label class=\"filter\">
\t\t\t\t\t\t<span class=\"title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo ":
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "\"/>
\t\t\t\t\t</label>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t<button id=\"pf_filter\">Применить</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"portfolio-catalog\">
\t\t\t";
        // line 32
        if ((($context["admin"] ?? null) && (0 === twig_compare(($context["del"] ?? null), "ok")))) {
            // line 33
            echo "\t\t\t\t<p class=\"result_loader\">Работа была удалена успешно...</p>
\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if (($context["admin"] ?? null)) {
            // line 36
            echo "\t\t\t\t<a href=\"/work/add\" class=\"portfolio-catalog__outside-work\">Add work</a>
\t\t\t\t<a href=\"/filters\" class=\"portfolio-catalog__outside-filters\">Edit filters</a>
\t\t\t";
        }
        // line 39
        echo "\t\t\t<div class=\"portfolio-catalog__cont\">
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catalog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 41
            echo "\t\t\t\t\t<div class=\"product\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img src=\"/src/smallimages/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "img", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "\" width=\"417\" height=\"292\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t\t<span class=\"title\">Tехнологии:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "tags", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"/work/work?id=";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" class=\"link\">Подробнее...</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>\t\t
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t</section>
\t\t
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
        return array (  162 => 57,  153 => 54,  150 => 53,  141 => 51,  137 => 50,  130 => 46,  122 => 43,  118 => 41,  114 => 40,  111 => 39,  106 => 36,  103 => 35,  99 => 33,  97 => 32,  91 => 28,  82 => 25,  77 => 23,  74 => 22,  70 => 21,  50 => 3,  46 => 2,  35 => 1,);
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
\t\t\t\t<?php foreach (\$tags as \$tag) : ?>
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
\t\t\t\t<a href=\"/work/add\" class=\"portfolio-catalog__outside-work\">Add work</a>
\t\t\t\t<a href=\"/filters\" class=\"portfolio-catalog__outside-filters\">Edit filters</a>
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
\t\t<script src=\"/src/js/smoothScroll.js\"></script>\t\t
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t</section>
\t\t
{% endblock %}
", "portfolio/portfolio.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\portfolio.twig");
    }
}
