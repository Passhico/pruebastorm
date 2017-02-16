<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4189c65ce478f02648c856d42e2cc116789a3f4bf79bff053b3c51c6d303c06 extends Twig_Template
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
        $__internal_3d15bee0474b9d78eae7488480aad0e54bb7a4be4092eb800371dcd8a499bdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d15bee0474b9d78eae7488480aad0e54bb7a4be4092eb800371dcd8a499bdf2->enter($__internal_3d15bee0474b9d78eae7488480aad0e54bb7a4be4092eb800371dcd8a499bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c35f7eb063730e87c63385d58cb2bd2fff50e904afca83888689db981dd8071f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35f7eb063730e87c63385d58cb2bd2fff50e904afca83888689db981dd8071f->enter($__internal_c35f7eb063730e87c63385d58cb2bd2fff50e904afca83888689db981dd8071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3d15bee0474b9d78eae7488480aad0e54bb7a4be4092eb800371dcd8a499bdf2->leave($__internal_3d15bee0474b9d78eae7488480aad0e54bb7a4be4092eb800371dcd8a499bdf2_prof);

        
        $__internal_c35f7eb063730e87c63385d58cb2bd2fff50e904afca83888689db981dd8071f->leave($__internal_c35f7eb063730e87c63385d58cb2bd2fff50e904afca83888689db981dd8071f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
