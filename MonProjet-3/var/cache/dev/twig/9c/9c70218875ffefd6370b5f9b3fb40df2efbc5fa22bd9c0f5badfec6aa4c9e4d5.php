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

/* base.html.twig */
class __TwigTemplate_a14196dd263d50e109095eb038d4f34a4f87962bc2d8f64388c5ee37778c93dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Education LMS template by Dreambuzz\">
    <meta name=\"keywords\" content=\"Eduhash,education,lms,seo,course,online,learning,caoch,training,tutor\">
    <meta name=\"author\" content=\"themeturn.com\">

    <title>Eduhash - Education LMS template</title>

    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Iconfont Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/fontawesome/css/all.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/flaticon/flaticon.css"), "html", null, true);
        echo "\">
    <!-- animate.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/animate-css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/owl/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/owl/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/responsive.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/plugins/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/js/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!--   Optional JS   -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/js/plugins/chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/js/plugins/chart.js/dist/Chart.extension.js"), "html", null, true);
        echo "\"></script>
    <!--   Argon JS   -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/js/argon-dashboard.min.js?v=1.1.2"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js') }}\"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: \"ee6fab19c5a04ac1a32a645abde4613a\",
            application: \"argon-dashboard-free\"
        });
    </script>
</head>

<body id=\"top-header\">



<header>
    <!-- Main Menu Start -->
    <div class=\"site-navigation main_menu menu-style-2\" id=\"mainmenu-area\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/images/dark-logo.png"), "html", null, true);
        echo "\" alt=\"Eduhash\" class=\"img-fluid\">
                </a>

                <!-- Toggler -->

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMenu\" aria-controls=\"navbarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fa fa-bars\"></span>
                </button>

                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Home<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"index.html\">
                                    Home 1
                                </a>
                                <a class=\"dropdown-item \" href=\"index-2.html\">
                                    Home 2
                                </a>
                                <a class=\"dropdown-item \" href=\"index-3.html\">
                                    Home 3
                                </a>
                                <a class=\"dropdown-item \" href=\"index-4.html\">
                                    Home 4
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item \">
                            <a href=\"about.html\" class=\"nav-link js-scroll-trigger\">
                                About us
                            </a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Courses<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"course-grid.html\">
                                    Course Style 1
                                </a>
                                <a class=\"dropdown-item \" href=\"course-grid-2.html\">
                                    Course Style 2
                                </a>

                                <a class=\"dropdown-item \" href=\"course-grid-3.html\">
                                    Course Style 3
                                </a>
                                <a class=\"dropdown-item \" href=\"course-grid-4.html\">
                                    Course Style 4
                                </a>
                                <a class=\"dropdown-item \" href=\"course-single.html\">
                                    Course Details Style 1
                                </a>
                                <a class=\"dropdown-item \" href=\"course-single2.html\">
                                    Course Details Style 2
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Pages<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"login.html\">
                                    Login
                                </a>
                                <a class=\"dropdown-item \" href=\"register.html\">
                                    Register
                                </a>
                                <a class=\"dropdown-item \" href=\"cart.html\">
                                    cart
                                </a>
                                <a class=\"dropdown-item \" href=\"checkout.html\">
                                    checkout
                                </a>
                                <a class=\"dropdown-item \" href=\"error.html\">
                                    404
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Blog<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"blog.html\">
                                    Blog
                                </a>
                                <a class=\"dropdown-item \" href=\"blog-single.html\">
                                    Blog Single
                                </a>
                            </div>
                        </li>

                        <li class=\"nav-item \">
                            <a href=\"contact.html\" class=\"nav-link\">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class=\"header-login\">
                        <a href=\"#\" class=\"btn btn-solid-border btn-sm \">Log In</a>
                        <a href=\"#\" class=\"btn btn-main btn-sm\">sign up</a>
                    </div>
                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>



";
        // line 173
        $this->displayBlock('body', $context, $blocks);
        // line 174
        echo "
