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

/* utilisateur/one.html.twig */
class __TwigTemplate_782df80fd8a45f5f2aad00a8c27a7525 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/one.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/one.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/one.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "


<section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-black\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">


              ";
        // line 20
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("take_photo");
            echo "\">
<img src=\"";
            // line 22
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "pic", [], "any", false, false, false, 22)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "pic", [], "any", false, false, false, 22), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "pic", [], "any", false, false, false, 22))))), "html", null, true);
            echo "\" alt=\"pic\" style=\"width: 80px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">


                </a>
                ";
        }
        // line 27
        echo "
                ";
        // line 28
        if ( !(isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "<img src=\"";
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pic", [], "any", false, false, false, 29)) && is_string($__internal_compile_3 = "C:\\") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pic", [], "any", false, false, false, 29), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "pic", [], "any", false, false, false, 29)))), "html", null, true);
            echo "\" alt=\"pic\" style=\"width: 80px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                 ";
        }
        // line 31
        echo "                
              <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        echo " </h5>
              <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
              ";
        // line 34
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo ">
              <i class=\"fa-solid fa-user-pen fa-lg\" ></i> Update Account 
              </a>
               
               
              
              ";
        }
        // line 42
        echo "              
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Username</h6>
                    <p class=\"text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), "html", null, true);
        echo " </p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Age</h6>
                    <p class=\"text-muted\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "age", [], "any", false, false, false, 55), "html", null, true);
        echo " </p>
                  </div>
                </div>
                
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "html", null, true);
        echo " </p>
                    ";
        // line 64
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 64, $this->source); })())) {
            // line 65
            echo "                    <br>
                    <a href=";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MDPRez_utilisateur");
            echo " ><i class=\"fa-solid fa-key\"></i>Update password ? </a>
                    ";
        }
        // line 68
        echo "                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>CIN</h6>
                    <p class=\"text-muted\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "cin", [], "any", false, false, false, 71), "html", null, true);
        echo " </p>
                    ";
        // line 72
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                     <br> 
               <a href=";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo ">
              <i class=\"fa-sharp fa-solid fa-trash  fa-lg\"></i>Delete your account
              </a>
              ";
        }
        // line 78
        echo "                    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 78,  193 => 74,  190 => 73,  188 => 72,  184 => 71,  179 => 68,  174 => 66,  171 => 65,  169 => 64,  165 => 63,  154 => 55,  147 => 51,  136 => 42,  125 => 35,  123 => 34,  119 => 33,  113 => 32,  110 => 31,  104 => 29,  102 => 28,  99 => 27,  91 => 22,  86 => 21,  84 => 20,  68 => 7,  58 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}



{% block body%}
{{parent()}}


<section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-black\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">


              {% if l%}
              <a href=\"{{ path('take_photo') }}\">
<img src=\"{{ user.pic starts with 'C:\\\\' ? asset('uploads/' ~ user.pic|split('\\\\')|last) : asset('uploads/' ~user.pic) }}\" alt=\"pic\" style=\"width: 80px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">


                </a>
                {% endif %}

                {% if not l %}
<img src=\"{{ user.pic starts with 'C:\\\\' ? asset('uploads/' ~ user.pic|split('\\\\')|last) : asset(user.pic) }}\" alt=\"pic\" style=\"width: 80px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                 {% endif %}
                
              <h5>{{user.nom}} {{user.prenom}} </h5>
              <p>{{user.type}}</p>
              {% if l%}
              <a href={{path('utilisateur_update',{id: user.id})}}>
              <i class=\"fa-solid fa-user-pen fa-lg\" ></i> Update Account 
              </a>
               
               
              
              {% endif %}
              
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Username</h6>
                    <p class=\"text-muted\">{{user.username}} </p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Age</h6>
                    <p class=\"text-muted\">{{user.age}} </p>
                  </div>
                </div>
                
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\">{{user.email}} </p>
                    {% if l%}
                    <br>
                    <a href={{path('MDPRez_utilisateur')}} ><i class=\"fa-solid fa-key\"></i>Update password ? </a>
                    {% endif %}
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>CIN</h6>
                    <p class=\"text-muted\">{{user.cin}} </p>
                    {% if l%}
                     <br> 
               <a href={{path('delete_utilisateur',{id: user.id})}}>
              <i class=\"fa-sharp fa-solid fa-trash  fa-lg\"></i>Delete your account
              </a>
              {% endif %}
                    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



{% endblock %}", "utilisateur/one.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\utilisateur\\one.html.twig");
    }
}
