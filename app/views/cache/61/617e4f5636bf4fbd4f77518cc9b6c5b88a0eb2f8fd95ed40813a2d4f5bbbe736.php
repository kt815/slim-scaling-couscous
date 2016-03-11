<?php

/* post.html */
class __TwigTemplate_cb2a21f4a8310cf8c260f489571495a97d5f0a5b4a36ba55adf2aca41065a3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "post.html", 1);
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
        $this->loadTemplate("home.top_nav.html", "post.html", 5)->display($context);
        // line 6
        $this->loadTemplate("post.title.html", "post.html", 6)->display($context);
        // line 7
        echo "
<div class=\"row medium-8 large-7 columns\">
<div class=\"blog-post\">
<h3><small>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "html", null, true);
        echo "</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "text", array()), "html", null, true);
        echo "</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li>Written by &nbsp;</li>
<li><a href=\"#\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "html", null, true);
        echo " </a> </li>
<li>&nbsp;<small>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "html", null, true);
        echo "</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href=\"#comments\">Comments(<strong>2</strong>)</a></li>
</ul>
</div>
</div>
</div>

";
        // line 24
        $this->loadTemplate("post.comments.html", "post.html", 24)->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  69 => 24,  59 => 17,  55 => 16,  48 => 12,  43 => 10,  38 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'home.top_nav.html' %}*/
/* {% include 'post.title.html' %}*/
/* */
/* <div class="row medium-8 large-7 columns">*/
/* <div class="blog-post">*/
/* <h3><small>{{post.date}}</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>{{post.text}}</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li>Written by &nbsp;</li>*/
/* <li><a href="#"> {{post.author}} </a> </li>*/
/* <li>&nbsp;<small>{{post.date}}</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>*/
/* <li><a href="#comments">Comments(<strong>2</strong>)</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* {% include 'post.comments.html' %}*/
/* */
/* {% endblock %}*/
