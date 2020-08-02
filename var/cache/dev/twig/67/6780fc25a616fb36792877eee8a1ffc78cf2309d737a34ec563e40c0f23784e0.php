<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_ae2d67a372c553372ca254ddc0a9faf0b8ba138804d9e15110bf3ebabe156fa2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Réussir ma GS
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"manifest\" href=\"site.webmanifest\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\">

\t\t<!-- CSS here -->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/slicknav.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/nice-select.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
   </head>

   <body>
       <script>
\t</script>

    <!-- Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class=\"header-area header-transparrent \">
            <div class=\"main-header header-sticky\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <!-- Logo -->
                        <div class=\"col-xl-2 col-lg-2 col-md-1\">
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8\">
                            <!-- Main-menu -->
                            <div class=\"main-menu f-right d-none d-lg-block\">
                                <nav> 
                                    <ul id=\"navigation\">    
                                        <li><a href=\"index.html\"> Home</a></li>
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"services.html\">Services</a></li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                        <li><a href=\"blog.html\">Blog</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"single-blog.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Pages</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"elements.html\">Element</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <div class=\"header-right-btn f-right d-none d-lg-block\">
                                <a href=\"#\" class=\"btn header-btn\">Contact Us</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/hero/h1_hero.png"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">Réussir<br> ma GS</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Voici une liste des compétences en maths que les élèves acquièrent en GS, classées en catégories. Placez votre souris sur le nom d'une compétence pour voir un exemple de question. Pour commencer à travailler, cliquez sur un lien. IXL enregistre votre score, ainsi le niveau de difficulté des questions augmente automatiquement à mesure que vous vous améliorez.</p>
                                   
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"hero__img d-none d-lg-block\" data-animation=\"fadeInRight\" data-delay=\"1s\">
                                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/hero/hero_right.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/hero/h1_hero.png"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">We Collect<br> High Quality Leads</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\">
                                        <a href=\"industries.html\" class=\"btn hero-btn\">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"hero__img d-none d-lg-block\" data-animation=\"fadeInRight\" data-delay=\"1s\">
                                    <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/hero/hero_right.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- What We do start-->
        <div class=\"what-we-do we-padding\">
            <div class=\"container\">
                <!-- Section-tittle -->
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-tittle text-center\">
                            <h2>What We Will Do For Your Business​</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-tasks\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>Link Building</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do active text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-social-media-marketing\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>Content marketing</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-project\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>On Page SEO</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What We do End-->
 
        <!-- Generating Start -->
        <div class=\"generating-area \">
            <div class=\"container\">
                 <!-- Section-tittle -->
                 <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-tittle text-center\">
                            <h2>Generating New Customers Via Online Mode​​</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-chart\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>All Sizes Business</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div> 
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-social-media-marketing\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Awesome Results</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-speaker\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Keep you in the Loop</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-growth\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Significant ROI</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Generating End -->
      
        <!-- Visit Stuffs Start -->
        <div class=\"visit-area fix visite-padding\">
            <div class=\"container\">
                <!-- Section-tittle -->
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6 pr-0\">
                        <div class=\"section-tittle text-center\">
                            <h2>Visit Some Of Our Awsome Stuffs</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid p-0\">
                <div class=\"row \">
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/visit/visit_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">citmv.com</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div> 
                     <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/visit/visit_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">mvsp.net</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/visit/visit_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">dmcal.co</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div> 
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/visit/visit_4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">dmco.net</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visit Stuffs Start -->
         <!-- Testimonial Start -->
         <div class=\"testimonial-area\">
            <div class=\"container\">
               <div class=\"testimonial-main\">
                    <!-- Section-tittle -->
                    <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-lg-5  col-md-8 pr-0\">
                            <div class=\"section-tittle text-center\">
                                <h2>What Client Say About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-lg-10 col-md-9\">
                                <div class=\"h1-testimonial-active\">
                                    <!-- Single Testimonial -->
                                    <div class=\"single-testimonial text-center\">
                                        <div class=\"testimonial-caption \">
                                            <div class=\"testimonial-top-cap\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                            <!-- founder -->
                                            <div class=\"testimonial-founder d-flex align-items-center justify-content-center\">
                                                <div class=\"founder-img\">
                                                    <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testmonial/testimonial.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            <div class=\"founder-text\">
                                                <span>Oliva jems</span>
                                                <p>UIX designer</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                    <div class=\"single-testimonial text-center\">
                                        <div class=\"testimonial-caption \">
                                            <div class=\"testimonial-top-cap\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                            <!-- founder -->
                                            <div class=\"testimonial-founder d-flex align-items-center justify-content-center\">
                                                <div class=\"founder-img\">
                                                    <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testmonial/testimonial.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            <div class=\"founder-text\">
                                                <span>Oliva jems</span>
                                                <p>UIX designer</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
     
        

    </main>
   <footer>

       <!-- Footer Start-->
      <div class=\"footer-main\" data-background=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/shape/footer_bg.png"), "html", null, true);
        echo "\">
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-lg-3 col-md-4 col-sm-8\">
                       <div class=\"single-footer-caption mb-50\">
                         <div class=\"single-footer-caption mb-30\">
                              <!-- logo -->
                             <div class=\"footer-logo\">
                                 <a href=\"index.html\"><img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo/logo2_footer.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                             </div>
                             <div class=\"footer-tittle\">
                                 <div class=\"footer-pera\">
                                     <p class=\"info1\">221B Baker Street, P.O Box 353 Park <br> Road, USA - 215431</p>
                                     <p class=\"info2\">info@yourdomain.com</p>
                                </div>
                             </div>
                             <div class=\"footer-social\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                            </div>
                         </div>
                       </div>
                    </div>
                    <div class=\"col-lg-2 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"about.html\">Features</a></li>
                                    <li><a href=\"single-blog.html\">Pricing</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-4 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Privacy Policy</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\"> Sitemap</a></li>
                                    <li><a href=\"#\">FAQs</a></li>
                                    <li><a href=\"#\">Report a bugb</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Core Features</h4>
                                <ul>
                                 <li><a href=\"#\">Email Marketing</a></li>
                                 <li><a href=\"#\"> Offline SEO</a></li>
                                 <li><a href=\"#\">Social Media Marketing</a></li>
                                 <li><a href=\"#\">Lead Generation</a></li>
                                 <li><a href=\"#\"> 24/7 Support</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class=\"footer-bottom-area footer-bg\">
            <div class=\"container\">
                <div class=\"footer-border\">
                     <div class=\"row d-flex align-items-center\">
                         <div class=\"col-xl-12 \">
                             <div class=\"footer-copy-right text-center\">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"//https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>
   
