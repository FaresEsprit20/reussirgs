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

/* @Gs/Default/scores.html.twig */
class __TwigTemplate_9ec641374ecc590aa8b5b9fb4ab01a524246ebec78aea31932a0686a6cc03509 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/scores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gs/Default/scores.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Gs/Default/scores.html.twig", 1);
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
        echo "  _ Moins ou Plus
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
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "  <!-- Tips Triks Start -->
  <div class=\"tips-triks-area tips-padding\">
    <div class=\"container\">
      <!-- Section-tittle -->
      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-6 col-md-8 pr-0\">
          <div class=\"section-tittle text-center\">
            <h5>
              Mes Scores
               ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? $this->getContext($context, "scores")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    <p class=\"sample-text \"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo " ?<p>
    <p class=\"sample-text \"> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user", []), "html", null, true);
            echo " ?<p>
     <p class=\"sample-text \"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "score", []), "html", null, true);
            echo " ?<p>
    <p class=\"sample-text \"> ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "datetime", []), "m/d/Y/h:m:s"), "html", null, true);
            echo " ?<p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </h5>
          </div>
        </div>
      </div>
      <br>


\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Mes Scores</h3>
\t\t\t\t<div class=\"progress-table-wrap\">
\t\t\t\t\t<div class=\"progress-table\">
\t\t\t\t\t\t<div class=\"table-head\">
\t\t\t\t\t\t\t<div class=\"serial\">#</div>
\t\t\t\t\t\t\t<div class=\"country\">Score</div>
\t\t\t\t\t\t\t<div class=\"visit\">Date</div>
                            <div class=\"action\">Action</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? $this->getContext($context, "scores")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"country\"> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "score", []), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"visit\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "datetime", []), "m/d/Y/h:m:s"), "html", null, true);
            echo "</div>
                            <div class=\"action\">\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", ["id" => $this->getAttribute($context["item"], "id", [])]), "html", null, true);
            echo "\" class=\"genric-btn info radius\">Supprimer</a></div>
\t\t\t\t\t\t</div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


  <!-- Tips Triks End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Gs/Default/scores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 52,  177 => 49,  173 => 48,  169 => 47,  165 => 46,  162 => 45,  158 => 44,  138 => 26,  130 => 24,  126 => 23,  122 => 22,  117 => 21,  113 => 20,  102 => 11,  93 => 10,  82 => 7,  73 => 6,  62 => 3,  53 => 2,  31 => 1,);
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
  _ Moins ou Plus
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
              Mes Scores
               {% for item in scores %}
    <p class=\"sample-text \"> {{ item.id }} ?<p>
    <p class=\"sample-text \"> {{ item.user }} ?<p>
     <p class=\"sample-text \"> {{ item.score }} ?<p>
    <p class=\"sample-text \"> {{ item.datetime|date(\"m/d/Y/h:m:s\") }} ?<p>
    {% endfor %}
            </h5>
          </div>
        </div>
      </div>
      <br>


\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Mes Scores</h3>
\t\t\t\t<div class=\"progress-table-wrap\">
\t\t\t\t\t<div class=\"progress-table\">
\t\t\t\t\t\t<div class=\"table-head\">
\t\t\t\t\t\t\t<div class=\"serial\">#</div>
\t\t\t\t\t\t\t<div class=\"country\">Score</div>
\t\t\t\t\t\t\t<div class=\"visit\">Date</div>
                            <div class=\"action\">Action</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                        {% for item in scores %}
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">{{ item.id }}</div>
\t\t\t\t\t\t\t<div class=\"country\"> {{item.score }}</div>
\t\t\t\t\t\t\t<div class=\"visit\">{{ item.datetime|date(\"m/d/Y/h:m:s\") }}</div>
                            <div class=\"action\">\t<a href=\"{{ path('delete', { 'id': item.id }) }}\" class=\"genric-btn info radius\">Supprimer</a></div>
\t\t\t\t\t\t</div>
                         {% endfor %}
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


  <!-- Tips Triks End -->

{% endblock %}


", "@Gs/Default/scores.html.twig", "C:\\wamp64\\www\\PFA\\src\\GsBundle\\Resources\\views\\Default\\scores.html.twig");
    }
}
