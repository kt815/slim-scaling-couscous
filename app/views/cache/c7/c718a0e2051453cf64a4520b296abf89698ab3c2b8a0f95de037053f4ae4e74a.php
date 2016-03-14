<?php

/* admin/posts/admin.posts.table.html */
class __TwigTemplate_e9a7a46eebd7c39f81ea464bd2d71488bccfc3c6e90dd4ce30b785875f7a3aaf extends Twig_Template
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
        <h2>List of Posts</h2>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th><span class=\"glyphicon glyphicon-th-large\"></span></th>
                        <th>Title</th>
                        <th>State</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                        <tr>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></td>
                            <td>
                                ";
            // line 23
            if (($this->getAttribute($context["post"], "active", array()) === "true")) {
                // line 24
                echo "                                    Activate/<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/admin/posts/deactivate/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">Deactivate</a>
                                ";
            } else {
                // line 26
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/admin/posts/activate/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">Activate</a>/Deactivate
                                ";
            }
            // line 28
            echo "                            </td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "date", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/admin/posts/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">Edit</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/admin/posts/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
</div>
</div>  
";
    }

    public function getTemplateName()
    {
        return "admin/posts/admin.posts.table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  81 => 26,  73 => 24,  71 => 23,  62 => 21,  58 => 20,  55 => 19,  38 => 18,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h2>List of Posts</h2>*/
/* */
/*         <div class="table-responsive">*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th><span class="glyphicon glyphicon-th-large"></span></th>*/
/*                         <th>Title</th>*/
/*                         <th>State</th>*/
/*                         <th>Author</th>*/
/*                         <th>Date</th>*/
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for post in posts %}*/
/*                         <tr>*/
/*                             <td>{{loop.index}}</td>*/
/*                             <td><a href="{{ baseUrl() }}/post/{{post.id}}">{{post.title}}</a></td>*/
/*                             <td>*/
/*                                 {% if post.active is sameas("true") %}*/
/*                                     Activate/<a href="{{ baseUrl() }}/admin/posts/deactivate/{{post.id}}">Deactivate</a>*/
/*                                 {% else %}*/
/*                                     <a href="{{ baseUrl() }}/admin/posts/activate/{{post.id}}">Activate</a>/Deactivate*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>{{post.author}}</td>*/
/*                             <td>{{post.date}}</td>*/
/*                             <td><a href="{{ baseUrl() }}/admin/posts/edit/{{post.id}}">Edit</a> | <a href="{{ baseUrl() }}/admin/posts/delete/{{post.id}}">Delete</a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* </div>*/
/* </div>  */
/* */
