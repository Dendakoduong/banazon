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

/* product/show.html.twig */
class __TwigTemplate_00ad75f54ed66b689dfa9907a4d5c1c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"row\">
        <div class=\"col-md-5\">
            <img class=\"img-fluid\" src=\"/uploads/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-7 my-auto\">
            <h3><i class='fab fa-apple' style='font-size:36px'></i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h3>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "subtitle", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <h6>Category: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), "html", null, true);
        echo "</h6>
            <hr>
            <span class=\"product-price\">Price: ";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "price", [], "any", false, false, false, 15) / 100), 2, ",", "."), "html", null, true);
        echo " USD</span>
            <hr>
            <h6>Description</h6>
            <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
            <div class=\"d-flex justify-content-start align-items-center mb-3\">
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success mr-3\">
                    <i class=\"fas fa-cart-plus\"></i> Add to Cart
                </a>
";
        // line 26
        echo "            </div>
        </div>
    </div>
    <hr>
    <div class=\"why-buy-section\">
        <h4>Why choose Banazon?</h4>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <i class=\"fas fa-check-circle\"></i>
                <p>Authentic product</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-plane-departure\"></i>
                <p>International shipping</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-shipping-fast\"></i>
                <p>Fast delivery</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-headset\"></i>
                <p>Excellent customer support</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-hand-holding-usd\"></i>
                <p>Secure payment</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-undo\"></i>
                <p>14 days return policy*</p>
            </div>
        </div>
        <small>* For more information, please contact the customer support.</small>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  124 => 20,  119 => 18,  113 => 15,  108 => 13,  104 => 12,  100 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-5\">
            <img class=\"img-fluid\" src=\"/uploads/{{ product.image }}\" alt=\"{{ product.name }}\">
        </div>
        <div class=\"col-md-7 my-auto\">
            <h3><i class='fab fa-apple' style='font-size:36px'></i> {{ product.name }}</h3>
            <p>{{ product.subtitle }}</p>
            <h6>Category: {{ product.category }}</h6>
            <hr>
            <span class=\"product-price\">Price: {{ (product.price / 100)|number_format(2, ',', '.') }} USD</span>
            <hr>
            <h6>Description</h6>
            <p>{{ product.description }}</p>
            <div class=\"d-flex justify-content-start align-items-center mb-3\">
                <a href=\"{{ path('add_to_cart', {id: product.id}) }}\" class=\"btn btn-outline-success mr-3\">
                    <i class=\"fas fa-cart-plus\"></i> Add to Cart
                </a>
{#                <a href=\"{{ path('order') }}\" class=\"btn btn-warning\">#}
{#                    Buy Now#}
{#                </a>#}
            </div>
        </div>
    </div>
    <hr>
    <div class=\"why-buy-section\">
        <h4>Why choose Banazon?</h4>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <i class=\"fas fa-check-circle\"></i>
                <p>Authentic product</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-plane-departure\"></i>
                <p>International shipping</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-shipping-fast\"></i>
                <p>Fast delivery</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-headset\"></i>
                <p>Excellent customer support</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-hand-holding-usd\"></i>
                <p>Secure payment</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fas fa-undo\"></i>
                <p>14 days return policy*</p>
            </div>
        </div>
        <small>* For more information, please contact the customer support.</small>
    </div>
{% endblock %}
", "product/show.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\product\\show.html.twig");
    }
}
