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

/* reviews/reviews.twig */
class __TwigTemplate_92577816996886cc1e21362907e53252e670ccbb23fe6df0d4fddac2dcb29321 extends Template
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
        $this->parent = $this->loadTemplate("mainLayuot.twig", "reviews/reviews.twig", 1);
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
\t\t\t\t<h1 class=\"common-header__h1\">Отзывы_</h1>
\t\t\t\t<div class=\"common-header__description\">
\t\t\t\t\tВ данном разделе вы можете оставить отзыв обо мне и некоторых моих работах_
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\" id=\"reviews\">
\t\t\t<div class=\"reviews\">
\t\t\t\t";
        // line 14
        if (($context["user"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t<form class=\"reviews-body__form\" id=\"add-reviews\" method=\"POST\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tНапишите отзыв:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"review\" placeholder=\"Вашь отзыв\" v-model=\"text\"></textarea>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<p class=\"message hiden\">Отзыв не может быть пусты...</p>
\t\t\t\t\t\t<button type=\"submit\" id=\"add-review\">Добавить отзыв</button>
\t\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t<div class=\"reviews-body__enter\">
\t\t\t\t\t\t<p class=\"title\">Что бы оставить отзыв необходимо авторизироваться:</p>
\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t<div class=\"list\">
\t\t\t\t\t\t\t\t<form action=\"../api/auth-vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"vk_save\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"reviews\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"../api/auth-fb\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"reviews\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"fb_save\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"fb\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"save_sn\" checked id=\"checked_network\"/>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t<div class=\"reviews-body__wrapper\">
\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 56
            echo "\t\t\t\t\t\t<form class=\"reviews-body__review\" data-form=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t<div class=\"nick\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "img_small", [], "any", false, false, false, 59), "html", null, true);
            echo "\" alt=\"user-image\"/>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "link_to_sosial_network", [], "any", false, false, false, 60), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 60), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"review\" data-rev=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "review", [], "any", false, false, false, 62), "js"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<textarea class=\"edit_review hiden\" type=\"text\" name=\"edit_review\" v-model=\"review.review\" data-text=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "review", [], "any", false, false, false, 63), "html", null, true);
            echo "</textarea>
\t\t\t\t\t\t\t\t<div class=\"date\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 64), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 67
            if ((($context["admin"] ?? null) || (0 === twig_compare(($context["user"] ?? null), twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 67))))) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<div class=\"edit\" data-parent=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"review_edit\" data-edit=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"hiden review_save\" data-save=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"review_del\" data-del=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 80
            echo "
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t</div>
\t\t\t\t<button class=\"loadMore\">Загрузить еще</button>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t\t<script src=\"/src/js/reviews.js\"></script>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "reviews/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 83,  178 => 80,  170 => 75,  164 => 72,  158 => 69,  153 => 68,  151 => 67,  145 => 64,  139 => 63,  133 => 62,  126 => 60,  122 => 59,  115 => 56,  111 => 55,  108 => 54,  78 => 26,  65 => 15,  63 => 14,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"mainLayuot.twig\" %}
{% block content %}
\t<section class=\"common wrapper\">
\t\t<div class=\"common-header__fone\">
\t\t\t<div class=\"common-header__cont\">
\t\t\t\t<h1 class=\"common-header__h1\">Отзывы_</h1>
\t\t\t\t<div class=\"common-header__description\">
\t\t\t\t\tВ данном разделе вы можете оставить отзыв обо мне и некоторых моих работах_
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"common-body\" id=\"reviews\">
\t\t\t<div class=\"reviews\">
\t\t\t\t{% if user %}
\t\t\t\t\t<form class=\"reviews-body__form\" id=\"add-reviews\" method=\"POST\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tНапишите отзыв:
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"review\" placeholder=\"Вашь отзыв\" v-model=\"text\"></textarea>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<p class=\"message hiden\">Отзыв не может быть пусты...</p>
\t\t\t\t\t\t<button type=\"submit\" id=\"add-review\">Добавить отзыв</button>
\t\t\t\t\t</form>
\t\t\t\t{%  else %}
\t\t\t\t\t<div class=\"reviews-body__enter\">
\t\t\t\t\t\t<p class=\"title\">Что бы оставить отзыв необходимо авторизироваться:</p>
\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t<div class=\"list\">
\t\t\t\t\t\t\t\t<form action=\"../api/auth-vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"vk_save\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"reviews\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"vk\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-vk\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"../api/auth-fb\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"start\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"reviews\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save_sn\" value=\"1\" id=\"fb_save\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"sn\" value=\"fb\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"save\">
\t\t\t\t\t\t\t\t<p>Запомнить_:</p>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"save_sn\" checked id=\"checked_network\"/>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"reviews-body__wrapper\">
\t\t\t\t\t{% for review in reviews %}
\t\t\t\t\t\t<form class=\"reviews-body__review\" data-form=\"{{review.id}}\">
\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t<div class=\"nick\">
\t\t\t\t\t\t\t\t\t<img src=\"{{review.img_small}}\" alt=\"user-image\"/>
\t\t\t\t\t\t\t\t\t<a href=\"{{review.link_to_sosial_network}}\">{{ review.user }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"review\" data-rev=\"{{review.id}}\">{{review.review|e('js')}}</p>
\t\t\t\t\t\t\t\t<textarea class=\"edit_review hiden\" type=\"text\" name=\"edit_review\" v-model=\"review.review\" data-text=\"{{review.id}}\">{{review.review}}</textarea>
\t\t\t\t\t\t\t\t<div class=\"date\">{{review.date}}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% if admin or user == review.user %}
\t\t\t\t\t\t\t\t<div class=\"edit\" data-parent=\"{{review.id}}\">
\t\t\t\t\t\t\t\t\t<button class=\"review_edit\" data-edit=\"{{review.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"hiden review_save\" data-save=\"{{review.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"review_del\" data-del=\"{{review.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</form>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<button class=\"loadMore\">Загрузить еще</button>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"/src/js/smoothScroll.js\"></script>
\t\t<script src=\"/src/js/header.js\"></script>
\t\t<script src=\"/src/js/server.js\"></script>
\t\t<script src=\"/src/js/reviews.js\"></script>
\t</section>

{% endblock %}
", "reviews/reviews.twig", "C:\\OpenServer\\domains\\php2-second\\twigViews\\reviews\\reviews.twig");
    }
}
