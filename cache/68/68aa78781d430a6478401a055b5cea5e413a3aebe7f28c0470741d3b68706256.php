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

/* layout.twig */
class __TwigTemplate_f4e0acb946ea1210f7fbeb50ada4da9a219a86bdc8c9b30780d8701294da6e73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"/>
\t\t<title>Document</title>
\t\t<link href=\"/src/css/main.css\" rel=\"stylesheet\">
\t\t<link href=\"/src/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
\t</head>

\t<body>
\t\t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "\t</body>

</html>
";
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  75 => 14,  69 => 13,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"/>
\t\t<title>Document</title>
\t\t<link href=\"/src/css/main.css\" rel=\"stylesheet\">
\t\t<link href=\"/src/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
\t</head>

\t<body>
\t\t{% block header %}{% endblock %}
\t\t{% block content %}{% endblock %}
\t\t{% block footer %}{% endblock %}
\t</body>

</html>
", "layout.twig", "D:\\PHP\\open_server_5_3_7_basic\\OpenServer\\domains\\php2-second\\twigViews\\layout.twig");
    }
}
