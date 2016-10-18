<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_21213f904ae2ff688ed44ca6474dc141ccae8e817f49359f5e24e96b4f985582 extends Twig_Template
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
        $__internal_2e58f9ec2b2a38273c53a70b8eb68f9ee00dcba32c088755fc5666fd3b9de6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e58f9ec2b2a38273c53a70b8eb68f9ee00dcba32c088755fc5666fd3b9de6b1->enter($__internal_2e58f9ec2b2a38273c53a70b8eb68f9ee00dcba32c088755fc5666fd3b9de6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ".</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>";
        
        $__internal_2e58f9ec2b2a38273c53a70b8eb68f9ee00dcba32c088755fc5666fd3b9de6b1->leave($__internal_2e58f9ec2b2a38273c53a70b8eb68f9ee00dcba32c088755fc5666fd3b9de6b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Erreur : {{ status_text }}</title>
  </head>
<body>
  <h1>Oops! Une erreur s'est produite durant le chargement de la page</h1>

  <h2>Notre application a retourné une erreur {{ status_code }} : {{ status_text }}.</h2>

  <div>
    N'hésitez pas à contacter le webmaster du site pour corrger l'erreur.
  </div>
</body>
</html>";
    }
}
