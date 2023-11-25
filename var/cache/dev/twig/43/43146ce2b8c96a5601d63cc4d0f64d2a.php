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

/* conversation/select_receiver.html.twig */
class __TwigTemplate_fa6e52a1bee88c1333d9c1eb638bb5b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/select_receiver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/select_receiver.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conversation/select_receiver.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Select Receiver";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
   <script>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "flashbag", [], "any", false, false, false, 8), "all", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "         
            ";
                // line 11
                $context["backgroundColor"] = (((twig_get_attribute($this->env, $this->source, ["success" => "#28a745", "error" => "#dc3545", "warning" => "#ffc107", "info" => "#17a2b8"],                 // line 16
$context["label"], [], "array", true, true, false, 12) &&  !(null === twig_get_attribute($this->env, $this->source, ["success" => "#28a745", "error" => "#dc3545", "warning" => "#ffc107", "info" => "#17a2b8"], $context["label"], [], "array", false, false, false, 12)))) ? (twig_get_attribute($this->env, $this->source, ["success" => "#28a745", "error" => "#dc3545", "warning" => "#ffc107", "info" => "#17a2b8"], $context["label"], [], "array", false, false, false, 12)) : ("#6c757d"));
                echo " 

            Toastify({
                text: '";
                // line 19
                echo $context["message"];
                echo "',
                duration: 3000, 
                close: true,
                gravity: 'top',  
                position: 'right',  
                backgroundColor: '";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "', 
            }).showToast();
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</script>
    <div style=\"text-align: center; padding: 20px; background-color: #f5f5f5; border-radius: 10px;\">
        <h1 style=\"color: #3498db;\">Select Receiver</h1>

        <form id=\"selectReceiverForm\" method=\"post\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_conversations", ["user1Id" => (isset($context["user1Id"]) || array_key_exists("user1Id", $context) ? $context["user1Id"] : (function () { throw new RuntimeError('Variable "user1Id" does not exist.', 32, $this->source); })()), "user2Id" => "__USER2_ID__"]), "html", null, true);
        echo "\" style=\"max-width: 400px; margin: 0 auto;\">

            <label for=\"receiverId\" style=\"display: block; margin-bottom: 10px;\">Select a User to Send a Message:</label>
            
            <select id=\"receiverId\" name=\"receiverId\" style=\"width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </select><br><br>

            <button type=\"button\" onclick=\"openConversation()\" style=\"background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Open Conversation</button>
        </form>
    </div>

    <script>
        function openConversation() {
            // Get the selected user ID
            var selectedUserId = document.getElementById('receiverId').value;

            // Update the form action with the selected user ID
            var form = document.getElementById('selectReceiverForm');
            form.action = form.action.replace('__USER2_ID__', selectedUserId);

            // Submit the form
            form.submit();
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conversation/select_receiver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  154 => 38,  150 => 37,  142 => 32,  136 => 28,  130 => 27,  121 => 24,  113 => 19,  107 => 16,  106 => 11,  103 => 10,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Select Receiver{% endblock %}

{% block body %}
    {{ parent() }}
   <script>
    {% for label, messages in app.session.flashbag.all() %}
        {% for message in messages %}
         
            {% set backgroundColor = {
                'success': '#28a745', 
                'error': '#dc3545',    
                'warning': '#ffc107',  
                'info': '#17a2b8',    
            }[label] ?? '#6c757d' %} 

            Toastify({
                text: '{{ message|raw }}',
                duration: 3000, 
                close: true,
                gravity: 'top',  
                position: 'right',  
                backgroundColor: '{{ backgroundColor }}', 
            }).showToast();
        {% endfor %}
    {% endfor %}
</script>
    <div style=\"text-align: center; padding: 20px; background-color: #f5f5f5; border-radius: 10px;\">
        <h1 style=\"color: #3498db;\">Select Receiver</h1>

        <form id=\"selectReceiverForm\" method=\"post\" action=\"{{ path('display_conversations', {'user1Id': user1Id, 'user2Id': '__USER2_ID__'}) }}\" style=\"max-width: 400px; margin: 0 auto;\">

            <label for=\"receiverId\" style=\"display: block; margin-bottom: 10px;\">Select a User to Send a Message:</label>
            
            <select id=\"receiverId\" name=\"receiverId\" style=\"width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;\">
                {% for user in users %}
                    <option value=\"{{ user.id }}\">{{ user.username }}</option>
                {% endfor %}
            </select><br><br>

            <button type=\"button\" onclick=\"openConversation()\" style=\"background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Open Conversation</button>
        </form>
    </div>

    <script>
        function openConversation() {
            // Get the selected user ID
            var selectedUserId = document.getElementById('receiverId').value;

            // Update the form action with the selected user ID
            var form = document.getElementById('selectReceiverForm');
            form.action = form.action.replace('__USER2_ID__', selectedUserId);

            // Submit the form
            form.submit();
        }
    </script>
{% endblock %}
", "conversation/select_receiver.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\conversation\\select_receiver.html.twig");
    }
}
