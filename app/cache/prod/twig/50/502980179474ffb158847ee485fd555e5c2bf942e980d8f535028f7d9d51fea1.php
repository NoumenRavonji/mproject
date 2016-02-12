<?php

/* MISAMprojectBundle:Developer:view.html.twig */
class __TwigTemplate_21f70751c57ff013c8e1c797aca26183ad7f139a340ed9ce44190aad8eb96951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Developer:view.html.twig", 1);
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
                echo "        <div class=\"alert alert-success\">
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
\t\t<h3>Développeur</h3>
\t\t<p><b>Nom:</b> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "nom", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Compétences:</b> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "competence", array()), "html", null, true);
        echo "</p>
\t\t<p><b>Date d'entrée dans l'entreprise :</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "dateEntree", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t<p><b>Projets :</b> 
\t\t\t<ul>
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "assignations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["assignation"]) {
            // line 19
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_view", array("id" => $this->getAttribute($this->getAttribute($context["assignation"], "project", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["assignation"], "project", array()), "nom", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</ul>\t
\t\t</p>
\t</div>

\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\"><span class=\"btn-green\"><b><</b> Retour à la liste</span></a>
\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_edit", array("id" => $this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "id", array()))), "html", null, true);
        echo "\"><span class='btn-orange'> Modifier</span></a>
\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_delete", array("id" => $this->getAttribute((isset($context["developer"]) ? $context["developer"] : null), "id", array()))), "html", null, true);
        echo "\" onclick=\"return confirm('are u sure?')\"><span class='btn-red'>Supprimer</span></a>
";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Developer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  102 => 26,  98 => 25,  92 => 21,  81 => 19,  77 => 18,  71 => 15,  67 => 14,  63 => 13,  59 => 11,  53 => 10,  44 => 7,  41 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig"%}*/
/* */
/* {% block content %}*/
/* 	{% for label, flashes in app.session.flashbag.all %}*/
/*     {% for flash in flashes %}*/
/*         <div class="alert alert-success">*/
/*             {{ flash }}*/
/*         </div>*/
/*     {% endfor %}*/
/* 	{% endfor %}*/
/* 	<div>*/
/* 		<h3>Développeur</h3>*/
/* 		<p><b>Nom:</b> {{ developer.nom }}</p>*/
/* 		<p><b>Compétences:</b> {{ developer.competence }}</p>*/
/* 		<p><b>Date d'entrée dans l'entreprise :</b> {{ developer.dateEntree|date('d/m/Y') }}</p>*/
/* 		<p><b>Projets :</b> */
/* 			<ul>*/
/* 				{% for assignation in developer.assignations %}*/
/* 				<li><a href="{{ path('misa_project_view', {'id': assignation.project.id }) }}">{{ assignation.project.nom }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>	*/
/* 		</p>*/
/* 	</div>*/
/* */
/* 	<a href="{{ path('misa_project_homepage')}}"><span class="btn-green"><b><</b> Retour à la liste</span></a>*/
/* 	<a href="{{ path('misa_developer_edit', { 'id': developer.id })}}"><span class='btn-orange'> Modifier</span></a>*/
/* 	<a href="{{ path('misa_developer_delete', { 'id': developer.id })}}" onclick="return confirm('are u sure?')"><span class='btn-red'>Supprimer</span></a>*/
/* {% endblock %}*/
