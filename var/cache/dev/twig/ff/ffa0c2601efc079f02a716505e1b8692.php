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

/* header_footer/header.html.twig */
class __TwigTemplate_3400bc843c394a98b225011fae379eed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_footer/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_footer/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark\">
\t<div class=\"container-fluid\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon text-light\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light active\" aria-current=\"page\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/etool.png"), "html", null, true);
        echo "\" style=\"max-width: 100px; max-height: 100px\" alt=\"Etool\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_worksite");
        echo "\">Chantiers</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tools");
        echo "\">Outils</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link text-light dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tCreer des QR codes
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu bg-dark\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-light\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_worksite_create");
        echo "\">Nouveau chantier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-light\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tools_creation");
        echo "\">Nouvel outil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header_footer/header.html.twig";
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
        return array (  95 => 33,  87 => 28,  81 => 25,  70 => 17,  64 => 14,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark\">
\t<div class=\"container-fluid\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon text-light\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light active\" aria-current=\"page\" href=\"{{ path('app_home_page') }}\">
\t\t\t\t\t\t<img src=\"{{ asset('images/etool.png') }}\" style=\"max-width: 100px; max-height: 100px\" alt=\"Etool\">
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{ path('app_worksite') }}\">Chantiers</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{ path('app_tools') }}\">Outils</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link text-light dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tCreer des QR codes
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu bg-dark\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-light\" href=\"{{ path('app_worksite_create') }}\">Nouveau chantier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-light\" href=\"{{ path('app_tools_creation') }}\">Nouvel outil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{path('admin')}}\">Admin</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "header_footer/header.html.twig", "C:\\laragon\\www\\applicationEtool\\etoolWebsite\\templates\\header_footer\\header.html.twig");
    }
}
