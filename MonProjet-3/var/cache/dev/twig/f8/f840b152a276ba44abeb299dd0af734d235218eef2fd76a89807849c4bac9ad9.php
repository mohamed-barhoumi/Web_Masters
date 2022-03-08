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

/* reclamation/new.html.twig */
class __TwigTemplate_b72c05ad23953408e8e106abb9c271cd73cf41c6c58e2d4ab7ec3b7f17549c6c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section class=\"contact section-padding\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-7 col-xl-7\">
                    <div class=\"section-heading center-heading\">
                        <span class=\"subheading\">contact</span>
                        <h3>For more information about our courses, get in touch</h3>
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Email Us</p>
                                <h4>support@email.com</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Make a Call</p>
                                <h4>+45 234 345467</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Corporate Office</p>
                                <h4>Moon Street Light Avenue, 14/05
                                    Jupiter, JP 80630 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"contact__form\" >
                        ";
        // line 43
        echo twig_include($this->env, $context, "reclamation/_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <section class=\"contact section-padding\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-7 col-xl-7\">
                    <div class=\"section-heading center-heading\">
                        <span class=\"subheading\">contact</span>
                        <h3>For more information about our courses, get in touch</h3>
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Email Us</p>
                                <h4>support@email.com</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Make a Call</p>
                                <h4>+45 234 345467</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"contact-item\">
                                <p>Corporate Office</p>
                                <h4>Moon Street Light Avenue, 14/05
                                    Jupiter, JP 80630 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"contact__form\" >
                        {{ include('reclamation/_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </section>






{% endblock %}
", "reclamation/new.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\reclamation\\new.html.twig");
    }
}
