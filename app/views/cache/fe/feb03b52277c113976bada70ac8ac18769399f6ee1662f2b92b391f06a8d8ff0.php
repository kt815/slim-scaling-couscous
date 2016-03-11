<?php

/* post.comments.html */
class __TwigTemplate_bee3c039026f9a2adbc68fe9b6a8ccde9142b33ffad36bf1e46c661b79312684 extends Twig_Template
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
        echo "

<div class=\"row medium-8 large-7 columns\">

<h3 id=\"comments\">Comments</h3>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 8
            echo "\t<!-- COMMENT -->
\t<div class=\"comment\">
\t\t<section class=\"top\">
\t\t\t<h6 class=\"byline\">
\t\t\t\t<a href=\"#\"><i class=\"icon\"></i>
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "username", array()), "html", null, true);
            echo "</a> 
\t\t\t\t<small>said 
\t\t\t\t\t<span class=\"data\">
\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "created_at", array()), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t</small>
\t\t\t</h6>
\t\t</section>
\t\t<section class=\"content\">
\t\t\t<p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo " </p>
\t\t</section>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
<div class=\"callout2\">

 <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/post/comment/new\" method=\"POST\">

    <div class=\"large-12 columns\">
      <label>Username

        <input type=\"text\" name=\"username\" placeholder=\"Enter your username ...\" />
      </label>
    </div>


    <div class=\"large-12 columns\">
      <label>URL
        <input type=\"url\" name=\"url\" value=\"http://\" />
      </label>
    </div>

    <div class=\"large-12 columns\">
      <label>Username
        <input type=\"email\" name=\"email\" placeholder=\"Enter your email ...\" />
      </label>
    </div>

    <div class=\"large-12 columns\">
      <label>Textarea Label
        <textarea rows=\"6\" name=\"text\" placeholder=\"Enter you message ...\"></textarea>
      </label>
    </div>

    <div class=\"large-12 columns\">
      <label>
    <input type=\"hidden\" name=\"post_id\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["redirect"]) ? $context["redirect"] : null), "html", null, true);
        echo "#comments\" />
\t<input class=\"small button\" value=\"SEND ENQUIRY\" type=\"submit\">
      </label>
    </div>




</form>
</div>

</div>




";
    }

    public function getTemplateName()
    {
        return "post.comments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 61,  102 => 60,  69 => 30,  64 => 27,  53 => 22,  44 => 16,  38 => 13,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* */
/* */
/* <div class="row medium-8 large-7 columns">*/
/* */
/* <h3 id="comments">Comments</h3>*/
/* */
/* {% for comment in comments %}*/
/* 	<!-- COMMENT -->*/
/* 	<div class="comment">*/
/* 		<section class="top">*/
/* 			<h6 class="byline">*/
/* 				<a href="#"><i class="icon"></i>*/
/* 				{{comment.username}}</a> */
/* 				<small>said */
/* 					<span class="data">*/
/* 						{{comment.created_at}}*/
/* 					</span>*/
/* 			</small>*/
/* 			</h6>*/
/* 		</section>*/
/* 		<section class="content">*/
/* 			<p>{{comment.text}} </p>*/
/* 		</section>*/
/* 	</div>*/
/* */
/* {% endfor %}*/
/* */
/* <div class="callout2">*/
/* */
/*  <form action="{{ baseUrl() }}/post/comment/new" method="POST">*/
/* */
/*     <div class="large-12 columns">*/
/*       <label>Username*/
/* */
/*         <input type="text" name="username" placeholder="Enter your username ..." />*/
/*       </label>*/
/*     </div>*/
/* */
/* */
/*     <div class="large-12 columns">*/
/*       <label>URL*/
/*         <input type="url" name="url" value="http://" />*/
/*       </label>*/
/*     </div>*/
/* */
/*     <div class="large-12 columns">*/
/*       <label>Username*/
/*         <input type="email" name="email" placeholder="Enter your email ..." />*/
/*       </label>*/
/*     </div>*/
/* */
/*     <div class="large-12 columns">*/
/*       <label>Textarea Label*/
/*         <textarea rows="6" name="text" placeholder="Enter you message ..."></textarea>*/
/*       </label>*/
/*     </div>*/
/* */
/*     <div class="large-12 columns">*/
/*       <label>*/
/*     <input type="hidden" name="post_id" value="{{post.id}}" />*/
/*     <input type="hidden" name="redirect" value="{{redirect}}#comments" />*/
/* 	<input class="small button" value="SEND ENQUIRY" type="submit">*/
/*       </label>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* </form>*/
/* </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