\t<!-- JS here -->
\t
\t\t<!-- All JS Custom Plugins Link Here here -->
        <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Jquery, Popper, Bootstrap -->
\t\t<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <!-- Jquery Mobile Menu -->
        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Date Picker -->
        <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- One Page, Animated-HeadLin -->
        <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Scrollup, nice-select, sticky -->
        <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
        
        <!-- contact js -->
        <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
        
\t\t<!-- Jquery Plugins, main Jquery -->\t
        <script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        
    </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 7,  701 => 522,  697 => 521,  691 => 518,  687 => 517,  683 => 516,  679 => 515,  675 => 514,  669 => 511,  665 => 510,  661 => 509,  655 => 506,  651 => 505,  647 => 504,  642 => 502,  637 => 500,  633 => 499,  627 => 496,  622 => 494,  618 => 493,  614 => 492,  609 => 490,  520 => 404,  508 => 395,  482 => 372,  462 => 355,  423 => 319,  409 => 308,  395 => 297,  381 => 286,  228 => 136,  210 => 121,  201 => 115,  186 => 103,  135 => 55,  116 => 39,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  54 => 13,  47 => 8,  45 => 7,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Réussir ma GS
\t\t\t{% block title %}{% endblock %}
\t\t</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"manifest\" href=\"site.webmanifest\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon.ico')}}\">

\t\t<!-- CSS here -->
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flaticon.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/slicknav.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.min.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/magnific-popup.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome-all.min.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/themify-icons.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/slick.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/nice-select.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\">
   </head>

   <body>
       <script>
