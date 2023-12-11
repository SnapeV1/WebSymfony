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
        <!-- Include any necessary meta tags, stylesheets, and other head elements -->
        <title>Your Page Title</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f9fa;
                color: #333;
                margin: 0;
                padding: 0;
            }

            .container {
                margin-top: 50px;
                text-align: center;
            }

            h1 {
                text-align: center;
            }

            p {
                font-size: 18px;
                line-height: 1.5;
            }

            video {
                width: 80%;
                height: 500px;
                border-radius: 15px;
                margin-top: 20px;
            }

            .comment-section {
                margin-top: 30px;
            }

            .comment-table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
            }

            .comment-table th, .comment-table td {
                border: 1px solid #dee2e6;
                padding: 10px;
                text-align: center;
            }

            .add-comment-section {
                margin-top: 30px;
            }

            #comment-form {
                text-align: center;
            }

            #evaluation {
                margin-top: 10px;
            }

            .fb-share-button {
                margin-top: 20px;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>

        <!-- Your HTML body section -->
        <div class=\"container\">
            <h1>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 79, $this->source); })()), "titre", [], "any", false, false, false, 79), "html", null, true);
        echo "</h1>
            <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>

            ";
        // line 82
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 82, $this->source); })()), "video", [], "any", false, false, false, 82))) {
            // line 83
            echo "                <video controls>
                    ";
            // line 84
            if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 84, $this->source); })()), "video", [], "any", false, false, false, 84)) && is_string($__internal_compile_1 = "file:/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                // line 85
                echo "                        ";
                // line 86
                echo "                        ";
                $context["filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 86, $this->source); })()), "video", [], "any", false, false, false, 86), "/"));
                // line 87
                echo "                        <source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 87, $this->source); })()))), "html", null, true);
                echo "\" type=\"video/mp4\">
                    ";
            } else {
                // line 89
                echo "                        <source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 89, $this->source); })()), "video", [], "any", false, false, false, 89))), "html", null, true);
                echo "\" type=\"video/mp4\">
                    ";
            }
            // line 91
            echo "                </video>
            ";
        } else {
            // line 93
            echo "                <p>No Video</p>
            ";
        }
        // line 95
        echo "
            ";
        // line 97
        echo "            ";
        if ( !twig_test_empty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 97, $this->source); })()))) {
            // line 98
            echo "                <h2>Comments</h2>
                <table class=\"comment-table table table-bordered\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>Texte</th>
                            <th>Date</th>
                            <th>Évaluation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 109, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 110
                echo "                            <tr>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 112), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 113), "html", null, true);
                echo "</td>
                                <td class=\"comment-actions\">
                                    <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 115), "idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 118), "idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
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
            // line 124
            echo "                    </tbody>
                </table>
            ";
        } else {
            // line 127
            echo "                <p>No comments yet.</p>
            ";
        }
        // line 129
        echo "
            <div class=\"add-comment-section\">
                <h2>Add a Comment</h2>
                <!-- Your form section -->
                <form id=\"comment-form\" method=\"post\" action=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_commentaire", ["idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-6\">
                            <label for=\"comment_text\">Comment</label>
                            <textarea class=\"form-control\" rows=\"8\" placeholder=\"Type your comment here...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                        </div>

                        <div class=\"col-md-1\">
                            <label for=\"evaluation\">Evaluation</label>
                            <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 144
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                            </select>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Comment</button>
                </form>
            </div>

            <!-- Share Button -->
            <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
            </div>
        </div>

        <!-- Facebook SDK script -->
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    </body>
    </html>

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
        return array (  288 => 146,  277 => 144,  273 => 143,  260 => 133,  254 => 129,  250 => 127,  245 => 124,  233 => 118,  227 => 115,  222 => 113,  218 => 112,  214 => 111,  211 => 110,  207 => 109,  194 => 98,  191 => 97,  188 => 95,  184 => 93,  180 => 91,  174 => 89,  168 => 87,  165 => 86,  163 => 85,  161 => 84,  158 => 83,  156 => 82,  151 => 80,  147 => 79,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Include any necessary meta tags, stylesheets, and other head elements -->
        <title>Your Page Title</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f9fa;
                color: #333;
                margin: 0;
                padding: 0;
            }

            .container {
                margin-top: 50px;
                text-align: center;
            }

            h1 {
                text-align: center;
            }

            p {
                font-size: 18px;
                line-height: 1.5;
            }

            video {
                width: 80%;
                height: 500px;
                border-radius: 15px;
                margin-top: 20px;
            }

            .comment-section {
                margin-top: 30px;
            }

            .comment-table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
            }

            .comment-table th, .comment-table td {
                border: 1px solid #dee2e6;
                padding: 10px;
                text-align: center;
            }

            .add-comment-section {
                margin-top: 30px;
            }

            #comment-form {
                text-align: center;
            }

            #evaluation {
                margin-top: 10px;
            }

            .fb-share-button {
                margin-top: 20px;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>

        <!-- Your HTML body section -->
        <div class=\"container\">
            <h1>{{ formation.titre }}</h1>
            <p>{{ formation.description }}</p>

            {% if formation.video is not null %}
                <video controls>
                    {% if formation.video starts with 'file:/' %}
                        {# Extract filename from the video path #}
                        {% set filename = formation.video|split('/')|last %}
                        <source src=\"{{ asset('uploads/' ~ filename) }}\" type=\"video/mp4\">
                    {% else %}
                        <source src=\"{{ asset('uploads/' ~ formation.video) }}\" type=\"video/mp4\">
                    {% endif %}
                </video>
            {% else %}
                <p>No Video</p>
            {% endif %}

            {# Afficher les commentaires dans un tableau #}
            {% if commentaires is not empty %}
                <h2>Comments</h2>
                <table class=\"comment-table table table-bordered\">
                    <thead class=\"thead-dark\">
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
                                <td class=\"comment-actions\">
                                    <a href=\"{{ path('delete_commentaire', {'id': comment.id, 'idFormation': formation.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <a href=\"{{ path('edit_commentaire', {'id': comment.id, 'idFormation': formation.id}) }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p>No comments yet.</p>
            {% endif %}

            <div class=\"add-comment-section\">
                <h2>Add a Comment</h2>
                <!-- Your form section -->
                <form id=\"comment-form\" method=\"post\" action=\"{{ path('add_commentaire', {'idFormation': formation.id}) }}\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-6\">
                            <label for=\"comment_text\">Comment</label>
                            <textarea class=\"form-control\" rows=\"8\" placeholder=\"Type your comment here...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                        </div>

                        <div class=\"col-md-1\">
                            <label for=\"evaluation\">Evaluation</label>
                            <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                                {% for i in 1..5 %}
                                    <option value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Comment</button>
                </form>
            </div>

            <!-- Share Button -->
            <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
            </div>
        </div>

        <!-- Facebook SDK script -->
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    </body>
    </html>

{% endblock %}
", "commentaire/tabbela.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\commentaire\\tabbela.html.twig");
    }
}
