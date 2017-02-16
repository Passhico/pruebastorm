<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c5bc807a5f0915bb481b48ff9b5d01f326abccf50d46f2fce9a85e7d1e70c65 extends Twig_Template
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
        $__internal_1349d6e825ebc5f206163d846f7a3885f90b05be8076600299c3c13aff53aa1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1349d6e825ebc5f206163d846f7a3885f90b05be8076600299c3c13aff53aa1b->enter($__internal_1349d6e825ebc5f206163d846f7a3885f90b05be8076600299c3c13aff53aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_10ddb83abf5fce84eaaaa4162eeee6c66f91f6cc47139fc6d593dac5d848017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ddb83abf5fce84eaaaa4162eeee6c66f91f6cc47139fc6d593dac5d848017d->enter($__internal_10ddb83abf5fce84eaaaa4162eeee6c66f91f6cc47139fc6d593dac5d848017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1349d6e825ebc5f206163d846f7a3885f90b05be8076600299c3c13aff53aa1b->leave($__internal_1349d6e825ebc5f206163d846f7a3885f90b05be8076600299c3c13aff53aa1b_prof);

        
        $__internal_10ddb83abf5fce84eaaaa4162eeee6c66f91f6cc47139fc6d593dac5d848017d->leave($__internal_10ddb83abf5fce84eaaaa4162eeee6c66f91f6cc47139fc6d593dac5d848017d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
