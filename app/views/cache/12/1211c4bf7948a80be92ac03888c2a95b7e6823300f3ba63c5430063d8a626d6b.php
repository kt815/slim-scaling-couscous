<?php

/* home.top_nav.html */
class __TwigTemplate_d2f7716327faa830cea8f723d3d7a7a578b8b13e5fa2bd94c199ebf6452366e7 extends Twig_Template
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
        echo "<div class=\"top-bar\">
\t<div class=\"top-bar-left\">
\t\t<ul class=\"menu\">
\t\t\t<li class=\"menu-text\"><a href=\"/\">Yeti Agency</a></li>
\t\t</ul>
\t</div>

\t<div class=\"top-bar-right\">
\t\t<ul class=\"menu\">
\t\t\t<li><a href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "one", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "two", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "three", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "four", array()), "html", null, true);
        echo "</a></li>

\t\t";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "username", array()))) {
            // line 16
            echo "\t\t\t<li><a href=\"/logout\"><i class=\"fa fa-sign-in\"></i> Logout (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "username", array()), "html", null, true);
            echo ")</a></li>
\t\t";
        } else {
            // line 18
            echo "\t\t\t<li><a href=\"/admin/login\"><i class=\"fa fa-sign-in\"></i> Login </a></li>
\t\t";
        }
        // line 20
        echo "\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "home.top_nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  55 => 18,  49 => 16,  47 => 15,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div class="top-bar">*/
/* 	<div class="top-bar-left">*/
/* 		<ul class="menu">*/
/* 			<li class="menu-text"><a href="/">Yeti Agency</a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<div class="top-bar-right">*/
/* 		<ul class="menu">*/
/* 			<li><a href="#">{{ menu.one }}</a></li>*/
/* 			<li><a href="#">{{ menu.two }}</a></li>*/
/* 			<li><a href="#">{{ menu.three }}</a></li>*/
/* 			<li><a href="#">{{ menu.four }}</a></li>*/
/* */
/* 		{%  if menu.username is not empty %}*/
/* 			<li><a href="/logout"><i class="fa fa-sign-in"></i> Logout ({{ menu.username }})</a></li>*/
/* 		{%  else %}*/
/* 			<li><a href="/admin/login"><i class="fa fa-sign-in"></i> Login </a></li>*/
/* 		{% endif  %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
