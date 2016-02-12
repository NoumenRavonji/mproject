<?php

/* MISAMprojectBundle:Client:view.html.twig */
class __TwigTemplate_f30ab8cf80c6edb365029b9935467b9c94c9b40df6a7659702fccd8704efff25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Client:view.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 6
                echo "        <div class=\"alert\">
            ";
                // line 7
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t<div>
\t\t<h3>Client</h3>
\t\t<p><b>Nom:</b> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nom", array()), "html", null, true);
        echo "</p>
\t\t<p>
\t\t\t<b>Projets :</b>
\t\t\t";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "projects", array()))) {
            // line 17
            echo "\t\t\t<ul>
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "projects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 19
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_view", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nom", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</ul>
\t\t\t";
        } else {
            // line 23
            echo "\t\t\t<i> pas de projet </i>
\t\t";
        }
        // line 25
        echo "\t\t</p>
\t</div>

\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\"><span class=\"btn-green\"> <b><</b> Retour à la liste</span></a>
\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array()))), "html", null, true);
        echo "\"><span class='btn-orange'> Modifier</span></a>
\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_delete", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array()))), "html", null, true);
        echo "\"><span class='btn-red'> Supprimer</span></a>
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Client:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  106 => 29,  102 => 28,  97 => 25,  93 => 23,  89 => 21,  78 => 19,  74 => 18,  71 => 17,  69 => 16,  63 => 13,  59 => 11,  53 => 10,  44 => 7,  41 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig"%}*/
/* */
/* {% block content %}*/
/* 	{% for label, flashes in app.session.flashbag.all %}*/
/*     {% for flash in flashes %}*/
/*         <div class="alert">*/
/*             {{ flash }}*/
/*         </div>*/
/*     {% endfor %}*/
/* 	{% endfor %}*/
/* 	<div>*/
/* 		<h3>Client</h3>*/
/* 		<p><b>Nom:</b> {{ client.nom }}</p>*/
/* 		<p>*/
/* 			<b>Projets :</b>*/
/* 			{% if client.projects is not empty %}*/
/* 			<ul>*/
/* 				{% for project in client.projects %}*/
/* 					<li><a href="{{ path('misa_project_view', {'id': project.id } )}}">{{ project.nom }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			{% else %}*/
/* 			<i> pas de projet </i>*/
/* 		{% endif %}*/
/* 		</p>*/
/* 	</div>*/
/* */
/* 	<a href="{{ path('misa_project_homepage')}}"><span class="btn-green"> <b><</b> Retour à la liste</span></a>*/
/* 	<a href="{{ path('misa_client_edit', { 'id': client.id })}}"><span class='btn-orange'> Modifier</span></a>*/
/* 	<a href="{{ path('misa_client_delete', { 'id': client.id })}}"><span class='btn-red'> Supprimer</span></a>*/
/* {% endblock %}*/
