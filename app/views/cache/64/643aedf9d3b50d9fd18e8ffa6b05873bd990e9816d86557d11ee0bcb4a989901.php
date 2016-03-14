<?php

/* admin.base.html */
class __TwigTemplate_8ea31a35e47448101978fe7fca43b842b5fef741d1d9278a707fe483a28a6fab extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/css/admin/bootstrap.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/css/admin/sb-admin.css\" rel=\"stylesheet\">
    <!-- Custom Fonts -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/css/admin/font-awesome.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
 
        ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "

    <!-- jQuery -->
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/js/admin/jquery.js\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/public/js/admin/bootstrap.js\"></script>

</body></html>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "admin.base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  81 => 31,  73 => 38,  68 => 36,  63 => 33,  61 => 31,  45 => 18,  40 => 16,  35 => 14,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en"><head>*/
/* <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>SB Admin - Bootstrap Admin Template</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ baseUrl() }}/public/css/admin/bootstrap.css" rel="stylesheet">*/
/*     <!-- Custom CSS -->*/
/*     <link href="{{ baseUrl() }}/public/css/admin/sb-admin.css" rel="stylesheet">*/
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ baseUrl() }}/public/css/admin/font-awesome.css" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/*  */
/*         {% block content %}*/
/*         {% endblock %}*/
/* */
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ baseUrl() }}/public/js/admin/jquery.js"></script>*/
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ baseUrl() }}/public/js/admin/bootstrap.js"></script>*/
/* */
/* </body></html>*/
/* */
