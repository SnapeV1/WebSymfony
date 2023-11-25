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

/* event_admin/show.html.twig */
class __TwigTemplate_2c2f18636d6418fd7a88df3c4e023e9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "event_admin/show.html.twig", 1);
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
        <h1>Détails de l'événement</h1>

        <h2>EventUser</h2>
        <p>Nom: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p>Date: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), "d-m-Y"), "html", null, true);
        echo "</p>
        <p>Lieu: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 12, $this->source); })()), "lieu", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <p>Description: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
        <p>Image: <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14)), "html", null, true);
        echo "\" class=\"custom-block-image img-fluid\" alt=\"\"></p>
        <p>Prix: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventUser"]) || array_key_exists("eventUser", $context) ? $context["eventUser"] : (function () { throw new RuntimeError('Variable "eventUser" does not exist.', 15, $this->source); })()), "prix", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>

        <h2>EventAdmins associés</h2>
        ";
        // line 18
        if ( !twig_test_empty((isset($context["eventAdmins"]) || array_key_exists("eventAdmins", $context) ? $context["eventAdmins"] : (function () { throw new RuntimeError('Variable "eventAdmins" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventAdmins"]) || array_key_exists("eventAdmins", $context) ? $context["eventAdmins"] : (function () { throw new RuntimeError('Variable "eventAdmins" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["eventAdmin"]) {
                // line 32
                echo "                        <tr class=\"table-active\">
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "nom_a", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "date_a", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "lieu_a", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "description_a", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "image_a", [], "any", false, false, false, 37)), "html", null, true);
                echo "\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAdmin"], "prix_a", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventAdmin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 44
            echo "            <p>Aucun EventAdmin associé.</p>
        ";
        }
        // line 46
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event_admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  161 => 44,  156 => 41,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  124 => 32,  120 => 31,  106 => 19,  104 => 18,  98 => 15,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  78 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }}

    <div class=\"container text-center\">
        <h1>Détails de l'événement</h1>

        <h2>EventUser</h2>
        <p>Nom: {{ eventUser.nom }}</p>
        <p>Date: {{ eventUser.date|date('d-m-Y') }}</p>
        <p>Lieu: {{ eventUser.lieu }}</p>
        <p>Description: {{ eventUser.description }}</p>
        <p>Image: <img src=\"{{ asset(eventUser.image) }}\" class=\"custom-block-image img-fluid\" alt=\"\"></p>
        <p>Prix: {{ eventUser.prix }}</p>

        <h2>EventAdmins associés</h2>
        {% if eventAdmins is not empty %}
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    {% for eventAdmin in eventAdmins %}
                        <tr class=\"table-active\">
                            <td>{{ eventAdmin.nom_a }}</td>
                            <td>{{ eventAdmin.date_a|date('d-m-Y') }}</td>
                            <td>{{ eventAdmin.lieu_a }}</td>
                            <td>{{ eventAdmin.description_a }}</td>
                            <td><img src=\"{{ asset(eventAdmin.image_a) }}\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>{{ eventAdmin.prix_a }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>Aucun EventAdmin associé.</p>
        {% endif %}
    </div>
{% endblock %}
", "event_admin/show.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\event_admin\\show.html.twig");
    }
}
