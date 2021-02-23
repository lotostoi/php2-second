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
\t\t\t<section class=\"resume__block\" id=\"webDev\">
\t\t\t\t<h2 class=\"title\">Общая информация_</h2>
\t\t\t\t<p class=\"content\">Меня зовут Плотников Алексндр Александрович, мне 37 лет. Проживаю в городе Артеме Приморского края (пригород Владивостока). В 2005 году с отличием, закончил ДВПИ имени В.В.Куйбышева. Являюсь магистром техники и технологии по направлению «Приборостроение». В 2013 году защитил кандидатскую диссертацию по специальности - «Акустика». В течении последних 15 лет работаю в ТОИ ДВО РАН. На данный момент являюсь старшим научным сотрудником лаборатории «Физики геосфер», и занимаюсь разработкой лазерно-интерференционных измерительных систем, для мониторинга волновых процессов в различных геосферах.
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__block\" id=\"mainInfo\">
\t\t\t\t<h2 class=\"title\">Веб разработка_</h2>
\t\t\t\t<p class=\"content\">В 2018 году начал обучение по специальности веб-разработка в школе
\t\t\t\t\t<a href=\"https://geekbrains.ru/\" class=\"link\" target=\"_blank\">GeekBrains.</a>
\t\t\t\t\tПосле прохождения основной части программы, понял, что это мое, и перевелся на
\t\t\t\t\t<a href=\"https://geekbrains.ru/geek_university/web\" class=\"link\" target=\"_blank\">факультет</a>
\t\t\t\t\tпо той же специальности, но с более расширенной программой (React, nodejs и т.д.). Для более глубокого изучения различных аспектов веб разработки с интересом проходил и прохожу дополнительные курсы на других образовательных ресурсах.
\t\t\t\t</p>
\t\t\t\t<p class=\"content\">Таким образом с 2018 года по сегодняшний день я писал и пишу довольно много кода, в основном на js, Vue.js, node.js, php и м.д. С некоторыми из моих работ можно ознакомиться в
\t\t\t\t\t<a href=\"/work\" class=\"link\" target=\"_blank\">
\t\t\t\t\t\tпортфолио</a>.</p>
\t\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<h4>Полный список курсов, что я прошел на текущий момент_</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h4>Курсы в GeekBrains</h1>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/9\" class=\"linkToCourse\" target=\"_blank\">HTML5 и CSS3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/6\" class=\"linkToCourse\" target=\"_blank\">JavaScript. Уровень 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/83\" class=\"linkToCourse\" target=\"_blank\">JavaScript. Уровень 2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/11\" class=\"linkToCourse\" target=\"_blank\">Node.js</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/307\" class=\"linkToCourse\" target=\"_blank\">Linux. Рабочая станция</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/4\" class=\"linkToCourse\" target=\"_blank\">PHP. Уровень 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/5\" class=\"linkToCourse\" target=\"_blank\">PHP. Уровень 2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/690\" class=\"linkToCourse\" target=\"_blank\">Основы реляционных баз данных. MySQL</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<h4>Другие образовательные ресурсы</h1>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/vue/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Фреймворк Vue.js</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/vue-advanced/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Vue Advanced</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/frontend/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Javascript для фронтенд разработки</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<h4>Технологии, с которыми имел опыт работать_</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t<ol class=\"technology\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://png.pngitem.com/pimgs/s/520-5208614_curso-programacin-front-end-completo-transparent-html-css.png\" alt=\"html\">
\t\t\t\t\t\t\t\t<span>HTML и CSS</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>Js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>Vue.js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>node.js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/512/1*9U1toerFxB8aiFRreLxEUQ.png\" alt=\"scss\">
\t\t\t\t\t\t\t\t<span>scss</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://webassets.mongodb.com/_com_assets/cms/MongoDB_Logo_FullColorBlack_RGB-4td3yuxzjs.png\" alt=\"mongo\">
\t\t\t\t\t\t\t\t<span>mongoDB</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"pouchdb\">
\t\t\t\t\t\t\t\t<span>pouchdb</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png\" alt=\"php\">
\t\t\t\t\t\t\t\t<span>php</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://cdn1.vectorstock.com/i/1000x1000/77/30/sql-database-icon-logo-design-ui-or-ux-app-vector-17507730.jpg\" alt=\"sql\">
\t\t\t\t\t\t\t\t<span>sql</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://1000logos.net/wp-content/uploads/2020/08/MySQL-Logo.jpg\" alt=\"mySql\">
\t\t\t\t\t\t\t\t<span>mySql</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/1280px-Git-logo.svg.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>git</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>webpack</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjg8R7w9YXPl88tbwU-QxeDl0pIk56zwlv1g&usqp=CAU\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>twig</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>gulp</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_D5uAQuTF3l9MpQstceKLYoS8t5UmuJ3spg&usqp=CAU\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>socket.io</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://eig.org/wp-content/uploads/2017/06/Axios-Logo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>axios</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social-logo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>bootstrap</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://c0.klipartz.com/pngpicture/662/163/gratis-png-logotipo-de-jquery-desarrollo-web-iconos-de-computadora-javery-ui-javascript-jqlogo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>jQuery</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span>И другие...</span>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"mentoring\">
\t\t\t<h2 class=\"title\">Наставничество_</h2>
\t\t\t<p class=\"content\">На данный момент я являюсь действующим наставником школы GeekBrains на курсах: html&css,js1,js2,node.js, php1, php2. В мои обязанности входит помогать студентам осваивать программу обучения, выполнять практические задания и учебные проекты.
\t\t\t\t<a href=\"/reviews\" class=\"link\" target=\"_blank\">Тут</a>
\t\t\t\tвы может ознакомиться с отзывами от некоторых студентов с которыми я работыл. Так же при необходимости могу показать все отзывы, оставленные студентами в системе GeekBrains.</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Soft skilss_</h2>
\t\t\t<p class=\"content\">Имею дополнительное психотерапевтическое образование и большой опыт работы над собой, в плане улучшения различных аспектов своей личности. Например, по-моему мнению, и мнению людей что меня окружают, я имею хорошие soft skills (набор навыков для контакта и взаимодействия с людьми).</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Английский язык_</h2>
\t\t\t<p class=\"content\">
\t\t\t\tС начала 2020 года изучаю английский язык в онлайн школе Skyeng. Занимаюсь три раза в неделю. Поскольку начальные знания языка у меня были очень слабые, на данный момент занимаюсь на ступени Pre-Intermediate.</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Мои интересы_</h2>
\t\t\t<p class=\"content\">На данный момент ищу удаленную работу, с гарантированной занятостью 3-4 часа в день. Основная цель развитие и получение опыта в разработке реальных проектов. Так же если у кого-то есть необходимость сделать сайт на WordPress(сверстать и натянуть.), и нету горящих сроков, готов взяться за символическую плату, что бы в процессе разобраться и изучить WP. У меня для этого есть все необходимые учебные материалы, и опыт написания простого магазина в OOП стиле на php. Поэтому здесь я в себе уверен на 100%, единственное, мне будет нужна относительная свобода по времени. Также готов верстать, для пополнения портфолио по сниженной цене, при условии относительной временной свободы.</p>
\t\t</section>
\t</div>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/functions.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/resume.js\"></script>
\t<script src=\"/src/js/slider.js\"></script>
\t<script src=\"/src/js/server.js\"></script>

