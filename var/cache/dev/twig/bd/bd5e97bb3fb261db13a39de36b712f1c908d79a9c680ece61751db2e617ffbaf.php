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

/* @Gs/Default/grandeurs/mesurerregle.html.twig */
class __TwigTemplate_e6e9528f06958123db6c77890ca21bd44b13bd79ebeb713fadad4d0836cd3625 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/grandeurs/mesurerregle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/grandeurs/mesurerregle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Gs/Default/grandeurs/mesurerregle.html.twig", 1);
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
        echo "  _ Mesurer avec une règle
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>  
  <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\" type=\"text/javascript\"></script>

<style>
.selectedd{
border:2px inset silver;
        }
.small {
    width: 92px !important;
}
.btn-lg{
  width: 32px !important;
}
.inline-block{
width: 300px;
height: 150px;
}
img:hover {
  opacity: 0.5;
}
hr.new {
    margin-top:10px;
    margin-left:40%;
border: 2px solid black;
background-color: black;
}

.ruler {
\t position: relative;
\t height: 50px;
\t margin: 20px;
     width: 450px;
\t padding: 0 10px 0 10px;
\t background-color: #f6c199;
}
 .stick-container, .minor-stick-container {
\t display: flex;
\t justify-content: space-between;
\t height: 50%;
\t margin: 0;
\t padding: 0;
\t list-style-type: none;
}
 .minor-stick-container {
\t height: 50%;
}
 .stick-container .stick {
\t flex-grow: 1;
\t height: 100%;
\t border-left: 2px solid #c39466;
}
 .stick-container .stick:last-child {
\t flex-grow: 0;
\t width: 2px;
\t background-color: #c39466;
}
 .minor-stick-container .minor-stick {
\t width: 1px;
\t height: 100%;
\t background-color: black;
}
 .minor-stick-container .minor-stick:first-child, .minor-stick-container .minor-stick:last-child {
\t width: 0px;
}
 .stick-value {
\t position: absolute;
\t bottom: 0;
\t transform: translateX(-50%);
\t color: #a79e9f;
\t font-weight: bold;
\t font-size: 1.2em;
}
#bx{
    margin-top:10px;
     position: relative;
     border: 2px solid black;
     width: 100%;
     height: 100%;
     
}
 
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Mesurer avec une règle
            </h5>
          </div>
        </div>
      </div>
      <br><br>
      <div  id=\"bx\" class=\"container\" >
       <hr class=\"new\" style=\"width:210px;\"  />
       
<div id=\"ruler\" class=\"ruler\">
  <ul class=\"stick-container\">
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">0</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">1</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">2</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">3</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">4</span>
    </li>

  </ul>
</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">En utilisant la règle , Quelle est la taille ?&nbsp;?<p>
    </div>
<br>
      
<br>
<div  class=\"container\">
<div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\" style=\"border : 2px solid black;width: 100%\"  name=\"lnum\" >
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\">cm</label>          
  </div>
  <div class=\"block\">\t<button id=\"valider\"  class=\"genric-btn primary small\">valider</button></div>
  <div id=\"response\">
   <div id=\"html\"></div>         
       <div class=\"block text-center\"><button id=\"ok\"  hidden=\"true\" class=\"genric-btn primary \">ok</button></div>
  </div>
 </div>
  <!-- Tips Triks End -->

  <script>
    jQuery( document ).ready(function( \$ ) {
      var score = Number(window.localStorage.getItem('score'));
     \$( function() {
    \$( \"#ruler\" ).draggable();
  } );
\t\t\t
      //identification de l'image sélectionné et trouver l'index de l'image de la bonne réponse
        \$(\"#valider\").click(function () {
     
      if(\$(\"#lnum\").val() == 2){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:green\">Bravo!</h2>\t'
          );
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:red\">Echec! la bonne réponse est 2</h2>\t');
            }
             \$(\"input\").prop(\"disabled\",true);   
               \$(\"#ok\").attr(\"hidden\",false);
        });
    
 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"jourssemaines\");
        });
    });

\$(function(){
  var ff;    
    //pour  selectionner les images et implémenter le compteur
   \$('.img').on('click', function(evt) {
        ff = \$(this);        
        \$('.img').removeClass('selectedd');
        ff.addClass('selectedd');
        evt.stopPropagation();
        //alert(\"\"+ff.index());
        
    });   
    
});
 
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gs/Default/grandeurs/mesurerregle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 93,  175 => 92,  82 => 7,  73 => 6,  62 => 3,  53 => 2,  31 => 1,);
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
  _ Mesurer avec une règle
{% endblock %}

