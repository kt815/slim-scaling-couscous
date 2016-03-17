<?php

/* home/home.top_nav.html */
class __TwigTemplate_b0438c2f487698e1aaa7064e485e7c248dcacde3a8cd6bdb417139c6943806ce extends Twig_Template
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
\t\t\t<li class=\"menu-text\">Yeti Agency</li>
\t\t\t<li role=\"menuitem\"><a href=\"/\"><i class=\"fa fa-home\"></i> Home </a></li>
\t\t\t<li role=\"menuitem\"><a href=\"#\">First</a></li>
\t\t\t<li role=\"menuitem\"><a href=\"#\">Second</a></li>
\t\t</ul>
\t</div>

\t<div class=\"top-bar-right\">
\t\t<ul class=\"menu\">
\t\t\t<li><a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "one", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "two", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "three", array()), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "four", array()), "html", null, true);
        echo "</a></li>

\t\t";
        // line 18
        if ( !twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "username", array()))) {
            // line 19
            echo "\t\t\t<li><a href=\"/admin\" class=\"button\">Admin</a></li>
\t\t\t<li><a href=\"/logout\"><i class=\"fa fa-sign-in\"></i> Logout (";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "username", array()), "html", null, true);
            echo ")</a></li>
\t\t";
        } else {
            // line 22
            echo "\t\t\t<li><a href=\"/admin/login\" class=\"button\"><i class=\"fa fa-sign-in\"></i> Login </a></li>
\t\t";
        }
        // line 24
        echo "\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "home/home.top_nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  60 => 22,  55 => 20,  52 => 19,  50 => 18,  45 => 16,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div class="top-bar">*/
/* 	<div class="top-bar-left">*/
/* 		<ul class="menu">*/
/* 			<li class="menu-text">Yeti Agency</li>*/
/* 			<li role="menuitem"><a href="/"><i class="fa fa-home"></i> Home </a></li>*/
/* 			<li role="menuitem"><a href="#">First</a></li>*/
/* 			<li role="menuitem"><a href="#">Second</a></li>*/
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
/* 			<li><a href="/admin" class="button">Admin</a></li>*/
/* 			<li><a href="/logout"><i class="fa fa-sign-in"></i> Logout ({{ menu.username }})</a></li>*/
/* 		{%  else %}*/
/* 			<li><a href="/admin/login" class="button"><i class="fa fa-sign-in"></i> Login </a></li>*/
/* 		{% endif  %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
