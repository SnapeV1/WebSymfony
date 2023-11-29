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

/* lineorder/getcart.html.twig */
class __TwigTemplate_220a64f3fbd875248a39fabf816294d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lineorder/getcart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lineorder/getcart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lineorder/getcart.html.twig", 1);
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
";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"container mt-5\">
    <h2 class=\"mb-4\">All Line Orders</h2>
   
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineorders"]) || array_key_exists("lineorders", $context) ? $context["lineorders"] : (function () { throw new RuntimeError('Variable "lineorders" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lineorder"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "productname", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>
                            <span class=\"quantity-display\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "quantite", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                            <button type=\"button\" class=\"btn btn-link edit-btn\" data-lineorder-id=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                <i class=\"fas fa-edit\"></i>
                            </button>
                        </td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo " €</td>
                        <td>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_lineorder", ["id" => twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this line order?')\" title=\"Delete\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class=\"edit-form\" id=\"editForm";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 37), "html", null, true);
            echo "\" style=\"display: none;\">
                        <td colspan=\"4\">
                            <div class=\"edit-form-content\"></div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineorder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>


    ";
        // line 49
        echo "    <style>
        #confirmAllOrdersLink {
            color: black; /* Default color */
            cursor: pointer;
            transition: color 0.3s ease; /* Smooth transition effect */
        }

        #confirmAllOrdersLink:hover {
            color: #C87A19; /* Color when the cursor is on the link (gold) */
        }
    </style>

    <div class=\"mt-5\">
        <h3 class=\"text-center font-weight-light my-4\">
            <span id=\"confirmAllOrdersLink\">Confirm All Orders</span>
        </h3>
    </div>

    ";
        // line 68
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_all_orders");
        echo "\" method=\"post\" id=\"confirmAllOrdersForm\" style=\"display: none;\">
        <div class=\" text-center mb-3\">
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 70, $this->source); })()), "nomc", [], "any", false, false, false, 70), 'row');
        echo "
        </div>
        <div class=\" text-center mb-3\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 73, $this->source); })()), "adresse", [], "any", false, false, false, 73), 'row');
        echo "
        </div>
        <div class=\" text-center mb-3\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 76, $this->source); })()), "numtel", [], "any", false, false, false, 76), 'row');
        echo "
        </div>
        <div class=\" text-center mb-3\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'row');
        echo "
        </div>
        <div class=\"mt-5 text-center\">
            <button type=\"submit\" class=\"btn btn-primary \">
                Confirm All Orders
            </button>
        </div>
    </form>

    <script>
        // Use your desired initial coordinates
        var initialCoordinates = [36.9003, 10.1959];
        var initialZoom = 14;

        // Initialize the map
        var map = L.map('map').setView(initialCoordinates, initialZoom);

        // Add the OpenStreetMap layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
        }).addTo(map);

        \$(document).ready(function () {
            // Toggle the visibility of the edit form when the \"Edit\" button is clicked
            \$('.edit-btn').click(function () {
                var lineOrderId = \$(this).data('lineorder-id');
                var editForm = \$('#editForm' + lineOrderId + ' .edit-form-content');

                // Hide other edit forms
                \$('.edit-form').not('#editForm' + lineOrderId).hide();

                // Toggle the visibility of the current edit form
                \$('#editForm' + lineOrderId).toggle();

                // Fetch the content of the edit form via AJAX
                if (\$('#editForm' + lineOrderId).is(':visible')) {
                    \$.ajax({
                        url: '";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_lineorder", ["id" => "__id__"]);
        echo "'.replace('__id__', lineOrderId),
                        type: 'POST',
                        success: function (response) {
                            // Populate the edit form content
                            editForm.html(response);
                        },

                        error: function (error) {
                            console.log('Error:', error);
                            // Handle errors if needed
                        }
                    });
                }
            });

            // Show the confirmation form when the link is clicked
            \$('#confirmAllOrdersLink').click(function (event) {
                event.preventDefault();
                \$('#confirmAllOrdersForm').show();
            });
        });
    </script>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lineorder/getcart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 116,  189 => 79,  183 => 76,  177 => 73,  171 => 70,  165 => 68,  145 => 49,  138 => 43,  126 => 37,  118 => 32,  113 => 30,  106 => 26,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{{ parent() }}

