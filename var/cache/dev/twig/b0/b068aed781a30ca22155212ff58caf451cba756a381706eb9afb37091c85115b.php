<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d58705eb032a8efd8b0828c8904c2e47894c68fd5b0c2bbd68cf061f43b9c532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9818095557ccb153dd0ab3ba4432c5740a22644b1c0c86a9d8859b656666fdb0 = $this->env->getExtension("native_profiler");
        $__internal_9818095557ccb153dd0ab3ba4432c5740a22644b1c0c86a9d8859b656666fdb0->enter($__internal_9818095557ccb153dd0ab3ba4432c5740a22644b1c0c86a9d8859b656666fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9818095557ccb153dd0ab3ba4432c5740a22644b1c0c86a9d8859b656666fdb0->leave($__internal_9818095557ccb153dd0ab3ba4432c5740a22644b1c0c86a9d8859b656666fdb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_108c40b662404fe6d8edab1fb2a0383e7b35a0dd667cf9b80aaa732c965f0b2d = $this->env->getExtension("native_profiler");
        $__internal_108c40b662404fe6d8edab1fb2a0383e7b35a0dd667cf9b80aaa732c965f0b2d->enter($__internal_108c40b662404fe6d8edab1fb2a0383e7b35a0dd667cf9b80aaa732c965f0b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_108c40b662404fe6d8edab1fb2a0383e7b35a0dd667cf9b80aaa732c965f0b2d->leave($__internal_108c40b662404fe6d8edab1fb2a0383e7b35a0dd667cf9b80aaa732c965f0b2d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4f78efd41df9c4be539f55eeb01f5a06993e623b06cbb9576a8e48eda72dc55 = $this->env->getExtension("native_profiler");
        $__internal_d4f78efd41df9c4be539f55eeb01f5a06993e623b06cbb9576a8e48eda72dc55->enter($__internal_d4f78efd41df9c4be539f55eeb01f5a06993e623b06cbb9576a8e48eda72dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d4f78efd41df9c4be539f55eeb01f5a06993e623b06cbb9576a8e48eda72dc55->leave($__internal_d4f78efd41df9c4be539f55eeb01f5a06993e623b06cbb9576a8e48eda72dc55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8490a94db529e99c9b44d6111b623f3d16ab65b2f5e02732ca8a8e57a61d073a = $this->env->getExtension("native_profiler");
        $__internal_8490a94db529e99c9b44d6111b623f3d16ab65b2f5e02732ca8a8e57a61d073a->enter($__internal_8490a94db529e99c9b44d6111b623f3d16ab65b2f5e02732ca8a8e57a61d073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8490a94db529e99c9b44d6111b623f3d16ab65b2f5e02732ca8a8e57a61d073a->leave($__internal_8490a94db529e99c9b44d6111b623f3d16ab65b2f5e02732ca8a8e57a61d073a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
