<?php

/* ESIEAPlatformBundle:Advert:faq.html.twig */
class __TwigTemplate_0aac9bd9dfeeb356a5ba0f18e25b5564a43dd3b36a0f6e3f8a777432937f9855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

 ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "

      ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "   </head>
 

     

<!-- FAQ Section -->
    <section id=\"faq\" class=\"container content-section text-center\">
        <div class=\"col-8\">
            <div class=\"faq--content\">
                <h3 class=\"mbottom30\">À propos de nous</h3>
                

                <div class=\"static--content-section\">
                    <h4><a >Qui sommes-nous ?</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor dui eleifend velit fringilla semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dapibus luctus mollis. Donec semper diam rhoncus risus rhoncus, in molestie lectus dignissim. Proin massa leo, tincidunt ac eros at, cursus varius diam. Etiam posuere feugiat elit, et sodales nisi rhoncus eget. Etiam interdum elit in turpis iaculis faucibus. Praesent blandit lectus tortor, in rhoncus sapien placerat id. Fusce vel purus vel libero varius efficitur. Etiam iaculis commodo mi, ut sodales urna imperdiet in. Vivamus a velit tempor, ullamcorper ex bibendum, laoreet ex. Cras tincidunt sem vel diam sodales ornare. Morbi blandit turpis nec nisl facilisis laoreet. Nulla molestie neque eget tincidunt egestas.</p>
                </div>
                

                <div class=\"static--content-section\">
                    <h4><a name=\"story\">Pourquoi ESI_EATS ?</a></h4>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor dui eleifend velit fringilla semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dapibus luctus mollis. Donec semper diam rhoncus risus rhoncus, in molestie lectus dignissim. Proin massa leo, tincidunt ac eros at, cursus varius diam. Etiam posuere feugiat elit, et sodales nisi rhoncus eget. Etiam interdum elit in turpis iaculis faucibus. Praesent blandit lectus tortor, in rhoncus sapien placerat id. Fusce vel purus vel libero varius efficitur. Etiam iaculis commodo mi, ut sodales urna imperdiet in. Vivamus a velit tempor, ullamcorper ex bibendum, laoreet ex. Cras tincidunt sem vel diam sodales ornare. Morbi blandit turpis nec nisl facilisis laoreet. Nulla molestie neque eget tincidunt egestas.</p>
                </div>
                <h3 class=\"mbottom30\">Commander sur ESI_EATS</h3>
                <div class=\"static--content-section\">
                  <h4><a name=\"howdoesitwork\">Comment ça marche ?</a></h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor dui eleifend velit fringilla semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dapibus luctus mollis. Donec semper diam rhoncus risus rhoncus, in molestie lectus dignissim. Proin massa leo, tincidunt ac eros at, cursus varius diam. Etiam posuere feugiat elit, et sodales nisi rhoncus eget. Etiam interdum elit in turpis iaculis faucibus. Praesent blandit lectus tortor, in rhoncus sapien placerat id. Fusce vel purus vel libero varius efficitur. Etiam iaculis commodo mi, ut sodales urna imperdiet in. Vivamus a velit tempor, ullamcorper ex bibendum, laoreet ex. Cras tincidunt sem vel diam sodales ornare. Morbi blandit turpis nec nisl facilisis laoreet. Nulla molestie neque eget tincidunt egestas.</p>
                </div>

                <div class=\"static--content-section\">
                  <h4><a name=\"howdoesitwork\">Paiement & livraison</a></h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor dui eleifend velit fringilla semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dapibus luctus mollis. Donec semper diam rhoncus risus rhoncus, in molestie lectus dignissim. Proin massa leo, tincidunt ac eros at, cursus varius diam. Etiam posuere feugiat elit, et sodales nisi rhoncus eget. Etiam interdum elit in turpis iaculis faucibus. Praesent blandit lectus tortor, in rhoncus sapien placerat id. Fusce vel purus vel libero varius efficitur. Etiam iaculis commodo mi, ut sodales urna imperdiet in. Vivamus a velit tempor, ullamcorper ex bibendum, laoreet ex. Cras tincidunt sem vel diam sodales ornare. Morbi blandit turpis nec nisl facilisis laoreet. Nulla molestie neque eget tincidunt egestas.</p>
                </div>
                
        </div>
    </section>

    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESIEA Plateforme";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      ";
        // line 11
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa_demo_1.css");
            // line 14
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa.css");
            // line 14
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "      ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  130 => 59,  127 => 57,  123 => 20,  116 => 17,  111 => 14,  103 => 17,  98 => 14,  93 => 11,  91 => 10,  88 => 9,  82 => 5,  78 => 57,  40 => 21,  38 => 9,  33 => 7,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
