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

/* worksite/show.html.twig */
class __TwigTemplate_a0767941f6f000417484c96572b71045 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "worksite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "worksite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "worksite/show.html.twig", 1);
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

        // line 4
        echo "    Chantier ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container mt-5\">
        <h1 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        <div class=\"row mt-4\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                        <p class=\"card-text\"><strong>Adresse:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 15, $this->source); })()), "address", [], "any", false, false, false, 15), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 15, $this->source); })()), "postalCode", [], "any", false, false, false, 15), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 15, $this->source); })()), "city", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                        <div id=\"map\" style=\"height: 300px;\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var map = L.map('map').setView([";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 28, $this->source); })()), "latitude", [], "any", false, false, false, 28), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 28, $this->source); })()), "longitude", [], "any", false, false, false, 28), "html", null, true);
        echo "], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 34, $this->source); })()), "latitude", [], "any", false, false, false, 34), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 34, $this->source); })()), "longitude", [], "any", false, false, false, 34), "html", null, true);
        echo "]).addTo(map)
                .bindPopup('<b>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "</b><br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "')
                .openPopup();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "worksite/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  164 => 35,  158 => 34,  147 => 28,  140 => 25,  130 => 24,  108 => 15,  104 => 14,  96 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Chantier {{ worksite.title }}
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center\">{{ worksite.title }}</h1>
        <div class=\"row mt-4\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{ worksite.description }}</p>
                        <p class=\"card-text\"><strong>Adresse:</strong> {{ worksite.address }}, {{ worksite.postalCode }}, {{ worksite.city }}</p>
                        <div id=\"map\" style=\"height: 300px;\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var map = L.map('map').setView([{{ worksite.latitude }}, {{ worksite.longitude }}], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([{{ worksite.latitude }}, {{ worksite.longitude }}]).addTo(map)
                .bindPopup('<b>{{ worksite.title }}</b><br>{{ worksite.description }}')
                .openPopup();
        });
    </script>
{% endblock %}
", "worksite/show.html.twig", "C:\\laragon\\www\\nouveau_code_appli_etool\\etoolWebsite\\templates\\worksite\\show.html.twig");
    }
}
