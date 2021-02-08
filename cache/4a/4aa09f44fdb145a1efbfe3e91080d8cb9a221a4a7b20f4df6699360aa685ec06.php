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

/* auth/enter.twig */
class __TwigTemplate_219356f22faa2f575de04633a9da0acaa870c62e58abb5963301eef1dffa6c4f extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "auth/enter.twig", 1);
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
\t\t\t<div class=\"auth-enter\">
\t\t\t\t<div class=\"person-area\" id=\"enter\">
\t\t\t\t\t<p class=\"title\">Вход через социальные сети:</p>
\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t<div class=\"list\">
\t\t\t\t\t\t\t<form action=\"../api/auth-vk\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"vk_save\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<form action=\"../api/auth-fb\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"fb_save\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"fb\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"save_sn\" checked id=\"checked_network\"/>
\t\t\t\t\t</label>
\t\t\t\t\t<hr/>
\t\t\t\t\t<form action=\"/authorization/auth\" class=\"site\" method=\"POST\">
\t\t\t\t\t\t<p class=\"title\">Вход через сайт:</p>
\t\t\t\t\t\t<label class=\"login\">
\t\t\t\t\t\t\t<p class=\"title-small\">Введите логин или email_</p>
\t\t\t\t\t\t\t<input type=\"text\" name=\"login\" placeholder=\"Введите логин или email...\"/>
\t\t\t\t\t\t\t";
        // line 43
        if (($context["error"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<p class=\"message\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"pass\">
\t\t\t\t\t\t\t<p class=\"title-small\">Введите пароль_</p>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Введите пароль...\"/>
\t\t\t\t\t\t\t";
        // line 50
        if (($context["error"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t<p class=\"message\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t<a href=\"/auth/reg\" class=\"a-reg\">Если вы еще не зарегистрированы, вам сюда</a>
\t\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"save\" checked/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"enter\"/>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<button name=\"sn\" value=\"site\">Войти</button>
\t\t\t\t\t</form>

\t\t\t\t</div>
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
        return "auth/enter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  108 => 51,  106 => 50,  100 => 46,  94 => 44,  92 => 43,  50 => 3,  46 => 2,  35 => 1,);
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
\t\t\t<div class=\"auth-enter\">
\t\t\t\t<div class=\"person-area\" id=\"enter\">
\t\t\t\t\t<p class=\"title\">Вход через социальные сети:</p>
\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t<div class=\"list\">
\t\t\t\t\t\t\t<form action=\"../api/auth-vk\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"vk_save\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<form action=\"../api/auth-fb\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"fb_save\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"fb\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"save_sn\" checked id=\"checked_network\"/>
\t\t\t\t\t</label>
\t\t\t\t\t<hr/>
\t\t\t\t\t<form action=\"/authorization/auth\" class=\"site\" method=\"POST\">
\t\t\t\t\t\t<p class=\"title\">Вход через сайт:</p>
\t\t\t\t\t\t<label class=\"login\">
\t\t\t\t\t\t\t<p class=\"title-small\">Введите логин или email_</p>
\t\t\t\t\t\t\t<input type=\"text\" name=\"login\" placeholder=\"Введите логин или email...\"/>
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<p class=\"message\">{{error}}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"pass\">
\t\t\t\t\t\t\t<p class=\"title-small\">Введите пароль_</p>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Введите пароль...\"/>
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<p class=\"message\">{{error}}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<a href=\"/auth/reg\" class=\"a-reg\">Если вы еще не зарегистрированы, вам сюда</a>
\t\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"authorization/logout\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"save\" checked/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"enter\"/>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<button name=\"sn\" value=\"site\">Войти</button>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t</section>

{% endblock %}
", "auth/enter.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\auth\\enter.twig");
    }
}
