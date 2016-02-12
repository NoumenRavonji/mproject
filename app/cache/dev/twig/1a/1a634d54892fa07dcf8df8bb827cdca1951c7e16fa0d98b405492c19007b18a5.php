<?php

/* MISAMprojectBundle:Developer:index.html.twig */
class __TwigTemplate_6dfd7ab6b93d98d662c9454a4ef8dfe63c9e1af2974bacaca3c71362ed850cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Developer:index.html.twig", 1);
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
        $__internal_ba735591583cfe402995ad53c54934083d40541844f5d1f50dccbef0c8d9b578 = $this->env->getExtension("native_profiler");
        $__internal_ba735591583cfe402995ad53c54934083d40541844f5d1f50dccbef0c8d9b578->enter($__internal_ba735591583cfe402995ad53c54934083d40541844f5d1f50dccbef0c8d9b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MISAMprojectBundle:Developer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba735591583cfe402995ad53c54934083d40541844f5d1f50dccbef0c8d9b578->leave($__internal_ba735591583cfe402995ad53c54934083d40541844f5d1f50dccbef0c8d9b578_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b2162bf4a0efb28907badcd6b97dd999516f2e54365d512ee6603accb627fb0 = $this->env->getExtension("native_profiler");
        $__internal_8b2162bf4a0efb28907badcd6b97dd999516f2e54365d512ee6603accb627fb0->enter($__internal_8b2162bf4a0efb28907badcd6b97dd999516f2e54365d512ee6603accb627fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
 \t <h3>Tous les développeurs</h3>

\t\t\t<table id=\"sort\" >
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"info\">
\t\t\t\t\t\t";
        // line 10
        echo "\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Compétences</th>
\t\t\t\t\t\t\t<th>Date d'entrée dans l'entreprise</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["developers"]) ? $context["developers"] : $this->getContext($context, "developers")));
        foreach ($context['_seq'] as $context["_key"] => $context["developer"]) {
            // line 18
            echo "\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t";
            // line 21
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["developer"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["developer"], "competence", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["developer"], "dateEntree", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_view", array("id" => $this->getAttribute($context["developer"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-green'>Voir </span></a>
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_edit", array("id" => $this->getAttribute($context["developer"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-orange'>Modifier</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_delete", array("id" => $this->getAttribute($context["developer"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?')\"><span class='btn-red'>Supprimer</span></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['developer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</tbody>
\t\t</table>

\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("misa_developer_add");
        echo "\"><span class=\"btn-blue\"> <b>+</b> Ajouter</span></a>

 ";
        
        $__internal_8b2162bf4a0efb28907badcd6b97dd999516f2e54365d512ee6603accb627fb0->leave($__internal_8b2162bf4a0efb28907badcd6b97dd999516f2e54365d512ee6603accb627fb0_prof);

    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Developer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  98 => 32,  87 => 27,  83 => 26,  79 => 25,  74 => 23,  70 => 22,  65 => 21,  61 => 18,  57 => 17,  48 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/* */
/*  	 <h3>Tous les développeurs</h3>*/
/* */
/* 			<table id="sort" >*/
/* 				<thead>*/
/* 					<tr class="info">*/
/* 						{# <td></td> #}*/
/* 							<th>Nom</th>*/
/* 							<th>Compétences</th>*/
/* 							<th>Date d'entrée dans l'entreprise</th>*/
/* 							<th>Actions</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 		{% for developer in developers %}*/
/* 				*/
/* 				<tr>*/
/* 					{# <td></td> #}*/
/* 					<td>{{ developer.nom }}</td>*/
/* 					<td>{{ developer.competence }}</td>*/
/* 					<td>{{ developer.dateEntree|date("d/m/Y") }}</td>*/
/* 					<td>*/
/* 						<a href="{{ path('misa_developer_view',{'id': developer.id}) }}"><span class='btn-green'>Voir </span></a>*/
/* 						<a href="{{ path('misa_developer_edit',{'id': developer.id}) }}"><span class='btn-orange'>Modifier</span></a>*/
/* 						<a href="{{ path('misa_developer_delete',{'id': developer.id}) }}" onclick="return confirm('are u sure?')"><span class='btn-red'>Supprimer</span></a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 		<a href="{{ path('misa_developer_add') }}"><span class="btn-blue"> <b>+</b> Ajouter</span></a>*/
/* */
/*  {% endblock %}*/
