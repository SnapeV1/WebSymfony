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

/* commentaire/tabbela.html.twig */
class __TwigTemplate_437c684bc08d5227f212209650c1f205 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/tabbela.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/tabbela.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/tabbela.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
    <iframe width=\"560\" height=\"315\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 6, $this->source); })()), "video", [], "any", false, false, false, 6))), "html", null, true);
        echo "\" type=\"video/mp4\" frameborder=\"0\" allowfullscreen></iframe>

    ";
        // line 9
        echo "    ";
        if ( !twig_test_empty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 9, $this->source); })()))) {
            // line 10
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
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 22
                echo "                    <tr>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                        <td>
                            <!-- Bouton Delete sous forme d'icône -->
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                            <!-- Bouton Edit sous forme d'icône -->
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 33)]), "html", null, true);
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
            // line 39
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 42
            echo "        <p>Aucun commentaire pour le moment.</p>
    ";
        }
        // line 44
        echo "
    <h2>Ajouter un commentaire</h2>
    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group row\">
    <div class=\"col-md-6\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "text", [], "any", false, false, false, 49), 'label');
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "text", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "rows" => 8, "placeholder" => "Saisissez votre commentaire ici..."]]);
        echo "
    </div>

    <div class=\"col-md-1\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "evaluation", [], "any", false, false, false, 54), 'label');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "evaluation", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    </div>
        <button type=\"submit\" class=\"btn btn-primary\">Ajouter un commentaire</button>
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/tabbela.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  177 => 55,  173 => 54,  166 => 50,  162 => 49,  156 => 46,  152 => 44,  148 => 42,  143 => 39,  131 => 33,  123 => 28,  117 => 25,  113 => 24,  109 => 23,  106 => 22,  102 => 21,  89 => 10,  86 => 9,  81 => 6,  77 => 5,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ parent() }}
    <h1>{{ formation.titre }}</h1>
    <p>{{ formation.description }}</p>
    <iframe width=\"560\" height=\"315\" src=\"{{ asset('videos/' ~ formation.video) }}\" type=\"video/mp4\" frameborder=\"0\" allowfullscreen></iframe>

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
        <p>Aucun commentaire pour le moment.</p>
    {% endif %}

    <h2>Ajouter un commentaire</h2>
    {{ form_start(f) }}
    <div class=\"form-group row\">
    <div class=\"col-md-6\">
        {{ form_label(f.text) }}
        {{ form_widget(f.text, {'attr': {'class': 'form-control', 'rows': 8, 'placeholder': 'Saisissez votre commentaire ici...'}}) }}
    </div>

    <div class=\"col-md-1\">
        {{ form_label(f.evaluation) }}
        {{ form_widget(f.evaluation, {'attr': {'class': 'form-control'}}) }}
    </div>
    </div>
        <button type=\"submit\" class=\"btn btn-primary\">Ajouter un commentaire</button>
    {{ form_end(f) }}

    
{% endblock %}
", "commentaire/tabbela.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\commentaire\\tabbela.html.twig");
    }
}
