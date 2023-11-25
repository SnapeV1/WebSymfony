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

/* group/chatbot.html.twig */
class __TwigTemplate_b8761e1ad5182da04acb6a5d898ae80b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/chatbot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/chatbot.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Chatbot Support Assistance</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        #chatbot-icon {
            position: fixed;
            bottom: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        #chatbot-popup {
            display: none;
            position: fixed;
            bottom: 70px;
            right: 10px;
            max-width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1;
        }

        #chat-container {
            padding: 10px;
            height: 200px;
            overflow-y: scroll;
        }

        #user-input {
            display: flex;
            padding: 10px;
        }

        #user-message {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #send-button {
            margin-left: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 3px;
            cursor: pointer;
        }

        #close-chatbot {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Chatbot Icon -->
<div id=\"chatbot-icon\" onclick=\"toggleChatbotPopup()\">🤖</div>

<!-- Chatbot Popup -->
<div id=\"chatbot-popup\">
    <div id=\"chat-container\"></div>
    <div id=\"user-input\">
        <input type=\"text\" id=\"user-message\" placeholder=\"Type your message...\" oninput=\"enableSendButton()\">
        <button id=\"send-button\" onclick=\"sendMessage()\" disabled>Send</button>
    </div>
    <div id=\"close-chatbot\" onclick=\"toggleChatbotPopup()\">Close</div>
</div>

<script>
    function toggleChatbotPopup() {
        var popup = document.getElementById('chatbot-popup');
        popup.style.display = (popup.style.display === 'none' || popup.style.display === '') ? 'block' : 'none';
    }

    function sendMessage() {
        var userMessage = document.getElementById('user-message').value;
        displayMessage('user', userMessage);
        var botResponse = simulateChatbotResponse(userMessage);
        displayMessage('bot', botResponse);
        document.getElementById('user-message').value = '';
        disableSendButton();
    }

    function displayMessage(sender, message) {
        var chatContainer = document.getElementById('chat-container');
        var messageElement = document.createElement('div');
        messageElement.className = 'message ' + sender + '-message';
        messageElement.textContent = message;
        chatContainer.appendChild(messageElement);
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

 function simulateChatbotResponse(userMessage) {
    // Check if the user's message includes an introduction query
    if (userMessage.toLowerCase().includes('hello') || userMessage.toLowerCase().includes('hi')|| userMessage.toLowerCase().includes('hey')) {
        return \"Hi there! I'm a virtual assistant. How can I assist you today?\";
    }

    // Check if the user's message is related to basic information
    if (userMessage.toLowerCase().includes('name') || userMessage.toLowerCase().includes('who are you')) {
        return \"I'm a virtual assistant here to help. You can call me Marty. What can I do for you?\";
    }

    // Check if the word \"time\" exists in the user's message
    if (userMessage.toLowerCase().includes('time')) {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();

        // Format the time as HH:MM
        var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes;

        return 'The current time is: ' + formattedTime;
    } 
    
     if (
        userMessage.toLowerCase().includes('interesting') ||
        userMessage.toLowerCase().includes('fun fact') ||
        userMessage.toLowerCase().includes('fact') ||
        userMessage.toLowerCase().includes('something interesting')
    ) {
        // Generate or retrieve a fun fact
        var funFact = getFunFact();

        return \"Did you know that \" + funFact + \"? Anything else you'd like to learn?\";
    }
    else {
        return 'I received your message: ' + userMessage;
    }

}



    function enableSendButton() {
        var messageInput = document.getElementById('user-message');
        var sendButton = document.getElementById('send-button');
        sendButton.disabled = !messageInput.value.trim();
    }

    function disableSendButton() {
        var sendButton = document.getElementById('send-button');
        sendButton.disabled = true;
    }
    function getFunFact() {
    var funFacts = [
        \"The Eiffel Tower can be 15 cm taller during the summer.\",
        \"Honey never spoils. Archaeologists have found pots of honey in ancient Egyptian tombs that are over 3,000 years old and still perfectly edible.\",
        \"A group of flamingos is called a 'flamboyance.'\",
        \"The world's largest desert is Antarctica.\",
        \"Bananas are berries, but strawberries aren't.\",
        \"The shortest war in history was between Britain and Zanzibar on August 27, 1896. Zanzibar surrendered after 38 minutes.\",
    ];

    // Randomly select a fun fact
    var randomIndex = Math.floor(Math.random() * funFacts.length);
    return funFacts[randomIndex];
}
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "group/chatbot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Chatbot Support Assistance</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        #chatbot-icon {
            position: fixed;
            bottom: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        #chatbot-popup {
            display: none;
            position: fixed;
            bottom: 70px;
            right: 10px;
            max-width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1;
        }

        #chat-container {
            padding: 10px;
            height: 200px;
            overflow-y: scroll;
        }

        #user-input {
            display: flex;
            padding: 10px;
        }

        #user-message {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #send-button {
            margin-left: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 3px;
            cursor: pointer;
        }

        #close-chatbot {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Chatbot Icon -->
