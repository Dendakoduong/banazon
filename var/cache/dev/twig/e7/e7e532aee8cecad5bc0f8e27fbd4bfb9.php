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

/* base.html.twig */
class __TwigTemplate_bf784f67a19c3346bf8f6a69a5d89d4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Banazon is the shopping website made in Vietnam\">
    <meta name=\"author\" content=\"Banazon Team\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- add icon link -->
    <link rel = \"icon\" href =\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\" type = \"image/x-icon\">

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
</head>
<body>
    <header>
        ";
        // line 22
        $this->loadTemplate("_nav.html.twig", "base.html.twig", 22)->display($context);
        // line 23
        echo "    </header>

    <main class=\"mb-5\" role=\"main\">
        ";
        // line 26
        if (array_key_exists("carousel", $context)) {
            // line 27
            echo "            ";
            $this->loadTemplate("_carousel.html.twig", "base.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            ";
            $context["margin"] = "mt-5";
            // line 30
            echo "        ";
        }
        // line 31
        echo "        <div class=\"container ";
        (((array_key_exists("margin", $context) &&  !(null === (isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 31, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 31, $this->source); })()), "html", null, true))) : (print (0)));
        echo "\">
            ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        </div>
    </main>
        <footer class=\"footer-custom\">
            ";
        // line 36
        $this->loadTemplate("_footer.html.twig", "base.html.twig", 36)->display($context);
        // line 37
        echo "        </footer>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Banazon";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 32,  132 => 9,  119 => 39,  115 => 37,  113 => 36,  108 => 33,  106 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  82 => 23,  80 => 22,  71 => 16,  67 => 15,  63 => 14,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Banazon is the shopping website made in Vietnam\">
    <meta name=\"author\" content=\"Banazon Team\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>{% block title %}Banazon{% endblock %}</title>

    <!-- add icon link -->
    <link rel = \"icon\" href =\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\" type = \"image/x-icon\">

    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/css/carousel.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
</head>
<body>
    <header>
        {% include \"_nav.html.twig\" %}
    </header>

    <main class=\"mb-5\" role=\"main\">
        {% if carousel is defined %}
            {% include \"_carousel.html.twig\" %}
        {% else %}
            {% set margin = 'mt-5' %}
        {% endif %}
        <div class=\"container {{margin ?? 0}}\">
            {% block body %}{% endblock %}
        </div>
    </main>
        <footer class=\"footer-custom\">
            {% include \"_footer.html.twig\" %}
        </footer>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"{{asset('assets/js/bootstrap.bundle.js')}}\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\base.html.twig");
    }
}
