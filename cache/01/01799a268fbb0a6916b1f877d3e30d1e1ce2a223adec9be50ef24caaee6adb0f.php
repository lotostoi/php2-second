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
        echo "<section class=\"common wrapper\">
    <div class=\"common-header__fone\">
        <div class=\"common-header__cont\">
            <h1 class=\"common-header__h1\">Личный кабинет_</h1>
        </div>
    </div>
    <div class=\"common-body\">
        <div class=\"person-area\">
            <form class=\"site\" method=\"POST\">
                <div class=\"img\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "img_big", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"user-image\" />
                </div>
                <div class=\"field\">
                    <span class=\"title\">Login:</span>
                    <span class=\"value\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "login", [], "any", false, false, false, 17), "html", null, true);
        echo " </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Имя:</span>
                    <span class=\"value\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "first_name", [], "any", false, false, false, 21), "html", null, true);
        echo " </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Фамилия:</span>
                    <span class=\"value\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "last_name", [], "any", false, false, false, 25), "html", null, true);
        echo " </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Email:</span>
                    <span class=\"value\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["full_user"] ?? null), "email", [], "any", false, false, false, 29), "html", null, true);
        echo " </span>
                </div>
                <input type=\"hidden\" name=\"action\" value=\"exit\">
                <a href=\"/authorization/exit\" class=\"exit\">Выйти</a>
            </form>
        </div>
    </div>
</section>
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
        return array (  90 => 29,  83 => 25,  76 => 21,  69 => 17,  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
<section class=\"common wrapper\">
    <div class=\"common-header__fone\">
        <div class=\"common-header__cont\">
            <h1 class=\"common-header__h1\">Личный кабинет_</h1>
        </div>
    </div>
    <div class=\"common-body\">
        <div class=\"person-area\">
            <form class=\"site\" method=\"POST\">
                <div class=\"img\">
                    <img src=\"{{full_user.img_big}}\" alt=\"user-image\" />
                </div>
                <div class=\"field\">
                    <span class=\"title\">Login:</span>
                    <span class=\"value\">{{full_user.login}} </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Имя:</span>
                    <span class=\"value\">{{full_user.first_name}} </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Фамилия:</span>
                    <span class=\"value\">{{full_user.last_name}} </span>
                </div>
                <div class=\"field\">
                    <span class=\"title\">Email:</span>
                    <span class=\"value\">{{full_user.email}} </span>
                </div>
                <input type=\"hidden\" name=\"action\" value=\"exit\">
                <a href=\"/authorization/exit\" class=\"exit\">Выйти</a>
            </form>
        </div>
    </div>
</section>
{% endblock %}", "auth/logout.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\auth\\logout.twig");
    }
}
