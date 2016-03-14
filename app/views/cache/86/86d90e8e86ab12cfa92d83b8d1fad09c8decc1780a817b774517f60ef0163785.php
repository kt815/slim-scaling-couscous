<?php

/* admin/posts/admin.posts.list.html */
class __TwigTemplate_973f1c194ccf504c6614fe4a73b85d6461ae55d843935d2d4cc55078c76d839a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.base.html", "admin/posts/admin.posts.list.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.base.html";
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
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    ";
        // line 6
        $this->loadTemplate("admin.top-nav.html", "admin/posts/admin.posts.list.html", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("admin.navigation.html", "admin/posts/admin.posts.list.html", 7)->display($context);
        // line 8
        echo "</nav>

    <div id=\"wrapper\">
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 13
        $this->loadTemplate("admin.breadcrumb.html", "admin/posts/admin.posts.list.html", 13)->display($context);
        // line 14
        echo "
                ";
        // line 15
        if (((isset($context["action"]) ? $context["action"] : null) == "")) {
            echo " 
                    <h1>Empty Admin Page</h1>
                ";
        } elseif ((        // line 17
(isset($context["action"]) ? $context["action"] : null) == "Posts")) {
            // line 18
            echo "                \t";
            $this->loadTemplate("admin/posts/admin.posts.table.html", "admin/posts/admin.posts.list.html", 18)->display($context);
            // line 19
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post New")) {
            // line 20
            echo "                \t";
            $this->loadTemplate("admin/posts/admin.posts.new.html", "admin/posts/admin.posts.list.html", 20)->display($context);
            // line 21
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post Edit")) {
            // line 22
            echo "                    ";
            $this->loadTemplate("admin/posts/admin.posts.edit.html", "admin/posts/admin.posts.list.html", 22)->display($context);
            // line 23
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post Delete")) {
            // line 24
            echo "                    ";
            $this->loadTemplate("admin/posts/admin.posts.delete.html", "admin/posts/admin.posts.list.html", 24)->display($context);
            echo "    
                ";
        } elseif ((        // line 25
(isset($context["action"]) ? $context["action"] : null) == "Users List")) {
            // line 26
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.table.html", "admin/posts/admin.posts.list.html", 26)->display($context);
            echo "      
                ";
        } elseif ((        // line 27
(isset($context["action"]) ? $context["action"] : null) == "User Edit")) {
            // line 28
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.edit.html", "admin/posts/admin.posts.list.html", 28)->display($context);
            // line 29
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "User Delete")) {
            // line 30
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.delete.html", "admin/posts/admin.posts.list.html", 30)->display($context);
            echo "        
                ";
        } elseif ((        // line 31
(isset($context["action"]) ? $context["action"] : null) == "New User")) {
            // line 32
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.new.html", "admin/posts/admin.posts.list.html", 32)->display($context);
            echo " 
                ";
        }
        // line 34
        echo "
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

";
    }

    public function getTemplateName()
    {
        return "admin/posts/admin.posts.list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 32,  102 => 31,  97 => 30,  94 => 29,  91 => 28,  89 => 27,  84 => 26,  82 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  52 => 15,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin.base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     {% include 'admin.top-nav.html' %}*/
/*     {% include 'admin.navigation.html' %}*/
/* </nav>*/
/* */
/*     <div id="wrapper">*/
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/*                 {% include 'admin.breadcrumb.html' %}*/
/* */
/*                 {% if action == '' %} */
/*                     <h1>Empty Admin Page</h1>*/
/*                 {% elseif action == 'Posts' %}*/
/*                 	{% include 'admin/posts/admin.posts.table.html' %}*/
/*                 {% elseif action == 'Post New' %}*/
/*                 	{% include 'admin/posts/admin.posts.new.html' %}*/
/*                 {% elseif action == 'Post Edit' %}*/
/*                     {% include 'admin/posts/admin.posts.edit.html' %}*/
/*                 {% elseif action == 'Post Delete' %}*/
/*                     {% include 'admin/posts/admin.posts.delete.html' %}    */
/*                 {% elseif action == 'Users List' %}*/
/*                     {% include 'admin/users/admin.users.table.html' %}      */
/*                 {% elseif action == 'User Edit' %}*/
/*                     {% include 'admin/users/admin.users.edit.html' %}*/
/*                 {% elseif action == 'User Delete' %}*/
/*                     {% include 'admin/users/admin.users.delete.html' %}        */
/*                 {% elseif action == 'New User' %}*/
/*                     {% include 'admin/users/admin.users.new.html' %} */
/*                 {% endif %}*/
/* */
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/* {% endblock %}*/
