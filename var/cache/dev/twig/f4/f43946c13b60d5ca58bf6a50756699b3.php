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

/* conversation/index.html.twig */
class __TwigTemplate_5ee14f77174d31087fbbaecf0bcaf002 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conversation/index.html.twig", 1);
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
        echo " 
<!DOCTYPE html>
<html>
<head>

    <title>Conversation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .conversation-container {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user1-column,
        .user2-column {
            width: 48%; /* Adjust width as needed */
        }

        .user1-message,
        .user2-message {
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            position: relative; /* Add relative positioning for absolute delete button */
        }

        .user1-message {
            background-color: #DCF8C6;
        }

        .user2-message {
            background-color: #C2DFFF;
        }

        .message-input {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

.delete-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px; /* Smaller border radius */
    padding: 6px 8px; /* Smaller padding */
    font-size: 7px; /* Smaller font size */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #2980b9;
}


         .send-button {
            width: calc(100% - 22px); /* Full width minus padding and border */
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* Align with the input */
        }

        .send-button:hover {
            background-color: #45a049;
        }

        .username {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script>

  ";
        // line 112
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>Conversation</h1>
   
    <div class=\"conversation-container\">
        <div class=\"user1-column\">
            <div class=\"username\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["username1"]) || array_key_exists("username1", $context) ? $context["username1"] : (function () { throw new RuntimeError('Variable "username1" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "</div>
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 119
            echo "                <div class=\"user1-message\">
                    <button class=\"delete-button\" onclick=\"window.location='";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["conversation"], "idconv", [], "any", false, false, false, 120), "user1Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "get", ["user1Id"], "method", false, false, false, 120), "user2Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "get", ["user2Id"], "method", false, false, false, 120)]), "html", null, true);
            echo "'\">Delete</button>

                    <strong>Date:</strong> ";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "dateMsg", [], "any", false, false, false, 122), "Y-m-d H:i:s"), "html", null, true);
            echo "<br>
                    <strong>Message:</strong> ";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["conversation"], "msg", [], "any", false, false, false, 123);
            echo "<br>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            echo "                <p>No conversations found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        </div>

        <div class=\"user2-column\">
            <div class=\"username\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["username2"]) || array_key_exists("username2", $context) ? $context["username2"] : (function () { throw new RuntimeError('Variable "username2" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "</div>      
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["conversations2"]) || array_key_exists("conversations2", $context) ? $context["conversations2"] : (function () { throw new RuntimeError('Variable "conversations2" does not exist.', 132, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 133
            echo "                <div class=\"user2-message\">
                    <strong>Date:</strong> ";
            // line 134
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "dateMsg", [], "any", false, false, false, 134), "Y-m-d H:i:s"), "html", null, true);
            echo "<br>
                    <strong>Message:</strong> ";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["conversation"], "msg", [], "any", false, false, false, 135);
            echo "<br>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "                <p>No conversations found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "        </div>
    </div>

    <form id=\"idmessage\" onsubmit=\"return validateMessage()\" action=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message", ["user1Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", ["user1Id"], "method", false, false, false, 143), "user2Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", ["user2Id"], "method", false, false, false, 143)]), "html", null, true);
        echo "\" method=\"post\">
      
    <textarea id=\"message\" name=\"message\" class=\"message-input\" placeholder=\"Type your message...\" required></textarea>
     <script>
                        CKEDITOR.replace( 'message' );
                </script>
            <span id=\"errorMessage\" class=\"error-message\"></span>

        <button type=\"submit\" class=\"send-button\">Send Message</button>
    </form>

</body>

<script>

    function validateMessage() {
     
        var messageInput = document.getElementById('message');
        var errorMessageSpan = document.getElementById('errorMessage');
        var cleanedMessage = messageInput.value.trim().replace(/\\s+/g, ' ');

        if (cleanedMessage === '') {
            // Display the error message
            errorMessageSpan.textContent = 'Please enter a valid message.';
            
            // Prevent the form submission
            return false;
        }

      
        return true;
    }







