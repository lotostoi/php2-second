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

/* portfolio/add.twig */
class __TwigTemplate_4f949cb62b1522896f6d878b566070ec71752054c10f5d002d1a8a306b8e8a7e extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "portfolio/add.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">Добавить работу_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"admin-catalog\">
\t\t\t\t";
        // line 11
        if ((0 === twig_compare(($context["result"] ?? null), "ok"))) {
            // line 12
            echo "\t\t\t\t\t<p class=\"result_loader\">Работа была успешно добавлена!</p>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t<form action=\"\" enctype=\"multipart/form-data\" class=\"admin-catalog__from\" method=\"POST\">

\t\t\t\t\t<div class=\"form__img\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<label for=\"\">Load image:</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"img-work\" name=\"work-image[]\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"linkToImg\" value=\"\">
\t\t\t\t\t\t\t<div class=\"picture\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "load", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Загрузите изображение</p>
\t\t\t\t\t\t";
        }
        // line 27
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__tags\">
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 32
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_tag_";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["tag"], "tagForName", [], "any", false, false, false, 34)) {
                echo " checked ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tagForName", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "tags", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Выберите теги!</p>
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__title\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 47)) {
            // line 48
            echo "\t\t\t\t\t\t\t<p class=\"form__messeage\">Введите название!</p>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__git\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to git:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"git\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["git"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>

\t\t\t\t\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "git", [], "any", false, false, false, 57)) {
            // line 58
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__project\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to project:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"project\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["project"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "project", [], "any", false, false, false, 67)) {
            // line 68
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__description\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"description\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 77)) {
            // line 78
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите описание...</p>
\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t<button type=\"submit\">Add work</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/server.js\"></script>
\t<script src=\"/src/js/admin-work.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "portfolio/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 80,  191 => 78,  189 => 77,  184 => 75,  177 => 70,  173 => 68,  171 => 67,  166 => 65,  159 => 60,  155 => 58,  153 => 57,  147 => 54,  141 => 50,  137 => 48,  135 => 47,  130 => 45,  123 => 40,  119 => 38,  116 => 37,  101 => 34,  97 => 33,  94 => 32,  90 => 31,  84 => 27,  80 => 25,  78 => 24,  66 => 14,  62 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Добавить работу_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"admin-catalog\">
\t\t\t\t{% if result =='ok' %}
\t\t\t\t\t<p class=\"result_loader\">Работа была успешно добавлена!</p>
\t\t\t\t{% endif %}
\t\t\t\t<form action=\"\" enctype=\"multipart/form-data\" class=\"admin-catalog__from\" method=\"POST\">

\t\t\t\t\t<div class=\"form__img\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<label for=\"\">Load image:</label>
\t\t\t\t\t\t\t<input type=\"file\" class=\"img-work\" name=\"work-image[]\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"linkToImg\" value=\"\">
\t\t\t\t\t\t\t<div class=\"picture\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{% if errors.load %}
\t\t\t\t\t\t\t<p class=\"form__message\">Загрузите изображение</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__tags\">
\t\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span>{{ tag.name}}</span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_tag_{{tag.name}}\" {% if tag.tagForName %} checked {% endif %} value=\"{{tag.tagForName}}\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% if errors.tags %}
\t\t\t\t\t\t\t<p class=\"form__message\">Выберите теги!</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__title\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"{{title}}\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{% if errors.title %}
\t\t\t\t\t\t\t<p class=\"form__messeage\">Введите название!</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__git\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to git:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"git\" value=\"{{git}}\">
\t\t\t\t\t\t</label>

\t\t\t\t\t\t{% if errors.git %}
\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__project\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to project:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"project\" value=\"{{project}}\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{% if errors.project %}
\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__description\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"description\">{{description}}</textarea>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{% if errors.description %}
\t\t\t\t\t\t\t<p class=\"form__message\">Введите описание...</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t<button type=\"submit\">Add work</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/server.js\"></script>
\t<script src=\"/src/js/admin-work.js\"></script>

{% endblock %}
", "portfolio/add.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\add.twig");
    }
}
