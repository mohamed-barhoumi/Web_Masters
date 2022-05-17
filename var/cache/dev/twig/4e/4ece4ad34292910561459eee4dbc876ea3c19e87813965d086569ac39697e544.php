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

/* admin/base.html.twig */
class __TwigTemplate_c983b9694856acadffabce2f09cc1b8388786f55f5aefe7db935b9510acb40c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "        <!DOCTYPE html>
        <html lang=\"en\">

        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <title>
                Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
            </title>
            <!-- Favicon -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/brand/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\">
            <!-- Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
            <!-- Icons -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/nucleo/css/nucleo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CSS Files -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/csss/argon-dashboard.css?v=1.1.2"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        </head>

        <body class=\"\">
        <nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
            <div class=\"container-fluid\">
                <!-- Toggler -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <!-- Brand -->
                <a class=\"navbar-brand pt-0\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/brand/logooo.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img\" >
                </a>
                <!-- User -->
                <ul class=\"nav align-items-center d-md-none\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link nav-link-icon\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ni ni-bell-55\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\" aria-labelledby=\"navbar-default_dropdown_1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <div class=\"media align-items-center\">
                      <span class=\"avatar avatar-sm rounded-circle\">
                        <img alt=\"Image placeholder\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/theme/team-1-800x800.jpg"), "html", null, true);
        echo "\">
                      </span>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                            <div class=\" dropdown-header noti-title\">
                                <h6 class=\"text-overflow m-0\">Welcome!</h6>
                            </div>
                            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_back_index");
        echo "\" class=\"dropdown-item\">
                                <i class=\"ni ni-single-02\"></i>
                                <span>My profile</span>
                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
                                <i class=\"ni ni-user-run\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">
                    <!-- Collapse header -->
                    <div class=\"navbar-collapse-header d-md-none\">
                        <div class=\"row\">

                            <div class=\"col-6 collapse-brand\">
                                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/brand/logooo.png"), "html", null, true);
        echo "\">
                                </a>
                            </div>
                            <div class=\"col-6 collapse-close\">
                                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle sidenav\">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <form class=\"mt-4 mb-3 d-md-none\">
                        <div class=\"input-group input-group-rounded input-group-merge\">
                            <input type=\"search\" class=\"form-control form-control-rounded form-control-prepended\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <span class=\"fa fa-search\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item  active \">
                            <a class=\"nav-link  active \" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                                <i class=\"ni ni-tv-2 text-primary\"></i> Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/icons.html\">
                                <i class=\"ni ni-planet text-blue\"></i> Icons
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/maps.html\">
                                <i class=\"ni ni-pin-3 text-orange\"></i> Maps
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_back_index");
        echo "\">
                                <i class=\"ni ni-single-02 text-yellow\"></i> User List
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/tables.html\">
                                <i class=\"ni ni-bullet-list-67 text-red\"></i> Tables
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./examples/login.html\">
                                <i class=\"ni ni-key-25 text-info\"></i> Login
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./examples/register.html\">
                                <i class=\"ni ni-circle-08 text-pink\"></i> Register
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class=\"my-3\">
                    <!-- Heading -->
                    <h6 class=\"navbar-heading text-muted\">Documentation</h6>
                    <!-- Navigation -->
                    <ul class=\"navbar-nav mb-md-3\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html\">
                                <i class=\"ni ni-spaceship\"></i> Getting started
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html\">
                                <i class=\"ni ni-palette\"></i> Foundation
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html\">
                                <i class=\"ni ni-ui-04\"></i> Components
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active active-pro\">
                            <a class=\"nav-link\" href=\"./examples/upgrade.html\">
                                <i class=\"ni ni-send text-dark\"></i> Upgrade to PRO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"main-content\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-top navbar-expand-md navbar-dark\" id=\"navbar-main\">
                <div class=\"container-fluid\">
                    <!-- Brand -->
                    <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Dashboard</a>
                    <!-- Form -->
                    <form class=\"navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto\">
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-alternative\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                                </div>
                                <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                            </div>
                        </div>
                    </form>
                    <!-- User -->
                    <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"media align-items-center\">
                        <span class=\"avatar avatar-sm rounded-circle\">
                          <img alt=\"Image placeholder\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/theme/team-4-800x800.jpg"), "html", null, true);
        echo "\">
                        </span>
                                    <div class=\"media-body ml-2 d-none d-lg-block\">
                                        <span class=\"mb-0 text-sm  font-weight-bold\">";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "firstname", [], "any", false, false, false, 196), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "lastname", [], "any", false, false, false, 196), "html", null, true);
        echo "</span>
                                    </div>

                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                                <div class=\" dropdown-header noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome!</h6>
                                </div>
                                <a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_back_index");
        echo "\" class=\"dropdown-item\">
                                    <i class=\"ni ni-single-02\"></i>
                                    <span>My profile</span>
                                </a>


                                <div class=\"dropdown-divider\"></div>
                                <a href=\" ";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
                                    <i class=\"ni ni-user-run\"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class=\"header bg-gradient-primary pb-8 pt-5 pt-md-8\">
                <div class=\"container-fluid\">
                    <div class=\"header-body\">
                        <!-- Card stats -->
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Traffic</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">350,897</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-danger text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-chart-bar\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-success mr-2\"><i class=\"fa fa-arrow-up\"></i> 3.48%</span>
                                            <span class=\"text-nowrap\">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">New users</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">2,356</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-warning text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-chart-pie\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-danger mr-2\"><i class=\"fas fa-arrow-down\"></i> 3.48%</span>
                                            <span class=\"text-nowrap\">Since last week</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Sales</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">924</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-yellow text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-users\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-warning mr-2\"><i class=\"fas fa-arrow-down\"></i> 1.10%</span>
                                            <span class=\"text-nowrap\">Since yesterday</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Performance</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">49,65%</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-info text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-percent\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-success mr-2\"><i class=\"fas fa-arrow-up\"></i> 12%</span>
                                            <span class=\"text-nowrap\">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            ";
        // line 317
        $this->displayBlock('body', $context, $blocks);
        // line 320
        echo "

        </div>
        <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!--   Optional JS   -->
        <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/plugins/chart.js/dist/Chart.extension.js"), "html", null, true);
        echo "\"></script>
        <!--   Argon JS   -->
        <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/jss/argon-dashboard.min.js?v=1.1.2"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js') }}\"></script>
        <script>
            window.TrackJS &&
            TrackJS.install({
                token: \"ee6fab19c5a04ac1a32a645abde4613a\",
                application: \"argon-dashboard-free\"
            });
        </script>
        </body>

        </html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 317
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 318
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 318,  465 => 317,  443 => 329,  438 => 327,  434 => 326,  429 => 324,  425 => 323,  420 => 320,  418 => 317,  310 => 212,  300 => 205,  286 => 196,  280 => 193,  259 => 175,  199 => 118,  181 => 103,  153 => 78,  149 => 77,  132 => 63,  123 => 57,  112 => 49,  90 => 30,  86 => 29,  72 => 18,  67 => 16,  63 => 15,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!DOCTYPE html>
        <html lang=\"en\">

        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <title>
                Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
            </title>
            <!-- Favicon -->
            <link href=\"{{ asset('../assets/img/brand/favicon.png') }}\" rel=\"icon\" type=\"image/png\">
            <!-- Fonts -->
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
            <!-- Icons -->
            <link href=\"{{ asset('../assets/jss/plugins/nucleo/css/nucleo.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('../assets/jss/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" />
            <!-- CSS Files -->
            <link href=\"{{ asset('../assets/csss/argon-dashboard.css?v=1.1.2') }}\" rel=\"stylesheet\" />
        </head>

        <body class=\"\">
        <nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
            <div class=\"container-fluid\">
                <!-- Toggler -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <!-- Brand -->
                <a class=\"navbar-brand pt-0\" href=\"{{ path('admin') }}\">
                    <img src=\"{{ asset('../assets/img/brand/logooo.png') }}\" class=\"navbar-brand-img\" >
                </a>
                <!-- User -->
                <ul class=\"nav align-items-center d-md-none\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link nav-link-icon\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ni ni-bell-55\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\" aria-labelledby=\"navbar-default_dropdown_1\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <div class=\"media align-items-center\">
                      <span class=\"avatar avatar-sm rounded-circle\">
                        <img alt=\"Image placeholder\" src=\"{{ asset('../assets/img/theme/team-1-800x800.jpg') }}\">
                      </span>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                            <div class=\" dropdown-header noti-title\">
                                <h6 class=\"text-overflow m-0\">Welcome!</h6>
                            </div>
                            <a href=\"{{ path('user_back_index') }}\" class=\"dropdown-item\">
                                <i class=\"ni ni-single-02\"></i>
                                <span>My profile</span>
                            </a>

                            <div class=\"dropdown-divider\"></div>
                            <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">
                                <i class=\"ni ni-user-run\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Collapse -->
                <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">
                    <!-- Collapse header -->
                    <div class=\"navbar-collapse-header d-md-none\">
                        <div class=\"row\">

                            <div class=\"col-6 collapse-brand\">
                                <a href=\"{{ path('admin') }}\">
                                    <img src=\"{{ asset('../assets/img/brand/logooo.png') }}\">
                                </a>
                            </div>
                            <div class=\"col-6 collapse-close\">
                                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle sidenav\">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <form class=\"mt-4 mb-3 d-md-none\">
                        <div class=\"input-group input-group-rounded input-group-merge\">
                            <input type=\"search\" class=\"form-control form-control-rounded form-control-prepended\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <span class=\"fa fa-search\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Navigation -->
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item  active \">
                            <a class=\"nav-link  active \" href=\"{{ path('admin') }}\">
                                <i class=\"ni ni-tv-2 text-primary\"></i> Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/icons.html\">
                                <i class=\"ni ni-planet text-blue\"></i> Icons
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/maps.html\">
                                <i class=\"ni ni-pin-3 text-orange\"></i> Maps
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"{{ path('user_back_index') }}\">
                                <i class=\"ni ni-single-02 text-yellow\"></i> User List
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link \" href=\"./examples/tables.html\">
                                <i class=\"ni ni-bullet-list-67 text-red\"></i> Tables
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./examples/login.html\">
                                <i class=\"ni ni-key-25 text-info\"></i> Login
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./examples/register.html\">
                                <i class=\"ni ni-circle-08 text-pink\"></i> Register
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class=\"my-3\">
                    <!-- Heading -->
                    <h6 class=\"navbar-heading text-muted\">Documentation</h6>
                    <!-- Navigation -->
                    <ul class=\"navbar-nav mb-md-3\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html\">
                                <i class=\"ni ni-spaceship\"></i> Getting started
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html\">
                                <i class=\"ni ni-palette\"></i> Foundation
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html\">
                                <i class=\"ni ni-ui-04\"></i> Components
                            </a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active active-pro\">
                            <a class=\"nav-link\" href=\"./examples/upgrade.html\">
                                <i class=\"ni ni-send text-dark\"></i> Upgrade to PRO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"main-content\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-top navbar-expand-md navbar-dark\" id=\"navbar-main\">
                <div class=\"container-fluid\">
                    <!-- Brand -->
                    <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"{{ path('admin') }}\">Dashboard</a>
                    <!-- Form -->
                    <form class=\"navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto\">
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-alternative\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                                </div>
                                <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                            </div>
                        </div>
                    </form>
                    <!-- User -->
                    <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"media align-items-center\">
                        <span class=\"avatar avatar-sm rounded-circle\">
                          <img alt=\"Image placeholder\" src=\"{{ asset('../assets/img/theme/team-4-800x800.jpg') }}\">
                        </span>
                                    <div class=\"media-body ml-2 d-none d-lg-block\">
                                        <span class=\"mb-0 text-sm  font-weight-bold\">{{ app.user.firstname }} {{ app.user.lastname }}</span>
                                    </div>

                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                                <div class=\" dropdown-header noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome!</h6>
                                </div>
                                <a href=\"{{ path('user_back_index' ) }}\" class=\"dropdown-item\">
                                    <i class=\"ni ni-single-02\"></i>
                                    <span>My profile</span>
                                </a>


                                <div class=\"dropdown-divider\"></div>
                                <a href=\" {{ path('app_logout') }}\" class=\"dropdown-item\">
                                    <i class=\"ni ni-user-run\"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class=\"header bg-gradient-primary pb-8 pt-5 pt-md-8\">
                <div class=\"container-fluid\">
                    <div class=\"header-body\">
                        <!-- Card stats -->
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Traffic</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">350,897</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-danger text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-chart-bar\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-success mr-2\"><i class=\"fa fa-arrow-up\"></i> 3.48%</span>
                                            <span class=\"text-nowrap\">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">New users</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">2,356</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-warning text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-chart-pie\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-danger mr-2\"><i class=\"fas fa-arrow-down\"></i> 3.48%</span>
                                            <span class=\"text-nowrap\">Since last week</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Sales</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">924</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-yellow text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-users\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-warning mr-2\"><i class=\"fas fa-arrow-down\"></i> 1.10%</span>
                                            <span class=\"text-nowrap\">Since yesterday</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6\">
                                <div class=\"card card-stats mb-4 mb-xl-0\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Performance</h5>
                                                <span class=\"h2 font-weight-bold mb-0\">49,65%</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"icon icon-shape bg-info text-white rounded-circle shadow\">
                                                    <i class=\"fas fa-percent\"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"mt-3 mb-0 text-muted text-sm\">
                                            <span class=\"text-success mr-2\"><i class=\"fas fa-arrow-up\"></i> 12%</span>
                                            <span class=\"text-nowrap\">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            {% block body %}

            {% endblock body %}


        </div>
        <script src=\"{{ asset('../assets/jss/plugins/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('../assets/jss/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
        <!--   Optional JS   -->
        <script src=\"{{ asset('../assets/jss/plugins/chart.js/dist/Chart.min.js') }}\"></script>
        <script src=\"{{ asset('../assets/jss/plugins/chart.js/dist/Chart.extension.js') }}\"></script>
        <!--   Argon JS   -->
        <script src=\"{{ asset('../assets/jss/argon-dashboard.min.js?v=1.1.2') }}\"></script>
        <script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js') }}\"></script>
        <script>
            window.TrackJS &&
            TrackJS.install({
                token: \"ee6fab19c5a04ac1a32a645abde4613a\",
                application: \"argon-dashboard-free\"
            });
        </script>
        </body>

        </html>", "admin/base.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\admin\\base.html.twig");
    }
}
