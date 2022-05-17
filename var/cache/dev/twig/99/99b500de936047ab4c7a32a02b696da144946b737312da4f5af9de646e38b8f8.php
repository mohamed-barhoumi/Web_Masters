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

/* admin/formation/index.html.twig */
class __TwigTemplate_43d39c10d9712ad1de7d8f611bb7cf3291ec5bc0c2a3e45010cc2d57ed9dfdfc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/index.html.twig", 1);
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

        echo "<title>Browse Courses</title>";
        
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
                <h4 class=\"m-t-0 header-title\">Courses</h4>
                <p class=\"text-muted font-14 m-b-30\">
                </p>
                <div id=\"datatable-buttons_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-6\">
                            <div class=\"dt-buttons btn-group\">
                                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_back_new");
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
                                    <th>Description</th>
                                    <th>Mode</th>
                                    <th>Duration</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Hour</th>
                                    <th>Price</th>
                                    <th>Show</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 43
            echo "                                    <tr>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "mode", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "dateDebut", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateDebut", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "dateFin", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateFin", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "dateDebut", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateDebut", [], "any", false, false, false, 49), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "price", [], "any", false, false, false, 50), "html", null, true);
            echo " TD</td>
                                        <td>
                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">show</a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">edit</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                                    <tr>
                                        <td colspan=\"\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 73
        echo "
";
        // line 75
        echo "

";
        // line 84
        echo "

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 84,  202 => 75,  199 => 73,  190 => 63,  181 => 59,  172 => 55,  166 => 52,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  134 => 43,  129 => 42,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}<title>Browse Courses</title>{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card-box table-responsive\">
                <h4 class=\"m-t-0 header-title\">Courses</h4>
                <p class=\"text-muted font-14 m-b-30\">
                </p>
                <div id=\"datatable-buttons_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4 no-footer\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-6\">
                            <div class=\"dt-buttons btn-group\">
                                <a href=\"{{ path('formation_back_new') }}\" class=\"btn btn-secondary buttons-copy buttons-html5\">
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
                                    <th>Description</th>
                                    <th>Mode</th>
                                    <th>Duration</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Hour</th>
                                    <th>Price</th>
                                    <th>Show</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for formation in formations %}
                                    <tr>
                                        <td>{{ formation.description }}</td>
                                        <td>{{ formation.mode }}</td>
                                        <td>{{ formation.duree }}</td>
                                        <td>{{ formation.dateDebut ? formation.dateDebut|date('Y-m-d') : '' }}</td>
                                        <td>{{ formation.dateFin ? formation.dateFin|date('Y-m-d') : '' }}</td>
                                        <td>{{ formation.dateDebut ? formation.dateDebut|date('H:i') : '' }}</td>
                                        <td>{{ formation.price }} TD</td>
                                        <td>
                                            <a href=\"{{ path('formation_back_show', {'id': formation.id}) }}\">show</a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('formation_back_edit', {'id': formation.id}) }}\">edit</a>
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
{% endblock %}", "admin/formation/index.html.twig", "C:\\Users\\elbarhoumi\\OneDrive\\Desktop\\PROJET PI\\middlefeast\\templates\\admin\\formation\\index.html.twig");
    }
}
