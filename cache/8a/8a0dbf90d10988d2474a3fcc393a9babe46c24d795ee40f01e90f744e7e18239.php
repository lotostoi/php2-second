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

/* resume/resume.twig */
class __TwigTemplate_27a31f7dfef8d7aba44dfe911c8925e93c9d5815f18ab4c4a1c722f791af6270 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "resume/resume.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">Резюме_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Общая информация_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content \">
\t\t\t\t\tМеня зовут Плотников Алексндр Александрович, мне 37 лет. Проживаю в городе Артеме Приморского края (пригород Владивостока). В 2005 году с отличием, закончил ДВПИ имени В.В.Куйбышева.
\t\t\t\t\t                Являюсь магистром техники и технологии по направлению «Приборостроение». В 2013 году защитил кандидатскую диссертацию по специальности - «Акустика».
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Web разработка_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"content active\">
\t\t\t\t\t<p>
\t\t\t\t\t\tВ 2018 году поступил на специальность веб-разработка в школе GeekBrains . Пройдя ступени HTML5 и CSS3 , JavaScript уровень 1 , JavaScript уровень 2 , PHP уровень 1 , PHP уровень 2 ,
\t\t\t\t\t\t                    понял, что это мое и перевелся на факультет , по той же специальности, но с более расширенной программой (React, nodejs и т.д.). Помимо этого, искренни полюбил js и проходил следующие
\t\t\t\t\t\t                    курсы на сторонних образовательных ресурсах: Vue.js, Vue Advanced, JavaScript для frontend разработки, Node.js(видео курс без контакта с преподавателем) и Продвинутый Js (видео курс
\t\t\t\t\t\t                    без контакта с преподавателем).
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tТаким образом на данный момент мой опыт в данных направлениях ограничен в основном учебными проектами, тем неимение в большинстве пройдённых тем я чувствую себя достаточно уверенно и
\t\t\t\t\t\t                    хорошо ориентируюсь. С некоторыми из моих работ можно ознакомиться в разделе портфолио.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Мои навыки_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content active\">
\t\t\t\t\tВ первую очередь мои интересы связаны с frontend-ом и такими технологиями как: html, css3, scss, js, Vue.js и ajax. Очень нравится заниматься вёрсткой и писать на js и Vue.js. Что
\t\t\t\t\t                касается backend-да то, тут могу выделить node.js, momgodb, socket.io. По мимо этого мне так же интересны такие технологии как php, sql, myql, twig. Имею опыт работы с всеми
\t\t\t\t\t                перечисленными технологиями (примеры работ можно посмотреть в портфолио), однако на данный момент js и node.js мне ближе чем php. Поимом этого имею опты работы с webpack и системой
\t\t\t\t\t                контроля версий git и чувствую себя в этих технологиях достаточно уверено. Знаю и умею пользоваться базовыми командами командной строки linux, и имею понимание что такое doker и как им
\t\t\t\t\t                пользоваться.
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Мои интересы_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content\">
\t\t\t\t\tНа данный момент ищу удаленную работу, с гарантированной занятостью 3-4 часа в день. Основная цель развитие и получение опыта в разработке реальных проектов. Так же если у кого-то есть
\t\t\t\t\t                необходимость сделать сайт на WordPress(сверстать и натянуть.), и нету горящих сроков, готов взяться за символическую плату, что бы в процессе разобраться и изучить WP. У меня для этого
\t\t\t\t\t                есть все необходимые учебные материалы, и опыт написания простого магазина в OOП стиле на php. Поэтому здесь я в себе уверен на 100%, единственное, мне будет нужна относительная свобода
\t\t\t\t\t                по времени. Также готов верстать, для пополнения портфолио по сниженной цене, при условии относительной временной свободы.
\t\t\t\t</p>
\t\t\t</section>
\t\t</div>
\t\t<script src=\"/src/js/resume.js\"></script>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "resume/resume.twig";
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
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Резюме_</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\">
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Общая информация_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content \">
\t\t\t\t\tМеня зовут Плотников Алексндр Александрович, мне 37 лет. Проживаю в городе Артеме Приморского края (пригород Владивостока). В 2005 году с отличием, закончил ДВПИ имени В.В.Куйбышева.
\t\t\t\t\t                Являюсь магистром техники и технологии по направлению «Приборостроение». В 2013 году защитил кандидатскую диссертацию по специальности - «Акустика».
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Web разработка_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"content active\">
\t\t\t\t\t<p>
\t\t\t\t\t\tВ 2018 году поступил на специальность веб-разработка в школе GeekBrains . Пройдя ступени HTML5 и CSS3 , JavaScript уровень 1 , JavaScript уровень 2 , PHP уровень 1 , PHP уровень 2 ,
\t\t\t\t\t\t                    понял, что это мое и перевелся на факультет , по той же специальности, но с более расширенной программой (React, nodejs и т.д.). Помимо этого, искренни полюбил js и проходил следующие
\t\t\t\t\t\t                    курсы на сторонних образовательных ресурсах: Vue.js, Vue Advanced, JavaScript для frontend разработки, Node.js(видео курс без контакта с преподавателем) и Продвинутый Js (видео курс
\t\t\t\t\t\t                    без контакта с преподавателем).
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tТаким образом на данный момент мой опыт в данных направлениях ограничен в основном учебными проектами, тем неимение в большинстве пройдённых тем я чувствую себя достаточно уверенно и
\t\t\t\t\t\t                    хорошо ориентируюсь. С некоторыми из моих работ можно ознакомиться в разделе портфолио.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Мои навыки_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content active\">
\t\t\t\t\tВ первую очередь мои интересы связаны с frontend-ом и такими технологиями как: html, css3, scss, js, Vue.js и ajax. Очень нравится заниматься вёрсткой и писать на js и Vue.js. Что
\t\t\t\t\t                касается backend-да то, тут могу выделить node.js, momgodb, socket.io. По мимо этого мне так же интересны такие технологии как php, sql, myql, twig. Имею опыт работы с всеми
\t\t\t\t\t                перечисленными технологиями (примеры работ можно посмотреть в портфолио), однако на данный момент js и node.js мне ближе чем php. Поимом этого имею опты работы с webpack и системой
\t\t\t\t\t                контроля версий git и чувствую себя в этих технологиях достаточно уверено. Знаю и умею пользоваться базовыми командами командной строки linux, и имею понимание что такое doker и как им
\t\t\t\t\t                пользоваться.
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h4>Мои интересы_
\t\t\t\t\t</h4>
\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<p class=\"content\">
\t\t\t\t\tНа данный момент ищу удаленную работу, с гарантированной занятостью 3-4 часа в день. Основная цель развитие и получение опыта в разработке реальных проектов. Так же если у кого-то есть
\t\t\t\t\t                необходимость сделать сайт на WordPress(сверстать и натянуть.), и нету горящих сроков, готов взяться за символическую плату, что бы в процессе разобраться и изучить WP. У меня для этого
\t\t\t\t\t                есть все необходимые учебные материалы, и опыт написания простого магазина в OOП стиле на php. Поэтому здесь я в себе уверен на 100%, единственное, мне будет нужна относительная свобода
\t\t\t\t\t                по времени. Также готов верстать, для пополнения портфолио по сниженной цене, при условии относительной временной свободы.
\t\t\t\t</p>
\t\t\t</section>
\t\t</div>
\t\t<script src=\"/src/js/resume.js\"></script>
\t</section>
{% endblock %}
", "resume/resume.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\resume\\resume.twig");
    }
}
