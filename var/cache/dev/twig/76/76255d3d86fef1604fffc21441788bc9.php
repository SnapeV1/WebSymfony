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
                                <span class=\"quantity-display\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "quantite", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                                <button type=\"button\" class=\"btn btn-link edit-btn\" data-lineorder-id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                                    <i class=\"fas fa-edit\"></i>
                                </button>
                            </td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "prix", [], "any", false, false, false, 27), "html", null, true);
            echo " €</td>
                            <td>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_lineorder", ["id" => twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this line order?')\" title=\"Delete\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class=\"edit-form\" id=\"editForm";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineorder"], "idO", [], "any", false, false, false, 34), "html", null, true);
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
        // line 40
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 45
        echo "  <style>
    #confirmAllOrdersLink {
        color: black; /* Default color */
        cursor: pointer;
        transition: color 0.3s ease; /* Smooth transition effect */
    }

    #confirmAllOrdersLink:hover {
        color:#C87A19; /* Color when the cursor is on the link (gold) */
    }
</style>

<div class=\"mt-5\">
    <h3 class=\"text-center font-weight-light my-4\">
        <span id=\"confirmAllOrdersLink\">Confirm All Orders</span>
    </h3>
</div>


        ";
        // line 65
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_all_orders");
        echo "\" method=\"post\" id=\"confirmAllOrdersForm\" style=\"display: none;\">
           
               <div class=\" text-center mb-3\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 68, $this->source); })()), "nomc", [], "any", false, false, false, 68), 'row');
        echo "
                </div>
                <div  class=\" text-center mb-3\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 71, $this->source); })()), "adresse", [], "any", false, false, false, 71), 'row');
        echo "
                </div>
                <div  class=\" text-center mb-3\">
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 74, $this->source); })()), "numtel", [], "any", false, false, false, 74), 'row');
        echo "
                </div>
                <div  class=\" text-center mb-3\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'row');
        echo "
                </div>
                <div class=\"mt-5 text-center\">
                <button type=\"submit\" class=\"btn btn-primary \">
                    Confirm All Orders
                </button>
                </div>
            </form>

            </div>

    <script>
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
        // line 104
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
</body>

</html>
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
        return array (  216 => 104,  186 => 77,  180 => 74,  174 => 71,  168 => 68,  161 => 65,  140 => 45,  134 => 40,  122 => 34,  114 => 29,  109 => 27,  102 => 23,  98 => 22,  93 => 20,  90 => 19,  86 => 18,  68 => 4,  58 => 3,  35 => 1,);
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
        color:#C87A19; /* Color when the cursor is on the link (gold) */
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
                <div  class=\" text-center mb-3\">
                    {{ form_row(confirmationForm.adresse) }}
                </div>
                <div  class=\" text-center mb-3\">
                    {{ form_row(confirmationForm.numtel) }}
                </div>
                <div  class=\" text-center mb-3\">
                    {{ form_row(confirmationForm.email) }}
                </div>
                <div class=\"mt-5 text-center\">
                <button type=\"submit\" class=\"btn btn-primary \">
                    Confirm All Orders
                </button>
                </div>
            </form>

            </div>

    <script>
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
</body>

</html>
{% endblock %}
", "lineorder/getcart.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\lineorder\\getcart.html.twig");
    }
}
