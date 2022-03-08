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

/* pf/show.html.twig */
class __TwigTemplate_f20ee06b8b88f7b14f5900cc69d197934b50953d0c3f12277e37a4e45ba3d9b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pf/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pf/show.html.twig", 1);
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

        echo "Produit";
        
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

    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"page-wrapper edutim-course-single edutim-course-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"course-thumbnail\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34)), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid w-100\">
                    </div>

                    <nav class=\"course-single-tabs learn-press-nav-tabs\">
                        <div class=\"nav nav-tabs  course-nav\" id=\"nav-tab\" role=\"tablist\">
                            <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Overview</a>
                            <a class=\"nav-item nav-link\" id=\"nav-topics-tab\" data-toggle=\"tab\" href=\"#nav-topics\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Curriculam</a>
                            <a class=\"nav-item nav-link\" id=\"nav-instructor-tab\" data-toggle=\"tab\" href=\"#nav-instructor\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Instructor</a>
                            <a class=\"nav-item nav-link\" id=\"nav-feedback-tab\" data-toggle=\"tab\" href=\"#nav-feedback\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Reviews</a>
                        </div>
                    </nav>
                    <div class=\"tab-content edutim-course-content\" id=\"nav-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                            <div class=\"single-course-details \">
                                <h4 class=\"course-title\">Overview</h4>
                                <p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>


                                <div class=\"course-widget course-info\">
                                    <h4 class=\"course-title\">What You will Learn?</h4>
                                    <ul>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Clean up face imperfections, improve and repair photos
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Remove people or objects from photos
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Master selections, layers, and working with the layers panel
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Use creative effects to design stunning text styles
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            working with the layers panel
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Cut away a person from their background
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade\" id=\"nav-topics\" role=\"tabpanel\" aria-labelledby=\"nav-topics-tab\">
                            <div class=\"edutim-course-curriculum \" >
                                <div class=\"curriculum-scrollable\">
                                    <ul class=\"curriculum-sections\">
                                        <li class=\"section\">
                                            <div class=\"section-header\">
                                                <div class=\"section-left\">
                                                    <h5 class=\"section-title\">Section 1</h5>
                                                    <p class=\"section-desc\">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                                                </div>
                                            </div>

                                            <ul class=\"section-content\">
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 1</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">10 min</span>
                                                            <i class=\"item-meta course-item-status\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 2</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">30 min</span>
                                                            <i class=\"item-meta course-item-status\" ></i>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li class=\"course-item course-item-lp_quiz course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Quiz 1</span>
                                                        <div class=\"course-item-meta\">

                                                            <span class=\"item-meta count-questions\">14 questions</span>
                                                            <span class=\"item-meta duration\">10 min</span><i class=\"fa item-meta course-item-status trans\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class=\"section\">
                                            <div class=\"section-header\">
                                                <div class=\"section-left\">
                                                    <h5 class=\"section-title\">Section 2</h5>
                                                    <p class=\"section-desc\">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                                                </div>
                                            </div>

                                            <ul class=\"section-content\">
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 1</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">10 min</span>
                                                            <i class=\"item-meta course-item-status\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-instructor\" role=\"tabpanel\" aria-labelledby=\"nav-instructor-tab\">
                            <!-- Course instructor start -->
                            <div class=\"courses-instructor\">
                                <div class=\"single-instructor-box\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-4 col-md-4\">
                                            <div class=\"instructor-image\">
                                                <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                            </div>
                                        </div>

                                        <div class=\"col-lg-8 col-md-8\">
                                            <div class=\"instructor-content\">
                                                <h4><a href=\"#\">EduHash</a></h4>
                                                <span class=\"sub-title\"><p>Web Developer</p></span>

                                                <p>Jone Smit is a celebrated photographer, author, and writer who brings passion to everything he does.</p>

                                                <ul class=\"user-social-links\">
                                                    <li><a href=\"#\"> <i class=\"fab fa-facebook\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-twitter\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-linkedin\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-youtube\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conurse  instructor end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-feedback\" role=\"tabpanel\" aria-labelledby=\"nav-feedback-tab\">
                            <div id=\"course-reviews\">
                                <h3 class=\"course-review-head\">Reviews</h3>
                                <ul class=\"course-reviews-list\">
                                    <li>
                                        <div class=\"course-review\">
                                            <div class=\"course-single-review\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3\">
                                                        <div class=\"user-image\">
                                                            <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                                        </div>
                                                    </div>

                                                    <div class=\"col-lg-9 col-md-9\">
                                                        <div class=\"user-content user-review-content\">
                                                            <h4 class=\"user-name\">eduhash</h4>
                                                            <div class=\"rating review-stars-rated\">
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star-half\"></i></a>
                                                            </div>
                                                            <p class=\"review-title\">Cover all topicc  </p>
                                                            <div class=\"review-text\">
                                                                <div class=\"review-content\">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"course-review\">
                                            <div class=\"course-single-review\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3\">
                                                        <div class=\"user-image\">
                                                            <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                                        </div>
                                                    </div>

                                                    <div class=\"col-lg-9 col-md-9\">
                                                        <div class=\"user-content user-review-content\">
                                                            <h4 class=\"user-name\">eduhash</h4>
                                                            <div class=\"rating review-stars-rated\">
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star-half\"></i></a>
                                                            </div>
                                                            <p class=\"review-title\">Cover all topicc  </p>

                                                            <div class=\"review-text\">
                                                                <div class=\"review-content\">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"col-lg-4\">
                    <!-- Course Sidebar start -->
                    <div class=\"course-sidebar\">
                        <div class=\"course-widget course-details-info\">
                            <ul>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-money-bill\"></i>Price :</span>
                                        <a href=\"#\" class=\"d-inline-block\">
                                            <h4 class=\"course-price\"> <span class=\"price\">\$";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 272, $this->source); })()), "price", [], "any", false, false, false, 272), "html", null, true);
        echo "</span></h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-user\"></i>Instructor :</span>
                                        <a href=\"#\" class=\"d-inline-block\"></a><a href=\"#\">Eduhash</a>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-file-alt\"></i>Lectures :</span>
                                        2
                                    </div>
                                </li>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-user\"></i>Enrolled :</span>
                                        <a href=\"#\" class=\"d-inline-block\">0</a>
                                    </div>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-clock\"></i>Duration :</span>
                                        0 week
                                    </div>
                                </li>

                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-calendar\"></i>Updated :</span>
                                        October 15, 2020
                                    </div>
                                </li>
                            </ul>
                            <div class=\"buy-btn\">
                                <button class=\"button button-enroll-course btn btn-primary\">
                                    Enroll Course
                                </button>
                            </div>
                        </div>


                        <div class=\"course-latest\">
                            <h4>Popular Courses</h4>
                            <ul class=\"recent-posts course-popular\">
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm1.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">Wordpress Theme Development</a></h6>
                                        <h5>\$120</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm2.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">mastering Photoshop for beginners</a></h6>
                                        <h5>\$100</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm3.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">Photography mastering adobe tool</a></h6>
                                        <h5>\$100</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Course Sidebar end -->
                </div>
            </div>
        </div>
    </section>

    <!-- Related Course section start -->
    <section class=\"section-padding related-course bg-grey\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h4>Related Courses You may Like</h4>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-1.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$100</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                                <span class=\"course-label\">new</span>
                            </div>

                            <h4><a href=\"#\">React – The Complete Guide (React Router)</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-2.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$70</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                            </div>

                            <h4><a href=\"#\">Photography Crash Course for Photographer</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-3.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$160</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                            </div>

                            <h4><a href=\"#\">Information About UI/UX Design Degree</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Course section End -->


    <h1>Produit</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 436
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 436, $this->source); })()), "id", [], "any", false, false, false, 436), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 440, $this->source); })()), "name", [], "any", false, false, false, 440), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 444
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 444, $this->source); })()), "price", [], "any", false, false, false, 444), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 448
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 448, $this->source); })()), "quantity", [], "any", false, false, false, 448), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 452
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 452, $this->source); })()), "image", [], "any", false, false, false, 452), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 456
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 456, $this->source); })()), "description", [], "any", false, false, false, 456), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 461
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pf_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pf_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 463, $this->source); })()), "id", [], "any", false, false, false, 463)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 465
        echo twig_include($this->env, $context, "pf/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pf/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 465,  583 => 463,  578 => 461,  570 => 456,  563 => 452,  556 => 448,  549 => 444,  542 => 440,  535 => 436,  368 => 272,  142 => 49,  124 => 34,  107 => 20,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}

{% block body %}


    <section class=\"page-header\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-8\">
                    <div class=\"title-block\">
                        <h1>{{ produit.name }}</h1>
                        <ul class=\"list-inline mb-0\">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">Home</a>
                            </li>
                            <li class=\"list-inline-item\">/</li>
                            <li class=\"list-inline-item\">
                                {{ produit.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"page-wrapper edutim-course-single edutim-course-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"course-thumbnail\">
                        <img src=\"{{ asset('uploads/') ~produit.image}}\" alt=\"\" class=\"img-fluid w-100\">
                    </div>

                    <nav class=\"course-single-tabs learn-press-nav-tabs\">
                        <div class=\"nav nav-tabs  course-nav\" id=\"nav-tab\" role=\"tablist\">
                            <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Overview</a>
                            <a class=\"nav-item nav-link\" id=\"nav-topics-tab\" data-toggle=\"tab\" href=\"#nav-topics\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Curriculam</a>
                            <a class=\"nav-item nav-link\" id=\"nav-instructor-tab\" data-toggle=\"tab\" href=\"#nav-instructor\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Instructor</a>
                            <a class=\"nav-item nav-link\" id=\"nav-feedback-tab\" data-toggle=\"tab\" href=\"#nav-feedback\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Reviews</a>
                        </div>
                    </nav>
                    <div class=\"tab-content edutim-course-content\" id=\"nav-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                            <div class=\"single-course-details \">
                                <h4 class=\"course-title\">Overview</h4>
                                <p>{{ produit.description }}</p>


                                <div class=\"course-widget course-info\">
                                    <h4 class=\"course-title\">What You will Learn?</h4>
                                    <ul>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Clean up face imperfections, improve and repair photos
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Remove people or objects from photos
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Master selections, layers, and working with the layers panel
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Use creative effects to design stunning text styles
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            working with the layers panel
                                        </li>
                                        <li>
                                            <i class=\"fa fa-check\"></i>
                                            Cut away a person from their background
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade\" id=\"nav-topics\" role=\"tabpanel\" aria-labelledby=\"nav-topics-tab\">
                            <div class=\"edutim-course-curriculum \" >
                                <div class=\"curriculum-scrollable\">
                                    <ul class=\"curriculum-sections\">
                                        <li class=\"section\">
                                            <div class=\"section-header\">
                                                <div class=\"section-left\">
                                                    <h5 class=\"section-title\">Section 1</h5>
                                                    <p class=\"section-desc\">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                                                </div>
                                            </div>

                                            <ul class=\"section-content\">
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 1</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">10 min</span>
                                                            <i class=\"item-meta course-item-status\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 2</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">30 min</span>
                                                            <i class=\"item-meta course-item-status\" ></i>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li class=\"course-item course-item-lp_quiz course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Quiz 1</span>
                                                        <div class=\"course-item-meta\">

                                                            <span class=\"item-meta count-questions\">14 questions</span>
                                                            <span class=\"item-meta duration\">10 min</span><i class=\"fa item-meta course-item-status trans\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class=\"section\">
                                            <div class=\"section-header\">
                                                <div class=\"section-left\">
                                                    <h5 class=\"section-title\">Section 2</h5>
                                                    <p class=\"section-desc\">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                                                </div>
                                            </div>

                                            <ul class=\"section-content\">
                                                <li class=\"course-item has-status course-item-lp_lesson\">
                                                    <a class=\"section-item-link\" href=\"#\">
                                                        <span class=\"item-name\">Lesson 1</span>
                                                        <div class=\"course-item-meta\">
                                                            <span class=\"item-meta duration\">10 min</span>
                                                            <i class=\"item-meta course-item-status\"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-instructor\" role=\"tabpanel\" aria-labelledby=\"nav-instructor-tab\">
                            <!-- Course instructor start -->
                            <div class=\"courses-instructor\">
                                <div class=\"single-instructor-box\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-4 col-md-4\">
                                            <div class=\"instructor-image\">
                                                <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                            </div>
                                        </div>

                                        <div class=\"col-lg-8 col-md-8\">
                                            <div class=\"instructor-content\">
                                                <h4><a href=\"#\">EduHash</a></h4>
                                                <span class=\"sub-title\"><p>Web Developer</p></span>

                                                <p>Jone Smit is a celebrated photographer, author, and writer who brings passion to everything he does.</p>

                                                <ul class=\"user-social-links\">
                                                    <li><a href=\"#\"> <i class=\"fab fa-facebook\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-twitter\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-linkedin\"></i></a></li>

                                                    <li><a href=\"#\"> <i class=\"fab fa-youtube\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conurse  instructor end -->
                        </div>
                        <div class=\"tab-pane fade\" id=\"nav-feedback\" role=\"tabpanel\" aria-labelledby=\"nav-feedback-tab\">
                            <div id=\"course-reviews\">
                                <h3 class=\"course-review-head\">Reviews</h3>
                                <ul class=\"course-reviews-list\">
                                    <li>
                                        <div class=\"course-review\">
                                            <div class=\"course-single-review\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3\">
                                                        <div class=\"user-image\">
                                                            <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                                        </div>
                                                    </div>

                                                    <div class=\"col-lg-9 col-md-9\">
                                                        <div class=\"user-content user-review-content\">
                                                            <h4 class=\"user-name\">eduhash</h4>
                                                            <div class=\"rating review-stars-rated\">
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star-half\"></i></a>
                                                            </div>
                                                            <p class=\"review-title\">Cover all topicc  </p>
                                                            <div class=\"review-text\">
                                                                <div class=\"review-content\">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"course-review\">
                                            <div class=\"course-single-review\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3\">
                                                        <div class=\"user-image\">
                                                            <img src=\"assets/images/blog/author.jpg\" alt=\"\" class=\"img-fluid\">
                                                        </div>
                                                    </div>

                                                    <div class=\"col-lg-9 col-md-9\">
                                                        <div class=\"user-content user-review-content\">
                                                            <h4 class=\"user-name\">eduhash</h4>
                                                            <div class=\"rating review-stars-rated\">
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star\"></i></a>
                                                                <a href=\"#\"><i class=\"fa fa-star-half\"></i></a>
                                                            </div>
                                                            <p class=\"review-title\">Cover all topicc  </p>

                                                            <div class=\"review-text\">
                                                                <div class=\"review-content\">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"col-lg-4\">
                    <!-- Course Sidebar start -->
                    <div class=\"course-sidebar\">
                        <div class=\"course-widget course-details-info\">
                            <ul>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-money-bill\"></i>Price :</span>
                                        <a href=\"#\" class=\"d-inline-block\">
                                            <h4 class=\"course-price\"> <span class=\"price\">\${{ produit.price }}</span></h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-user\"></i>Instructor :</span>
                                        <a href=\"#\" class=\"d-inline-block\"></a><a href=\"#\">Eduhash</a>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-file-alt\"></i>Lectures :</span>
                                        2
                                    </div>
                                </li>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-user\"></i>Enrolled :</span>
                                        <a href=\"#\" class=\"d-inline-block\">0</a>
                                    </div>
                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"fa fa-clock\"></i>Duration :</span>
                                        0 week
                                    </div>
                                </li>

                                <li>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span><i class=\"far fa-calendar\"></i>Updated :</span>
                                        October 15, 2020
                                    </div>
                                </li>
                            </ul>
                            <div class=\"buy-btn\">
                                <button class=\"button button-enroll-course btn btn-primary\">
                                    Enroll Course
                                </button>
                            </div>
                        </div>


                        <div class=\"course-latest\">
                            <h4>Popular Courses</h4>
                            <ul class=\"recent-posts course-popular\">
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm1.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">Wordpress Theme Development</a></h6>
                                        <h5>\$120</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm2.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">mastering Photoshop for beginners</a></h6>
                                        <h5>\$100</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"widget-post-thumb\">
                                        <a href=\"#\"><img src=\"assets/images/course/course-sm3.jpg\" alt=\"\" class=\"img-fluid\"></a>
                                    </div>
                                    <div class=\"widget-post-body\">
                                        <h6> <a href=\"#\">Photography mastering adobe tool</a></h6>
                                        <h5>\$100</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Course Sidebar end -->
                </div>
            </div>
        </div>
    </section>

    <!-- Related Course section start -->
    <section class=\"section-padding related-course bg-grey\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section-heading\">
                        <h4>Related Courses You may Like</h4>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-1.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$100</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                                <span class=\"course-label\">new</span>
                            </div>

                            <h4><a href=\"#\">React – The Complete Guide (React Router)</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-2.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$70</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                            </div>

                            <h4><a href=\"#\">Photography Crash Course for Photographer</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-lg-4\">
                    <div class=\"course-block\">
                        <div class=\"course-img\">
                            <img src=\"assets/images/course/course-3.jpg\" alt=\"\" class=\"img-fluid\">
                            <div class=\"course-price2\">\$160</div>
                        </div>

                        <div class=\"course-content\">
                            <div class=\"course-meta\">
                                <span class=\"course-student\"><i class=\"fa fa-user-alt\"></i>340 Students</span>
                                <span class=\"course-duration\"><i class=\"far fa-file-alt\"></i>82 Lessons</span>
                            </div>

                            <h4><a href=\"#\">Information About UI/UX Design Degree</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Course section End -->


    <h1>Produit</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ produit.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ produit.name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ produit.price }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ produit.quantity }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ produit.image }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ produit.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('pf_index') }}\">back to list</a>

    <a href=\"{{ path('pf_edit', {'id': produit.id}) }}\">edit</a>

    {{ include('pf/_delete_form.html.twig') }}
{% endblock %}
", "pf/show.html.twig", "C:\\Users\\adem\\Desktop\\symfony\\Amira\\MonProjet\\templates\\pf\\show.html.twig");
    }
}
