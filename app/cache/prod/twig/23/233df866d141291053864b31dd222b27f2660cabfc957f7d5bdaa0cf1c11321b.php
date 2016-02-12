<?php

/* MISAMprojectBundle:Client:edit.html.twig */
class __TwigTemplate_cdef5f6762f49d542eb0379c687c2b3f746abb78f220f9409b6cb2ad5e14f9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Client:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MISAMprojectBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "MISAMprojectBundle:Client:form.html.twig");
        echo "

\t<div>

        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Modifier", array()), 'widget', array("attr" => array("class" => "btn-blue")));
        echo "

        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\"><span class=\"btn-orange\">Annuler</span></a>

      </div>

\t</div>
\t 
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>
\t
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  44 => 10,  39 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig"%}*/
/* */
/* {% block content %}*/
/* 	{{ include("MISAMprojectBundle:Client:form.html.twig") }}*/
/* */
/* 	<div>*/
/* */
/*         {{ form_widget(form.Modifier, {'attr': {'class': 'btn-blue'}}) }}*/
/* */
/*         <a href="{{ path('misa_project_homepage') }}"><span class="btn-orange">Annuler</span></a>*/
/* */
/*       </div>*/
/* */
/* 	</div>*/
/* 	 */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* </div>*/
/* 	*/
/* {% endblock %}*/
