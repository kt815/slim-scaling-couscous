<?php

/* post.title.html */
class __TwigTemplate_3a32ee5a5121067ee95711e7b8d9ceb9b9b4201f0f26c05c4303f7a641e13830 extends Twig_Template
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
<div class=\"row column text-center\">
<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</a></h1>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "post.title.html";
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
/* <div class="row column text-center">*/
/* <h1>{{post.title}}</a></h1>*/
/* </div>*/
/* </div>*/
/* */
