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

/* admin/admin.html.twig */
class __TwigTemplate_52d32ca6a810a3de72ad25410648286d extends Template
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
        return "connected.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("connected.html.twig", "admin/admin.html.twig", 1);
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
        echo "    <!-- Include Bootstrap CSS -->
  ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Display success flash messages as alerts -->
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <div class=\"d-flex justify-content-between align-items-center\">
        <h1>All products</h1>

        <!-- Export button -->
        <div class=\"export-button-container\">
            <div class=\"btn-group mt-3\">
                <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Export
                </button>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_pdf");
        echo "\">Export as PDF</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_xml");
        echo "\">Export as XML</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_excel");
        echo "\">Export as Excel</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Table to display products -->
    <table class=\"table\">
        <!-- Table headers -->
        <thead>
            <tr>
                <th>NameProduct</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Material</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows -->
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 52
            echo "                <tr>
                    <!-- Cell content -->
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categ", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "matiere", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 61
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 61))) {
                // line 62
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 62))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "\" width=\"200\" height=\"120\">
                        ";
            } else {
                // line 64
                echo "                            No image
                        ";
            }
            // line 66
            echo "                    </td>
                    <td>
                        <!-- Action links -->
                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_updated_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "idpdts", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Edit</a>
                        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "idpdts", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>

    <!-- Add product button -->
    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product_admin");
        echo "\">Add product</a>

    <!-- Include Bootstrap JavaScript and Popper.js -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  208 => 74,  198 => 70,  194 => 69,  189 => 66,  185 => 64,  177 => 62,  175 => 61,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  146 => 52,  142 => 51,  115 => 27,  111 => 26,  107 => 25,  94 => 14,  84 => 10,  81 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'connected.html.twig' %}

{% block body %}
    <!-- Include Bootstrap CSS -->
  {{parent()}}

    <!-- Display success flash messages as alerts -->
    {% for flashMessage in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            {{ flashMessage }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    <div class=\"d-flex justify-content-between align-items-center\">
        <h1>All products</h1>

        <!-- Export button -->
        <div class=\"export-button-container\">
            <div class=\"btn-group mt-3\">
                <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Export
                </button>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"{{ path('export_pdf') }}\">Export as PDF</a>
                    <a class=\"dropdown-item\" href=\"{{ path('export_xml') }}\">Export as XML</a>
                    <a class=\"dropdown-item\" href=\"{{ path('export_excel') }}\">Export as Excel</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Table to display products -->
    <table class=\"table\">
        <!-- Table headers -->
        <thead>
            <tr>
                <th>NameProduct</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Material</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows -->
            {% for p in list %}
                <tr>
                    <!-- Cell content -->
                    <td>{{ p.nom }}</td>
                    <td>{{ p.prix }}</td>
                    <td>{{ p.qte }}</td>
                    <td>{{ p.categ }}</td>
                    <td>{{ p.matiere }}</td>
                    <td>{{ p.description }}</td>
                    <td>
                        {% if p.image is not null %}
                            <img src=\"{{ asset('pictures/' ~ p.image) }}\" alt=\"{{ p.nom }}\" width=\"200\" height=\"120\">
                        {% else %}
                            No image
                        {% endif %}
                    </td>
                    <td>
                        <!-- Action links -->
                        <a href=\"{{ path('Product_updated_admin', {'id': p.idpdts}) }}\">Edit</a>
                        <a href=\"{{ path('delete_product_admin', {'id': p.idpdts}) }}\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <!-- Add product button -->
    <a href=\"{{ path('add_product_admin') }}\">Add product</a>

    <!-- Include Bootstrap JavaScript and Popper.js -->{% endblock %}
", "admin/admin.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\admin\\admin.html.twig");
    }
}
