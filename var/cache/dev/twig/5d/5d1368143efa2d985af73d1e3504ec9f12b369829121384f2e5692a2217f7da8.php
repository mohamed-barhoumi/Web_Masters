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

/* admin/formation/show.html.twig */
class __TwigTemplate_d06fd1af7928009311772a7fb34b6d8797595ceb9aba8a67621321323efd2d4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/show.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card-box task-detail\">
                <div class=\"media m-b-30\">
                    <div class=\"media-body\">
                        <h2 class=\"media-heading mb-0 mt-0\">Course details</h2>
                    </div>
                </div>

    ";
        // line 16
        echo "
                <p class=\"text-muted\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "
                </p>


                <ul class=\"list-inline task-dates m-b-0 m-t-20\">
                    <li>
                        <h5 class=\"font-600 m-b-5\">Starting Date</h5>
                        <p> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25), "d M Y"), "html", null, true);
        echo " </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Ending Date</h5>
                        <p> ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 30, $this->source); })()), "dateFin", [], "any", false, false, false, 30), "d M Y"), "html", null, true);
        echo " </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Time</h5>
                        <p> ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "dateDebut", [], "any", false, false, false, 35), "H:i"), "html", null, true);
        echo " </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Mode</h5>
                        <p> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 40, $this->source); })()), "mode", [], "any", false, false, false, 40), "html", null, true);
        echo " </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Price</h5>
                        <p> ";
        // line 45
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), 0))) {
            echo " This course is for <span class=\"text-success mb-1\">Free</span> ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), "html", null, true);
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
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_back_index");
        echo "\" class=\"btn btn-success waves-effect waves-light\">
                                Save
                            </a>
                            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_back_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
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
        return "admin/formation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  163 => 54,  145 => 45,  137 => 40,  129 => 35,  121 => 30,  113 => 25,  103 => 18,  99 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}<title>Course details</title>{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card-box task-detail\">
                <div class=\"media m-b-30\">
                    <div class=\"media-body\">
                        <h2 class=\"media-heading mb-0 mt-0\">Course details</h2>
                    </div>
                </div>

    {#            <h4 class=\"font-600 m-b-20\">Code HTML email template for welcome email</h4>#}

                <p class=\"text-muted\">
                    {{ formation.description }}
                </p>


                <ul class=\"list-inline task-dates m-b-0 m-t-20\">
                    <li>
                        <h5 class=\"font-600 m-b-5\">Starting Date</h5>
                        <p> {{ formation.dateDebut|date('d M Y') }} </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Ending Date</h5>
                        <p> {{ formation.dateFin|date('d M Y') }} </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Time</h5>
                        <p> {{ formation.dateDebut|date('H:i') }} </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Mode</h5>
                        <p> {{ formation.mode }} </p>
                    </li>

                    <li>
                        <h5 class=\"font-600 m-b-5\">Price</h5>
                        <p> {% if(formation.price == 0) %} This course is for <span class=\"text-success mb-1\">Free</span> {% else %} {{ formation.price }} DT {% endif %} </p>
                    </li>
                </ul>
                <div class=\"clearfix\">

                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"text-right m-t-30\">
                            <a href=\"{{ path('formation_back_index') }}\" class=\"btn btn-success waves-effect waves-light\">
                                Save
                            </a>
                            <a href=\"{{ path('formation_back_edit', {'id': formation.id}) }}\" class=\"btn btn-primary waves-effect waves-light\">
                                Update
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/formation/show.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\admin\\formation\\show.html.twig");
    }
}
