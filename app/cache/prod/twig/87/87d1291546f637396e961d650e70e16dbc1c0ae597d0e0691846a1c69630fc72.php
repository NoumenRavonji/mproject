<?php

/* MISAMprojectBundle:Client:form.html.twig */
class __TwigTemplate_77648811e1af97de6854326cf280593103d93dbb3124f1195514337287590777 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
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

\t<div class=\"form-group\">


      ";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Client:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  34 => 8,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="well">*/
/* */
/* 	{{ form_start(form, { 'attr': {'class': 'form-horizontal'} }) }}*/
/* */
/* 	{{ form_errors(form) }}*/
/* */
/* 	<div class="form-group">*/
/* 		{{ form_label(form.nom, "Nom :") }}*/
/*       {{ form_errors(form.nom) }}*/
/*         {{ form_widget(form.nom) }}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="form-group">*/
/* */
/* */
/*       */
