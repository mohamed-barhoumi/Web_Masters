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

/* abonnement/index.html.twig */
class __TwigTemplate_2bf83369995874af772d9f152e585b280065e1e1934da80696f598933c8c5beb extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Browse Subscriptions</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Subscriptions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Menu -->
    <div class=\"menu-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"special-menu text-center\">
                        <div class=\"button-group filter-button-group\">
                            <button class=\"active\" data-filter=\"*\">Subscriptions</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row special-list\">
                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>1 Month Subscription</p>
                        <p>Description :</p>
                        <p>Get up to 3 Free Tutorials and Courses</p>
                        <p><h3>Price : 100 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

                </div>

                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>3 Months Subscription</p>
                        <p>Description :</p>
                        <p>Get up to 5 Free Tutorials and Courses</p>
                        <p><h3>Price : 250 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

                </div>

                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>12 Months Subscription</p>
                        <p>Description :</p>
                        <p>Get Unlimited Access to Tutorials and Courses</p>
                        <p><h3>Price : 950 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

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
        return "abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}<title>Browse Subscriptions</title>{% endblock %}

{% block body %}

    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Subscriptions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Menu -->
    <div class=\"menu-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"special-menu text-center\">
                        <div class=\"button-group filter-button-group\">
                            <button class=\"active\" data-filter=\"*\">Subscriptions</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row special-list\">
                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>1 Month Subscription</p>
                        <p>Description :</p>
                        <p>Get up to 3 Free Tutorials and Courses</p>
                        <p><h3>Price : 100 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

                </div>

                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>3 Months Subscription</p>
                        <p>Description :</p>
                        <p>Get up to 5 Free Tutorials and Courses</p>
                        <p><h3>Price : 250 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

                </div>

                <div class=\"col-lg-4 col-md-6 special-grid\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action\">
                        <p>12 Months Subscription</p>
                        <p>Description :</p>
                        <p>Get Unlimited Access to Tutorials and Courses</p>
                        <p><h3>Price : 950 DT </h3></p>
                        <button style=\"width: 300px\" class=\"btn btn-primary \">Get</button>
                    </a>

                </div>


            </div>
        </div>
    </div>
{% endblock %}", "abonnement/index.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\abonnement\\index.html.twig");
    }
}
