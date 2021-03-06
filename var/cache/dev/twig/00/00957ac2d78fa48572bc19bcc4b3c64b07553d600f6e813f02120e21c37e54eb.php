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

/* @Gs/Default/compterdeux.html.twig */
class __TwigTemplate_4430e4edb0e0c499a56b8379e6696c27a2ba8daea8ed6a7f5669fa74e7ab8ddf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/compterdeux.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/compterdeux.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Gs/Default/compterdeux.html.twig", 1);
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
        echo "  _ Compter par 2
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
        echo "<style>
        .selectedd{
border:2px inset silver;
        }

.small {
    width: 92px !important;
}
img:hover {
  opacity: 0.5;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Compter par 2
            </h5>
          </div>
        </div>
      </div>
      <br><br>

    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Toucher les fraises pour compter par 2<p>
    </div>
    <br>

      <div id=\"banner\" class=\"banner\">
       
    <div id=\"img1\" class=\"inline-block\" style=\"display: inline-block;\">
        <img class=\"img\" src =\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fraise.svg"), "html", null, true);
        echo "\">
    </div>
     
    <div class=\"inline-block\" style=\"display: inline-block;\">
     
        <img class=\"img\" id=\"img2\" src =\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fraise.svg"), "html", null, true);
        echo "\">
    </div>

    <div id=\"img3\" class=\"inline-block\" style=\"display: inline-block;\">
    
        <img class=\"img\" src =\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fraise.svg"), "html", null, true);
        echo "\">
    </div>

    <div id=\"img4\" class=\"inline-block\" style=\"display: inline-block;\">
     
        <img class=\"img\" src =\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fraise.svg"), "html", null, true);
        echo "\">
    </div>
</div>
<br>
<div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Le nombre des fraises est  : <p>&nbsp;&nbsp;&nbsp;<h5 class = \"res\"></h5>
    </div>
    <br>
                 <div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\" style=\"border : 2px solid black;width: 100%\"  name=\"lnum\" >
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\"></label>
\t\t\t\t\t      
       </div>
       <div class=\"span2\">
