<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cbb4de55c5c49ec02909d1af96a9de69e93d8107f8a57c9c1cecf6e3a292305 extends Twig_Template
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
        $__internal_58d6d3470dc092fa12701d3ad995ef35bdec49c87b2a2a4073ca4f6def278105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d6d3470dc092fa12701d3ad995ef35bdec49c87b2a2a4073ca4f6def278105->enter($__internal_58d6d3470dc092fa12701d3ad995ef35bdec49c87b2a2a4073ca4f6def278105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6435f3defdb95c4c5311c3d7a33ccdbf4f26a0eff1097e0a81f8ce35dd9f408a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6435f3defdb95c4c5311c3d7a33ccdbf4f26a0eff1097e0a81f8ce35dd9f408a->enter($__internal_6435f3defdb95c4c5311c3d7a33ccdbf4f26a0eff1097e0a81f8ce35dd9f408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_58d6d3470dc092fa12701d3ad995ef35bdec49c87b2a2a4073ca4f6def278105->leave($__internal_58d6d3470dc092fa12701d3ad995ef35bdec49c87b2a2a4073ca4f6def278105_prof);

        
        $__internal_6435f3defdb95c4c5311c3d7a33ccdbf4f26a0eff1097e0a81f8ce35dd9f408a->leave($__internal_6435f3defdb95c4c5311c3d7a33ccdbf4f26a0eff1097e0a81f8ce35dd9f408a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
