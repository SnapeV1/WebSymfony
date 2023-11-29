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

/* base.html.twig */
class __TwigTemplate_341a7908890fc255d4d96547371ec4ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
     <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/toastify/src/toastify.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "</head>
<body>
    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 140
        $this->displayBlock('footer', $context, $blocks);
        // line 204
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 291
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">
        
        <!-- Icon Font Stylesheets -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
        
        <!-- Libraries Stylesheets -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
             <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/toastify/src/toastify.css"), "html", null, true);
        echo "\">
        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!-- Template Stylesheet -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "     
    <!-- Spinner End -->
<style>
#weather-info {
    display: flex;
    align-items: center;
    font-size:8px;
}

#WeatherIcon {
    margin-top:10px;
    width: 20px; /* Adjust the width as needed */
    height: 20px; /* Adjust the height as needed */
    margin-left: 10px; /* Add some spacing between the text and the icon */
}
</style>

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-light p-0\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
            
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-map-marker-alt text-primary me-2\"></small>
                    <small>Street,123 Habib Bourgiba Ariana,Tunisia</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center py-3\">
                    <small class=\"far fa-clock text-primary me-2\"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-phone-alt text-primary me-2\"></small>
                    <small>+216 52917622</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-0\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
<div><img src=\"\" id=\"WeatherIcon\"></div>
                    <div id=\"weather-info\">
      <span>Loading weather...</span>
</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
";
        // line 87
        $this->loadTemplate("group/chatbot.html.twig", "base.html.twig", 87)->display($context);
        // line 88
        echo "
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\">EcoArt</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href= \"service.html\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping");
        echo "\" class=\"nav-item nav-link\">Shop</a>
                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training");
        echo "\" class=\"nav-item nav-link\">Training</a>
                <a href=\"project.html\" class=\"nav-item nav-link\">Event</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Interact with others</a>
                    <div class=\"dropdown-menu fade-up m-0\"> 
                        <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groups_getall", ["userid" => 1]);
        echo "\" class=\"dropdown-item\">Groups</a>
                        <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select_receiver", ["user1Id" => 1]);
        echo "\"  class=\"dropdown-item\">Conversation</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
          
<!-- Add the shopping basket and notification icons here -->
<a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_cart");
        echo "\" class=\"nav-item nav-link\" style=\"text-decoration: none;\">
    <button style=\"background-color: white; border: none\">
        <i class=\"fas fa-shopping-basket fa-lg\" style=\"color: #854e0f;\"></i>
    </button>
</a>


           


        </div>
    </nav>
    <!-- Navbar End -->





        <!-- Content for the body -->
        <!-- Spinner, Topbar, Navbar, and Footer HTML -->



    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 141
        echo " <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Habib Bourgiba street,Ariana,Tunisia<div id=\"map\" style=\"height: 150px; width:150px \"></div></p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 52917622</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>ecoart@info.tn</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">General Carpentry</a>
                    <a class=\"btn btn-link\" href=\"\">Furniture Remodeling</a>
                    <a class=\"btn btn-link\" href=\"\">Wooden Floor</a>
                    <a class=\"btn btn-link\" href=\"\">Wooden Furniture</a>
                    <a class=\"btn btn-link\" href=\"\">Custom Carpentry</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Quick Links</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    

                    <div class=\"col-md-6 text-center text-md-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "        <!-- JavaScript Libraries -->
        <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- Template Javascript -->
        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script>
        // Use your desired initial coordinates
    var initialCoordinates = [36.9003, 10.1959];
    var initialZoom = 14;

    // Initialize the map
    var map = L.map('map').setView(initialCoordinates, initialZoom);

    // Add the OpenStreetMap layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
       
    }).addTo(map);

