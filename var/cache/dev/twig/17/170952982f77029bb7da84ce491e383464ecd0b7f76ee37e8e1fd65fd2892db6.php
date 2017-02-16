<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7b58ba1fd522ff0de8f186da8683ee1241a935d60475a869c88fc2a107274426 extends Twig_Template
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
        $__internal_5249f0f536befb54bf176b0bc62ffb940716a7756123846a9de75711bc162478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5249f0f536befb54bf176b0bc62ffb940716a7756123846a9de75711bc162478->enter($__internal_5249f0f536befb54bf176b0bc62ffb940716a7756123846a9de75711bc162478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8ff3e857b61e2cede25dc72e0e584d783552cc518fcd0ff5e2668281c419e803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff3e857b61e2cede25dc72e0e584d783552cc518fcd0ff5e2668281c419e803->enter($__internal_8ff3e857b61e2cede25dc72e0e584d783552cc518fcd0ff5e2668281c419e803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5249f0f536befb54bf176b0bc62ffb940716a7756123846a9de75711bc162478->leave($__internal_5249f0f536befb54bf176b0bc62ffb940716a7756123846a9de75711bc162478_prof);

        
        $__internal_8ff3e857b61e2cede25dc72e0e584d783552cc518fcd0ff5e2668281c419e803->leave($__internal_8ff3e857b61e2cede25dc72e0e584d783552cc518fcd0ff5e2668281c419e803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
