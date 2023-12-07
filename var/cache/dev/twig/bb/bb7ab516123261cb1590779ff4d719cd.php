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

/* formation/adminFormation.html.twig */
class __TwigTemplate_d7f35fc247b19e26cca5a2929dcb56f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/adminFormation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/adminFormation.html.twig"));

        $this->parent = $this->loadTemplate("connected.html.twig", "formation/adminFormation.html.twig", 1);
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
    <h1 class=\"text-center\">All Trainings</h1>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"text-center\">Title</th>
                <th class=\"text-center\">Category</th>
                <th class=\"text-center\">Price</th>
                <th class=\"text-center\">Discount</th>
                <th class=\"text-center\">Duration</th>
                <th class=\"text-center\">Description</th>
                <th class=\"text-center\">Video</th>
                <th class=\"text-center\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 22
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "remise", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        ";
            // line 30
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["formation"], "video", [], "any", false, false, false, 30))) {
                // line 31
                echo "                            <video controls width=\"150\" height=\"100\">
                               ";
                // line 32
                if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["formation"], "video", [], "any", false, false, false, 32)) && is_string($__internal_compile_1 = "file:/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                    // line 33
                    echo "        ";
                    // line 34
                    echo "        ";
                    $context["filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "video", [], "any", false, false, false, 34), "/"));
                    // line 35
                    echo "        <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 35, $this->source); })()))), "html", null, true);
                    echo "\" type=\"video/mp4\">
    ";
                } else {
                    // line 37
                    echo "        <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["formation"], "video", [], "any", false, false, false, 37))), "html", null, true);
                    echo "\" type=\"video/mp4\">
    ";
                }
                // line 39
                echo "    Your browser does not support the video tag.
                            </video>
                        ";
            } else {
                // line 42
                echo "                            No Video
                        ";
            }
            // line 44
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Edit</a>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
    
    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_formation");
        echo "\" class=\"btn btn-primary\">Add Formation</a>
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_formations_excel");
        echo "\" class=\"btn btn-success\">Export to Excel</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formation/adminFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  177 => 54,  172 => 51,  162 => 47,  158 => 46,  154 => 44,  150 => 42,  145 => 39,  139 => 37,  133 => 35,  130 => 34,  128 => 33,  126 => 32,  123 => 31,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  93 => 22,  89 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'connected.html.twig' %}

{% block body %}
    {{ parent() }}
    <h1 class=\"text-center\">All Trainings</h1>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"text-center\">Title</th>
                <th class=\"text-center\">Category</th>
                <th class=\"text-center\">Price</th>
                <th class=\"text-center\">Discount</th>
                <th class=\"text-center\">Duration</th>
                <th class=\"text-center\">Description</th>
                <th class=\"text-center\">Video</th>
                <th class=\"text-center\">Action</th>
            </tr>
        </thead>
        <tbody>
            {% for formation in formations %}
                <tr>
                    <td class=\"text-center\">{{ formation.titre }}</td>
                    <td class=\"text-center\">{{ formation.categories }}</td>
                    <td class=\"text-center\">{{ formation.prix }}</td>
                    <td class=\"text-center\">{{ formation.remise }}</td>
                    <td class=\"text-center\">{{ formation.duree }}</td>
                    <td class=\"text-center\">{{ formation.description }}</td>
                    <td class=\"text-center\">
                        {% if formation.video is not null %}
                            <video controls width=\"150\" height=\"100\">
                               {% if formation.video starts with 'file:/' %}
        {# Extract filename from the video path #}
        {% set filename = formation.video|split('/')|last %}
        <source src=\"{{ asset('uploads/' ~ filename) }}\" type=\"video/mp4\">
    {% else %}
        <source src=\"{{ asset('uploads/' ~ formation.video) }}\" type=\"video/mp4\">
    {% endif %}
    Your browser does not support the video tag.
                            </video>
                        {% else %}
                            No Video
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('update_formation', { 'id': formation.id }) }}\">Edit</a>
                        <a href=\"{{ path('delete_formation', { 'id': formation.id }) }}\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    
    <a href=\"{{ path('add_formation') }}\" class=\"btn btn-primary\">Add Formation</a>
        <a href=\"{{ path('export_formations_excel') }}\" class=\"btn btn-success\">Export to Excel</a>

{% endblock %}", "formation/adminFormation.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\formation\\adminFormation.html.twig");
    }
}
