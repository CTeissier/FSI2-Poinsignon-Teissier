<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a33998756ff789f9a4fc03fff75413f6324dc5ed10086fd0e5807eccc1d08ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3c58a0e5300eadf85e7137da809c6f99aab702d51c6d07057bc862fc7498aa85 = $this->env->getExtension("native_profiler");
        $__internal_3c58a0e5300eadf85e7137da809c6f99aab702d51c6d07057bc862fc7498aa85->enter($__internal_3c58a0e5300eadf85e7137da809c6f99aab702d51c6d07057bc862fc7498aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c58a0e5300eadf85e7137da809c6f99aab702d51c6d07057bc862fc7498aa85->leave($__internal_3c58a0e5300eadf85e7137da809c6f99aab702d51c6d07057bc862fc7498aa85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29155ef0e6919a8b149e0f8a96f0eb35dda09d00a57203983675023e20a80a2d = $this->env->getExtension("native_profiler");
        $__internal_29155ef0e6919a8b149e0f8a96f0eb35dda09d00a57203983675023e20a80a2d->enter($__internal_29155ef0e6919a8b149e0f8a96f0eb35dda09d00a57203983675023e20a80a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29155ef0e6919a8b149e0f8a96f0eb35dda09d00a57203983675023e20a80a2d->leave($__internal_29155ef0e6919a8b149e0f8a96f0eb35dda09d00a57203983675023e20a80a2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2f6fe5a02c1d8559a3240888aa702496aa32c6b97b7a645f24525fa8f0b7d51 = $this->env->getExtension("native_profiler");
        $__internal_e2f6fe5a02c1d8559a3240888aa702496aa32c6b97b7a645f24525fa8f0b7d51->enter($__internal_e2f6fe5a02c1d8559a3240888aa702496aa32c6b97b7a645f24525fa8f0b7d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2f6fe5a02c1d8559a3240888aa702496aa32c6b97b7a645f24525fa8f0b7d51->leave($__internal_e2f6fe5a02c1d8559a3240888aa702496aa32c6b97b7a645f24525fa8f0b7d51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_298348b00a131bd8e56cf14122726caa3f49a2a5e42a571b3d166453bca64904 = $this->env->getExtension("native_profiler");
        $__internal_298348b00a131bd8e56cf14122726caa3f49a2a5e42a571b3d166453bca64904->enter($__internal_298348b00a131bd8e56cf14122726caa3f49a2a5e42a571b3d166453bca64904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_298348b00a131bd8e56cf14122726caa3f49a2a5e42a571b3d166453bca64904->leave($__internal_298348b00a131bd8e56cf14122726caa3f49a2a5e42a571b3d166453bca64904_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
