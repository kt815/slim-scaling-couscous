<?php

/* base.html */
class __TwigTemplate_6d31282d71341020dab9e1b98ec34983b2a8a6a7c65acc431737afe037d08476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
<meta charset=\"utf-8\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
<title>
";
        // line 7
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 8
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " | Blog
";
        } else {
            // line 9
            echo "  
  Blog on Foundation | Welcome
";
        }
        // line 12
        echo "</title>
<link rel=\"stylesheet\" href=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
</head>
<body>
 
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "

\t";
        // line 24
        $this->loadTemplate("footer.html", "base.html", 24)->display($context);
        // line 25
        echo "
<script src=\"http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js\"></script>
<script>
      \$(document).foundation();
    </script>
</body>
</html>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  73 => 20,  62 => 25,  60 => 24,  56 => 22,  54 => 20,  45 => 14,  41 => 12,  36 => 9,  30 => 8,  28 => 7,  20 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/* <meta charset="utf-8"/>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* <title>*/
/* {% if title %}*/
/*   {{ title  }} | Blog*/
/* {% else %}  */
/*   Blog on Foundation | Welcome*/
/* {% endif %}*/
/* </title>*/
/* <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">*/
/* <link href="{{ baseUrl() }}/public/css/style.css" rel="stylesheet" type="text/css">*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/* <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* </head>*/
/* <body>*/
/*  */
/*         {% block content %}*/
/*         {% endblock %}*/
/* */
/* */
/* 	{% include 'footer.html' %}*/
/* */
/* <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>*/
/* <script>*/
/*       $(document).foundation();*/
/*     </script>*/
/* </body>*/
/* </html>*/
/* */
