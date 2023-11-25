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

/* event_user/getall.html.twig */
class __TwigTemplate_7b71dfff79950aba6f6a6a09af51691c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_user/getall.html.twig", 1);
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
        
        ";
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <form method=\"get\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventuser_getall");
        echo "\">
            <div class=\"row mb-3\">
                <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" name=\"search_nom\" placeholder=\"Nom de l'événement\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" name=\"search_lieu\" placeholder=\"Lieu\">
                </div>
                <div class=\"col\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </div>
        </form>
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
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 51
            echo "                        <tr class=\"table-active\">
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 53), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 56)), "html", null, true);
            echo "\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                         <td>
    <div class=\"btn-group d-flex align-items-center\" role=\"group\">
        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_update", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">Éditer</a>
        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" style=\"margin-right: 10px; onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement?')\">Supprimer</a>
        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resv_affiche", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\" style=\"margin-right: 10px;\">Réserver</a>
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_generate_qr", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\"> QR</a>
    </div>
</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return "event_user/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 68,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  149 => 51,  145 => 50,  114 => 23,  105 => 19,  102 => 18,  97 => 17,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    
    <div class=\"container text-center\">
        <h1>Liste des événements</h1>
        
        {# Afficher les messages de succès #}
        {% for flash_message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ flash_message }}
            </div>
        {% endfor %}

        {# Afficher les messages d'erreur #}
        {% for flash_message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ flash_message }}
            </div>
        {% endfor %}
{# Formulaire de recherche #}
        <form method=\"get\" action=\"{{ path('eventuser_getall') }}\">
            <div class=\"row mb-3\">
                <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" name=\"search_nom\" placeholder=\"Nom de l'événement\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" class=\"form-control\" name=\"search_lieu\" placeholder=\"Lieu\">
                </div>
                <div class=\"col\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </div>
        </form>
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
                            <td>{{ event.nom }}</td>
                            <td>{{ event.date|date('d-m-Y') }}</td>
                            <td>{{ event.lieu }}</td>
                            <td>{{ event.description }}</td>
                            <td><img src=\"{{ asset(event.image) }}\" class=\"custom-block-image img-fluid\" alt=\"\"></td>
                            <td>{{ event.prix }}</td>
                         <td>
    <div class=\"btn-group d-flex align-items-center\" role=\"group\">
        <a href=\"{{ path('event_update', {'id': event.id}) }}\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">Éditer</a>
        <a href=\"{{ path('event_delete', {'id': event.id}) }}\" class=\"btn btn-danger\" style=\"margin-right: 10px; onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement?')\">Supprimer</a>
        <a href=\"{{ path('resv_affiche', {'id': event.id}) }}\" class=\"btn btn-secondary\" style=\"margin-right: 10px;\">Réserver</a>
        <a href=\"{{ path('event_generate_qr', {'id': event.id}) }}\" class=\"btn btn-secondary\"> QR</a>
    </div>
</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "event_user/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\event_user\\getall.html.twig");
    }
}
