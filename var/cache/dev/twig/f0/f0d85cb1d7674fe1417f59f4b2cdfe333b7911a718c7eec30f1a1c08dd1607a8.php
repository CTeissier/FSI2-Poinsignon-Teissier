<?php

/* ESIEAPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9daab94fc73dbafe00f9b19360185056658f2d03daa9f9e1d065aa8cc96df334 extends Twig_Template
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
        $__internal_f1d3b5abe98de504b0dffefa6b8f0073bbda5bb53e376f3736d16f79afabb948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d3b5abe98de504b0dffefa6b8f0073bbda5bb53e376f3736d16f79afabb948->enter($__internal_f1d3b5abe98de504b0dffefa6b8f0073bbda5bb53e376f3736d16f79afabb948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "<html>

 





<div style=\"text-align: left\">
      ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
   
      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      ";
        // line 15
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 16
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
            echo "
      ";
        }
        // line 18
        echo "      ";
        // line 19
        echo "     
      <!--Auteur-->    
      <br> 
      ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
     </br>
      <!--Nom de recette-->
      <div><br>
         ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom de votre recette"));
        echo "
         ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      </br>
      </div>


      <!--Description de la recette-->
        <br>
            ";
        // line 35
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </br>
      
     
      <!-- Contenu de l'annonce-->
      <br>
         ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Décrivez votre recette"));
        echo "
      </br>   



         ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "


         <br>
       
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
       
      </br>
      <!--Condition utilisation-->
      
   <center>
 
      ";
        // line 58
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 59
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
            echo "
      
      ";
        }
        // line 62
        echo "  

      
   
      <font color=\"black\">";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "</font>

      ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
      ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
      ";
        // line 70
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   
     
      
     
      ";
        // line 77
        echo "
      

  </center>
   </div>


";
        
        $__internal_f1d3b5abe98de504b0dffefa6b8f0073bbda5bb53e376f3736d16f79afabb948->leave($__internal_f1d3b5abe98de504b0dffefa6b8f0073bbda5bb53e376f3736d16f79afabb948_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 77,  143 => 70,  139 => 69,  135 => 68,  130 => 66,  124 => 62,  117 => 59,  115 => 58,  105 => 51,  97 => 46,  89 => 41,  79 => 35,  69 => 27,  65 => 26,  58 => 22,  53 => 19,  51 => 18,  45 => 16,  42 => 15,  38 => 13,  33 => 11,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ESIEA/PlatformBundle/Resources/views/Advert/form.html.twig #}
<html>

 





<div style=\"text-align: left\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
   
      {{ form_errors(form) }}
      {# Génération du label + error + widget pour un champ. #}
      {% if form.date is defined %}
      {{ form_row(form.date) }}
      {% endif %}
      {# Génération manuelle et éclatée : #}
     
      <!--Auteur-->    
      <br> 
      {{ form_row(form.author) }}
     </br>
      <!--Nom de recette-->
      <div><br>
         {{ form_label(form.title, \"Nom de votre recette\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
         {{ form_errors(form.title) }}
      </br>
      </div>


      <!--Description de la recette-->
        <br>
            {# Génération de l'input. #}
            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
      </br>
      
     
      <!-- Contenu de l'annonce-->
      <br>
         {{ form_label(form.content, \"Décrivez votre recette\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
      </br>   



         {{ form_errors(form.title) }}


         <br>
       
            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
       
      </br>
      <!--Condition utilisation-->
      
   <center>
 
      {% if form.published is defined %}
      {{ form_row(form.published) }}
      
      {% endif %}
  

      
   
      <font color=\"black\">{{ form_row(form.image) }}</font>

      {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
      {{ form_rest(form) }}
      {{ form_end(form) }}

   
     
      
     
      {# Bouton de sauvegarde #}

      

  </center>
   </div>


", "ESIEAPlatformBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
