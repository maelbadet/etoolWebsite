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

/* header_footer/footer.html.twig */
class __TwigTemplate_3a79375c90f18d11304178840516b40a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_footer/footer.html.twig"));

        // line 2
        echo "<footer class=\"footer mt-auto py-3 bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"#\">Conditions Générales d'Utilisation</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"#\">Politique de Confidentialité</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"#\">Mentions Légales</a>
\t\t\t\t</p>
\t\t\t\t<p>&copy;
\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\tEtool. Tous droits réservés.</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header_footer/footer.html.twig";
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
        return array (  57 => 14,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/header_footer/footer.html.twig #}
<footer class=\"footer mt-auto py-3 bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<p>
\t\t\t\t\t<a href=\"#\">Conditions Générales d'Utilisation</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"#\">Politique de Confidentialité</a>
\t\t\t\t\t|
\t\t\t\t\t<a href=\"#\">Mentions Légales</a>
\t\t\t\t</p>
\t\t\t\t<p>&copy;
\t\t\t\t\t{{ \"now\"|date(\"Y\") }}
\t\t\t\t\tEtool. Tous droits réservés.</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
", "header_footer/footer.html.twig", "C:\\laragon\\www\\applicationEtool\\etoolWebsite\\templates\\header_footer\\footer.html.twig");
    }
}
