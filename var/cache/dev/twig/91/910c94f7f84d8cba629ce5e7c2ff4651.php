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

/* formation/oneformation.html.twig */
class __TwigTemplate_abe11510c36dce04464533f9271341b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/oneformation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/oneformation.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        echo "</h1>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Additional content if needed -->
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 7, $this->source); })()), "video", [], "any", false, false, false, 7))) {
            // line 8
            echo "        <video controls width=\"560\" height=\"315\">
            <source src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 9, $this->source); })()), "video", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    ";
        } else {
            // line 13
            echo "        No Video
    ";
        }
        // line 15
        echo "
    <!-- Facebook Share Button -->
    <button onclick=\"shareOnFacebook()\">Share on Facebook</button>

    <script>
        function shareOnFacebook() {
            // Replace YOUR_APP_ID with your Facebook App ID
            var facebookAppId = '788068436664746';

            // Replace f.title, f.description, and f.video with your content
            var title = '";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), "html", null, true);
        echo "';
            var description = '";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "';
            var videoUrl = '";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "video", [], "any", false, false, false, 27))), "html", null, true);
        echo "';

            // Construct the Facebook share URL with the feed dialog
            var facebookShareUrl = 'https://www.facebook.com/dialog/feed?app_id=' + facebookAppId +
                '&display=popup' +
                '&link=' + encodeURIComponent(window.location.href) +
                '&picture=' + encodeURIComponent(videoUrl) +
                '&name=' + encodeURIComponent(title) +
                '&description=' + encodeURIComponent(description);

            // Open a new window for sharing
            window.open(facebookShareUrl, '_blank', 'width=600,height=400');
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formation/oneformation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  107 => 26,  103 => 25,  91 => 15,  87 => 13,  80 => 9,  77 => 8,  75 => 7,  71 => 6,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <h1 class=\"text-center\">{{ f.titre }}</h1>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Additional content if needed -->
    <p>{{ f.description }}</p>
    {% if f.video is not null %}
        <video controls width=\"560\" height=\"315\">
            <source src=\"{{ asset('uploads/' ~ f.video) }}\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    {% else %}
        No Video
    {% endif %}

    <!-- Facebook Share Button -->
    <button onclick=\"shareOnFacebook()\">Share on Facebook</button>

    <script>
        function shareOnFacebook() {
            // Replace YOUR_APP_ID with your Facebook App ID
            var facebookAppId = '788068436664746';

            // Replace f.title, f.description, and f.video with your content
            var title = '{{ f.titre }}';
            var description = '{{ f.description }}';
            var videoUrl = '{{ asset('uploads/' ~ f.video) }}';

            // Construct the Facebook share URL with the feed dialog
            var facebookShareUrl = 'https://www.facebook.com/dialog/feed?app_id=' + facebookAppId +
                '&display=popup' +
                '&link=' + encodeURIComponent(window.location.href) +
                '&picture=' + encodeURIComponent(videoUrl) +
                '&name=' + encodeURIComponent(title) +
                '&description=' + encodeURIComponent(description);

            // Open a new window for sharing
            window.open(facebookShareUrl, '_blank', 'width=600,height=400');
        }
    </script>
{% endblock %}
", "formation/oneformation.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\formation\\oneformation.html.twig");
    }
}
