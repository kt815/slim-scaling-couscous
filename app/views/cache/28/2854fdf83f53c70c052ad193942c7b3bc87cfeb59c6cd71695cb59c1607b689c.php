<?php

/* index.jade */
class __TwigTemplate_8f40bc5f32e239b63f1cc57d01e31db4d96b91b61a81ce873ed7c2211c879859 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["jade"]) ? $context["jade"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.jade";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ jade  }}*/
