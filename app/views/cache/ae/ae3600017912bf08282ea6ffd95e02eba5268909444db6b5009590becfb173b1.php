<?php

/* admin.navigation.html */
class __TwigTemplate_3e102823290f8f49cbb7cc24854f22e3d80651c963314be281deef6ee44c43a0 extends Twig_Template
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
        echo "            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"/admin\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>

                    <li >
                        <a href=\"/admin/posts\"><i class=\"fa fa-fw fa-table\"></i> Posts List</a>
                    </li>

                    <li>
                        <a href=\"/admin/posts/new\"><i class=\"fa fa-fw fa-table\"></i> Posts New</a>
                    </li>
                    <li >
                        <a href=\"/admin/users\"><i class=\"fa fa-fw fa-table\"></i> Users List</a>
                    </li>

                    <li>
                        <a href=\"/admin/users/new\"><i class=\"fa fa-fw fa-table\"></i> Users New</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->";
    }

    public function getTemplateName()
    {
        return "admin.navigation.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                     <li class="active">*/
/*                         <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>*/
/*                     </li>*/
/* */
/*                     <li >*/
/*                         <a href="/admin/posts"><i class="fa fa-fw fa-table"></i> Posts List</a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="/admin/posts/new"><i class="fa fa-fw fa-table"></i> Posts New</a>*/
/*                     </li>*/
/*                     <li >*/
/*                         <a href="/admin/users"><i class="fa fa-fw fa-table"></i> Users List</a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="/admin/users/new"><i class="fa fa-fw fa-table"></i> Users New</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
