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

/* formation/show.html.twig */
class __TwigTemplate_b1bf899e29dd9118a06701718e1163118d78a413c267b11a7ca7f1f079555142 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/show.html.twig", 1);
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

        echo "<title>Course details</title>";
        
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
        echo "    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>";
        // line 10
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog details -->
    <div class=\"blog-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"heading-title text-center\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8 col-12\">
                    <div class=\"blog-inner-details-page\">
                        <div class=\"blog-inner-box\">
                            <div class=\"side-blog-img\">
                            </div>
                            <div class=\"inner-blog-detail details-page\">
                                <ul>
                                    <li>Price : <span>
                                            ";
        // line 35
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 0))) {
            echo " Free ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), "html", null, true);
            echo " DT ";
        }
        echo "</span>
                                    </li>
                                    <li>
                                        ";
        // line 38
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), 0))) {
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_formation_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-info\"> Add to Cart</a>  ";
        }
        // line 39
        echo "                                    </li>
                                </ul>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Starting and ending dates</h2>
                                    <p>From ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44), "d M Y"), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 44, $this->source); })()), "dateFin", [], "any", false, false, false, 44), "d M Y"), "html", null, true);
        echo ".
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Time</h2>
                                    <p>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 50, $this->source); })()), "dateDebut", [], "any", false, false, false, 50), "H:i"), "html", null, true);
        echo ".
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Duration</h2>
                                    <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 56, $this->source); })()), "duree", [], "any", false, false, false, 56), "html", null, true);
        echo " ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 56, $this->source); })()), "duree", [], "any", false, false, false, 56), "1"))) {
            echo " day ";
        } else {
            echo " days ";
        }
        echo ".</p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Description</h2>
                                    <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                    </p>
                                </blockquote>
                                <hr>
                            </div>
                        </div>


                    </div>
                </div>

                ";
        // line 73
        echo "
                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar\">
                    <div class=\"right-side-blog\">

                        <h3>Mode</h3>
                        <div class=\"blog-categories\">
                            <ul>
                                <li><span>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 80, $this->source); })()), "mode", [], "any", false, false, false, 80), "html", null, true);
        echo "</span></li>

                            </ul>
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
        return "formation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  194 => 73,  180 => 61,  166 => 56,  157 => 50,  146 => 44,  139 => 39,  133 => 38,  121 => 35,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}<title>Course details</title>{% endblock %}

{% block body %}
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>{#{{ formation.titre }}#}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog details -->
    <div class=\"blog-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"heading-title text-center\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8 col-12\">
                    <div class=\"blog-inner-details-page\">
                        <div class=\"blog-inner-box\">
                            <div class=\"side-blog-img\">
                            </div>
                            <div class=\"inner-blog-detail details-page\">
                                <ul>
                                    <li>Price : <span>
                                            {% if(formation.price == 0) %} Free {% else %} {{ formation.price }} DT {% endif %}</span>
                                    </li>
                                    <li>
                                        {% if(formation.price != 0) %}  <a href=\"{{ path('add_formation_cart',{'id':formation.id}) }}\" class=\"btn btn-info\"> Add to Cart</a>  {% endif %}
                                    </li>
                                </ul>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Starting and ending dates</h2>
                                    <p>From {{ formation.dateDebut|date('d M Y') }} to {{ formation.dateFin|date('d M Y') }}.
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Time</h2>
                                    <p>{{ formation.dateDebut|date('H:i') }}.
                                    </p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Duration</h2>
                                    <p>{{ formation.duree }} {% if formation.duree == '1' %} day {% else %} days {% endif %}.</p>
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Description</h2>
                                    <p>{{ formation.description }}
                                    </p>
                                </blockquote>
                                <hr>
                            </div>
                        </div>


                    </div>
                </div>

                {# Right #}

                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar\">
                    <div class=\"right-side-blog\">

                        <h3>Mode</h3>
                        <div class=\"blog-categories\">
                            <ul>
                                <li><span>{{ formation.mode }}</span></li>

                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "formation/show.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\formation\\show.html.twig");
    }
}
