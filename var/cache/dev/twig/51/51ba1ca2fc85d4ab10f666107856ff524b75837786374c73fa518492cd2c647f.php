<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c9e473a0518340c5feb68f2005420e8992a530659a581b33b60e804859f410c1 extends Twig_Template
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
        $__internal_54736bba050661b316cb4abf7a80132ca399d7dec9b6dded45c3c28ee0669fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54736bba050661b316cb4abf7a80132ca399d7dec9b6dded45c3c28ee0669fc3->enter($__internal_54736bba050661b316cb4abf7a80132ca399d7dec9b6dded45c3c28ee0669fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_748e60b18d3ccc6443a8c0da646022d887b1d0537f923434bca51ea5dc13f6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748e60b18d3ccc6443a8c0da646022d887b1d0537f923434bca51ea5dc13f6b4->enter($__internal_748e60b18d3ccc6443a8c0da646022d887b1d0537f923434bca51ea5dc13f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_54736bba050661b316cb4abf7a80132ca399d7dec9b6dded45c3c28ee0669fc3->leave($__internal_54736bba050661b316cb4abf7a80132ca399d7dec9b6dded45c3c28ee0669fc3_prof);

        
        $__internal_748e60b18d3ccc6443a8c0da646022d887b1d0537f923434bca51ea5dc13f6b4->leave($__internal_748e60b18d3ccc6443a8c0da646022d887b1d0537f923434bca51ea5dc13f6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
