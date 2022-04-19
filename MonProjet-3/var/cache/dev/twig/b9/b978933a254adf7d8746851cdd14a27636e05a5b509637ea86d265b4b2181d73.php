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

/* global/login.html.twig */
class __TwigTemplate_16c3bf957dc51ff3856c343eda27553cc7966e47ec90bdf0de918d7e4ee1c633 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "global/login.html.twig", 1);
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

        echo " Home ";
        
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
        echo "    <main class=\"site-main page-wrapper woocommerce single single-product\">
        <section class=\"space-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"woocommerce-notices-wrapper\"></div>
                        <h2 class=\"font-weight-bold mb-4\">Login</h2>
                        ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                            <div class=\"alert alert-danger\">
                                le login et le mot de passe ne sont pas identiques
                            </div>
                        ";
        }
        // line 18
        echo "                        <form class=\"woocommerce-form woocommerce-form-login login\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                            <p class=\"woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide\">
                                <label for=\"username\">Username<span class=\"required\">*</span></label>
                                <input type=\"text\" class=\"woocommerce-Input woocommerce-Input--text input-text form-control\" required name=\"_username\">
                            </p>
                            <p class=\"woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide\">
                                <label for=\"password\">Password&nbsp;<span class=\"required\">*</span></label>
                                <input class=\"woocommerce-Input woocommerce-Input--text input-text form-control\" type=\"password\" name=\"_password\">
                            </p>
                            <p class=\"form-row\">
                                <input type=\"submit\" class=\"woocommerce-button button woocommerce-form-login__submit\"  value=\"Log in\">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "global/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Home {% endblock %}

{% block body %}
    <main class=\"site-main page-wrapper woocommerce single single-product\">
        <section class=\"space-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"woocommerce-notices-wrapper\"></div>
                        <h2 class=\"font-weight-bold mb-4\">Login</h2>
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                le login et le mot de passe ne sont pas identiques
                            </div>
                        {% endif %}
                        <form class=\"woocommerce-form woocommerce-form-login login\" action=\"{{ path('login') }}\" method=\"post\">
                            <p class=\"woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide\">
                                <label for=\"username\">Username<span class=\"required\">*</span></label>
                                <input type=\"text\" class=\"woocommerce-Input woocommerce-Input--text input-text form-control\" required name=\"_username\">
                            </p>
                            <p class=\"woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide\">
                                <label for=\"password\">Password&nbsp;<span class=\"required\">*</span></label>
                                <input class=\"woocommerce-Input woocommerce-Input--text input-text form-control\" type=\"password\" name=\"_password\">
                            </p>
                            <p class=\"form-row\">
                                <input type=\"submit\" class=\"woocommerce-button button woocommerce-form-login__submit\"  value=\"Log in\">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
{% endblock %}
", "global/login.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\global\\login.html.twig");
    }
}
