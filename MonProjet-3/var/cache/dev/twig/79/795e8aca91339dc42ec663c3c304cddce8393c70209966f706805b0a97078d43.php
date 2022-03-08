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

/* cart/index.html.twig */
class __TwigTemplate_f36140860437eb4da0159bfac5fed4d512012523b3b0dee4298bb4732fdc5e60 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Cart";
        
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
        echo "    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>Cart</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                Cart
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class=\"site-main woocommerce single single-product page-wrapper\">
        <!--shop category start-->
        <section class=\"space-3\">
            <div class=\"container sm-center\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <article id=\"post-6\" class=\"post-6 page type-page status-publish hentry\">
                            <!-- .entry-header -->
                            <div class=\"entry-content\">
                                <div class=\"woocommerce\"><div class=\"woocommerce-notices-wrapper\"></div>
                                    <form class=\"woocommerce-cart-form\" action=\"\" method=\"\">
                                        <table class=\"shop_table shop_table_responsive cart woocommerce-cart-form__contents\" cellspacing=\"0\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-remove\">&nbsp;</th>
                                                <th class=\"product-thumbnail\">&nbsp;</th>
                                                <th class=\"product-name\">Product</th>
                                                <th class=\"product-price\">Price</th>
                                                <th class=\"product-quantity\">Quantity</th>
                                                <th class=\"product-subtotal\">Total</th>
                                                <th class=\"product-subtotal\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datapanier"]) || array_key_exists("datapanier", $context) ? $context["datapanier"] : (function () { throw new RuntimeError('Variable "datapanier" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                                            <tr class=\"woocommerce-cart-form__cart-item cart_item\">
                                                <td class=\"product-remove\">
                                                    <a href=\"#\" class=\"remove\" aria-label=\"Remove this item\" data-product_id=\"30\" data-product_sku=\"\">×</a>\t\t\t\t\t\t</td>
                                                <td class=\"product-thumbnail\">
                                                    <a href=\"#\"><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 55), "image", [], "any", false, false, false, 55)), "html", null, true);
            echo "\" class=\"attachment-woocommerce_thumbnail size-woocommerce_thumbnail\" alt=\"\" width=\"324\" height=\"324\"></a>
                                                </td>

                                                <td class=\"product-name\" data-title=\"Product\">
                                                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "
                                                </td>

                                                <td class=\"product-price\" data-title=\"Price\">
                                                    <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND</span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 63), "price", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                                                </td>

                                                <td class=\"product-quantity\" data-title=\"Quantity\">
                                                    <div class=\"quantity\">
                                                        ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 68), "html", null, true);
            echo "
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\" data-title=\"Total\">
                                                    <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND</span>";
            // line 72
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 72) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 72), "price", [], "any", false, false, false, 72)), "html", null, true);
            echo "</span>
                                                </td>
                                                <td class=\"align-items\">
                                                    <a class=\"btn btn-success\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-cart-plus\"></i>
                                                    </a>
                                                    <a class=\"btn btn-warning\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                    <a class=\"btn btn-danger\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                            <tr>
                                                <td colspan=\"6\" class=\"actions\">
                                                    <a class=\"btn btn-danger\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteAll");
        echo "\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div><!-- .entry-content -->
                        </article>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"cart-collaterals\">
                            <div class=\"cart_totals \">
                                <h2>Cart totals</h2>
                                <table class=\"shop_table shop_table_responsive\" cellspacing=\"0\">
                                    <tbody><tr class=\"cart-subtotal\">
                                        <th>Total</th>
                                        <td data-title=\"Subtotal\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND </span>";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "</span></td>
                                    </tr>
                                    <tr class=\"order-total\">
                                        <th>Total apres remise</th>
                                        <td data-title=\"Total\"><strong><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>18.00</span></strong> </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"wc-proceed-to-checkout\">
                                    <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkOut");
        echo "\" class=\"checkout-button button alt wc-forward\">
                                        Proceed to checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 117,  229 => 108,  207 => 89,  203 => 87,  191 => 81,  185 => 78,  179 => 75,  173 => 72,  166 => 68,  158 => 63,  151 => 59,  144 => 55,  138 => 51,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cart{% endblock %}

