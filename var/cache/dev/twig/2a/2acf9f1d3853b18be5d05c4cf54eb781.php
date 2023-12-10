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

/* Home.html.twig */
class __TwigTemplate_a100324ba463d70a7b0c8c334112eefe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "









<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>EcoArt</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->

   
</head>

<body>
   

<!-- Carousel Start -->
<div class=\"container-fluid p-0 pb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["uploads/403626751_1288313181849311_5137030668488353358_n.jpg", "uploads/a-65702f5e8b41d.jpg", "uploads/403632698_661443679497767_9177273439615897975_n.jpg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            echo "            <div class=\"owl-carousel-item position-relative\">
                <div class=\"img-wrapper\">
                    <img class=\"img-fluid\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["image"]), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(53, 53, 53, .7); width: 100%; height: 300px;\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-12 col-lg-8 text-center\">
                                <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome To EcoArt</h5>
                                <h1 class=\"display-3 text-white animated slideInDown mb-4\">Best Craftsman Products</h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                                <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
</div>

<style>
    .img-wrapper {
        height: 900px; /* Set a fixed height for all image wrappers */
        overflow: hidden;
    }

    .img-fluid {
        height: 100%; /* Set a fixed height for all images */
        width: auto; /* Maintain aspect ratio */
    }
</style>



    <!-- Feature Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-user-check fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">01</h1>
                    </div>
                    <h5>Creative Designers</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.3s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-check fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">02</h1>
                    </div>
                    <h5>Quality Products</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-drafting-compass fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">03</h1>
                    </div>
                    <h5>Free Consultation</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.7s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-headphones fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">04</h1>
                    </div>
                    <h5>Customer Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->



    <!-- About Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container about px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 ps-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                       

                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/EcoArt.png"), "html", null, true);
        echo "\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6 about-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 pe-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">About Us</h1>
                        </div>
                        <p class=\"mb-4 pb-2\">At EcoArt, we are passionate about curating a collection of artisanal products crafted with a deep commitment to ecological sustainability. Our mission is to bring you a unique blend of artistry and environmental consciousness, showcasing the beauty of handmade creations that tread lightly on our planet.</p>
                        <div class=\"row g-4 mb-4 pb-2\">
                            <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-users fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">1234</h2>
                                        <p class=\"fw-medium mb-0\">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.3s\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">1234</h2>
                                        <p class=\"fw-medium mb-0\">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"\" class=\"btn btn-primary py-3 px-5\">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Our Services</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
<img class=\"img-fluid\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/prd2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Artisanal Product Curation</h4>
                            <p>Discover a carefully curated selection of artisanal products, each handcrafted with precision and passion. Our collection includes home decor, fashion accessories, and lifestyle items, all crafted with a keen eye for design and a dedication to sustainability.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/craft.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Custom Artisanal Creations</h4>
                            <p>levate your surroundings with bespoke artisanal creations tailored to your unique taste and preferences. Collaborate with our artisans to bring your vision to life, whether it's a custom piece of furniture, personalized accessories, or one-of-a-kind decor items.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rajel.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Workshops Experiences</h4>
                            <p>Immerse yourself in the world of artisanal craftsmanship through our workshops and experiences. Learn traditional crafting techniques, discover sustainable practices, and engage with our community of artisans to gain hands-on knowledge.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/prd1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Corporate Sustainability Partnerships</h4>
                            <p>Foster a culture of sustainability within your organization through our corporate partnerships. We offer consultation services to help businesses integrate eco-friendly practices, source sustainable corporate gifts, and align with environmentally responsible values.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kosksi.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Educational Outreach Programs</h4>
                            <p>EcoArt is dedicated to spreading awareness about sustainable living. Engage with our educational outreach programs, where we share insights on eco-friendly practices, ethical consumerism,environmentally responsible values and the positive impact of supporting artisanal communities .</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Event Creation</h4>
                            <p>At EcoArt, we extend our commitment to sustainable living to the world of events. Our event creation and development services seamlessly blend artisanal craftsmanship, eco-friendly practices, and creative concepts to bring your celebrations to life.EcoArt is your partner in crafting events with a purpose.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container feature px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 feature-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 ps-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">Why Choose Us</h1>
                        </div>
                        <p class=\"mb-4 pb-2\"> <h2>Quality with Purpose:</h2>
