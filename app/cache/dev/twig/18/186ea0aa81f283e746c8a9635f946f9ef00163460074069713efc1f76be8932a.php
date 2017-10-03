<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cc4ee5beadcc75ee3b5f0cedd14ccf4e6e8642b27fbd4f5951a0f45ec9a6ce56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("ApplicationSonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApplicationSonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40266d2f5310061e380d7e9519af940838095ee3c6fc323f99e50fc9a1984abc = $this->env->getExtension("native_profiler");
        $__internal_40266d2f5310061e380d7e9519af940838095ee3c6fc323f99e50fc9a1984abc->enter($__internal_40266d2f5310061e380d7e9519af940838095ee3c6fc323f99e50fc9a1984abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40266d2f5310061e380d7e9519af940838095ee3c6fc323f99e50fc9a1984abc->leave($__internal_40266d2f5310061e380d7e9519af940838095ee3c6fc323f99e50fc9a1984abc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends "ApplicationSonataUserBundle:Security:base_login.html.twig" %}*/
/* */
