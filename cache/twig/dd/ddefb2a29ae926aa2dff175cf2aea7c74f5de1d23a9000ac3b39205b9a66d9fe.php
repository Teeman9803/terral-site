<?php

/* partials/base.html.twig */
class __TwigTemplate_7a0459450a4ded7f65d9fd5f8e431d293b60ffcc70e217aaa661567bb95c6d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
         ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        <script src=\"";
        // line 20
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://js/modernizr.js");
        echo "\"></script>
        ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/default.css"), "method");
        // line 14
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layout.css"), "method");
        // line 15
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        echo "                
                ";
        // line 16
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/media-queries.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/magnific-popup.css"), "method");
        // line 18
        echo "        ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "        ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "        ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 35
        echo "            <script>window.jQuery || document.write('<script src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://js/jquery-1.10.2.min.js");
        echo "\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"";
        // line 36
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>
            ";
        // line 37
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 38
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 39
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 40
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/magnific-popup.js"), "method");
        // line 41
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/init.js"), "method");
        // line 42
        echo "            ";
        $this->loadTemplate("partials/twFetcher.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 43,  182 => 42,  179 => 41,  176 => 40,  173 => 39,  170 => 38,  168 => 37,  164 => 36,  159 => 35,  156 => 34,  153 => 33,  149 => 32,  146 => 31,  143 => 30,  138 => 28,  134 => 29,  131 => 28,  128 => 27,  124 => 26,  121 => 25,  118 => 24,  114 => 18,  111 => 17,  109 => 16,  104 => 15,  101 => 14,  98 => 13,  95 => 12,  89 => 20,  84 => 19,  82 => 12,  78 => 11,  75 => 10,  73 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 44,  47 => 33,  44 => 30,  41 => 27,  39 => 24,  35 => 22,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}" />*/
/*          {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://css/default.css') %}*/
/*                 {% do assets.addCss('theme://css/layout.css') %}*/
/*                 {% do assets.addCss('theme://css/custom.css') %}                */
/*                 {% do assets.addCss('theme://css/media-queries.css') %}*/
/*                 {% do assets.addCss('theme://css/magnific-popup.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/*         <script src="{{ url('theme://js/modernizr.js') }}"></script>*/
/*         {% endblock head%}*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*              {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/*         {% block footer %}*/
/*              {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             <script>window.jQuery || document.write('<script src="{{ url('theme://js/jquery-1.10.2.min.js') }}"><\/script>')</script>*/
/*             <script type="text/javascript" src="{{ url('theme://js/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*             {% do assets.addJs('theme://js/jquery.flexslider.js') %}*/
/*             {% do assets.addJs('theme://js/waypoints.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.fittext.js') %}*/
/*             {% do assets.addJs('theme://js/magnific-popup.js') %}*/
/*             {% do assets.addJs('theme://js/init.js') %}*/
/*             {% include 'partials/twFetcher.html.twig' %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/*     </body>*/
/* </html>*/
/* */