<!-- CTA Sidebar end -->
<!-- Footer section start -->
<section class=\"footer-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6 col-md-8 col-xl-3 col-sm-6\">
                <div class=\"widget footer-about mb-5 mb-lg-0\">
                    <h5 class=\"widget-title text-gray\">About us</h5>
                    <ul class=\"list-unstyled footer-info\">
                        <li><span>Ph:</span>+(68) 345 5902</li>
                        <li><span>Email:</span>info@yourdomain.com</li>
                        <li><span>Location:</span> 123 Fifth Floor East 26th Street,
                            New York, NY 10011</li>
                    </ul>
                    <ul class=\"list-inline footer-socials\">
                        <li class=\"list-inline-item\">Follow us :</li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li class=\"list-inline-item\"> <a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class=\"col-xl-7 ml-auto col-lg-7 col-md-12 col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4 \">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Explore</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">About us</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Support</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4\">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Courses</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">SEO Business</a></li>
                                <li><a href=\"#\">Digital Marketing</a></li>
                                <li><a href=\"#\">Graphic Design</a></li>
                                <li><a href=\"#\">Social Marketing</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4\">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Legal</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">Terms & Condition</a></li>
                                <li><a href=\"#\">Privacy policy</a></li>
                                <li><a href=\"#\">Return policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-btm\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-xl-6 col-lg-4 col-md-12\">
                    <div class=\"footer-logo text-lg-left text-center mb-4 mb-lg-0\">
                        <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/images/light-logo.png"), "html", null, true);
        echo "\" alt=\"EduHash\" class=\"img-fluid\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-8 col-md-12\">
                    <div class=\"copyright text-lg-right text-center\">
                        <p>© Copyright EduHash Template All rights reserved.Crafted by <a href=\"https://themeturn.com\">Dreambuzz</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer section End -->

<div class=\"fixed-btm-top\">
    <a href=\"#top-header\" class=\"js-scroll-trigger scroll-to-top\"><i class=\"fa fa-angle-up\"></i></a>
</div>




