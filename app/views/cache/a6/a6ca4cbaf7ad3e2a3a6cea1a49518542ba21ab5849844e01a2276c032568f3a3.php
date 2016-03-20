<?php

/* home.html */
class __TwigTemplate_7aa95e6e1f67d56171447a37ddbb0dc2ad1c1de00ca13e5e99f7d5b58591cda5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "home.html", 1);
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
        $this->loadTemplate("home/home.top_nav.html", "home.html", 5)->display($context);
        // line 6
        $this->loadTemplate("home/home.title.html", "home.html", 6)->display($context);
        // line 7
        echo "
<div class=\"row\" id=\"content\">
\t<div class=\"medium-8 columns\">

\t\t\t";
        // line 11
        $this->loadTemplate("home/posts/home.lists_post.html", "home.html", 11)->display($context);
        // line 12
        echo "
\t</div>

\t<div class=\"medium-3 columns\" data-sticky-container>
\t\t<div class=\"sticky\" data-sticky data-anchor=\"content\">

\t\t";
        // line 18
        $this->loadTemplate("home/home.right_side.html", "home.html", 18)->display($context);
        // line 19
        echo "
\t\t</div>
\t</div>
</div>

";
        // line 24
        $this->loadTemplate("home/home.paginator.html", "home.html", 24)->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  63 => 24,  56 => 19,  54 => 18,  46 => 12,  44 => 11,  38 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'home/home.top_nav.html' %}*/
/* {% include 'home/home.title.html' %}*/
/* */
/* <div class="row" id="content">*/
/* 	<div class="medium-8 columns">*/
/* */
/* 			{% include 'home/posts/home.lists_post.html' %}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="medium-3 columns" data-sticky-container>*/
/* 		<div class="sticky" data-sticky data-anchor="content">*/
/* */
/* 		{% include 'home/home.right_side.html' %}*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'home/home.paginator.html' %}*/
/* */
/* {% endblock %}*/
