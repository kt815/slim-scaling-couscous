<?php

/* 404.html */
class __TwigTemplate_296febd6c6c4eb9330ea7d4ee794d2fc697cb4127519b4a448816082d806e704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "404.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("home/home.top_nav.html", "404.html", 5)->display($context);
        // line 6
        echo "
<br><br><br>

<h1 class=\"text-center\">404 Error</h1>
<h3 class=\"text-center\">Page not found</h3>

<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'home/home.top_nav.html'  %}*/
/* */
/* <br><br><br>*/
/* */
/* <h1 class="text-center">404 Error</h1>*/
/* <h3 class="text-center">Page not found</h3>*/
/* */
/* <br><br><br>*/
/* */
/* {% endblock %}*/
/* */