document.addEventListener('DOMContentLoaded', function () {
    // Get the lastDateMsg1 and lastDateMsg2 parameters from the URL
    const urlParams = new URLSearchParams(window.location.search);

    // Assuming you have access to the current user's ID
    const currentUserId = ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["iduser1"]) || array_key_exists("iduser1", $context) ? $context["iduser1"] : (function () { throw new RuntimeError('Variable "iduser1" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ";
    const receiverId = ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["iduser2"]) || array_key_exists("iduser2", $context) ? $context["iduser2"] : (function () { throw new RuntimeError('Variable "iduser2" does not exist.', 188, $this->source); })()), "html", null, true);
        echo ";

    // Format the lastDateMsg1 and lastDateMsg2 as strings
    const formattedLastDateMsg1 = '";
        // line 191
        (((isset($context["lastDateMsg1"]) || array_key_exists("lastDateMsg1", $context) ? $context["lastDateMsg1"] : (function () { throw new RuntimeError('Variable "lastDateMsg1" does not exist.', 191, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastDateMsg1"]) || array_key_exists("lastDateMsg1", $context) ? $context["lastDateMsg1"] : (function () { throw new RuntimeError('Variable "lastDateMsg1" does not exist.', 191, $this->source); })()), "format", ["Y-m-d H:i:s"], "method", false, false, false, 191), "html", null, true))) : (print ("")));
        echo "';
    const formattedLastDateMsg2 = '";
        // line 192
        (((isset($context["lastDateMsg2"]) || array_key_exists("lastDateMsg2", $context) ? $context["lastDateMsg2"] : (function () { throw new RuntimeError('Variable "lastDateMsg2" does not exist.', 192, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastDateMsg2"]) || array_key_exists("lastDateMsg2", $context) ? $context["lastDateMsg2"] : (function () { throw new RuntimeError('Variable "lastDateMsg2" does not exist.', 192, $this->source); })()), "format", ["Y-m-d H:i:s"], "method", false, false, false, 192), "html", null, true))) : (print ("")));
        echo "';

    const eventSource = new EventSource(
        '";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sse_conversations", ["user1Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "request", [], "any", false, false, false, 195), "attributes", [], "any", false, false, false, 195), "get", ["user1Id"], "method", false, false, false, 195), "user2Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "request", [], "any", false, false, false, 195), "attributes", [], "any", false, false, false, 195), "get", ["user2Id"], "method", false, false, false, 195)]), "html", null, true);
        echo "' +
        '?receiverId=' + encodeURIComponent(receiverId)
    );

    // Listen for incoming messages
    eventSource.addEventListener('message', function (event) {
        const eventData = JSON.parse(event.data);

        // Check if the current user is the sender and the other user is the receiver
        if (eventData.reload && eventData.senderId === currentUserId && eventData.receiverId === receiverId) {
            // Log a message to the console
            console.log('Reloading the page...');

            // Reload the page to display the new messages
            location.reload();
        } else 
        {
            // Log a message indicating why the page is not reloaded
            console.log('Not reloading the page.');
        }
    });
});








</script>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conversation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 195,  324 => 192,  320 => 191,  314 => 188,  310 => 187,  263 => 143,  258 => 140,  251 => 138,  243 => 135,  239 => 134,  236 => 133,  231 => 132,  227 => 131,  222 => 128,  215 => 126,  207 => 123,  203 => 122,  198 => 120,  195 => 119,  190 => 118,  186 => 117,  178 => 112,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 
<!DOCTYPE html>
<html>
<head>

    <title>Conversation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .conversation-container {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user1-column,
        .user2-column {
            width: 48%; /* Adjust width as needed */
        }

        .user1-message,
        .user2-message {
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            position: relative; /* Add relative positioning for absolute delete button */
        }

        .user1-message {
            background-color: #DCF8C6;
        }

        .user2-message {
            background-color: #C2DFFF;
        }

        .message-input {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

.delete-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px; /* Smaller border radius */
    padding: 6px 8px; /* Smaller padding */
    font-size: 7px; /* Smaller font size */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #2980b9;
}


         .send-button {
            width: calc(100% - 22px); /* Full width minus padding and border */
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* Align with the input */
        }

        .send-button:hover {
            background-color: #45a049;
        }

        .username {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script>

  {{ parent() }}
    <h1>Conversation</h1>
   
    <div class=\"conversation-container\">
        <div class=\"user1-column\">
            <div class=\"username\">{{ username1 }}</div>
            {% for conversation in conversations %}
                <div class=\"user1-message\">
                    <button class=\"delete-button\" onclick=\"window.location='{{ path('delete_message', {'id': conversation.idconv, 'user1Id': app.request.get('user1Id'), 'user2Id': app.request.get('user2Id')}) }}'\">Delete</button>

                    <strong>Date:</strong> {{ conversation.dateMsg|date('Y-m-d H:i:s') }}<br>
                    <strong>Message:</strong> {{ conversation.msg |raw}}<br>
                </div>
            {% else %}
                <p>No conversations found</p>
            {% endfor %}
        </div>

        <div class=\"user2-column\">
            <div class=\"username\">{{ username2 }}</div>      
            {% for conversation in conversations2|sort %}
                <div class=\"user2-message\">
                    <strong>Date:</strong> {{ conversation.dateMsg|date('Y-m-d H:i:s') }}<br>
                    <strong>Message:</strong> {{ conversation.msg |raw}}<br>
                </div>
            {% else %}
                <p>No conversations found</p>
            {% endfor %}
        </div>
    </div>

    <form id=\"idmessage\" onsubmit=\"return validateMessage()\" action=\"{{ path('send_message', {'user1Id': app.request.attributes.get('user1Id'), 'user2Id': app.request.attributes.get('user2Id') }) }}\" method=\"post\">
      
    <textarea id=\"message\" name=\"message\" class=\"message-input\" placeholder=\"Type your message...\" required></textarea>
     <script>
                        CKEDITOR.replace( 'message' );
                </script>
            <span id=\"errorMessage\" class=\"error-message\"></span>

        <button type=\"submit\" class=\"send-button\">Send Message</button>
    </form>

</body>

<script>

    function validateMessage() {
     
        var messageInput = document.getElementById('message');
        var errorMessageSpan = document.getElementById('errorMessage');
        var cleanedMessage = messageInput.value.trim().replace(/\\s+/g, ' ');

        if (cleanedMessage === '') {
            // Display the error message
            errorMessageSpan.textContent = 'Please enter a valid message.';
            
            // Prevent the form submission
            return false;
        }

      
        return true;
    }







document.addEventListener('DOMContentLoaded', function () {
    // Get the lastDateMsg1 and lastDateMsg2 parameters from the URL
    const urlParams = new URLSearchParams(window.location.search);

    // Assuming you have access to the current user's ID
    const currentUserId = {{ iduser1 }};
    const receiverId = {{ iduser2 }};

    // Format the lastDateMsg1 and lastDateMsg2 as strings
    const formattedLastDateMsg1 = '{{ lastDateMsg1 ? lastDateMsg1.format(\"Y-m-d H:i:s\") : \"\" }}';
    const formattedLastDateMsg2 = '{{ lastDateMsg2 ? lastDateMsg2.format(\"Y-m-d H:i:s\") : \"\" }}';

    const eventSource = new EventSource(
        '{{ path('sse_conversations', {'user1Id': app.request.attributes.get('user1Id'), 'user2Id': app.request.attributes.get('user2Id') }) }}' +
        '?receiverId=' + encodeURIComponent(receiverId)
    );

    // Listen for incoming messages
    eventSource.addEventListener('message', function (event) {
        const eventData = JSON.parse(event.data);

        // Check if the current user is the sender and the other user is the receiver
        if (eventData.reload && eventData.senderId === currentUserId && eventData.receiverId === receiverId) {
            // Log a message to the console
            console.log('Reloading the page...');

            // Reload the page to display the new messages
            location.reload();
        } else 
        {
            // Log a message indicating why the page is not reloaded
            console.log('Not reloading the page.');
        }
    });
});








</script>
</html>
{% endblock %}", "conversation/index.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\conversation\\index.html.twig");
    }
}
