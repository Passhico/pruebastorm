<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_38d80ba4d22f11ab5771f1a140a698a93081f16c40ec8e323545a08ae123c8e2 extends Twig_Template
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
        $__internal_614a17546c4d33f19e13164237ff7dc4f60906d841e8c7ceec768ca1b27cb278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614a17546c4d33f19e13164237ff7dc4f60906d841e8c7ceec768ca1b27cb278->enter($__internal_614a17546c4d33f19e13164237ff7dc4f60906d841e8c7ceec768ca1b27cb278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_91165084e9a7f3b848ed37c45734cf9a9694b558f1085cbe9e878635e6f22583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91165084e9a7f3b848ed37c45734cf9a9694b558f1085cbe9e878635e6f22583->enter($__internal_91165084e9a7f3b848ed37c45734cf9a9694b558f1085cbe9e878635e6f22583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_614a17546c4d33f19e13164237ff7dc4f60906d841e8c7ceec768ca1b27cb278->leave($__internal_614a17546c4d33f19e13164237ff7dc4f60906d841e8c7ceec768ca1b27cb278_prof);

        
        $__internal_91165084e9a7f3b848ed37c45734cf9a9694b558f1085cbe9e878635e6f22583->leave($__internal_91165084e9a7f3b848ed37c45734cf9a9694b558f1085cbe9e878635e6f22583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
