<?php

/* admin/login/admin.login.html */
class __TwigTemplate_5eb035d8969dfb821556f32ec9a9992be5ca5b8692c43353a8948dcb056a4064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "admin/login/admin.login.html", 1);
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
        $this->loadTemplate("home/home.top_nav.html", "admin/login/admin.login.html", 5)->display($context);
        // line 6
        echo "
<br><br><br>

<div class=\"row\">

  <div class=\"medium-6 medium-centered large-4 large-centered columns\">
    <form  method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/admin/login\">
      <div class=\"row column log-in-form\">
        <h4 class=\"text-center\">Log in </h4>
        <label>Email
          <input type=\"text\" placeholder=\"user@domain.com\" name=\"email\">
        </label>
        <label>Password
          <input type=\"text\" placeholder=\"Password\" name=\"password\">
        </label>
        <input id=\"show-password\" type=\"checkbox\"><label for=\"show-password\">Show password</label>
        <p>
        <button class=\"button expanded\" type=\"submit\">Log In</button>
        </p>
        <p class=\"text-center\"><a href=\"#\">Forgot your password?</a></p>   
      </div>
    </form>
  </div>

</div>

<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "admin/login/admin.login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'home/home.top_nav.html' %}*/
/* */
/* <br><br><br>*/
/* */
/* <div class="row">*/
/* */
/*   <div class="medium-6 medium-centered large-4 large-centered columns">*/
/*     <form  method="post" action="{{ baseUrl() }}/admin/login">*/
/*       <div class="row column log-in-form">*/
/*         <h4 class="text-center">Log in </h4>*/
/*         <label>Email*/
/*           <input type="text" placeholder="user@domain.com" name="email">*/
/*         </label>*/
/*         <label>Password*/
/*           <input type="text" placeholder="Password" name="password">*/
/*         </label>*/
/*         <input id="show-password" type="checkbox"><label for="show-password">Show password</label>*/
/*         <p>*/
/*         <button class="button expanded" type="submit">Log In</button>*/
/*         </p>*/
/*         <p class="text-center"><a href="#">Forgot your password?</a></p>   */
/*       </div>*/
/*     </form>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* <br><br><br>*/
/* */
/* {% endblock %}*/
