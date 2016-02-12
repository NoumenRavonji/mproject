<?php

/* MISAMprojectBundle:Project:form.html.twig */
class __TwigTemplate_88b5d202e9c95468b5c2a42da89ccc9a8ad3b887e43d0ff6cd40014733e3cd6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">

\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label" => "Nom :"));
        echo "
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
\t</div>

  <div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "client", array()), 'label', array("label" => "Nom du client :"));
        echo "
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "client", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "client", array()), 'widget');
        echo "
  </div>

\t<div class=\"form-group\">
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateLivraison", array()), 'label', array("label" => "Date de livraison :"));
        echo "
      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateLivraison", array()), 'errors');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateLivraison", array()), 'widget', array("attr" => array("class" => "date")));
        echo "
\t</div>

\t<div class=\"form-group\">
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label', array("label" => "Type :"));
        echo "
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'errors');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "langages", array()), 'label', array("label" => "Langages utilisés :"));
        echo "
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "langages", array()), 'errors');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "langages", array()), 'widget');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "etat", array()), 'label', array("label" => "Etat du projet :"));
        echo "
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "etat", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "etat", array()), 'widget');
        echo "
  </div>


\t<div>
      <div class=\"form-group\">

        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn-blue")));
        echo "

        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\"><span class=\"btn-orange\">Annuler</span></a>

      </div>

  </div>

      ";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Project:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  127 => 47,  117 => 40,  113 => 39,  109 => 38,  102 => 34,  98 => 33,  94 => 32,  87 => 28,  83 => 27,  79 => 26,  72 => 22,  68 => 21,  64 => 20,  57 => 16,  53 => 15,  49 => 14,  42 => 10,  38 => 9,  34 => 8,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="well">*/
/* */
/* 	{{ form_start(form) }}*/
/* */
/* 	{{ form_errors(form) }}*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.nom, "Nom :") }}*/
/*       {{ form_errors(form.nom) }}*/
/*         {{ form_widget(form.nom) }}*/
/* 	</div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.client, "Nom du client :") }}*/
/*       {{ form_errors(form.client) }}*/
/*         {{ form_widget(form.client) }}*/
/*   </div>*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.dateLivraison, "Date de livraison :") }}*/
/*       {{ form_errors(form.dateLivraison) }}*/
/*         {{ form_widget(form.dateLivraison, {'attr': {'class': 'date'}}) }}*/
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/*     {{ form_label(form.type, "Type :") }}*/
/*       {{ form_errors(form.type) }}*/
/*         {{ form_widget(form.type) }}*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.langages, "Langages utilisés :") }}*/
/*       {{ form_errors(form.langages) }}*/
/*         {{ form_widget(form.langages) }}*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.etat, "Etat du projet :") }}*/
/*       {{ form_errors(form.etat) }}*/
/*         {{ form_widget(form.etat) }}*/
/*   </div>*/
/* */
/* */
/* 	<div>*/
/*       <div class="form-group">*/
/* */
/*         {{ form_widget(form.save, {'attr': {'class': 'btn-blue'}}) }}*/
/* */
/*         <a href="{{ path('misa_project_homepage') }}"><span class="btn-orange">Annuler</span></a>*/
/* */
/*       </div>*/
/* */
/*   </div>*/
/* */
/*       */
