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

/* commande/view_invoice.html.twig */
class __TwigTemplate_53d95b2e505ee483623a99578e9a83ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/view_invoice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/view_invoice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/view_invoice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "invoice-print";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Invoice</title>
        <style>
            body {
                text-align: center;
            }

            h1 {
                color: #3498db; /* Change the color as needed */
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px; /* Add margin for better spacing */
            }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            /* Style the Print Invoice button for screen */
            .print-button-screen {
                background-color: #2ecc71; /* Change the color as needed */
                color: #fff;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border: none;
                border-radius: 5px;
                margin-top: 20px; /* Add margin for better spacing */
            }

            /* Style for print media */
            @media print {
                .footer,
                .print-button-screen {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <h1>Your Invoice number ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "id_c", [], "any", false, false, false, 56), "html", null, true);
        echo "</h1>

        <p>nom: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 58, $this->source); })()), "nomC", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
        <p>Date: ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 59, $this->source); })()), "date", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
        echo "</p>
        <p>Total: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 60, $this->source); })()), "total", [], "any", false, false, false, 60), "html", null, true);
        echo "\$</p>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historiqueRecords"]) || array_key_exists("historiqueRecords", $context) ? $context["historiqueRecords"] : (function () { throw new RuntimeError('Variable "historiqueRecords" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["historiqueRecord"]) {
            // line 72
            echo "                    <tr>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiqueRecord"], "product", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiqueRecord"], "quantite", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiqueRecord"], "prix", [], "any", false, false, false, 75), "html", null, true);
            echo "\$</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historiqueRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </tbody>
        </table>

        <!-- Add a Print button for screen -->
        <button class=\"print-button-screen\" onclick=\"window.print()\">Print Invoice</button>
    </body>
    </html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commande/view_invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 78,  185 => 75,  181 => 74,  177 => 73,  174 => 72,  170 => 71,  156 => 60,  152 => 59,  148 => 58,  143 => 56,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_class %}invoice-print{% endblock %}

{% block body %}

    {{ parent() }}
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Invoice</title>
        <style>
            body {
                text-align: center;
            }

            h1 {
                color: #3498db; /* Change the color as needed */
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px; /* Add margin for better spacing */
            }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            /* Style the Print Invoice button for screen */
            .print-button-screen {
                background-color: #2ecc71; /* Change the color as needed */
                color: #fff;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border: none;
                border-radius: 5px;
                margin-top: 20px; /* Add margin for better spacing */
            }

            /* Style for print media */
            @media print {
                .footer,
                .print-button-screen {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <h1>Your Invoice number {{ commande.id_c }}</h1>

        <p>nom: {{commande.nomC}}</p>
        <p>Date: {{ commande.date|date('Y-m-d') }}</p>
        <p>Total: {{ commande.total }}\$</p>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                {% for historiqueRecord in historiqueRecords %}
                    <tr>
                        <td>{{ historiqueRecord.product }}</td>
                        <td>{{ historiqueRecord.quantite }}</td>
                        <td>{{ historiqueRecord.prix }}\$</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <!-- Add a Print button for screen -->
        <button class=\"print-button-screen\" onclick=\"window.print()\">Print Invoice</button>
    </body>
    </html>
{% endblock %}", "commande/view_invoice.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\commande\\view_invoice.html.twig");
    }
}