Every service offered by EcoArt is infused with a commitment to quality craftsmanship and a purposeful dedication to sustainable living.

<h2>Community and Connection:</h2>
Join a community that values creativity, eco-consciousness, and the unique stories behind each artisanal creation.

<h2>Positive Impact:</h2>
By choosing EcoArt's services, you contribute to a positive impact on the environment, support local communities, and embrace a lifestyle that harmonizes with nature.</p>
                        <div class=\"row g-4\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Quality</p>
                                        <h5 class=\"mb-0\">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-user-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Creative</p>
                                        <h5 class=\"mb-0\">Designers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-drafting-compass fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Free</p>
                                        <h5 class=\"mb-0\">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-headphones fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Customer</p>
                                        <h5 class=\"mb-0\">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 pe-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/feature.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Our Projects</h1>
            </div>
            <div class=\"row mt-n2 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-12 text-center\">
                    <ul class=\"list-inline mb-5\" id=\"portfolio-flters\">
                        <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                        <li class=\"mx-2\" data-filter=\".first\">General Carpentry</li>
                        <li class=\"mx-2\" data-filter=\".second\">Custom Carpentry</li>
                    </ul>
                </div>
            </div>
            <div class=\"row g-4 portfolio-container\">
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-1.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-1.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Sustainable Art Installations</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-2.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-2.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\"> Community Engagement Initiatives</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-3.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-3.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Eco-Friendly Event Showcases</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-4.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-4.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Artisanal Collaboration Series</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-5.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-5.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Artisan Empowerment Initiatives</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-6.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-6.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Green Corporate Partnerships</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container quote px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 ps-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/quote.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6 quote-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 pe-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">Free Quote</h1>
                        </div>
                        <p class=\"mb-4 pb-2\">
\"EcoArt: Where the canvas meets conscience, and creativity intertwines with care for our planet. In every stroke and shade, we paint a sustainable tomorrow. It's not just about creating art; it's about crafting a legacy of mindful living, where each creation is a brushstroke in the masterpiece of environmental harmony. With EcoArt, let's reimagine the canvas of our world, blending artistry with eco-consciousness, and sculpting a future where creativity thrives in the embrace of a thriving Earth.\"</p>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Mobile\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Select A Service</option>
                                        <option value=\"1\">Service 1</option>
                                        <option value=\"2\">Service 2</option>
                                        <option value=\"3\">Service 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" placeholder=\"Special Note\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Team Members</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
    <img class=\"img-fluid\" src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Team Members/Amine.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Hammeda Amine</h5>
                            <small>position X</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
    <img class=\"img-fluid\" src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Team Members/Yoser.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Zayani Yoser</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
                            <img class=\"img-fluid\" src=\"img/team-3.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
                            <img class=\"img-fluid\" src=\"img/team-4.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Testimonial</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


  


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 518,  604 => 502,  337 => 238,  322 => 226,  307 => 214,  292 => 202,  277 => 190,  262 => 178,  207 => 126,  133 => 54,  110 => 37,  106 => 35,  102 => 34,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{{parent()}}









<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>EcoArt</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->

   
</head>

<body>
   

<!-- Carousel Start -->
<div class=\"container-fluid p-0 pb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        {% for image in ['uploads/403626751_1288313181849311_5137030668488353358_n.jpg', 'uploads/a-65702f5e8b41d.jpg', 'uploads/403632698_661443679497767_9177273439615897975_n.jpg'] %}
            <div class=\"owl-carousel-item position-relative\">
                <div class=\"img-wrapper\">
                    <img class=\"img-fluid\" src=\"{{ asset(image) }}\" alt=\"\">
                </div>
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(53, 53, 53, .7); width: 100%; height: 300px;\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-12 col-lg-8 text-center\">
                                <h5 class=\"text-white text-uppercase mb-3 animated slideInDown\">Welcome To EcoArt</h5>
                                <h1 class=\"display-3 text-white animated slideInDown mb-4\">Best Craftsman Products</h1>
                                <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                                <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<style>
    .img-wrapper {
        height: 900px; /* Set a fixed height for all image wrappers */
        overflow: hidden;
    }

    .img-fluid {
        height: 100%; /* Set a fixed height for all images */
        width: auto; /* Maintain aspect ratio */
    }
