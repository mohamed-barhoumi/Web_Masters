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

/* tutorial/show.html.twig */
class __TwigTemplate_20fa60ae692ff9e876326e1de061588c7ec30f2d4e75455e08d28fd10ade2cec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutorial/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutorial/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutorial/show.html.twig", 1);
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

        echo "<title>Tutorial details</title>";
        
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
        echo "    <!-- Start All Pages -->
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
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

                                <img class=\"img-fluid\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33))), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"date-blog-up\">
                                    ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 35, $this->source); })()), "dateTuto", [], "any", false, false, false, 35), "d M Y H:i:s"), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"inner-blog-detail details-page\">
                                <ul>
                                    <li>Price : <span>
                                            ";
        // line 41
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 41, $this->source); })()), "prix", [], "any", false, false, false, 41), 0))) {
            echo " Free ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 41, $this->source); })()), "prix", [], "any", false, false, false, 41), "html", null, true);
            echo " DT ";
        }
        echo "</span>
                                    </li>
                                    <li>
                                        ";
        // line 44
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 44, $this->source); })())), 0))) {
            // line 45
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 45, $this->source); })()), "prix", [], "any", false, false, false, 45), 0))) {
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tuto_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-info\"> Add to Cart</a>  ";
            }
            // line 46
            echo "
                                        ";
        } else {
            // line 48
            echo "                                            <button class=\"btn btn-success\" disabled>Bought</button>
                                        ";
        }
        // line 50
        echo "

                                    </li>

                                </ul>
                                <hr>

                                <blockquote style=\"\">
                                    <h2>Tutorial</h2>
                                    ";
        // line 59
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 59, $this->source); })()), "prix", [], "any", false, false, false, 59), 0))) {
            // line 60
            echo "                                    <video width=\"500\" height=\"500\"  controls >
                                        <source src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 61, $this->source); })()), "video", [], "any", false, false, false, 61))), "html", null, true);
            echo "\" type=\"video/mp4\">
                                        Your browser does not support the video tag.
                                    </video>
                                        ";
        } else {
            // line 65
            echo "                                            ";
            if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 65, $this->source); })())), 0))) {
                // line 66
                echo "                                                <p>This tutorial is Paid please proceed to payment before accessing it</p>

                                            ";
            } else {
                // line 69
                echo "                                                <video width=\"500\" height=\"500\"  controls >
                                                    <source src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 70, $this->source); })()), "video", [], "any", false, false, false, 70))), "html", null, true);
                echo "\" type=\"video/mp4\">
                                                    Your browser does not support the video tag.
                                                </video>


                                            ";
            }
            // line 76
            echo "                                    ";
        }
        // line 77
        echo "                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Description</h2>
                                    <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        echo " Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </blockquote>
                            </div>
                        </div>


                    </div>
                </div>

                ";
        // line 99
        echo "
                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar\">
                    <div class=\"right-side-blog\">

                        <h3>Category</h3>
                        <div class=\"blog-categories\">
                            <ul>
                                <li><span>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106), "html", null, true);
        echo "</span></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End details -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tutorial/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 106,  235 => 99,  215 => 81,  209 => 77,  206 => 76,  197 => 70,  194 => 69,  189 => 66,  186 => 65,  179 => 61,  176 => 60,  174 => 59,  163 => 50,  159 => 48,  155 => 46,  148 => 45,  146 => 44,  134 => 41,  125 => 35,  120 => 33,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}<title>Tutorial details</title>{% endblock %}

{% block body %}
    <!-- Start All Pages -->
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>{{ tutorial.titre }}</h1>
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

                                <img class=\"img-fluid\" src=\"{{ asset('uploads/'~ tutorial.image ) }}\" alt=\"\">
                                <div class=\"date-blog-up\">
                                    {{ tutorial.dateTuto|date(\"d M Y H:i:s\") }}
                                </div>
                            </div>
                            <div class=\"inner-blog-detail details-page\">
                                <ul>
                                    <li>Price : <span>
                                            {% if(tutorial.prix == 0) %} Free {% else %} {{ tutorial.prix }} DT {% endif %}</span>
                                    </li>
                                    <li>
                                        {% if(  commande|length == 0 ) %}
                                            {% if(tutorial.prix != 0) %}  <a href=\"{{ path('add_tuto_cart',{'id':tutorial.id}) }}\" class=\"btn btn-info\"> Add to Cart</a>  {% endif %}

                                        {% else %}
                                            <button class=\"btn btn-success\" disabled>Bought</button>
                                        {% endif %}


                                    </li>

                                </ul>
                                <hr>

                                <blockquote style=\"\">
                                    <h2>Tutorial</h2>
                                    {% if(tutorial.prix == 0) %}
                                    <video width=\"500\" height=\"500\"  controls >
                                        <source src=\"{{ asset('uploads/'~ tutorial.video ) }}\" type=\"video/mp4\">
                                        Your browser does not support the video tag.
                                    </video>
                                        {% else %}
                                            {% if(  commande|length == 0 ) %}
                                                <p>This tutorial is Paid please proceed to payment before accessing it</p>

                                            {% else %}
                                                <video width=\"500\" height=\"500\"  controls >
                                                    <source src=\"{{ asset('uploads/'~ tutorial.video ) }}\" type=\"video/mp4\">
                                                    Your browser does not support the video tag.
                                                </video>


                                            {% endif %}
                                    {% endif %}
                                </blockquote>
                                <hr>
                                <blockquote style=\"\">
                                    <h2>Description</h2>
                                    <p>{{ tutorial.description }} Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </blockquote>
                            </div>
                        </div>


                    </div>
                </div>

                {# Right #}

                <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar\">
                    <div class=\"right-side-blog\">

                        <h3>Category</h3>
                        <div class=\"blog-categories\">
                            <ul>
                                <li><span>{{ tutorial.category }}</span></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End details -->
{% endblock %}
", "tutorial/show.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\tutorial\\show.html.twig");
    }
}
