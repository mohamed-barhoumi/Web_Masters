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

/* pf/ajaxRes.html.twig */
class __TwigTemplate_69506a8da3fb3314d70ba928e3fcae6503c1f6e335c9751c870d70ef73caa8c1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/ajaxRes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/ajaxRes.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 2
            echo "    <div class=\"col-xl-4 col-lg-4\">
        <div class=\"course-block\">
            <div class=\"course-img\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 5)), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
                <div class=\"course-price2\">\$";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
            </div>

            <div class=\"course-content\">
                <div class=\"course-meta\">
                    <span class=\"course-student\"></i>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantity", [], "any", false, false, false, 11), "html", null, true);
            echo " in Stock</span>
                    <div class=\"course-meta center\">
                        <a class=\"btn btn-secondary center\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Commander</a>
                    </div>
                </div>

                <h4><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pf_show", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</a></h4>
                <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pf/ajaxRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  76 => 17,  69 => 13,  64 => 11,  56 => 6,  52 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  for p in produits  %}
    <div class=\"col-xl-4 col-lg-4\">
        <div class=\"course-block\">
            <div class=\"course-img\">
                <img src=\"{{ asset('uploads/') ~p.image}}\" alt=\"\" class=\"img-fluid\">
                <div class=\"course-price2\">\${{ p.price }}</div>
            </div>

            <div class=\"course-content\">
                <div class=\"course-meta\">
                    <span class=\"course-student\"></i>{{ p.quantity }} in Stock</span>
                    <div class=\"course-meta center\">
                        <a class=\"btn btn-secondary center\" href=\"{{ path('add_cart' , {\"id\" : p.id})}}\">Commander</a>
                    </div>
                </div>

                <h4><a href=\"{{ path('pf_show', {'id': p.id}) }}\">{{p.name}}</a></h4>
                <p>{{ p.description }}</p>
            </div>
        </div>
    </div>

{%  endfor %}", "pf/ajaxRes.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\pf\\ajaxRes.html.twig");
    }
}
