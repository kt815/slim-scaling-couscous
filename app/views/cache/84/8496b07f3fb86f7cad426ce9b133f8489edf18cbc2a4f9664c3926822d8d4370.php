<?php

/* admin/admin.top-nav.html */
class __TwigTemplate_80148de0993519731699c052041a1d07a96b07e3dc15c011a6f84df7d7a30f9b extends Twig_Template
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
        echo "        <!-- Navigation -->

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/admin\">Admin Space</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a class=\"navbar-brand\" href=\"/\">Site Homepage</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"admin_files/50x50.png\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"admin_files/50x50.png\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"admin_files/50x50.png\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
                    </ul>
                </li>             
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "username", array()), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/admin/users/edit/";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "userid", array()), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"/logout\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>";
    }

    public function getTemplateName()
    {
        return "admin/admin.top-nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 72,  89 => 69,  19 => 1,);
    }
}
/*         <!-- Navigation -->*/
/* */
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/admin">Admin Space</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a class="navbar-brand" href="/">Site Homepage</a>*/
/*             </div>*/
/*             <!-- Top Menu Items -->*/
/*             <ul class="nav navbar-right top-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu message-dropdown">*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="admin_files/50x50.png" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="admin_files/50x50.png" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="admin_files/50x50.png" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-footer">*/
/*                             <a href="#">Read All New Messages</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>             */
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ menu.username }} <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/admin/users/edit/{{ menu.userid }}"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
