<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3d9e856520896d80a5c6d803fdc54da9f88b9ad9bc81e702b9a69888dc0f15d2 extends Twig_Template
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
        $__internal_e4cc5067ab7b98a6cfc8bc80b74d6b274af11db522b7e5675b7d327606d83c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cc5067ab7b98a6cfc8bc80b74d6b274af11db522b7e5675b7d327606d83c76->enter($__internal_e4cc5067ab7b98a6cfc8bc80b74d6b274af11db522b7e5675b7d327606d83c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_363ee8a1db787a015a16e446a9355145067e1778c91fdd527fd6e29f53c193dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363ee8a1db787a015a16e446a9355145067e1778c91fdd527fd6e29f53c193dc->enter($__internal_363ee8a1db787a015a16e446a9355145067e1778c91fdd527fd6e29f53c193dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e4cc5067ab7b98a6cfc8bc80b74d6b274af11db522b7e5675b7d327606d83c76->leave($__internal_e4cc5067ab7b98a6cfc8bc80b74d6b274af11db522b7e5675b7d327606d83c76_prof);

        
        $__internal_363ee8a1db787a015a16e446a9355145067e1778c91fdd527fd6e29f53c193dc->leave($__internal_363ee8a1db787a015a16e446a9355145067e1778c91fdd527fd6e29f53c193dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