{% block main %}
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>  
  <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\" type=\"text/javascript\"></script>

<style>
.selectedd{
border:2px inset silver;
        }
.small {
    width: 92px !important;
}
.btn-lg{
  width: 32px !important;
}
.inline-block{
width: 300px;
height: 150px;
}
img:hover {
  opacity: 0.5;
}
hr.new {
    margin-top:10px;
    margin-left:40%;
border: 2px solid black;
background-color: black;
}

.ruler {
\t position: relative;
\t height: 50px;
\t margin: 20px;
     width: 450px;
\t padding: 0 10px 0 10px;
\t background-color: #f6c199;
}
 .stick-container, .minor-stick-container {
\t display: flex;
\t justify-content: space-between;
\t height: 50%;
\t margin: 0;
\t padding: 0;
\t list-style-type: none;
}
 .minor-stick-container {
\t height: 50%;
}
 .stick-container .stick {
\t flex-grow: 1;
\t height: 100%;
\t border-left: 2px solid #c39466;
}
 .stick-container .stick:last-child {
\t flex-grow: 0;
\t width: 2px;
\t background-color: #c39466;
}
 .minor-stick-container .minor-stick {
\t width: 1px;
\t height: 100%;
\t background-color: black;
}
 .minor-stick-container .minor-stick:first-child, .minor-stick-container .minor-stick:last-child {
\t width: 0px;
}
 .stick-value {
\t position: absolute;
\t bottom: 0;
\t transform: translateX(-50%);
\t color: #a79e9f;
\t font-weight: bold;
\t font-size: 1.2em;
}
#bx{
    margin-top:10px;
     position: relative;
     border: 2px solid black;
     width: 100%;
     height: 100%;
     
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
              Mesurer avec une règle
            </h5>
          </div>
        </div>
      </div>
      <br><br>
      <div  id=\"bx\" class=\"container\" >
       <hr class=\"new\" style=\"width:210px;\"  />
       
<div id=\"ruler\" class=\"ruler\">
  <ul class=\"stick-container\">
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">0</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">1</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">2</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">3</span>
    </li>
    <li class=\"stick\">
      <ul class=\"minor-stick-container\">
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
        <li class=\"minor-stick\"></li>
      </ul>
      <span class=\"stick-value\">4</span>
    </li>

  </ul>
</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">En utilisant la règle , Quelle est la taille ?&nbsp;?<p>
    </div>
<br>
      
<br>
<div  class=\"container\">
<div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\" style=\"border : 2px solid black;width: 100%\"  name=\"lnum\" >
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\">cm</label>          
  </div>
  <div class=\"block\">\t<button id=\"valider\"  class=\"genric-btn primary small\">valider</button></div>
  <div id=\"response\">
   <div id=\"html\"></div>         
       <div class=\"block text-center\"><button id=\"ok\"  hidden=\"true\" class=\"genric-btn primary \">ok</button></div>
  </div>
 </div>
  <!-- Tips Triks End -->

  <script>
    jQuery( document ).ready(function( \$ ) {
      var score = Number(window.localStorage.getItem('score'));
     \$( function() {
    \$( \"#ruler\" ).draggable();
  } );
\t\t\t
      //identification de l'image sélectionné et trouver l'index de l'image de la bonne réponse
        \$(\"#valider\").click(function () {
     
      if(\$(\"#lnum\").val() == 2){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:green\">Bravo!</h2>\t'
          );
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center\"><h2 style=\"color:red\">Echec! la bonne réponse est 2</h2>\t');
            }
             \$(\"input\").prop(\"disabled\",true);   
               \$(\"#ok\").attr(\"hidden\",false);
        });
    
 \$(\"#ok\").click(function () {
          \$(\"#response\").text(\"\");
          window.location.replace(\"jourssemaines\");
        });
    });

\$(function(){
  var ff;    
    //pour  selectionner les images et implémenter le compteur
   \$('.img').on('click', function(evt) {
        ff = \$(this);        
        \$('.img').removeClass('selectedd');
        ff.addClass('selectedd');
        evt.stopPropagation();
        //alert(\"\"+ff.index());
        
    });   
    
});
 
</script>


{% endblock %}", "@Gs/Default/grandeurs/mesurerregle.html.twig", "C:\\wamp64\\www\\PFA\\src\\GsBundle\\Resources\\views\\Default\\grandeurs\\mesurerregle.html.twig");
    }
}
