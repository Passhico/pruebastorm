<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_253d3d756f45bdaa51bc5bd18db4e246c7b9e682ef7eda1a4609d4cc0a62e467 extends Twig_Template
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
        $__internal_450c59185d3970e0758abd840406a1f9ef6cd172b2a08acbea37827e9ab7d3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450c59185d3970e0758abd840406a1f9ef6cd172b2a08acbea37827e9ab7d3d2->enter($__internal_450c59185d3970e0758abd840406a1f9ef6cd172b2a08acbea37827e9ab7d3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_be835b47a55dbdcdc8b2c37cb682d55ce008cc82ec8b600343bcf87bd7184c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be835b47a55dbdcdc8b2c37cb682d55ce008cc82ec8b600343bcf87bd7184c83->enter($__internal_be835b47a55dbdcdc8b2c37cb682d55ce008cc82ec8b600343bcf87bd7184c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_450c59185d3970e0758abd840406a1f9ef6cd172b2a08acbea37827e9ab7d3d2->leave($__internal_450c59185d3970e0758abd840406a1f9ef6cd172b2a08acbea37827e9ab7d3d2_prof);

        
        $__internal_be835b47a55dbdcdc8b2c37cb682d55ce008cc82ec8b600343bcf87bd7184c83->leave($__internal_be835b47a55dbdcdc8b2c37cb682d55ce008cc82ec8b600343bcf87bd7184c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
