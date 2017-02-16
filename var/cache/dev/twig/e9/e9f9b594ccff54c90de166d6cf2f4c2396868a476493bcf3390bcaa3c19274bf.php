<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_08bfde386115dd299aabb6d4f9657fa341293827ad3531d0344ef82ef1b8aa8e extends Twig_Template
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
        $__internal_5d342fb7ff4683660e41058ad85215c1e1d393042ef8664ff30999efaecc11ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d342fb7ff4683660e41058ad85215c1e1d393042ef8664ff30999efaecc11ad->enter($__internal_5d342fb7ff4683660e41058ad85215c1e1d393042ef8664ff30999efaecc11ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_efcdb55e4832ca8783601c4fdfc2acd78311f266c675941264f64957a1948e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcdb55e4832ca8783601c4fdfc2acd78311f266c675941264f64957a1948e97->enter($__internal_efcdb55e4832ca8783601c4fdfc2acd78311f266c675941264f64957a1948e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d342fb7ff4683660e41058ad85215c1e1d393042ef8664ff30999efaecc11ad->leave($__internal_5d342fb7ff4683660e41058ad85215c1e1d393042ef8664ff30999efaecc11ad_prof);

        
        $__internal_efcdb55e4832ca8783601c4fdfc2acd78311f266c675941264f64957a1948e97->leave($__internal_efcdb55e4832ca8783601c4fdfc2acd78311f266c675941264f64957a1948e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
