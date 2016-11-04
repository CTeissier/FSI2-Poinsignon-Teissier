<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_81f488cae29a812f2da487c36e30e9be681ba0b509a4ce656006a9ad0f10ee29 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\TwigBundle\\views\\Exception\\error404.html.twig");
    }
}
