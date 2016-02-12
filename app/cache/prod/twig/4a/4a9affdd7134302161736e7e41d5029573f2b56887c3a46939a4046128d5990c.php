<?php

/* MISAMprojectBundle:Project:view.html.twig */
class __TwigTemplate_eeda09e24d2a7dfa12376877a425974aa440fe1e9563d8abcc30715212383636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Project:view.html.twig", 1);
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
\t\t<h3>Projet</h3>
\t\t<p><b>Nom du projet :</b> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "nom", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Nom du client :</b> <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_client_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "client", array()), "nom", array()), "html", null, true);
        echo "</a></p>
\t\t<p><b>Date de livraison :</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "dateLivraison", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t<p><b>Type:</b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "type", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Langages utilisés:</b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "langages", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Etat du projet :</b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "etat", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Développeur :</b>
\t\t\t";
        // line 20
        if ( !twig_test_empty($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "assignation", array()))) {
            // line 21
            echo "\t\t\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "assignation", array()), "developer", array()), "nom", array()), "html", null, true);
            echo "</a>
\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t<i>Non assigné</i>
\t\t\t";
        }
        // line 25
        echo "\t\t</p>
\t</div>

\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\"><span class=\"btn-green\"><b><</b> Retour à la liste</span></a>
\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_edit", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\"><span class='btn-orange'>Modifier</span></a>
\t<a onclick=\"return confirm('are u sure?')\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_delete", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "id", array()))), "html", null, true);
        echo "\"><span class='btn-red'> Supprimer</span></a>
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Project:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  111 => 29,  107 => 28,  102 => 25,  98 => 23,  92 => 21,  90 => 20,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  67 => 14,  63 => 13,  59 => 11,  53 => 10,  44 => 7,  41 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/* 		<h3>Projet</h3>*/
/* 		<p><b>Nom du projet :</b> {{ project.nom }}</p>*/
/* 		<p><b>Nom du client :</b> <a href="{{ path('misa_client_view', {'id': project.client.id }) }}">{{ project.client.nom }}</a></p>*/
/* 		<p><b>Date de livraison :</b> {{ project.dateLivraison|date('d/m/Y') }}</p>*/
/* 		<p><b>Type:</b> {{ project.type }}</p>*/
/* 		<p><b>Langages utilisés:</b> {{ project.langages }}</p>*/
/* 		<p><b>Etat du projet :</b> {{ project.etat }}</p>*/
/* 		<p><b>Développeur :</b>*/
/* 			{% if project.assignation is not empty %}*/
/* 				<a href="">{{ project.assignation.developer.nom }}</a>*/
/* 				{% else %}*/
/* 				<i>Non assigné</i>*/
/* 			{% endif %}*/
/* 		</p>*/
/* 	</div>*/
/* */
/* 	<a href="{{ path('misa_project_homepage')}}"><span class="btn-green"><b><</b> Retour à la liste</span></a>*/
/* 	<a href="{{ path('misa_project_edit', { 'id': project.id })}}"><span class='btn-orange'>Modifier</span></a>*/
/* 	<a onclick="return confirm('are u sure?')" href="{{ path('misa_project_delete', { 'id': project.id })}}"><span class='btn-red'> Supprimer</span></a>*/
/* {% endblock %}*/
