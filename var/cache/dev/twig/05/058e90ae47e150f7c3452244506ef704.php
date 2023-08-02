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

/* home/about.html.twig */
class __TwigTemplate_776e2956c797405913aeaee5dcbd4271 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
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
        echo "    <div class=\"container\">
        <h1>Welcome to Banazon - Your Ultimate Destination for Apple Products!</h1>
        <div class=\"about-section\">
            <div class=\"text-center\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/finallogo.png"), "html", null, true);
        echo "\" alt=\"About Us\">
            </div>
        </div>
        <p>
            At Banazon, we take pride in being an exclusive online e-commerce platform that specializes in offering a premium selection of Apple products. As an Apple Premium Reseller, we are committed to providing our customers with a seamless shopping experience, unmatched product expertise, and the assurance of genuine Apple merchandise.
        </p>

        <h4><i class=\"fas fa-globe\"></i> Discover the World of Apple</h4>
        <p>
            Step into the captivating world of Apple at Banazon, where you'll find an extensive range of Apple devices, accessories, and software. From the latest iPhone models to cutting-edge MacBooks, iPads, Apple Watches, and more, we have everything you need to elevate your digital lifestyle.
        </p>

        <h4><i class=\"fas fa-star\"></i> Unparalleled Quality</h4>
        <p>
            We understand the significance of quality when it comes to Apple products. That's why we ensure that each item in our inventory meets Apple's stringent standards. When you shop at Banazon, you can be confident that you're getting genuine, high-quality products that are built to deliver exceptional performance and durability.
        </p>
        <h4><i class=\"fas fa-user\"></i> Expert Guidance</h4>
        <p>
            Choosing the right Apple product can be a daunting task, given the array of options available. Our team of knowledgeable and Apple-certified experts is here to assist you every step of the way. Whether you're a tech enthusiast or a novice user, we'll provide personalized guidance to help you make informed decisions and find the perfect Apple device that suits your needs.
        </p>
        <h4><i class=\"fas fa-thumbs-up\"></i> Customer Satisfaction Guaranteed</h4>
        <p>
            At Banazon, our customers are at the heart of everything we do. We strive to exceed your expectations by offering a seamless online shopping experience. From secure transactions to swift delivery, we ensure that your journey with us is hassle-free and enjoyable. Our dedicated customer support team is always ready to address any queries or concerns you may have, ensuring complete satisfaction with your purchase.
        </p>
        <h4><i class=\"fas fa-percent\"></i> Exclusive Offers and Promotions</h4>
        <p>
            We believe in making your Apple shopping experience even more rewarding. As a Banazon customer, you'll gain access to exclusive offers, promotions, and discounts on a regular basis. Stay updated with the latest Apple releases and take advantage of our special deals, allowing you to get the most out of your favorite Apple products.
        </p>
        <h4><i class=\"fas fa-users\"></i> Join the Banazon Community</h4>
        <p>
            When you shop with Banazon, you become part of a vibrant community of Apple enthusiasts. Connect with like-minded individuals, share your experiences, and stay up-to-date with the latest Apple trends through our social media channels and online forums. We believe in fostering a sense of belonging and creating a space where Apple enthusiasts can come together.
        </p>
        <h4><i class=\"fas fa-award\"></i> Experience the Banazon Difference</h4>
        <p>
            Banazon is more than just an online store; it's a trusted destination for all your Apple needs. With our unrivaled selection, genuine products, expert guidance, and exceptional customer service, we aim to make your Apple shopping experience truly remarkable.
        </p>
        <div class=\"text-center\"> ";
        // line 45
        echo "            <img src=\"https://support.apple.com/content/dam/edam/applecare/images/en_US/psp_content/tile-split-getsupport.image.large_2x.png\" alt=\"About Us\" style=\"width: 100%;\">
        </div><br>
        <p class=\"text-center font-weight-bold\">
            Get started today and explore the world of Apple at Banazon - your premier online destination for all things Apple!
        </p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Welcome to Banazon - Your Ultimate Destination for Apple Products!</h1>
        <div class=\"about-section\">
            <div class=\"text-center\">
                <img src=\"{{ asset('assets/img/finallogo.png') }}\" alt=\"About Us\">
            </div>
        </div>
        <p>
            At Banazon, we take pride in being an exclusive online e-commerce platform that specializes in offering a premium selection of Apple products. As an Apple Premium Reseller, we are committed to providing our customers with a seamless shopping experience, unmatched product expertise, and the assurance of genuine Apple merchandise.
        </p>

        <h4><i class=\"fas fa-globe\"></i> Discover the World of Apple</h4>
        <p>
            Step into the captivating world of Apple at Banazon, where you'll find an extensive range of Apple devices, accessories, and software. From the latest iPhone models to cutting-edge MacBooks, iPads, Apple Watches, and more, we have everything you need to elevate your digital lifestyle.
        </p>

        <h4><i class=\"fas fa-star\"></i> Unparalleled Quality</h4>
        <p>
            We understand the significance of quality when it comes to Apple products. That's why we ensure that each item in our inventory meets Apple's stringent standards. When you shop at Banazon, you can be confident that you're getting genuine, high-quality products that are built to deliver exceptional performance and durability.
        </p>
        <h4><i class=\"fas fa-user\"></i> Expert Guidance</h4>
        <p>
            Choosing the right Apple product can be a daunting task, given the array of options available. Our team of knowledgeable and Apple-certified experts is here to assist you every step of the way. Whether you're a tech enthusiast or a novice user, we'll provide personalized guidance to help you make informed decisions and find the perfect Apple device that suits your needs.
        </p>
        <h4><i class=\"fas fa-thumbs-up\"></i> Customer Satisfaction Guaranteed</h4>
        <p>
            At Banazon, our customers are at the heart of everything we do. We strive to exceed your expectations by offering a seamless online shopping experience. From secure transactions to swift delivery, we ensure that your journey with us is hassle-free and enjoyable. Our dedicated customer support team is always ready to address any queries or concerns you may have, ensuring complete satisfaction with your purchase.
        </p>
        <h4><i class=\"fas fa-percent\"></i> Exclusive Offers and Promotions</h4>
        <p>
            We believe in making your Apple shopping experience even more rewarding. As a Banazon customer, you'll gain access to exclusive offers, promotions, and discounts on a regular basis. Stay updated with the latest Apple releases and take advantage of our special deals, allowing you to get the most out of your favorite Apple products.
        </p>
        <h4><i class=\"fas fa-users\"></i> Join the Banazon Community</h4>
        <p>
            When you shop with Banazon, you become part of a vibrant community of Apple enthusiasts. Connect with like-minded individuals, share your experiences, and stay up-to-date with the latest Apple trends through our social media channels and online forums. We believe in fostering a sense of belonging and creating a space where Apple enthusiasts can come together.
        </p>
        <h4><i class=\"fas fa-award\"></i> Experience the Banazon Difference</h4>
        <p>
            Banazon is more than just an online store; it's a trusted destination for all your Apple needs. With our unrivaled selection, genuine products, expert guidance, and exceptional customer service, we aim to make your Apple shopping experience truly remarkable.
        </p>
        <div class=\"text-center\"> {# final banner for about us #}
            <img src=\"https://support.apple.com/content/dam/edam/applecare/images/en_US/psp_content/tile-split-getsupport.image.large_2x.png\" alt=\"About Us\" style=\"width: 100%;\">
        </div><br>
        <p class=\"text-center font-weight-bold\">
            Get started today and explore the world of Apple at Banazon - your premier online destination for all things Apple!
        </p>
    </div>
{% endblock %}
", "home/about.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\home\\about.html.twig");
    }
}
