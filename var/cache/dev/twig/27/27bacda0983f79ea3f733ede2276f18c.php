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

/* home_page/index.html.twig */
class __TwigTemplate_eae0608d9e8e3b43bb0e34eab3267536 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
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
        echo "\tAccueil
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
        echo "\t<div class=\"container mt-5\">
\t\t<div class=\"example-wrapper\">
\t\t\t<h1>Bienvenue sur le site Etool</h1>
\t\t\t<h2>Le premier gestionnaire d'outillage sorti par Clemessy</h2>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<h3>Derniers outils créés</h3>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 17, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tools_id", ["id" => twig_get_attribute($this->env, $this->source, $context["tool"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'outil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</div>
\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tools");
        echo "\" class=\"btn btn-secondary\">Voir tous les outils</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<h3>Derniers chantiers créés</h3>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["worksites"]) || array_key_exists("worksites", $context) ? $context["worksites"] : (function () { throw new RuntimeError('Variable "worksites" does not exist.', 37, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["worksite"]) {
            // line 38
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worksite"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worksite"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_worksite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["worksite"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le chantier</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worksite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</div>
\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_worksite");
        echo "\" class=\"btn btn-secondary\">Voir tous les chantiers</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mt-4\">
\t\t<h3>Derniers emprunts effectués</h3>
\t\t<p>Ici, il y aura les derniers emprunts effectués</p>
\t</div>

\t<div class=\"mt-4\">
\t\t<h3>Derniers échanges effectués</h3>
\t\t<p>Ici, il y aura les derniers échanges effectués</p>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/index.html.twig";
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
        return array (  175 => 50,  171 => 48,  160 => 43,  156 => 42,  152 => 41,  147 => 38,  143 => 37,  133 => 30,  129 => 28,  118 => 23,  114 => 22,  110 => 21,  105 => 18,  101 => 17,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tAccueil
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">
\t\t<div class=\"example-wrapper\">
\t\t\t<h1>Bienvenue sur le site Etool</h1>
\t\t\t<h2>Le premier gestionnaire d'outillage sorti par Clemessy</h2>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<h3>Derniers outils créés</h3>
\t\t\t<div class=\"row\">
\t\t\t\t{% for tool in tools|slice(0, 3) %}
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ tool.name }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ tool.description }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_tools_id', { 'id': tool.id }) }}\" class=\"btn btn-primary\">Voir l'outil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"{{ path('app_tools') }}\" class=\"btn btn-secondary\">Voir tous les outils</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<h3>Derniers chantiers créés</h3>
\t\t\t<div class=\"row\">
\t\t\t\t{% for worksite in worksites|slice(0, 3) %}
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ worksite.title }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ worksite.description }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_worksite_show', { 'id': worksite.id }) }}\" class=\"btn btn-primary\">Voir le chantier</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t<a href=\"{{ path('app_worksite') }}\" class=\"btn btn-secondary\">Voir tous les chantiers</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mt-4\">
\t\t<h3>Derniers emprunts effectués</h3>
\t\t<p>Ici, il y aura les derniers emprunts effectués</p>
\t</div>

\t<div class=\"mt-4\">
\t\t<h3>Derniers échanges effectués</h3>
\t\t<p>Ici, il y aura les derniers échanges effectués</p>
\t</div>
{% endblock %}
", "home_page/index.html.twig", "C:\\laragon\\www\\nouveau_code_appli_etool\\etoolWebsite\\templates\\home_page\\index.html.twig");
    }
}
