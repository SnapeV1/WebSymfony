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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()));
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
            // line 25
            echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                        <div class=\"card-body text-center d-flex flex-column align-items-center\">
                            <h5 class=\"card-title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Prix : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo " €</p>
                            
                            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" method=\"post\" class=\"mt-auto\">
                                <label for=\"quantity\">Quantity:</label>
                                <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                            </form>
                        </div>
                    </div>
                </div>

                ";
            // line 41
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41) % 3) == 0)) {
                // line 42
                echo "                    </div><div class=\"row\">
                ";
            }
            // line 44
            echo "            ";
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
        // line 45
        echo "        </div>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css\" />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var filterForm = document.getElementById('filter-form');
            var productList = document.getElementById('product-list');
            var baseUrl = '";
        // line 55
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
                fetch(`";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_products");
        echo "?nom=\${nameValue}&minPrice=\${priceRangeValues[0]}&maxPrice=\${priceRangeValues[1]}`)
                    .then(response => handleResponse(response))
                    .then(data => updateProductList(data))
                    .catch(error => handleError(error));
            });

            function handleResponse(response) {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: \${response.status}`);
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
                                <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/"), "html", null, true);
        echo "\${product.image}\" alt=\"\${product.nom}\" class=\"card-img-top\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
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
        return array (  231 => 107,  201 => 80,  173 => 55,  161 => 45,  147 => 44,  143 => 42,  141 => 41,  129 => 32,  124 => 30,  120 => 29,  113 => 27,  109 => 25,  92 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container mt-5\">
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
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('pictures/' ~ product.image) }}\" alt=\"{{ product.nom }}\" class=\"card-img-top\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
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

                {% if loop.index % 3 == 0 %}
                    </div><div class=\"row\">
                {% endif %}
            {% endfor %}
        </div>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css\" />

    <script>
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
                fetch(`{{ path('search_products') }}?nom=\${nameValue}&minPrice=\${priceRangeValues[0]}&maxPrice=\${priceRangeValues[1]}`)
                    .then(response => handleResponse(response))
                    .then(data => updateProductList(data))
                    .catch(error => handleError(error));
            });

            function handleResponse(response) {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: \${response.status}`);
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
                                <img src=\"{{ asset('pictures/') }}\${product.image}\" alt=\"\${product.nom}\" class=\"card-img-top\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
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


{% endblock %}
", "boutique/shop.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\boutique\\shop.html.twig");
    }
}