\t</script>

    <!-- Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"{{ asset('assets/img/logo/logo.png')}}\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class=\"header-area header-transparrent \">
            <div class=\"main-header header-sticky\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <!-- Logo -->
                        <div class=\"col-xl-2 col-lg-2 col-md-1\">
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"{{ asset('assets/img/logo/logo.png')}}\" alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8\">
                            <!-- Main-menu -->
                            <div class=\"main-menu f-right d-none d-lg-block\">
                                <nav> 
                                    <ul id=\"navigation\">    
                                        <li><a href=\"index.html\"> Home</a></li>
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"services.html\">Services</a></li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                        <li><a href=\"blog.html\">Blog</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"single-blog.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Pages</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"elements.html\">Element</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <div class=\"header-right-btn f-right d-none d-lg-block\">
                                <a href=\"#\" class=\"btn header-btn\">Contact Us</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"{{ asset('assets/img/hero/h1_hero.png')}}\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">Réussir<br> ma GS</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Voici une liste des compétences en maths que les élèves acquièrent en GS, classées en catégories. Placez votre souris sur le nom d'une compétence pour voir un exemple de question. Pour commencer à travailler, cliquez sur un lien. IXL enregistre votre score, ainsi le niveau de difficulté des questions augmente automatiquement à mesure que vous vous améliorez.</p>
                                   
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"hero__img d-none d-lg-block\" data-animation=\"fadeInRight\" data-delay=\"1s\">
                                    <img src=\"{{ asset('assets/img/hero/hero_right.png')}}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"{{ asset('assets/img/hero/h1_hero.png')}}\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">We Collect<br> High Quality Leads</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\">
                                        <a href=\"industries.html\" class=\"btn hero-btn\">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"hero__img d-none d-lg-block\" data-animation=\"fadeInRight\" data-delay=\"1s\">
                                    <img src=\"{{ asset('assets/img/hero/hero_right.png')}}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- What We do start-->
        <div class=\"what-we-do we-padding\">
            <div class=\"container\">
                <!-- Section-tittle -->
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-tittle text-center\">
                            <h2>What We Will Do For Your Business​</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-tasks\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>Link Building</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do active text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-social-media-marketing\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>Content marketing</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-do text-center mb-30\">
                            <div class=\"do-icon\">
                                <span  class=\"flaticon-project\"></span>
                            </div>
                            <div class=\"do-caption\">
                                <h4>On Page SEO</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                            <div class=\"do-btn\">
                                <a href=\"#\"><i class=\"ti-arrow-right\"></i> get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What We do End-->
 
        <!-- Generating Start -->
        <div class=\"generating-area \">
            <div class=\"container\">
                 <!-- Section-tittle -->
                 <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-tittle text-center\">
                            <h2>Generating New Customers Via Online Mode​​</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-chart\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>All Sizes Business</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div> 
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-social-media-marketing\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Awesome Results</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-speaker\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Keep you in the Loop</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-generating d-flex mb-30\">
                            <div class=\"generating-icon\">
                                <span class=\"flaticon-growth\"></span>
                            </div>
                            <div class=\"generating-cap\">
                                <h4>Significant ROI</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Generating End -->
      
        <!-- Visit Stuffs Start -->
        <div class=\"visit-area fix visite-padding\">
            <div class=\"container\">
                <!-- Section-tittle -->
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-lg-6 pr-0\">
                        <div class=\"section-tittle text-center\">
                            <h2>Visit Some Of Our Awsome Stuffs</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid p-0\">
                <div class=\"row \">
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"{{ asset('assets/img/visit/visit_1.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">citmv.com</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div> 
                     <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"{{ asset('assets/img/visit/visit_2.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">mvsp.net</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"{{ asset('assets/img/visit/visit_3.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">dmcal.co</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div> 
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"single-visited mb-30\">
                            <div class=\"visited-img\">
                                <img src=\"{{ asset('assets/img/visit/visit_4.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"visited-cap\">
                                <h3><a href=\"#\">dmco.net</a></h3>
                                <p>Email Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visit Stuffs Start -->
         <!-- Testimonial Start -->
         <div class=\"testimonial-area\">
            <div class=\"container\">
               <div class=\"testimonial-main\">
                    <!-- Section-tittle -->
                    <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-lg-5  col-md-8 pr-0\">
                            <div class=\"section-tittle text-center\">
                                <h2>What Client Say About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-lg-10 col-md-9\">
                                <div class=\"h1-testimonial-active\">
                                    <!-- Single Testimonial -->
                                    <div class=\"single-testimonial text-center\">
                                        <div class=\"testimonial-caption \">
                                            <div class=\"testimonial-top-cap\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                            <!-- founder -->
                                            <div class=\"testimonial-founder d-flex align-items-center justify-content-center\">
                                                <div class=\"founder-img\">
                                                    <img src=\"{{ asset('assets/img/testmonial/testimonial.png')}}\" alt=\"\">
                                                </div>
                                            <div class=\"founder-text\">
                                                <span>Oliva jems</span>
                                                <p>UIX designer</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                    <div class=\"single-testimonial text-center\">
                                        <div class=\"testimonial-caption \">
                                            <div class=\"testimonial-top-cap\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                            </div>
                                            <!-- founder -->
                                            <div class=\"testimonial-founder d-flex align-items-center justify-content-center\">
                                                <div class=\"founder-img\">
                                                    <img src=\"{{ asset('assets/img/testmonial/testimonial.png')}}\" alt=\"\">
                                                </div>
                                            <div class=\"founder-text\">
                                                <span>Oliva jems</span>
                                                <p>UIX designer</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
     
        

    </main>
   <footer>

       <!-- Footer Start-->
      <div class=\"footer-main\" data-background=\"{{ asset('assets/img/shape/footer_bg.png')}}\">
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-lg-3 col-md-4 col-sm-8\">
                       <div class=\"single-footer-caption mb-50\">
                         <div class=\"single-footer-caption mb-30\">
                              <!-- logo -->
                             <div class=\"footer-logo\">
                                 <a href=\"index.html\"><img src=\"{{ asset('assets/img/logo/logo2_footer.png')}}\" alt=\"\"></a>
                             </div>
                             <div class=\"footer-tittle\">
                                 <div class=\"footer-pera\">
                                     <p class=\"info1\">221B Baker Street, P.O Box 353 Park <br> Road, USA - 215431</p>
                                     <p class=\"info2\">info@yourdomain.com</p>
                                </div>
                             </div>
                             <div class=\"footer-social\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                            </div>
                         </div>
                       </div>
                    </div>
                    <div class=\"col-lg-2 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"about.html\">Features</a></li>
                                    <li><a href=\"single-blog.html\">Pricing</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-4 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Privacy Policy</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\"> Sitemap</a></li>
                                    <li><a href=\"#\">FAQs</a></li>
                                    <li><a href=\"#\">Report a bugb</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Core Features</h4>
                                <ul>
                                 <li><a href=\"#\">Email Marketing</a></li>
                                 <li><a href=\"#\"> Offline SEO</a></li>
                                 <li><a href=\"#\">Social Media Marketing</a></li>
                                 <li><a href=\"#\">Lead Generation</a></li>
                                 <li><a href=\"#\"> 24/7 Support</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class=\"footer-bottom-area footer-bg\">
            <div class=\"container\">
                <div class=\"footer-border\">
                     <div class=\"row d-flex align-items-center\">
                         <div class=\"col-xl-12 \">
                             <div class=\"footer-copy-right text-center\">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"//https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>
   
