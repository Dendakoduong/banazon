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

/* account/address.html.twig */
class __TwigTemplate_3929a51c2b2c3b525cf7848b42ee4c8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My address";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_new");
        echo "\" class=\"btn btn-info btn-sm float-right mt-2\">New address</a>
    <h2>Manage address</h2>

    <div class=\"row mt-3\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "addresses", [], "any", false, false, false, 10));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 11
            echo "            <div class=\"col-md-6\">
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\"></h6>
                        <p class=\"card-text\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 17), "html", null, true);
            echo ",<br>
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 18), "html", null, true);
            echo " -
                            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 19), "html", null, true);
            echo "<br>
                            ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        </p>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_update", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"card-link\">Edit</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"card-link\">Delete</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <p>
            You haven't added any addresses yet.
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    <a title=\"Back to Your Account\"href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to my account</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 33,  152 => 32,  143 => 28,  133 => 23,  129 => 22,  124 => 20,  120 => 19,  116 => 18,  112 => 17,  106 => 14,  101 => 11,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My address{% endblock %}

{% block body %}
    <a href=\"{{ path('account_address_new') }}\" class=\"btn btn-info btn-sm float-right mt-2\">New address</a>
    <h2>Manage address</h2>

    <div class=\"row mt-3\">
        {% for address in app.user.addresses %}
            <div class=\"col-md-6\">
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ address.name }}</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\"></h6>
                        <p class=\"card-text\">
                            {{ address.address }},<br>
                            {{ address.postal }} -
                            {{ address.city }}<br>
                            {{ address.country }}
                        </p>
                        <a href=\"{{ path('account_address_update', {id: address.id}) }}\" class=\"card-link\">Edit</a>
                        <a href=\"{{ path('account_address_delete', {id: address.id}) }}\" class=\"card-link\">Delete</a>
                    </div>
                </div>
            </div>
        {% else %}
        <p>
            You haven't added any addresses yet.
        </p>
    {% endfor %}
    </div>
    <a title=\"Back to Your Account\"href=\"{{ path('account') }}\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to my account</a>
{% endblock %}
", "account/address.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\account\\address.html.twig");
    }
}
