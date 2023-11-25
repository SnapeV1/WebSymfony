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

/* formation/getall.html.twig */
class __TwigTemplate_7aae5c9167e6fbca6bf9d87762df9646 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/getall.html.twig", 1);
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
                                <source src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, $context["formation"], "video", [], "any", false, false, false, 32))), "html", null, true);
                echo "\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>
                        ";
            } else {
                // line 36
                echo "                            No Video
                        ";
            }
            // line 38
            echo "                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Edit</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    
    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_formation");
        echo "\" class=\"btn btn-primary\">Add Formation</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formation/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  155 => 45,  145 => 41,  141 => 40,  137 => 38,  133 => 36,  126 => 32,  123 => 31,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  93 => 22,  89 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                                <source src=\"{{ asset('videos/' ~ formation.video) }}\" type=\"video/mp4\">
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
{% endblock %}", "formation/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\formation\\getall.html.twig");
    }
}
