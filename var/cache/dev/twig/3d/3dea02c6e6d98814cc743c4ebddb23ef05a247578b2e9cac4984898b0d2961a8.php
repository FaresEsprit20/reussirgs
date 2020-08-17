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
class __TwigTemplate_04e70dca4c75f4cca5c849efeea168c4a1fadb7ab7bf4f3921c80cd5f6c10ce0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'body' => [$this, 'block_body'],
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
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery.min.js"), "html", null, true);
        echo "\"></script>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 37
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
                                <a href=\"#\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8\">
                            <!-- Main-menu -->
                            <div class=\"main-menu f-right d-none d-lg-block\">
                                <nav> 
                                    <ul id=\"navigation\">    
                                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gs_homepage");
        echo "\">Home</a></li>
                                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>
                                         ";
        // line 63
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connecter</a></li>
                                         ";
        }
        // line 66
        echo "                                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t\t\t\t\t\t
                                        <li><a href=\"#\">Compte</a>
                                            <ul class=\"submenu\">
                                        <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">connecté tant que</a>
                                        <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Profil</a>
                                        <li><a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Mot de Passe</a>
                                        <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                                            </ul>
                                      </li>
                                      ";
        }
        // line 76
        echo "                                    </ul>
                                </nav>
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
<div class=\"container\">
";
        // line 94
        $this->displayBlock('main', $context, $blocks);
        // line 123
        echo "         <div>
 ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 191
        echo "    </main>
   <footer>

       <!-- Footer Start-->
      <div class=\"footer-main\" data-background=\"";
        // line 195
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
                                 <a href=\"#\"><img src=\"";
        // line 204
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
                                    <li><a href=\"#\">About</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                    <li><a href=\"#\">Contact</a></li>
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
                                    <li><a href=\"#\">FAQs</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Core Features</h4>
                                <ul>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This work is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"#\" target=\"_blank\">Esprit</a>
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
\t\t<!-- All JS Custom Plugins Link Here here -->
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Jquery, Popper, Bootstrap -->
\t\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <!-- Jquery Mobile Menu -->
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Date Picker -->
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js\"></script>
\t\t<!-- One Page, Animated-HeadLin -->
        <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Scrollup, nice-select, sticky -->
        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
        <!-- contact js -->
        <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>        
\t\t<!-- Jquery Plugins, main Jquery -->\t
        <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 312
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

    // line 94
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 95
        echo "        <!-- Slider Area Start-->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/hero/h1_hero.png"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">Réussir<br> ma GS</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Voici une liste des compétences en maths que les élèves acquièrent en GS, classées en catégories. Placez votre souris sur le nom d'une compétence pour voir un exemple de question. Pour commencer à travailler, cliquez sur un lien. </p>
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\">
                                        <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("additiontrou");
        echo "\" class=\"btn hero-btn\">Commencer</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"hero__img d-none d-lg-block\" data-animation=\"fadeInRight\" data-delay=\"1s\">
                                    <img src=\"";
        // line 112
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
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 125
        echo " 
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
";
        
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
        return array (  504 => 125,  495 => 124,  474 => 112,  465 => 106,  454 => 98,  449 => 95,  440 => 94,  423 => 7,  407 => 312,  403 => 311,  398 => 309,  394 => 308,  390 => 307,  386 => 306,  382 => 305,  377 => 303,  373 => 302,  369 => 301,  364 => 299,  360 => 298,  356 => 297,  350 => 294,  345 => 292,  341 => 291,  336 => 289,  331 => 287,  327 => 286,  323 => 285,  318 => 283,  236 => 204,  224 => 195,  218 => 191,  216 => 124,  213 => 123,  211 => 94,  191 => 76,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  165 => 66,  159 => 64,  157 => 63,  153 => 62,  149 => 61,  138 => 53,  119 => 37,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  56 => 13,  49 => 8,  47 => 7,  39 => 1,);
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
            <script src=\"{{ asset('jquery.min.js') }}\"></script>
   </head>

   <body>
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
                                <a href=\"#\"><img src=\"{{ asset('assets/img/logo/logo.png')}}\" alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8\">
                            <!-- Main-menu -->
                            <div class=\"main-menu f-right d-none d-lg-block\">
                                <nav> 
                                    <ul id=\"navigation\">    
                                        <li><a href=\"{{ path('gs_homepage') }}\">Home</a></li>
                                        <li><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></li>
                                         {% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                        <li><a href=\"{{ path('fos_user_security_login') }}\">Connecter</a></li>
                                         {% endif %}
                                        {% if  is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}\t\t\t\t\t\t
                                        <li><a href=\"#\">Compte</a>
                                            <ul class=\"submenu\">
                                        <li><a href=\"{{ path('fos_user_profile_show') }}\">connecté tant que</a>
                                        <li><a href=\"{{ path('fos_user_profile_edit') }}\">Profil</a>
                                        <li><a href=\"{{ path('fos_user_change_password') }}\">Mot de Passe</a>
                                        <li><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a>
                                            </ul>
                                      </li>
                                      {% endif %}
                                    </ul>
                                </nav>
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
<div class=\"container\">
{% block main %}
        <!-- Slider Area Start-->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" data-background=\"{{ asset('assets/img/hero/h1_hero.png')}}\">
                    <div class=\"container\">
                        <div class=\"row d-flex align-items-center\">
                            <div class=\"col-lg-7 col-md-9 \">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\">Réussir<br> ma GS</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".6s\">Voici une liste des compétences en maths que les élèves acquièrent en GS, classées en catégories. Placez votre souris sur le nom d'une compétence pour voir un exemple de question. Pour commencer à travailler, cliquez sur un lien. </p>
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\">
                                        <a href=\"{{ path('additiontrou') }}\" class=\"btn hero-btn\">Commencer</a>
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
         {% endblock %}
         <div>
 {% block body %}
 
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
{% endblock %}
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
                                 <a href=\"#\"><img src=\"{{ asset('assets/img/logo/logo2_footer.png')}}\" alt=\"\"></a>
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
                                    <li><a href=\"#\">About</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                    <li><a href=\"#\">Contact</a></li>
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
                                    <li><a href=\"#\">FAQs</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Core Features</h4>
                                <ul>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This work is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"#\" target=\"_blank\">Esprit</a>
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
        <script src=\"//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js\"></script>
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
