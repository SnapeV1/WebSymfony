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

/* membre/members.html.twig */
class __TwigTemplate_ca039e2c49272f5eb726d71fd1e39bec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/members.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/members.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/members.html.twig", 1);
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
    <script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script>

    <!-- In the head section -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center; /* Center table content */
        }

        th, td {
            padding: 8px;
            text-align: center; /* Center table cell content */
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        .display {
            text-align: center;
        }
      .delete-button,
    .edit-button {
        padding: 8px 12px; /* Adjust padding for both buttons */
        border-radius: 5px;
        border: none; /* Remove border */
        color: black;
        cursor: pointer;
        text-decoration: none; /* Remove default link styling */
    }

    .delete-button {
        
        margin-bottom: 15px; /* Margin between the buttons */
    }

    .edit-button {
       
        margin-bottom: 150px; /* Increased margin for more spacing */
    }

    .delete-button:hover {
        background-color: #d32f2f; /* Change background color on hover */
    }

    .edit-button:hover {
        background-color: #388e3c; /* Change background color on hover */
        color: black;
    }
    </style>

    <h1 style=\"text-align: center;\">Members of the Group</h1>
  
<div style=\"display: flex; justify-content: center;\">
    <table style=\"width: 70%;\">
        <tr>
            <th>Username</th>
            <th>CIN</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Role</th>
            <th></th>
        </tr>
      ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 78
            echo "    <tr>
        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 79), "getUsername", [], "method", false, false, false, 79), "html", null, true);
            echo "</td>
        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 80), "getCin", [], "method", false, false, false, 80), "html", null, true);
            echo "</td>
        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 81), "getEmail", [], "method", false, false, false, 81), "html", null, true);
            echo "</td>
        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 82), "getDateNaissance", [], "method", false, false, false, 82), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "getRole", [], "method", false, false, false, 83), "html", null, true);
            echo "</td>
       <td>
    <form action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_member", ["groupId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "get", ["id"], "method", false, false, false, 85), "userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 85), "getId", [], "method", false, false, false, 85)]), "html", null, true);
            echo "\" method=\"post\">
        <button type=\"submit\" class=\"delete-button\">Delete</button>
    </form>
    <a href=\"#\" class=\"edit-button\" onclick=\"return editmember(";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 88), "getid", [], "method", false, false, false, 88), "html", null, true);
            echo ")\">Edit</a>
</td>





       
    </tr>


<tr id=\"editForm_";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 99), "getid", [], "method", false, false, false, 99), "html", null, true);
            echo "\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
<form action=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_member", ["memberid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 102), "getId", [], "method", false, false, false, 102), "groupid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "get", ["id"], "method", false, false, false, 102), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 102, $this->source); })())]), "html", null, true);
            echo "\" method=\"post\">   
   <select name=\"member_role\">
   <option value=\"Member\">Member</option>
    <option value=\"Moderator\" >Moderator</option>
    
</select>

    <button type=\"submit\">Save</button>
</form>
    </td>
</tr>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
           
    </table>
    
</div>

<div style=\"text-align: center;\">
    <a href=\"javascript:void(0);\" onclick=\"toggleAddMembersSection()\" class=\"add-member-button\">Add Members</a>
</div>
<div id=\"addMembersSection\" style=\"display: none; text-align: center;\">
    <br><br>
<form id=\"add-members-form\" action=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addmember", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "get", ["id"], "method", false, false, false, 126), "userId" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 126, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\" onsubmit=\"submitMembers(event)\">
        <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
        <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
        <!-- Additional form fields for member details -->
        <button type=\"submit\" style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
    </form>
</div>
<div style=\"text-align: center;\">
<form action=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendEmailToAllMembers", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "get", ["id"], "method", false, false, false, 134), "userId" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 134, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
    <label for=\"email-content\" style=\"display: block; margin-bottom: 10px;\">Email Content:</label>
    <textarea id=\"email-content\" name=\"emailContent\" rows=\"4\" cols=\"50\" required></textarea><br><br>

    <button type=\"submit\" class=\"delete-button\">Send Email to All</button>
</form>
</div>

<script>
                        CKEDITOR.replace( 'emailContent' );
                </script>



    <script>
