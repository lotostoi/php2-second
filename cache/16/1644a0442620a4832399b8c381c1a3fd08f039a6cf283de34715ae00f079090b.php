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

/* portfolio/edit.twig */
class __TwigTemplate_5043fa9942d5e642ed25596d85f7c200d0a02fc48ca21b9666b7b80e9d8edca9 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "portfolio/edit.twig", 1);
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
\t\t\t\t\t\t\t<input type=\"file\" class=\"img-work\" name=\"work-image[]\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"linkToImg\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["linkToImg"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"picture\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "load", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Загрузите изображение</p>
\t\t\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__tags\">
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 31
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_tag_";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["tag"], "tagForName", [], "any", false, false, false, 33)) {
                echo " checked ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tagForName", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "tags", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Выберите теги!</p>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__title\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите название!</p>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__git\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to git:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"git\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["git"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>

\t\t\t\t\t\t";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "git", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__project\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Link to project:</span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"project\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["project"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "project", [], "any", false, false, false, 66)) {
            // line 67
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите сылку...</p>
\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form__description\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"description\">";
        // line 74
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 76)) {
            // line 77
            echo "\t\t\t\t\t\t\t<p class=\"form__message\">Введите описание...</p>
\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t<input type=\"hidden\" name=\"change\" value=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"editWork block\" disabled>Edit work</button>
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
        return "portfolio/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 79,  193 => 77,  191 => 76,  186 => 74,  179 => 69,  175 => 67,  173 => 66,  168 => 64,  161 => 59,  157 => 57,  155 => 56,  149 => 53,  143 => 49,  139 => 47,  137 => 46,  132 => 44,  125 => 39,  121 => 37,  118 => 36,  103 => 33,  99 => 32,  96 => 31,  92 => 30,  86 => 26,  82 => 24,  80 => 23,  73 => 19,  66 => 14,  62 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
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
\t\t\t\t\t\t\t<input type=\"file\" class=\"img-work\" name=\"work-image[]\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"linkToImg\" value=\"{{linkToImg}}\">
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
\t\t\t\t\t\t\t<p class=\"form__message\">Введите название!</p>
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
\t\t\t\t\t<input type=\"hidden\" name=\"change\" value=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"editWork block\" disabled>Edit work</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/server.js\"></script>
\t<script src=\"/src/js/admin-work.js\"></script>


{% endblock %}
", "portfolio/edit.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\edit.twig");
    }
}
