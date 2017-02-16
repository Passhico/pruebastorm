<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_379190c5cdf040bfb89282dcbcc509c22f6cdf7960001c4656191e5c84cc28c3 extends Twig_Template
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
        $__internal_7a6e68dce940a634b6d13bbe7fb696a88045befa15a556a2cadf562b4c8e31f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6e68dce940a634b6d13bbe7fb696a88045befa15a556a2cadf562b4c8e31f6->enter($__internal_7a6e68dce940a634b6d13bbe7fb696a88045befa15a556a2cadf562b4c8e31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9131dbbb9e680c77525c4c362856fc6113667a6c4610326cd7ef5635e245f6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9131dbbb9e680c77525c4c362856fc6113667a6c4610326cd7ef5635e245f6ea->enter($__internal_9131dbbb9e680c77525c4c362856fc6113667a6c4610326cd7ef5635e245f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7a6e68dce940a634b6d13bbe7fb696a88045befa15a556a2cadf562b4c8e31f6->leave($__internal_7a6e68dce940a634b6d13bbe7fb696a88045befa15a556a2cadf562b4c8e31f6_prof);

        
        $__internal_9131dbbb9e680c77525c4c362856fc6113667a6c4610326cd7ef5635e245f6ea->leave($__internal_9131dbbb9e680c77525c4c362856fc6113667a6c4610326cd7ef5635e245f6ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
