<?php

/* admin/users/admin.users.edit.html */
class __TwigTemplate_ed18a755ca6c89e2afb8a93a10b02a621a691113c48e6361651e7a8e96188674 extends Twig_Template
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
    <div class=\"col-lg-4\">

        <form class=\"form-signin\" method=\"post\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/admin/users/edit/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">

            ";
        // line 6
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 7
            echo "                <h3 class=\"text-center\"><span class=\"label label-danger\">
                    ";
            // line 8
            if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
                // line 9
                echo "                      Empty Username
                    ";
            } elseif ((            // line 10
(isset($context["error"]) ? $context["error"] : null) == 2)) {
                // line 11
                echo "                        Wrong Email Format or Empty
                    ";
            }
            // line 13
            echo "                </span></h3>
            ";
        }
        // line 15
        echo "

            ";
        // line 17
        if ( !twig_test_empty((isset($context["success"]) ? $context["success"] : null))) {
            // line 18
            echo "                <h3 class=\"text-center\"><span class=\"label label-success\">
                    ";
            // line 19
            if (((isset($context["success"]) ? $context["success"] : null) == 1)) {
                // line 20
                echo "                      User has successfully updated!
                    ";
            }
            // line 22
            echo "                </span></h3>
            ";
        }
        // line 24
        echo "

            <h2 class=\"form-signin-heading\">Edit <strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</strong></h2><br />

            <label for=\"username\" class=\"control-label\">Username</label>
            <input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\" required><br />

            <label for=\"email\" class=\"control-label\">Email</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" required><br />

            <label for=\"password\" class=\"control-label\">Password</label>
            <input type=\"text\" name=\"password\" class=\"form-control\" id=\"password\" placeholder=\"New Password\"><br />

            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Update User</button>
        </form>
";
    }

    public function getTemplateName()
    {
        return "admin/users/admin.users.edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  80 => 29,  74 => 26,  70 => 24,  66 => 22,  62 => 20,  60 => 19,  57 => 18,  55 => 17,  51 => 15,  47 => 13,  43 => 11,  41 => 10,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-4">*/
/* */
/*         <form class="form-signin" method="post" action="{{ baseUrl() }}/admin/users/edit/{{user.id}}">*/
/* */
/*             {% if error is not empty %}*/
/*                 <h3 class="text-center"><span class="label label-danger">*/
/*                     {% if error == 1 %}*/
/*                       Empty Username*/
/*                     {% elseif error == 2 %}*/
/*                         Wrong Email Format or Empty*/
/*                     {% endif %}*/
/*                 </span></h3>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if success is not empty %}*/
/*                 <h3 class="text-center"><span class="label label-success">*/
/*                     {% if success == 1 %}*/
/*                       User has successfully updated!*/
/*                     {% endif %}*/
/*                 </span></h3>*/
/*             {% endif %}*/
/* */
/* */
/*             <h2 class="form-signin-heading">Edit <strong>{{user.username}}</strong></h2><br />*/
/* */
/*             <label for="username" class="control-label">Username</label>*/
/*             <input type="text" name="username" class="form-control" id="username" value="{{user.username}}" required><br />*/
/* */
/*             <label for="email" class="control-label">Email</label>*/
/*             <input type="email" name="email" class="form-control" id="email" value="{{user.email}}" required><br />*/
/* */
/*             <label for="password" class="control-label">Password</label>*/
/*             <input type="text" name="password" class="form-control" id="password" placeholder="New Password"><br />*/
/* */
/*             <button class="btn btn-lg btn-primary btn-block" type="submit">Update User</button>*/
/*         </form>*/
/* */
