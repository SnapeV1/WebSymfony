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

/* connected.html.twig */
class __TwigTemplate_21e2b87cf08efd6c9ea987c44eca0f1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sideNav' => [$this, 'block_sideNav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connected.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connected.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "connected.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_sideNav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sideNav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sideNav"));

        // line 4
        echo "<div id=\"layoutSidenav\">
         
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Options</div>
                            <a class=\"nav-link\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_utilisateur");
        echo ">
                                <div class=\"sb-nav-link-icon\"><i class=\"fa-solid fa-address-card\" style=\"color: #d9d9d9;\"></i></div>
                                Profil
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link\" href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_utilisateur");
        echo " >
                                <div class=\"sb-nav-link-icon\"><i class=\"fa-solid fa-users fa-2xs\"style=\"color: #d9d9d9;\"></i></div>
                                Users
                                
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link \" href=";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_reclamation");
        echo " >
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Messages
                                
                            </a>
                           
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OnShowAddProductAdmin");
        echo "\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Product
                            </a>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Training
                            </a>
                             <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Admingroups_getall");
        echo "\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Groups
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
         <div id=\"layoutSidenav_content\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  139 => 56,  137 => 55,  121 => 42,  110 => 34,  100 => 27,  86 => 16,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block sideNav%}
<div id=\"layoutSidenav\">
         
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Options</div>
                            <a class=\"nav-link\" href={{path('profil_utilisateur')}}>
                                <div class=\"sb-nav-link-icon\"><i class=\"fa-solid fa-address-card\" style=\"color: #d9d9d9;\"></i></div>
                                Profil
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link\" href={{path('all_utilisateur')}} >
                                <div class=\"sb-nav-link-icon\"><i class=\"fa-solid fa-users fa-2xs\"style=\"color: #d9d9d9;\"></i></div>
                                Users
                                
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link \" href={{path('all_reclamation')}} >
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Messages
                                
                            </a>
                           
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"{{path('OnShowAddProductAdmin')}}\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Product
                            </a>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Training
                            </a>
                             <a class=\"nav-link\" href=\"{{path('Admingroups_getall')}}\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Groups
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
         <div id=\"layoutSidenav_content\">
        {% block body %}{% endblock %}
        </div>
        </div>
        {% endblock %}", "connected.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\connected.html.twig");
    }
}
