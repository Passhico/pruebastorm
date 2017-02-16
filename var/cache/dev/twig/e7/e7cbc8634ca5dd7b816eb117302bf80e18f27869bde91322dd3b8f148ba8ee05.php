<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_23915e2a0d9b277758bbbc4910bd566573e79d443fb0376c2eeedae111bfe8a1 extends Twig_Template
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
        $__internal_fe10a8426fb134f56c7c7006afbbc1e024576bf4dfb1f30a603cc9fddf4275fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe10a8426fb134f56c7c7006afbbc1e024576bf4dfb1f30a603cc9fddf4275fa->enter($__internal_fe10a8426fb134f56c7c7006afbbc1e024576bf4dfb1f30a603cc9fddf4275fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_25b56153d953d16ee5636a95fb722dd99a64171734b819273fd131e94268c9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b56153d953d16ee5636a95fb722dd99a64171734b819273fd131e94268c9f6->enter($__internal_25b56153d953d16ee5636a95fb722dd99a64171734b819273fd131e94268c9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe10a8426fb134f56c7c7006afbbc1e024576bf4dfb1f30a603cc9fddf4275fa->leave($__internal_fe10a8426fb134f56c7c7006afbbc1e024576bf4dfb1f30a603cc9fddf4275fa_prof);

        
        $__internal_25b56153d953d16ee5636a95fb722dd99a64171734b819273fd131e94268c9f6->leave($__internal_25b56153d953d16ee5636a95fb722dd99a64171734b819273fd131e94268c9f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
