<?php

/* MISAMprojectBundle:Mproject:index.html.twig */
class __TwigTemplate_06310df07e7baddc6de15bbeb459ea34928b609382aa3ac0184735f01b218aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MISAMprojectBundle::layout.html.twig", "MISAMprojectBundle:Mproject:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
\t    <h2> Assignations</h2>
\t\t<p><i>(Vous pouvez glisser un projets non assingné à un développeur)</i></p>
\t\t<div class=\"demi\">
\t\t\t<h4>Projets non assignés</h4>

\t\t\t<table id=\"sort\" class='table-bordered'>
\t\t\t\t<thead>
\t\t\t
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects_to_assign"]) ? $context["projects_to_assign"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 15
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td  class=\"draggable\" id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["project"], "nom", array())), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_project_view", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-green'> Voir</span></a>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t\t<tbody>
\t\t</table>

\t\t</div>

\t\t<div class=\"demi\">
\t\t\t<h4>Développeurs</h4>
\t\t\t<table id=\"sort2\" >
\t\t\t\t<thead>
\t\t\t\t
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["developers"]) ? $context["developers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["developer"]) {
            // line 40
            echo "\t\t\t\t\t\t
\t\t\t\t\t<tr class=\"droppable\" id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["developer"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 43
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["developer"], "nom", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>(";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["developer"], "assignations", array())), "html", null, true);
            echo ")</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("misa_developer_view", array("id" => $this->getAttribute($context["developer"], "id", array()))), "html", null, true);
            echo "\"><span class='btn-green'>Voir </span>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['developer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t</tbody>
\t\t</table>

\t\t</div>
  </div>


 ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo " \t<script type=\"text/javascript\">

 \t\tvar fixHelper = function(e, ui) {
\t\t\t\tui.children().each(function() {
\t\t\t\t\t\$(this).width(\$(this).width());
\t\t\t\t});
\t\t\t\treturn ui;
\t\t};
 \t\t\$(function(){
 \t\t\t// \$( \"#tabs\" ).tabs();
 \t\t\t      
 \t\t\t\$(\".draggable\").draggable({
 \t\t\t\trevert: 'invalid',
 \t\t\t\tcursor: 'move',
 \t\t\t\tdrag: function(){
 \t\t\t\t\t\$(this).siblings().hide();
 \t\t\t\t\t\$(this).css(\"background-color\", \"#4CAF50\");
 \t\t\t\t\t\$(this).css(\"border-radius\", \"5px\");
 \t\t\t\t\t\$(this).css(\"color\", \"white\");
 \t\t\t\t},
 \t\t\t\tstop: function(){
 \t\t\t\t\t\$(this).siblings().show();
 \t\t\t\t\t\$(this).css(\"background-color\", \"#fff\");
 \t\t\t\t\t\$(this).css(\"color\", \"black\");
 \t\t\t\t}
 \t\t\t});

 \t\t\t\$('.droppable').droppable({
 \t\t\t\taccept: '.draggable',
 \t\t\t\tdrop: function(event, ui){
 \t\t\t\t\tvar current = ui.draggable;
 \t\t\t\t\tvar resultat = \$(this);
 \t\t\t\t\t// alert(current.attr('id'));
 \t\t\t\t\t// alert(resultat.attr('id'));
 \t\t\t\t\t var nb =resultat.children(\"td:eq(1)\");
 \t\t\t\t\t // alert(parseInt(nb.text())+1);
 \t\t\t\t\t // var new_nb = parseInt(nb.text())+1;
 \t\t\t\t\t\$.post(\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("misa_mproject_assign");
        echo "\",
\t\t\t\t    {
\t\t\t\t        project_id: current.attr('id'),
\t\t\t\t        developer_id: resultat.attr('id')
\t\t\t\t    },
\t\t\t\t    function(data, status){
\t\t\t\t        // alert(\"Data: \" + data + \"\\nStatus: \" + status);
\t\t\t\t        nb.text(data);
\t\t\t\t    });
\t\t\t\t    current.siblings().remove();
 \t\t\t\t\t current.fadeOut();
 \t\t\t\t}
 \t\t\t});
\t\t\t// \$(\"#sortable\").sortable().disableSelection();
 \t\t\t// \$(\"#sort tbody\").sortable({
 \t\t\t// \t\tconnectWith: \".connectedSortable\"
 \t\t\t// }).disableSelection();
    \t\t\t  // \$( \"#sortable\" ).disableSelection();
 \t\t\t

 \t\t});

 \t</script>
 ";
    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle:Mproject:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 100,  135 => 63,  132 => 62,  121 => 52,  110 => 47,  104 => 44,  99 => 43,  95 => 41,  92 => 40,  88 => 39,  73 => 26,  61 => 20,  53 => 17,  49 => 15,  45 => 14,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "MISAMprojectBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/*  */
/* 	    <h2> Assignations</h2>*/
/* 		<p><i>(Vous pouvez glisser un projets non assingné à un développeur)</i></p>*/
/* 		<div class="demi">*/
/* 			<h4>Projets non assignés</h4>*/
/* */
/* 			<table id="sort" class='table-bordered'>*/
/* 				<thead>*/
/* 			*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for project in projects_to_assign %}*/
/* 						<tr>*/
/* 						*/
/* 							<td  class="draggable" id="{{ project.id }}">{{ project.nom|upper }}</td>*/
/* */
/* 							<td>*/
/* 						<a href="{{ path('misa_project_view',{'id': project.id}) }}"><span class='btn-green'> Voir</span></a>*/
/* 						*/
/* 					</td>*/
/* 							*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* */
/* 				<tbody>*/
/* 		</table>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="demi">*/
/* 			<h4>Développeurs</h4>*/
/* 			<table id="sort2" >*/
/* 				<thead>*/
/* 				*/
/* 				</thead>*/
/* 				<tbody>*/
/* 				{% for developer in developers %}*/
/* 						*/
/* 					<tr class="droppable" id="{{ developer.id }}">*/
/* 							{# <td></td> #}*/
/* 							<td>{{ developer.nom|upper }}</td>*/
/* 							<td>({{ developer.assignations|length }})</td>*/
/* 						*/
/* 						<td>*/
/* 						<a href="{{ path('misa_developer_view',{'id': developer.id}) }}"><span class='btn-green'>Voir </span>*/
/* 					</td>*/
/* 					</tr>*/
/* 					*/
/* 				{% endfor %}*/
/* 				</tbody>*/
/* 		</table>*/
/* */
/* 		</div>*/
/*   </div>*/
/* */
/* */
/*  {% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/*  	<script type="text/javascript">*/
/* */
/*  		var fixHelper = function(e, ui) {*/
/* 				ui.children().each(function() {*/
/* 					$(this).width($(this).width());*/
/* 				});*/
/* 				return ui;*/
/* 		};*/
/*  		$(function(){*/
/*  			// $( "#tabs" ).tabs();*/
/*  			      */
/*  			$(".draggable").draggable({*/
/*  				revert: 'invalid',*/
/*  				cursor: 'move',*/
/*  				drag: function(){*/
/*  					$(this).siblings().hide();*/
/*  					$(this).css("background-color", "#4CAF50");*/
/*  					$(this).css("border-radius", "5px");*/
/*  					$(this).css("color", "white");*/
/*  				},*/
/*  				stop: function(){*/
/*  					$(this).siblings().show();*/
/*  					$(this).css("background-color", "#fff");*/
/*  					$(this).css("color", "black");*/
/*  				}*/
/*  			});*/
/* */
/*  			$('.droppable').droppable({*/
/*  				accept: '.draggable',*/
/*  				drop: function(event, ui){*/
/*  					var current = ui.draggable;*/
/*  					var resultat = $(this);*/
/*  					// alert(current.attr('id'));*/
/*  					// alert(resultat.attr('id'));*/
/*  					 var nb =resultat.children("td:eq(1)");*/
/*  					 // alert(parseInt(nb.text())+1);*/
/*  					 // var new_nb = parseInt(nb.text())+1;*/
/*  					$.post("{{ path('misa_mproject_assign') }}",*/
/* 				    {*/
/* 				        project_id: current.attr('id'),*/
/* 				        developer_id: resultat.attr('id')*/
/* 				    },*/
/* 				    function(data, status){*/
/* 				        // alert("Data: " + data + "\nStatus: " + status);*/
/* 				        nb.text(data);*/
/* 				    });*/
/* 				    current.siblings().remove();*/
/*  					 current.fadeOut();*/
/*  				}*/
/*  			});*/
/* 			// $("#sortable").sortable().disableSelection();*/
/*  			// $("#sort tbody").sortable({*/
/*  			// 		connectWith: ".connectedSortable"*/
/*  			// }).disableSelection();*/
/*     			  // $( "#sortable" ).disableSelection();*/
/*  			*/
/* */
/*  		});*/
/* */
/*  	</script>*/
/*  {% endblock %}*/
