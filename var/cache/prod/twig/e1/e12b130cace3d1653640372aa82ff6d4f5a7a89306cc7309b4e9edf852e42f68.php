<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_dd506f732f787ae56034dbfdf0d8123b82aff58d48bfabcb32a1435a09385dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "ESIEAPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEACoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        // line 12
        echo "<html>
   <body>
   \t

   \t
   </body>
 </html>
 ";
    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  39 => 11,  32 => 6,  29 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "";
    }
}
