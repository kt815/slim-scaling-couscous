<?php

/* post.comments.sended.html */
class __TwigTemplate_801ef8bbae62c0639d9130d6ece1af5e8f1c4fcd0f5cf5114a92abb3578a4881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "post.comments.sended.html", 1);
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
        echo "    <h1 class=\"text-center\">
        <span class=\"label label-success\">Message has been sent</span>
    </h1>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            window.setTimeout(function () {
                location.href = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["redirect"]) ? $context["redirect"] : null), "html", null, true);
        echo "\";
            }, 3000)

\t
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "post.comments.sended.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/*     <h1 class="text-center">*/
/*         <span class="label label-success">Message has been sent</span>*/
/*     </h1>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/* */
/*             window.setTimeout(function () {*/
/*                 location.href = "{{ redirect }}";*/
/*             }, 3000)*/
/* */
/* 	*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/