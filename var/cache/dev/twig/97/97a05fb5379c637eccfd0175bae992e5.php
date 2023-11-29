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
    <!-- Your HTML head section -->
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Include any necessary meta tags, stylesheets, and other head elements -->
        <title>Your Page Title</title>
    </head>
    <body>

        <!-- Your HTML body section -->
        <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
        <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>

        ";
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 18, $this->source); })()), "video", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <video controls width=\"560\" height=\"315\">
                <source src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 20, $this->source); })()), "video", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
        ";
        } else {
            // line 24
            echo "            No Video
        ";
        }
        // line 26
        echo "
        ";
        // line 28
        echo "        ";
        if ( !twig_test_empty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "            <h2>Commentaires</h2>
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 41
                echo "                        <tr>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 43), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                            <td>
                                <!-- Bouton Delete sous forme d'icône -->
                                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this comment?');\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>

                                <!-- Bouton Edit sous forme d'icône -->
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_commentaire", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 52)]), "html", null, true);
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
            // line 58
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 61
            echo "            <p>Aucun commentaire pour le moment.</p>
        ";
        }
        // line 63
        echo "
        <h2>Ajouter un commentaire</h2>
        <!-- Your form section -->
        <form id=\"comment-form\" method=\"post\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_commentaire", ["idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\">
            <div class=\"form-group row\">
                <div class=\"col-md-6\">
                    <label for=\"comment_text\">Comment</label>
                    <textarea class=\"form-control\" rows=\"8\" placeholder=\"Saisissez votre commentaire ici...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                </div>

                <div class=\"col-md-1\">
                    <label for=\"evaluation\">Evaluation</label>
                    <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                        <option value=\"4\">4</option>
                        <option value=\"5\">5</option>
                    </select>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter un commentaire</button>
        </form>
        <!-- Facebook SDK script -->
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Facebook Share Button -->
    <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
        <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
    </div>


        <!-- Your script section -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var commentForm = document.getElementById('comment-form');
                var badWordCount = 0;

                commentForm.addEventListener('submit', function (event) {
                    var commentText = commentForm.querySelector('#comment_text').value;
                    var badWords = ['badword1', 'badword2', 'badword3'];

                    // Check for bad words
                    if (containsBadWords(commentText, badWords)) {
                        badWordCount++;

                        // Redirect if badWordCount is 3 or more
                        if (badWordCount >= 3) {
                            window.location.href = \"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire");
        echo "\";
                        }

                        alert('The comment contains inappropriate words. Please remove them.');
                        event.preventDefault(); // Prevent form submission
                    }
                });

                function containsBadWords(text, badWords) {
                    var lowerCaseText = text.toLowerCase();
                    for (var i = 0; i < badWords.length; i++) {
                        if (lowerCaseText.includes(badWords[i].toLowerCase())) {
                            return true;
                        }
                    }
                    return false;
                }
            });
        </script>

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
        return array (  230 => 111,  182 => 66,  177 => 63,  173 => 61,  168 => 58,  156 => 52,  148 => 47,  142 => 44,  138 => 43,  134 => 42,  131 => 41,  127 => 40,  114 => 29,  111 => 28,  108 => 26,  104 => 24,  97 => 20,  94 => 19,  92 => 18,  87 => 16,  83 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <!-- Your HTML head section -->
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Include any necessary meta tags, stylesheets, and other head elements -->
        <title>Your Page Title</title>
    </head>
    <body>

        <!-- Your HTML body section -->
        <h1>{{ formation.titre }}</h1>
        <p>{{ formation.description }}</p>

        {% if formation.video is not null %}
            <video controls width=\"560\" height=\"315\">
                <source src=\"{{ asset('uploads/' ~ formation.video) }}\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
        {% else %}
            No Video
        {% endif %}

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
        <!-- Your form section -->
        <form id=\"comment-form\" method=\"post\" action=\"{{ path('add_commentaire', {'idFormation': formation.id}) }}\">
            <div class=\"form-group row\">
                <div class=\"col-md-6\">
                    <label for=\"comment_text\">Comment</label>
                    <textarea class=\"form-control\" rows=\"8\" placeholder=\"Saisissez votre commentaire ici...\" id=\"comment_text\" name=\"comment_text\"></textarea>
                </div>

                <div class=\"col-md-1\">
                    <label for=\"evaluation\">Evaluation</label>
                    <select class=\"form-control\" id=\"evaluation\" name=\"evaluation\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                        <option value=\"4\">4</option>
                        <option value=\"5\">5</option>
                    </select>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter un commentaire</button>
        </form>
        <!-- Facebook SDK script -->
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Facebook Share Button -->
    <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
        <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
    </div>


        <!-- Your script section -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var commentForm = document.getElementById('comment-form');
                var badWordCount = 0;

                commentForm.addEventListener('submit', function (event) {
                    var commentText = commentForm.querySelector('#comment_text').value;
                    var badWords = ['badword1', 'badword2', 'badword3'];

                    // Check for bad words
                    if (containsBadWords(commentText, badWords)) {
                        badWordCount++;

                        // Redirect if badWordCount is 3 or more
                        if (badWordCount >= 3) {
                            window.location.href = \"{{ path('app_commentaire') }}\";
                        }

                        alert('The comment contains inappropriate words. Please remove them.');
                        event.preventDefault(); // Prevent form submission
                    }
                });

                function containsBadWords(text, badWords) {
                    var lowerCaseText = text.toLowerCase();
                    for (var i = 0; i < badWords.length; i++) {
                        if (lowerCaseText.includes(badWords[i].toLowerCase())) {
                            return true;
                        }
                    }
                    return false;
                }
            });
        </script>

    </body>
    </html>

{% endblock %}
", "commentaire/tabbela.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\commentaire\\tabbela.html.twig");
    }
}
