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

    <div style=\"margin-top: 50px;\">
        <h1 style=\"text-align: center; color= \"#C87A19\";\">List of Groups</h1>
        ";
        // line 8
        if (twig_test_empty((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <p style=\"text-align: center;\">Maybe create a group?</p>
        ";
        } else {
            // line 11
            echo "            <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px;\">
                <thead style=\"background-color: #f2f2f2*;\">
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
                echo "                        <tr style=\"border-bottom: 1px solid #ccc;\">
                           <td style=\"padding: 10px;\">
    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("members_getall", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 24), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 24, $this->source); })())]), "html", null, true);
                echo "\" style=\"text-decoration: none; color: bleu ; transition: color 0.3s;\">
        ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "
    </a>
</td>
                            <td style=\"padding: 10px;\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "size", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                            <td style=\"padding: 10px;\">
                                <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 30)) && is_string($__internal_compile_1 = "C:\\") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 30), "\\"))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 30)))), "html", null, true);
                echo "\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                            </td>
                            <td style=\"padding: 10px;\">
                                <a href=\"#\" onclick=\"return editGroup(";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo ")\"  padding: 5px 10px; border-radius: 5px; \">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <a href=\"#\" onclick=\"return confirmDelete(";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo ")\" padding: 5px 10px; border-radius: 5px;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>

                        <tr id=\"editForm_";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" style=\"display: none;\">
                            <td colspan=\"4\" style=\"padding: 10px;\">
                                <form action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_group", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 44), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 44, $this->source); })())]), "html", null, true);
                echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"text\" name=\"group_name\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 45), "html", null, true);
                echo "\" />
                                    
        <div class=\"d-flex justify-content-end mt-3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
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
            // line 56
            echo "                </tbody>
            </table>
        ";
        }
        // line 59
        echo "    </div>
    
    <div style=\"text-align: center; margin-top: 20px;\">
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addgroup", ["userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 62, $this->source); })())]), "html", null, true);
        echo "\"class=\"btn btn-primary\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">
            <i class=\"fas fa-plus\"></i> Add Group
        </a>
    </div>

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
                window.location.href = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletegroup", ["id" => "GROUP_ID", "userid" => "USER_ID"]), "html", null, true);
        echo "\".replace('GROUP_ID', groupId).replace('USER_ID', ";
        echo twig_escape_filter($this->env, (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 70, $this->source); })()), "html", null, true);
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
      .template-color {
        color: bleu; /* Replace with your desired color code */
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
        return array (  185 => 70,  174 => 62,  169 => 59,  164 => 56,  147 => 45,  143 => 44,  138 => 42,  129 => 36,  123 => 33,  117 => 30,  112 => 28,  106 => 25,  102 => 24,  98 => 22,  94 => 21,  82 => 11,  78 => 9,  76 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div style=\"margin-top: 50px;\">
        <h1 style=\"text-align: center; color= \"#C87A19\";\">List of Groups</h1>
        {% if groups is empty %}
            <p style=\"text-align: center;\">Maybe create a group?</p>
        {% else %}
            <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px;\">
                <thead style=\"background-color: #f2f2f2*;\">
                    <tr>
                        <th style=\"padding: 10px;\">Group Name</th>
                        <th style=\"padding: 10px;\">Size</th>
                        <th style=\"padding: 10px;\">Logo</th>
                        <th style=\"padding: 10px;\"></th>
                    </tr>
                </thead>
                <tbody>
                    {% for group in groups %}
                        <tr style=\"border-bottom: 1px solid #ccc;\">
                           <td style=\"padding: 10px;\">
    <a href=\"{{ path('members_getall', {'id': group.id, 'userid': userid}) }}\" style=\"text-decoration: none; color: bleu ; transition: color 0.3s;\">
        {{ group.nom }}
    </a>
</td>
                            <td style=\"padding: 10px;\">{{ group.size }}</td>
                            <td style=\"padding: 10px;\">
                                <img src=\"{{ group.logo starts with 'C:\\\\' ? asset('uploads/' ~ group.logo|split('\\\\')|last) : asset(group.logo) }}\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                            </td>
                            <td style=\"padding: 10px;\">
                                <a href=\"#\" onclick=\"return editGroup({{ group.id }})\"  padding: 5px 10px; border-radius: 5px; \">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <a href=\"#\" onclick=\"return confirmDelete({{ group.id }})\" padding: 5px 10px; border-radius: 5px;\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </a>
                            </td>
                        </tr>

                        <tr id=\"editForm_{{ group.id }}\" style=\"display: none;\">
                            <td colspan=\"4\" style=\"padding: 10px;\">
                                <form action=\"{{ path('update_group', {'id': group.id, 'userid': userid}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"text\" name=\"group_name\" value=\"{{ group.nom }}\" />
                                    
        <div class=\"d-flex justify-content-end mt-3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
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
    
    <div style=\"text-align: center; margin-top: 20px;\">
        <a href=\"{{ path('addgroup', {'userid': userid}) }}\"class=\"btn btn-primary\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">
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
      .template-color {
        color: bleu; /* Replace with your desired color code */
    }
    </style>

{% endblock %}
", "group/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\group\\getall.html.twig");
    }
}
