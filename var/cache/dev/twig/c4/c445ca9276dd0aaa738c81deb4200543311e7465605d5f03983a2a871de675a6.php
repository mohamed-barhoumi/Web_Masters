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
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
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

    <title>Jawek Sport</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/brand/logooo.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\">
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

</head>

<body id=\"top-header\">



<header>
    <!-- Main Menu Start -->
    <div class=\"site-navigation main_menu menu-style-2\" id=\"mainmenu-area\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/images/logooo.png"), "html", null, true);
        echo "\" alt=\"Jawek Sport\" class=\"img-fluid\">
                </a>

                <!-- Toggler -->

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMenu\" aria-controls=\"navbarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fa fa-bars\"></span>
                </button>

                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item \">
                            <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link js-scroll-trigger\">
                                HOME
                            </a>
                        </li>
                        <li class=\"nav-item \">
                            <a href=\"about.html\" class=\"nav-link js-scroll-trigger\">
                                About us
                            </a>
                        </li>


                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Pages<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                                    Login
                                </a>
                                <a class=\"dropdown-item \" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
                                    Register
                                </a>
                                <a class=\"dropdown-item \" href=\"cart.html\">
                                    cart
                                </a>
                                <a class=\"dropdown-item \" href=\"checkout.html\">
                                    checkout
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
                    <div class=\"collapse navbar-collapse\" id=\"navbars-rs-food\">

                            ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) {
            // line 105
            echo "                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Profile</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\">My Profile</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                </li>
                            ";
        } else {
            // line 113
            echo "                                <li class=\"nav-item \">
                                    <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">
                                        Login
                                    </a>
                                </li>
                                <li class=\"nav-item \">
                                    <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">
                                        SignUp
                                    </a>
                                </li>
                            ";
        }
        // line 124
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 125
            echo "                                <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Dashboard</a></li>
                            ";
        }
        // line 127
        echo "                    </div>

                    </ul>



                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>

";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "<!-- CTA Sidebar end -->
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
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/images/logooo.png"), "html", null, true);
        echo "\" alt=\"JawekSport\" class=\"img-fluid\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-8 col-md-12\">
                    <div class=\"copyright text-lg-right text-center\">
                        <p>© Copyright JawekSport Template All rights reserved.Crafted by <a href=\"https://themeturn.com\">Dreambuzz</a> </p>
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
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4.5 -->
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
<!-- Counterup -->
<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/counterup/waypoint.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/jquery.isotope.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendors/google-map/map.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/script.js"), "html", null, true);
        echo "\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 139
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
        return array (  405 => 139,  390 => 248,  385 => 246,  381 => 245,  377 => 244,  373 => 243,  369 => 242,  365 => 241,  360 => 239,  355 => 237,  326 => 211,  253 => 140,  251 => 139,  237 => 127,  231 => 125,  228 => 124,  220 => 119,  212 => 114,  209 => 113,  202 => 109,  198 => 108,  193 => 105,  191 => 104,  155 => 71,  149 => 68,  130 => 52,  114 => 39,  110 => 38,  94 => 25,  90 => 24,  84 => 21,  80 => 20,  76 => 19,  71 => 17,  67 => 16,  62 => 14,  55 => 10,  44 => 1,);
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

    <title>Jawek Sport</title>
    <link href=\"{{ asset('../assets/img/brand/logooo.png') }}\" rel=\"icon\" type=\"image/png\">
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

</head>

<body id=\"top-header\">



<header>
    <!-- Main Menu Start -->
    <div class=\"site-navigation main_menu menu-style-2\" id=\"mainmenu-area\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
                    <img src=\"{{ asset('../assets/images/logooo.png') }}\" alt=\"Jawek Sport\" class=\"img-fluid\">
                </a>

                <!-- Toggler -->

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMenu\" aria-controls=\"navbarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fa fa-bars\"></span>
                </button>

                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarMenu\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item \">
                            <a href=\"{{ path('home') }}\" class=\"nav-link js-scroll-trigger\">
                                HOME
                            </a>
                        </li>
                        <li class=\"nav-item \">
                            <a href=\"about.html\" class=\"nav-link js-scroll-trigger\">
                                About us
                            </a>
                        </li>


                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbar3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Pages<i class=\"fa fa-angle-down\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbar3\">
                                <a class=\"dropdown-item \" href=\"{{ path('app_login') }}\">
                                    Login
                                </a>
                                <a class=\"dropdown-item \" href=\"{{ path('app_register') }}\">
                                    Register
                                </a>
                                <a class=\"dropdown-item \" href=\"cart.html\">
                                    cart
                                </a>
                                <a class=\"dropdown-item \" href=\"checkout.html\">
                                    checkout
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
                    <div class=\"collapse navbar-collapse\" id=\"navbars-rs-food\">

                            {% if app.user %}
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Profile</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                                        <a class=\"dropdown-item\" href=\"{{ path('users') }}\">My Profile</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
                                    </div>
                                </li>
                            {% else %}
                                <li class=\"nav-item \">
                                    <a href=\"{{ path('app_login') }}\" class=\"nav-link\">
                                        Login
                                    </a>
                                </li>
                                <li class=\"nav-item \">
                                    <a href=\"{{ path('app_register') }}\" class=\"nav-link\">
                                        SignUp
                                    </a>
                                </li>
                            {% endif %}
                            {% if  is_granted(\"ROLE_ADMIN\") %}
                                <li class=\"nav-item \"><a class=\"nav-link\" href=\"{{ path('admin') }}\">Dashboard</a></li>
                            {% endif %}
                    </div>

                    </ul>



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
                        <img src=\"{{ asset('../assets/images/logooo.png') }}\" alt=\"JawekSport\" class=\"img-fluid\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-8 col-md-12\">
                    <div class=\"copyright text-lg-right text-center\">
                        <p>© Copyright JawekSport Template All rights reserved.Crafted by <a href=\"https://themeturn.com\">Dreambuzz</a> </p>
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


</body>
</html>", "base.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\base.html.twig");
    }
}
