<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6fa2d319849af131b36cd300e53481146c0fc8166ab8b78fe1934ee25d9bbd73 extends Twig_Template
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
        $__internal_5db845ebc87291c5336dc40266f4123df37e1884a6bbd8f2af06bb2cf39bf32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db845ebc87291c5336dc40266f4123df37e1884a6bbd8f2af06bb2cf39bf32a->enter($__internal_5db845ebc87291c5336dc40266f4123df37e1884a6bbd8f2af06bb2cf39bf32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_87ec7f9c9f96a4506946a5c557c2414d473574de96a65b8388d6c1e0847d3697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ec7f9c9f96a4506946a5c557c2414d473574de96a65b8388d6c1e0847d3697->enter($__internal_87ec7f9c9f96a4506946a5c557c2414d473574de96a65b8388d6c1e0847d3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5db845ebc87291c5336dc40266f4123df37e1884a6bbd8f2af06bb2cf39bf32a->leave($__internal_5db845ebc87291c5336dc40266f4123df37e1884a6bbd8f2af06bb2cf39bf32a_prof);

        
        $__internal_87ec7f9c9f96a4506946a5c557c2414d473574de96a65b8388d6c1e0847d3697->leave($__internal_87ec7f9c9f96a4506946a5c557c2414d473574de96a65b8388d6c1e0847d3697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
