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

/* training/train.html.twig */
class __TwigTemplate_3fecccfc7db71e00b890fa926c559155 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/train.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/train.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "training/train.html.twig", 1);
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
    <div class=\"container mt-5\">
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["training"]);
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 8
            echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        ";
            // line 10
            $context["videoPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 10)));
            // line 11
            echo "                        <video controls poster=\"";
            echo twig_escape_filter($this->env, (isset($context["videoPath"]) || array_key_exists("videoPath", $context) ? $context["videoPath"] : (function () { throw new RuntimeError('Variable "videoPath" does not exist.', 11, $this->source); })()), "html", null, true);
            echo ".jpg\" class=\"card-img-top\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
                            <source src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["videoPath"]) || array_key_exists("videoPath", $context) ? $context["videoPath"] : (function () { throw new RuntimeError('Variable "videoPath" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\" type=\"video/mp4\">
                            Your browser does not support the video tag.
                        </video>
                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
                            <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Prix : ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "prix", [], "any", false, false, false, 17), "html", null, true);
            echo " dt</p>

                            <!-- Regrouper le bouton S'inscrire, l'icône de cœur et le nombre de likes dans une ligne -->
                            <div class=\"d-flex align-items-center\">
                                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_training", ["idFormation" => twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">S'inscrire</a>

                                <!-- Heart icon for likes -->
                                <i class=\"fas fa-heart\" id=\"likeIcon";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" onclick=\"likeFormation(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo ")\"></i>

                                
                                <!-- Like count -->
                                <span id=\"likeCount";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"ml-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "likes", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>

                                <!-- Icône de commentaire -->
                            </div>

                            <script>
                                function likeFormation(formationId) {
                                    // Make an AJAX request to the like_formation route
                                    fetch(`/like/\${formationId}`, { method: 'POST' })
                                        .then(response => {
                                            // Handle the response, e.g., update the UI
                                            console.log('Formation liked successfully');

                                            // Toggle the 'liked' class to change the heart appearance
                                            const likeIcon = document.getElementById(`likeIcon\${formationId}`);
                                            likeIcon.classList.toggle('liked');

                                            // Update the like count
                                            const likeCount = document.getElementById(`likeCount\${formationId}`);
                                            const likeCountIcon = document.getElementById(`likeCountIcon\${formationId}`);
                                            const currentCount = parseInt(likeCount.innerText);
                                            likeCount.innerText = likeIcon.classList.contains('liked') ? currentCount + 1 : currentCount - 1;

                                            // Update the like count icon (optional)
                                            likeCountIcon.style.color = likeIcon.classList.contains('liked') ? 'red' : '';
                                        })
                                        .catch(error => {
                                            console.error('Error liking formation:', error);
                                        });
                                }
                            </script>

                            <style>
                                /* Add a style for the 'liked' class */
                                .liked {
                                    color: #EE0F0F; /* Change the color to red */
                                    font-size: 26px; /* Increase the font size */
                                }

                                
                            </style>

                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "training/train.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 74,  123 => 28,  114 => 24,  108 => 21,  101 => 17,  97 => 16,  90 => 12,  85 => 11,  83 => 10,  79 => 8,  75 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container mt-5\">
        <div class=\"row\">
            {% for training in training %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        {% set videoPath = asset('videos/' ~ training.video) %}
                        <video controls poster=\"{{ videoPath }}.jpg\" class=\"card-img-top\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
                            <source src=\"{{ videoPath }}\" type=\"video/mp4\">
                            Your browser does not support the video tag.
                        </video>
                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
                            <h5 class=\"card-title\">{{ training.titre }}</h5>
                            <p class=\"card-text\">Prix : {{ training.prix }} dt</p>

                            <!-- Regrouper le bouton S'inscrire, l'icône de cœur et le nombre de likes dans une ligne -->
                            <div class=\"d-flex align-items-center\">
                                <a href=\"{{ path('book_training', {'idFormation': training.id}) }}\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">S'inscrire</a>

                                <!-- Heart icon for likes -->
                                <i class=\"fas fa-heart\" id=\"likeIcon{{ training.id }}\" onclick=\"likeFormation({{ training.id }})\"></i>

                                
                                <!-- Like count -->
                                <span id=\"likeCount{{ training.id }}\" class=\"ml-2\">{{ training.likes }}</span>

                                <!-- Icône de commentaire -->
                            </div>

                            <script>
                                function likeFormation(formationId) {
                                    // Make an AJAX request to the like_formation route
                                    fetch(`/like/\${formationId}`, { method: 'POST' })
                                        .then(response => {
                                            // Handle the response, e.g., update the UI
                                            console.log('Formation liked successfully');

                                            // Toggle the 'liked' class to change the heart appearance
                                            const likeIcon = document.getElementById(`likeIcon\${formationId}`);
                                            likeIcon.classList.toggle('liked');

                                            // Update the like count
                                            const likeCount = document.getElementById(`likeCount\${formationId}`);
                                            const likeCountIcon = document.getElementById(`likeCountIcon\${formationId}`);
                                            const currentCount = parseInt(likeCount.innerText);
                                            likeCount.innerText = likeIcon.classList.contains('liked') ? currentCount + 1 : currentCount - 1;

                                            // Update the like count icon (optional)
                                            likeCountIcon.style.color = likeIcon.classList.contains('liked') ? 'red' : '';
                                        })
                                        .catch(error => {
                                            console.error('Error liking formation:', error);
                                        });
                                }
                            </script>

                            <style>
                                /* Add a style for the 'liked' class */
                                .liked {
                                    color: #EE0F0F; /* Change the color to red */
                                    font-size: 26px; /* Increase the font size */
                                }

                                
                            </style>

                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "training/train.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\training\\train.html.twig");
    }
}
