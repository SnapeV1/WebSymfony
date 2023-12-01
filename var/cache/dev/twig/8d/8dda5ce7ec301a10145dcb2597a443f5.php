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

/* utilisateur/adminProfil.html.twig */
class __TwigTemplate_e8daa967d29b93be4370304509994a30 extends Template
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
        return "connected.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/adminProfil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/adminProfil.html.twig"));

        $this->parent = $this->loadTemplate("connected.html.twig", "utilisateur/adminProfil.html.twig", 2);
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
        // line 19
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("take_photo");
            echo "\">
              <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "pic", [], "any", false, false, false, 21)), "html", null, true);
            echo "\"
                alt=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), "html", null, true);
            echo " class=\"img-fluid my-5\" style=\"width: 120px;\" />

                </a>
                ";
        }
        // line 26
        echo "
                ";
        // line 27
        if ( !(isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "pic", [], "any", false, false, false, 28)), "html", null, true);
            echo "\"alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), "html", null, true);
            echo " class=\"img-fluid my-5\" style=\"width: 80px;\" />
                 ";
        }
        // line 30
        echo "                
              <h5>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), "html", null, true);
        echo " </h5>
              <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
              ";
        // line 33
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo ">
              <i class=\"fa-solid fa-user-pen fa-lg\" ></i> Update Account 
              </a>
               
               
              
              ";
        }
        // line 41
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
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true);
        echo " </p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Age</h6>
                    <p class=\"text-muted\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "age", [], "any", false, false, false, 54), "html", null, true);
        echo " </p>
                  </div>
                </div>
                
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), "html", null, true);
        echo " </p>
                    ";
        // line 63
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "                    <br>
                    <a href=";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MDPRez_utilisateur");
            echo " ><i class=\"fa-solid fa-key\"></i>Update password ? </a>
                    ";
        }
        // line 67
        echo "                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>CIN</h6>
                    <p class=\"text-muted\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "cin", [], "any", false, false, false, 70), "html", null, true);
        echo " </p>
                    ";
        // line 71
        if ((isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 71, $this->source); })())) {
            // line 72
            echo "                     <br> 
               <a href=";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo ">
              <i class=\"fa-sharp fa-solid fa-trash  fa-lg\"></i>Delete your account
              </a>
              ";
        }
        // line 77
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
        return "utilisateur/adminProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 77,  196 => 73,  193 => 72,  191 => 71,  187 => 70,  182 => 67,  177 => 65,  174 => 64,  172 => 63,  168 => 62,  157 => 54,  150 => 50,  139 => 41,  128 => 34,  126 => 33,  122 => 32,  116 => 31,  113 => 30,  105 => 28,  103 => 27,  100 => 26,  93 => 22,  89 => 21,  84 => 20,  82 => 19,  68 => 7,  58 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'connected.html.twig' %}



{% block body%}


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
              <img src=\"{{asset(user.pic)}}\"
                alt={{user.username}} class=\"img-fluid my-5\" style=\"width: 120px;\" />

                </a>
                {% endif %}

                {% if not l %}
                <img src=\"{{asset(user.pic)}}\"alt={{user.username}} class=\"img-fluid my-5\" style=\"width: 80px;\" />
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



{% endblock %}", "utilisateur/adminProfil.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\utilisateur\\adminProfil.html.twig");
    }
}
