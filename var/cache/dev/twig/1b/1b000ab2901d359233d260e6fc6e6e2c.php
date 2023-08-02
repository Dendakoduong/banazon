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

/* account/orders.html.twig */
class __TwigTemplate_7a76a315c94d4fbac660636b1cf91eff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/orders.html.twig", 1);
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

        echo "My orders";
        
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
        echo "    <h2>My orders</h2>
    ";
        // line 7
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <table class=\"table mt-4\">
            <thead>
                <tr>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\">Date </th>
                    <th scope=\"col\">Reference number </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalQuantity", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo (((twig_get_attribute($this->env, $this->source,                 // line 24
$context["order"], "state", [], "any", false, false, false, 24) == 1)) ? ("Payment accepted") : ((((twig_get_attribute($this->env, $this->source,                 // line 25
$context["order"], "state", [], "any", false, false, false, 25) == 2)) ? ("In preparation") : ("Shipped"))));
                // line 26
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 27) + twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 27)) / 100), 2, ",", "."), "html", null, true);
                echo " \$</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td><span class=\"badge badge-secondary\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 29), "html", null, true);
                echo "</span></td>
                        <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"text-info\">See details</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 36
            echo "        <p>You don't have any orders yet.</p>
    ";
        }
        // line 38
        echo "    <a title=\"Back to my account\"href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" class=\"text-primary\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  151 => 36,  146 => 33,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  122 => 26,  120 => 25,  119 => 24,  118 => 23,  114 => 22,  111 => 21,  107 => 20,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My orders{% endblock %}

{% block body %}
    <h2>My orders</h2>
    {% if orders %}
        <table class=\"table mt-4\">
            <thead>
                <tr>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\">Date </th>
                    <th scope=\"col\">Reference number </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                    <tr>
                        <td>{{order.totalQuantity}}</td>
                        <td>{{
                            order.state == 1 ? 'Payment accepted' :
                            order.state == 2 ? 'In preparation': 'Shipped'
                        }}</td>
                        <td>{{((order.carrierPrice + order.total) / 100)|number_format(2,',','.') }} \$</td>
                        <td>{{order.createdAt|date('d/m/Y')}}</td>
                        <td><span class=\"badge badge-secondary\">{{order.reference}}</span></td>
                        <td><a href=\"{{ path('account_order', {'reference' : order.reference}) }}\" class=\"text-info\">See details</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>You don't have any orders yet.</p>
    {% endif %}
    <a title=\"Back to my account\"href=\"{{ path('account') }}\" class=\"text-primary\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
{% endblock %}
", "account/orders.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\account\\orders.html.twig");
    }
}
