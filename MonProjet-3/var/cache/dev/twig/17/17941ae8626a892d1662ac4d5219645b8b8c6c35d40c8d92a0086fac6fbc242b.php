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

/* commande/index.html.twig */
class __TwigTemplate_bac49434f03218e959b9ea1fa3b54161030b84c0ee7deaec07fab03c34f2253b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "commande/index.html.twig", 1);
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

        echo "Commande index";
        
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
                    <div class=\"navbar-search  form-inline mr-3  d-md-flex ml-lg-auto\">
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-alternative\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                                </div>
                                <input class=\"form-control\" placeholder=\"Search\" type=\"text\" id=\"search\"  >
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Id</th>
                                <th>Montant Total</th>
                                <th>Montant Remise </th>
                                <th>Date Creation</th>
                                <th>actions</th>

                            </tr>
                            </thead>
                            <tbody id=\"all\">
                            </tbody>
                            <tbody id=\"search\">
                            </tbody>

                        </table>
                    </div>
                    <div class=\"card-footer py-4\">
                        <nav aria-label=\"...\">
                            <ul class=\"pagination justify-content-end mb-0\">
                                ";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 47, $this->source); })()));
        echo "

                            </ul>
                        </nav>
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_new");
        echo "\">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

    <script>
        \$(document).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchAjaxCommande");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 70,  138 => 51,  131 => 47,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Commande index{% endblock %}

{% block body %}
    <div class=\"container-fluid mt--7\">
        <!-- Table -->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"mb-0\">Card tables</h3>
                    </div>
                    <div class=\"navbar-search  form-inline mr-3  d-md-flex ml-lg-auto\">
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-alternative\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                                </div>
                                <input class=\"form-control\" placeholder=\"Search\" type=\"text\" id=\"search\"  >
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Id</th>
                                <th>Montant Total</th>
                                <th>Montant Remise </th>
                                <th>Date Creation</th>
                                <th>actions</th>

                            </tr>
                            </thead>
                            <tbody id=\"all\">
                            </tbody>
                            <tbody id=\"search\">
                            </tbody>

                        </table>
                    </div>
                    <div class=\"card-footer py-4\">
                        <nav aria-label=\"...\">
                            <ul class=\"pagination justify-content-end mb-0\">
                                {{ knp_pagination_render(commandes) }}

                            </ul>
                        </nav>
                        <a href=\"{{ path('commande_new') }}\">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

    <script>
        \$(document).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){

                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"{{ path('searchAjaxCommande') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>

{% endblock %}
", "commande/index.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\commande\\index.html.twig");
    }
}