<div id=\"chatbot-icon\" onclick=\"toggleChatbotPopup()\">🤖</div>

<!-- Chatbot Popup -->
<div id=\"chatbot-popup\">
    <div id=\"chat-container\"></div>
    <div id=\"user-input\">
        <input type=\"text\" id=\"user-message\" placeholder=\"Type your message...\" oninput=\"enableSendButton()\">
        <button id=\"send-button\" onclick=\"sendMessage()\" disabled>Send</button>
    </div>
    <div id=\"close-chatbot\" onclick=\"toggleChatbotPopup()\">Close</div>
</div>

<script>
    function toggleChatbotPopup() {
        var popup = document.getElementById('chatbot-popup');
        popup.style.display = (popup.style.display === 'none' || popup.style.display === '') ? 'block' : 'none';
    }

    function sendMessage() {
        var userMessage = document.getElementById('user-message').value;
        displayMessage('user', userMessage);
        var botResponse = simulateChatbotResponse(userMessage);
        displayMessage('bot', botResponse);
        document.getElementById('user-message').value = '';
        disableSendButton();
    }

    function displayMessage(sender, message) {
        var chatContainer = document.getElementById('chat-container');
        var messageElement = document.createElement('div');
        messageElement.className = 'message ' + sender + '-message';
        messageElement.textContent = message;
        chatContainer.appendChild(messageElement);
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

 function simulateChatbotResponse(userMessage) {
    // Check if the user's message includes an introduction query
    if (userMessage.toLowerCase().includes('hello') || userMessage.toLowerCase().includes('hi')|| userMessage.toLowerCase().includes('hey')) {
        return \"Hi there! I'm a virtual assistant. How can I assist you today?\";
    }

    // Check if the user's message is related to basic information
    if (userMessage.toLowerCase().includes('name') || userMessage.toLowerCase().includes('who are you')) {
        return \"I'm a virtual assistant here to help. You can call me Marty. What can I do for you?\";
    }

    // Check if the word \"time\" exists in the user's message
    if (userMessage.toLowerCase().includes('time')) {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();

        // Format the time as HH:MM
        var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes;

        return 'The current time is: ' + formattedTime;
    } 
    
     if (
        userMessage.toLowerCase().includes('interesting') ||
        userMessage.toLowerCase().includes('fun fact') ||
        userMessage.toLowerCase().includes('fact') ||
        userMessage.toLowerCase().includes('something interesting')
    ) {
        // Generate or retrieve a fun fact
        var funFact = getFunFact();

        return \"Did you know that \" + funFact + \"? Anything else you'd like to learn?\";
    }
    else {
        return 'I received your message: ' + userMessage;
    }

}



    function enableSendButton() {
        var messageInput = document.getElementById('user-message');
        var sendButton = document.getElementById('send-button');
        sendButton.disabled = !messageInput.value.trim();
    }

    function disableSendButton() {
        var sendButton = document.getElementById('send-button');
        sendButton.disabled = true;
    }
    function getFunFact() {
    var funFacts = [
        \"The Eiffel Tower can be 15 cm taller during the summer.\",
        \"Honey never spoils. Archaeologists have found pots of honey in ancient Egyptian tombs that are over 3,000 years old and still perfectly edible.\",
        \"A group of flamingos is called a 'flamboyance.'\",
        \"The world's largest desert is Antarctica.\",
        \"Bananas are berries, but strawberries aren't.\",
        \"The shortest war in history was between Britain and Zanzibar on August 27, 1896. Zanzibar surrendered after 38 minutes.\",
    ];

    // Randomly select a fun fact
    var randomIndex = Math.floor(Math.random() * funFacts.length);
    return funFacts[randomIndex];
}
</script>

</body>
</html>
", "group/chatbot.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\group\\chatbot.html.twig");
    }
}
