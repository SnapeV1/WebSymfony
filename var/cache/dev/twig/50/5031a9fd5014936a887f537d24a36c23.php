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

 
    <div class=\"container mt-5\">
           <div class=\"col-md-12 d-flex justify-content-end mt-1\">
    ";
        // line 9
        if ((isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
            echo "\" class=\"btn-link\">
            <i class=\"fas fa-plus-circle\"></i> Add Product
        </a>
    ";
        }
        // line 14
        echo "</div>

           
            
        </div>
        
    </div>
    
        <!-- Notification list (initially hidden) -->
        <div id=\"notification-list\" style=\"display: none;\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 25
            echo "                <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "content", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
                <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            
        </div>

        ";
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        ";
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              
    </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <form id=\"filter-form\" class=\"mb-3\">
                    <label for=\"search\">Search by Name:</label>
                    <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                    <label for=\"price-range\">Price Range:</label>
                    <div id=\"price-range\"></div>
                    <div id=\"price-range-values\">0€ - 3000€</div>
                    <button id=\"filter-button\" type=\"submit\" class=\"btn btn-primary\">Filter</button>
                </form>
            </div>
            <div class=\"col-md-12 mt-3\">
                <!-- This space intentionally left blank -->
            </div>
        </div>

        <div class=\"row\" id=\"product-list\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 68, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 69
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 69) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 69) % 100) == 0))) {
                // line 70
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                        </div><div class=\"row\">
                    ";
                }
                // line 73
                echo "                ";
            }
            // line 74
            echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 76)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 76), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 76))))), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">

                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
                            <h5 class=\"card-title\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 79), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Prix : ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 80), "html", null, true);
            echo " €</p>
                            <form action=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" method=\"post\" class=\"mt-auto\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                            </form>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </div>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css\" />

    <script>
         document.addEventListener('DOMContentLoaded', function () {
            // Your existing JavaScript code...

            // Show the \"Add Product\" button if the user is a VENDEUR
            var addProductButton = document.getElementById('add-product-button');
            if (addProductButton && \"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["L"]) || array_key_exists("L", $context) ? $context["L"] : (function () { throw new RuntimeError('Variable "L" does not exist.', 102, $this->source); })()), "html", null, true);
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
        // line 126
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
        // line 151
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
        return array (  321 => 151,  293 => 126,  266 => 102,  252 => 90,  229 => 81,  225 => 80,  221 => 79,  215 => 76,  211 => 74,  208 => 73,  204 => 71,  201 => 70,  198 => 69,  181 => 68,  159 => 48,  149 => 44,  146 => 43,  141 => 42,  138 => 40,  126 => 34,  123 => 33,  118 => 32,  113 => 28,  103 => 25,  99 => 24,  87 => 14,  79 => 10,  77 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

 
    <div class=\"container mt-5\">
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
              
    </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <form id=\"filter-form\" class=\"mb-3\">
                    <label for=\"search\">Search by Name:</label>
                    <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                    <label for=\"price-range\">Price Range:</label>
                    <div id=\"price-range\"></div>
                    <div id=\"price-range-values\">0€ - 3000€</div>
                    <button id=\"filter-button\" type=\"submit\" class=\"btn btn-primary\">Filter</button>
                </form>
            </div>
            <div class=\"col-md-12 mt-3\">
                <!-- This space intentionally left blank -->
            </div>
        </div>

        <div class=\"row\" id=\"product-list\">
            {% for product in produit %}
                {% if loop.first or loop.index0 % 100 == 0 %}
                    {% if not loop.first %}
                        </div><div class=\"row\">
                    {% endif %}
                {% endif %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"{{ product.image starts with 'C:\\\\' ? asset('uploads/' ~ product.image|split('\\\\')|last) : asset('uploads/'~ product.image) }}\" class=\"card-img-top\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">

                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
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
            {% endfor %}
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
