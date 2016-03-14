<?php

/* home/home.paginator.html */
class __TwigTemplate_a8b3679e55b2e39f771d6266ca68caa2fb2c83831b236ba0e1f441983aa63da2 extends Twig_Template
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
\t<ul class=\"pagination\" role=\"navigation\" aria-label=\"Pagination\">
\t\t<li class=\"";
        // line 3
        if (((isset($context["page"]) ? $context["page"] : null) == 1)) {
            echo "disabled";
        }
        echo "\">
\t\t\t";
        // line 4
        if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
            // line 5
            echo "  \t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) - 1), "html", null, true);
            echo "\">Previous</a>
\t\t\t";
        } else {
            // line 7
            echo "  \t\t\t\tPrevious
\t\t\t";
        }
        // line 9
        echo "\t\t</li>

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "\t\t<li class=\"";
            if (((isset($context["page"]) ? $context["page"] : null) == $context["i"])) {
                echo "current";
            }
            echo "\">
\t\t\t";
            // line 13
            if (((isset($context["page"]) ? $context["page"] : null) == $context["i"])) {
                // line 14
                echo "  \t\t<span class=\"show-for-sr\">You're on page</span>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 15
                echo "  
  \t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 18
            echo "\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t\t<li class=\"";
        // line 21
        if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["pages"]) ? $context["pages"] : null))) {
            echo "disabled";
        }
        echo "\">
  \t\t\t";
        // line 22
        if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pages"]) ? $context["pages"] : null))) {
            // line 23
            echo "    \t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 1), "html", null, true);
            echo "\">Next</a>
  \t\t\t";
        } else {
            // line 25
            echo "    \t<span>Next</span>
  \t\t";
        }
        // line 27
        echo "\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "home/home.paginator.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  104 => 25,  96 => 23,  94 => 22,  88 => 21,  85 => 20,  78 => 18,  69 => 16,  66 => 15,  60 => 14,  58 => 13,  51 => 12,  47 => 11,  43 => 9,  39 => 7,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row column">*/
/* 	<ul class="pagination" role="navigation" aria-label="Pagination">*/
/* 		<li class="{% if page == 1 %}disabled{% endif %}">*/
/* 			{% if page > 1 %}*/
/*   				<a href="{{ baseUrl() }}/{{page-1}}">Previous</a>*/
/* 			{% else %}*/
/*   				Previous*/
/* 			{% endif %}*/
/* 		</li>*/
/* */
/* 		{% for i in 1..pages %}*/
/* 		<li class="{% if page == i %}current{% endif %}">*/
/* 			{% if page == i %}*/
/*   		<span class="show-for-sr">You're on page</span>{{i}}*/
/* 			{% else %}  */
/*   		<a href="{{ baseUrl() }}/{{i}}">{{i}}</a>*/
/* 			{% endif %}*/
/* 		</li>*/
/* 		{% endfor %}*/
/* */
/* 		<li class="{% if page == pages %}disabled{% endif %}">*/
/*   			{% if page < pages %}*/
/*     	<a href="{{ baseUrl() }}/{{page+1}}">Next</a>*/
/*   			{% else %}*/
/*     	<span>Next</span>*/
/*   		{% endif %}*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
