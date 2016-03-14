<?php

/* admin/users/admin.users.table.html */
class __TwigTemplate_84e95edfb2e3dfd96daccbe6c4b89b1a7f7bca12f0c2dd47b3a41586fd852630 extends Twig_Template
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

        ";
        // line 4
        if ( !twig_test_empty((isset($context["success"]) ? $context["success"] : null))) {
            // line 5
            echo "            <h3 class=\"text-center\"><span class=\"label label-success\">
                ";
            // line 6
            if (((isset($context["success"]) ? $context["success"] : null) == 1)) {
                // line 7
                echo "                  User has successfully updated!
                ";
            }
            // line 9
            echo "                ";
            if (((isset($context["success"]) ? $context["success"] : null) == 2)) {
                // line 10
                echo "                  User has successfully created!
                ";
            }
            // line 12
            echo "            </span></h3>
        ";
        }
        // line 14
        echo "
        <h2>List of Users</h2>
        <div class=\"table-responsive\">

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th><span class=\"glyphicon glyphicon-th-large\"></span></th>
                    <th>Username</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "created_at", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"/admin/users/edit/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">Edit</a> | <a href=\"/admin/users/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">Delete</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>

</div>
</div>  
";
    }

    public function getTemplateName()
    {
        return "admin/users/admin.users.table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  79 => 29,  62 => 28,  46 => 14,  42 => 12,  38 => 10,  35 => 9,  31 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/* */
/*         {% if success is not empty %}*/
/*             <h3 class="text-center"><span class="label label-success">*/
/*                 {% if success == 1 %}*/
/*                   User has successfully updated!*/
/*                 {% endif %}*/
/*                 {% if success == 2 %}*/
/*                   User has successfully created!*/
/*                 {% endif %}*/
/*             </span></h3>*/
/*         {% endif %}*/
/* */
/*         <h2>List of Users</h2>*/
/*         <div class="table-responsive">*/
/* */
/*         <table class="table table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th><span class="glyphicon glyphicon-th-large"></span></th>*/
/*                     <th>Username</th>*/
/*                     <th>Created at</th>*/
/*                     <th>Action</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td>{{loop.index}}</td>*/
/*                         <td>{{user.username}}</td>*/
/*                         <td>{{user.created_at}}</td>*/
/*                         <td><a href="/admin/users/edit/{{user.id}}">Edit</a> | <a href="/admin/users/delete/{{user.id}}">Delete</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/* </div>*/
/* </div>  */
/* */
