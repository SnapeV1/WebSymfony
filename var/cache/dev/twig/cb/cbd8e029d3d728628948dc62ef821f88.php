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

/* event_admin/getall.html.twig */
class __TwigTemplate_e2fb41751657e264a0ce17214ba1a849 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/getall.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "event_admin/getall.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <div class=\"container text-center\">
        <h1>Liste des événements</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 24
            echo "                        <tr class=\"table-active\">
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["event"], "getNomA", [], "method", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getNomA", [], "method", false, false, false, 25)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getNomA", [], "method", false, false, false, 25)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getNom", [], "method", false, false, false, 25))), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["event"], "getDateA", [], "method", true, true, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getDateA", [], "method", false, false, false, 26)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getDateA", [], "method", false, false, false, 26)) : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getDate", [], "method", false, false, false, 26), "d-m-Y"))), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["event"], "getLieuA", [], "method", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getLieuA", [], "method", false, false, false, 27)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getLieuA", [], "method", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getLieu", [], "method", false, false, false, 27))), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["event"], "getDescriptionA", [], "method", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getDescriptionA", [], "method", false, false, false, 28)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getDescriptionA", [], "method", false, false, false, 28)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getDescription", [], "method", false, false, false, 28))), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, $context["event"], "getImageA", [], "method", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getImageA", [], "method", false, false, false, 29)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getImageA", [], "method", false, false, false, 29)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImage", [], "method", false, false, false, 29)))), "html", null, true);
            echo "\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["event"], "getPrixA", [], "method", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getPrixA", [], "method", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getPrixA", [], "method", false, false, false, 30)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getPrix", [], "method", false, false, false, 30))), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_update", ["id" => (((twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", false, false, false, 33)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", false, false, false, 33)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getId", [], "method", false, false, false, 33)))]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                                    <span style=\"margin-right: 10px;\"></span>
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_delete", ["id" => (((twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, $context["event"], "getIdA", [], "method", false, false, false, 35)) : (twig_get_attribute($this->env, $this->source, $context["event"], "getId", [], "method", false, false, false, 35)))]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement?')\">Delete</a>
                                    <!-- Ajoutez d'autres actions au besoin -->
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event_admin/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  129 => 35,  124 => 33,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  95 => 24,  91 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }}
    
    <div class=\"container text-center\">
        <h1>Liste des événements</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for event in events %}
                        <tr class=\"table-active\">
                            <td>{{ event.getNomA() ?? event.getNom() }}</td>
                            <td>{{ event.getDateA() ?? event.getDate()|date('d-m-Y') }}</td>
                            <td>{{ event.getLieuA() ?? event.getLieu() }}</td>
                            <td>{{ event.getDescriptionA() ?? event.getDescription() }}</td>
                            <td><img src=\"{{ asset(event.getImageA() ?? event.getImage()) }}\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>{{ event.getPrixA() ?? event.getPrix() }}</td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('eventadmin_update', {'id': event.getIdA() ?? event.getId()}) }}\" class=\"btn btn-primary\">Edit</a>
                                    <span style=\"margin-right: 10px;\"></span>
                                    <a href=\"{{ path('eventadmin_delete', {'id': event.getIdA() ?? event.getId()}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement?')\">Delete</a>
                                    <!-- Ajoutez d'autres actions au besoin -->
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "event_admin/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\event_admin\\getall.html.twig");
    }
}
