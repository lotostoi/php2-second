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

/* mainLayuot.twig */
class __TwigTemplate_0b316afb6e2f8da74585f6c71a6cc48eca38a7e9366f29900cdb7ac91646d818 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "mainLayuot.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<header class=\"wrapper header modif\">
\t\t<div class=\"header__cont modif\">
\t\t\t<nav class=\"header__nav\">
\t\t\t\t<div class=\"on-of\">
\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<a href=\"/\" class=\"modif\">Главная</a>
\t\t\t\t\t<a href=\"/resume\" class=\"modif\">Резюме</a>
\t\t\t\t\t<a href=\"/work\" class=\"modif\">Портфолио</a>
\t\t\t\t\t<a href=\"/reviews\" class=\"modif\">Отзывы</a>
\t\t\t\t\t<a href=\"#contacts\" class=\"modif\">Контакты</a>
\t\t\t\t</div>
\t\t\t</nav>
\t";
        // line 24
        echo "\t\t\t<div class=\"header__login\">
\t\t\t\t";
        // line 25
        if ( !($context["user"] ?? null)) {
            // line 26
            echo "\t\t\t\t\t<a href=\"/authorization/enter\" data-id=\"entre\" class=\"modif\">Войти</a>
\t\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t\t<a href=\"/authorization/logout\" data-id=\"user\" class=\"modif\">";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</div>
\t\t</div>
\t</header>
";
    }

    // line 34
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "\t<footer class=\"footer wrapper\" id=\"contacts\">
\t\t<div class=\"footer__filter\">
\t\t\t<div class=\"footer__cont\">
\t\t\t\t<h3 class=\"footer__title\">Мои контакты_</h3>
\t\t\t\t<div class=\"footer__body\">
\t\t\t\t\t<div class=\"footer__contacts\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Телефон:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Телеграм:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">What's app:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Discord:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<a href=\"#\">Facebook</a>
\t\t\t\t\t\t\t<a href=\"#\">Instagram</a>
\t\t\t\t\t\t\t<a href=\"#\">GitHub</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form class=\"footer__form\" id=\"footerForm\">
\t\t\t\t\t\t<p class=\"footer__form-success block\" data-result=\"saccess\">Ваше сообщение успешно отправленно, мы свяжемся с вами в ближайшее время...</p>
\t\t\t\t\t\t<p class=\"footer__form-error block\" data-result=\"error\">При отправке сообщения возникала ошибка, повторите попытку позже...</p>
\t\t\t\t\t\t<h4>Форма обратной связи_</h4>
\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Ваше имя\">
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"name\">Минимальная длина имени 3 символа</small>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Вашь e-mail\">
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"email\">Не коректный email адрес</small>
\t\t\t\t\t\t<textarea name=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Текст сообщения\"></textarea>
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"message\">Минимальная длина сообщения 3 символа</small>
\t\t\t\t\t\t<button class=\"sendMessage\">
\t\t\t\t\t\t\t<div class=\"lds-ring block\">
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"title\">Отправить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<p class=\"rights\">©
\t\t\t\t\t<?= date('Y') ?>
\t\t\t\t\tАлександр Плотников. Все права защищены.</p>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/form.js\"></script>
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "mainLayuot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  89 => 34,  82 => 30,  76 => 28,  72 => 26,  70 => 25,  67 => 24,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block header %}
\t<header class=\"wrapper header modif\">
\t\t<div class=\"header__cont modif\">
\t\t\t<nav class=\"header__nav\">
\t\t\t\t<div class=\"on-of\">
\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<a href=\"/\" class=\"modif\">Главная</a>
\t\t\t\t\t<a href=\"/resume\" class=\"modif\">Резюме</a>
\t\t\t\t\t<a href=\"/work\" class=\"modif\">Портфолио</a>
\t\t\t\t\t<a href=\"/reviews\" class=\"modif\">Отзывы</a>
\t\t\t\t\t<a href=\"#contacts\" class=\"modif\">Контакты</a>
\t\t\t\t</div>
\t\t\t</nav>
\t{# \t\t<form action=\"\" class=\"header__search\">
\t\t\t\t<input type=\"input\" name=\"search\" class=\"modif\"/>
\t\t\t\t<button type=\"submit\">
\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t</form> #}
\t\t\t<div class=\"header__login\">
\t\t\t\t{% if not user %}
\t\t\t\t\t<a href=\"/authorization/enter\" data-id=\"entre\" class=\"modif\">Войти</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"/authorization/logout\" data-id=\"user\" class=\"modif\">{{user}}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</header>
{% endblock %}
{% block footer %}
\t<footer class=\"footer wrapper\" id=\"contacts\">
\t\t<div class=\"footer__filter\">
\t\t\t<div class=\"footer__cont\">
\t\t\t\t<h3 class=\"footer__title\">Мои контакты_</h3>
\t\t\t\t<div class=\"footer__body\">
\t\t\t\t\t<div class=\"footer__contacts\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Телефон:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Телеграм:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">What's app:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<span class=\"field__title\">Discord:</span>
\t\t\t\t\t\t\t\t<span class=\"field__content\">89242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<a href=\"#\">Facebook</a>
\t\t\t\t\t\t\t<a href=\"#\">Instagram</a>
\t\t\t\t\t\t\t<a href=\"#\">GitHub</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form class=\"footer__form\" id=\"footerForm\">
\t\t\t\t\t\t<p class=\"footer__form-success block\" data-result=\"saccess\">Ваше сообщение успешно отправленно, мы свяжемся с вами в ближайшее время...</p>
\t\t\t\t\t\t<p class=\"footer__form-error block\" data-result=\"error\">При отправке сообщения возникала ошибка, повторите попытку позже...</p>
\t\t\t\t\t\t<h4>Форма обратной связи_</h4>
\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Ваше имя\">
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"name\">Минимальная длина имени 3 символа</small>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Вашь e-mail\">
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"email\">Не коректный email адрес</small>
\t\t\t\t\t\t<textarea name=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Текст сообщения\"></textarea>
\t\t\t\t\t\t<small class=\"errorMessage block\" data-name=\"message\">Минимальная длина сообщения 3 символа</small>
\t\t\t\t\t\t<button class=\"sendMessage\">
\t\t\t\t\t\t\t<div class=\"lds-ring block\">
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"title\">Отправить</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<p class=\"rights\">©
\t\t\t\t\t<?= date('Y') ?>
\t\t\t\t\tАлександр Плотников. Все права защищены.</p>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/form.js\"></script>
\t</footer>
{% endblock %}
", "mainLayuot.twig", "D:\\PHP\\open_server_5_3_7_basic\\OpenServer\\domains\\php2-second\\twigViews\\mainLayuot.twig");
    }
}
