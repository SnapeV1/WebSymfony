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
        echo "    ";
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineorders"]) || array_key_exists("lineorders", $context) ? $context["lineorders"] : (function () { throw new RuntimeError('Variable "lineorders" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lineorder"]) {
            // line 19
            echo "                        <tr>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "productname", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                            <td>
                                <form action=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_lineorder", ["id" => twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" method=\"post\">
                                    <input type=\"number\" name=\"quantity\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "quantite", [], "any", false, false, false, 23), "html", null, true);
            echo "\" min=\"1\">
                                    <button type=\"submit\" class=\"btn btn-link\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                                        <i class=\"fas fa-edit\"></i>
                                    </button>
                                </form>
                            </td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "prix", [], "any", false, false, false, 29), "html", null, true);
            echo " €</td>
                            <td>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_lineorder", ["id" => twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this line order?')\" title=\"Delete\" data-toggle=\"tooltip\" data-placement=\"top\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineorder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 42
        echo "        <div class=\"mt-5\">
            <h2 class=\"mb-4\">Confirm All Orders</h2>
            <form action=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_all_orders");
        echo "\" method=\"post\" id=\"confirmAllOrdersForm\" style=\"display: none;\">
                <div class=\"mb-3\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 46, $this->source); })()), "nomc", [], "any", false, false, false, 46), 'row');
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 49, $this->source); })()), "adresse", [], "any", false, false, false, 49), 'row');
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 52, $this->source); })()), "numtel", [], "any", false, false, false, 52), 'row');
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'row');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    Confirm All Orders
                </button>
            </form>

            <button type=\"button\" class=\"btn btn-primary mt-3\" id=\"showConfirmFormBtn\">
                Show Confirm Form
            </button>
        </div>

        <script>
            \$(document).ready(function() {
                // Show the confirmation form when the button is clicked
                \$('#showConfirmFormBtn').click(function() {
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
        return array (  161 => 55,  155 => 52,  149 => 49,  143 => 46,  138 => 44,  134 => 42,  128 => 37,  116 => 31,  111 => 29,  102 => 23,  98 => 22,  93 => 20,  90 => 19,  86 => 18,  68 => 4,  58 => 3,  35 => 1,);
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
                                <form action=\"{{ path('edit_lineorder', {'id': lineorder.idO}) }}\" method=\"post\">
                                    <input type=\"number\" name=\"quantity\" value=\"{{ lineorder.quantite }}\" min=\"1\">
                                    <button type=\"submit\" class=\"btn btn-link\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                                        <i class=\"fas fa-edit\"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ lineorder.prix }} €</td>
                            <td>
                                <a href=\"{{ path('delete_lineorder', {'id': lineorder.idO}) }}\" onclick=\"return confirm('Are you sure you want to delete this line order?')\" title=\"Delete\" data-toggle=\"tooltip\" data-placement=\"top\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        {# Confirm All Orders Form #}
        <div class=\"mt-5\">
            <h2 class=\"mb-4\">Confirm All Orders</h2>
            <form action=\"{{ path('confirm_all_orders') }}\" method=\"post\" id=\"confirmAllOrdersForm\" style=\"display: none;\">
                <div class=\"mb-3\">
                    {{ form_row(confirmationForm.nomc) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(confirmationForm.adresse) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(confirmationForm.numtel) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(confirmationForm.email) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    Confirm All Orders
                </button>
            </form>

            <button type=\"button\" class=\"btn btn-primary mt-3\" id=\"showConfirmFormBtn\">
                Show Confirm Form
            </button>
        </div>

        <script>
            \$(document).ready(function() {
                // Show the confirmation form when the button is clicked
                \$('#showConfirmFormBtn').click(function() {
                    \$('#confirmAllOrdersForm').show();
                });
            });
        </script>
    </div>
{% endblock %}
", "lineorder/getcart.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\lineorder\\getcart.html.twig");
    }
}
