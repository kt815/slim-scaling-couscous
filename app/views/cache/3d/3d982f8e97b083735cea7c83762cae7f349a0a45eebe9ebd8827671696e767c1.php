<?php

/* admin/users/admin.users.new.html */
class __TwigTemplate_169b7b31c5c5ae37cee769fca9e64f5b3e7c545b5f51803f7ec1e113259df757 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-lg-5\">

    <form class=\"form-signin\" method=\"post\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/admin/users/new\">
        <h2 class=\"form-signin-heading\">Create new user</h2><br />

        ";
        // line 7
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 8
            echo "            <h3 class=\"text-center\"><span class=\"label label-danger\">
                  ";
            // line 9
            if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
                // line 10
                echo "                      Empty Username
                  ";
            } elseif ((            // line 11
(isset($context["error"]) ? $context["error"] : null) == 2)) {
                // line 12
                echo "                      Empty or Wrong Email
                  ";
            } elseif ((            // line 13
(isset($context["error"]) ? $context["error"] : null) == 3)) {
                // line 14
                echo "                      Empty Password
                  ";
            }
            // line 16
            echo "            </span></h3>
        ";
        }
        // line 18
        echo "
        <label for=\"username\" class=\"control-label\">Username</label>
        <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "username", array()), "html", null, true);
        echo "\" required><br />

        <label for=\"email\" class=\"control-label\">Email</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "email", array()), "html", null, true);
        echo "\" required><br />

        <label for=\"password\" class=\"control-label\">Password</label>
        <input type=\"text\" name=\"password\" class=\"form-control\" id=\"password\" required><br />

        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Create User</button>

  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/users/admin.users.new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  59 => 20,  55 => 18,  51 => 16,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col-lg-5">*/
/* */
/*     <form class="form-signin" method="post" action="{{ baseUrl() }}/admin/users/new">*/
/*         <h2 class="form-signin-heading">Create new user</h2><br />*/
/* */
/*         {% if error is not empty %}*/
/*             <h3 class="text-center"><span class="label label-danger">*/
/*                   {% if error == 1 %}*/
/*                       Empty Username*/
/*                   {% elseif error == 2 %}*/
/*                       Empty or Wrong Email*/
/*                   {% elseif error == 3 %}*/
/*                       Empty Password*/
/*                   {% endif %}*/
/*             </span></h3>*/
/*         {% endif %}*/
/* */
/*         <label for="username" class="control-label">Username</label>*/
/*         <input type="text" name="username" class="form-control" id="username" value="{{u.username}}" required><br />*/
/* */
/*         <label for="email" class="control-label">Email</label>*/
/*         <input type="email" name="email" class="form-control" id="email" value="{{u.email}}" required><br />*/
/* */
/*         <label for="password" class="control-label">Password</label>*/
/*         <input type="text" name="password" class="form-control" id="password" required><br />*/
/* */
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Create User</button>*/
/* */
/*   </form>*/
/* </div>*/
