<?php

/* ApplicationSonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_37416ebfb217aef7e6d3e1e7c8ec5ab38612a00d7b852ac01fedbbf070dff30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("ApplicationSonataUserBundle::layout.html.twig", "ApplicationSonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApplicationSonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c12c3bd46277e1bb1bdf6432a95416c74b88e0ae2301999e9deed7b2da1269 = $this->env->getExtension("native_profiler");
        $__internal_92c12c3bd46277e1bb1bdf6432a95416c74b88e0ae2301999e9deed7b2da1269->enter($__internal_92c12c3bd46277e1bb1bdf6432a95416c74b88e0ae2301999e9deed7b2da1269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c12c3bd46277e1bb1bdf6432a95416c74b88e0ae2301999e9deed7b2da1269->leave($__internal_92c12c3bd46277e1bb1bdf6432a95416c74b88e0ae2301999e9deed7b2da1269_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf9792da8a3a6d77968c349540b7a43e1504a97cdf71a390e6805ab490b6f097 = $this->env->getExtension("native_profiler");
        $__internal_bf9792da8a3a6d77968c349540b7a43e1504a97cdf71a390e6805ab490b6f097->enter($__internal_bf9792da8a3a6d77968c349540b7a43e1504a97cdf71a390e6805ab490b6f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <style>
        .englob{
            width:570px;
            margin: 100px auto;
        }
    </style>
    <div class=\"englob\">

        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 25
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 90
        echo "            </div>

        </div>
    </div>

";
        
        $__internal_bf9792da8a3a6d77968c349540b7a43e1504a97cdf71a390e6805ab490b6f097->leave($__internal_bf9792da8a3a6d77968c349540b7a43e1504a97cdf71a390e6805ab490b6f097_prof);

    }

    // line 25
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_77b25f23be092a65fcf8fc31aaf1d1c80c01faa33bcb571f780d6553229bed2a = $this->env->getExtension("native_profiler");
        $__internal_77b25f23be092a65fcf8fc31aaf1d1c80c01faa33bcb571f780d6553229bed2a->enter($__internal_77b25f23be092a65fcf8fc31aaf1d1c80c01faa33bcb571f780d6553229bed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 26
        echo "                    <div class=\"panel panel-info\">

                        <div class=\"panel-heading\">
                            <h2 class=\"panel-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                        </div>

                        <div class=\"panel-body\">

                            ";
        // line 34
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 39
        echo "
                            ";
        // line 40
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 87
        echo "                        </div>
                    </div>
                ";
        
        $__internal_77b25f23be092a65fcf8fc31aaf1d1c80c01faa33bcb571f780d6553229bed2a->leave($__internal_77b25f23be092a65fcf8fc31aaf1d1c80c01faa33bcb571f780d6553229bed2a_prof);

    }

    // line 34
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_956a6206dc7a1b95de8135654bd0e08d01f9b1c926c97328fc52edfe9f7efda3 = $this->env->getExtension("native_profiler");
        $__internal_956a6206dc7a1b95de8135654bd0e08d01f9b1c926c97328fc52edfe9f7efda3->enter($__internal_956a6206dc7a1b95de8135654bd0e08d01f9b1c926c97328fc52edfe9f7efda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 35
        echo "                                ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 36
            echo "                                    <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 38
        echo "                            ";
        
        $__internal_956a6206dc7a1b95de8135654bd0e08d01f9b1c926c97328fc52edfe9f7efda3->leave($__internal_956a6206dc7a1b95de8135654bd0e08d01f9b1c926c97328fc52edfe9f7efda3_prof);

    }

    // line 40
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_db16824180a8ca2ec8d836dadab23a1bbb977e66c216254f4ae96287ccefcd83 = $this->env->getExtension("native_profiler");
        $__internal_db16824180a8ca2ec8d836dadab23a1bbb977e66c216254f4ae96287ccefcd83->enter($__internal_db16824180a8ca2ec8d836dadab23a1bbb977e66c216254f4ae96287ccefcd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 41
        echo "                                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                                      class=\"form-horizontal\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                                    <div class=\"form-group\">
                                        <label for=\"username\"
                                               class=\"col-sm-4 control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                        <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                     name=\"_username\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                                     required=\"required\"/></div>
                                    </div>


                                    <div class=\"form-group control-group\">
                                        <label for=\"password\"
                                               class=\"col-sm-4 control-label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                        <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                     name=\"_password\" required=\"required\"/></div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"col-sm-offset-4 col-sm-8\">
                                            <div class=\"checkbox control-group\">
                                                <label for=\"remember_me\">
                                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                                           value=\"on\"/>
                                                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group control-group\">
                                        <div class=\"controls col-sm-offset-4 col-sm-8\">
                                            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"col-sm-offset-4 col-sm-8\">
                                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                                   value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                        </div>
                                    </div>
                                </form>
                            ";
        
        $__internal_db16824180a8ca2ec8d836dadab23a1bbb977e66c216254f4ae96287ccefcd83->leave($__internal_db16824180a8ca2ec8d836dadab23a1bbb977e66c216254f4ae96287ccefcd83_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 82,  185 => 75,  174 => 67,  160 => 56,  150 => 49,  145 => 47,  138 => 43,  132 => 41,  126 => 40,  119 => 38,  113 => 36,  110 => 35,  104 => 34,  95 => 87,  93 => 40,  90 => 39,  88 => 34,  80 => 29,  75 => 26,  69 => 25,  57 => 90,  55 => 25,  43 => 15,  37 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "ApplicationSonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <style>*/
/*         .englob{*/
/*             width:570px;*/
/*             margin: 100px auto;*/
/*         }*/
/*     </style>*/
/*     <div class="englob">*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 {% block sonata_user_login %}*/
/*                     <div class="panel panel-info">*/
/* */
/*                         <div class="panel-heading">*/
/*                             <h2 class="panel-title">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>*/
/*                         </div>*/
/* */
/*                         <div class="panel-body">*/
/* */
/*                             {% block sonata_user_login_error %}*/
/*                                 {% if error %}*/
/*                                     <div class="alert alert-danger alert-error">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                                 {% endif %}*/
/*                             {% endblock %}*/
/* */
/*                             {% block sonata_user_login_form %}*/
/*                                 <form action="{{ path("fos_user_security_check") }}" method="post" role="form"*/
/*                                       class="form-horizontal">*/
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <label for="username"*/
/*                                                class="col-sm-4 control-label">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                         <div class="col-sm-8"><input type="text" class="form-control" id="username"*/
/*                                                                      name="_username" value="{{ last_username }}"*/
/*                                                                      required="required"/></div>*/
/*                                     </div>*/
/* */
/* */
/*                                     <div class="form-group control-group">*/
/*                                         <label for="password"*/
/*                                                class="col-sm-4 control-label">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                         <div class="col-sm-8"><input type="password" class="form-control" id="password"*/
/*                                                                      name="_password" required="required"/></div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="col-sm-offset-4 col-sm-8">*/
/*                                             <div class="checkbox control-group">*/
/*                                                 <label for="remember_me">*/
/*                                                     <input type="checkbox" id="remember_me" name="_remember_me"*/
/*                                                            value="on"/>*/
/*                                                     {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group control-group">*/
/*                                         <div class="controls col-sm-offset-4 col-sm-8">*/
/*                                             <a href="{{ path('fos_user_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="col-sm-offset-4 col-sm-8">*/
/*                                             <input type="submit" id="_submit" name="_submit" class="btn btn-primary"*/
/*                                                    value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
