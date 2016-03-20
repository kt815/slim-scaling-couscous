<?php

/* admin/admin.breadcrumb.html */
class __TwigTemplate_4e4380d48ac1b77bdf8c64dc89115b6cfc1f0e6d0a0d87c21366ad64e556702b extends Twig_Template
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
        echo "<!-- Page Heading -->
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
        return "admin/admin.breadcrumb.html";
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
/* <!-- Page Heading -->*/
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             {{  action }}*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="fa fa-dashboard"></i>  <a href="/admin">Dashboard</a>*/
/*             </li>*/
/*             <li class="active">*/
/*                 <i class="fa fa-table"></i> {{ action }}*/
/*             </li>*/
/*         </ol>*/
/*     </div>*/
/* </div>*/
/* <!-- /.row -->*/
