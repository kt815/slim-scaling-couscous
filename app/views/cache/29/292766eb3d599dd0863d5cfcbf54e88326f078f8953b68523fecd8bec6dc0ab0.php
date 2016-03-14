<?php

/* home/posts/post.title.html */
class __TwigTemplate_273a5e581f8a09c08b387b07f7f9ec54f6c25a1e28a3fea168590a480464da89 extends Twig_Template
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
        echo "<div class=\"callout large primary\">
\t<div class=\"row column text-center\">
\t\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</a></h1>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home/posts/post.title.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div class="callout large primary">*/
/* 	<div class="row column text-center">*/
/* 		<h1>{{post.title}}</a></h1>*/
/* 	</div>*/
/* </div>*/
/* */
