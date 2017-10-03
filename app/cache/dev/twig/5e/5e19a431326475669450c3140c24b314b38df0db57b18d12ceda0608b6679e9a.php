<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_041c7b2b72855111fc84361e1460cd9203b96eb3fac9a78cb0d52dc38e2c326d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf6d73abd17423e25feb7154bfe6178d3f4820c72d1c9d47f7655237a377ad39 = $this->env->getExtension("native_profiler");
        $__internal_cf6d73abd17423e25feb7154bfe6178d3f4820c72d1c9d47f7655237a377ad39->enter($__internal_cf6d73abd17423e25feb7154bfe6178d3f4820c72d1c9d47f7655237a377ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6d73abd17423e25feb7154bfe6178d3f4820c72d1c9d47f7655237a377ad39->leave($__internal_cf6d73abd17423e25feb7154bfe6178d3f4820c72d1c9d47f7655237a377ad39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d090d2b8b94909fe9418b2ce8a97f0a4b3bc697606171427ee69f5b5eac87c0d = $this->env->getExtension("native_profiler");
        $__internal_d090d2b8b94909fe9418b2ce8a97f0a4b3bc697606171427ee69f5b5eac87c0d->enter($__internal_d090d2b8b94909fe9418b2ce8a97f0a4b3bc697606171427ee69f5b5eac87c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d090d2b8b94909fe9418b2ce8a97f0a4b3bc697606171427ee69f5b5eac87c0d->leave($__internal_d090d2b8b94909fe9418b2ce8a97f0a4b3bc697606171427ee69f5b5eac87c0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0ac526d8412339b8fee107c99b7bdb6a5098c2c7ab93d723eb4a33a953f3649 = $this->env->getExtension("native_profiler");
        $__internal_d0ac526d8412339b8fee107c99b7bdb6a5098c2c7ab93d723eb4a33a953f3649->enter($__internal_d0ac526d8412339b8fee107c99b7bdb6a5098c2c7ab93d723eb4a33a953f3649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0ac526d8412339b8fee107c99b7bdb6a5098c2c7ab93d723eb4a33a953f3649->leave($__internal_d0ac526d8412339b8fee107c99b7bdb6a5098c2c7ab93d723eb4a33a953f3649_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86f8e5897b7099c010697b3e1bef91100c691c60e4c319632c5ce9d6e3eeae5e = $this->env->getExtension("native_profiler");
        $__internal_86f8e5897b7099c010697b3e1bef91100c691c60e4c319632c5ce9d6e3eeae5e->enter($__internal_86f8e5897b7099c010697b3e1bef91100c691c60e4c319632c5ce9d6e3eeae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86f8e5897b7099c010697b3e1bef91100c691c60e4c319632c5ce9d6e3eeae5e->leave($__internal_86f8e5897b7099c010697b3e1bef91100c691c60e4c319632c5ce9d6e3eeae5e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
