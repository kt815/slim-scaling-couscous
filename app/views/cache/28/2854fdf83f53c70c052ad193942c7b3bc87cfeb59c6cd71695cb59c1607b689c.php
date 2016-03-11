<?php

/* index.jade */
class __TwigTemplate_8f40bc5f32e239b63f1cc57d01e31db4d96b91b61a81ce873ed7c2211c879859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html", "index.jade", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"top-bar\">
<div class=\"top-bar-left\">
<ul class=\"menu\">
<li class=\"menu-text\">Yeti Agency</li>
</ul>
</div>
<div class=\"top-bar-right\">
<ul class=\"menu\">
<li><a href=\"#\">One</a></li>
<li><a href=\"#\">Two</a></li>
<li><a href=\"#\">Three</a></li>
<li><a href=\"#\">Four</a></li>
</ul>
</div>
</div>
 
<div class=\"callout large primary\">
<div class=\"row column text-center\">
<h1>Our Blog</h1>
</div>
</div>
<div class=\"row\" id=\"content\">
<div class=\"medium-8 columns\">
<div class=\"blog-post\">
<h3>Awesome blog post title <small>3/6/2015</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li><a href=\"#\">Author: Mike Mikers</a></li>
<li><a href=\"#\">Comments: 3</a></li>
</ul>
</div>
</div>
<div class=\"blog-post\">
<h3>Awesome blog post title <small>3/6/2015</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li><a href=\"#\">Author: Mike Mikers</a></li>
<li><a href=\"#\">Comments: 3</a></li>
</ul>
</div>
</div>
<div class=\"blog-post\">
<h3>Awesome blog post title <small>3/6/2015</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li><a href=\"#\">Author: Mike Mikers</a></li>
<li><a href=\"#\">Comments: 3</a></li>
</ul>
</div>
</div>
<div class=\"blog-post\">
<h3>Awesome blog post title <small>3/6/2015</small></h3>
<img class=\"thumbnail\" src=\"http://placehold.it/850x350\">
<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
<div class=\"callout\">
<ul class=\"menu simple\">
<li><a href=\"#\">Author: Mike Mikers</a></li>
<li><a href=\"#\">Comments: 3</a></li>
</ul>
</div>
</div>
</div>
<div class=\"medium-3 columns\" data-sticky-container>
<div class=\"sticky\" data-sticky data-anchor=\"content\">
<h4>Categories</h4>
<ul>
<li><a href=\"#\">Skyler</a></li>
<li><a href=\"#\">Jesse</a></li>
<li><a href=\"#\">Mike</a></li>
<li><a href=\"#\">Holly</a></li>
</ul>
<h4>Authors</h4>
<ul>
<li><a href=\"#\">Skyler</a></li>
<li><a href=\"#\">Jesse</a></li>
<li><a href=\"#\">Mike</a></li>
<li><a href=\"#\">Holly</a></li>
</ul>
</div>
</div>
</div>
<div class=\"row column\">
<ul class=\"pagination\" role=\"navigation\" aria-label=\"Pagination\">
<li class=\"disabled\">Previous</li>
<li class=\"current\"><span class=\"show-for-sr\">You're on page</span> 1</li>
<li><a href=\"#\" aria-label=\"Page 2\">2</a></li>
<li><a href=\"#\" aria-label=\"Page 3\">3</a></li>
<li><a href=\"#\" aria-label=\"Page 4\">4</a></li>
<li class=\"ellipsis\"></li>
<li><a href=\"#\" aria-label=\"Page 12\">12</a></li>
<li><a href=\"#\" aria-label=\"Page 13\">13</a></li>
<li><a href=\"#\" aria-label=\"Next page\">Next</a></li>
</ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "index.jade";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* <div class="top-bar">*/
/* <div class="top-bar-left">*/
/* <ul class="menu">*/
/* <li class="menu-text">Yeti Agency</li>*/
/* </ul>*/
/* </div>*/
/* <div class="top-bar-right">*/
/* <ul class="menu">*/
/* <li><a href="#">One</a></li>*/
/* <li><a href="#">Two</a></li>*/
/* <li><a href="#">Three</a></li>*/
/* <li><a href="#">Four</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/*  */
/* <div class="callout large primary">*/
/* <div class="row column text-center">*/
/* <h1>Our Blog</h1>*/
/* </div>*/
/* </div>*/
/* <div class="row" id="content">*/
/* <div class="medium-8 columns">*/
/* <div class="blog-post">*/
/* <h3>Awesome blog post title <small>3/6/2015</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li><a href="#">Author: Mike Mikers</a></li>*/
/* <li><a href="#">Comments: 3</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* <div class="blog-post">*/
/* <h3>Awesome blog post title <small>3/6/2015</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li><a href="#">Author: Mike Mikers</a></li>*/
/* <li><a href="#">Comments: 3</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* <div class="blog-post">*/
/* <h3>Awesome blog post title <small>3/6/2015</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li><a href="#">Author: Mike Mikers</a></li>*/
/* <li><a href="#">Comments: 3</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* <div class="blog-post">*/
/* <h3>Awesome blog post title <small>3/6/2015</small></h3>*/
/* <img class="thumbnail" src="http://placehold.it/850x350">*/
/* <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>*/
/* <div class="callout">*/
/* <ul class="menu simple">*/
/* <li><a href="#">Author: Mike Mikers</a></li>*/
/* <li><a href="#">Comments: 3</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="medium-3 columns" data-sticky-container>*/
/* <div class="sticky" data-sticky data-anchor="content">*/
/* <h4>Categories</h4>*/
/* <ul>*/
/* <li><a href="#">Skyler</a></li>*/
/* <li><a href="#">Jesse</a></li>*/
/* <li><a href="#">Mike</a></li>*/
/* <li><a href="#">Holly</a></li>*/
/* </ul>*/
/* <h4>Authors</h4>*/
/* <ul>*/
/* <li><a href="#">Skyler</a></li>*/
/* <li><a href="#">Jesse</a></li>*/
/* <li><a href="#">Mike</a></li>*/
/* <li><a href="#">Holly</a></li>*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="row column">*/
/* <ul class="pagination" role="navigation" aria-label="Pagination">*/
/* <li class="disabled">Previous</li>*/
/* <li class="current"><span class="show-for-sr">You're on page</span> 1</li>*/
/* <li><a href="#" aria-label="Page 2">2</a></li>*/
/* <li><a href="#" aria-label="Page 3">3</a></li>*/
/* <li><a href="#" aria-label="Page 4">4</a></li>*/
/* <li class="ellipsis"></li>*/
/* <li><a href="#" aria-label="Page 12">12</a></li>*/
/* <li><a href="#" aria-label="Page 13">13</a></li>*/
/* <li><a href="#" aria-label="Next page">Next</a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
