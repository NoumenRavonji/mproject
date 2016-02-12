<?php

/* MISAMprojectBundle::layout.html.twig */
class __TwigTemplate_9de1e3772a0d8d49bc00ce3dc161d1010eb902ccac2eee1cfc02d1bab1ce4c3a extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_project_homepage")) {
            echo "active";
        }
        echo "\">PROJETS</a></li>
          <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("misa_mproject");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_mproject")) {
            echo "active";
        }
        echo "\">ASSIGNATIONS</a></li>
          <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("misa_developer_homepage");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_developer_homepage")) {
            echo "active";
        }
        echo "\">DEVELOPPEURS</a></li>
          <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("misa_client_homepage");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "misa_client_homepage")) {
            echo "active";
        }
        echo "\" >CLIENTS</a></li>
      </ul>
    </nav>


      <div id=\"content\">

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "MProject";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "

        ";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "
  ";
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
        return array (  213 => 77,  210 => 76,  204 => 59,  201 => 58,  193 => 12,  189 => 11,  186 => 10,  183 => 9,  177 => 6,  165 => 79,  163 => 76,  155 => 71,  144 => 62,  142 => 58,  138 => 56,  132 => 55,  123 => 52,  120 => 51,  115 => 50,  111 => 49,  97 => 42,  89 => 41,  81 => 40,  73 => 39,  59 => 27,  47 => 18,  43 => 17,  38 => 16,  36 => 9,  30 => 6,  23 => 1,);
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
