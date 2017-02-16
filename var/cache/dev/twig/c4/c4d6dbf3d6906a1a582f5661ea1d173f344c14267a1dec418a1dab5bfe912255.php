<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0df2babeab86c70fe513f539f60e4fcccf6b8453a8fc36215f2065922b825e70 extends Twig_Template
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
        $__internal_4fea1be3b9946f25b9e61cdbf908f70baa18503aef24fadd9c43fb1c0a819d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fea1be3b9946f25b9e61cdbf908f70baa18503aef24fadd9c43fb1c0a819d51->enter($__internal_4fea1be3b9946f25b9e61cdbf908f70baa18503aef24fadd9c43fb1c0a819d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b2c58fd14cfa06dfc84837be0f6b411f75d31e61f3e6830ae6dbbc3786512e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c58fd14cfa06dfc84837be0f6b411f75d31e61f3e6830ae6dbbc3786512e46->enter($__internal_b2c58fd14cfa06dfc84837be0f6b411f75d31e61f3e6830ae6dbbc3786512e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4fea1be3b9946f25b9e61cdbf908f70baa18503aef24fadd9c43fb1c0a819d51->leave($__internal_4fea1be3b9946f25b9e61cdbf908f70baa18503aef24fadd9c43fb1c0a819d51_prof);

        
        $__internal_b2c58fd14cfa06dfc84837be0f6b411f75d31e61f3e6830ae6dbbc3786512e46->leave($__internal_b2c58fd14cfa06dfc84837be0f6b411f75d31e61f3e6830ae6dbbc3786512e46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
