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

/* admin/tutorial/index.html.twig */
class __TwigTemplate_56a1b3fc500e87ff163c0d2430b2dc337e99776ab10bd1d3e7befd6711766f43 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tutorial/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tutorial/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/tutorial/index.html.twig", 1);
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

        echo "<title>Browse Tutorials</title>";
        
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
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card-box table-responsive\">
                <h4 class=\"m-t-0 header-title\">Tutorials</h4>
                <p class=\"text-muted font-14 m-b-30\">
                </p>
                <div id=\"datatable-buttons_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-6\">
                            <div class=\"dt-buttons btn-group\">
                                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_back_new");
        echo "\" class=\"btn btn-secondary buttons-copy buttons-html5\">
                                    <span>Create new entry</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutorials"]) || array_key_exists("tutorials", $context) ? $context["tutorials"] : (function () { throw new RuntimeError('Variable "tutorials" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 38
            echo "                                    <tr>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "titre", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "prix", [], "any", false, false, false, 41), "html", null, true);
            echo " DT</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">show</a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutorial_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                                    <tr>
                                        <td colspan=\"\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 66
        echo "
";
        // line 68
        echo "

";
        // line 77
        echo "

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/tutorial/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  186 => 68,  183 => 66,  174 => 56,  165 => 52,  155 => 47,  149 => 44,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  129 => 38,  124 => 37,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}<title>Browse Tutorials</title>{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card-box table-responsive\">
                <h4 class=\"m-t-0 header-title\">Tutorials</h4>
                <p class=\"text-muted font-14 m-b-30\">
                </p>
                <div id=\"datatable-buttons_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-6\">
                            <div class=\"dt-buttons btn-group\">
                                <a href=\"{{ path('tutorial_back_new') }}\" class=\"btn btn-secondary buttons-copy buttons-html5\">
                                    <span>Create new entry</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for tutorial in tutorials %}
                                    <tr>
                                        <td>{{ tutorial.titre }}</td>
                                        <td>{{ tutorial.description }}</td>
                                        <td>{{ tutorial.prix }} DT</td>
                                        <td>{{ tutorial.category }}</td>
                                        <td>
                                            <a href=\"{{ path('tutorial_back_show', {'id': tutorial.id}) }}\">show</a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('tutorial_back_edit', {'id': tutorial.id}) }}\">edit</a>
                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"\">no records found</td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{#                <div class=\"about-section-box\">#}
{#                    <div class=\"container\">#}
{#                        <div class=\"row\">#}

{#                            <div class=\"col-lg-6 col-md-6 col-sm-12\">#}


{#                                <a href=\"{{ path('formation_new') }}\">Create new</a>#}
{#                            </div>#}
{#                            <div class=\"col-lg-6 col-md-6 col-sm-12 text-center\">#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}


</div>
{% endblock %}", "admin/tutorial/index.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\admin\\tutorial\\index.html.twig");
    }
}