\t<p ><button id=\"valider\"  class=\"genric-btn primary small \">valider</button></p>
  <p ><button id=\"annuler\"  class=\"genric-btn success small \">annuler</button></p>
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
        \$(\"#valider\").click(function () {
          if(\$(\"#lnum\").val().length ==0){
            alert(\"Empty!\");
          }else{
            if(\$(\"#lnum\").val() == 8){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center success\"><h2 style=\"color:green\">Bravo!</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>\t');
         document.getElementById('response').scrollIntoView();
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center danger\"><h2 style=\"color:red\">Echec! la bonne réponse est 8</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>\t');
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
           window.location.replace(\"comparertrois\");
        });
    });


\$(function(){
  var ff;
    var cpt = 0;
    //pour  selectionner les images et implémenter le compteur
    \$('.img').on('click', function(evt) {
        ff = \$(this);
      cpt+=2;
        \$(\".res\").text(cpt);
      //capturer le click
        evt.stopPropagation();
        //rendre les images disabled aprés le click
        ff.css(\"pointer-events\",\"none\")
        ff.addClass('selectedd')
    }); 
     //pour annuler les clicks
      \$('#annuler').on('click', function() {
      cpt = 0;
      \$(\".res\").text(cpt);
        if (ff.length) {
           \$('img').removeClass('selectedd');
           \$('.img').css(\"pointer-events\",\"auto\");
           
        }

    });


  
});
 




/* select and unselect images
\$(function(){
  var ff;
    var cpt = 0;

    \$('.img').on('click', function(evt) {
        ff = \$(this);
        cpt+=2;
        evt.stopPropagation();
        \$('.img').removeClass('selectedd')
        ff.addClass('selectedd')
        alert(\"cpt\"+cpt);
    }); 
    \$('body').on('click', function() {
        if (ff.length) {
           ff.removeClass('selectedd')
        }
    });
});
 
*/

 
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gs/Default/compterdeux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  154 => 54,  146 => 49,  138 => 44,  113 => 21,  104 => 20,  82 => 6,  73 => 5,  62 => 3,  53 => 2,  31 => 1,);
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
  _ Compter par 2
{% endblock %}
{% block main %}
<style>
        .selectedd{
border:2px inset silver;
        }

.small {
    width: 92px !important;
}
img:hover {
  opacity: 0.5;
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
              Compter par 2
            </h5>
          </div>
        </div>
      </div>
      <br><br>

    <div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Toucher les fraises pour compter par 2<p>
    </div>
    <br>

      <div id=\"banner\" class=\"banner\">
       
    <div id=\"img1\" class=\"inline-block\" style=\"display: inline-block;\">
        <img class=\"img\" src =\"{{ asset('assets/images/fraise.svg')}}\">
    </div>
     
    <div class=\"inline-block\" style=\"display: inline-block;\">
     
        <img class=\"img\" id=\"img2\" src =\"{{ asset('assets/images/fraise.svg')}}\">
    </div>

    <div id=\"img3\" class=\"inline-block\" style=\"display: inline-block;\">
    
        <img class=\"img\" src =\"{{ asset('assets/images/fraise.svg')}}\">
    </div>

    <div id=\"img4\" class=\"inline-block\" style=\"display: inline-block;\">
     
        <img class=\"img\" src =\"{{ asset('assets/images/fraise.svg')}}\">
    </div>
</div>
<br>
<div class=\"d-inline-flex mb-3\">
    <p class=\"sample-text \">Le nombre des fraises est  : <p>&nbsp;&nbsp;&nbsp;<h5 class = \"res\"></h5>
    </div>
    <br>
                 <div class=\"d-inline-flex mb-3\">
                  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" id =\"lnum\" style=\"border : 2px solid black;width: 100%\"  name=\"lnum\" >
                  \t</div>
                  <label style=\"display=inline-block;text-align=right;\" for=\"lnum\"></label>
\t\t\t\t\t      
       </div>
       <div class=\"span2\">
\t<p ><button id=\"valider\"  class=\"genric-btn primary small \">valider</button></p>
  <p ><button id=\"annuler\"  class=\"genric-btn success small \">annuler</button></p>
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
        \$(\"#valider\").click(function () {
          if(\$(\"#lnum\").val().length ==0){
            alert(\"Empty!\");
          }else{
            if(\$(\"#lnum\").val() == 8){
              score+=10;
              window.localStorage.setItem('score', score);
           \$(\"#html\").html('<div class=\"section-tittle text-center success\"><h2 style=\"color:green\">Bravo!</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +10</h6></div><br>\t');
         document.getElementById('response').scrollIntoView();
            }else{
              \$(\"#html\").html('<div class=\"section-tittle text-center danger\"><h2 style=\"color:red\">Echec! la bonne réponse est 8</h2></div><div class=\"section-tittle text-center\"><h6 style=\"color:blue\">score +0</h6></div><br>\t');
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
           window.location.replace(\"comparertrois\");
        });
    });


\$(function(){
  var ff;
    var cpt = 0;
    //pour  selectionner les images et implémenter le compteur
    \$('.img').on('click', function(evt) {
        ff = \$(this);
      cpt+=2;
        \$(\".res\").text(cpt);
      //capturer le click
        evt.stopPropagation();
        //rendre les images disabled aprés le click
        ff.css(\"pointer-events\",\"none\")
        ff.addClass('selectedd')
    }); 
     //pour annuler les clicks
      \$('#annuler').on('click', function() {
      cpt = 0;
      \$(\".res\").text(cpt);
        if (ff.length) {
           \$('img').removeClass('selectedd');
           \$('.img').css(\"pointer-events\",\"auto\");
           
        }

    });


  
});
 




/* select and unselect images
\$(function(){
  var ff;
    var cpt = 0;

    \$('.img').on('click', function(evt) {
        ff = \$(this);
        cpt+=2;
        evt.stopPropagation();
        \$('.img').removeClass('selectedd')
        ff.addClass('selectedd')
        alert(\"cpt\"+cpt);
    }); 
    \$('body').on('click', function() {
        if (ff.length) {
           ff.removeClass('selectedd')
        }
    });
});
 
*/

 
</script>


{% endblock %}



", "@Gs/Default/compterdeux.html.twig", "C:\\wamp64\\www\\PFA\\src\\GsBundle\\Resources\\views\\Default\\compterdeux.html.twig");
    }
}
