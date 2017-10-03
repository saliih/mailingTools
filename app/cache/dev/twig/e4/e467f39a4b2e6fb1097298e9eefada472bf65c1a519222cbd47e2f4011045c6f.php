<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b8ec8171ad2820305e91fa85c97d548da7d811747fffae565efd397bfa6a31b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856fc8dbb98ab63582bb2a7c0ede6855c01aa4369a6d8866347d0a1303f9a323 = $this->env->getExtension("native_profiler");
        $__internal_856fc8dbb98ab63582bb2a7c0ede6855c01aa4369a6d8866347d0a1303f9a323->enter($__internal_856fc8dbb98ab63582bb2a7c0ede6855c01aa4369a6d8866347d0a1303f9a323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_856fc8dbb98ab63582bb2a7c0ede6855c01aa4369a6d8866347d0a1303f9a323->leave($__internal_856fc8dbb98ab63582bb2a7c0ede6855c01aa4369a6d8866347d0a1303f9a323_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_b49944eca70869bc631b78d30f3da9dab63b16b4f8fa286007016b464d25ce3e = $this->env->getExtension("native_profiler");
        $__internal_b49944eca70869bc631b78d30f3da9dab63b16b4f8fa286007016b464d25ce3e->enter($__internal_b49944eca70869bc631b78d30f3da9dab63b16b4f8fa286007016b464d25ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_b49944eca70869bc631b78d30f3da9dab63b16b4f8fa286007016b464d25ce3e->leave($__internal_b49944eca70869bc631b78d30f3da9dab63b16b4f8fa286007016b464d25ce3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
