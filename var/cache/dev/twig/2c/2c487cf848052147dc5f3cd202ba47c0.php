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

/* eventuser/getall.html.twig */
class __TwigTemplate_a8394a0d2885c379b4df8a9d7783b332 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventuser/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventuser/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eventuser/getall.html.twig", 1);
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
       <h1 class=\"text-center mb-4 template-color\">Event List</h1>


        ";
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 25
        echo "        <form id=\"searchForm\" class=\"mb-4 text-center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <input type=\"text\" class=\"form-control\" name=\"search_nom\" placeholder=\"Event name\">
                </div>
            </div>
        </form>

        <div class=\"table-responsive rounded\">
            <table class=\"table table-bordered\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Place</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 48
            echo "                        <tr>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                            <td>
                                <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 54)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 54), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 54)))), "html", null, true);
            echo "\" class=\"img-fluid smaller-image\" alt=\"\">
                            </td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                          <td>
    <div class=\"btn-group\" role=\"group\">
        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_update", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-edit\"></i> 
        </a>
        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this event?')\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-trash-alt\"></i>
        </a>
        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resv_affiche", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-book\"></i> 
        </a>
        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_generate_qr", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">
            <i class=\"fas fa-qrcode\"></i>
        </a>
    </div>
</td>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_add");
        echo "\"class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Add Event
            </a>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            // Listen for input changes in the search fields
            \$('input[name=\"search_nom\"], input[name=\"search_lieu\"]').on('input', function () {
                // Trigger the search function when input changes
                searchEvents();
            });
        });

        function searchEvents() {
            console.log('searchEvents');

            var searchNom = document.querySelector('input[name=\"search_nom\"]').value;
            var searchLieu = document.querySelector('input[name=\"search_lieu\"]').value;

            console.log('Search Nom:', searchNom);
            console.log('Search Lieu:', searchLieu);

            // Perform an AJAX request to get the results
            \$.ajax({
                url: '";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventuser_getall");
        echo "',
                type: 'GET',
                dataType: 'json',
                data: {
                    search_nom: searchNom,
                    search_lieu: searchLieu
                },
                success: function (response) {
                    // Replace the entire HTML content of the table with the updated data
                    updateTableContent(response.events);
                },
                error: function (error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        function updateTableContent(events) {
            // Assuming you have a tbody element with the ID 'eventTableBody'
            var tableBody = \$('#eventTableBody');

            // Clear existing table rows
            tableBody.empty();

            // Iterate over the events and append rows to the table
            for (var i = 0; i < events.length; i++) {
                var event = events[i];

                // Create a table row
                var row = '<tr class=\"table-active\">' +
                    '<td>' + event.nom + '</td>' +
                    '<td>' + event.date + '</td>' +
                    '<td>' + event.lieu + '</td>' +
                    '<td>' + event.description + '</td>' +
                    '<td><img src=\"' + event.image + '\" class=\"custom-block-image img-fluid\" alt=\"\"></td>' +
                    '<td>' + event.prix + '</td>' +
                    '<td>' +
                    '<div class=\"btn-group\" role=\"group\">' +
                    '<a href=\"' + event.editLink + '\" class=\"btn btn-primary\">' +
                    '<i class=\"fas fa-edit\"></i> Edit' +
                    '</a>' +
                    '<a href=\"' + event.deleteLink + '\" class=\"btn btn-danger\" onclick=\"return confirm(\\'Are you sure you want to delete this event?\\')\">' +
                    '<i class=\"fas fa-trash-alt\"></i> Delete' +
                    '</a>' +
                    '<a href=\"' + event.reserveLink + '\" class=\"btn btn-secondary\">' +
                    '<i class=\"fas fa-book\"></i> Book' +
                    '</a>' +
                    '<a href=\"' + event.qrLink + '\" class=\"btn btn-secondary\">' +
                    '<i class=\"fas fa-qrcode\"></i> QR' +
                    '</a>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                // Append the row to the table body
                tableBody.append(row);
            }
        }
    </script>

    <style>
        .smaller-image {
            max-width: 100px; /* Adjust the maximum width as needed */
            max-height: 100px; /* Adjust the maximum height as needed */
            border-radius: 8px; /* Add border-radius for rounded corners */
        }

        .rounded {
            border-radius: 15px; /* Adjust the border radius as needed */
            overflow: hidden; /* Hide any content that overflows the rounded corners */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
        }

        .table thead th {
            text-align: center; /* Center-align text in table header cells */
        }

        .table tbody td {
            vertical-align: middle; /* Align content vertically in table cells */
        }
    .template-color {
        color: #C87A19; /* Replace with your desired color code */
    }


    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "eventuser/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 109,  217 => 82,  210 => 77,  195 => 68,  189 => 65,  183 => 62,  177 => 59,  171 => 56,  166 => 54,  161 => 52,  157 => 51,  153 => 50,  149 => 49,  146 => 48,  142 => 47,  118 => 25,  115 => 23,  106 => 20,  103 => 19,  98 => 18,  95 => 16,  86 => 13,  83 => 12,  78 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div class=\"container mt-5\">
       <h1 class=\"text-center mb-4 template-color\">Event List</h1>


        {# Display success messages #}
        {% for flash_message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ flash_message }}
            </div>
        {% endfor %}

        {# Display error messages #}
        {% for flash_message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ flash_message }}
            </div>
        {% endfor %}

        {# AJAX Search Form #}
        <form id=\"searchForm\" class=\"mb-4 text-center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <input type=\"text\" class=\"form-control\" name=\"search_nom\" placeholder=\"Event name\">
                </div>
            </div>
        </form>

        <div class=\"table-responsive rounded\">
            <table class=\"table table-bordered\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Place</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for event in events %}
                        <tr>
                            <td>{{ event.nom }}</td>
                            <td>{{ event.date }}</td>
                            <td>{{ event.lieu }}</td>
                            <td>{{ event.description }}</td>
                            <td>
                                <img src=\"{{ event.image starts with 'C:\\\\' ? asset('uploads/' ~ event.image|split('\\\\')|last) : asset(event.image) }}\" class=\"img-fluid smaller-image\" alt=\"\">
                            </td>
                            <td>{{ event.prix }}</td>
                          <td>
    <div class=\"btn-group\" role=\"group\">
        <a href=\"{{ path('event_update', {'id': event.id}) }}\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-edit\"></i> 
        </a>
        <a href=\"{{ path('event_delete', {'id': event.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this event?')\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-trash-alt\"></i>
        </a>
        <a href=\"{{ path('resv_affiche', {'id': event.id}) }}\" style=\"margin-right: 10px;\">
            <i class=\"fas fa-book\"></i> 
        </a>
        <a href=\"{{ path('event_generate_qr', {'id': event.id}) }}\">
            <i class=\"fas fa-qrcode\"></i>
        </a>
    </div>
</td>

                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"{{ path('author_add') }}\"class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Add Event
            </a>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            // Listen for input changes in the search fields
            \$('input[name=\"search_nom\"], input[name=\"search_lieu\"]').on('input', function () {
                // Trigger the search function when input changes
                searchEvents();
            });
        });

        function searchEvents() {
            console.log('searchEvents');

            var searchNom = document.querySelector('input[name=\"search_nom\"]').value;
            var searchLieu = document.querySelector('input[name=\"search_lieu\"]').value;

            console.log('Search Nom:', searchNom);
            console.log('Search Lieu:', searchLieu);

            // Perform an AJAX request to get the results
            \$.ajax({
                url: '{{ path('eventuser_getall') }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    search_nom: searchNom,
                    search_lieu: searchLieu
                },
                success: function (response) {
                    // Replace the entire HTML content of the table with the updated data
                    updateTableContent(response.events);
                },
                error: function (error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        function updateTableContent(events) {
            // Assuming you have a tbody element with the ID 'eventTableBody'
            var tableBody = \$('#eventTableBody');

            // Clear existing table rows
            tableBody.empty();

            // Iterate over the events and append rows to the table
            for (var i = 0; i < events.length; i++) {
                var event = events[i];

                // Create a table row
                var row = '<tr class=\"table-active\">' +
                    '<td>' + event.nom + '</td>' +
                    '<td>' + event.date + '</td>' +
                    '<td>' + event.lieu + '</td>' +
                    '<td>' + event.description + '</td>' +
                    '<td><img src=\"' + event.image + '\" class=\"custom-block-image img-fluid\" alt=\"\"></td>' +
                    '<td>' + event.prix + '</td>' +
                    '<td>' +
                    '<div class=\"btn-group\" role=\"group\">' +
                    '<a href=\"' + event.editLink + '\" class=\"btn btn-primary\">' +
                    '<i class=\"fas fa-edit\"></i> Edit' +
                    '</a>' +
                    '<a href=\"' + event.deleteLink + '\" class=\"btn btn-danger\" onclick=\"return confirm(\\'Are you sure you want to delete this event?\\')\">' +
                    '<i class=\"fas fa-trash-alt\"></i> Delete' +
                    '</a>' +
                    '<a href=\"' + event.reserveLink + '\" class=\"btn btn-secondary\">' +
                    '<i class=\"fas fa-book\"></i> Book' +
                    '</a>' +
                    '<a href=\"' + event.qrLink + '\" class=\"btn btn-secondary\">' +
                    '<i class=\"fas fa-qrcode\"></i> QR' +
                    '</a>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                // Append the row to the table body
                tableBody.append(row);
            }
        }
    </script>

    <style>
        .smaller-image {
            max-width: 100px; /* Adjust the maximum width as needed */
            max-height: 100px; /* Adjust the maximum height as needed */
            border-radius: 8px; /* Add border-radius for rounded corners */
        }

        .rounded {
            border-radius: 15px; /* Adjust the border radius as needed */
            overflow: hidden; /* Hide any content that overflows the rounded corners */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
        }

        .table thead th {
            text-align: center; /* Center-align text in table header cells */
        }

        .table tbody td {
            vertical-align: middle; /* Align content vertically in table cells */
        }
    .template-color {
        color: #C87A19; /* Replace with your desired color code */
    }


    </style>
{% endblock %}
", "eventuser/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\eventuser\\getall.html.twig");
    }
}
