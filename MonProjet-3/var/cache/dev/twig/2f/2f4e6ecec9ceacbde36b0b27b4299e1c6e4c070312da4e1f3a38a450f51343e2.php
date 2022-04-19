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
class __TwigTemplate_42978879ed2277d81b5a2f01409788c3db77009ee863e91821080b29a29c749c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        // line 1
        echo "
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Invoice</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"license\" href=\"https://www.opensource.org/licenses/mit-license/\">
    <script src=\"script.js\"></script>
</head>
<body>
<header>
    <h1>Invoice</h1>
    <address contenteditable>
        <p>Jonathan Neal</p>
        <p>101 E. Chapman Ave<br>Orange, CA 92866</p>
        <p>(800) 555-1234</p>
    </address>

</header>
<article>
    <h1>Recipient</h1>
    <address contenteditable>
        <p>Jawek Sport</p>
    </address>
    <table class=\"meta\">
        <tr>
            <th><span contenteditable>Invoice #</span></th>
            <td><span contenteditable>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Date</span></th>
            <td><span contenteditable>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 32, $this->source); })()), "dateCommande", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 32, $this->source); })()), "dateCommande", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</span></td>
        </tr>
    </table>
    <table class=\"inventory\">
        <thead>

        <tr>
            <th><span contenteditable>Produit</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Price</span></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lc"]) || array_key_exists("lc", $context) ? $context["lc"] : (function () { throw new RuntimeError('Variable "lc" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "            <tr>
                <td><a class=\"cut\">-</a><span contenteditable>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</span></td>
                <td><span contenteditable>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nbProduit", [], "any", false, false, false, 48), "html", null, true);
            echo "</span></td>
                <td><span data-prefix>\$</span><span contenteditable>\$";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prixTotal", [], "any", false, false, false, 49), "html", null, true);
            echo "</span></td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
    <a class=\"add\">+</a>
    <table class=\"balance\">
        <tr>
            <th><span contenteditable>Total</span></th>
            <td><span data-prefix>\$</span><span>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 59, $this->source); })()), "montantTotal", [], "any", false, false, false, 59), "html", null, true);
        echo "</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Remise</span></th>
            <td><span data-prefix>\$</span><span contenteditable>0.00</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Balance Due</span></th>
            <td><span data-prefix>\$</span><span>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 67, $this->source); })()), "montantTotal", [], "any", false, false, false, 67), "html", null, true);
        echo "</span></td>
        </tr>
    </table>
</article>
<aside>
    <h1><span contenteditable>Additional Notes</span></h1>
    <div contenteditable>
        <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
    </div>
</aside>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  142 => 67,  131 => 59,  123 => 53,  113 => 49,  109 => 48,  105 => 47,  102 => 46,  98 => 45,  82 => 32,  75 => 28,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Invoice</title>
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/style.css') }}\">
    <link rel=\"license\" href=\"https://www.opensource.org/licenses/mit-license/\">
    <script src=\"script.js\"></script>
</head>
<body>
<header>
    <h1>Invoice</h1>
    <address contenteditable>
        <p>Jonathan Neal</p>
        <p>101 E. Chapman Ave<br>Orange, CA 92866</p>
        <p>(800) 555-1234</p>
    </address>

</header>
<article>
    <h1>Recipient</h1>
    <address contenteditable>
        <p>Jawek Sport</p>
    </address>
    <table class=\"meta\">
        <tr>
            <th><span contenteditable>Invoice #</span></th>
            <td><span contenteditable>{{ commande.id }}</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Date</span></th>
            <td><span contenteditable>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d') : '' }}</span></td>
        </tr>
    </table>
    <table class=\"inventory\">
        <thead>

        <tr>
            <th><span contenteditable>Produit</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Price</span></th>
        </tr>
        </thead>
        <tbody>
        {% for i in lc %}
            <tr>
                <td><a class=\"cut\">-</a><span contenteditable>{{ i.produit.name  }}</span></td>
                <td><span contenteditable>{{ i.nbProduit }}</span></td>
                <td><span data-prefix>\$</span><span contenteditable>\${{ i.prixTotal }}</span></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a class=\"add\">+</a>
    <table class=\"balance\">
        <tr>
            <th><span contenteditable>Total</span></th>
            <td><span data-prefix>\$</span><span>{{ commande.montantTotal  }}</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Remise</span></th>
            <td><span data-prefix>\$</span><span contenteditable>0.00</span></td>
        </tr>
        <tr>
            <th><span contenteditable>Balance Due</span></th>
            <td><span data-prefix>\$</span><span>{{ commande.montantTotal  }}</span></td>
        </tr>
    </table>
</article>
<aside>
    <h1><span contenteditable>Additional Notes</span></h1>
    <div contenteditable>
        <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
    </div>
</aside>
</body>
</html>", "commande/show.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\commande\\show.html.twig");
    }
}