{% block body %}
    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>Cart</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                Cart
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class=\"site-main woocommerce single single-product page-wrapper\">
        <!--shop category start-->
        <section class=\"space-3\">
            <div class=\"container sm-center\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <article id=\"post-6\" class=\"post-6 page type-page status-publish hentry\">
                            <!-- .entry-header -->
                            <div class=\"entry-content\">
                                <div class=\"woocommerce\"><div class=\"woocommerce-notices-wrapper\"></div>
                                    <form class=\"woocommerce-cart-form\" action=\"\" method=\"\">
                                        <table class=\"shop_table shop_table_responsive cart woocommerce-cart-form__contents\" cellspacing=\"0\">
                                            <thead>
                                            <tr>
                                                <th class=\"product-remove\">&nbsp;</th>
                                                <th class=\"product-thumbnail\">&nbsp;</th>
                                                <th class=\"product-name\">Product</th>
                                                <th class=\"product-price\">Price</th>
                                                <th class=\"product-quantity\">Quantity</th>
                                                <th class=\"product-subtotal\">Total</th>
                                                <th class=\"product-subtotal\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for item in datapanier %}
                                            <tr class=\"woocommerce-cart-form__cart-item cart_item\">
                                                <td class=\"product-remove\">
                                                    <a href=\"#\" class=\"remove\" aria-label=\"Remove this item\" data-product_id=\"30\" data-product_sku=\"\">×</a>\t\t\t\t\t\t</td>
                                                <td class=\"product-thumbnail\">
                                                    <a href=\"#\"><img src=\"{{ asset('uploads/')~ item.produit.image}}\" class=\"attachment-woocommerce_thumbnail size-woocommerce_thumbnail\" alt=\"\" width=\"324\" height=\"324\"></a>
                                                </td>

                                                <td class=\"product-name\" data-title=\"Product\">
                                                    {{ item.produit.name }}
                                                </td>

                                                <td class=\"product-price\" data-title=\"Price\">
                                                    <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND</span>{{ item.produit.price }}</span>
                                                </td>

                                                <td class=\"product-quantity\" data-title=\"Quantity\">
                                                    <div class=\"quantity\">
                                                        {{ item.quantite }}
                                                    </div>
                                                </td>
                                                <td class=\"product-subtotal\" data-title=\"Total\">
                                                    <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND</span>{{ item.quantite * item.produit.price }}</span>
                                                </td>
                                                <td class=\"align-items\">
                                                    <a class=\"btn btn-success\" href=\"{{ path('add_cart' , {\"id\" : item.produit.id}) }}\">
                                                        <i class=\"fa fa-cart-plus\"></i>
                                                    </a>
                                                    <a class=\"btn btn-warning\" href=\"{{ path('remove_cart' , {\"id\" : item.produit.id}) }}\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                    <a class=\"btn btn-danger\" href=\"{{ path('delete_cart' , {\"id\" : item.produit.id}) }}\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            {% endfor %}
                                            <tr>
                                                <td colspan=\"6\" class=\"actions\">
                                                    <a class=\"btn btn-danger\" href=\"{{ path('deleteAll')}}\">
                                                        <i class=\"fa fa-cart-arrow-down\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div><!-- .entry-content -->
                        </article>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"cart-collaterals\">
                            <div class=\"cart_totals \">
                                <h2>Cart totals</h2>
                                <table class=\"shop_table shop_table_responsive\" cellspacing=\"0\">
                                    <tbody><tr class=\"cart-subtotal\">
                                        <th>Total</th>
                                        <td data-title=\"Subtotal\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">TND </span>{{ total }}</span></td>
                                    </tr>
                                    <tr class=\"order-total\">
                                        <th>Total apres remise</th>
                                        <td data-title=\"Total\"><strong><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>18.00</span></strong> </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class=\"wc-proceed-to-checkout\">
                                    <a href=\"{{ path('checkOut')}}\" class=\"checkout-button button alt wc-forward\">
                                        Proceed to checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>
{% endblock %}
", "cart/index.html.twig", "/Users/amiraaissaoui/Downloads/MonProjet-3/templates/cart/index.html.twig");
    }
}
