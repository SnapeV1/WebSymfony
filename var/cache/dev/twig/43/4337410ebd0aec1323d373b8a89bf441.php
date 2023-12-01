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

/* reclamation/myMessages.html.twig */
class __TwigTemplate_055fdc9b69333b5077d57be78286e71e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/myMessages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/myMessages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/myMessages.html.twig", 1);
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
        echo "
<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-table me-1\"></i>
         My Messages
    </div>
    <div class=\"card-body\">
        <table id=\"datatablesSimple\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sender Name</th>
                    <th>State</th>
                    <th>Delete</th>

                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Sender Name</th>
                    <th>State</th>
                    <th>Delete</th>
                    
                    
                </tr>
            </tfoot>
            <tbody>
                                        
                                        
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 36
            echo "                                    
            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "sender", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                <td><a href=";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo " <i class=\"fa-solid fa-trash-can fa-lg\"></i> </td>
                
                                            
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                     
                                       
            </tbody>
        </table>
        <a href=";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reclamation");
        echo ">
         <button type=\"button\" class=\"btn btn-primary \" >Send New Message <i class=\"fa-solid fa-paper-plane fa-sm\"></i> </button>
         </a>
    </div>
   
</div>

                   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/myMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  132 => 46,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 36,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-table me-1\"></i>
         My Messages
    </div>
    <div class=\"card-body\">
        <table id=\"datatablesSimple\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sender Name</th>
                    <th>State</th>
                    <th>Delete</th>

                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Sender Name</th>
                    <th>State</th>
                    <th>Delete</th>
                    
                    
                </tr>
            </tfoot>
            <tbody>
                                        
                                        
            {% for a in list %}
                                    
            <tr>
                <td>{{a.id}} </td>
                <td>{{a.sender.nom}} </td>
                <td>{{a.etat}} </td>
                <td><a href={{path('delete_reclamation',{id:a.id})}} <i class=\"fa-solid fa-trash-can fa-lg\"></i> </td>
                
                                            
            </tr>
            {% endfor %}
                                     
                                       
            </tbody>
        </table>
        <a href={{path('add_reclamation')}}>
         <button type=\"button\" class=\"btn btn-primary \" >Send New Message <i class=\"fa-solid fa-paper-plane fa-sm\"></i> </button>
         </a>
    </div>
   
</div>

                   
{% endblock %}", "reclamation/myMessages.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\reclamation\\myMessages.html.twig");
    }
}
