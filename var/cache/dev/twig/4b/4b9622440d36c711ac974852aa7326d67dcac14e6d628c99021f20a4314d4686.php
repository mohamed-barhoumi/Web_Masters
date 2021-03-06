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

/* admin/home/home.html.twig */
class __TwigTemplate_fae747ca71bcf7693277e85104cdd9988cc9232fcb216deaf82585506d5e1e76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Home</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"\">
    <nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
        <div class=\"container-fluid\">
            <!-- Toggler -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- Brand -->
            <a class=\"navbar-brand pt-0\" href=\"./index.html\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/img/brand/blue.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img\" alt=\"...\">
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
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/img/theme/team-1-800x800.jpg"), "html", null, true);
        echo "\">
              </span>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
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
                            <a href=\"./index.html\">
                                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/img/brand/blue.png"), "html", null, true);
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
                        <a class=\"nav-link  active \" href=\"./index.html\">
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
                        <a class=\"nav-link \" href=\"./examples/profile.html\">
                            <i class=\"ni ni-single-02 text-yellow\"></i> User profile
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
            <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"./index.html\">Dashboard</a>
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
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../backAssets/img/theme/team-4-800x800.jpg"), "html", null, true);
        echo "\">
                </span>
                            <div class=\"media-body ml-2 d-none d-lg-block\">
                                <span class=\"mb-0 text-sm  font-weight-bold\">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 187,  164 => 72,  121 => 32,  99 => 13,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block title %} <title>Home</title> {% endblock %}
{% block body %}
    <body class=\"\">
    <nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
        <div class=\"container-fluid\">
            <!-- Toggler -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- Brand -->
            <a class=\"navbar-brand pt-0\" href=\"./index.html\">
                <img src=\"{{ asset('../backAssets/img/brand/blue.png') }}\" class=\"navbar-brand-img\" alt=\"...\">
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
                <img alt=\"Image placeholder\" src=\"{{ asset('../backAssets/img/theme/team-1-800x800.jpg') }}\">
              </span>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
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
                            <a href=\"./index.html\">
                                <img src=\"{{ asset('../backAssets/img/brand/blue.png') }}\">
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
                        <a class=\"nav-link  active \" href=\"./index.html\">
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
                        <a class=\"nav-link \" href=\"./examples/profile.html\">
                            <i class=\"ni ni-single-02 text-yellow\"></i> User profile
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
            <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"./index.html\">Dashboard</a>
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
                  <img alt=\"Image placeholder\" src=\"{{ asset('../backAssets/img/theme/team-4-800x800.jpg') }}\">
                </span>
                            <div class=\"media-body ml-2 d-none d-lg-block\">
                                <span class=\"mb-0 text-sm  font-weight-bold\">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"./examples/profile.html\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
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


{% endblock %}", "admin/home/home.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\admin\\home\\home.html.twig");
    }
}
