<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_26eada4a8ea7a9608342beebdf7bb239062be96dae4ac006a01f02b0664c0eda extends Twig_Template
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
        $__internal_1b30d4cb923a3827588a970f9a87ba310c2addfadca989d364a41ccf3d8cd800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b30d4cb923a3827588a970f9a87ba310c2addfadca989d364a41ccf3d8cd800->enter($__internal_1b30d4cb923a3827588a970f9a87ba310c2addfadca989d364a41ccf3d8cd800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0add7b682741cda525bff3f8a9a194e538afdb592f3f3f5210354b05ee5a4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0add7b682741cda525bff3f8a9a194e538afdb592f3f3f5210354b05ee5a4c27->enter($__internal_0add7b682741cda525bff3f8a9a194e538afdb592f3f3f5210354b05ee5a4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1b30d4cb923a3827588a970f9a87ba310c2addfadca989d364a41ccf3d8cd800->leave($__internal_1b30d4cb923a3827588a970f9a87ba310c2addfadca989d364a41ccf3d8cd800_prof);

        
        $__internal_0add7b682741cda525bff3f8a9a194e538afdb592f3f3f5210354b05ee5a4c27->leave($__internal_0add7b682741cda525bff3f8a9a194e538afdb592f3f3f5210354b05ee5a4c27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
