<?php

/* MISAMprojectBundle:Project:add.html.twig */
class __TwigTemplate_55e672ab691a3d451f258d35d95b106ea215e6b22ba16cd0c614dba663291e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Project:add.html.twig", 1);
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
        echo "\t<center><h3>Ajouter un projet</h3></center>
\t\t";
        // line 5
        echo twig_include($this->env, $context, "MISAMprojectBundle:Project:form.html.twig");
        echo "
\t 

";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "




</div>


\t
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Project:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig"%}*/
/* */
/* {% block content %}*/
/* 	<center><h3>Ajouter un projet</h3></center>*/
/* 		{{ include("MISAMprojectBundle:Project:form.html.twig") }}*/
/* 	 */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* 	*/
/* {% endblock %}*/
