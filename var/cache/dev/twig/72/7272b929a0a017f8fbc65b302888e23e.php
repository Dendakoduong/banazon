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

/* cart/index.html.twig */
class __TwigTemplate_7c648efd9eddbc15e91dac5929bf1596 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Banazon Cart";
        
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
        <div class=\"col-md-8\">
            <h3>Your cart</h3>
            ";
        // line 9
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 9, $this->source); })()) > 0)) {
            // line 10
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart");
            echo "\" title=\"Delete all\" class=\"btn btn-outline-danger btn-sm float-right\">
                    <i class=\"bi bi-x\"></i>
                    Delete all items
                </a>
            ";
        }
        // line 15
        echo "
            <p>Here are the items you added</p>

            <table class=\"table mt-5\">
                <thead>
                <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th class=\"text-center\" scope=\"col\">Quantity</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "                    <tr>
                        <td class=\"align-middle\">
                            <img height=\"60px\" src=\"/uploads/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </td>
                        <td class=\"align-middle\">";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35) / 100), 2, ",", "."), "html", null, true);
            echo " \$</td>
                        <td class=\"text-center align-middle\">
                            <a title=\"Remove one item\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_item", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"bi bi-dash\"></i></a>
                            ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            echo "
                            <a title=\"Add one item\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><i class=\"bi bi-plus\"></i></a>
                        </td>
                        <td class=\"align-middle\">";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 41) * (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) / 100)), 2, ",", "."), "html", null, true);
            echo " \$</td>
                        <td class=\"align-middle\"><a title=\"Delete this item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart_item", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
                <tfoot>
                <th>Total</th>
                <td></td>
                <td class=\"text-center\">  <small>x</small> ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</td>
                <th>";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 50, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " \$</th>
                </tfoot>
            </table>
            <a class=\"mb-3 d-block\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Continue shopping</a>
            ";
        // line 54
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 54, $this->source); })()) > 0)) {
            // line 55
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\"title=\"Continue to order\" class=\"btn btn-success btn-block\">Order</a>
            ";
        } else {
            // line 57
            echo "                Oops! There's nothing here. Click <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
            echo "\">here</a> to have a glance at our products.
            ";
        }
        // line 59
        echo "        </div>

        <div class=\"col-md-4\">
            <!-- Styling for the image ad -->
            <div style=\"display: flex; justify-content: center; align-items: center; height: 100%;\">

                <!-- Replace \"path_to_your_image_ad.jpg\" with the actual path to your image ad -->
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cartbanner.png"), "html", null, true);
        echo "\"  alt=\"Advertisement\" style=\"max-width: 100%; max-height: 100%;\">

            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 66,  204 => 59,  198 => 57,  192 => 55,  190 => 54,  186 => 53,  180 => 50,  176 => 49,  170 => 45,  161 => 42,  157 => 41,  152 => 39,  148 => 38,  144 => 37,  139 => 35,  134 => 33,  128 => 32,  124 => 30,  120 => 29,  104 => 15,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Banazon Cart{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h3>Your cart</h3>
            {% if totalQuantity > 0 %}
                <a href=\"{{ path('remove_cart') }}\" title=\"Delete all\" class=\"btn btn-outline-danger btn-sm float-right\">
                    <i class=\"bi bi-x\"></i>
                    Delete all items
                </a>
            {% endif %}

            <p>Here are the items you added</p>

            <table class=\"table mt-5\">
                <thead>
                <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th class=\"text-center\" scope=\"col\">Quantity</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                {% for item in cart %}
                    <tr>
                        <td class=\"align-middle\">
                            <img height=\"60px\" src=\"/uploads/{{ item.product.image }}\" alt=\"{{ item.product.name }}\">
                            {{item.product.name}}
                        </td>
                        <td class=\"align-middle\">{{(item.product.price / 100)|number_format(2,',','.') }} \$</td>
                        <td class=\"text-center align-middle\">
                            <a title=\"Remove one item\" href=\"{{ path('decrease_item', {id:item.product.id}) }}\"><i class=\"bi bi-dash\"></i></a>
                            {{ item.quantity }}
                            <a title=\"Add one item\" href=\"{{ path('add_to_cart', {id:item.product.id}) }}\"><i class=\"bi bi-plus\"></i></a>
                        </td>
                        <td class=\"align-middle\">{{ (item.quantity * (item.product.price / 100))|number_format(2,',','.') }} \$</td>
                        <td class=\"align-middle\"><a title=\"Delete this item\" href=\"{{ path('remove_cart_item', {id: item.product.id}) }}\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <th>Total</th>
                <td></td>
                <td class=\"text-center\">  <small>x</small> {{ totalQuantity }}</td>
                <th>{{ (totalPrice / 100)|number_format(2,',','.') }} \$</th>
                </tfoot>
            </table>
            <a class=\"mb-3 d-block\" href=\"{{ path('product') }}\">Continue shopping</a>
            {% if totalQuantity > 0 %}
                <a href=\"{{ path('order')}}\"title=\"Continue to order\" class=\"btn btn-success btn-block\">Order</a>
            {% else %}
                Oops! There's nothing here. Click <a href=\"{{ path('product') }}\">here</a> to have a glance at our products.
            {% endif %}
        </div>

        <div class=\"col-md-4\">
            <!-- Styling for the image ad -->
            <div style=\"display: flex; justify-content: center; align-items: center; height: 100%;\">

                <!-- Replace \"path_to_your_image_ad.jpg\" with the actual path to your image ad -->
                <img src=\"{{ asset('assets/img/cartbanner.png') }}\"  alt=\"Advertisement\" style=\"max-width: 100%; max-height: 100%;\">

            </div>
        </div>
    </div>
{% endblock %}
", "cart/index.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\cart\\index.html.twig");
    }
}
