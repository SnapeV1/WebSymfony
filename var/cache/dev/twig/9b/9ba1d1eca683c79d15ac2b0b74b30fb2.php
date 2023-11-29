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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/admin.html.twig", 1);
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
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <!-- Display success flash messages as alerts -->
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
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
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_pdf");
        echo "\">Export as PDF</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_xml");
        echo "\">Export as XML</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 30
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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 55
            echo "                <tr>
                    <!-- Cell content -->
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prix", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categ", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "matiere", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 64
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 64))) {
                // line 65
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 65))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 65), "html", null, true);
                echo "\" width=\"200\" height=\"120\">
                        ";
            } else {
                // line 67
                echo "                            No image
                        ";
            }
            // line 69
            echo "                    </td>
                    <td>
                        <!-- Action links -->
                        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_updated_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "idpdts", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">Edit</a>
                        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "idpdts", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>

    <!-- Add product button -->
    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product_admin");
        echo "\">Add product</a>
";
        
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
        return array (  216 => 81,  210 => 77,  200 => 73,  196 => 72,  191 => 69,  187 => 67,  179 => 65,  177 => 64,  172 => 62,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  148 => 55,  144 => 54,  117 => 30,  113 => 29,  109 => 28,  96 => 17,  86 => 13,  83 => 12,  79 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

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
{% endblock %}", "admin/admin.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\admin\\admin.html.twig");
    }
}
