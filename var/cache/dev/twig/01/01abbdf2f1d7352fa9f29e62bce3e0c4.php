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

        echo "Chantier ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container mt-5\">
        <h1 class=\"text-center\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 9, $this->source); })()), "city", [], "any", false, false, false, 9), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 9, $this->source); })()), "postalCode", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p>latitude ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 10, $this->source); })()), "latitude", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p>longitude ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 11, $this->source); })()), "longitude", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>

        <div id=\"map\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
    <script>
        console.log(";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 20, $this->source); })()), "latitude", [], "any", false, false, false, 20), "html", null, true);
        echo ");
        console.log(";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 21, $this->source); })()), "longitude", [], "any", false, false, false, 21), "html", null, true);
        echo ");
        document.addEventListener(\"DOMContentLoaded\", function() {
            var map = L.map('map').setView([";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 23, $this->source); })()), "latitude", [], "any", false, false, false, 23), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 23, $this->source); })()), "longitude", [], "any", false, false, false, 23), "html", null, true);
        echo "], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 29, $this->source); })()), "latitude", [], "any", false, false, false, 29), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 29, $this->source); })()), "longitude", [], "any", false, false, false, 29), "html", null, true);
        echo "]).addTo(map)
                .bindPopup('";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["worksite"]) || array_key_exists("worksite", $context) ? $context["worksite"] : (function () { throw new RuntimeError('Variable "worksite" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
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
        return array (  166 => 30,  160 => 29,  149 => 23,  144 => 21,  140 => 20,  136 => 18,  126 => 17,  111 => 11,  107 => 10,  101 => 9,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chantier {{ worksite.title }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center\">{{ worksite.title }}</h1>
        <p>{{ worksite.description }}</p>
        <p>{{ worksite.city }}, {{ worksite.postalCode }}</p>
        <p>latitude {{ worksite.latitude }}</p>
        <p>longitude {{ worksite.longitude }}</p>

        <div id=\"map\"></div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
    <script>
        console.log({{ worksite.latitude }});
        console.log({{ worksite.longitude }});
        document.addEventListener(\"DOMContentLoaded\", function() {
            var map = L.map('map').setView([{{ worksite.latitude }}, {{ worksite.longitude }}], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([{{ worksite.latitude }}, {{ worksite.longitude }}]).addTo(map)
                .bindPopup('{{ worksite.title }}<br>{{ worksite.description }}')
                .openPopup();
        });
    </script>
{% endblock %}
", "worksite/show.html.twig", "C:\\laragon\\www\\nouveau_code_appli_etool\\etoolWebsite\\templates\\worksite\\show.html.twig");
    }
}
