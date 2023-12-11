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
    table{
        margin-top:10px;
    }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center; /* Center table content */
            margin:50px;
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
        .edit-button,
        .add-member-button {
            padding: 8px 12px; /* Adjust padding for buttons */
            margin:20px;
            border-radius: 5px;
            border: none; /* Remove border */
            color: #C87A19; /* Set button color */
            cursor: pointer;
            text-decoration: none; /* Remove default link styling */
            transition: background-color 0.3s, color 0.3s;
        }

        .delete-button:hover {
            background-color: #d32f2f; /* Change background color on hover */
            color: white;
        }

        .edit-button:hover {
            background-color: #388e3c; /* Change background color on hover */
            color: white;
        }

        .add-member-button:hover {
            background-color: #C87A19; /* Change background color on hover */
            color: white;
        }

        /* Add some animations to the form and table */
        #addMembersSection,
        table {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1,label{
            margin:15px;
        }
    </style>

    <h1 style=\"text-align: center; color: #C87A19; font-size: 28px;\">Members of the Group</h1>

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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 103
            echo "                <tr>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 104), "getUsername", [], "method", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 105), "getCin", [], "method", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 106), "getEmail", [], "method", false, false, false, 106), "html", null, true);
            echo "</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 107), "getDateNaissance", [], "method", false, false, false, 107), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "getRole", [], "method", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>
                        <form action=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_member", ["groupId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "get", ["id"], "method", false, false, false, 110), "userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 110), "getId", [], "method", false, false, false, 110)]), "html", null, true);
            echo "\" method=\"post\">
                            <button type=\"submit\" class=\"delete-button\">Delete</button>
                        </form>
                        <a href=\"#\" class=\"edit-button\" onclick=\"return editmember(";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 113), "getid", [], "method", false, false, false, 113), "html", null, true);
            echo ")\">Edit</a>
                    </td>
                </tr>

                <tr id=\"editForm_";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 117), "getid", [], "method", false, false, false, 117), "html", null, true);
            echo "\" style=\"display: none;\">
                    <td colspan=\"4\" style=\"padding: 10px;\">

                        <form
                            action=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_member", ["memberid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 121), "getId", [], "method", false, false, false, 121), "groupid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "get", ["id"], "method", false, false, false, 121), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 121, $this->source); })())]), "html", null, true);
            echo "\"
                            method=\"post\">
                            <select name=\"member_role\">
                                <option value=\"Member\">Member</option>
                                <option value=\"Moderator\">Moderator</option>
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
        // line 134
        echo "
        </table>

    </div>

    <div style=\"text-align: center;\">
        <a href=\"javascript:void(0);\" onclick=\"toggleAddMembersSection()\" class=\"add-member-button\">Add Members</a>
    </div>

    <div id=\"addMembersSection\" style=\"display: none; text-align: center;\">
        <br><br>
        <form id=\"add-members-form\" action=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addmember", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "get", ["id"], "method", false, false, false, 145), "userId" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 145, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\"
            onsubmit=\"submitMembers(event)\">
            <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
            <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
            <!-- Additional form fields for member details -->
            <button type=\"submit\"
                style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
        </form>
    </div>

    <div style=\"text-align: center;\">
        <form
            action=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendEmailToAllMembers", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "get", ["id"], "method", false, false, false, 157), "userId" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 157, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
            <label for=\"email-content\" style=\"display: block; margin-bottom: 10px;\">Email Content:</label>
            <textarea id=\"email-content\" name=\"emailContent\" rows=\"4\" cols=\"50\" required></textarea><br><br>

            <button type=\"submit\" class=\"delete-button\">Send Email to All</button>
        </form>
    </div>

    <script>
        CKEDITOR.replace('emailContent');
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
        return array (  265 => 157,  250 => 145,  237 => 134,  218 => 121,  211 => 117,  204 => 113,  198 => 110,  193 => 108,  189 => 107,  185 => 106,  181 => 105,  177 => 104,  174 => 103,  170 => 102,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <script src=\"https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js\"></script>

    <!-- In the head section -->
    <style>
    table{
        margin-top:10px;
    }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center; /* Center table content */
            margin:50px;
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
        .edit-button,
        .add-member-button {
            padding: 8px 12px; /* Adjust padding for buttons */
            margin:20px;
            border-radius: 5px;
            border: none; /* Remove border */
            color: #C87A19; /* Set button color */
            cursor: pointer;
            text-decoration: none; /* Remove default link styling */
            transition: background-color 0.3s, color 0.3s;
        }

        .delete-button:hover {
            background-color: #d32f2f; /* Change background color on hover */
            color: white;
        }

        .edit-button:hover {
            background-color: #388e3c; /* Change background color on hover */
            color: white;
        }

        .add-member-button:hover {
            background-color: #C87A19; /* Change background color on hover */
            color: white;
        }

        /* Add some animations to the form and table */
        #addMembersSection,
        table {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1,label{
            margin:15px;
        }
    </style>

    <h1 style=\"text-align: center; color: #C87A19; font-size: 28px;\">Members of the Group</h1>

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

                        <form
                            action=\"{{ path('update_member', {'memberid': member.getUser().getId(), 'groupid': app.request.get('id'), 'userid': userid}) }}\"
                            method=\"post\">
                            <select name=\"member_role\">
                                <option value=\"Member\">Member</option>
                                <option value=\"Moderator\">Moderator</option>
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
        <form id=\"add-members-form\" action=\"{{ path('addmember', {'id': app.request.get('id'), 'userId': userid}) }}\" method=\"POST\"
            onsubmit=\"submitMembers(event)\">
            <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
            <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
            <!-- Additional form fields for member details -->
            <button type=\"submit\"
                style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
        </form>
    </div>

    <div style=\"text-align: center;\">
        <form
            action=\"{{ path('sendEmailToAllMembers', {'id': app.request.get('id'), 'userId': userid}) }}\" method=\"post\">
            <label for=\"email-content\" style=\"display: block; margin-bottom: 10px;\">Email Content:</label>
            <textarea id=\"email-content\" name=\"emailContent\" rows=\"4\" cols=\"50\" required></textarea><br><br>

            <button type=\"submit\" class=\"delete-button\">Send Email to All</button>
        </form>
    </div>

    <script>
        CKEDITOR.replace('emailContent');
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
    </script>
{% endblock %}
", "membre/members.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\membre\\members.html.twig");
    }
}
