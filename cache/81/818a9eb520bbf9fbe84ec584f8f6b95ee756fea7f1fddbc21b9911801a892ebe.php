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

/* index.twig */
class __TwigTemplate_6c77b82b5a87e8454b5422e9a9f48232cc84a9b6ae258bad2aac7fc1a69be757 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<main>
\t\t<section class=\"aboutMe wrapper\">
\t\t\t<div class=\"aboutMe__filter\">
\t\t\t\t<div class=\"aboutMe__cont\">
\t\t\t\t\t<div class=\"aboutMe__img\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img src=\"/src/img/ca9f0debaa187c2214f524d0a5d4e78b.jpg\" width=\"300\" heigth=\"372\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"aboutMe__desc\">
\t\t\t\t\t\t<h1>Alexander Plotnikov_</h1>
\t\t\t\t\t\t<p class=\"status\">Frontend/backend developer</p>
\t\t\t\t\t\t<div class=\"contacts\">
\t\t\t\t\t\t\t<div class=\"fone\">
\t\t\t\t\t\t\t\t<span class=\"title\">Phone:</span>
\t\t\t\t\t\t\t\t<span class=\"value\">+79242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t\t<span class=\"title\">Email:</span>
\t\t\t\t\t\t\t\t<span class=\"value\">lotos_toi@mail.ru</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sotsseti\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-github\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"hello wrapper\">
\t\t\t<div class=\"hello__cont\">
\t\t\t\t<h3 class=\"hello__title\">Привет_</h3>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tВсем привет! Меня зовут Александр Плотников, и я приветствую вас на своём персональном сайте!
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tЗдесь Вы можете найти информацию обо мне, посмотреть моё портфолио как веб-разработчика, а также почитать или
\t\t\t\t\t\t\t\t\t\t          добавить отзывы.
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tВ настоящее время я заканчиваю обучение на факультете веб-разработки в онлайн школе Geek Brains. Также являюсь
\t\t\t\t\t\t\t\t\t\t          наставником для студентов по таким направлениям как js, node.js, php и html&css.
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tНадеюсь вам тут понравиться!
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__message\">
\t\t\t\t\tНа данный момент работа над сайтом не завершена, поэтому возможны баги, а также часть функционала пока не
\t\t\t\t\t\t\t\t\t\t          работает…
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t</main>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<main>
\t\t<section class=\"aboutMe wrapper\">
\t\t\t<div class=\"aboutMe__filter\">
\t\t\t\t<div class=\"aboutMe__cont\">
\t\t\t\t\t<div class=\"aboutMe__img\">
\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<img src=\"/src/img/ca9f0debaa187c2214f524d0a5d4e78b.jpg\" width=\"300\" heigth=\"372\" alt=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<section class=\"aboutMe__desc\">
\t\t\t\t\t\t<h1>Alexander Plotnikov_</h1>
\t\t\t\t\t\t<p class=\"status\">Frontend/backend developer</p>
\t\t\t\t\t\t<div class=\"contacts\">
\t\t\t\t\t\t\t<div class=\"fone\">
\t\t\t\t\t\t\t\t<span class=\"title\">Phone:</span>
\t\t\t\t\t\t\t\t<span class=\"value\">+79242521756</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t\t<span class=\"title\">Email:</span>
\t\t\t\t\t\t\t\t<span class=\"value\">lotos_toi@mail.ru</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sotsseti\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-github\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"hello wrapper\">
\t\t\t<div class=\"hello__cont\">
\t\t\t\t<h3 class=\"hello__title\">Привет_</h3>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tВсем привет! Меня зовут Александр Плотников, и я приветствую вас на своём персональном сайте!
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tЗдесь Вы можете найти информацию обо мне, посмотреть моё портфолио как веб-разработчика, а также почитать или
\t\t\t\t\t\t\t\t\t\t          добавить отзывы.
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tВ настоящее время я заканчиваю обучение на факультете веб-разработки в онлайн школе Geek Brains. Также являюсь
\t\t\t\t\t\t\t\t\t\t          наставником для студентов по таким направлениям как js, node.js, php и html&css.
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__text\">
\t\t\t\t\tНадеюсь вам тут понравиться!
\t\t\t\t</p>
\t\t\t\t<p class=\"hello__message\">
\t\t\t\t\tНа данный момент работа над сайтом не завершена, поэтому возможны баги, а также часть функционала пока не
\t\t\t\t\t\t\t\t\t\t          работает…
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t</main>
{% endblock %}
", "index.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\index.twig");
    }
}