</style>



    <!-- Feature Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.1s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-user-check fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">01</h1>
                    </div>
                    <h5>Creative Designers</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.3s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-check fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">02</h1>
                    </div>
                    <h5>Quality Products</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-drafting-compass fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">03</h1>
                    </div>
                    <h5>Free Consultation</h5>
                </div>
                <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.7s\">
                    <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fa fa-headphones fa-2x text-primary\"></i>
                        </div>
                        <h1 class=\"display-1 text-light mb-0\">04</h1>
                    </div>
                    <h5>Customer Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->



    <!-- About Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container about px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 ps-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                       

                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"{{ asset('img/EcoArt.png') }}\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6 about-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 pe-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">About Us</h1>
                        </div>
                        <p class=\"mb-4 pb-2\">At EcoArt, we are passionate about curating a collection of artisanal products crafted with a deep commitment to ecological sustainability. Our mission is to bring you a unique blend of artistry and environmental consciousness, showcasing the beauty of handmade creations that tread lightly on our planet.</p>
                        <div class=\"row g-4 mb-4 pb-2\">
                            <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-users fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">1234</h2>
                                        <p class=\"fw-medium mb-0\">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.3s\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">1234</h2>
                                        <p class=\"fw-medium mb-0\">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"\" class=\"btn btn-primary py-3 px-5\">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Our Services</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
<img class=\"img-fluid\" src=\"{{ asset('img/prd2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Artisanal Product Curation</h4>
                            <p>Discover a carefully curated selection of artisanal products, each handcrafted with precision and passion. Our collection includes home decor, fashion accessories, and lifestyle items, all crafted with a keen eye for design and a dedication to sustainability.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"{{ asset('img/craft.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Custom Artisanal Creations</h4>
                            <p>levate your surroundings with bespoke artisanal creations tailored to your unique taste and preferences. Collaborate with our artisans to bring your vision to life, whether it's a custom piece of furniture, personalized accessories, or one-of-a-kind decor items.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"{{ asset('img/rajel.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Workshops Experiences</h4>
                            <p>Immerse yourself in the world of artisanal craftsmanship through our workshops and experiences. Learn traditional crafting techniques, discover sustainable practices, and engage with our community of artisans to gain hands-on knowledge.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"{{ asset('img/prd1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Corporate Sustainability Partnerships</h4>
                            <p>Foster a culture of sustainability within your organization through our corporate partnerships. We offer consultation services to help businesses integrate eco-friendly practices, source sustainable corporate gifts, and align with environmentally responsible values.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"{{ asset('img/kosksi.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Educational Outreach Programs</h4>
                            <p>EcoArt is dedicated to spreading awareness about sustainable living. Engage with our educational outreach programs, where we share insights on eco-friendly practices, ethical consumerism,environmentally responsible values and the positive impact of supporting artisanal communities .</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item\">
                        <div class=\"overflow-hidden\">
                           <img class=\"img-fluid\" src=\"{{ asset('img/a.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"p-4 text-center border border-5 border-light border-top-0\">
                            <h4 class=\"mb-3\">Event Creation</h4>
                            <p>At EcoArt, we extend our commitment to sustainable living to the world of events. Our event creation and development services seamlessly blend artisanal craftsmanship, eco-friendly practices, and creative concepts to bring your celebrations to life.EcoArt is your partner in crafting events with a purpose.</p>
                            <a class=\"fw-medium\" href=\"\">Read More<i class=\"fa fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container feature px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 feature-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 ps-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">Why Choose Us</h1>
                        </div>
                        <p class=\"mb-4 pb-2\"> <h2>Quality with Purpose:</h2>
Every service offered by EcoArt is infused with a commitment to quality craftsmanship and a purposeful dedication to sustainable living.

<h2>Community and Connection:</h2>
Join a community that values creativity, eco-consciousness, and the unique stories behind each artisanal creation.

