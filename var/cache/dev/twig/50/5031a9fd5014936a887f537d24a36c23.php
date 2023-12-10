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

/* boutique/shop.html.twig */
class __TwigTemplate_cee7ad0239545aa435a729ab83115637 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boutique/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boutique/shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boutique/shop.html.twig", 1);
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

     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cardstyle.css"), "html", null, true);
        echo "\">

    
    <div class=\"container mt-3 text-center\">
        <h1 class=\"mb-4\">SHOP</h1>
        <div class=\"col-md-12 d-flex justify-content-end mt-1\">
            ";
        // line 12
        if ((isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
            echo "\" class=\"btn-link\">
                    <i class=\"fas fa-plus-circle\"></i> Add Product
                </a>
            ";
        }
        // line 17
        echo "        </div>

           
            
        </div>
        
    </div>
    
        <!-- Notification list (initially hidden) -->
        <div id=\"notification-list\" style=\"display: none;\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 28
            echo "                <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "content", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>
                <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            
        </div>

        ";
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 36
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 37
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              
  <div class=\"row\">
    <!-- Left Column: Search and Filter -->
    <div class=\"col-md-4\">
        <div class=\"mx-auto p-4\" style=\"background-color: #f8f9fa; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
            <h4 class=\"text-center mb-3\">Filter Products</h4>
            <form id=\"filter-form\">
                <div class=\"mb-3\">
                    <label for=\"search\" class=\"form-label\">Search by Name:</label>
                    <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"price-range\" class=\"form-label\">Price Range:</label>
                    <div id=\"price-range\" class=\"mb-2\"></div>
                    <div id=\"price-range-values\" class=\"text-muted\">0€ - 3000€</div>
                </div>
                <button id=\"filter-button\" type=\"submit\" class=\"btn btn-primary w-100\">Apply Filters</button>
            </form>
        </div>
    </div>

    <!-- Right Column: Product Cards -->
    <div class=\"col-md-8\">
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\" id=\"product-list\">
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            echo "                <div class=\"col mb-4\">      

                    <div class=\"card\" data-bs-toggle=\"modal\" data-bs-target=\"#productModal";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 78), "html", null, true);
            echo "\" style=\"border-radius: 15px; overflow: hidden; height: 100%;\">
                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 79)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 79), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 79))))), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"max-height: 150px; width: 100%; object-fit: cover; border-radius: 15px;\">
                        <div class=\"card-body text-center d-flex flex-column align-items-center\" style=\"height: 100%;\">
                            <h5 class=\"card-title\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 81), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Prix : ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 82), "html", null, true);
            echo " €</p>
                            <form action=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" method=\"post\" class=\"mt-auto\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"modal fade\" id=\"productModal";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 91), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"productModalLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 91), "html", null, true);
            echo "\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"productModalLabel";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 95), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 95), "html", null, true);
            echo "</h5>
                    
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
    <img src=\"";
            // line 100
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 100)) && is_string($__internal_compile_3 = "C:\\") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 100), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 100))))), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"max-height: 400px; width: 100%; object-fit: cover; border-radius: 15px;\">
                 <span class=\"title\">Description:</span> ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 101), "html", null, true);
            echo "<br>

    <span class=\"title\">Material:</span> ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "matiere", [], "any", false, false, false, 103), "html", null, true);
            echo "<br>

    <span class=\"title\">Price:</span> ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 105), "html", null, true);
            echo "\$<br>

    <span class=\"title\">Available Quantity:</span> ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qte", [], "any", false, false, false, 107), "html", null, true);
            echo "<br>

                </div>
                <div class=\"modal-footer\">
<p class=\"brand\">EcoArt</p>                </div>
            </div>
        </div>
    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </div>
    </div>
