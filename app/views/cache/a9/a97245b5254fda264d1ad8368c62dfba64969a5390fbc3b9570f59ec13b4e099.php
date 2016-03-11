<?php

/* post.404.html */
class __TwigTemplate_ff618470f801c8a7c1819229127a555a479a01110d694c99dfcd69bcaf89d7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "post.404.html", 1);
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
        echo "<h1 class=\"text-center\">
    404 Error
</h1>
<div class=\"container\">

<h3>Post not found</h3>


</div>
";
    }

    public function getTemplateName()
    {
        return "post.404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* <h1 class="text-center">*/
/*     404 Error*/
/* </h1>*/
/* <div class="container">*/
/* */
/* <h3>Post not found</h3>*/
/* */
/* */
/* </div>*/
/* {% endblock %}*/
/* */
