<?php

/* MISAMprojectBundle:Project:index.html.twig */
class __TwigTemplate_702c893eeee8c2ec61e42dce75959026b5ea9c3112703857ab6ade74b9d48225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Project:index.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
 \t <h3>Tous les projects</h3>
\t  <table class=\"table\">
\t\t<thead>
\t\t\t<tr data-project=\"head\" class=\"info\">
\t\t\t\t";
        // line 9
        echo "\t\t\t\t\t<th data-type=\"text\" >Nom du projet</th>
\t\t\t\t\t<th>Nom du client</th>
\t\t\t\t\t<th>Date de livraison</th>
\t\t\t\t\t<th>Développeur</th>
\t\t\t\t\t";
        // line 16
        echo "\t\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 21
            echo "\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t";
            // line 24
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["project"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "dateLivraison", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 27
            if ( !(null === $this->getAttribute($context["project"], "assignation", array()))) {
                // line 28
                echo "\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["project"], "assignation", array()), "developer", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["project"], "assignation", array()), "developer", array()), "nom", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t<td><i>non assigné</i></td>
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_view", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-green'> Voir</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-orange'>Modifier</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?')\"><span class='btn-red'>Supprimer </span></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</tbody>
\t\t</table>

\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("misa_project_add");
        echo "\"><span class=\"btn-blue\"> <b>+</b> Ajouter</span></a>
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  109 => 43,  98 => 38,  94 => 37,  90 => 36,  87 => 35,  85 => 32,  81 => 30,  73 => 28,  71 => 27,  67 => 26,  63 => 25,  58 => 24,  54 => 21,  50 => 20,  44 => 16,  38 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/* */
/*  	 <h3>Tous les projects</h3>*/
/* 	  <table class="table">*/
/* 		<thead>*/
/* 			<tr data-project="head" class="info">*/
/* 				{# <td></td> #}*/
/* 					<th data-type="text" >Nom du projet</th>*/
/* 					<th>Nom du client</th>*/
/* 					<th>Date de livraison</th>*/
/* 					<th>Développeur</th>*/
/* 					{# <th>Type</th>*/
/* 					<th>Langages utilisés</th>*/
/* 					<th>Etat</th> #}*/
/* 					<th></th>*/
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for project in projects %}*/
/* 				*/
/* 				<tr>*/
/* 					{# <td></td> #}*/
/* 					<td>{{ project.nom|upper }}</td>*/
/* 					<td>{{ project.client.nom }}</td>*/
/* 					<td>{{ project.dateLivraison|date("d/m/Y") }}</td>*/
/* 					{% if project.assignation is not null %}*/
/* 						<td><a href="{{ path('misa_developer_view', {'id':project.assignation.developer.id })}}">{{ project.assignation.developer.nom }}</a></td>*/
/* 						{% else %}*/
/* 						<td><i>non assigné</i></td>*/
/* 					{% endif %}*/
/* 					{# <td>{{ project.type }}</td>*/
/* 					<td>{{ project.langages }}</td>*/
/* 					<td>{{ project.etat }}</td> #}*/
/* 					<td>*/
/* 						<a href="{{ path('misa_project_view',{'id': project.id}) }}"><span class='btn-green'> Voir</span></a>*/
/* 						<a href="{{ path('misa_project_edit',{'id': project.id}) }}"><span class='btn-orange'>Modifier</span></a>*/
/* 						<a href="{{ path('misa_project_delete',{'id': project.id}) }}" onclick="return confirm('are u sure?')"><span class='btn-red'>Supprimer </span></a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 		<a href="{{ path('misa_project_add') }}"><span class="btn-blue"> <b>+</b> Ajouter</span></a>*/
/* {% endblock %}*/
/* */
