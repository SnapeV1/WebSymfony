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

/* utilisateur/takePicture.html.twig */
class __TwigTemplate_dcd82f82da6549f501c995412f4d758b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/takePicture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/takePicture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/takePicture.html.twig", 2);
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
        $this->displayParentBlock("body", $context, $blocks);
        echo "




<script src=\"";
        // line 9
        echo "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js";
        echo "\"></script>
<script  type=\"text/javascript\" src=\"";
        // line 10
        echo "https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js";
        echo "\"></script>
            


            <div class=\"container\">\t
  <div class=\"row\">
\t<div class=\"col-lg-6\" align=\"center\">
\t\t<h5 style=\"color: blue;\">Smile!</h5>
\t\t<div id=\"my_camera\" class=\"pre_capture_frame\" ></div>
\t\t<input type=\"hidden\" name=\"captured_image_data\" id=\"captured_image_data\">
\t\t<br>
\t\t<input type=\"button\" class=\"btn btn-info btn-round btn-file\" value=\"Take Snapshot\" onClick=\"take_snapshot()\">\t
\t</div>
\t<div class=\"col-lg-6\" align=\"center\">
\t\t<h5 style=\"color: blue;\">Like It ? </h5>
\t\t<div id=\"results\" >
\t\t\t<img style=\"width: 350px;\" class=\"after_capture_frame\" src=\"image_placeholder.jpg\" />
\t\t</div>
\t\t<br>
\t\t<button type=\"button\" class=\"btn btn-success\" onclick=\"saveSnap()\">Save Picture</button>
\t</div>\t
  </div><!--  end row -->
</div><!-- end container -->


<script language=\"JavaScript\">
\t // Configure a few settings and attach camera 250x187
\t Webcam.set({
\t  width: 350,
\t  height: 287,
\t  image_format: 'jpeg',
\t  jpeg_quality: 90
\t });\t 
\t Webcam.attach( '#my_camera' );
\t
\tfunction take_snapshot() {
\t // play sound effect
\t //shutter.play();
\t // take snapshot and get image data
\t Webcam.snap( function(data_uri) {
\t // display results in page
\t document.getElementById('results').innerHTML = 
\t  '<img class=\"after_capture_frame\" src=\"'+data_uri+'\"/>';
\t \$(\"#captured_image_data\").val(data_uri);
\t });\t 
\t}

\tfunction saveSnap(){
\tvar base64data = \$(\"#captured_image_data\").val();
\t \$.ajax({
\t\t\ttype: \"POST\",
\t\t\tdataType: \"json\",
\t\t\turl: \"/capture-photo\",
\t\t\tdata: {image: base64data},
\t\t\tsuccess: function(data) { 
\t\t\t\talert(data);
\t\t\t}
\t\t});
\t}
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/takePicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block body%}
{{parent()}}




<script src=\"{{('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}\"></script>
<script  type=\"text/javascript\" src=\"{{('https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js')}}\"></script>
            


            <div class=\"container\">\t
  <div class=\"row\">
\t<div class=\"col-lg-6\" align=\"center\">
\t\t<h5 style=\"color: blue;\">Smile!</h5>
\t\t<div id=\"my_camera\" class=\"pre_capture_frame\" ></div>
\t\t<input type=\"hidden\" name=\"captured_image_data\" id=\"captured_image_data\">
\t\t<br>
\t\t<input type=\"button\" class=\"btn btn-info btn-round btn-file\" value=\"Take Snapshot\" onClick=\"take_snapshot()\">\t
\t</div>
\t<div class=\"col-lg-6\" align=\"center\">
\t\t<h5 style=\"color: blue;\">Like It ? </h5>
\t\t<div id=\"results\" >
\t\t\t<img style=\"width: 350px;\" class=\"after_capture_frame\" src=\"image_placeholder.jpg\" />
\t\t</div>
\t\t<br>
\t\t<button type=\"button\" class=\"btn btn-success\" onclick=\"saveSnap()\">Save Picture</button>
\t</div>\t
  </div><!--  end row -->
</div><!-- end container -->


<script language=\"JavaScript\">
\t // Configure a few settings and attach camera 250x187
\t Webcam.set({
\t  width: 350,
\t  height: 287,
\t  image_format: 'jpeg',
\t  jpeg_quality: 90
\t });\t 
\t Webcam.attach( '#my_camera' );
\t
\tfunction take_snapshot() {
\t // play sound effect
\t //shutter.play();
\t // take snapshot and get image data
\t Webcam.snap( function(data_uri) {
\t // display results in page
\t document.getElementById('results').innerHTML = 
\t  '<img class=\"after_capture_frame\" src=\"'+data_uri+'\"/>';
\t \$(\"#captured_image_data\").val(data_uri);
\t });\t 
\t}

\tfunction saveSnap(){
\tvar base64data = \$(\"#captured_image_data\").val();
\t \$.ajax({
\t\t\ttype: \"POST\",
\t\t\tdataType: \"json\",
\t\t\turl: \"/capture-photo\",
\t\t\tdata: {image: base64data},
\t\t\tsuccess: function(data) { 
\t\t\t\talert(data);
\t\t\t}
\t\t});
\t}
</script>


{% endblock %}", "utilisateur/takePicture.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\utilisateur\\takePicture.html.twig");
    }
}
