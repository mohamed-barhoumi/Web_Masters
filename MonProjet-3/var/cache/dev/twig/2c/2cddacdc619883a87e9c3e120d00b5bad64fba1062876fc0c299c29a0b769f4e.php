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

/* produit/index.html.twig */
class __TwigTemplate_6c4682bedffd1939f9b42d72c4be9cbb6bdf4d3d7b7fac61bc6a8018d4ac24e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "produit/index.html.twig", 1);
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
        echo "    <div class=\"container-fluid mt--7\">
        <!-- Table -->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"mb-0\">Card tables</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>quantity</th>
                                <th>description</th>
                                <th>category</th>
                                <th>actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 30
            echo "
                                <tr>
                                    <td>
                                        ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "
                                    </td>

                                    <th scope=\"row\">
                                        <div class=\"media align-items-center\">
                                            <a href=\"#\" class=\"avatar rounded-circle mr-3\">
                                                <img alt=\"Image placeholder\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 39)), "html", null, true);
            echo "\">
                                            </a>
                                            <div class=\"media-body\">
                                                <span class=\"mb-0 text-sm\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    </th>

                                    <td>
                      <span class=\"badge badge-dot mr-4\">
                            \$";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 49), "html", null, true);
            echo "
                      </span>
                                    </td>
                                    <td>
                                        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantity", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 56), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "category", [], "any", false, false, false, 59), "html", null, true);
            echo "
                                    </td>

                                    <td >
                                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">edit</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer py-4\">
                        <nav aria-label=\"...\">
                            <ul class=\"pagination justify-content-end mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                        <i class=\"fas fa-angle-left\"></i>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                </li>
                                <li class=\"page-item active\">
                                    <a class=\"page-link\" href=\"#\">1</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">
                                        <i class=\"fas fa-angle-right\"></i>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\">Create new</a>
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
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 96,  183 => 67,  173 => 63,  166 => 59,  160 => 56,  154 => 53,  147 => 49,  137 => 42,  131 => 39,  122 => 33,  117 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    <div class=\"container-fluid mt--7\">
        <!-- Table -->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"mb-0\">Card tables</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>quantity</th>
                                <th>description</th>
                                <th>category</th>
                                <th>actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for p in produits %}

                                <tr>
                                    <td>
                                        {{ p.id }}
                                    </td>

                                    <th scope=\"row\">
                                        <div class=\"media align-items-center\">
                                            <a href=\"#\" class=\"avatar rounded-circle mr-3\">
                                                <img alt=\"Image placeholder\" src=\"{{ asset('uploads/') ~p.image}}\">
                                            </a>
                                            <div class=\"media-body\">
                                                <span class=\"mb-0 text-sm\">{{ p.name }}</span>
                                            </div>
                                        </div>
                                    </th>

                                    <td>
                      <span class=\"badge badge-dot mr-4\">
                            \${{ p.price }}
                      </span>
                                    </td>
                                    <td>
                                        {{ p.quantity }}
                                    </td>
                                    <td>
                                        {{ p.description }}
                                    </td>
                                    <td>
                                        {{ p.category }}
                                    </td>

                                    <td >
                                        <a href=\"{{ path('produit_edit', {'id': p.id}) }}\">edit</a>
                                    </td>
                                </tr>
                            {% endfor %}


                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer py-4\">
                        <nav aria-label=\"...\">
                            <ul class=\"pagination justify-content-end mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                        <i class=\"fas fa-angle-left\"></i>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                </li>
                                <li class=\"page-item active\">
                                    <a class=\"page-link\" href=\"#\">1</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">
                                        <i class=\"fas fa-angle-right\"></i>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <a href=\"{{ path('produit_new') }}\">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
", "produit/index.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\produit\\index.html.twig");
    }
}
