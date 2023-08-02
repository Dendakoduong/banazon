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

/* account/order.html.twig */
class __TwigTemplate_5f8f1172914ca8a975fb1159643cf038 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Order details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <style>
        .underline {
            text-decoration: underline;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <h2>Details of Order #<span class=\"text-info\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "reference", [], "any", false, false, false, 13), "html", null, true);
        echo "</span></h2>
    <hr>
    <p>
        <b>Order date :</b> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo " <br>
        <b>Status:</b><b class=\"text-success\"> ";
        // line 17
        echo (((twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "state", [], "any", false, false, false, 18) == 1)) ? ("Payment accepted") : ((((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "state", [], "any", false, false, false, 19) == 2)) ? ("In preparation") : ("Shipped"))));
        // line 20
        echo "</b><br>
        <b>Reference : </b><span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "reference", [], "any", false, false, false, 21), "html", null, true);
        echo "</span><br>
        <b>Carrier:</b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "carrierName", [], "any", false, false, false, 22), "html", null, true);
        echo "<br>
        <b>Delivery details:</b> <br>
        <span class=\"underline\">";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "delivery", [], "any", false, false, false, 24);
        echo "</span><br>
    </p>
    <h5>Here's your order</h5>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Items</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "orderDetails", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>x";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
            echo " \$</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 43) / 100), 2, ",", "."), "html", null, true);
            echo " \$</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            <tr>
                <th>Price</th>
                <td></td>
                <td></td>
                <td class=\"font-weight-bold\">";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "total", [], "any", false, false, false, 50) / 100), 2, ",", "."), "html", null, true);
        echo " \$</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Shipping fee:</b> ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "carrierPrice", [], "any", false, false, false, 55) / 100), 2, ",", "."), "html", null, true);
        echo " \$<br>
       <b class=\"font-weight-bold\">Subtotal: </b><b class=\"text-danger\">";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "carrierPrice", [], "any", false, false, false, 56) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "total", [], "any", false, false, false, 56)) / 100), 2, ",", "."), "html", null, true);
        echo " \$ </b>
    </div>
    <a title=\"Back to my account\"href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 58,  204 => 56,  200 => 55,  192 => 50,  186 => 46,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  162 => 39,  158 => 38,  141 => 24,  136 => 22,  132 => 21,  129 => 20,  127 => 19,  126 => 18,  125 => 17,  121 => 16,  114 => 13,  104 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order details{% endblock %}
{% block stylesheets %}
    <style>
        .underline {
            text-decoration: underline;
        }
    </style>
{% endblock %}

{% block body %}
    <h2>Details of Order #<span class=\"text-info\">{{order.reference}}</span></h2>
    <hr>
    <p>
        <b>Order date :</b> {{order.createdAt|date('d/m/Y')}} <br>
        <b>Status:</b><b class=\"text-success\"> {{
            order.state == 1 ? 'Payment accepted' :
            order.state == 2 ? 'In preparation': 'Shipped'
        }}</b><br>
        <b>Reference : </b><span>{{order.reference}}</span><br>
        <b>Carrier:</b> {{order.carrierName}}<br>
        <b>Delivery details:</b> <br>
        <span class=\"underline\">{{ order.delivery|raw }}</span><br>
    </p>
    <h5>Here's your order</h5>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Items</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {% for product in order.orderDetails %}
            <tr>
                <td>{{product.product}}</td>
                <td>x{{product.quantity}}</td>
                <td>{{(product.price / 100)|number_format(2,',','.') }} \$</td>
                <td>{{(product.total / 100)|number_format(2,',','.') }} \$</td>
            </tr>
        {% endfor %}
            <tr>
                <th>Price</th>
                <td></td>
                <td></td>
                <td class=\"font-weight-bold\">{{(order.total / 100)|number_format(2,',','.') }} \$</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Shipping fee:</b> {{(order.carrierPrice / 100)|number_format(2,',','.') }} \$<br>
       <b class=\"font-weight-bold\">Subtotal: </b><b class=\"text-danger\">{{((order.carrierPrice + order.total) / 100)|number_format(2,',','.') }} \$ </b>
    </div>
    <a title=\"Back to my account\"href=\"{{ path('account') }}\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
{% endblock %}
", "account/order.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\account\\order.html.twig");
    }
}
