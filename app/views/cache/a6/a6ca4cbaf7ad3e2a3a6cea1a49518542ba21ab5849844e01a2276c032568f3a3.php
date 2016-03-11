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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("home.top_nav.html", "home.html", 6)->display($context);
        // line 7
        $this->loadTemplate("home.title.html", "home.html", 7)->display($context);
        // line 8
        echo "

<div class=\"row\" id=\"content\">
<div class=\"medium-8 columns\">

";
        // line 13
        $this->loadTemplate("home.lists_post.html", "home.html", 13)->display($context);
        // line 14
        echo "
</div>
<div class=\"medium-3 columns\" data-sticky-container>
<div class=\"sticky\" data-sticky data-anchor=\"content\">
<h4>Categories</h4>
<ul>
<li><a href=\"#\">Skyler</a></li>
<li><a href=\"#\">Jesse</a></li>
<li><a href=\"#\">Mike</a></li>
<li><a href=\"#\">Holly</a></li>
</ul>
<h4>Authors</h4>
<ul>
<li><a href=\"#\">Skyler</a></li>
<li><a href=\"#\">Jesse</a></li>
<li><a href=\"#\">Mike</a></li>
<li><a href=\"#\">Holly</a></li>
</ul>
</div>
</div>
</div>

";
        // line 36
        $this->loadTemplate("home.paginator.html", "home.html", 36)->display($context);
        // line 37
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
        return array (  73 => 37,  71 => 36,  47 => 14,  45 => 13,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {% include 'home.top_nav.html' %}*/
/* {% include 'home.title.html' %}*/
/* */
/* */
/* <div class="row" id="content">*/
/* <div class="medium-8 columns">*/
/* */
/* {% include 'home.lists_post.html' %}*/
/* */
/* </div>*/
/* <div class="medium-3 columns" data-sticky-container>*/
/* <div class="sticky" data-sticky data-anchor="content">*/
/* <h4>Categories</h4>*/
/* <ul>*/
/* <li><a href="#">Skyler</a></li>*/
/* <li><a href="#">Jesse</a></li>*/
/* <li><a href="#">Mike</a></li>*/
/* <li><a href="#">Holly</a></li>*/
/* </ul>*/
/* <h4>Authors</h4>*/
/* <ul>*/
/* <li><a href="#">Skyler</a></li>*/
/* <li><a href="#">Jesse</a></li>*/
/* <li><a href="#">Mike</a></li>*/
/* <li><a href="#">Holly</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* {% include 'home.paginator.html' %}*/
/* */
/* {% endblock %}*/