<h2>Positive Impact:</h2>
By choosing EcoArt's services, you contribute to a positive impact on the environment, support local communities, and embrace a lifestyle that harmonizes with nature.</p>
                        <div class=\"row g-4\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Quality</p>
                                        <h5 class=\"mb-0\">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-user-check fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Creative</p>
                                        <h5 class=\"mb-0\">Designers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-drafting-compass fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Free</p>
                                        <h5 class=\"mb-0\">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"d-flex flex-shrink-0 align-items-center justify-content-center bg-white\" style=\"width: 60px; height: 60px;\">
                                        <i class=\"fa fa-headphones fa-2x text-primary\"></i>
                                    </div>
                                    <div class=\"ms-4\">
                                        <p class=\"mb-2\">Customer</p>
                                        <h5 class=\"mb-0\">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 pe-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/feature.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Our Projects</h1>
            </div>
            <div class=\"row mt-n2 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-12 text-center\">
                    <ul class=\"list-inline mb-5\" id=\"portfolio-flters\">
                        <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                        <li class=\"mx-2\" data-filter=\".first\">General Carpentry</li>
                        <li class=\"mx-2\" data-filter=\".second\">Custom Carpentry</li>
                    </ul>
                </div>
            </div>
            <div class=\"row g-4 portfolio-container\">
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-1.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-1.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Sustainable Art Installations</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-2.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-2.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\"> Community Engagement Initiatives</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-3.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-3.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Eco-Friendly Event Showcases</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-4.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-4.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Artisanal Collaboration Series</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item first wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-5.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-5.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">General Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Artisan Empowerment Initiatives</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 portfolio-item second wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"img/portfolio-6.jpg\" alt=\"\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"img/portfolio-6.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"border border-5 border-light border-top-0 p-4\">
                            <p class=\"text-primary fw-medium mb-2\">Custom Carpentry</p>
                            <h5 class=\"lh-base mb-0\">Green Corporate Partnerships</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class=\"container-fluid bg-light overflow-hidden my-5 px-lg-0\">
        <div class=\"container quote px-lg-0\">
            <div class=\"row g-0 mx-lg-0\">
                <div class=\"col-lg-6 ps-lg-0\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/quote.jpg\" style=\"object-fit: cover;\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-6 quote-text py-5 wow fadeIn\" data-wow-delay=\"0.5s\">
                    <div class=\"p-lg-5 pe-lg-0\">
                        <div class=\"section-title text-start\">
                            <h1 class=\"display-5 mb-4\">Free Quote</h1>
                        </div>
                        <p class=\"mb-4 pb-2\">
\"EcoArt: Where the canvas meets conscience, and creativity intertwines with care for our planet. In every stroke and shade, we paint a sustainable tomorrow. It's not just about creating art; it's about crafting a legacy of mindful living, where each creation is a brushstroke in the masterpiece of environmental harmony. With EcoArt, let's reimagine the canvas of our world, blending artistry with eco-consciousness, and sculpting a future where creativity thrives in the embrace of a thriving Earth.\"</p>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Mobile\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Select A Service</option>
                                        <option value=\"1\">Service 1</option>
                                        <option value=\"2\">Service 2</option>
                                        <option value=\"3\">Service 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" placeholder=\"Special Note\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Team Members</h1>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
    <img class=\"img-fluid\" src=\"{{ asset('Team Members/Amine.png') }}\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Hammeda Amine</h5>
                            <small>position X</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
    <img class=\"img-fluid\" src=\"{{ asset('Team Members/Yoser.png') }}\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Zayani Yoser</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
                            <img class=\"img-fluid\" src=\"img/team-3.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item\">
                        <div class=\"overflow-hidden position-relative\">
                            <img class=\"img-fluid\" src=\"img/team-4.jpg\" alt=\"\">
                            <div class=\"team-social\">
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                        <div class=\"text-center border border-5 border-light border-top-0 p-4\">
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h1 class=\"display-5 mb-5\">Testimonial</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"img-fluid bg-light p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 90px; height: 90px;\">
                    <div class=\"testimonial-text text-center p-4\">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class=\"mb-1\">Client Name</h5>
                        <span class=\"fst-italic\">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


  


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


</body>

</html>
{% endblock%}", "Home.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebSymfony\\templates\\Home.html.twig");
    }
}
