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

/* auth/logout.twig */
class __TwigTemplate_96aec09fe6918aefc94596eae6e1fc410d0dcf4862a94caa65011f9a18cc54cb extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "auth/logout.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">Личный кабинет_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"person-area\">
\t\t\t\t<form class=\"site\" method=\"POST\">
\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "img_big", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"user-image\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Login:</span>
\t\t\t\t\t\t<span class=\"value\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "login", [], "any", false, false, false, 17), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Имя:</span>
\t\t\t\t\t\t<span class=\"value\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "first_name", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Фамилия:</span>
\t\t\t\t\t\t<span class=\"value\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "last_name", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Email:</span>
\t\t\t\t\t\t<span class=\"value\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"exit\">
\t\t\t\t\t<a href=\"/authorization/exit\" class=\"exit\">Выйти</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "auth/logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  85 => 27,  77 => 22,  69 => 17,  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Личный кабинет_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<div class=\"person-area\">
\t\t\t\t<form class=\"site\" method=\"POST\">
\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t<img src=\"{{full_user.img_big}}\" alt=\"user-image\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Login:</span>
\t\t\t\t\t\t<span class=\"value\">{{full_user.login}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Имя:</span>
\t\t\t\t\t\t<span class=\"value\">{{full_user.first_name}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Фамилия:</span>
\t\t\t\t\t\t<span class=\"value\">{{full_user.last_name}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<span class=\"title\">Email:</span>
\t\t\t\t\t\t<span class=\"value\">{{full_user.email}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"exit\">
\t\t\t\t\t<a href=\"/authorization/exit\" class=\"exit\">Выйти</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t</section>
{% endblock %}
", "auth/logout.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\auth\\logout.twig");
    }
}
