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

/* event_user/pdf.html.twig */
class __TwigTemplate_87c956d5f9cc958b19dcbdcb940195ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/pdf.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation d'événement</title>
    <style>
        /* Ajoutez des styles CSS selon vos besoins pour le rendu PDF */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
            margin-top: 20px;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Détails de la réservation</h1>

        <table>
            <thead>
                <tr>
                    <th>Nom de l'événement</th>
                    <th>Date de l'événement</th>
                    <th>Lieu</th>
                    <th>Prix</th>
                    <th>CIN</th>
                    <th>Nom utilisateur</th>
                    <th>Prénom utilisateur</th>
                    <th>QR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "event", [], "any", false, false, false, 54), "getNom", [], "method", false, false, false, 54), "html", null, true);
        echo "</td>
                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "event", [], "any", false, false, false, 55), "getDate", [], "method", false, false, false, 55), "html", null, true);
        echo "</td>
                    <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "event", [], "any", false, false, false, 56), "getLieu", [], "method", false, false, false, 56), "html", null, true);
        echo "</td>
                    <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "event", [], "any", false, false, false, 57), "getPrix", [], "method", false, false, false, 57), "html", null, true);
        echo "</td>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "cin", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                    <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "getNomU", [], "method", false, false, false, 59), "html", null, true);
        echo "</td>
                    <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "getPrenomU", [], "method", false, false, false, 60), "html", null, true);
        echo "</td>
                  
                </tr>
            </tbody>
        </table>

    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "event_user/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  117 => 59,  113 => 58,  109 => 57,  105 => 56,  101 => 55,  97 => 54,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# pdf_template.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation d'événement</title>
    <style>
        /* Ajoutez des styles CSS selon vos besoins pour le rendu PDF */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
            margin-top: 20px;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Détails de la réservation</h1>

        <table>
            <thead>
                <tr>
                    <th>Nom de l'événement</th>
                    <th>Date de l'événement</th>
                    <th>Lieu</th>
                    <th>Prix</th>
                    <th>CIN</th>
                    <th>Nom utilisateur</th>
                    <th>Prénom utilisateur</th>
                    <th>QR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ reservation.event.getNom() }}</td>
                    <td>{{ reservation.event.getDate() }}</td>
                    <td>{{ reservation.event.getLieu() }}</td>
                    <td>{{ reservation.event.getPrix() }}</td>
                    <td>{{ reservation.cin }}</td>
                    <td>{{ reservation.getNomU() }}</td>
                    <td>{{ reservation.getPrenomU() }}</td>
                  
                </tr>
            </tbody>
        </table>

    </div>
</body>
</html>
", "event_user/pdf.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\event_user\\pdf.html.twig");
    }
}
