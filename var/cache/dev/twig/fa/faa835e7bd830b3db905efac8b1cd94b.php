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

/* event_admin/getrevA.html.twig */
class __TwigTemplate_3cfea39bfa8deb9bc9bb23b17c3ee9a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/getrevA.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/getrevA.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "event_admin/getrevA.html.twig", 1);
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
        <h1>Liste des réservations</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">CIN</th>
                        <th scope=\"col\">Nom utilisateur</th>
                        <th scope=\"col\">Prénom utilisateur</th>
                        <th scope=\"col\">Actions</th> <!-- Ajout de la colonne pour les actions -->
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 25
            echo "                    <tr class=\"table-active\">
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 26), "getNom", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 27), "getDate", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 28), "getLieu", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 29), "getPrix", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "cin", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getNomU", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getPrenomU", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_updaterev", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                                <span style=\"margin-right: 10px;\"></span> <!-- Ajoutez une marge à droite pour l'espace -->
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventadmin_deleterev", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "event_admin/getrevA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  134 => 37,  129 => 35,  123 => 32,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  96 => 25,  92 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }}
    
    <div class=\"container text-center\">
        <h1>Liste des réservations</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">CIN</th>
                        <th scope=\"col\">Nom utilisateur</th>
                        <th scope=\"col\">Prénom utilisateur</th>
                        <th scope=\"col\">Actions</th> <!-- Ajout de la colonne pour les actions -->
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in events %}
                    <tr class=\"table-active\">
                        <td>{{ reservation.event.getNom() }}</td>
                        <td>{{ reservation.event.getDate() }}</td>
                        <td>{{ reservation.event.getLieu() }}</td>
                        <td>{{ reservation.event.getPrix() }}</td>
                        <td>{{ reservation.cin }}</td>
                        <td>{{ reservation.getNomU() }}</td>
                        <td>{{ reservation.getPrenomU() }}</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('eventadmin_updaterev', {'id': reservation.id}) }}\" class=\"btn btn-primary\">Edit</a>
                                <span style=\"margin-right: 10px;\"></span> <!-- Ajoutez une marge à droite pour l'espace -->
                                <a href=\"{{ path('eventadmin_deleterev', {'id': reservation.id}) }}\" class=\"btn btn-danger\">Delete</a>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "event_admin/getrevA.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\event_admin\\getrevA.html.twig");
    }
}
