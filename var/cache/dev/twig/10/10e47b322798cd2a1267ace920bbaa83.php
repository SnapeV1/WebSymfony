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

/* group/getall.html.twig */
class __TwigTemplate_0a7e36a37ca48583f58a2158a93c2049 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "group/getall.html.twig", 1);
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

    <div style=\"margin-top: 50px; animation: fadeInUp 1s ease;\">
        <h1 style=\"text-align: center; color: #C87A19; transform: rotate(-5deg); transition: transform 0.3s;\">List of Groups</h1>
        ";
        // line 8
        if (twig_test_empty((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <p style=\"text-align: center; animation: fadeIn 1s ease;\">Maybe create a group?</p>
        ";
        } else {
            // line 11
            echo "            <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px; animation: fadeIn 1s ease; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);\">
                <thead style=\"background-color: #f2f2f2; transition: background-color 0.3s;\">
                    <tr>
                        <th style=\"padding: 10px;\">Group Name</th>
                        <th style=\"padding: 10px;\">Size</th>
                        <th style=\"padding: 10px;\">Logo</th>
                        <th style=\"padding: 10px;\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 22
                echo "                        <tr style=\"border-bottom: 1px solid #ccc; transition: background-color 0.3s;\">
                            <td style=\"padding: 10px; transition: color 0.3s;\" class=\"group-name\">
                                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("members_getall", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 24), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 24, $this->source); })())]), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #5D8233; position: relative; display: inline-block;\">
                                    ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "
                                    <span class=\"underline\"></span>
                                </a>
                            </td>
                            <td style=\"padding: 10px; transition: color 0.3s;\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "size", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                            <td style=\"padding: 10px; transition: transform 0.3s;\">
                                <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 31)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 31), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 31)))), "html", null, true);
                echo "\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1); transition: transform 0.3s;\">
                            </td>
                            <td style=\"padding: 10px; transition: transform 0.3s;\">
                                <a href=\"#\" onclick=\"return editGroup(";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo ")\" style=\"padding: 5px 10px; border-radius: 5px; background-color: #C87A19; color: white; transition: background-color 0.3s; margin:5px;\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <a href=\"#\" onclick=\"return confirmDelete(";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo ")\" style=\"padding: 5px 10px; border-radius: 5px; background-color: #C87A19; color: white; transition: background-color 0.3s;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>

                        <tr id=\"editForm_";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" style=\"display: none; transition: background-color 0.3s;\">
                            <td colspan=\"4\" style=\"padding: 10px;\">
                                <form action=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_group", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 45), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 45, $this->source); })())]), "html", null, true);
                echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"text\" name=\"group_name\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 46), "html", null, true);
                echo "\" />
                                    
                                    <div class=\"d-flex justify-content-end mt-3\">
                                        <button type=\"submit\" class=\"btn btn-primary btns\" style=\"background-color: #5D8233; color: white; border: none; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s;\">
                                            <i class=\"fas fa-save\"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </tbody>
            </table>
        ";
        }
        // line 60
        echo "    </div>
    
    <div style=\"text-align: center; margin-top: 20px; animation: pulse 1.5s infinite;\">
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addgroup", ["userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 63, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary btns\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white; background-color: #C87A19; transition: background-color 0.3s;\">
            <i class=\"fas fa-plus\"></i> Add Group
        </a>
    </div>

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
                window.location.href = \"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletegroup", ["id" => "GROUP_ID", "userid" => "USER_ID"]), "html", null, true);
        echo "\".replace('GROUP_ID', groupId).replace('USER_ID', ";
        echo twig_escape_filter($this->env, (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ");
            }
            return false;
        }

        function editGroup(groupId) {
            var editForm = document.getElementById(\"editForm_\" + groupId);

            if (editForm) {
                editForm.style.display = \"table-row\"; // Display the edit form
            }

            return false;
        }
    </script>

    <style>
        /* Adding some styles for better appearance */
        table {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 10px;
        }

        th, td {
            text-align: center;
            padding: 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        td img {
            transition: transform 0.3s;
        }

        tbody tr:hover td img {
            transform: scale(1.1);
        }

        a:hover {
            text-decoration: none;
        }

        .btn-primary:hover, .btn-danger:hover, .btns:hover {
            background-color: #4C6E2A; /* Change to your desired hover color */
        }

        .btn-primary, .btn-danger, .btns {
            cursor: pointer;
        }

        .group-name:hover {
            color: #C87A19; /* Change to your desired hover color */
            transition: color 0.3s;
        }

        /* Underline animation */
        .group-name::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #C87A19; /* Change to your desired hover color */
            transition: width 0.8s;
        }

        .group-name:hover::after {
            width: 100%;
        }

        /* Pulse animation for the \"Add Group\" button */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>

    <style>
        /* Adding keyframes for animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "group/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 71,  175 => 63,  170 => 60,  165 => 57,  148 => 46,  144 => 45,  139 => 43,  130 => 37,  124 => 34,  118 => 31,  113 => 29,  106 => 25,  102 => 24,  98 => 22,  94 => 21,  82 => 11,  78 => 9,  76 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div style=\"margin-top: 50px; animation: fadeInUp 1s ease;\">
        <h1 style=\"text-align: center; color: #C87A19; transform: rotate(-5deg); transition: transform 0.3s;\">List of Groups</h1>
        {% if groups is empty %}
            <p style=\"text-align: center; animation: fadeIn 1s ease;\">Maybe create a group?</p>
        {% else %}
            <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px; animation: fadeIn 1s ease; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);\">
                <thead style=\"background-color: #f2f2f2; transition: background-color 0.3s;\">
                    <tr>
                        <th style=\"padding: 10px;\">Group Name</th>
                        <th style=\"padding: 10px;\">Size</th>
                        <th style=\"padding: 10px;\">Logo</th>
                        <th style=\"padding: 10px;\"></th>
                    </tr>
                </thead>
                <tbody>
                    {% for group in groups %}
                        <tr style=\"border-bottom: 1px solid #ccc; transition: background-color 0.3s;\">
                            <td style=\"padding: 10px; transition: color 0.3s;\" class=\"group-name\">
                                <a href=\"{{ path('members_getall', {'id': group.id, 'userid': userid}) }}\" style=\"text-decoration: none; color: #5D8233; position: relative; display: inline-block;\">
                                    {{ group.nom }}
                                    <span class=\"underline\"></span>
                                </a>
                            </td>
                            <td style=\"padding: 10px; transition: color 0.3s;\">{{ group.size }}</td>
                            <td style=\"padding: 10px; transition: transform 0.3s;\">
                                <img src=\"{{ group.logo starts with 'C:\\\\' ? asset('uploads/' ~ group.logo|split('\\\\')|last) : asset(group.logo) }}\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1); transition: transform 0.3s;\">
                            </td>
                            <td style=\"padding: 10px; transition: transform 0.3s;\">
                                <a href=\"#\" onclick=\"return editGroup({{ group.id }})\" style=\"padding: 5px 10px; border-radius: 5px; background-color: #C87A19; color: white; transition: background-color 0.3s; margin:5px;\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <a href=\"#\" onclick=\"return confirmDelete({{ group.id }})\" style=\"padding: 5px 10px; border-radius: 5px; background-color: #C87A19; color: white; transition: background-color 0.3s;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>

                        <tr id=\"editForm_{{ group.id }}\" style=\"display: none; transition: background-color 0.3s;\">
                            <td colspan=\"4\" style=\"padding: 10px;\">
                                <form action=\"{{ path('update_group', {'id': group.id, 'userid': userid}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"text\" name=\"group_name\" value=\"{{ group.nom }}\" />
                                    
                                    <div class=\"d-flex justify-content-end mt-3\">
                                        <button type=\"submit\" class=\"btn btn-primary btns\" style=\"background-color: #5D8233; color: white; border: none; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s;\">
                                            <i class=\"fas fa-save\"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
    
    <div style=\"text-align: center; margin-top: 20px; animation: pulse 1.5s infinite;\">
        <a href=\"{{ path('addgroup', {'userid': userid}) }}\" class=\"btn btn-primary btns\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white; background-color: #C87A19; transition: background-color 0.3s;\">
            <i class=\"fas fa-plus\"></i> Add Group
        </a>
    </div>

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
                window.location.href = \"{{ path('deletegroup', {'id': 'GROUP_ID', 'userid': 'USER_ID'}) }}\".replace('GROUP_ID', groupId).replace('USER_ID', {{ userid }});
            }
            return false;
        }

        function editGroup(groupId) {
            var editForm = document.getElementById(\"editForm_\" + groupId);

            if (editForm) {
                editForm.style.display = \"table-row\"; // Display the edit form
            }

            return false;
        }
    </script>

    <style>
        /* Adding some styles for better appearance */
        table {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 10px;
        }

        th, td {
            text-align: center;
            padding: 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        td img {
            transition: transform 0.3s;
        }

        tbody tr:hover td img {
            transform: scale(1.1);
        }

        a:hover {
            text-decoration: none;
        }

        .btn-primary:hover, .btn-danger:hover, .btns:hover {
            background-color: #4C6E2A; /* Change to your desired hover color */
        }

        .btn-primary, .btn-danger, .btns {
            cursor: pointer;
        }

        .group-name:hover {
            color: #C87A19; /* Change to your desired hover color */
            transition: color 0.3s;
        }

        /* Underline animation */
        .group-name::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #C87A19; /* Change to your desired hover color */
            transition: width 0.8s;
        }

        .group-name:hover::after {
            width: 100%;
        }

        /* Pulse animation for the \"Add Group\" button */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>

    <style>
        /* Adding keyframes for animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
{% endblock %}
", "group/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\group\\getall.html.twig");
    }
}
