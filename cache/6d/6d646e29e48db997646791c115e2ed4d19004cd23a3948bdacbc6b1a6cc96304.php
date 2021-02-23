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

/* portfolio/work.twig */
class __TwigTemplate_470d1aba41ac526dd0ce5cbb23a3e6b353d0093f212a82d721251d7331fa4845 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "portfolio/work.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"work\">
\t\t\t\t";
        // line 11
        if (((0 === twig_compare(($context["result"] ?? null), "ok")) && ($context["admin"] ?? null))) {
            // line 12
            echo "\t\t\t\t\t<p class=\"result_loader\">Работа была успешно отредактированна!</p>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t";
        if (($context["admin"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t<a href=\"/work/edit?id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"work__linkToEdit\">Редактировать</a>
\t\t\t\t\t<div class=\"work__deleteWork\">
\t\t\t\t\t\t<a href=\"/work/delete?id=";
            // line 17
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"block delete\">Удалить</a>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"accessDel\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t<div class=\"work__img\" data-src=\"";
        echo twig_escape_filter($this->env, ($context["img_big"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"/";
        // line 22
        echo twig_escape_filter($this->env, ($context["img_big"] ?? null), "html", null, true);
        echo "\" width=\"720\" height=\"476\" alt=\"name\" class=\"big-picture__img\">
\t\t\t\t</div>
\t\t\t\t<div class=\"work__tags\">
\t\t\t\t\t\t\t<span class=\"title\">Tехнологии:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tagsForInput"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 28
            echo "\t\t\t\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t</div>
\t\t\t\t<p class=\"work__description\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["project"] ?? null), "html", null, true);
        echo "\" class=\"work__a\">Посмотреть проект...</a>
\t\t\t\t";
        // line 33
        if ((0 !== twig_compare(($context["git"] ?? null), "noaccess"))) {
            // line 34
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["git"] ?? null), "html", null, true);
            echo "\" class=\"work__a\">Посмотреть код..
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t<p class=\"work__noAccess\">Код закрыт по просьбе заказчика..</p>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t<a href=\"/work\" class=\"work__a\">Назад в портфолио...
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/work.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t
\t</section>
";
    }

    public function getTemplateName()
    {
        return "portfolio/work.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  131 => 37,  124 => 34,  122 => 33,  118 => 32,  114 => 31,  111 => 30,  102 => 28,  98 => 27,  90 => 22,  85 => 21,  78 => 17,  72 => 15,  69 => 14,  65 => 12,  63 => 11,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">{{title }}</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"work\">
\t\t\t\t{% if result =='ok' and admin %}
\t\t\t\t\t<p class=\"result_loader\">Работа была успешно отредактированна!</p>
\t\t\t\t{% endif %}
\t\t\t\t{% if admin %}
\t\t\t\t\t<a href=\"/work/edit?id={{id}}\" class=\"work__linkToEdit\">Редактировать</a>
\t\t\t\t\t<div class=\"work__deleteWork\">
\t\t\t\t\t\t<a href=\"/work/delete?id={{id}}\" class=\"block delete\">Удалить</a>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"accessDel\">
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"work__img\" data-src=\"{{img_big}}\">
\t\t\t\t\t<img src=\"/{{img_big}}\" width=\"720\" height=\"476\" alt=\"name\" class=\"big-picture__img\">
\t\t\t\t</div>
\t\t\t\t<div class=\"work__tags\">
\t\t\t\t\t\t\t<span class=\"title\">Tехнологии:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% for tag in tagsForInput %}
\t\t\t\t\t\t\t\t<span>{{tag}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t<p class=\"work__description\">{{description}}</p>
\t\t\t\t<a href=\"{{project}}\" class=\"work__a\">Посмотреть проект...</a>
\t\t\t\t{%  if git != \"noaccess\" %}
\t\t\t\t\t<a href=\"{{git}}\" class=\"work__a\">Посмотреть код..
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<p class=\"work__noAccess\">Код закрыт по просьбе заказчика..</p>
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"/work\" class=\"work__a\">Назад в портфолио...
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/functions.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/work.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t
\t</section>
{% endblock %}
", "portfolio/work.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\work.twig");
    }
}
