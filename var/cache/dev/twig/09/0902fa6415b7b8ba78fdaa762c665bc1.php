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

/* training/book.html.twig */
class __TwigTemplate_4975fa55356a43e9c0f9e367b503aa11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/book.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "training/book.html.twig", 1);
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
            <div class=\"col-md-6 mx-auto\">
                <h2>Reservation for the training \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "\"</h2>
                <h5>It costs \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "prix", [], "any", false, false, false, 9), "html", null, true);
        echo "\" dt</h5>
                <form id=\"payment-form\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("process_payment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\">
                    <!-- Add your reservation fields here -->

                    <div class=\"form-group\">
                        <label for=\"fullName\">Full Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>

                    <!-- Card details section -->
                    <div class=\"form-group\">
                        <label for=\"cardNumber\">Card Number</label>
                        <div id=\"card-element\"></div>
                    </div>

                    <!-- CVC and expiration date -->
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div id=\"card-cvc\" class=\"form-control\"></div>
                        </div>
                        <div class=\"col\">
                            <div id=\"card-expiry\" class=\"form-control\"></div>
                        </div>
                    </div>

                    <button id=\"card-button\" class=\"btn btn-primary mt-4\">Book</button>
                </form>
            </div>
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe('pk_test_51OGMOXL0ywzjvxffqUYYflCe9Q5EkentWEbdikQOwmBa7pyku3CYF6rt2OKYoJpxq9Y5BkFAIJf9AR04xWPEy3l400swqfsj2O');
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
                billing_details: {
                    name: document.getElementById('fullName').value,
                    email: document.getElementById('email').value,
                },
            }).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error
                    alert(result.error.message);
                } else {
                    // Add the payment_method to the form and submit
                    var paymentMethodInput = document.createElement('input');
                    paymentMethodInput.setAttribute('type', 'hidden');
                    paymentMethodInput.setAttribute('name', 'payment_method');
                    paymentMethodInput.setAttribute('value', result.paymentMethod.id);
                    form.appendChild(paymentMethodInput);

                    form.submit();
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "training/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 10,  80 => 9,  76 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-6 mx-auto\">
                <h2>Reservation for the training \"{{ formation.titre }}\"</h2>
                <h5>It costs \"{{ formation.prix }}\" dt</h5>
                <form id=\"payment-form\" action=\"{{ path('process_payment', {'id': formation.id}) }}\" method=\"post\">
                    <!-- Add your reservation fields here -->

                    <div class=\"form-group\">
                        <label for=\"fullName\">Full Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>

                    <!-- Card details section -->
                    <div class=\"form-group\">
                        <label for=\"cardNumber\">Card Number</label>
                        <div id=\"card-element\"></div>
                    </div>

                    <!-- CVC and expiration date -->
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <div id=\"card-cvc\" class=\"form-control\"></div>
                        </div>
                        <div class=\"col\">
                            <div id=\"card-expiry\" class=\"form-control\"></div>
                        </div>
                    </div>

                    <button id=\"card-button\" class=\"btn btn-primary mt-4\">Book</button>
                </form>
            </div>
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe('pk_test_51OGMOXL0ywzjvxffqUYYflCe9Q5EkentWEbdikQOwmBa7pyku3CYF6rt2OKYoJpxq9Y5BkFAIJf9AR04xWPEy3l400swqfsj2O');
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
                billing_details: {
                    name: document.getElementById('fullName').value,
                    email: document.getElementById('email').value,
                },
            }).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error
                    alert(result.error.message);
                } else {
                    // Add the payment_method to the form and submit
                    var paymentMethodInput = document.createElement('input');
                    paymentMethodInput.setAttribute('type', 'hidden');
                    paymentMethodInput.setAttribute('name', 'payment_method');
                    paymentMethodInput.setAttribute('value', result.paymentMethod.id);
                    form.appendChild(paymentMethodInput);

                    form.submit();
                }
            });
        });
    </script>
{% endblock %}
", "training/book.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\training\\book.html.twig");
    }
}
