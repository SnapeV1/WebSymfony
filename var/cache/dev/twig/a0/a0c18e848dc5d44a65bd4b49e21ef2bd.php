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

/* training/NoInscription.html.twig */
class __TwigTemplate_3c7d47567e501a9bf7bca4ddf648424e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/NoInscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/NoInscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "training/NoInscription.html.twig", 1);
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

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</title>
        <!-- Add your additional meta tags, stylesheets, and other head elements here -->
        <style>
        
        @keyframes shake-horizontal {
  0%,
  100% {
    transform: translateX(0);
  }
  10%,
  30%,
  50%,
  70% {
    transform: translateX(-10px);
  }
  20%,
  40%,
  60% {
    transform: translateX(10px);
  }
  80% {
    transform: translateX(8px);
  }
  90% {
    transform: translateX(-8px);
  }
}
   .bookBtn a{
                animation: shake-horizontal 1.1s cubic-bezier(0.455, 0.030, 0.515, 0.955) 2 both;
               display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                padding: 12px 24px;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                color: #fff;
                transition: background-color 0.3s ease;
            }

            .bookBtn a:hover {
                background-color: #45a049;
              
            }
            .container {
                margin-top: 50px;
            }

            h1 {
                color: #333;
            }

            p {
                font-size: 18px;
                line-height: 1.5;
            }

            .video-container {
                border-radius: 25px;
                overflow: hidden;
                position: relative;
                margin-top: 20px;
            }
            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(0, 0, 0, 0.4);
            }

            .overlay p {
                color: white;
                font-size: 18px;
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>

        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-md-8 mx-auto\">
                    <h1>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 105, $this->source); })()), "titre", [], "any", false, false, false, 105), "html", null, true);
        echo "</h1>
                    <p>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>

                    ";
        // line 108
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 108, $this->source); })()), "video", [], "any", false, false, false, 108))) {
            // line 109
            echo "                        <div style=\"border-radius: 25px; overflow: hidden; position: relative;\">
                            <video width=\"100%\" height=\"350\" muted>
                                ";
            // line 111
            $context["videoPath"] = (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 111, $this->source); })()), "video", [], "any", false, false, false, 111)) && is_string($__internal_compile_1 = "file:/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 111, $this->source); })()), "video", [], "any", false, false, false, 111), "/"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 111, $this->source); })()), "video", [], "any", false, false, false, 111)))));
            // line 112
            echo "                                <source src=\"";
            echo twig_escape_filter($this->env, (isset($context["videoPath"]) || array_key_exists("videoPath", $context) ? $context["videoPath"] : (function () { throw new RuntimeError('Variable "videoPath" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>
                            <div style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4);\">
                                <p style=\"color: white; font-size: 18px; font-weight: bold;\">Inscription Required</p>
                            </div>
                        </div>
                    ";
        } else {
            // line 120
            echo "                        <div class=\"card-img-top text-center pt-4\">
                            No Video
                        </div>
                    ";
        }
        // line 124
        echo "                            <div style=\"display: flex; align-items: center; justify-content: center; height: 10vh;\">

                    <div class=\"bookBtn\">
                 <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_training", ["idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" class=\"btn btn-primary\" >Book ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 127, $this->source); })()), "prix", [], "any", false, false, false, 127), "html", null, true);
        echo "\$</a>
                                

</div>
</div>
                </div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-md-8 mx-auto\">
                    ";
        // line 137
        if ( !twig_test_empty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 137, $this->source); })()))) {
            // line 138
            echo "                        <h2>Commentaires</h2>
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
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 149, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 150
                echo "                                    <tr>
                                        <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
                                        <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 152), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 153), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("NO_delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 155), "idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                                <i class=\"fas fa-trash\"></i>
                                            </a>
                                            <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("NO_edit_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 158), "idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
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
            // line 164
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 167
            echo "                        <p>No comments.</p>
                    ";
        }
        // line 169
        echo "                </div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-md-8 mx-auto\">
                    <h2>Add a comment</h2>
                    <form id=\"comment-form\" method=\"post\" action=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkTraining", ["idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        echo "\">
                        <div class=\"form-group row\">
                            <div class=\"col-md-6\">
                                <label for=\"comment_text\">Comment</label>
                                <textarea class=\"form-control\" rows=\"8\" placeholder=\"Saisissez votre commentaire ici...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                            </div>

                            <div class=\"col-md-1\">
                                <label for=\"evaluation\">Evaluation</label>
                                
                                <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                                    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 187
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                </select>
                                 <div class=\"container mt-5\">
            <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
            </div>
        </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Comment</button>
                    </form>
                    
                </div>
            </div>

        </div>

        <!-- Facebook SDK script -->
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

        <!-- Facebook Share Button -->
       

        <!-- Your additional scripts or inline scripts here -->

    </body>
    </html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "training/NoInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 189,  319 => 187,  315 => 186,  301 => 175,  293 => 169,  289 => 167,  284 => 164,  272 => 158,  266 => 155,  261 => 153,  257 => 152,  253 => 151,  250 => 150,  246 => 149,  233 => 138,  231 => 137,  216 => 127,  211 => 124,  205 => 120,  193 => 112,  191 => 111,  187 => 109,  185 => 108,  180 => 106,  176 => 105,  80 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{{ formation.titre }}</title>
        <!-- Add your additional meta tags, stylesheets, and other head elements here -->
        <style>
        
        @keyframes shake-horizontal {
  0%,
  100% {
    transform: translateX(0);
  }
  10%,
  30%,
  50%,
  70% {
    transform: translateX(-10px);
  }
  20%,
  40%,
  60% {
    transform: translateX(10px);
  }
  80% {
    transform: translateX(8px);
  }
  90% {
    transform: translateX(-8px);
  }
}
   .bookBtn a{
                animation: shake-horizontal 1.1s cubic-bezier(0.455, 0.030, 0.515, 0.955) 2 both;
               display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 10px;
                padding: 12px 24px;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                color: #fff;
                transition: background-color 0.3s ease;
            }

            .bookBtn a:hover {
                background-color: #45a049;
              
            }
            .container {
                margin-top: 50px;
            }

            h1 {
                color: #333;
            }

            p {
                font-size: 18px;
                line-height: 1.5;
            }

            .video-container {
                border-radius: 25px;
                overflow: hidden;
                position: relative;
                margin-top: 20px;
            }
            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(0, 0, 0, 0.4);
            }

            .overlay p {
                color: white;
                font-size: 18px;
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>

        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-md-8 mx-auto\">
                    <h1>{{ formation.titre }}</h1>
                    <p>{{ formation.description }}</p>

                    {% if formation.video is not null %}
                        <div style=\"border-radius: 25px; overflow: hidden; position: relative;\">
                            <video width=\"100%\" height=\"350\" muted>
                                {% set videoPath = formation.video starts with 'file:/' ? asset('uploads/' ~ formation.video|split('/')|last) : asset('uploads/' ~ formation.video) %}
                                <source src=\"{{ videoPath }}\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>
                            <div style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4);\">
                                <p style=\"color: white; font-size: 18px; font-weight: bold;\">Inscription Required</p>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"card-img-top text-center pt-4\">
                            No Video
                        </div>
                    {% endif %}
                            <div style=\"display: flex; align-items: center; justify-content: center; height: 10vh;\">

                    <div class=\"bookBtn\">
                 <a href=\"{{ path('book_training', {'idFormation': formation.id}) }}\" class=\"btn btn-primary\" >Book {{ formation.prix }}\$</a>
                                

</div>
</div>
                </div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-md-8 mx-auto\">
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
                                            <a href=\"{{ path('NO_delete_commentaire', {'id': comment.id, 'idFormation': formation.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                                <i class=\"fas fa-trash\"></i>
                                            </a>
                                            <a href=\"{{ path('NO_edit_commentaire', {'id': comment.id, 'idFormation': formation.id}) }}\" class=\"btn btn-primary btn-sm\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% else %}
                        <p>No comments.</p>
                    {% endif %}
                </div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-md-8 mx-auto\">
                    <h2>Add a comment</h2>
                    <form id=\"comment-form\" method=\"post\" action=\"{{ path('checkTraining', {'idFormation': formation.id}) }}\">
                        <div class=\"form-group row\">
                            <div class=\"col-md-6\">
                                <label for=\"comment_text\">Comment</label>
                                <textarea class=\"form-control\" rows=\"8\" placeholder=\"Saisissez votre commentaire ici...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                            </div>

                            <div class=\"col-md-1\">
                                <label for=\"evaluation\">Evaluation</label>
                                
                                <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                                    {% for i in 1..5 %}
                                        <option value=\"{{ i }}\">{{ i }}</option>
                                    {% endfor %}
                                </select>
                                 <div class=\"container mt-5\">
            <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
            </div>
        </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Comment</button>
                    </form>
                    
                </div>
            </div>

        </div>

        <!-- Facebook SDK script -->
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

        <!-- Facebook Share Button -->
       

        <!-- Your additional scripts or inline scripts here -->

    </body>
    </html>
{% endblock %}
", "training/NoInscription.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\training\\NoInscription.html.twig");
    }
}
