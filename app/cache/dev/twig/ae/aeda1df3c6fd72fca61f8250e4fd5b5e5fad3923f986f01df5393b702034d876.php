<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_4933fe31c5d2b63cc2fa518a9cb7b11910aba38b4b364ee20f98978f07021683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86d54f4c7d95ccd84f93ecb0db3d90a24533aa948a6806ed3077953a38bba257 = $this->env->getExtension("native_profiler");
        $__internal_86d54f4c7d95ccd84f93ecb0db3d90a24533aa948a6806ed3077953a38bba257->enter($__internal_86d54f4c7d95ccd84f93ecb0db3d90a24533aa948a6806ed3077953a38bba257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_86d54f4c7d95ccd84f93ecb0db3d90a24533aa948a6806ed3077953a38bba257->leave($__internal_86d54f4c7d95ccd84f93ecb0db3d90a24533aa948a6806ed3077953a38bba257_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_43cb922ddaaa8f190fca578c0006573bae729c6b5a469312f2595e4167d1a14a = $this->env->getExtension("native_profiler");
        $__internal_43cb922ddaaa8f190fca578c0006573bae729c6b5a469312f2595e4167d1a14a->enter($__internal_43cb922ddaaa8f190fca578c0006573bae729c6b5a469312f2595e4167d1a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_43cb922ddaaa8f190fca578c0006573bae729c6b5a469312f2595e4167d1a14a->leave($__internal_43cb922ddaaa8f190fca578c0006573bae729c6b5a469312f2595e4167d1a14a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
