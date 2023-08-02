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

/* register/index.html.twig */
class __TwigTemplate_dcf62180ac0e9be13a319d82db89d7d2 extends Template
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
        // line 15
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"text-center\">
                    <img src=\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\"
                         alt=\"Logo\" class=\"mb-3\" height=\"40px\" width=\"40px\">
                </div>
                <h2 class=\"text-center\">Create account</h2>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstname", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Lan, Anh, Hoa, etc."]]);
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Nguyen, Tran, Le, etc."]]);
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "placeholder" => "someone@example.com"]]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter your password"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), "second", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Confirm your password"]]);
        echo "
                <p>
                    Already have an account? <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Sign in</a>
                </p>
                <div class=\"text-left\"> <!-- Add the 'text-right' class to align the button to the right -->
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "submit", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
        echo "
                </div>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  109 => 36,  103 => 33,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  68 => 18,  58 => 17,  35 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2 class=\"text-center\">Create an account</h2>
                <p class=\"font-weight-bold text-center\">Sign up for Banazon account</p>
                {{ form(form) }}
            </div>
        </div>
    </div>
{% endblock %}
#}
{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"text-center\">
                    <img src=\"https://d2u3dcdbebyaiu.cloudfront.net/uploads/atch_img/347/682070cc8606bd4d9952d2b309070e54_res.jpeg\"
                         alt=\"Logo\" class=\"mb-3\" height=\"40px\" width=\"40px\">
                </div>
                <h2 class=\"text-center\">Create account</h2>
                {{ form_start(form) }}
                {{ form_row(form.firstname, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Lan, Anh, Hoa, etc.'}}) }}
                {{ form_row(form.lastname, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Nguyen, Tran, Le, etc.'}}) }}
                {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'someone@example.com'}}) }}
                {{ form_row(form.password.first, {'attr': {'class': 'form-control', 'placeholder': 'Enter your password'}}) }}
                {{ form_row(form.password.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirm your password'}}) }}
                <p>
                    Already have an account? <a href=\"{{ path('app_login') }}\">Sign in</a>
                </p>
                <div class=\"text-left\"> <!-- Add the 'text-right' class to align the button to the right -->
                    {{ form_widget(form.submit, {'attr': {'class': 'btn btn-warning'}}) }}
                </div>
                {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "register/index.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\register\\index.html.twig");
    }
}
