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

/* produit/new.html.twig */
class __TwigTemplate_fa681be5e74b7455f81d1fb492400aa65a2f51a9c16de2faab9ae3be40ec21cb extends \Twig\Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "produit/new.html.twig", 1);
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

        echo "New Product";
        
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
        echo "    <!-- Page content -->
    <div class=\"container-fluid mt--7\">
        <div class=\"row\">

            <div class=\"col-xl-8 order-xl-1\">
                <div class=\"card bg-secondary shadow\">
                    <div class=\"card-header bg-white border-0\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <h3 class=\"mb-0\">Create New Product</h3>
                            </div>

                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 21
        echo twig_include($this->env, $context, "produit/_form.html.twig");
        echo "
                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        echo "\">back to list</a>

                    </div>

                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class=\"footer\">
            <div class=\"row align-items-center justify-content-xl-between\">
                <div class=\"col-xl-6\">
                    <div class=\"copyright text-center text-xl-left text-muted\">
                        &copy; 2018 <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold ml-1\" target=\"_blank\">Creative Tim</a>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <ul class=\"nav nav-footer justify-content-center justify-content-xl-end\">
                        <li class=\"nav-item\">
                            <a href=\"https://www.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Creative Tim</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link\" target=\"_blank\">About Us</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"http://blog.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md\" class=\"nav-link\" target=\"_blank\">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}New Product{% endblock %}

{% block body %}
    <!-- Page content -->
    <div class=\"container-fluid mt--7\">
        <div class=\"row\">

            <div class=\"col-xl-8 order-xl-1\">
                <div class=\"card bg-secondary shadow\">
                    <div class=\"card-header bg-white border-0\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <h3 class=\"mb-0\">Create New Product</h3>
                            </div>

                        </div>
                    </div>
                    <div class=\"card-body\">
                        {{ include('produit/_form.html.twig') }}
                        <a href=\"{{ path('produit_index') }}\">back to list</a>

                    </div>

                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class=\"footer\">
            <div class=\"row align-items-center justify-content-xl-between\">
                <div class=\"col-xl-6\">
                    <div class=\"copyright text-center text-xl-left text-muted\">
                        &copy; 2018 <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold ml-1\" target=\"_blank\">Creative Tim</a>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <ul class=\"nav nav-footer justify-content-center justify-content-xl-end\">
                        <li class=\"nav-item\">
                            <a href=\"https://www.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Creative Tim</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link\" target=\"_blank\">About Us</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"http://blog.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Blog</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md\" class=\"nav-link\" target=\"_blank\">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>
{% endblock %}
", "produit/new.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\produit\\new.html.twig");
    }
}
