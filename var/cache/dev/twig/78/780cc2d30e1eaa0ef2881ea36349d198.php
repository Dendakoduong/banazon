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

/* home/index.html.twig */
class __TwigTemplate_5332f859eefca8cc3d8749b1d3dc9ab7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3 class=\"text-center text-dark\" style=\"font-weight: bold;\">Suggested for you</h3>
    <p class=\"text-center\"> Most favorite products on Banazon</p>
    <div class=\"row\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top_products"]) || array_key_exists("top_products", $context) ? $context["top_products"] : (function () { throw new RuntimeError('Variable "top_products" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "            <div class=\"col-md-4\">
                <div class=\"product-item\">
                    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\"><img class=\"img-fluid\" src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\"></a>
                    <h5 class=\"mt-2\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
                    <span class=\"product-subtitle text-center\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
                    <span class=\"product-price text-center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 13) / 100), 2, ",", "."), "html", null, true);
            echo " USD </span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
    <!-- /.row -->


    <!-- start -->
";
        // line 24
        echo "    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">AirPods Pro <span class=\"text-muted\">(2nd generation)</span></h2>
            <p class=\"lead\">Up to 2x more Active Noise Cancellation than the previous generation. Spatial Audio takes immersion to a remarkably personal level. Touch control lets you adjust volume with a swipe. And a leap in power delivers 6 hours of battery life from a single charge.</p>
            <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/airpods-pro/\" role=\"button\">Learn More</a>
            <a class=\"btn btn-outline-dark btn-oval\" href=\"products/airpods-pro-gen-2\" role=\"button\">Buy</a>
        </div>
        <div class=\"col-md-5\">
            <img class=\"img-fluid rounded\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/appro.jpg"), "html", null, true);
        echo "\" alt=\"airpods\">
        </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2 d-flex flex-column align-items-center\">
            <div>
                <h2 class=\"featurette-heading text-center\">Mac Studio<br> <small>and</small> <span class=\"text-muted\">Studio Display</span></h2>
                <p class=\"lead text-center\">Mac Studio with M1 Max and the new M1 Ultra delivers unprecedented performance and extensive connectivity in an incredibly compact design.<br>Studio Display features an expansive 27-inch 5K Retina screen, an advanced camera with Center Stage, and amazing high-fidelity audio</p>
            </div>
            <div>
                <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/newsroom/2022/03/apple-unveils-all-new-mac-studio-and-studio-display/\" role=\"button\">Learn More</a>
                <a class=\"btn btn-outline-dark disabled btn-oval\" role=\"button\">Coming soon</a>
            </div>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <img class=\"img-fluid rounded\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mac.jpg"), "html", null, true);
        echo "\" alt=\"trade-in\">
        </div>
    </div>

    <hr class=\"featurette-divider\">
    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">Apple Watch <span class=\"text-muted\">Series 8</span></h2>
            <p class=\"lead\">A healthy leap ahead.</p>
            <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/apple-watch-series-8/\" role=\"button\">Learn More</a> &nbsp;
            <a class=\"btn btn-outline-dark btn-oval\" href=\"products/apple-watch-series-8-gps-cellular-gold-41mm\" role=\"button\">Buy</a>
        </div>
        <div class=\"col-md-5\">
            <img class=\"img-fluid rounded\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/aw.jpg"), "html", null, true);
        echo "\" alt=\"apple-watch\">
        </div>
    </div>


    <!-- /END THE FEATURETTES -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  147 => 52,  126 => 34,  114 => 24,  107 => 17,  97 => 13,  93 => 12,  89 => 11,  81 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h3 class=\"text-center text-dark\" style=\"font-weight: bold;\">Suggested for you</h3>
    <p class=\"text-center\"> Most favorite products on Banazon</p>
    <div class=\"row\">
        {% for product in top_products %}
            <div class=\"col-md-4\">
                <div class=\"product-item\">
                    <a href=\"{{ path('product_show', {slug: product.slug}) }}\"><img class=\"img-fluid\" src=\"/uploads/{{product.image}}\" alt=\"{{product.name}}\"></a>
                    <h5 class=\"mt-2\">{{ product.name}}</h5>
                    <span class=\"product-subtitle text-center\">{{product.subtitle}}</span>
                    <span class=\"product-price text-center\">{{(product.price / 100 )|number_format(2,',', '.')}} USD </span>
                </div>
            </div>
        {% endfor %}
    </div>
    <!-- /.row -->


    <!-- start -->
{#    <h3 class=\"text-center text-dark\" style=\"font-weight: bold;\">New Arrivals</h3>#}
{#    <p class=\"text-center\"> New products on Banazon</p>#}
    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">AirPods Pro <span class=\"text-muted\">(2nd generation)</span></h2>
            <p class=\"lead\">Up to 2x more Active Noise Cancellation than the previous generation. Spatial Audio takes immersion to a remarkably personal level. Touch control lets you adjust volume with a swipe. And a leap in power delivers 6 hours of battery life from a single charge.</p>
            <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/airpods-pro/\" role=\"button\">Learn More</a>
            <a class=\"btn btn-outline-dark btn-oval\" href=\"products/airpods-pro-gen-2\" role=\"button\">Buy</a>
        </div>
        <div class=\"col-md-5\">
            <img class=\"img-fluid rounded\" src=\"{{ asset('assets/img/appro.jpg') }}\" alt=\"airpods\">
        </div>
    </div>

    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-2 d-flex flex-column align-items-center\">
            <div>
                <h2 class=\"featurette-heading text-center\">Mac Studio<br> <small>and</small> <span class=\"text-muted\">Studio Display</span></h2>
                <p class=\"lead text-center\">Mac Studio with M1 Max and the new M1 Ultra delivers unprecedented performance and extensive connectivity in an incredibly compact design.<br>Studio Display features an expansive 27-inch 5K Retina screen, an advanced camera with Center Stage, and amazing high-fidelity audio</p>
            </div>
            <div>
                <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/newsroom/2022/03/apple-unveils-all-new-mac-studio-and-studio-display/\" role=\"button\">Learn More</a>
                <a class=\"btn btn-outline-dark disabled btn-oval\" role=\"button\">Coming soon</a>
            </div>
        </div>
        <div class=\"col-md-5 order-md-1\">
            <img class=\"img-fluid rounded\" src=\"{{ asset('assets/img/mac.jpg') }}\" alt=\"trade-in\">
        </div>
    </div>

    <hr class=\"featurette-divider\">
    <div class=\"row featurette\">
        <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">Apple Watch <span class=\"text-muted\">Series 8</span></h2>
            <p class=\"lead\">A healthy leap ahead.</p>
            <a class=\"btn btn-dark btn-oval\" href=\"https://www.apple.com/apple-watch-series-8/\" role=\"button\">Learn More</a> &nbsp;
            <a class=\"btn btn-outline-dark btn-oval\" href=\"products/apple-watch-series-8-gps-cellular-gold-41mm\" role=\"button\">Buy</a>
        </div>
        <div class=\"col-md-5\">
            <img class=\"img-fluid rounded\" src=\"{{ asset('assets/img/aw.jpg') }}\" alt=\"apple-watch\">
        </div>
    </div>


    <!-- /END THE FEATURETTES -->
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\home\\index.html.twig");
    }
}