function toggleAddMembersSection() {
    var section = document.getElementById('addMembersSection');
    if (section.style.display === 'none') {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
}

function editmember(memberid) {
    var editForm = document.getElementById(\"editForm_\" + memberid);

    if (editForm) {
        editForm.style.display = \"table-row\"; // Display the edit form
    }

    return false;
}



document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.send-email-button').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            var form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', button.getAttribute('data-action'));
            
            document.body.appendChild(form);
            form.submit();
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
        return "membre/members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 134,  231 => 126,  218 => 115,  199 => 102,  193 => 99,  179 => 88,  173 => 85,  168 => 83,  164 => 82,  160 => 81,  156 => 80,  152 => 79,  149 => 78,  145 => 77,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script>

    <!-- In the head section -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center; /* Center table content */
        }

        th, td {
            padding: 8px;
            text-align: center; /* Center table cell content */
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        .display {
            text-align: center;
        }
      .delete-button,
    .edit-button {
        padding: 8px 12px; /* Adjust padding for both buttons */
        border-radius: 5px;
        border: none; /* Remove border */
        color: black;
        cursor: pointer;
        text-decoration: none; /* Remove default link styling */
    }

    .delete-button {
        
        margin-bottom: 15px; /* Margin between the buttons */
    }

    .edit-button {
       
        margin-bottom: 150px; /* Increased margin for more spacing */
    }

    .delete-button:hover {
        background-color: #d32f2f; /* Change background color on hover */
    }

    .edit-button:hover {
        background-color: #388e3c; /* Change background color on hover */
        color: black;
    }
    </style>

    <h1 style=\"text-align: center;\">Members of the Group</h1>
  
<div style=\"display: flex; justify-content: center;\">
    <table style=\"width: 70%;\">
        <tr>
            <th>Username</th>
            <th>CIN</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Role</th>
            <th></th>
        </tr>
      {% for member in members %}
    <tr>
        <td>{{ member.getUser().getUsername() }}</td>
        <td>{{ member.getUser().getCin() }}</td>
        <td>{{ member.getUser().getEmail() }}</td>
        <td>{{ member.getUser().getDateNaissance()|date('Y-m-d') }}</td>
        <td>{{ member.getRole() }}</td>
       <td>
    <form action=\"{{ path('delete_member', {'groupId': app.request.get('id'), 'userId': member.getUser().getId()}) }}\" method=\"post\">
        <button type=\"submit\" class=\"delete-button\">Delete</button>
    </form>
    <a href=\"#\" class=\"edit-button\" onclick=\"return editmember({{ member.getUser().getid() }})\">Edit</a>
</td>





       
    </tr>


<tr id=\"editForm_{{ member.getUser().getid() }}\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
<form action=\"{{ path('update_member', {'memberid': member.getUser().getId(), 'groupid': app.request.get('id'), 'userid': userid}) }}\" method=\"post\">   
   <select name=\"member_role\">
   <option value=\"Member\">Member</option>
    <option value=\"Moderator\" >Moderator</option>
    
</select>

    <button type=\"submit\">Save</button>
</form>
    </td>
</tr>
    
{% endfor %}

           
    </table>
    
</div>

<div style=\"text-align: center;\">
    <a href=\"javascript:void(0);\" onclick=\"toggleAddMembersSection()\" class=\"add-member-button\">Add Members</a>
</div>
<div id=\"addMembersSection\" style=\"display: none; text-align: center;\">
    <br><br>
<form id=\"add-members-form\" action=\"{{ path('addmember', {'id': app.request.get('id'), 'userId': userid}) }}\" method=\"POST\" onsubmit=\"submitMembers(event)\">
        <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
        <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
        <!-- Additional form fields for member details -->
        <button type=\"submit\" style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
    </form>
</div>
<div style=\"text-align: center;\">
<form action=\"{{ path('sendEmailToAllMembers', {'id': app.request.get('id'), 'userId': userid}) }}\" method=\"post\">
    <label for=\"email-content\" style=\"display: block; margin-bottom: 10px;\">Email Content:</label>
    <textarea id=\"email-content\" name=\"emailContent\" rows=\"4\" cols=\"50\" required></textarea><br><br>

    <button type=\"submit\" class=\"delete-button\">Send Email to All</button>
</form>
</div>

<script>
                        CKEDITOR.replace( 'emailContent' );
                </script>



    <script>
function toggleAddMembersSection() {
    var section = document.getElementById('addMembersSection');
    if (section.style.display === 'none') {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
}

function editmember(memberid) {
    var editForm = document.getElementById(\"editForm_\" + memberid);

    if (editForm) {
        editForm.style.display = \"table-row\"; // Display the edit form
    }

    return false;
}



document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.send-email-button').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            var form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', button.getAttribute('data-action'));
            
            document.body.appendChild(form);
            form.submit();
        });
    });
});




</script>
{% endblock %}
", "membre/members.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\HUH\\Project\\WebProject\\templates\\membre\\members.html.twig");
    }
}
