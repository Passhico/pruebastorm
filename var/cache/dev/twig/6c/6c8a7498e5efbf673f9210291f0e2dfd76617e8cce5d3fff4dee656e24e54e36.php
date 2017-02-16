<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8b58d9a403fd7f1aa50b62cdd58f888adee752d72e966ddfd55f1c661208593 extends Twig_Template
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
        $__internal_ec1c1dcd09bb0ad4c75e7608e0ae254ddf962c581a8b2e0a01be5166791458e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1c1dcd09bb0ad4c75e7608e0ae254ddf962c581a8b2e0a01be5166791458e5->enter($__internal_ec1c1dcd09bb0ad4c75e7608e0ae254ddf962c581a8b2e0a01be5166791458e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_164d9e5e7b992fdb13714562516aec44bd946ad17e9a36d10804d3ba19888038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164d9e5e7b992fdb13714562516aec44bd946ad17e9a36d10804d3ba19888038->enter($__internal_164d9e5e7b992fdb13714562516aec44bd946ad17e9a36d10804d3ba19888038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ec1c1dcd09bb0ad4c75e7608e0ae254ddf962c581a8b2e0a01be5166791458e5->leave($__internal_ec1c1dcd09bb0ad4c75e7608e0ae254ddf962c581a8b2e0a01be5166791458e5_prof);

        
        $__internal_164d9e5e7b992fdb13714562516aec44bd946ad17e9a36d10804d3ba19888038->leave($__internal_164d9e5e7b992fdb13714562516aec44bd946ad17e9a36d10804d3ba19888038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
