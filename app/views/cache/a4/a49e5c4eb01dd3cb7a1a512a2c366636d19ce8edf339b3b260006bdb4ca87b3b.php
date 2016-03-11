<?php

/* home.lists_post.html */
class __TwigTemplate_1bcd9fcdf501ee19041a5935bbc70a675b0bb59bf9647d591a99b438f003e205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "
<div class=\"blog-post\">
<h3><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a> <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date", array()), "html", null, true);
            echo "</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "text", array()), "html", null, true);
            echo "</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li><a href=\"#\">Author: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</a></li>
<li><a href=\"#\">Comments: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "count", array()), "html", null, true);
            echo "</a></li>
<li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">Read more: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "count", array()), "html", null, true);
            echo "</a></li>
</ul>
</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "home.lists_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  42 => 9,  36 => 6,  27 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for post in posts %}*/
/* */
/* <div class="blog-post">*/
/* <h3><a href="{{post.url}}">{{post.title}}</a> <small>{{post.date}}</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>{{post.text}}</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li><a href="#">Author: {{post.author}}</a></li>*/
/* <li><a href="#">Comments: {{post.count}}</a></li>*/
/* <li><a href="{{post.url}}">Read more: {{post.count}}</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* */
/* {% endfor %}*/
/* */
