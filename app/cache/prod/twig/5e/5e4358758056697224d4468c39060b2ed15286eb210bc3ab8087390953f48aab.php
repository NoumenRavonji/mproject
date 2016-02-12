<?php

/* MISAMprojectBundle:Client:index.html.twig */
class __TwigTemplate_1b1e3cdfc4e5c519ff18d4a395b3eb11178f1b30b356cb0a8083474f5d3d46a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Client:index.html.twig", 1);
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
 \t<h3>Tous les clients</h3>
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"info\">
\t\t\t\t\t\t";
        // line 9
        echo "\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 14
            echo "\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t";
            // line 17
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["client"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_view", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-green'>Voir</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-orange'>Modifier</span></a>
\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?')\"><span class='btn-red'>Supprimer</span></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</table>

\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("misa_client_add");
        echo "\"><span class=\"btn-blue\"> <b>+</b> Ajouter</span></a>

 ";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  77 => 26,  66 => 21,  62 => 20,  58 => 19,  52 => 17,  48 => 14,  44 => 13,  38 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/* */
/*  	<h3>Tous les clients</h3>*/
/* 			<table>*/
/* 				<thead>*/
/* 					<tr class="info">*/
/* 						{# <td></td> #}*/
/* 							<th>Nom</th>*/
/* 							<th>Actions</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 		{% for client in clients %}*/
/* 				*/
/* 				<tr>*/
/* 					{# <td></td> #}*/
/* 					<td>{{ client.nom|upper }}</td>*/
/* 					<td>*/
/* 						<a href="{{ path('misa_client_view',{'id': client.id}) }}"><span class='btn-green'>Voir</span></a>*/
/* 						<a href="{{ path('misa_client_edit',{'id': client.id}) }}"><span class='btn-orange'>Modifier</span></a>*/
/* 						<a href="{{ path('misa_client_delete',{'id': client.id}) }}" onclick="return confirm('are u sure?')"><span class='btn-red'>Supprimer</span></a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			*/
/* 		{% endfor %}*/
/* 		</table>*/
/* */
/* 		<a href="{{ path('misa_client_add') }}"><span class="btn-blue"> <b>+</b> Ajouter</span></a>*/
/* */
/*  {% endblock %}*/
