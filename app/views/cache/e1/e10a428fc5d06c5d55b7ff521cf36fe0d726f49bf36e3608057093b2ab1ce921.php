<?php

/* admin/posts/admin.posts.new.html */
class __TwigTemplate_76f9b3a0d907ec82c7df4e7ca69579e654999d8111bd0c08509c2aa3b8b2772a extends Twig_Template
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
    <div class=\"col-lg-12\">
        <form role=\"form\" method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/admin/posts/new\">

            ";
        // line 5
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 6
            echo "                <h3 class=\"text-center\"><span class=\"label label-danger\">
                    ";
            // line 7
            if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
                // line 8
                echo "                      Empty title 
                    ";
            } elseif ((            // line 9
(isset($context["error"]) ? $context["error"] : null) == 2)) {
                // line 10
                echo "                        Empty textarea
                    ";
            }
            // line 12
            echo "                </span></h3>
            ";
        }
        // line 14
        echo "
            <div class=\"form-group\">
                <label>Title</label>
                <input class=\"form-control\" placeholder=\"Enter title\" name=\"title\">
            </div>

            <div class=\"form-group\" >
                <label>Enter Text</label>
                <textarea class=\"form-control\" rows=\"15\" name=\"text\"></textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Post Button</button>

</form>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/posts/admin.posts.new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  44 => 12,  40 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <form role="form" method="post" action="{{ baseUrl() }}/admin/posts/new">*/
/* */
/*             {% if error is not empty %}*/
/*                 <h3 class="text-center"><span class="label label-danger">*/
/*                     {% if error == 1 %}*/
/*                       Empty title */
/*                     {% elseif error == 2 %}*/
/*                         Empty textarea*/
/*                     {% endif %}*/
/*                 </span></h3>*/
/*             {% endif %}*/
/* */
/*             <div class="form-group">*/
/*                 <label>Title</label>*/
/*                 <input class="form-control" placeholder="Enter title" name="title">*/
/*             </div>*/
/* */
/*             <div class="form-group" >*/
/*                 <label>Enter Text</label>*/
/*                 <textarea class="form-control" rows="15" name="text"></textarea>*/
/*             </div>*/
/* */
/*             <button type="submit" class="btn btn-primary">Post Button</button>*/
/* */
/* </form>*/
/* </div>*/
