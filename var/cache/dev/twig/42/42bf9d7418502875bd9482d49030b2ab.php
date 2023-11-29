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

/* boutique/notif.html.twig */
class __TwigTemplate_bb1bba7629892de84426c0ab5cc5ecdd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boutique/notif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boutique/notif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boutique/notif.html.twig", 1);
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
        <!-- Your existing code for displaying success and warning messages -->
        
        <!-- Notification icon with badge -->
        <button id=\"notification-icon\" class=\"btn btn-secondary\">
            ";
        // line 10
        if (((isset($context["unreadNotificationCount"]) || array_key_exists("unreadNotificationCount", $context) ? $context["unreadNotificationCount"] : (function () { throw new RuntimeError('Variable "unreadNotificationCount" does not exist.', 10, $this->source); })()) > 0)) {
            // line 11
            echo "                <span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, (isset($context["unreadNotificationCount"]) || array_key_exists("unreadNotificationCount", $context) ? $context["unreadNotificationCount"] : (function () { throw new RuntimeError('Variable "unreadNotificationCount" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</span>
            ";
        }
        // line 13
        echo "            <i class=\"fas fa-bell\"></i>
        </button>

        <!-- Notification list (initially hidden) -->
        <div id=\"notification-list\" style=\"display: none;\">
            <!-- Notification items will be dynamically added here -->
        </div>

        <!-- Your existing code for product filtering and display -->

    </div>

    <!-- Your existing scripts for product filtering -->

    <!-- Script to toggle visibility of the notification list and fetch notifications -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var notificationIcon = document.getElementById('notification-icon');
            var notificationList = document.getElementById('notification-list');

            // Toggle the visibility of the notification list
            notificationIcon.addEventListener('click', function () {
                if (notificationList.style.display === 'none' || notificationList.style.display === '') {
                    // Show the notification list
                    notificationList.style.display = 'block';

                    // Fetch notifications using AJAX
                    fetchNotifications(\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fetch_notifications");
        echo "\");
                } else {
                    // Hide the notification list
                    notificationList.style.display = 'none';
                }
            });

            // Function to fetch notifications using AJAX
            function fetchNotifications(url) {
                fetch(url)
                    .then(response => response.json())
                    .then(data => updateNotificationList(data))
                    .catch(error => console.error('Error fetching notifications:', error));
            }

            // Function to update the notification list
            function updateNotificationList(data) {
                var notifications = data.notifications;
                var notificationListContainer = document.getElementById('notification-list');
                notificationListContainer.innerHTML = '';

                notifications.forEach(function (notification) {
                    var notificationItem = document.createElement('div');
                    notificationItem.textContent = notification.content;
                    notificationListContainer.appendChild(notificationItem);

                    var hrElement = document.createElement('hr');
                    notificationListContainer.appendChild(hrElement);
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
        return "boutique/notif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  86 => 13,  80 => 11,  78 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container mt-5\">
        <!-- Your existing code for displaying success and warning messages -->
        
        <!-- Notification icon with badge -->
        <button id=\"notification-icon\" class=\"btn btn-secondary\">
            {% if unreadNotificationCount > 0 %}
                <span class=\"badge badge-danger\">{{ unreadNotificationCount }}</span>
            {% endif %}
            <i class=\"fas fa-bell\"></i>
        </button>

        <!-- Notification list (initially hidden) -->
        <div id=\"notification-list\" style=\"display: none;\">
            <!-- Notification items will be dynamically added here -->
        </div>

        <!-- Your existing code for product filtering and display -->

    </div>

    <!-- Your existing scripts for product filtering -->

    <!-- Script to toggle visibility of the notification list and fetch notifications -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var notificationIcon = document.getElementById('notification-icon');
            var notificationList = document.getElementById('notification-list');

            // Toggle the visibility of the notification list
            notificationIcon.addEventListener('click', function () {
                if (notificationList.style.display === 'none' || notificationList.style.display === '') {
                    // Show the notification list
                    notificationList.style.display = 'block';

                    // Fetch notifications using AJAX
                    fetchNotifications(\"{{ path('fetch_notifications') }}\");
                } else {
                    // Hide the notification list
                    notificationList.style.display = 'none';
                }
            });

            // Function to fetch notifications using AJAX
            function fetchNotifications(url) {
                fetch(url)
                    .then(response => response.json())
                    .then(data => updateNotificationList(data))
                    .catch(error => console.error('Error fetching notifications:', error));
            }

            // Function to update the notification list
            function updateNotificationList(data) {
                var notifications = data.notifications;
                var notificationListContainer = document.getElementById('notification-list');
                notificationListContainer.innerHTML = '';

                notifications.forEach(function (notification) {
                    var notificationItem = document.createElement('div');
                    notificationItem.textContent = notification.content;
                    notificationListContainer.appendChild(notificationItem);

                    var hrElement = document.createElement('hr');
                    notificationListContainer.appendChild(hrElement);
                });
            }
        });
    </script>
{% endblock %}", "boutique/notif.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\boutique\\notif.html.twig");
    }
}
