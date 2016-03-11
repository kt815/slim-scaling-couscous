<?php

/* home.paginator.html */
class __TwigTemplate_4277253efaf11037cb86d9d0a2f3c0af8422af19048bd92505ce86bd5de29ea9 extends Twig_Template
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
        echo "<div class=\"row column\">
<ul class=\"pagination\" role=\"navigation\" aria-label=\"Pagination\">
<li class=\"";
        // line 3
        if (((isset($context["page"]) ? $context["page"] : null) == 1)) {
            echo "disabled";
        }
        echo "\">
";
        // line 4
        if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
            // line 5
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
            echo "\">Previous</a>
";
        } else {
            // line 7
            echo "  Previous
";
        }
        // line 9
        echo "</li>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "<li class=\"";
            if (((isset($context["page"]) ? $context["page"] : null) == $context["i"])) {
                echo "current";
            }
            echo "\">
";
            // line 12
            if (((isset($context["page"]) ? $context["page"] : null) == $context["i"])) {
                // line 13
                echo "  <span class=\"show-for-sr\">You're on page</span>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
";
            } else {
                // line 14
                echo "  
  <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
";
            }
            // line 17
            echo "  
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<li class=\"";
        // line 21
        if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["pages"]) ? $context["pages"] : null))) {
            echo "disabled";
        }
        echo "\">
  ";
        // line 22
        if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pages"]) ? $context["pages"] : null))) {
            // line 23
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
            echo "\">Next</a>
  ";
        } else {
            // line 25
            echo "    <span>Next</span>
  ";
        }
        // line 27
        echo "</li>
</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "home.paginator.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  104 => 25,  96 => 23,  94 => 22,  88 => 21,  85 => 20,  77 => 17,  68 => 15,  65 => 14,  59 => 13,  57 => 12,  50 => 11,  46 => 10,  43 => 9,  39 => 7,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row column">*/
/* <ul class="pagination" role="navigation" aria-label="Pagination">*/
/* <li class="{% if page == 1 %}disabled{% endif %}">*/
/* {% if page > 1 %}*/
/*   <a href="{{ baseUrl() }}/{{page-1}}">Previous</a>*/
/* {% else %}*/
/*   Previous*/
/* {% endif %}*/
/* </li>*/
/* {% for i in 1..pages %}*/
/* <li class="{% if page == i %}current{% endif %}">*/
/* {% if page == i %}*/
/*   <span class="show-for-sr">You're on page</span>{{i}}*/
/* {% else %}  */
/*   <a href="{{ baseUrl() }}/{{i}}">{{i}}</a>*/
/* {% endif %}*/
/*   */
/* </li>*/
/* {% endfor %}*/
/* */
/* <li class="{% if page == pages %}disabled{% endif %}">*/
/*   {% if page < pages %}*/
/*     <a href="{{ baseUrl() }}/{{page+1}}">Next</a>*/
/*   {% else %}*/
/*     <span>Next</span>*/
/*   {% endif %}*/
/* </li>*/
/* </ul>*/
/* </div>*/
