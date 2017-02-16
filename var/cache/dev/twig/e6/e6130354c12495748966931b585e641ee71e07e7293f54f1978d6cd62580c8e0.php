<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bec3b99b773591b13c990a763babc4d2b660792b571350ecebe5826a7668d62a extends Twig_Template
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
        $__internal_e8d59b97958e15f7f27bbfbe187464bab4685da652cc41407a47f563c3f46125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d59b97958e15f7f27bbfbe187464bab4685da652cc41407a47f563c3f46125->enter($__internal_e8d59b97958e15f7f27bbfbe187464bab4685da652cc41407a47f563c3f46125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_753a32f4c9c8074a6c8614870aac81abd0cb5c7f3d2ca002f0d0b3b67b3811dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753a32f4c9c8074a6c8614870aac81abd0cb5c7f3d2ca002f0d0b3b67b3811dc->enter($__internal_753a32f4c9c8074a6c8614870aac81abd0cb5c7f3d2ca002f0d0b3b67b3811dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e8d59b97958e15f7f27bbfbe187464bab4685da652cc41407a47f563c3f46125->leave($__internal_e8d59b97958e15f7f27bbfbe187464bab4685da652cc41407a47f563c3f46125_prof);

        
        $__internal_753a32f4c9c8074a6c8614870aac81abd0cb5c7f3d2ca002f0d0b3b67b3811dc->leave($__internal_753a32f4c9c8074a6c8614870aac81abd0cb5c7f3d2ca002f0d0b3b67b3811dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
