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
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"container mt-5\">
            <form id=\"search-form\" class=\"mb-3\">
                <label for=\"search\">Search:</label>
                <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
            </form>
            <div class=\"row\" id=\"product-list\">
            ";
        if ($this->env->isDebug()) {
            // line 12
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 12, $this->source); })()));
        }
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 13, $this->source); })()));
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
            // line 14
            echo "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"max-height: 200px; width: 100%; object-fit: cover;\">
                            <div class=\"card-body text-center d-flex flex-column align-items-center\">
                                <h5 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">Prix : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 19), "html", null, true);
            echo " €</p>
                                
                                <form action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "idpdts", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" method=\"post\" class=\"mt-auto\">
                                    <label for=\"quantity\">Quantity:</label>
                                    <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"form-control mb-2\" value=\"1\" min=\"1\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Add to Basket</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    ";
            // line 30
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) % 3) == 0)) {
                // line 31
                echo "                        </div><div class=\"row\">
                    ";
            }
            // line 33
            echo "                ";
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
        // line 34
        echo "            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var searchForm = document.getElementById('search-form');
                var productList = document.getElementById('product-list');
                var baseUrl = '";
        // line 41
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => "_id_"]), ["_id_" => ""]), "html", null, true);
        echo "';

                searchForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    var formData = new FormData(searchForm);
                    
                    // Construct the URL with parameters
                    var url = '";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_products");
        echo "?nom=' + encodeURIComponent(formData.get('criteria[nom]'));

                    // Use the Fetch API to make a GET request
                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! Status: \${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                             console.log('Response data:', data);
                            productList.innerHTML = '';

                            data.produit.forEach(function (product) {
                                var productCard = `
                                    <div class=\"col-md-4 mb-4\">
                                        <div class=\"card\">
                                            <img src=\"";
        // line 67
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
                        })
                        .catch(error => {
                            // Handle the error, e.g., log it or display an error message
                            console.error('Error:', error.message);
                        });
                });
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
        return array (  195 => 67,  174 => 49,  163 => 41,  154 => 34,  140 => 33,  136 => 31,  134 => 30,  122 => 21,  117 => 19,  113 => 18,  106 => 16,  102 => 14,  84 => 13,  81 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'base.html.twig' %}

    {% block body %}
        {{ parent() }}
        <div class=\"container mt-5\">
            <form id=\"search-form\" class=\"mb-3\">
                <label for=\"search\">Search:</label>
                <input type=\"text\" id=\"search\" name=\"criteria[nom]\" class=\"form-control\">
                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
            </form>
            <div class=\"row\" id=\"product-list\">
            {% dump(produit) %}
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

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var searchForm = document.getElementById('search-form');
                var productList = document.getElementById('product-list');
                var baseUrl = '{{ path('add_to_cart', {'id': '_id_'})|replace({'_id_': ''}) }}';

                searchForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    var formData = new FormData(searchForm);
                    
                    // Construct the URL with parameters
                    var url = '{{ path('search_products') }}?nom=' + encodeURIComponent(formData.get('criteria[nom]'));

                    // Use the Fetch API to make a GET request
                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! Status: \${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                             console.log('Response data:', data);
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
                        })
                        .catch(error => {
                            // Handle the error, e.g., log it or display an error message
                            console.error('Error:', error.message);
                        });
                });
            });
        
        </script>
    {% endblock %}
", "boutique/shop.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\boutique\\shop.html.twig");
    }
}