function getWeather() {
    const apiKey = \"07b37dc5bf0427456ba8f735878830bb\";
    const city = \"Gouvernorat de l’Ariana, TN\";
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=\${city}&appid=\${apiKey}`;

    // Make a fetch request to the weather API
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Process the weather data
            const temperature = data.main.temp - 273.15; // Convert from Kelvin to Celsius
            const condition = data.weather[0].description;

       
            console.log(`Current Temperature: \${round(temperature)}°C`);
            console.log(`Weather Condition: \${condition}`);
           
            document.getElementById('weather-info').innerText = `Temperature: \${round(temperature)}°C`;
         const iconElement = document.getElementById('WeatherIcon');
          const weatherIconSrc = getWeatherIconSrc(data.weather[0].description);
            iconElement.src = weatherIconSrc;

        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
        });
}

// Function to round the temperature
function round(number) {
    return Math.round(number * 10) / 10;
}

// Call the getWeather function
getWeather();

        function getWeatherIconSrc(weatherCondition) {
            // You need to customize this mapping based on your specific use case
            // Below is just an example, and you may need to add more conditions/icons
            if (weatherCondition.toLowerCase().includes('cloud')) {
                return '";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cloudy.png"), "html", null, true);
        echo "'; // Use the asset function
            } else if (weatherCondition.toLowerCase().includes('sun')) {
                return '";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sun.png"), "html", null, true);
        echo "'; // Use the asset function
            } else if (weatherCondition.toLowerCase().includes('rain')) {
                return '";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rain.png"), "html", null, true);
        echo "'; // Use the asset function
            } else {
                return '";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/sun.png"), "html", null, true);
        echo "'; // Use the asset function
            }
        }


</script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 284,  515 => 282,  510 => 280,  505 => 278,  443 => 219,  437 => 216,  433 => 215,  429 => 214,  425 => 213,  421 => 212,  417 => 211,  413 => 210,  409 => 209,  403 => 205,  393 => 204,  321 => 141,  311 => 140,  277 => 116,  265 => 107,  261 => 106,  253 => 101,  249 => 100,  235 => 88,  233 => 87,  181 => 37,  171 => 36,  159 => 32,  153 => 29,  148 => 27,  142 => 24,  138 => 23,  134 => 22,  122 => 12,  112 => 11,  93 => 5,  82 => 291,  79 => 204,  77 => 140,  75 => 36,  71 => 34,  69 => 11,  63 => 8,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('img/favicon.ico') }}\" type=\"image/x-icon\">
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
     <script src=\"{{ asset('js/toastify/src/toastify.js') }}\"></script>
     <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    {% block stylesheets %}
        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">
        
        <!-- Icon Font Stylesheets -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
        
        <!-- Libraries Stylesheets -->
        <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">
             <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('js/toastify/src/toastify.css') }}\">
        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        
        <!-- Template Stylesheet -->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>
    {% block body %}
     
    <!-- Spinner End -->
<style>
#weather-info {
    display: flex;
    align-items: center;
    font-size:8px;
}

#WeatherIcon {
    margin-top:10px;
    width: 20px; /* Adjust the width as needed */
    height: 20px; /* Adjust the height as needed */
    margin-left: 10px; /* Add some spacing between the text and the icon */
}
</style>

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-light p-0\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
            
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-map-marker-alt text-primary me-2\"></small>
                    <small>Street,123 Habib Bourgiba Ariana,Tunisia</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center py-3\">
                    <small class=\"far fa-clock text-primary me-2\"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-phone-alt text-primary me-2\"></small>
                    <small>+216 52917622</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-0\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
<div><img src=\"\" id=\"WeatherIcon\"></div>
                    <div id=\"weather-info\">
      <span>Loading weather...</span>
</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
{%include 'group/chatbot.html.twig'%}

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\">EcoArt</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href= \"service.html\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"{{ path('shopping')}}\" class=\"nav-item nav-link\">Shop</a>
                    <a href=\"{{ path('training')}}\" class=\"nav-item nav-link\">Training</a>
                <a href=\"project.html\" class=\"nav-item nav-link\">Event</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Interact with others</a>
                    <div class=\"dropdown-menu fade-up m-0\"> 
                        <a href=\"{{ path('groups_getall', {'userid': 1}) }}\" class=\"dropdown-item\">Groups</a>
                        <a href=\"{{ path('select_receiver', {'user1Id': 1}) }}\"  class=\"dropdown-item\">Conversation</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
          
<!-- Add the shopping basket and notification icons here -->
<a href=\"{{ path('view_cart') }}\" class=\"nav-item nav-link\" style=\"text-decoration: none;\">
    <button style=\"background-color: white; border: none\">
        <i class=\"fas fa-shopping-basket fa-lg\" style=\"color: #854e0f;\"></i>
    </button>
</a>


           


        </div>
    </nav>
    <!-- Navbar End -->





        <!-- Content for the body -->
        <!-- Spinner, Topbar, Navbar, and Footer HTML -->



    {% endblock %}
{% block footer %}
 <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Habib Bourgiba street,Ariana,Tunisia<div id=\"map\" style=\"height: 150px; width:150px \"></div></p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 52917622</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>ecoart@info.tn</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">General Carpentry</a>
                    <a class=\"btn btn-link\" href=\"\">Furniture Remodeling</a>
                    <a class=\"btn btn-link\" href=\"\">Wooden Floor</a>
                    <a class=\"btn btn-link\" href=\"\">Wooden Furniture</a>
                    <a class=\"btn btn-link\" href=\"\">Custom Carpentry</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Quick Links</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Our Services</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">Support</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    

                    <div class=\"col-md-6 text-center text-md-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



 {% endblock %}
    {% block javascripts %}
        <!-- JavaScript Libraries -->
        <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
        <script src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
        <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
        <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
        <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
        <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('lib/isotope/isotope.pkgd.min.js') }}\"></script>
        <script src=\"{{ asset('lib/lightbox/js/lightbox.min.js') }}\"></script>
        
        <!-- Template Javascript -->
        <script src=\"{{ asset('js/main.js') }}\"></script>
        <script>
        // Use your desired initial coordinates
    var initialCoordinates = [36.9003, 10.1959];
    var initialZoom = 14;

    // Initialize the map
    var map = L.map('map').setView(initialCoordinates, initialZoom);

    // Add the OpenStreetMap layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
       
    }).addTo(map);

function getWeather() {
    const apiKey = \"07b37dc5bf0427456ba8f735878830bb\";
    const city = \"Gouvernorat de l’Ariana, TN\";
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=\${city}&appid=\${apiKey}`;

    // Make a fetch request to the weather API
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Process the weather data
            const temperature = data.main.temp - 273.15; // Convert from Kelvin to Celsius
            const condition = data.weather[0].description;

       
            console.log(`Current Temperature: \${round(temperature)}°C`);
            console.log(`Weather Condition: \${condition}`);
           
            document.getElementById('weather-info').innerText = `Temperature: \${round(temperature)}°C`;
         const iconElement = document.getElementById('WeatherIcon');
          const weatherIconSrc = getWeatherIconSrc(data.weather[0].description);
            iconElement.src = weatherIconSrc;

        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
        });
}

// Function to round the temperature
function round(number) {
    return Math.round(number * 10) / 10;
}

// Call the getWeather function
getWeather();

        function getWeatherIconSrc(weatherCondition) {
            // You need to customize this mapping based on your specific use case
            // Below is just an example, and you may need to add more conditions/icons
            if (weatherCondition.toLowerCase().includes('cloud')) {
                return '{{ asset(\"img/cloudy.png\") }}'; // Use the asset function
            } else if (weatherCondition.toLowerCase().includes('sun')) {
                return '{{ asset(\"img/sun.png\") }}'; // Use the asset function
            } else if (weatherCondition.toLowerCase().includes('rain')) {
                return '{{ asset(\"img/rain.png\") }}'; // Use the asset function
            } else {
                return '{{ asset(\"img/sun.png\") }}'; // Use the asset function
            }
        }


</script>
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\base.html.twig");
    }
}