</section>";
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
\t\t\t<section class=\"resume__block\" id=\"webDev\">
\t\t\t\t<h2 class=\"title\">Общая информация_</h2>
\t\t\t\t<p class=\"content\">Меня зовут Плотников Алексндр Александрович, мне 37 лет. Проживаю в городе Артеме Приморского края (пригород Владивостока). В 2005 году с отличием, закончил ДВПИ имени В.В.Куйбышева. Являюсь магистром техники и технологии по направлению «Приборостроение». В 2013 году защитил кандидатскую диссертацию по специальности - «Акустика». В течении последних 15 лет работаю в ТОИ ДВО РАН. На данный момент являюсь старшим научным сотрудником лаборатории «Физики геосфер», и занимаюсь разработкой лазерно-интерференционных измерительных систем, для мониторинга волновых процессов в различных геосферах.
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"resume__block\" id=\"mainInfo\">
\t\t\t\t<h2 class=\"title\">Веб разработка_</h2>
\t\t\t\t<p class=\"content\">В 2018 году начал обучение по специальности веб-разработка в школе
\t\t\t\t\t<a href=\"https://geekbrains.ru/\" class=\"link\" target=\"_blank\">GeekBrains.</a>
\t\t\t\t\tПосле прохождения основной части программы, понял, что это мое, и перевелся на
\t\t\t\t\t<a href=\"https://geekbrains.ru/geek_university/web\" class=\"link\" target=\"_blank\">факультет</a>
\t\t\t\t\tпо той же специальности, но с более расширенной программой (React, nodejs и т.д.). Для более глубокого изучения различных аспектов веб разработки с интересом проходил и прохожу дополнительные курсы на других образовательных ресурсах.
\t\t\t\t</p>
\t\t\t\t<p class=\"content\">Таким образом с 2018 года по сегодняшний день я писал и пишу довольно много кода, в основном на js, Vue.js, node.js, php и м.д. С некоторыми из моих работ можно ознакомиться в
\t\t\t\t\t<a href=\"/work\" class=\"link\" target=\"_blank\">
\t\t\t\t\t\tпортфолио</a>.</p>
\t\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<h4>Полный список курсов, что я прошел на текущий момент_</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h4>Курсы в GeekBrains</h1>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/9\" class=\"linkToCourse\" target=\"_blank\">HTML5 и CSS3</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/6\" class=\"linkToCourse\" target=\"_blank\">JavaScript. Уровень 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/83\" class=\"linkToCourse\" target=\"_blank\">JavaScript. Уровень 2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/11\" class=\"linkToCourse\" target=\"_blank\">Node.js</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/307\" class=\"linkToCourse\" target=\"_blank\">Linux. Рабочая станция</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/4\" class=\"linkToCourse\" target=\"_blank\">PHP. Уровень 1</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/5\" class=\"linkToCourse\" target=\"_blank\">PHP. Уровень 2</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://geekbrains.ru/courses/690\" class=\"linkToCourse\" target=\"_blank\">Основы реляционных баз данных. MySQL</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<h4>Другие образовательные ресурсы</h1>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/vue/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Фреймворк Vue.js</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/vue-advanced/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Vue Advanced</a></li>
\t\t\t\t\t\t\t<li><a href=\"https://js.dmitrylavrik.ru/frontend/?utm=site-footer\" class=\"linkToCourse\" target=\"_blank\">Javascript для фронтенд разработки</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section class=\"resume__allInformation\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<h4>Технологии, с которыми имел опыт работать_</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t<ol class=\"technology\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://png.pngitem.com/pimgs/s/520-5208614_curso-programacin-front-end-completo-transparent-html-css.png\" alt=\"html\">
\t\t\t\t\t\t\t\t<span>HTML и CSS</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>Js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPEAAADRCAMAAAAquaQNAAAAw1BMVEX///9BuIM0SV5OvIs4UWJCvoVBu4QzPls0Rl09t4EzQlwos3g0RF00tX05tn8zPVtAs4E/qn43ZWY8lHY5dmyP0bE1VmLS7N9fwZTl9O1Wvo/1+/iZ1bg2W2MqQVi849A/p33c8OY7hXETM007jHM5e200TF+FzqvK6dppxJqy38k+oXs9mnh0yKDx9PTY3t9PZHJsfYchOlOrtbkOMUw4bGk7h3Gdqa56iZJSZ3S7xMdEWmqOm6Lm6+thc3/M1NUArm5rVW6JAAAH+0lEQVR4nOWda1cTPRSFmQJtaWkBFVCLgCA3FXjFO4r6/3/VK0KQ0syes5OcXMbneyc5K6zs9jzrDHNH8xx7nQUx3+bc+CZforPHbb86mpsMlxiqqtPvSLn47FTw5wvxCv3DbkXtfziZm9saVQzdxz3xfjoXZw4Fn+3LF+g97lK7H21drzBeoj60+EJ+yNtfHCr+si1+fv/FIrX3paU/K+wMqU91d4lD/nBOF3z+Qf743i53xMOdmzWek4f8UX7I/a90xf/Jn778hDzip7drvOQOuVodyE/h4pIs+FJ+bXUGq9zGhy/NKkdj6oPdPaLkQ7Ji+ZM7g0/c3/T46G6VCXnI3UP5tsiE+i6/tjoLXMHVaPJ3HTah3hKX1z6TUFdMMr0lk+n1/ZWoj5IJ9Y6o+B2RTI+4a6uqplY6JhNqbUV+FvvyhPpJHPHKGlfv8Hh6radkQj1Zlu9N/vX6m/yhbDKNnz5Y6xl5eVVMQr0XFvyeSKZlcr/DZw9XYxPqFVHytrBi4p4evCKvrfWZ1SbcdV0tLhCX13dRwUQy9RfIb1v3k8nwmkyoN0xCXQkKppLpjU8yGahH/D7kR8Qh/xBU/EMxmeatK5IJVa0xh/yzsWAmmXrsF+pN+5on3OW1eCC/vPoLjRUT98LyAZlMJzVr0gkl32NzQjHJ1Cf3OZtMhnXy8nrFNIAsl+U9JkTBbKtnPJtMd4zIb14bwRKKafVssMkE1tVMqA8ooa6YVk+QZDLM6zWAYEJ9JY74I3nE9mQybLINoDAJdUkkE93qqUkmwyl5yHvEb6j6hCJ6KoM98ohPccF8Qsn3Wt8AIiRE55Bs9dQnk4FWFMzPRnsD6EwxmW4kBGYpuqLQlxCYHfKQd30bQOdMq8dRQmBiK4oYEgITWVHEkRCYuIpC/lkfCYGJqig0JcQQ/3q5R0RFQelxVkIIkslAPdhLUcSTEJhj8pAZRTEl0Zlk6nlKCEwsRaEoIYTJZGATilIUfxOKkhBsMjV+oZ4mjqJQlBDiZDLQCeWiKBgJQbZ6KpuEwLANICqhbhpA8SUEhlqAVBQ3CaUpIZhkMqgrCkpCqCaTQVNRXCdUCgmBUVYUTDJ1yJ2wyWRYZxOK+LveviKSKaSEgEwUFQUDLSHGjgXrKgqCGMlkUFQUcmgJ8dy9YFVFISaUHpfBKooD4jeUkOASAsMmVDd4wZ1OcAmB0ZyiEKEhITCKUxQSaAnhnkwGTUUhQEdCYBQVRTN0q8cnmQyaiqIRLQmBOVVUFE0Fa0kIjKaiaEBPQmA0FQVEU0JguLsrWEJFafXYYROKaQABemtkMjm1euxoKopalCUEJklC+U9C+KCpKGpQlxAYdoqCURR2+htcwdZJCB80FYWVmK0eO/PU+pSisB5xmEkIHzQVhe2Io0gIjKKimCWShMBoKooZwk1C+KA5RfGAHptMrhICE09RBJ2E8IFWFK4NoJXkyWRgE8qxARR4EsKHSIoiroTAaE5R3BFZQmDoBpDTGSdq9djZIn9DOSiKQXQJgVFXFAkkBIZWFOwhu76OSQ9lRZFEQmCUG0BpJARGVVEkkhAYVUVBz+ipJpNBUVGkkxAYalNMQiWUEBg1RZFSQmCUFEVSCYFRSqi0EgKjoigSSwiMhqJgX8fkMAnhg4KiSC8hMNTmJIoiAwmBoRVFU5cvBwmBoRUFTqgsJAQmsKLIQ0JggiqKTCREAwEVRTYSAhNwiiL3ZDIEm6LISEJggimKnCQEJtAURVYSAhPoRU+H5FNSJJMhiKKIPwnhQwBFofI6Jj0CTFGkmITwwVtR9POTEBjvBlCOEgLjqSiylBAYT0WRp4TAeCmKXCUExmOKgk2maBICQyuKvwnl+z8hUuGsKDKWEBjnhBpwn0v6hXoaVlF8GpSaTAa3Fz3REiKHZDI4KQq//1aUGmrrN4oiWz0uw2GKIn8JgaEVxUr+EgLDNoBWS5AQGFJRVOSPxDQSAsJOUXAkkhAYMqE48komA6koGJJJCAyrKAjSSQgMqSjkJJQQGFpRSMkvmQykopCSR6vHDqkoZKhPQvhANoBkpJYQGFJRSEguITD0m76bSS8hMMETKqNWjx22AdRITq0eO6SiaCLnZDKQ/y2pgbR6XMZOyL/rUWatHjukokBkIyEwARMq92QykIqinuyTycBOUdQSdxLCh0ANoDxbPXaCFBx9EsIHVlFYyU1CYEhFYSM7CYEJ0ADKt9Vjh1UUs0ecn4TA+CqKLCUExjOhSkomA/mipwdHXFIyGbwURa4SAuPRAMpWQmA8Eir/Vo8dZ0VRQqvHjmNCZS0hMI6KYpS1hMA4KYrMJQTGKaFKafXYcUiocZnJZHBQFKUmk4FWFOUmk4FWFKk37A2ZUCUnk4FSFIVICAylKMpOJgOhKIqREBhCUZQjITDiBlCJrR474jNOvdFgCBVFWRICI0qowiQERtQAKk1CYASKYlSahMA0J1SBEgLTmFDtSSZDg6IoUkJgGhpAZUoIzAlKqEIlBAYmVLuSybBe/xtqXHyrx07tFEXBEgJTm1BtaPXYqZnzK1pCYGoSqh2tHjvWFz21pNVjx6ooSpcQGIuiKF9CYCyKIvWWlJmZomhvMhkeNIBaISEwDxRFm5PJMKUoWp1MhqmEancyGe59vW5fq8fOv5NMhjtF0SYJgbltALVKQmBuG0DtbPXY+aMoWiYhMNdTFEtt0eMyfifUv5JMhvkWSgjM5q8WSghMsj7A/8jE+hky6U4hAAAAAElFTkSuQmCC\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>Vue.js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"js\">
\t\t\t\t\t\t\t\t<span>node.js</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://miro.medium.com/max/512/1*9U1toerFxB8aiFRreLxEUQ.png\" alt=\"scss\">
\t\t\t\t\t\t\t\t<span>scss</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://webassets.mongodb.com/_com_assets/cms/MongoDB_Logo_FullColorBlack_RGB-4td3yuxzjs.png\" alt=\"mongo\">
\t\t\t\t\t\t\t\t<span>mongoDB</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"pouchdb\">
\t\t\t\t\t\t\t\t<span>pouchdb</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png\" alt=\"php\">
\t\t\t\t\t\t\t\t<span>php</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://cdn1.vectorstock.com/i/1000x1000/77/30/sql-database-icon-logo-design-ui-or-ux-app-vector-17507730.jpg\" alt=\"sql\">
\t\t\t\t\t\t\t\t<span>sql</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://1000logos.net/wp-content/uploads/2020/08/MySQL-Logo.jpg\" alt=\"mySql\">
\t\t\t\t\t\t\t\t<span>mySql</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/1280px-Git-logo.svg.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>git</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>webpack</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjg8R7w9YXPl88tbwU-QxeDl0pIk56zwlv1g&usqp=CAU\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>twig</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,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\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>gulp</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_D5uAQuTF3l9MpQstceKLYoS8t5UmuJ3spg&usqp=CAU\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>socket.io</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://eig.org/wp-content/uploads/2017/06/Axios-Logo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>axios</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social-logo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>bootstrap</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<img src=\"https://c0.klipartz.com/pngpicture/662/163/gratis-png-logotipo-de-jquery-desarrollo-web-iconos-de-computadora-javery-ui-javascript-jqlogo.png\" alt=\"git\">
\t\t\t\t\t\t\t\t<span>jQuery</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span>И другие...</span>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"mentoring\">
\t\t\t<h2 class=\"title\">Наставничество_</h2>
\t\t\t<p class=\"content\">На данный момент я являюсь действующим наставником школы GeekBrains на курсах: html&css,js1,js2,node.js, php1, php2. В мои обязанности входит помогать студентам осваивать программу обучения, выполнять практические задания и учебные проекты.
\t\t\t\t<a href=\"/reviews\" class=\"link\" target=\"_blank\">Тут</a>
\t\t\t\tвы может ознакомиться с отзывами от некоторых студентов с которыми я работыл. Так же при необходимости могу показать все отзывы, оставленные студентами в системе GeekBrains.</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Soft skilss_</h2>
\t\t\t<p class=\"content\">Имею дополнительное психотерапевтическое образование и большой опыт работы над собой, в плане улучшения различных аспектов своей личности. Например, по-моему мнению, и мнению людей что меня окружают, я имею хорошие soft skills (набор навыков для контакта и взаимодействия с людьми).</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Английский язык_</h2>
\t\t\t<p class=\"content\">
\t\t\t\tС начала 2020 года изучаю английский язык в онлайн школе Skyeng. Занимаюсь три раза в неделю. Поскольку начальные знания языка у меня были очень слабые, на данный момент занимаюсь на ступени Pre-Intermediate.</p>
\t\t</section>
\t\t<section class=\"resume__block\" id=\"softSkills\">
\t\t\t<h2 class=\"title\">Мои интересы_</h2>
\t\t\t<p class=\"content\">На данный момент ищу удаленную работу, с гарантированной занятостью 3-4 часа в день. Основная цель развитие и получение опыта в разработке реальных проектов. Так же если у кого-то есть необходимость сделать сайт на WordPress(сверстать и натянуть.), и нету горящих сроков, готов взяться за символическую плату, что бы в процессе разобраться и изучить WP. У меня для этого есть все необходимые учебные материалы, и опыт написания простого магазина в OOП стиле на php. Поэтому здесь я в себе уверен на 100%, единственное, мне будет нужна относительная свобода по времени. Также готов верстать, для пополнения портфолио по сниженной цене, при условии относительной временной свободы.</p>
\t\t</section>
\t</div>
\t<script src=\"/src/js/smoothScroll.js\"></script>
\t<script src=\"/src/js/functions.js\"></script>
\t<script src=\"/src/js/header.js\"></script>
\t<script src=\"/src/js/resume.js\"></script>
\t<script src=\"/src/js/slider.js\"></script>
\t<script src=\"/src/js/server.js\"></script>

</section>{% endblock %}
", "resume/resume.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\resume\\resume.twig");
    }
}
