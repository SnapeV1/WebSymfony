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
      <div class=\"container mt-3 text-center\">
        <h1 class=\"mb-4\">Trainings</h1>
        </div>
  <div class=\"container mt-5\">
    <div class=\"row\">
        <!-- Left Column: Filter by Category -->
        <div class=\"col-md-3\">
            <div class=\"mx-auto p-4\" style=\"background-color: #f8f9fa; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
                <h4 class=\"text-center mb-3\">Filter by Categories</h4>
                <form id=\"category-filter-form\">
                    <div class=\"mb-3\">
                        <label for=\"language\" class=\"form-label\">Language:</label>
                        <select id=\"language\" name=\"language\" class=\"form-control\">
                            <option value=\"english\">English</option>
                            <option value=\"french\">French</option>
                            <!-- Add more language options as needed -->
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Level:</label>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"beginner\" name=\"level[]\" value=\"beginner\">
                            <label class=\"form-check-label\" for=\"beginner\">Beginner</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"intermediate\" name=\"level[]\" value=\"intermediate\">
                            <label class=\"form-check-label\" for=\"intermediate\">Intermediate</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"advanced\" name=\"level[]\" value=\"advanced\">
                            <label class=\"form-check-label\" for=\"advanced\">Advanced</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"mixed\" name=\"level[]\" value=\"mixed\">
                            <label class=\"form-check-label\" for=\"mixed\">Mixed</label>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"duration\" class=\"form-label\">Duration:</label>
                        <select id=\"duration\" name=\"duration\" class=\"form-control\">
                            <option value=\"less-than-2-hours\">Less Than 2 Hours</option>
                            <option value=\"1-4-weeks\">1-4 Weeks</option>
                            <option value=\"1-3-months\">1-3 Months</option>
                            <option value=\"3-6-months\">3-6 Months</option>
                            <option value=\"6-12-months\">6-12 Months</option>
                            <option value=\"1-4-years\">1-4 Years</option>
                        </select>
                    </div>
                    <button id=\"apply-filter-button\" type=\"button\" class=\"btn btn-primary w-100\">Apply Filters</button>
                </form>
            </div>
        </div>

        <!-- Right Column: Training Cards -->
<div class=\"col-md-9\">
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["training"]);
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 62
            echo "            <div class=\"col mb-4\">
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkTraining", ["idFormation" => twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" style=\"text-decoration: none; color: inherit;\">

    <div class=\"card\" style=\"border-radius: 15px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; height: 100%;\">
                 

                  ";
            // line 68
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 68))) {
                // line 69
                echo "    <div style=\"border-radius: 15px; overflow: hidden; position: relative;\">
        <video width=\"100%\" height=\"200\" muted>
            ";
                // line 71
                if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 71)) && is_string($__internal_compile_1 = "file:/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                    // line 72
                    echo "                ";
                    // line 73
                    echo "                ";
                    $context["filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 73), "/"));
                    // line 74
                    echo "                <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 74, $this->source); })()))), "html", null, true);
                    echo "\" type=\"video/mp4\">
            ";
                } else {
                    // line 76
                    echo "                <source src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["training"], "video", [], "any", false, false, false, 76))), "html", null, true);
                    echo "\" type=\"video/mp4\">
            ";
                }
                // line 78
                echo "            Your browser does not support the video tag.
        </video>
            <div style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4);\">
                <p style=\"color: white; font-size: 18px; font-weight: bold;\">Inscription Required</p>
            </div>
            </a>
    </div>
";
            } else {
                // line 86
                echo "    <!-- Display a placeholder image or message for no video -->
    <div class=\"card-img-top text-center pt-4\">
        No Video
    </div>
";
            }
            // line 91
            echo "

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "titre", [], "any", false, false, false, 94), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Prix : ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "prix", [], "any", false, false, false, 95), "html", null, true);
            echo " dt</p>
                        <!-- Registration button and likes section -->
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_training", ["idFormation" => twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">S'inscrire</a>
                            <div class=\"d-flex align-items-center\">
                                <!-- Heart icon for likes -->
                                <i class=\"fas fa-heart\" id=\"likeIcon";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\" onclick=\"likeFormation(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo ")\"></i>
                                <!-- Like count -->
                                <span id=\"likeCount";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\" class=\"ml-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["training"], "likes", [], "any", false, false, false, 103), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </div>
