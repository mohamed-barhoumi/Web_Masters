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

/* commande/show.html.twig */
class __TwigTemplate_9eda15e0486b75afde0fd0be2eb1bd0cf6b5a9c5f9d1f68e3a804703fbb75f40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/show.html.twig", 1);
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
        echo "    <!-- Start All Pages -->
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Cart</h1>
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

                            <div class=\"inner-blog-detail details-page\">
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "
                                    ";
            // line 34
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34))) {
                // line 35
                echo "                                        <blockquote>
                                            <h3>Course :</h3> <h3>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 36), "description", [], "any", false, false, false, 36), "html", null, true);
                echo "</h3><br>
                                            <h3>Price  :</h3> <h3>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37), "html", null, true);
                echo " DT</h3><br>
                                            <label><h3>Quantity</h3></label>
                                            <input class=\"form-control\" id=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\"  type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 39), "html", null, true);
                echo "\" min=\"1\" >
                                            <hr>
                                            <a class=\"btn btn-danger\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Delete Item</a>
                                            <a class=\"btn btn-info\" onclick=\"updateCartFormation(";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
                echo ")\" href=\"javascript:void(0)\">Update Item</a>
                                        </blockquote>


                                    ";
            }
            // line 47
            echo "                                    <br>

                                    ";
            // line 49
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))) {
                // line 50
                echo "                                        <blockquote>
                                            <h3>Tutorial Title : </h3> <h3>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 51), "titre", [], "any", false, false, false, 51), "html", null, true);
                echo "</h3><br>
                                            <h3>Price  : </h3> <h3>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 52), "prix", [], "any", false, false, false, 52), "html", null, true);
                echo " DT</h3><br>
                                            <label><h3>Quantity</h3></label>
                                            <input class=\"form-control\" id=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\" type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 54), "html", null, true);
                echo "\" min=\"1\"> <hr>

                                            <a class=\"btn btn-danger\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">Delete Item</a>
                                            <a class=\"btn btn-info\" onclick=\"updateCartTutorial(";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
                echo ")\" href=\"javascript:void(0)\">Update Item</a>


                                        </blockquote>

                                    ";
            }
            // line 63
            echo "                                    <hr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                ";
        $context["total"] = 0;
        // line 66
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "                                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 67, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 67));
            // line 68
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                <blockquote><p>Cart Total : ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 69, $this->source); })()), "html", null, true);
        echo " DT</p></blockquote>
                                <button class=\"btn btn-success\">Checkout</button>








                            </div>
                        </div>


                    </div>
                </div>

                ";
        // line 87
        echo "


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
        return "commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 87,  203 => 69,  197 => 68,  194 => 67,  189 => 66,  186 => 65,  179 => 63,  168 => 57,  164 => 56,  157 => 54,  152 => 52,  148 => 51,  145 => 50,  143 => 49,  139 => 47,  129 => 42,  125 => 41,  118 => 39,  113 => 37,  109 => 36,  106 => 35,  104 => 34,  101 => 33,  97 => 32,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <!-- Start All Pages -->
    <div class=\"all-page-title page-breadcrumb\">
        <div class=\"container text-center\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Cart</h1>
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

                            <div class=\"inner-blog-detail details-page\">
                                {% for item in paniers %}

                                    {% if item.formation.id is not null %}
                                        <blockquote>
                                            <h3>Course :</h3> <h3>{{ item.formation.description }}</h3><br>
                                            <h3>Price  :</h3> <h3>{{ item.formation.price }} DT</h3><br>
                                            <label><h3>Quantity</h3></label>
                                            <input class=\"form-control\" id=\"{{ item.id }}\"  type=\"number\" value=\"{{ item.qte}}\" min=\"1\" >
                                            <hr>
                                            <a class=\"btn btn-danger\" href=\"{{ path('panier_delete',{'id':item.id}) }}\">Delete Item</a>
                                            <a class=\"btn btn-info\" onclick=\"updateCartFormation({{ item.id }},{{ item.formation.id }})\" href=\"javascript:void(0)\">Update Item</a>
                                        </blockquote>


                                    {% endif %}
                                    <br>

                                    {% if item.tutorial.id is not null %}
                                        <blockquote>
                                            <h3>Tutorial Title : </h3> <h3>{{ item.tutorial.titre }}</h3><br>
                                            <h3>Price  : </h3> <h3>{{ item.tutorial.prix }} DT</h3><br>
                                            <label><h3>Quantity</h3></label>
                                            <input class=\"form-control\" id=\"{{ item.id }}\" type=\"number\" value=\"{{ item.qte}}\" min=\"1\"> <hr>

                                            <a class=\"btn btn-danger\" href=\"{{ path('panier_delete',{'id':item.id}) }}\">Delete Item</a>
                                            <a class=\"btn btn-info\" onclick=\"updateCartTutorial({{ item.id }},{{ item.tutorial.id }})\" href=\"javascript:void(0)\">Update Item</a>


                                        </blockquote>

                                    {% endif %}
                                    <hr>
                                {% endfor %}
                                {% set total=0 %}
                                {% for item in paniers %}
                                    {% set total=total+item.total %}
                                {% endfor %}
                                <blockquote><p>Cart Total : {{ total }} DT</p></blockquote>
                                <button class=\"btn btn-success\">Checkout</button>








                            </div>
                        </div>


                    </div>
                </div>

                {# Right #}



            </div>
        </div>
    </div>

    <!-- End details -->
{% endblock %}
", "commande/show.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\commande\\show.html.twig");
    }
}
