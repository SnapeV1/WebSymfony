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

/* formation/share_formation.html.twig */
class __TwigTemplate_d1b43124fbe35ab323c49cc15f7a77f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/share_formation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/share_formation.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta property=\"og:url\" content=\"https://beanmate.my.canva.site/ecoartformation\" />
    <meta property=\"og:type\" content=\"Formation\" />
    <meta property=\"og:title\" content=\"Formation EcoArt\" />
    <meta property=\"og:description\" content=\"Looking to learn?\" />
    <meta property=\"og:image\" content=\"https://beanmate.my.canva.site/ecoartformation\" />
    <title>Facebook Share Test</title>
</head>
<body>
    <h1>Facebook Share Test</h1>
    <p>This is a test page for Facebook sharing.</p>

    <!-- Facebook SDK script -->
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Facebook Share Button -->
    <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
        <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "formation/share_formation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/test/facebook_share.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta property=\"og:url\" content=\"https://beanmate.my.canva.site/ecoartformation\" />
    <meta property=\"og:type\" content=\"Formation\" />
    <meta property=\"og:title\" content=\"Formation EcoArt\" />
    <meta property=\"og:description\" content=\"Looking to learn?\" />
    <meta property=\"og:image\" content=\"https://beanmate.my.canva.site/ecoartformation\" />
    <title>Facebook Share Test</title>
</head>
<body>
    <h1>Facebook Share Test</h1>
    <p>This is a test page for Facebook sharing.</p>

    <!-- Facebook SDK script -->
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=788068436664746&autoLogAppEvents=1\" nonce=\"none\"></script>

    <!-- Facebook Share Button -->
    <div class=\"fb-share-button\" data-href=\"https://beanmate.my.canva.site/ecoartformation\" data-layout=\"button_count\" data-size=\"small\">
        <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https://beanmate.my.canva.site/ecoartformation\" class=\"fb-xfbml-parse-ignore\">Share</a>
    </div>
</body>
</html>
", "formation/share_formation.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\formation\\share_formation.html.twig");
    }
}