<div class=\"container mt-5\">
    <h2 class=\"mb-4\">All Line Orders</h2>
   
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for lineorder in lineorders %}
                    <tr>
                        <td>{{ lineorder.productname }}</td>
                        <td>
                            <span class=\"quantity-display\">{{ lineorder.quantite }}</span>
                            <button type=\"button\" class=\"btn btn-link edit-btn\" data-lineorder-id=\"{{ lineorder.idO }}\">
                                <i class=\"fas fa-edit\"></i>
                            </button>
                        </td>
                        <td>{{ lineorder.prix }} €</td>
                        <td>
                            <a href=\"{{ path('delete_lineorder', {'id': lineorder.idO}) }}\" onclick=\"return confirm('Are you sure you want to delete this line order?')\" title=\"Delete\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class=\"edit-form\" id=\"editForm{{ lineorder.idO }}\" style=\"display: none;\">
                        <td colspan=\"4\">
                            <div class=\"edit-form-content\"></div>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>


    {# Confirm All Orders Link #}
    <style>
        #confirmAllOrdersLink {
            color: black; /* Default color */
            cursor: pointer;
            transition: color 0.3s ease; /* Smooth transition effect */
        }

        #confirmAllOrdersLink:hover {
            color: #C87A19; /* Color when the cursor is on the link (gold) */
        }
    </style>

    <div class=\"mt-5\">
        <h3 class=\"text-center font-weight-light my-4\">
            <span id=\"confirmAllOrdersLink\">Confirm All Orders</span>
        </h3>
    </div>

    {# Confirm All Orders Form #}
    <form action=\"{{ path('confirm_all_orders') }}\" method=\"post\" id=\"confirmAllOrdersForm\" style=\"display: none;\">
        <div class=\" text-center mb-3\">
            {{ form_row(confirmationForm.nomc) }}
        </div>
        <div class=\" text-center mb-3\">
            {{ form_row(confirmationForm.adresse) }}
        </div>
        <div class=\" text-center mb-3\">
            {{ form_row(confirmationForm.numtel) }}
        </div>
        <div class=\" text-center mb-3\">
            {{ form_row(confirmationForm.email) }}
        </div>
        <div class=\"mt-5 text-center\">
            <button type=\"submit\" class=\"btn btn-primary \">
                Confirm All Orders
            </button>
        </div>
    </form>

    <script>
        // Use your desired initial coordinates
        var initialCoordinates = [36.9003, 10.1959];
        var initialZoom = 14;

        // Initialize the map
        var map = L.map('map').setView(initialCoordinates, initialZoom);

        // Add the OpenStreetMap layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
        }).addTo(map);

        \$(document).ready(function () {
            // Toggle the visibility of the edit form when the \"Edit\" button is clicked
            \$('.edit-btn').click(function () {
                var lineOrderId = \$(this).data('lineorder-id');
                var editForm = \$('#editForm' + lineOrderId + ' .edit-form-content');

                // Hide other edit forms
                \$('.edit-form').not('#editForm' + lineOrderId).hide();

                // Toggle the visibility of the current edit form
                \$('#editForm' + lineOrderId).toggle();

                // Fetch the content of the edit form via AJAX
                if (\$('#editForm' + lineOrderId).is(':visible')) {
                    \$.ajax({
                        url: '{{ path(\"edit_lineorder\", {'id': '__id__'}) }}'.replace('__id__', lineOrderId),
                        type: 'POST',
                        success: function (response) {
                            // Populate the edit form content
                            editForm.html(response);
                        },

                        error: function (error) {
                            console.log('Error:', error);
                            // Handle errors if needed
                        }
                    });
                }
            });

            // Show the confirmation form when the link is clicked
            \$('#confirmAllOrdersLink').click(function (event) {
                event.preventDefault();
                \$('#confirmAllOrdersForm').show();
            });
        });
    </script>
</div>

{% endblock %}
", "lineorder/getcart.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\lineorder\\getcart.html.twig");
    }
}
