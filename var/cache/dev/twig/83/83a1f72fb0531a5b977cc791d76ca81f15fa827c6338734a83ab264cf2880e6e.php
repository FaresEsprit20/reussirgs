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

/* @Gs/Default/grandeurs/moisannee.html.twig */
class __TwigTemplate_31f5e1df4972453c08edfcf302193fbac09d191b6a1b21b99e1058d9124ca1df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/grandeurs/moisannee.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/grandeurs/moisannee.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Gs/Default/grandeurs/moisannee.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  _ Mois par année
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Nombre de Mois par année
            </h5>
          </div>
        </div>
      </div>
      <br><br>

    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Quel est le nombre de mois par année ?<p>
    </div>
    <br>
      
                 <div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\"   name=\"lnum\" class=\"single-input-primary\">
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\">Mois</label>
\t\t\t\t\t      
       </div>
  <div class=\"block\">\t<button id=\"valider\"  class=\"genric-btn primary small\">valider</button></div>
    </div>
  </div>
  <div id=\"response\">
   <div id=\"html\"></div>
     
         
       <div class=\"block text-center\"><button id=\"ok\"  hidden=\"true\" class=\"genric-btn primary \">ok</button></div>
  </div>
 
  <!-- Tips Triks End -->
  <script>
    jQuery( document ).ready(function( \$ ) {
      var score = Number(window.localStorage.getItem('score'));
        \$(\"#valider\").click(function () {
          if(\$(\"#lnum\").val().length ==0){
            alert(\"Empty!\");
          }else{
            if(\$(\"#lnum\").val() == 12){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:green\">Bravo!</h2>\t</div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>'
          );
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:red\">Echec! la bonne réponse est 12</h2>\t</div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>');
            }
           
             \$(\"input\").prop(\"disabled\",true);
              \$(this).prop(\"disabled\",true);
               \$(\"#ok\").attr(\"hidden\",false);
          }
        });

 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"liretemperature\");
        });

    });
 
 
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gs/Default/grandeurs/moisannee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 10,  93 => 9,  82 => 6,  73 => 5,  62 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
  _ Mois par année
{% endblock %}
{% block main %}

{% endblock %}

{% block body %}
  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Nombre de Mois par année
            </h5>
          </div>
        </div>
      </div>
      <br><br>

    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Quel est le nombre de mois par année ?<p>
    </div>
    <br>
      
                 <div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\"   name=\"lnum\" class=\"single-input-primary\">
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\">Mois</label>
\t\t\t\t\t      
       </div>
  <div class=\"block\">\t<button id=\"valider\"  class=\"genric-btn primary small\">valider</button></div>
    </div>
  </div>
  <div id=\"response\">
   <div id=\"html\"></div>
     
         
       <div class=\"block text-center\"><button id=\"ok\"  hidden=\"true\" class=\"genric-btn primary \">ok</button></div>
  </div>
 
  <!-- Tips Triks End -->
  <script>
    jQuery( document ).ready(function( \$ ) {
      var score = Number(window.localStorage.getItem('score'));
        \$(\"#valider\").click(function () {
          if(\$(\"#lnum\").val().length ==0){
            alert(\"Empty!\");
          }else{
            if(\$(\"#lnum\").val() == 12){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:green\">Bravo!</h2>\t</div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>'
          );
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:red\">Echec! la bonne réponse est 12</h2>\t</div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>');
            }
           
             \$(\"input\").prop(\"disabled\",true);
              \$(this).prop(\"disabled\",true);
               \$(\"#ok\").attr(\"hidden\",false);
          }
        });

 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"liretemperature\");
        });

    });
 
 
</script>


{% endblock %}



", "@Gs/Default/grandeurs/moisannee.html.twig", "C:\\wamp64\\www\\PFA\\src\\GsBundle\\Resources\\views\\Default\\grandeurs\\moisannee.html.twig");
    }
}
