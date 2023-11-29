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

/* event_admin/updaterev.html.twig */
class __TwigTemplate_42f08e2907a3287b16b1ffec6e5c5fa7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/updaterev.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_admin/updaterev.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "event_admin/updaterev.html.twig", 1);
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

    <div class=\"container\">
        <h1>Modifier une réservation</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 14, $this->source); })()), "cin", [], "any", false, false, false, 14), 'label', ["label" => "CIN"]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), "cin", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 16, $this->source); })()), "cin", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 20, $this->source); })()), "nomU", [], "any", false, false, false, 20), 'label', ["label" => "Nom utilisateur"]);
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), "nomU", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "nomU", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 26, $this->source); })()), "prenomU", [], "any", false, false, false, 26), 'label', ["label" => "Prénom utilisateur"]);
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "prenomU", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), "prenomU", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "event", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), 'label', ["label" => "Nom de l'événement"]);
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 33, $this->source); })()), "event", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), "event", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "event", [], "any", false, false, false, 38), "date", [], "any", false, false, false, 38), 'label', ["label" => "Date de l'événement"]);
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), "event", [], "any", false, false, false, 39), "date", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "event", [], "any", false, false, false, 40), "date", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "event", [], "any", false, false, false, 44), "lieu", [], "any", false, false, false, 44), 'label', ["label" => "Lieu de l'événement"]);
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "event", [], "any", false, false, false, 45), "lieu", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "event", [], "any", false, false, false, 46), "lieu", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "event", [], "any", false, false, false, 50), "prix", [], "any", false, false, false, 50), 'label', ["label" => "Prix de l'événement"]);
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "event", [], "any", false, false, false, 51), "prix", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "event", [], "any", false, false, false, 52), "prix", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>

                ";
        // line 56
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event_admin/updaterev.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 58,  189 => 56,  183 => 52,  179 => 51,  175 => 50,  168 => 46,  164 => 45,  160 => 44,  153 => 40,  149 => 39,  145 => 38,  138 => 34,  134 => 33,  130 => 32,  123 => 28,  119 => 27,  115 => 26,  108 => 22,  104 => 21,  100 => 20,  93 => 16,  89 => 15,  85 => 14,  79 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <h1>Modifier une réservation</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                {{ form_start(f, {'attr': {'novalidate': 'novalidate'}} )}}
                
                <div class=\"form-group\">
                    {{ form_label(f.cin, 'CIN') }}
                    {{ form_widget(f.cin, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.cin, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.nomU, 'Nom utilisateur') }}
                    {{ form_widget(f.nomU, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.nomU, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.prenomU, 'Prénom utilisateur') }}
                    {{ form_widget(f.prenomU, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.prenomU, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.event.nom, 'Nom de l\\'événement') }}
                    {{ form_widget(f.event.nom, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.event.nom, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.event.date, 'Date de l\\'événement') }}
                    {{ form_widget(f.event.date, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.event.date, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.event.lieu, 'Lieu de l\\'événement') }}
                    {{ form_widget(f.event.lieu, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.event.lieu, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(f.event.prix, 'Prix de l\\'événement') }}
                    {{ form_widget(f.event.prix, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_errors(f.event.prix, { 'attr': { 'class': 'text-danger' } }) }}
                </div>

                {# ... Ajoutez d'autres champs du formulaire selon vos besoins ... #}

                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                {{ form_end(f) }}
            </div>
        </div>
    </div>
{% endblock %}
", "event_admin/updaterev.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\event_admin\\updaterev.html.twig");
    }
}
