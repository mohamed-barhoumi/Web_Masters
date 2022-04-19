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

/* pf/index.html.twig */
class __TwigTemplate_4ee597b04aaab77bbabaacfc55f287a7ecf8aa0e1af01ab3baa7da796897e8de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pf/index.html.twig", 1);
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

        echo "Produit index";
        
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
        echo "    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>Products</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                Products
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"section-padding course\">
        <div class=\"course-top-wrap\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-8\">
                        <p>Showing 1-6 of 8 results</p>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"topbar-search\">
                            <form method=\"get\" action=\"#\">
                                <input type=\"text\"  placeholder=\"Search our courses\" class=\"form-control\" id=\"search\">
                                <label><i class=\"fa fa-search\"></i></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"container\">
            <div class=\"row\" id=\"all\">
                ";
        // line 50
        $this->loadTemplate("pf/ajaxRes.html.twig", "pf/index.html.twig", 50)->display($context);
        // line 51
        echo "
            </div>
            <div class=\"row\" id=\"search\">
            </div>


            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"post-navigation text-center\">
                        ";
        // line 60
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 60, $this->source); })()));
        echo "

                        <!--<ul>
                            <li class=\"page-num active\" aria-current=\"page\">
                        <span class=\"page-url\">
                          1
                          <span class=\"sr-only\">(current)</span>
                        </span>
                            </li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\">2</a></li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\">3</a></li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>--->
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <script>
        \$(document).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchResajax");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pf/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 91,  147 => 60,  136 => 51,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>Products</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                Products
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"section-padding course\">
        <div class=\"course-top-wrap\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-8\">
                        <p>Showing 1-6 of 8 results</p>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"topbar-search\">
                            <form method=\"get\" action=\"#\">
                                <input type=\"text\"  placeholder=\"Search our courses\" class=\"form-control\" id=\"search\">
                                <label><i class=\"fa fa-search\"></i></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"container\">
            <div class=\"row\" id=\"all\">
                {% include 'pf/ajaxRes.html.twig' %}

            </div>
            <div class=\"row\" id=\"search\">
            </div>


            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <nav class=\"post-navigation text-center\">
                        {{ knp_pagination_render(produits) }}

                        <!--<ul>
                            <li class=\"page-num active\" aria-current=\"page\">
                        <span class=\"page-url\">
                          1
                          <span class=\"sr-only\">(current)</span>
                        </span>
                            </li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\">2</a></li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\">3</a></li>
                            <li class=\"page-num\"><a class=\"page-url\" href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>--->
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <script>
        \$(document).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"{{ path('searchResajax') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>




{% endblock %}
", "pf/index.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\pf\\index.html.twig");
    }
}