\t<!-- JS here -->
\t
\t\t<!-- All JS Custom Plugins Link Here here -->
        <script src=\"{{ asset('assets/js/vendor/modernizr-3.5.0.min.js')}}\"></script>
\t\t<!-- Jquery, Popper, Bootstrap -->
\t\t<script src=\"{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/popper.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
\t    <!-- Jquery Mobile Menu -->
        <script src=\"{{ asset('assets/js/jquery.slicknav.min.js')}}\"></script>

\t\t<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/slick.min.js')}}\"></script>
        <!-- Date Picker -->
        <script src=\"{{ asset('assets/js/gijgo.min.js')}}\"></script>
\t\t<!-- One Page, Animated-HeadLin -->
        <script src=\"{{ asset('assets/js/wow.min.js')}}\"></script>
\t\t<script src=\"{{ asset('assets/js/animated.headline.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.magnific-popup.js')}}\"></script>

\t\t<!-- Scrollup, nice-select, sticky -->
        <script src=\"{{ asset('assets/js/jquery.scrollUp.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.nice-select.min.js')}}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.sticky.js')}}\"></script>
        
        <!-- contact js -->
        <script src=\"{{ asset('assets/js/contact.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.form.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.validate.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/mail-script.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.ajaxchimp.min.js')}}\"></script>
        
\t\t<!-- Jquery Plugins, main Jquery -->\t
        <script src=\"{{ asset('assets/js/plugins.js')}}\"></script>
        <script src=\"{{ asset('assets/js/main.js')}}\"></script>
        
    </body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\PFA\\app\\Resources\\views\\base.html.twig");
    }
}
