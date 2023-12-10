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

/* utilisateur/login.html.twig */
class __TwigTemplate_e59c030e2371b21ee029b3dd9246d6bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/login.html.twig", 1);
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
        echo "
<div id=\"layoutAuthentication\" style=\"background-color: #f8f9fa; background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("your-background-image.jpg"), "html", null, true);
        echo "'); background-size: cover;\">
    <div id=\"layoutAuthentication_content\">
        <main>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <!-- Card for the entire content -->
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-body\">
                                <!-- Apply color-changing animation to the \"Login\" header -->
                                <div class=\"card-header text-center\" style=\"background-color: rgba(255, 255, 255, 0.8);\">
                                    <h3 class=\"text-center font-weight-light my-4\" style=\"font-family: 'Your Custom Font', sans-serif; animation: rainbowText 5s infinite;\">Login</h3>
                                </div>

                                <div class=\"row\">
                                    <!-- Column for the image on the left -->
                                    <div class=\"col-lg-6\">
                                        <!-- Increasing the top margin of the image -->
                                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/EcoArt.png"), "html", null, true);
        echo "\" alt=\"Your Image\" class=\"img-fluid\">
                                    </div>
                                    <!-- Column for the form on the right -->
                                    <div class=\"col-lg-6\">
                                    <br>
                                    <br>
                                    <br>
                                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'widget');
        echo "
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "username", [], "any", false, false, false, 32), 'errors');
        echo "
                                        <br>
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'widget');
        echo "
                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'errors');
        echo "
                                        <br>
                                        <div class=\"text-center\">
                                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "Login", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                                        </div>
                                        <div class=\"text-center mt-3\">
                                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passwordForgot_utilisateur");
        echo "\">Forgot Password?</a>
                                            <br>
                                            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emailConnection_utilisateur");
        echo "\">Connect with your Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer text-center py-3\">
                                <div class=\"small\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_utilisateur");
        echo "\">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    @keyframes rainbowText {
        0% { color: #000000; } /* Red */
        0% { color: #ff9900; } /* Orange */
      
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  136 => 43,  131 => 41,  125 => 38,  119 => 35,  115 => 34,  110 => 32,  106 => 31,  102 => 30,  92 => 23,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div id=\"layoutAuthentication\" style=\"background-color: #f8f9fa; background-image: url('{{ asset('your-background-image.jpg') }}'); background-size: cover;\">
    <div id=\"layoutAuthentication_content\">
        <main>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <!-- Card for the entire content -->
                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                            <div class=\"card-body\">
                                <!-- Apply color-changing animation to the \"Login\" header -->
                                <div class=\"card-header text-center\" style=\"background-color: rgba(255, 255, 255, 0.8);\">
                                    <h3 class=\"text-center font-weight-light my-4\" style=\"font-family: 'Your Custom Font', sans-serif; animation: rainbowText 5s infinite;\">Login</h3>
                                </div>

                                <div class=\"row\">
                                    <!-- Column for the image on the left -->
                                    <div class=\"col-lg-6\">
                                        <!-- Increasing the top margin of the image -->
                                        <img src=\"{{ asset('uploads/EcoArt.png') }}\" alt=\"Your Image\" class=\"img-fluid\">
                                    </div>
                                    <!-- Column for the form on the right -->
                                    <div class=\"col-lg-6\">
                                    <br>
                                    <br>
                                    <br>
                                        {{form_start(f)}}
                                        {{form_widget(f.username)}}
                                        {{form_errors(f.username)}}
                                        <br>
                                        {{form_widget(f.password)}}
                                        {{form_errors(f.password)}}
                                        <br>
                                        <div class=\"text-center\">
                                            {{form_widget(f.Login, {'attr': {'class': 'btn btn-primary'}})}}
                                        </div>
                                        <div class=\"text-center mt-3\">
                                            <a href=\"{{ path('passwordForgot_utilisateur') }}\">Forgot Password?</a>
                                            <br>
                                            <a href=\"{{ path('emailConnection_utilisateur') }}\">Connect with your Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-footer text-center py-3\">
                                <div class=\"small\"><a href=\"{{ path('add_utilisateur') }}\">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<style>
    @keyframes rainbowText {
        0% { color: #000000; } /* Red */
        0% { color: #ff9900; } /* Orange */
      
    }
</style>

{% endblock %}
", "utilisateur/login.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\utilisateur\\login.html.twig");
    }
}
