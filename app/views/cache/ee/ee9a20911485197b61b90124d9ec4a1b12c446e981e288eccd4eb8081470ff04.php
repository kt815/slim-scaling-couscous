<?php

/* admin/admin.root.html */
class __TwigTemplate_b428953354f0826843abe467bb6bdcc1e3c2498ba7991563f44c96913478ee74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.base.html", "admin/admin.root.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.base.html";
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
        $this->loadTemplate("admin/admin.top-nav.html", "admin/admin.root.html", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("admin/admin.navigation.html", "admin/admin.root.html", 7)->display($context);
        // line 8
        echo "</nav>

    <div id=\"wrapper\">
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 13
        $this->loadTemplate("admin/admin.breadcrumb.html", "admin/admin.root.html", 13)->display($context);
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
            $this->loadTemplate("admin/posts/admin.posts.table.html", "admin/admin.root.html", 18)->display($context);
            // line 19
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post New")) {
            // line 20
            echo "                \t";
            $this->loadTemplate("admin/posts/admin.posts.new.html", "admin/admin.root.html", 20)->display($context);
            // line 21
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post Edit")) {
            // line 22
            echo "                    ";
            $this->loadTemplate("admin/posts/admin.posts.edit.html", "admin/admin.root.html", 22)->display($context);
            // line 23
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Post Delete")) {
            // line 24
            echo "                    ";
            $this->loadTemplate("admin/posts/admin.posts.delete.html", "admin/admin.root.html", 24)->display($context);
            echo "    
                ";
        } elseif ((        // line 25
(isset($context["action"]) ? $context["action"] : null) == "Users List")) {
            // line 26
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.table.html", "admin/admin.root.html", 26)->display($context);
            echo "      
                ";
        } elseif ((        // line 27
(isset($context["action"]) ? $context["action"] : null) == "User Edit")) {
            // line 28
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.edit.html", "admin/admin.root.html", 28)->display($context);
            // line 29
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "User Delete")) {
            // line 30
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.delete.html", "admin/admin.root.html", 30)->display($context);
            echo "        
                ";
        } elseif ((        // line 31
(isset($context["action"]) ? $context["action"] : null) == "New User")) {
            // line 32
            echo "                    ";
            $this->loadTemplate("admin/users/admin.users.new.html", "admin/admin.root.html", 32)->display($context);
            echo " 
                ";
        } elseif ((        // line 33
(isset($context["action"]) ? $context["action"] : null) == "Jokes")) {
            // line 34
            echo "                    ";
            $this->loadTemplate("admin/jokes/admin.jokes.table.html", "admin/admin.root.html", 34)->display($context);
            echo " 
                ";
        } elseif ((        // line 35
(isset($context["action"]) ? $context["action"] : null) == "Joke New")) {
            // line 36
            echo "                    ";
            $this->loadTemplate("admin/jokes/admin.jokes.new.html", "admin/admin.root.html", 36)->display($context);
            echo " 
                ";
        } elseif ((        // line 37
(isset($context["action"]) ? $context["action"] : null) == "Joke Edit")) {
            // line 38
            echo "                    ";
            $this->loadTemplate("admin/jokes/admin.jokes.edit.html", "admin/admin.root.html", 38)->display($context);
            // line 39
            echo "                ";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == "Joke Delete")) {
            // line 40
            echo "                    ";
            $this->loadTemplate("admin/jokes/admin.jokes.delete.html", "admin/admin.root.html", 40)->display($context);
            echo "        

                ";
        }
        // line 43
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
        return "admin/admin.root.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  131 => 40,  128 => 39,  125 => 38,  123 => 37,  118 => 36,  116 => 35,  111 => 34,  109 => 33,  104 => 32,  102 => 31,  97 => 30,  94 => 29,  91 => 28,  89 => 27,  84 => 26,  82 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  52 => 15,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/admin.base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     {% include 'admin/admin.top-nav.html' %}*/
/*     {% include 'admin/admin.navigation.html' %}*/
/* </nav>*/
/* */
/*     <div id="wrapper">*/
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/*                 {% include 'admin/admin.breadcrumb.html' %}*/
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
/*                 {% elseif action == 'Jokes' %}*/
/*                     {% include 'admin/jokes/admin.jokes.table.html' %} */
/*                 {% elseif action == 'Joke New' %}*/
/*                     {% include 'admin/jokes/admin.jokes.new.html' %} */
/*                 {% elseif action == 'Joke Edit' %}*/
/*                     {% include 'admin/jokes/admin.jokes.edit.html' %}*/
/*                 {% elseif action == 'Joke Delete' %}*/
/*                     {% include 'admin/jokes/admin.jokes.delete.html' %}        */
/* */
/*                 {% endif %}*/
/* */
/* */
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/* {% endblock %}*/
