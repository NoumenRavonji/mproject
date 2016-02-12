<?php

/* MISAMprojectBundle::layout.html.twig */
class __TwigTemplate_88dcd1b34ef754efc72dd56dcf80f51da608eacf67ed2f1bea2b0873463833b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_573c95e3861e805926daab28213deaae4e006b8584991d2f097bc4b59a1107f4 = $this->env->getExtension("native_profiler");
        $__internal_573c95e3861e805926daab28213deaae4e006b8584991d2f097bc4b59a1107f4->enter($__internal_573c95e3861e805926daab28213deaae4e006b8584991d2f097bc4b59a1107f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MISAMprojectBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-latest.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
 
</head>


<body>

    <header>

      <h2 style=\"width: 20%; display: inline-block\">";
        // line 27
        echo "MProject</h2>

      <span style=\"display: inline-block; position: relative; top: 20px; font-size:0.9em;\">
       <i>...Gérer vos projets informatiques</i>
      </span>


    </header>


    <nav>
      <ul>
          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("misa_project_homepage");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_project_homepage")) {
            echo "active";
        }
        echo "\">PROJETS</a></li>
          <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("misa_mproject");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_mproject")) {
            echo "active";
        }
        echo "\">ASSIGNATIONS</a></li>
          <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("misa_developer_homepage");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_developer_homepage")) {
            echo "active";
        }
        echo "\">DEVELOPPEURS</a></li>
          <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("misa_client_homepage");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_client_homepage")) {
            echo "active";
        }
        echo "\" >CLIENTS</a></li>
      </ul>
    </nav>


      <div id=\"content\">

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 51
                echo "                <div class=\"alert alert-success\">
                    ";
                // line 52
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "
      </div>


    


    <footer>

      <p> © Sitraka ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - MISA L3 </p>

    </footer>


  ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "  <script type=\"text/javascript\">
    \$(function(){
      \$(\"table\").tablesorter({debug: true});
    })
  </script>

</body>

</html>";
        
        $__internal_573c95e3861e805926daab28213deaae4e006b8584991d2f097bc4b59a1107f4->leave($__internal_573c95e3861e805926daab28213deaae4e006b8584991d2f097bc4b59a1107f4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e03c9f6b379b06ae5ea462d34f8a57b10780aca5d5c8c53243ad30de7542ab34 = $this->env->getExtension("native_profiler");
        $__internal_e03c9f6b379b06ae5ea462d34f8a57b10780aca5d5c8c53243ad30de7542ab34->enter($__internal_e03c9f6b379b06ae5ea462d34f8a57b10780aca5d5c8c53243ad30de7542ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MProject";
        
        $__internal_e03c9f6b379b06ae5ea462d34f8a57b10780aca5d5c8c53243ad30de7542ab34->leave($__internal_e03c9f6b379b06ae5ea462d34f8a57b10780aca5d5c8c53243ad30de7542ab34_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c93b313967ba9681d4e18453a11cdffcd9aa19620aec0d798e8159dc882ba109 = $this->env->getExtension("native_profiler");
        $__internal_c93b313967ba9681d4e18453a11cdffcd9aa19620aec0d798e8159dc882ba109->enter($__internal_c93b313967ba9681d4e18453a11cdffcd9aa19620aec0d798e8159dc882ba109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/stylesheets/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   

  ";
        
        $__internal_c93b313967ba9681d4e18453a11cdffcd9aa19620aec0d798e8159dc882ba109->leave($__internal_c93b313967ba9681d4e18453a11cdffcd9aa19620aec0d798e8159dc882ba109_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_424559914e766da1d2be8d39387b1269a8209d7b93760062f929e2923f126f1c = $this->env->getExtension("native_profiler");
        $__internal_424559914e766da1d2be8d39387b1269a8209d7b93760062f929e2923f126f1c->enter($__internal_424559914e766da1d2be8d39387b1269a8209d7b93760062f929e2923f126f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "

        ";
        
        $__internal_424559914e766da1d2be8d39387b1269a8209d7b93760062f929e2923f126f1c->leave($__internal_424559914e766da1d2be8d39387b1269a8209d7b93760062f929e2923f126f1c_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94d56cea960651a232c4e02910f78546a13d6ce50295e184b264418a519c0549 = $this->env->getExtension("native_profiler");
        $__internal_94d56cea960651a232c4e02910f78546a13d6ce50295e184b264418a519c0549->enter($__internal_94d56cea960651a232c4e02910f78546a13d6ce50295e184b264418a519c0549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "
  ";
        
        $__internal_94d56cea960651a232c4e02910f78546a13d6ce50295e184b264418a519c0549->leave($__internal_94d56cea960651a232c4e02910f78546a13d6ce50295e184b264418a519c0549_prof);

    }

    public function getTemplateName()
    {
        return "MISAMprojectBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 77,  234 => 76,  225 => 59,  219 => 58,  208 => 12,  204 => 11,  201 => 10,  195 => 9,  183 => 6,  168 => 79,  166 => 76,  158 => 71,  147 => 62,  145 => 58,  141 => 56,  135 => 55,  126 => 52,  123 => 51,  118 => 50,  114 => 49,  100 => 42,  92 => 41,  84 => 40,  76 => 39,  62 => 27,  50 => 18,  46 => 17,  41 => 16,  39 => 9,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>{% block title %}MProject{% endblock %}</title>*/
/* */
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/stylesheets/style.css') }}" type="text/css" />*/
/*    */
/* */
/*   {% endblock %}*/
/*   <script src="{{ asset('js/jquery-latest.js') }}"></script>*/
/*   <script src="{{ asset('js/jquery.tablesorter.js') }}"></script>*/
/*   <script src="{{ asset('js/jquery-ui.js') }}"></script>*/
/*  */
/* </head>*/
/* */
/* */
/* <body>*/
/* */
/*     <header>*/
/* */
/*       <h2 style="width: 20%; display: inline-block">{# <img width="80" src="{{ asset('images/project.png')}}"> #}MProject</h2>*/
/* */
/*       <span style="display: inline-block; position: relative; top: 20px; font-size:0.9em;">*/
/*        <i>...Gérer vos projets informatiques</i>*/
/*       </span>*/
/* */
/* */
/*     </header>*/
/* */
/* */
/*     <nav>*/
/*       <ul>*/
/*           <li><a href="{{ path('misa_project_homepage') }}" class="{% if app.request.attributes.get('_route') == 'misa_project_homepage' %}active{% endif %}">PROJETS</a></li>*/
/*           <li><a href="{{ path('misa_mproject') }}" class="{% if app.request.attributes.get('_route') == 'misa_mproject' %}active{% endif %}">ASSIGNATIONS</a></li>*/
/*           <li><a href="{{ path('misa_developer_homepage') }}" class="{% if app.request.attributes.get('_route') == 'misa_developer_homepage' %}active{% endif %}">DEVELOPPEURS</a></li>*/
/*           <li><a href="{{ path('misa_client_homepage') }}" class="{% if app.request.attributes.get('_route') == 'misa_client_homepage' %}active{% endif %}" >CLIENTS</a></li>*/
/*       </ul>*/
/*     </nav>*/
/* */
/* */
/*       <div id="content">*/
/* */
/*         {% for label, flashes in app.session.flashbag.all %}*/
/*             {% for flash in flashes %}*/
/*                 <div class="alert alert-success">*/
/*                     {{ flash }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*           {% endfor %}*/
/* */
/* */
/*         {% block content %}*/
/* */
/* */
/*         {% endblock %}*/
/* */
/*       </div>*/
/* */
/* */
/*     */
/* */
/* */
/*     <footer>*/
/* */
/*       <p> © Sitraka {{ 'now'|date('Y') }} - MISA L3 </p>*/
/* */
/*     </footer>*/
/* */
/* */
/*   {% block javascripts %}*/
/* */
/*   {% endblock %}*/
/*   <script type="text/javascript">*/
/*     $(function(){*/
/*       $("table").tablesorter({debug: true});*/
/*     })*/
/*   </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