</div>

    <div class=\"col-md-12 d-flex justify-content-end mt-1\">
        ";
        // line 114
        if ((isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 114, $this->source); })())) {
            // line 115
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_formation");
            echo "\" id=\"add-training-link\" class=\"btn btn-link\">
                <i class=\"fas fa-plus-circle\"></i> Add training
            </a>
        ";
        }
        // line 119
        echo "    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var addProductButton = document.getElementById('add-training-link');
            if (addProductButton && \"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 124, $this->source); })()), "html", null, true);
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
        .card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05); /* Increase size on hover */
    }

    /* Add a style for the 'liked' class */
    .liked {
        color: #EE0F0F; /* Change the color to red */
        font-size: 26px; /* Increase the font size */
    }
     .container-fluid {
            width: 100%;
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
        return array (  252 => 124,  245 => 119,  237 => 115,  235 => 114,  229 => 110,  214 => 103,  207 => 101,  201 => 98,  195 => 95,  191 => 94,  186 => 91,  179 => 86,  169 => 78,  163 => 76,  157 => 74,  154 => 73,  152 => 72,  150 => 71,  146 => 69,  144 => 68,  136 => 63,  133 => 62,  129 => 61,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
      <div class=\"container mt-3 text-center\">
        <h1 class=\"mb-4\">Trainings</h1>
        </div>
  <div class=\"container mt-5\">
    <div class=\"row\">
        <!-- Left Column: Filter by Category -->
        <div class=\"col-md-3\">
            <div class=\"mx-auto p-4\" style=\"background-color: #f8f9fa; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
                <h4 class=\"text-center mb-3\">Filter by Categories</h4>
                <form id=\"category-filter-form\">
                    <div class=\"mb-3\">
                        <label for=\"language\" class=\"form-label\">Language:</label>
                        <select id=\"language\" name=\"language\" class=\"form-control\">
                            <option value=\"english\">English</option>
                            <option value=\"french\">French</option>
                            <!-- Add more language options as needed -->
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Level:</label>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"beginner\" name=\"level[]\" value=\"beginner\">
                            <label class=\"form-check-label\" for=\"beginner\">Beginner</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"intermediate\" name=\"level[]\" value=\"intermediate\">
                            <label class=\"form-check-label\" for=\"intermediate\">Intermediate</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"advanced\" name=\"level[]\" value=\"advanced\">
                            <label class=\"form-check-label\" for=\"advanced\">Advanced</label>
                        </div>
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"mixed\" name=\"level[]\" value=\"mixed\">
                            <label class=\"form-check-label\" for=\"mixed\">Mixed</label>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"duration\" class=\"form-label\">Duration:</label>
                        <select id=\"duration\" name=\"duration\" class=\"form-control\">
                            <option value=\"less-than-2-hours\">Less Than 2 Hours</option>
                            <option value=\"1-4-weeks\">1-4 Weeks</option>
                            <option value=\"1-3-months\">1-3 Months</option>
                            <option value=\"3-6-months\">3-6 Months</option>
                            <option value=\"6-12-months\">6-12 Months</option>
                            <option value=\"1-4-years\">1-4 Years</option>
                        </select>
                    </div>
                    <button id=\"apply-filter-button\" type=\"button\" class=\"btn btn-primary w-100\">Apply Filters</button>
                </form>
            </div>
        </div>

        <!-- Right Column: Training Cards -->
<div class=\"col-md-9\">
    <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\">
        {% for training in training %}
            <div class=\"col mb-4\">
                    <a href=\"{{ path('checkTraining', {'idFormation': training.id}) }}\" style=\"text-decoration: none; color: inherit;\">

    <div class=\"card\" style=\"border-radius: 15px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; height: 100%;\">
                 

                  {% if training.video is not null %}
    <div style=\"border-radius: 15px; overflow: hidden; position: relative;\">
        <video width=\"100%\" height=\"200\" muted>
            {% if training.video starts with 'file:/' %}
                {# Extract filename from the video path #}
                {% set filename = training.video|split('/')|last %}
                <source src=\"{{ asset('uploads/' ~ filename) }}\" type=\"video/mp4\">
            {% else %}
                <source src=\"{{ asset('uploads/' ~ training.video) }}\" type=\"video/mp4\">
            {% endif %}
            Your browser does not support the video tag.
        </video>
            <div style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4);\">
                <p style=\"color: white; font-size: 18px; font-weight: bold;\">Inscription Required</p>
            </div>
            </a>
    </div>
{% else %}
    <!-- Display a placeholder image or message for no video -->
    <div class=\"card-img-top text-center pt-4\">
        No Video
    </div>
{% endif %}


                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">{{ training.titre }}</h5>
                        <p class=\"card-text\">Prix : {{ training.prix }} dt</p>
                        <!-- Registration button and likes section -->
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('book_training', {'idFormation': training.id}) }}\" class=\"btn btn-primary\">S'inscrire</a>
                            <div class=\"d-flex align-items-center\">
                                <!-- Heart icon for likes -->
                                <i class=\"fas fa-heart\" id=\"likeIcon{{ training.id }}\" onclick=\"likeFormation({{ training.id }})\"></i>
                                <!-- Like count -->
                                <span id=\"likeCount{{ training.id }}\" class=\"ml-2\">{{ training.likes }}</span>
                            </div>
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
        .card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05); /* Increase size on hover */
    }

    /* Add a style for the 'liked' class */
    .liked {
        color: #EE0F0F; /* Change the color to red */
        font-size: 26px; /* Increase the font size */
    }
     .container-fluid {
            width: 100%;
        }
    </style>
{% endblock %}
", "training/train.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\training\\train.html.twig");
    }
}
