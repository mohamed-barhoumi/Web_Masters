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

/* panier/index.html.twig */
class __TwigTemplate_bfe8d0ce47efd517a427702aa231c62eb5bb8887dd64a9018fcd804059279a42 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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
                echo "                                            <blockquote>
                                                <h3>Course :</h3> <h3>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 36), "description", [], "any", false, false, false, 36), "html", null, true);
                echo "</h3><br>
                                                <h3>Price  :</h3> <h3>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37), "html", null, true);
                echo " DT</h3><br>
                                                <label><h3>Quantity</h3></label>
                                                <input class=\"form-control\" onchange=\"updateCartFormation(";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formation", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
                echo ")\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\"  type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 39), "html", null, true);
                echo "\" min=\"1\" >
                                                <hr>
                                                <a class=\"btn btn-danger\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Delete Item</a>
                                            </blockquote>


                                    ";
            }
            // line 46
            echo "                                    <br>

                                    ";
            // line 48
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48))) {
                // line 49
                echo "                                            <blockquote>
                                                <h3>Tutorial Title : </h3> <h3>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 50), "titre", [], "any", false, false, false, 50), "html", null, true);
                echo "</h3><br>
                                                <h3>Price  : </h3> <h3>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 51), "prix", [], "any", false, false, false, 51), "html", null, true);
                echo " DT</h3><br>
                                                <label><h3>Quantity</h3></label>
                                                <input class=\"form-control\" onchange=\"updateCartTutorial(";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "tutorial", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
                echo ")\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 53), "html", null, true);
                echo "\" min=\"1\"> <hr>

                                                <a class=\"btn btn-danger\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">Delete Item</a>
                                            </blockquote>

                                    ";
            }
            // line 59
            echo "                                    <hr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                ";
        $context["total"] = 0;
        // line 62
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "                                   ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 63));
            // line 64
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                <blockquote><p>Cart Total : ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " DT</p></blockquote>
                                <a class=\"btn btn-success\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">Checkout</a>








                            </div>
                        </div>


                    </div>
                </div>

                ";
        // line 83
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
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 83,  202 => 66,  197 => 65,  191 => 64,  188 => 63,  183 => 62,  180 => 61,  173 => 59,  166 => 55,  155 => 53,  150 => 51,  146 => 50,  143 => 49,  141 => 48,  137 => 46,  129 => 41,  118 => 39,  113 => 37,  109 => 36,  106 => 35,  104 => 34,  101 => 33,  97 => 32,  68 => 5,  58 => 4,  35 => 1,);
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
                                                <input class=\"form-control\" onchange=\"updateCartFormation({{ item.id }},{{ item.formation.id }})\" id=\"{{ item.id }}\"  type=\"number\" value=\"{{ item.qte}}\" min=\"1\" >
                                                <hr>
                                                <a class=\"btn btn-danger\" href=\"{{ path('panier_delete',{'id':item.id}) }}\">Delete Item</a>
                                            </blockquote>


                                    {% endif %}
                                    <br>

                                    {% if item.tutorial.id is not null %}
                                            <blockquote>
                                                <h3>Tutorial Title : </h3> <h3>{{ item.tutorial.titre }}</h3><br>
                                                <h3>Price  : </h3> <h3>{{ item.tutorial.prix }} DT</h3><br>
                                                <label><h3>Quantity</h3></label>
                                                <input class=\"form-control\" onchange=\"updateCartTutorial({{ item.id }},{{ item.tutorial.id }})\" id=\"{{ item.id }}\" type=\"number\" value=\"{{ item.qte}}\" min=\"1\"> <hr>

                                                <a class=\"btn btn-danger\" href=\"{{ path('panier_delete',{'id':item.id}) }}\">Delete Item</a>
                                            </blockquote>

                                    {% endif %}
                                    <hr>
                                {% endfor %}
                                {% set total=0 %}
                                {% for item in paniers %}
                                   {% set total=total+item.total %}
                                {% endfor %}
                                <blockquote><p>Cart Total : {{ total }} DT</p></blockquote>
                                <a class=\"btn btn-success\" href=\"{{ path(\"checkout\") }}\">Checkout</a>








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
", "panier/index.html.twig", "C:\\Users\\MSI\\Desktop\\middlefeast\\templates\\panier\\index.html.twig");
    }
}
