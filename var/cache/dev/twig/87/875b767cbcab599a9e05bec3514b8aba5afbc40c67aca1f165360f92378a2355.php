<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_598e7b25429f8f8d4dc664ad92b043c95c3f0be411c7f13cec64efd1f3b24064 extends Twig_Template
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
        $__internal_e567801a21496837c6ea4104865d83096b5a19a66f94215a1dd046a38fac4d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e567801a21496837c6ea4104865d83096b5a19a66f94215a1dd046a38fac4d38->enter($__internal_e567801a21496837c6ea4104865d83096b5a19a66f94215a1dd046a38fac4d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7c36e49fdc8256252b8bbdf1ce87c4a24d90c6f7589e7a3bae045e598fdda575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c36e49fdc8256252b8bbdf1ce87c4a24d90c6f7589e7a3bae045e598fdda575->enter($__internal_7c36e49fdc8256252b8bbdf1ce87c4a24d90c6f7589e7a3bae045e598fdda575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e567801a21496837c6ea4104865d83096b5a19a66f94215a1dd046a38fac4d38->leave($__internal_e567801a21496837c6ea4104865d83096b5a19a66f94215a1dd046a38fac4d38_prof);

        
        $__internal_7c36e49fdc8256252b8bbdf1ce87c4a24d90c6f7589e7a3bae045e598fdda575->leave($__internal_7c36e49fdc8256252b8bbdf1ce87c4a24d90c6f7589e7a3bae045e598fdda575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
