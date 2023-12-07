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
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 8
            echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        ";
            // line 10
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) % 4)) {
                // line 11
                echo "                            </div><div class=\"row\">
                        ";
            }
            // line 13
            echo "
                             ";
            // line 14
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 14))) {
                // line 15
                echo "                            <video controls width=\"400\" height=\"300\">
                               ";
                // line 16
                if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 16)) && is_string($__internal_compile_1 = "file:/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                    // line 17
                    echo "        ";
                    // line 18
                    echo "        ";
                    $context["filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 18), "/"));
                    // line 19
                    echo "        <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 19, $this->source); })()))), "html", null, true);
                    echo "\" type=\"video/mp4\">
    ";
                } else {
                    // line 21
                    echo "        <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 21))), "html", null, true);
                    echo "\" type=\"video/mp4\">
    ";
                }
                // line 23
                echo "    Your browser does not support the video tag.
                            </video>
                        ";
            } else {
                // line 26
                echo "                            No Video
                        ";
            }
            // line 28
            echo "                        </video>

                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
                            <h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Prix : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "prix", [], "any", false, false, false, 32), "html", null, true);
            echo " dt</p>

                                            <!-- Regrouper le bouton S'inscrire, l'icône de cœur et le nombre de likes dans une ligne -->
                            <div class=\"d-flex align-items-center\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_training", ["idFormation" => twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">S'inscrire</a>

                                <!-- Heart icon for likes -->
                                <i class=\"fas fa-heart\" id=\"likeIcon";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" onclick=\"likeFormation(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo ")\"></i>

                                
                                <!-- Like count -->
                                <span id=\"likeCount";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"ml-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "likes", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>

                                <!-- Icône de commentaire -->
                                
                            </div>
                    
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>

    <div class=\"col-md-12 d-flex justify-content-end mt-1\">
        ";
        // line 57
        if ((isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_formation");
            echo "\" id=\"add-training-link\" class=\"btn btn-link\">
                <i class=\"fas fa-plus-circle\"></i> Add training
            </a>
        ";
        }
        // line 62
        echo "    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var addProductButton = document.getElementById('add-training-link');
            if (addProductButton && \"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "\" === \"1\") {
                addProductButton.style.display = 'block';
            }
             });

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
        return array (  218 => 67,  211 => 62,  203 => 58,  201 => 57,  195 => 53,  169 => 43,  160 => 39,  154 => 36,  147 => 32,  143 => 31,  138 => 28,  134 => 26,  129 => 23,  123 => 21,  117 => 19,  114 => 18,  112 => 17,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  98 => 11,  96 => 10,  92 => 8,  75 => 7,  68 => 4,  58 => 3,  35 => 1,);
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
                        {% if loop.index is divisible by(4) %}
                            </div><div class=\"row\">
                        {% endif %}

                             {% if training.video is not null %}
                            <video controls width=\"400\" height=\"300\">
                               {% if training.video starts with 'file:/' %}
        {# Extract filename from the video path #}
        {% set filename = training.video|split('/')|last %}
        <source src=\"{{ asset('uploads/' ~ filename) }}\" type=\"video/mp4\">
    {% else %}
        <source src=\"{{ asset('uploads/' ~ training.video) }}\" type=\"video/mp4\">
    {% endif %}
    Your browser does not support the video tag.
                            </video>
                        {% else %}
                            No Video
                        {% endif %}
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
                    
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-12 d-flex justify-content-end mt-1\">
        {% if L %}
            <a href=\"{{ path('add_formation') }}\" id=\"add-training-link\" class=\"btn btn-link\">
                <i class=\"fas fa-plus-circle\"></i> Add training
            </a>
        {% endif %}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var addProductButton = document.getElementById('add-training-link');
            if (addProductButton && \"{{L}}\" === \"1\") {
                addProductButton.style.display = 'block';
            }
             });

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
{% endblock %}
", "training/train.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\training\\train.html.twig");
    }
}
