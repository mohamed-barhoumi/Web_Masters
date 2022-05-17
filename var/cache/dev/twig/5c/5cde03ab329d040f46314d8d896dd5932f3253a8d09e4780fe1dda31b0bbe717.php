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

/* admin/tutorial/show.html.twig */
class __TwigTemplate_ee8bdba57d6f53e6c9490b495ddf7a29c57e27245b93f408da991b0901531dcf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tutorial/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tutorial/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/tutorial/show.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card-box task-detail\">
                <div class=\"media m-b-30\">
                    <div class=\"media-body\">
                        <h2 class=\"media-heading mb-0 mt-0\">Tutorial details</h2>
                    </div>
                </div>

                <h4 class=\"font-600 m-b-20\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>

                ";
        // line 18
        echo "
                <p class=\"text-muted\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </p>

                <ul class=\"list-inline task-dates m-b-0 m-t-20\">
                    <li>
                        <h5 class=\"font-600 m-b-5\">Mode</h5>
                        <p> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), "html", null, true);
        echo " </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Price</h5>
                        <p> ";
        // line 31
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 0))) {
            echo " This tutorial is for <span class=\"text-success mb-1\">Free</span> ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), "html", null, true);
            echo " DT ";
        }
        echo " </p>
                    </li>
                </ul>
                <div class=\"clearfix\">

                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"text-right m-t-30\">
                            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_back_index");
        echo "\" class=\"btn btn-success waves-effect waves-light\">
                                Save
                            </a>
                            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_back_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tutorial"]) || array_key_exists("tutorial", $context) ? $context["tutorial"] : (function () { throw new RuntimeError('Variable "tutorial" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\"btn btn-primary waves-effect waves-light\">
                                Update
                            </a>
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
        return "admin/tutorial/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  143 => 40,  125 => 31,  117 => 26,  108 => 20,  104 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}<title>Tutorial details</title>{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card-box task-detail\">
                <div class=\"media m-b-30\">
                    <div class=\"media-body\">
                        <h2 class=\"media-heading mb-0 mt-0\">Tutorial details</h2>
                    </div>
                </div>

                <h4 class=\"font-600 m-b-20\">{{ tutorial.titre }}</h4>

                {# EMBED VIDEO HERE #}

                <p class=\"text-muted\">
                    {{ tutorial.description }}
                </p>

                <ul class=\"list-inline task-dates m-b-0 m-t-20\">
                    <li>
                        <h5 class=\"font-600 m-b-5\">Mode</h5>
                        <p> {{ tutorial.category }} </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Price</h5>
                        <p> {% if(tutorial.prix == 0) %} This tutorial is for <span class=\"text-success mb-1\">Free</span> {% else %} {{ tutorial.prix }} DT {% endif %} </p>
                    </li>
                </ul>
                <div class=\"clearfix\">

                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"text-right m-t-30\">
                            <a href=\"{{ path('tutorial_back_index') }}\" class=\"btn btn-success waves-effect waves-light\">
                                Save
                            </a>
                            <a href=\"{{ path('tutorial_back_edit', {'id': tutorial.id}) }}\" class=\"btn btn-primary waves-effect waves-light\">
                                Update
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/tutorial/show.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\admin\\tutorial\\show.html.twig");
    }
}
