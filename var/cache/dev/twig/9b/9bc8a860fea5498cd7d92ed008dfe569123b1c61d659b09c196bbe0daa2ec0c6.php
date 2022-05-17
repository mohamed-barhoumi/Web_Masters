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

/* tutorial/index.html.twig */
class __TwigTemplate_b100c88d50ec1d17f48939dab89ce9a6a7dcfef078e64416e7e4873cc4179232 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutorial/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutorial/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutorial/index.html.twig", 1);
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

        echo "<title>Browse tutorials</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Tutorials</h1>
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
                            <button class=\"active\" data-filter=\"*\">All</button>
                            <button data-filter=\".starters\">Starters</button>
                            <button data-filter=\".main\">Main Dished</button>
                            <button data-filter=\".side\">Side Dished</button>
                            <button data-filter=\".deserts\">Deserts</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row special-list\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutorials"]) || array_key_exists("tutorials", $context) ? $context["tutorials"] : (function () { throw new RuntimeError('Variable "tutorials" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 39
            echo "
                    ";
            // line 40
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 40), "Starters"))) {
                // line 41
                echo "
                        <div class=\"col-lg-4 col-md-6 special-grid starters\">
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
                            <div class=\"gallery-single fix\">
                                <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["tutorial"], "image", [], "any", false, false, false, 45))), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <h4>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "titre", [], "any", false, false, false, 47), "html", null, true);
                echo " </h4>
                                    <p>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
                                    <h5> ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "prix", [], "any", false, false, false, 49), "html", null, true);
                echo " DT</h5>
                                </div>
                            </div>
                        </a>
                        </div>

                    ";
            }
            // line 56
            echo "
                    ";
            // line 57
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 57), "Main Dishes"))) {
                // line 58
                echo "
                        <div class=\"col-lg-4 col-md-6 special-grid main\">
                            <div class=\"gallery-single fix\">
                                <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["tutorial"], "image", [], "any", false, false, false, 61))), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\"><h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "titre", [], "any", false, false, false, 63), "html", null, true);
                echo " </h4></a>
                                    <p>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 64), "html", null, true);
                echo "</p>
                                    <h5> ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "prix", [], "any", false, false, false, 65), "html", null, true);
                echo "DT</h5>
                                </div>
                            </div>
                        </div>

                    ";
            }
            // line 71
            echo "
                    ";
            // line 72
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 72), "Side Dished"))) {
                // line 73
                echo "
                        <div class=\"col-lg-4 col-md-6 special-grid side\">
                            <div class=\"gallery-single fix\">
                                <img src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["tutorial"], "image", [], "any", false, false, false, 76))), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\"><h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "titre", [], "any", false, false, false, 78), "html", null, true);
                echo " </h4></a>
                                    <p>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 79), "html", null, true);
                echo "</p>
                                    <h5> ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "prix", [], "any", false, false, false, 80), "html", null, true);
                echo "DT</h5>
                                </div>
                            </div>
                        </div>

                    ";
            }
            // line 86
            echo "
                    ";
            // line 87
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 87), "Deserts"))) {
                // line 88
                echo "
                        <div class=\"col-lg-4 col-md-6 special-grid deserts\">
                            <div class=\"gallery-single fix\">
                                <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["tutorial"], "image", [], "any", false, false, false, 91))), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\"><h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "titre", [], "any", false, false, false, 93), "html", null, true);
                echo " </h4></a>
                                    <p>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 94), "html", null, true);
                echo "</p>
                                    <h5> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "prix", [], "any", false, false, false, 95), "html", null, true);
                echo "DT</h5>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 100
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

            </div>
        </div>
    </div>
    <!-- End Menu -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tutorial/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 103,  263 => 100,  255 => 95,  251 => 94,  245 => 93,  240 => 91,  235 => 88,  233 => 87,  230 => 86,  221 => 80,  217 => 79,  211 => 78,  206 => 76,  201 => 73,  199 => 72,  196 => 71,  187 => 65,  183 => 64,  177 => 63,  172 => 61,  167 => 58,  165 => 57,  162 => 56,  152 => 49,  148 => 48,  144 => 47,  139 => 45,  134 => 43,  130 => 41,  128 => 40,  125 => 39,  121 => 38,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}<title>Browse tutorials</title>{% endblock %}


{% block body %}
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Tutorials</h1>
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
                            <button class=\"active\" data-filter=\"*\">All</button>
                            <button data-filter=\".starters\">Starters</button>
                            <button data-filter=\".main\">Main Dished</button>
                            <button data-filter=\".side\">Side Dished</button>
                            <button data-filter=\".deserts\">Deserts</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row special-list\">
                {% for tutorial in tutorials %}

                    {% if tutorial.category == \"Starters\" %}

                        <div class=\"col-lg-4 col-md-6 special-grid starters\">
                        <a href=\"{{ path('tutorial_show',{'id':tutorial.id}) }}\">
                            <div class=\"gallery-single fix\">
                                <img src=\"{{ asset('uploads/'~ tutorial.image ) }}\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <h4>{{ tutorial.titre }} </h4>
                                    <p>{{ tutorial.description }}</p>
                                    <h5> {{ tutorial.prix }} DT</h5>
                                </div>
                            </div>
                        </a>
                        </div>

                    {% endif %}

                    {% if tutorial.category == \"Main Dishes\" %}

                        <div class=\"col-lg-4 col-md-6 special-grid main\">
                            <div class=\"gallery-single fix\">
                                <img src=\"{{ asset('uploads/'~ tutorial.image ) }}\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"{{ path('tutorial_show',{'id':tutorial.id}) }}\"><h4>{{ tutorial.titre }} </h4></a>
                                    <p>{{ tutorial.description }}</p>
                                    <h5> {{ tutorial.prix }}DT</h5>
                                </div>
                            </div>
                        </div>

                    {% endif %}

                    {% if tutorial.category == \"Side Dished\" %}

                        <div class=\"col-lg-4 col-md-6 special-grid side\">
                            <div class=\"gallery-single fix\">
                                <img src=\"{{ asset('uploads/'~ tutorial.image ) }}\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"{{ path('tutorial_show',{'id':tutorial.id}) }}\"><h4>{{ tutorial.titre }} </h4></a>
                                    <p>{{ tutorial.description }}</p>
                                    <h5> {{ tutorial.prix }}DT</h5>
                                </div>
                            </div>
                        </div>

                    {% endif %}

                    {% if tutorial.category == \"Deserts\" %}

                        <div class=\"col-lg-4 col-md-6 special-grid deserts\">
                            <div class=\"gallery-single fix\">
                                <img src=\"{{ asset('uploads/'~ tutorial.image ) }}\" class=\"img-fluid\" alt=\"Image\">
                                <div class=\"why-text\">
                                    <a href=\"{{ path('tutorial_show',{'id':tutorial.id}) }}\"><h4>{{ tutorial.titre }} </h4></a>
                                    <p>{{ tutorial.description }}</p>
                                    <h5> {{ tutorial.prix }}DT</h5>
                                </div>
                            </div>
                        </div>
                    {% endif %}


                {% endfor %}


            </div>
        </div>
    </div>
    <!-- End Menu -->



{% endblock %}", "tutorial/index.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\tutorial\\index.html.twig");
    }
}
