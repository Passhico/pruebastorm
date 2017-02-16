<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1c12fca0c39681d7dc69828c68570ce9d59e0f2e5484fe91e4f181833dde4259 extends Twig_Template
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
        $__internal_e46c0ff6dbaca4156bed66a83c95e82be7eed6ab23537c2e2eb520e1b210073e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c0ff6dbaca4156bed66a83c95e82be7eed6ab23537c2e2eb520e1b210073e->enter($__internal_e46c0ff6dbaca4156bed66a83c95e82be7eed6ab23537c2e2eb520e1b210073e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ce3aec3c4be4df5c32732323821e11d603d48b1079362b8caf137cf17c80d0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3aec3c4be4df5c32732323821e11d603d48b1079362b8caf137cf17c80d0ad->enter($__internal_ce3aec3c4be4df5c32732323821e11d603d48b1079362b8caf137cf17c80d0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e46c0ff6dbaca4156bed66a83c95e82be7eed6ab23537c2e2eb520e1b210073e->leave($__internal_e46c0ff6dbaca4156bed66a83c95e82be7eed6ab23537c2e2eb520e1b210073e_prof);

        
        $__internal_ce3aec3c4be4df5c32732323821e11d603d48b1079362b8caf137cf17c80d0ad->leave($__internal_ce3aec3c4be4df5c32732323821e11d603d48b1079362b8caf137cf17c80d0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
