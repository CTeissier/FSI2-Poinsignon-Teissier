<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_01a6fc6c4441a776bf8d9da399557914e13cec6bf57df360d9440e25052e87e3 extends Twig_Template
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
        $__internal_db7d8f994cd2405f4010177dc368a86b711c20c08bcc09ab048a72ae0a0e596e = $this->env->getExtension("native_profiler");
        $__internal_db7d8f994cd2405f4010177dc368a86b711c20c08bcc09ab048a72ae0a0e596e->enter($__internal_db7d8f994cd2405f4010177dc368a86b711c20c08bcc09ab048a72ae0a0e596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_db7d8f994cd2405f4010177dc368a86b711c20c08bcc09ab048a72ae0a0e596e->leave($__internal_db7d8f994cd2405f4010177dc368a86b711c20c08bcc09ab048a72ae0a0e596e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
