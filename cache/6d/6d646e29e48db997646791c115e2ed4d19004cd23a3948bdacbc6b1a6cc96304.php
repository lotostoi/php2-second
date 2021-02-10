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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
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
            echo "\t\t\t\t\t<a href=\"./portfolio/edit?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "&order=1\" class=\"work__linkToEdit\">Edit this work</a>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t<div class=\"work__img\" data-src=\"/src/bigimages/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "img", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"/src/bigimages/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "img", [], "any", false, false, false, 18), "html", null, true);
        echo "\" width=\"720\" height=\"476\" alt=\"name\" class=\"big-picture__img\">
\t\t\t\t</div>
\t\t\t\t<h1 class=\"work__title\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
\t\t\t\t<p class=\"work__description\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "project", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"work__a\">Посмотреть проект...</a>
\t\t\t\t";
        // line 23
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "git", [], "any", false, false, false, 23), "noaccess"))) {
            // line 24
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "git", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"work__a\">Посмотреть код..
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t<p class=\"work__noAccess\">Код закрыт по просьбе заказчика..</p>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t<a href=\"/portfolio/get\" class=\"work__a\">Назад в портфолио...
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
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
        return array (  113 => 29,  109 => 27,  102 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  83 => 18,  78 => 17,  72 => 15,  69 => 14,  65 => 12,  63 => 11,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">{{ work.title }}</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"work\">
\t\t\t\t{% if result =='ok' and admin %}
\t\t\t\t\t<p class=\"result_loader\">Работа была успешно отредактированна!</p>
\t\t\t\t{% endif %}
\t\t\t\t{% if admin %}
\t\t\t\t\t<a href=\"./portfolio/edit?id={{work.id}}&order=1\" class=\"work__linkToEdit\">Edit this work</a>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"work__img\" data-src=\"/src/bigimages/{{work.img}}\">
\t\t\t\t\t<img src=\"/src/bigimages/{{work.img}}\" width=\"720\" height=\"476\" alt=\"name\" class=\"big-picture__img\">
\t\t\t\t</div>
\t\t\t\t<h1 class=\"work__title\">{{work.title}}</h1>
\t\t\t\t<p class=\"work__description\">{{work.description}}</p>
\t\t\t\t<a href=\"{{work.project}}\" class=\"work__a\">Посмотреть проект...</a>
\t\t\t\t{%  if work.git != \"noaccess\" %}
\t\t\t\t\t<a href=\"{{work.git}}\" class=\"work__a\">Посмотреть код..
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<p class=\"work__noAccess\">Код закрыт по просьбе заказчика..</p>
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"/portfolio/get\" class=\"work__a\">Назад в портфолио...
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t</section>
{% endblock %}
", "portfolio/work.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\portfolio\\work.twig");
    }
}
