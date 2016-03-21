<?php

/* admin/admin.navigation.html */
class __TwigTemplate_4fbfcc6f4b3205bb264bc00d96797d8cafbb320a908a70d2d339ad1ce9f8cd09 extends Twig_Template
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
        echo "<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav side-nav\">
        <li class=\"active\">
            <a href=\"/admin\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
        </li>


        <li>
             <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#posts\"><i class=\"fa fa-fw fa-arrows-v\"></i> Blog Posts <i class=\"fa fa-fw fa-caret-down\"></i></a>
             <ul id=\"posts\" class=\"collapse\">
                <li >
                    <a href=\"/admin/posts\"><i class=\"fa fa-fw fa-table\"></i> Posts List</a>
                </li>

                <li>
                    <a href=\"/admin/posts/new\"><i class=\"fa fa-fw fa-table\"></i> Posts New</a>
                </li>
             </ul>
         </li>

        <li>
             <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#users\"><i class=\"fa fa-fw fa-arrows-v\"></i> Manage Users <i class=\"fa fa-fw fa-caret-down\"></i></a>
             <ul id=\"users\" class=\"collapse\">
                <li >
                    <a href=\"/admin/users\"><i class=\"fa fa-fw fa-table\"></i> Users List</a>
                </li>
                <li>
                    <a href=\"/admin/users/new\"><i class=\"fa fa-fw fa-table\"></i> Users New</a>
                </li>
             </ul>
         </li>

        <li>
             <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#jokes\"><i class=\"fa fa-fw fa-arrows-v\"></i> Manage Jokes <i class=\"fa fa-fw fa-caret-down\"></i></a>
             <ul id=\"jokes\" class=\"collapse\">
                <li >
                    <a href=\"/admin/jokes\"><i class=\"fa fa-fw fa-table\"></i> Jokes List</a>
                </li>
                <li>
                    <a href=\"/admin/jokes/new\"><i class=\"fa fa-fw fa-table\"></i> Jokes New</a>
                </li>
             </ul>
         </li>

        <li>
             <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#categories\"><i class=\"fa fa-fw fa-arrows-v\"></i> Manage Categories <i class=\"fa fa-fw fa-caret-down\"></i></a>
             <ul id=\"categories\" class=\"collapse\">
                <li >
                    <a href=\"/admin/categories\"><i class=\"fa fa-fw fa-table\"></i> Categories List</a>
                </li>
                <li>
                    <a href=\"/admin/categories/new\"><i class=\"fa fa-fw fa-table\"></i> Categories New</a>
                </li>
             </ul>
         </li>        


    </ul
</div>
<!-- /.navbar-collapse -->";
    }

    public function getTemplateName()
    {
        return "admin/admin.navigation.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/* <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*     <ul class="nav navbar-nav side-nav">*/
/*         <li class="active">*/
/*             <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>*/
/*         </li>*/
/* */
/* */
/*         <li>*/
/*              <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Blog Posts <i class="fa fa-fw fa-caret-down"></i></a>*/
/*              <ul id="posts" class="collapse">*/
/*                 <li >*/
/*                     <a href="/admin/posts"><i class="fa fa-fw fa-table"></i> Posts List</a>*/
/*                 </li>*/
/* */
/*                 <li>*/
/*                     <a href="/admin/posts/new"><i class="fa fa-fw fa-table"></i> Posts New</a>*/
/*                 </li>*/
/*              </ul>*/
/*          </li>*/
/* */
/*         <li>*/
/*              <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Manage Users <i class="fa fa-fw fa-caret-down"></i></a>*/
/*              <ul id="users" class="collapse">*/
/*                 <li >*/
/*                     <a href="/admin/users"><i class="fa fa-fw fa-table"></i> Users List</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin/users/new"><i class="fa fa-fw fa-table"></i> Users New</a>*/
/*                 </li>*/
/*              </ul>*/
/*          </li>*/
/* */
/*         <li>*/
/*              <a href="javascript:;" data-toggle="collapse" data-target="#jokes"><i class="fa fa-fw fa-arrows-v"></i> Manage Jokes <i class="fa fa-fw fa-caret-down"></i></a>*/
/*              <ul id="jokes" class="collapse">*/
/*                 <li >*/
/*                     <a href="/admin/jokes"><i class="fa fa-fw fa-table"></i> Jokes List</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin/jokes/new"><i class="fa fa-fw fa-table"></i> Jokes New</a>*/
/*                 </li>*/
/*              </ul>*/
/*          </li>*/
/* */
/*         <li>*/
/*              <a href="javascript:;" data-toggle="collapse" data-target="#categories"><i class="fa fa-fw fa-arrows-v"></i> Manage Categories <i class="fa fa-fw fa-caret-down"></i></a>*/
/*              <ul id="categories" class="collapse">*/
/*                 <li >*/
/*                     <a href="/admin/categories"><i class="fa fa-fw fa-table"></i> Categories List</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin/categories/new"><i class="fa fa-fw fa-table"></i> Categories New</a>*/
/*                 </li>*/
/*              </ul>*/
/*          </li>        */
/* */
/* */
/*     </ul*/
/* </div>*/
/* <!-- /.navbar-collapse -->*/
