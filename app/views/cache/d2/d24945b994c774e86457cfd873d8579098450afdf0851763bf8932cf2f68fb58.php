<?php

/* home/posts/posts.post.html */
class __TwigTemplate_c4c11f6ec06972cd88a13c4538cde9486cce096af29f3a31ce5903bc452cf7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "home/posts/posts.post.html", 1);
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
        $this->loadTemplate("home/home.top_nav.html", "home/posts/posts.post.html", 5)->display($context);
        // line 6
        $this->loadTemplate("home/posts/post.title.html", "home/posts/posts.post.html", 6)->display($context);
        // line 7
        echo "
<div class=\"row medium-8 large-7 columns\">
\t<div class=\"blog-post\">
\t\t<h3><small>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "html", null, true);
        echo "</small></h3>
\t\t<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "text", array()), "html", null, true);
        echo "</p>
\t\t<div class=\"callout\">
\t\t<ul class=\"menu simple\">
\t\t\t<li>Written by &nbsp;</li>
\t\t\t<li><a href=\"#\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "html", null, true);
        echo " </a> </li>
\t\t\t<li>&nbsp;<small>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "html", null, true);
        echo "</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
\t\t\t<li><a href=\"#comments\">Comments(<strong>2</strong>)</a></li>
\t\t</ul>
\t\t</div>
\t</div>
</div>

";
        // line 24
        $this->loadTemplate("home/home.comments.html", "home/posts/posts.post.html", 24)->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/posts/posts.post.html";
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
/* {% include 'home/home.top_nav.html' %}*/
/* {% include 'home/posts/post.title.html' %}*/
/* */
/* <div class="row medium-8 large-7 columns">*/
/* 	<div class="blog-post">*/
/* 		<h3><small>{{post.date}}</small></h3>*/
/* 		<img class="thumbnail" src="http://placehold.it/850x350">*/
/* 		<p>{{post.text}}</p>*/
/* 		<div class="callout">*/
/* 		<ul class="menu simple">*/
/* 			<li>Written by &nbsp;</li>*/
/* 			<li><a href="#"> {{post.author}} </a> </li>*/
/* 			<li>&nbsp;<small>{{post.date}}</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>*/
/* 			<li><a href="#comments">Comments(<strong>2</strong>)</a></li>*/
/* 		</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'home/home.comments.html' %}*/
/* */
/* {% endblock %}*/