<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4.5 -->
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
<!-- Counterup -->
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/counterup/waypoint.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/jquery.isotope.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/google-map/map.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/script.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 173,  403 => 283,  398 => 281,  394 => 280,  390 => 279,  386 => 278,  382 => 277,  378 => 276,  373 => 274,  368 => 272,  339 => 246,  265 => 174,  263 => 173,  142 => 55,  118 => 34,  113 => 32,  109 => 31,  104 => 29,  100 => 28,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Education LMS template by Dreambuzz\">
    <meta name=\"keywords\" content=\"Eduhash,education,lms,seo,course,online,learning,caoch,training,tutor\">
    <meta name=\"author\" content=\"themeturn.com\">

    <title>Eduhash - Education LMS template</title>

    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/bootstrap/bootstrap.css') }}\">
    <!-- Iconfont Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/fontawesome/css/all.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/flaticon/flaticon.css') }}\">
    <!-- animate.css -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/animate-css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/owl/assets/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendors/owl/assets/owl.theme.default.min.css') }}\">

    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/responsive.css') }}\">
    <script src=\"{{ asset('../assets/js/plugins/jquery.js') }}\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"{{ asset('../backAssets/js/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('../backAssets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
    <!--   Optional JS   -->
    <script src=\"{{ asset('../backAssets/js/plugins/chart.js/dist/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('../backAssets/js/plugins/chart.js/dist/Chart.extension.js') }}\"></script>
    <!--   Argon JS   -->
    <script src=\"{{ asset('../backAssets/js/argon-dashboard.min.js?v=1.1.2') }}\"></script>
    <script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js') }}\"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: \"ee6fab19c5a04ac1a32a645abde4613a\",
            application: \"argon-dashboard-free\"
        });
    </script>
</head>

<body id=\"top-header\">



<header>
    <!-- Main Menu Start -->
    <div class=\"site-navigation main_menu menu-style-2\" id=\"mainmenu-area\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"{{ asset('../assets/images/dark-logo.png') }}\" alt=\"Eduhash\" class=\"img-fluid\">
                </a>

                <!-- Toggler -->

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMenu\" aria-controls=\"navbarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fa fa-bars\"></span>
                </button>

                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Home<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"index.html\">
                                    Home 1
                                </a>
                                <a class=\"dropdown-item \" href=\"index-2.html\">
                                    Home 2
                                </a>
                                <a class=\"dropdown-item \" href=\"index-3.html\">
                                    Home 3
                                </a>
                                <a class=\"dropdown-item \" href=\"index-4.html\">
                                    Home 4
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item \">
                            <a href=\"about.html\" class=\"nav-link js-scroll-trigger\">
                                About us
                            </a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Courses<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"course-grid.html\">
                                    Course Style 1
                                </a>
                                <a class=\"dropdown-item \" href=\"course-grid-2.html\">
                                    Course Style 2
                                </a>

                                <a class=\"dropdown-item \" href=\"course-grid-3.html\">
                                    Course Style 3
                                </a>
                                <a class=\"dropdown-item \" href=\"course-grid-4.html\">
                                    Course Style 4
                                </a>
                                <a class=\"dropdown-item \" href=\"course-single.html\">
                                    Course Details Style 1
                                </a>
                                <a class=\"dropdown-item \" href=\"course-single2.html\">
                                    Course Details Style 2
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Pages<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"login.html\">
                                    Login
                                </a>
                                <a class=\"dropdown-item \" href=\"register.html\">
                                    Register
                                </a>
                                <a class=\"dropdown-item \" href=\"cart.html\">
                                    cart
                                </a>
                                <a class=\"dropdown-item \" href=\"checkout.html\">
                                    checkout
                                </a>
                                <a class=\"dropdown-item \" href=\"error.html\">
                                    404
                                </a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Blog<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"blog.html\">
                                    Blog
                                </a>
                                <a class=\"dropdown-item \" href=\"blog-single.html\">
                                    Blog Single
                                </a>
                            </div>
                        </li>

                        <li class=\"nav-item \">
                            <a href=\"contact.html\" class=\"nav-link\">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class=\"header-login\">
                        <a href=\"#\" class=\"btn btn-solid-border btn-sm \">Log In</a>
                        <a href=\"#\" class=\"btn btn-main btn-sm\">sign up</a>
                    </div>
                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>



{% block body %}{% endblock %}

<!-- CTA Sidebar end -->
<!-- Footer section start -->
<section class=\"footer-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6 col-md-8 col-xl-3 col-sm-6\">
                <div class=\"widget footer-about mb-5 mb-lg-0\">
                    <h5 class=\"widget-title text-gray\">About us</h5>
                    <ul class=\"list-unstyled footer-info\">
                        <li><span>Ph:</span>+(68) 345 5902</li>
                        <li><span>Email:</span>info@yourdomain.com</li>
                        <li><span>Location:</span> 123 Fifth Floor East 26th Street,
                            New York, NY 10011</li>
                    </ul>
                    <ul class=\"list-inline footer-socials\">
                        <li class=\"list-inline-item\">Follow us :</li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li class=\"list-inline-item\"> <a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class=\"col-xl-7 ml-auto col-lg-7 col-md-12 col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4 \">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Explore</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">About us</a></li>
                                <li><a href=\"#\">Contact us</a></li>
                                <li><a href=\"#\">Services</a></li>
                                <li><a href=\"#\">Support</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4\">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Courses</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">SEO Business</a></li>
                                <li><a href=\"#\">Digital Marketing</a></li>
                                <li><a href=\"#\">Graphic Design</a></li>
                                <li><a href=\"#\">Social Marketing</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-xl-4 col-sm-4 col-md-4\">
                        <div class=\"footer-widget mb-5 mb-lg-0\">
                            <h5 class=\"widget-title text-gray\">Legal</h5>
                            <ul class=\"list-unstyled footer-links\">
                                <li><a href=\"#\">Terms & Condition</a></li>
                                <li><a href=\"#\">Privacy policy</a></li>
                                <li><a href=\"#\">Return policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-btm\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-xl-6 col-lg-4 col-md-12\">
                    <div class=\"footer-logo text-lg-left text-center mb-4 mb-lg-0\">
                        <img src=\"{{ asset('../assets/images/light-logo.png') }}\" alt=\"EduHash\" class=\"img-fluid\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-8 col-md-12\">
                    <div class=\"copyright text-lg-right text-center\">
                        <p>© Copyright EduHash Template All rights reserved.Crafted by <a href=\"https://themeturn.com\">Dreambuzz</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer section End -->

<div class=\"fixed-btm-top\">
    <a href=\"#top-header\" class=\"js-scroll-trigger scroll-to-top\"><i class=\"fa fa-angle-up\"></i></a>
</div>




<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src=\"{{ asset('../assets/vendors/jquery/jquery.js') }}\"></script>
<!-- Bootstrap 4.5 -->
<script src=\"{{ asset('../assets/vendors/bootstrap/bootstrap.js') }}\"></script>
<!-- Counterup -->
<script src=\"{{ asset('../assets/vendors/counterup/waypoint.js') }}\"></script>
<script src=\"{{ asset('../assets/vendors/counterup/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('../assets/vendors/jquery.isotope.js') }}\"></script>
<script src=\"{{ asset('../assets/vendors/imagesloaded.js') }}\"></script>
<script src=\"{{ asset('../assets/vendors/owl/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('../assets/vendors/google-map/map.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>
<script src=\"{{ asset('../assets/js/script.js') }}\"></script>
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

</body>
</html>

", "base.html.twig", "/Users/amiraaissaoui/Downloads/MonProjet-3/templates/base.html.twig");
    }
}
