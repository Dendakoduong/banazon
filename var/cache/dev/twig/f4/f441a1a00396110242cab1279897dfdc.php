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

/* _nav.html.twig */
class __TwigTemplate_41a81c3ab181b6b550394ab9db77a1de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
        <img src=\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\" alt=\"Logo Banazon\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\">
        Banazon | <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/applepremiumlogo.jpg"), "html", null, true);
        echo "\" alt=\"Logo Banazon\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Products</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About us</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact us</a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"bi bi-person-circle\"></i> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "firstname", [], "any", false, false, false, 25), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">My Account</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Sign out</a>
                    </div>
                </li>
            ";
        } else {
            // line 33
            echo "                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Sign up</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Sign in</a>
                </li>
            ";
        }
        // line 40
        echo "            <li class=\"nav-item active\">
                <a title=\"Cart\" class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  119 => 40,  113 => 37,  107 => 34,  104 => 33,  97 => 29,  93 => 28,  87 => 25,  83 => 23,  81 => 22,  74 => 18,  68 => 15,  62 => 12,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
        <img src=\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\" alt=\"Logo Banazon\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\">
        Banazon | <img src=\"{{ asset('assets/img/applepremiumlogo.jpg') }}\" alt=\"Logo Banazon\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('product') }}\">Products</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('about') }}\">About us</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact us</a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            {% if app.user %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"bi bi-person-circle\"></i> {{ app.user.firstname }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('account') }}\">My Account</a>
                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Sign out</a>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('register') }}\">Sign up</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Sign in</a>
                </li>
            {% endif %}
            <li class=\"nav-item active\">
                <a title=\"Cart\" class=\"nav-link\" href=\"{{ path('cart') }}\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
", "_nav.html.twig", "C:\\Users\\Acer\\ecommerce-symfony\\templates\\_nav.html.twig");
    }
}
