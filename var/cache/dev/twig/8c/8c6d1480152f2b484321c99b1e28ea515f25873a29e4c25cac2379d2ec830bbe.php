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

/* Default/index.html.twig */
class __TwigTemplate_2311ff38e49503f13f91b08ae4c95f2fcd3cd41fa85dc5ef8038231244e22f89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <section class=\"button-area\">
    <div class=\"container text-center\">
      <div class=\"button-group-area mt-40\">
        <a href=\"#nombrescalculs\" class=\"genric-btn primary circle\">
          Nombres et calculs
        </a>
        <a href=\"#grandeursmesures\" class=\"genric-btn primary circle\">
          Grandeurs et mesures
        </a>
        <a href=\"#espaceetgeometrie\" class=\"genric-btn primary circle\">
          Espaces et géometrie
        </a>
      </div>
    </div>
  </section>

  <div id=\"nombrescalculs\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Nombres et calculs
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Compter jusqu'a 20
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compterdeux");
        echo "\"><span>Compter par 2</span></a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("additiontrou");
        echo "\"><span>Addition par Trou jusqu'a 10</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Comparer des nombres et des collections
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparertrois");
        echo "\"><span>Comparer 3 nombres</span></a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moinsplus");
        echo "\"><span>Moins ou Plus</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Soustraction
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("soustraction");
        echo "\"><span>Soustraction à trou</span></a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div id=\"grandeursmesures\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Grandeurs et mesures
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Longueurs
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparerlongueurs");
        echo "\"><span>Comparer des longueurs</span></a></li>
            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesurerlongueurs");
        echo "\"><span>Mesurer avec une règle</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Durées et dates
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jourssemaines");
        echo "\"><span>Nombre de jours par semaine</span></a></li>
            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moisannees");
        echo "\"><span>Nombre de mois par année</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Température
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liretemperature");
        echo "\"><span>Lire la température</span></a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div id=\"espaceetgeometrie\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Espace et géométrie
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Les Solides
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recsolides");
        echo "\"><span>Reconnaitre les solides</span></a></li>
          </ol>
        </div>
      </div>
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Les Figures planes
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planes");
        echo "\"><span>Reconnaitre des figures planes</span></a></li>
          </ol>
        </div>
      </div>


    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 125,  203 => 115,  182 => 97,  168 => 86,  164 => 85,  150 => 74,  146 => 73,  125 => 55,  111 => 44,  107 => 43,  93 => 32,  89 => 31,  60 => 4,  51 => 3,  29 => 1,);
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

{% block body %}
  <section class=\"button-area\">
    <div class=\"container text-center\">
      <div class=\"button-group-area mt-40\">
        <a href=\"#nombrescalculs\" class=\"genric-btn primary circle\">
          Nombres et calculs
        </a>
        <a href=\"#grandeursmesures\" class=\"genric-btn primary circle\">
          Grandeurs et mesures
        </a>
        <a href=\"#espaceetgeometrie\" class=\"genric-btn primary circle\">
          Espaces et géometrie
        </a>
      </div>
    </div>
  </section>

  <div id=\"nombrescalculs\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Nombres et calculs
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Compter jusqu'a 20
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('compterdeux') }}\"><span>Compter par 2</span></a></li>
            <li><a href=\"{{ path('additiontrou') }}\"><span>Addition par Trou jusqu'a 10</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Comparer des nombres et des collections
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('comparertrois') }}\"><span>Comparer 3 nombres</span></a></li>
            <li><a href=\"{{ path('moinsplus') }}\"><span>Moins ou Plus</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Soustraction
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('soustraction') }}\"><span>Soustraction à trou</span></a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div id=\"grandeursmesures\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Grandeurs et mesures
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Longueurs
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('comparerlongueurs') }}\"><span>Comparer des longueurs</span></a></li>
            <li><a href=\"{{ path('mesurerlongueurs') }}\"><span>Mesurer avec une règle</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Durées et dates
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('jourssemaines') }}\"><span>Nombre de jours par semaine</span></a></li>
            <li><a href=\"{{ path('moisannees') }}\"><span>Nombre de mois par année</span></a></li>
          </ol>
        </div>
      </div>

      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Température
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('liretemperature') }}\"><span>Lire la température</span></a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div id=\"espaceetgeometrie\" class=\"section-top-border\">
    <h3 class=\"mb-20\">
      Espace et géométrie
    </h3>
    <div class=\"row\">
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Les Solides
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('recsolides') }}\"><span>Reconnaitre les solides</span></a></li>
          </ol>
        </div>
      </div>
      <div class=\"col-md-4 mt-sm-30\">
        <h5 class=\"mb-20\">
          Les Figures planes
        </h5>
        <div class=\"\">
          <ol class=\"ordered-list\">
            <li><a href=\"{{ path('planes') }}\"><span>Reconnaitre des figures planes</span></a></li>
          </ol>
        </div>
      </div>


    </div>
  </div>
{% endblock %}
", "Default/index.html.twig", "C:\\wamp64\\www\\PFA\\app\\Resources\\views\\default\\index.html.twig");
    }
}
