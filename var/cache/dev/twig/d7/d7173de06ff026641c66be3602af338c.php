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

/* tools/toolId.html.twig */
class __TwigTemplate_68dabe6e26c56bb4133a8e0f7243b4ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/toolId.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools/toolId.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tools/toolId.html.twig", 1);
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

        echo "Détails de l'outil";
        
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
        echo "    <div class=\"container\">
        <h1 class=\"mt-5\">Détails de l'outil</h1>
        <div class=\"row mt-3 justify-content-center align-items-center mt-4\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body d-flex flex-column align-items-center\">
                        <h5 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tool"]) || array_key_exists("tool", $context) ? $context["tool"] : (function () { throw new RuntimeError('Variable "tool" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                        <p class=\"card-text\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tool"]) || array_key_exists("tool", $context) ? $context["tool"] : (function () { throw new RuntimeError('Variable "tool" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                        <div class=\"mt-3\">
                            <h6>QR Code</h6>
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/qrCodeSaver/" . twig_get_attribute($this->env, $this->source, (isset($context["tool"]) || array_key_exists("tool", $context) ? $context["tool"] : (function () { throw new RuntimeError('Variable "tool" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)) . ".png")), "html", null, true);
        echo "\" alt=\"QR Code de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tool"]) || array_key_exists("tool", $context) ? $context["tool"] : (function () { throw new RuntimeError('Variable "tool" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tools/toolId.html.twig";
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
        return array (  106 => 16,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'outil{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-5\">Détails de l'outil</h1>
        <div class=\"row mt-3 justify-content-center align-items-center mt-4\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body d-flex flex-column align-items-center\">
                        <h5 class=\"card-title\">{{ tool.name }}</h5>
                        <p class=\"card-text\">{{ tool.description }}</p>
                        <div class=\"mt-3\">
                            <h6>QR Code</h6>
                            <img src=\"{{ asset('images/qrCodeSaver/' ~ tool.name ~ '.png') }}\" alt=\"QR Code de {{ tool.name }}\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "tools/toolId.html.twig", "C:\\laragon\\www\\applicationEtool\\etoolWebsite\\templates\\tools\\toolId.html.twig");
    }
}
