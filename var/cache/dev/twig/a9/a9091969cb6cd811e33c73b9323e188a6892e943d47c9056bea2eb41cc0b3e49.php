<?php

/* ::base.html.twig */
class __TwigTemplate_948356f0d1829c4d3e116250a6535438f65482c08ae07524d862937528262fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fc8cd9608e3551fcf41774b319274231c2e64715a58065734536594a50c8dbe = $this->env->getExtension("native_profiler");
        $__internal_7fc8cd9608e3551fcf41774b319274231c2e64715a58065734536594a50c8dbe->enter($__internal_7fc8cd9608e3551fcf41774b319274231c2e64715a58065734536594a50c8dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7fc8cd9608e3551fcf41774b319274231c2e64715a58065734536594a50c8dbe->leave($__internal_7fc8cd9608e3551fcf41774b319274231c2e64715a58065734536594a50c8dbe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b1a40c10832f8d25a7e4ce74ba429263cd235a1c9403a1cdadd7d223d29794 = $this->env->getExtension("native_profiler");
        $__internal_36b1a40c10832f8d25a7e4ce74ba429263cd235a1c9403a1cdadd7d223d29794->enter($__internal_36b1a40c10832f8d25a7e4ce74ba429263cd235a1c9403a1cdadd7d223d29794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36b1a40c10832f8d25a7e4ce74ba429263cd235a1c9403a1cdadd7d223d29794->leave($__internal_36b1a40c10832f8d25a7e4ce74ba429263cd235a1c9403a1cdadd7d223d29794_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0929b84cb22ca834a09c5fbfdcbab0ba7a33ad369a5e5825018f055bac081003 = $this->env->getExtension("native_profiler");
        $__internal_0929b84cb22ca834a09c5fbfdcbab0ba7a33ad369a5e5825018f055bac081003->enter($__internal_0929b84cb22ca834a09c5fbfdcbab0ba7a33ad369a5e5825018f055bac081003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0929b84cb22ca834a09c5fbfdcbab0ba7a33ad369a5e5825018f055bac081003->leave($__internal_0929b84cb22ca834a09c5fbfdcbab0ba7a33ad369a5e5825018f055bac081003_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_501525bc4bffa61536ec147ff41d132dce0817913c779a864a32d6bbe12e6e71 = $this->env->getExtension("native_profiler");
        $__internal_501525bc4bffa61536ec147ff41d132dce0817913c779a864a32d6bbe12e6e71->enter($__internal_501525bc4bffa61536ec147ff41d132dce0817913c779a864a32d6bbe12e6e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_501525bc4bffa61536ec147ff41d132dce0817913c779a864a32d6bbe12e6e71->leave($__internal_501525bc4bffa61536ec147ff41d132dce0817913c779a864a32d6bbe12e6e71_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8df7241f99477f223d3225d5db7ee7a50543b22a9a7c004163301e0a47153eb = $this->env->getExtension("native_profiler");
        $__internal_a8df7241f99477f223d3225d5db7ee7a50543b22a9a7c004163301e0a47153eb->enter($__internal_a8df7241f99477f223d3225d5db7ee7a50543b22a9a7c004163301e0a47153eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8df7241f99477f223d3225d5db7ee7a50543b22a9a7c004163301e0a47153eb->leave($__internal_a8df7241f99477f223d3225d5db7ee7a50543b22a9a7c004163301e0a47153eb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
