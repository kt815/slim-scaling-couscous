<?php

/* admin.breadcrumb.html */
class __TwigTemplate_c8f032be1941678253fba46b92a75c00d6f4c54fbd1d6ebe6c8ab1cb6cc10061 extends Twig_Template
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
        echo "                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"/admin\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "admin.breadcrumb.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  25 => 5,  19 => 1,);
    }
}
/*                 <!-- Page Heading -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="page-header">*/
/*                             {{  action }}*/
/*                         </h1>*/
/*                         <ol class="breadcrumb">*/
/*                             <li>*/
/*                                 <i class="fa fa-dashboard"></i>  <a href="/admin">Dashboard</a>*/
/*                             </li>*/
/*                             <li class="active">*/
/*                                 <i class="fa fa-table"></i> {{ action }}*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