</div>




    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css\" />

    <script>
         document.addEventListener('DOMContentLoaded', function () {
            // Your existing JavaScript code...

            // Show the \"Add Product\" button if the user is a VENDEUR
            var addProductButton = document.getElementById('add-product-button');
            if (addProductButton && \"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\" === \"1\") {
                addProductButton.style.display = 'block';
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            var notificationIcon = document.getElementById('notification-icon');
            var notificationList = document.getElementById('notification-list');

            // Toggle the visibility of the notification list
            notificationIcon.addEventListener('click', function () {
                if (notificationList.style.display === 'none') {
                    // Show the notification list
                    notificationList.style.display = 'block';
                } else {
                    // Hide the notification list
                    notificationList.style.display = 'none';
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            var filterForm = document.getElementById('filter-form');
            var productList = document.getElementById('product-list');
            var baseUrl = '";
        // line 156
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => "id"]), ["id" => ""]), "html", null, true);
        echo "';

            // Initialize the price range slider
            var priceRangeSlider = document.getElementById('price-range');
            noUiSlider.create(priceRangeSlider, {
                start: [0, 3000], // Initial range
                connect: true,
                range: {
                    'min': 0,
                    'max': 3000
                }
            });

            // Update the price range label when the slider values change
            priceRangeSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-range-values').innerHTML = values.join('€ - ') + '€';
            });

            filterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(filterForm);
                var nameValue = encodeURIComponent(formData.get('criteria[nom]'));
                var priceRangeValues = priceRangeSlider.noUiSlider.get();

                // Use the Fetch API to make a GET request
                fetch(\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_products");
        echo "?nom=\" + nameValue + \"&minPrice=\" + priceRangeValues[0] + \"&maxPrice=\" + priceRangeValues[1])
                    .then(response => handleResponse(response))
                    .then(data => updateProductList(data))
                    .catch(error => handleError(error));
            });

            function handleResponse(response) {
                if (!response.ok) {
                    throw new Error('HTTP error! Status: ' + response.status);
                }

                return response.json();
            }

            function handleError(error) {
                console.error('Error:', error.message);
            }

            // Function to update the product list
            function updateProductList(data) {
                console.log('Updating product list:', data);
                productList.innerHTML = '';

                data.produit.forEach(function (product) {
                    var productCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card\">
<img src=\"\${product.image.startsWith('C:\\\\') ? 'uploads/' + product.image.split('\\\\').pop() : 'uploads/' + product.image}\" alt=\"\${product.nom}\" class=\"card-img-top\" style=\"max-height: 250px; width: 100%; object-fit: cover;\">
                                <div class=\"card-body text-center d-flex flex-column align-items-center\">
                                    <h5 class=\"card-title\">\${product.nom || 'Unknown Product'}</h5>
                                    <p class=\"card-text\">Prix : \${product.prix || 'N/A'} €</p>
                                    
                                    <form action=\"\${baseUrl}\${product.idpdts}\" method=\"post\" class=\"mt-auto\">
                                        <label for=\"quantity\">Quantity:</label>
                                        <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    `;

                    productList.innerHTML += productCard;
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boutique/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 181,  325 => 156,  298 => 132,  280 => 116,  265 => 107,  260 => 105,  255 => 103,  250 => 101,  246 => 100,  236 => 95,  227 => 91,  216 => 83,  212 => 82,  208 => 81,  203 => 79,  199 => 78,  195 => 76,  191 => 75,  165 => 51,  155 => 47,  152 => 46,  147 => 45,  144 => 43,  132 => 37,  129 => 36,  124 => 35,  119 => 31,  109 => 28,  105 => 27,  93 => 17,  85 => 13,  83 => 12,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/cardstyle.css') }}\">

    
    <div class=\"container mt-3 text-center\">
        <h1 class=\"mb-4\">SHOP</h1>
        <div class=\"col-md-12 d-flex justify-content-end mt-1\">
            {% if L %}
                <a href=\"{{ path('add_product') }}\" class=\"btn-link\">
                    <i class=\"fas fa-plus-circle\"></i> Add Product
                </a>
            {% endif %}
        </div>

           
            
        </div>
        
    </div>
    
        <!-- Notification list (initially hidden) -->
        <div id=\"notification-list\" style=\"display: none;\">
            {% for notification in notifications %}
                <div>{{ notification.content }}</div>
                <hr>
            {% endfor %}
            
        </div>

        {# Display success flash messages as alerts #}
        {% for flashMessage in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ flashMessage }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                
            </div>

        {% endfor %}

        {# Display warning flash messages as alerts #}
        {% for flashMessage in app.flashes('warning') %}
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                {{ flashMessage }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
              
  <div class=\"row\">
    <!-- Left Column: Search and Filter -->
    <div class=\"col-md-4\">
        <div class=\"mx-auto p-4\" style=\"background-color: #f8f9fa; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
            <h4 class=\"text-center mb-3\">Filter Products</h4>
            <form id=\"filter-form\">
                <div class=\"mb-3\">
                    <label for=\"search\" class=\"form-label\">Search by Name:</label>
                    <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"price-range\" class=\"form-label\">Price Range:</label>
                    <div id=\"price-range\" class=\"mb-2\"></div>
                    <div id=\"price-range-values\" class=\"text-muted\">0€ - 3000€</div>
                </div>
                <button id=\"filter-button\" type=\"submit\" class=\"btn btn-primary w-100\">Apply Filters</button>
            </form>
        </div>
    </div>

    <!-- Right Column: Product Cards -->
    <div class=\"col-md-8\">
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3\" id=\"product-list\">
            {% for product in produit %}
                <div class=\"col mb-4\">      

                    <div class=\"card\" data-bs-toggle=\"modal\" data-bs-target=\"#productModal{{ product.idpdts }}\" style=\"border-radius: 15px; overflow: hidden; height: 100%;\">
                        <img src=\"{{ product.image starts with 'C:\\\\' ? asset('uploads/' ~ product.image|split('\\\\')|last) : asset('uploads/'~ product.image) }}\" class=\"card-img-top\" style=\"max-height: 150px; width: 100%; object-fit: cover; border-radius: 15px;\">
                        <div class=\"card-body text-center d-flex flex-column align-items-center\" style=\"height: 100%;\">
                            <h5 class=\"card-title\">{{ product.nom }}</h5>
                            <p class=\"card-text\">Prix : {{ product.prix }} €</p>
                            <form action=\"{{ path('add_to_cart', {'id': product.idpdts}) }}\" method=\"post\" class=\"mt-auto\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"modal fade\" id=\"productModal{{ product.idpdts }}\" tabindex=\"-1\" aria-labelledby=\"productModalLabel{{ product.idpdts }}\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"productModalLabel{{ product.idpdts }}\">{{ product.nom }}</h5>
                    
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
    <img src=\"{{ product.image starts with 'C:\\\\' ? asset('uploads/' ~ product.image|split('\\\\')|last) : asset('uploads/'~ product.image) }}\" class=\"card-img-top\" style=\"max-height: 400px; width: 100%; object-fit: cover; border-radius: 15px;\">
                 <span class=\"title\">Description:</span> {{ product.description }}<br>

    <span class=\"title\">Material:</span> {{ product.matiere }}<br>

    <span class=\"title\">Price:</span> {{ product.prix }}\$<br>

    <span class=\"title\">Available Quantity:</span> {{ product.qte }}<br>

                </div>
                <div class=\"modal-footer\">
<p class=\"brand\">EcoArt</p>                </div>
            </div>
        </div>
    </div>
            {% endfor %}
        </div>
    </div>
</div>




    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css\" />

    <script>
         document.addEventListener('DOMContentLoaded', function () {
            // Your existing JavaScript code...

            // Show the \"Add Product\" button if the user is a VENDEUR
            var addProductButton = document.getElementById('add-product-button');
            if (addProductButton && \"{{L}}\" === \"1\") {
                addProductButton.style.display = 'block';
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            var notificationIcon = document.getElementById('notification-icon');
            var notificationList = document.getElementById('notification-list');

            // Toggle the visibility of the notification list
            notificationIcon.addEventListener('click', function () {
                if (notificationList.style.display === 'none') {
                    // Show the notification list
                    notificationList.style.display = 'block';
                } else {
                    // Hide the notification list
                    notificationList.style.display = 'none';
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            var filterForm = document.getElementById('filter-form');
            var productList = document.getElementById('product-list');
            var baseUrl = '{{ path('add_to_cart', {'id': 'id'})|replace({'id': ''}) }}';

            // Initialize the price range slider
            var priceRangeSlider = document.getElementById('price-range');
            noUiSlider.create(priceRangeSlider, {
                start: [0, 3000], // Initial range
                connect: true,
                range: {
                    'min': 0,
                    'max': 3000
                }
            });

            // Update the price range label when the slider values change
            priceRangeSlider.noUiSlider.on('update', function (values, handle) {
                document.getElementById('price-range-values').innerHTML = values.join('€ - ') + '€';
            });

            filterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(filterForm);
                var nameValue = encodeURIComponent(formData.get('criteria[nom]'));
                var priceRangeValues = priceRangeSlider.noUiSlider.get();

                // Use the Fetch API to make a GET request
                fetch(\"{{ path('search_products') }}?nom=\" + nameValue + \"&minPrice=\" + priceRangeValues[0] + \"&maxPrice=\" + priceRangeValues[1])
                    .then(response => handleResponse(response))
                    .then(data => updateProductList(data))
                    .catch(error => handleError(error));
            });

            function handleResponse(response) {
                if (!response.ok) {
                    throw new Error('HTTP error! Status: ' + response.status);
                }

                return response.json();
            }

            function handleError(error) {
                console.error('Error:', error.message);
            }

            // Function to update the product list
            function updateProductList(data) {
                console.log('Updating product list:', data);
                productList.innerHTML = '';

                data.produit.forEach(function (product) {
                    var productCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card\">
<img src=\"\${product.image.startsWith('C:\\\\') ? 'uploads/' + product.image.split('\\\\').pop() : 'uploads/' + product.image}\" alt=\"\${product.nom}\" class=\"card-img-top\" style=\"max-height: 250px; width: 100%; object-fit: cover;\">
                                <div class=\"card-body text-center d-flex flex-column align-items-center\">
                                    <h5 class=\"card-title\">\${product.nom || 'Unknown Product'}</h5>
                                    <p class=\"card-text\">Prix : \${product.prix || 'N/A'} €</p>
                                    
                                    <form action=\"\${baseUrl}\${product.idpdts}\" method=\"post\" class=\"mt-auto\">
                                        <label for=\"quantity\">Quantity:</label>
                                        <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    `;

                    productList.innerHTML += productCard;
                });
            }
        });
    </script>
{% endblock %}", "boutique/shop.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\boutique\\shop.html.twig");
    }
}
