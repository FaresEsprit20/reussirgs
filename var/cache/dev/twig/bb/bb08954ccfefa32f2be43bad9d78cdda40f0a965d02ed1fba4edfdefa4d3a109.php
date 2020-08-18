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

/* @Gs/Default/comparerpar3.html.twig */
class __TwigTemplate_bc8e105ae5f59af24328a4abbcc6822995c0eac8e1c947fb3f84fcee0eaff742 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/comparerpar3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/comparerpar3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Gs/Default/comparerpar3.html.twig", 1);
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
        echo "  _ Comparer 3 nombres
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<style>
        .selectedd{
border:2px inset silver;
        }
.small {
    width: 92px !important;
}

.btn-lg{
background-color: #e8f9fd;  
color: black;
font-size: 52px;
}

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Comparer 3 nombres
            </h5>
          </div>
        </div>
      </div>
      <br><br>
    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Quel est le plus grand nombre ?<p>
    </div>
    <br>
      <div id=\"banner\" class=\"banner\">
    <button id=\"btn1\" type=\"button\" class=\"btn btn-lg  img\" >3</button>
    <button id=\"btn2\" type=\"button\" class=\"btn btn-lg  img\" >7</button>
    <button id=\"btn3\" type=\"button\" class=\"btn btn-lg  img\" >5</button>
</div>
<br>
<div class=\"d-inline-flex mb-3\">
       <div class=\"span2\">
\t<p ><button id=\"valider\"  class=\"genric-btn primary small \">valider</button></p>
  </div>
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
      //identification de l'image sélectionné et trouver l'index de l'image de la bonne réponse
        \$(\"#valider\").click(function () {
         
          if(!\$('.img').hasClass('selectedd')){
            alert(\"vide! choisir une option\");
          }else{
            if(\$('.selectedd').index() == 1){ 
           \$(\"#html\").html('<div class=\"section-tittle text-center success\"><h2 style=\"color:green\">Bravo!</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>\t');
           score+=10;
           window.localStorage.setItem('score', score);
         document.getElementById('response').scrollIntoView();
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center danger\"><h2 style=\"color:red\">Echec! la bonne réponse est 7 </h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>\t');
            document.getElementById('response').scrollIntoView();
            }       
             \$(\"input\").prop(\"disabled\",true);
             \$(this).prop(\"disabled\",true);
             \$(\"#ok\").attr(\"hidden\",false);
          }
          \$('#annuler').prop('disabled','true');
        });
    
 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"comparerlongueurs\");
        });
    });


\$(function(){
  var ff;    
    //pour  selectionner les images et implémenter le compteur
   \$('.img').on('click', function(evt) {
        ff = \$(this);
        evt.stopPropagation();
        \$('.img').removeClass('selectedd');
        ff.addClass('selectedd');
    });      
});
 
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gs/Default/comparerpar3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  108 => 25,  82 => 7,  73 => 6,  62 => 3,  53 => 2,  31 => 1,);
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
  _ Comparer 3 nombres
{% endblock %}

{% block main %}
<style>
        .selectedd{
border:2px inset silver;
        }
.small {
    width: 92px !important;
}

.btn-lg{
background-color: #e8f9fd;  
color: black;
font-size: 52px;
}

</style>

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
              Comparer 3 nombres
            </h5>
          </div>
        </div>
      </div>
      <br><br>
    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Quel est le plus grand nombre ?<p>
    </div>
    <br>
      <div id=\"banner\" class=\"banner\">
    <button id=\"btn1\" type=\"button\" class=\"btn btn-lg  img\" >3</button>
    <button id=\"btn2\" type=\"button\" class=\"btn btn-lg  img\" >7</button>
    <button id=\"btn3\" type=\"button\" class=\"btn btn-lg  img\" >5</button>
</div>
<br>
<div class=\"d-inline-flex mb-3\">
       <div class=\"span2\">
\t<p ><button id=\"valider\"  class=\"genric-btn primary small \">valider</button></p>
  </div>
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
      //identification de l'image sélectionné et trouver l'index de l'image de la bonne réponse
        \$(\"#valider\").click(function () {
         
          if(!\$('.img').hasClass('selectedd')){
            alert(\"vide! choisir une option\");
          }else{
            if(\$('.selectedd').index() == 1){ 
           \$(\"#html\").html('<div class=\"section-tittle text-center success\"><h2 style=\"color:green\">Bravo!</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>\t');
           score+=10;
           window.localStorage.setItem('score', score);
         document.getElementById('response').scrollIntoView();
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center danger\"><h2 style=\"color:red\">Echec! la bonne réponse est 7 </h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>\t');
            document.getElementById('response').scrollIntoView();
            }       
             \$(\"input\").prop(\"disabled\",true);
             \$(this).prop(\"disabled\",true);
             \$(\"#ok\").attr(\"hidden\",false);
          }
          \$('#annuler').prop('disabled','true');
        });
    
 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"comparerlongueurs\");
        });
    });


\$(function(){
  var ff;    
    //pour  selectionner les images et implémenter le compteur
   \$('.img').on('click', function(evt) {
        ff = \$(this);
        evt.stopPropagation();
        \$('.img').removeClass('selectedd');
        ff.addClass('selectedd');
    });      
});
 
</script>


{% endblock %}



", "@Gs/Default/comparerpar3.html.twig", "C:\\wamp64\\www\\PFA\\src\\GsBundle\\Resources\\views\\Default\\comparerpar3.html.twig");
    }
}
