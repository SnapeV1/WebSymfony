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

/* commentaire/getComm.html.twig */
class __TwigTemplate_292ab991f61e6c0b494c3a20e355b86e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/getComm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/getComm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/getComm.html.twig", 1);
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
";
        // line 6
        echo "    ";
        if ( !twig_test_empty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        <h2>Commentaires</h2>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Texte</th>
                    <th>Date</th>
                    <th>Évaluation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 19
                echo "                    <tr>
                        <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>
                            <!-- Bouton Delete sous forme d'icône -->
                            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                            <!-- Bouton Edit sous forme d'icône -->
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "       
    ";
        }
        // line 41
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/getComm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  135 => 39,  130 => 36,  118 => 30,  110 => 25,  104 => 22,  100 => 21,  96 => 20,  93 => 19,  89 => 18,  76 => 7,  73 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{# templates/commentaire/getComm.html.twig #}
{% block body %}
    {{ parent() }}
{# Afficher les commentaires dans un tableau #}
    {% if commentaires is not empty %}
        <h2>Commentaires</h2>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Texte</th>
                    <th>Date</th>
                    <th>Évaluation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for comment in commentaires %}
                    <tr>
                        <td>{{ comment.text }}</td>
                        <td>{{ comment.date|date('Y-m-d H:i:s') }}</td>
                        <td>{{ comment.evaluation }}</td>
                        <td>
                            <!-- Bouton Delete sous forme d'icône -->
                            <a href=\"{{ path('delete_commentaire', {'id': comment.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                            <!-- Bouton Edit sous forme d'icône -->
                            <a href=\"{{ path('edit_commentaire', {'id': comment.id}) }}\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
       
    {% endif %}
    
    {% endblock %}
", "commentaire/getComm.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\commentaire\\getComm.html.twig");
    }
}
