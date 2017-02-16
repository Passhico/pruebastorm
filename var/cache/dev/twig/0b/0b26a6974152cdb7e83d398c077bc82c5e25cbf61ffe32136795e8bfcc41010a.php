<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8f08070940b321f9bd55e7f622408db9dfedacc2575dc2688e7749980a930a79 extends Twig_Template
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
        $__internal_b915363eaabf9ad32984468e9459f139d5051d792eacf53d34b6baef04d44d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b915363eaabf9ad32984468e9459f139d5051d792eacf53d34b6baef04d44d4a->enter($__internal_b915363eaabf9ad32984468e9459f139d5051d792eacf53d34b6baef04d44d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5be6cc461d6046975decc08fe3670e78581a0ac9b4b58c6769e1dce3038e5100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be6cc461d6046975decc08fe3670e78581a0ac9b4b58c6769e1dce3038e5100->enter($__internal_5be6cc461d6046975decc08fe3670e78581a0ac9b4b58c6769e1dce3038e5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b915363eaabf9ad32984468e9459f139d5051d792eacf53d34b6baef04d44d4a->leave($__internal_b915363eaabf9ad32984468e9459f139d5051d792eacf53d34b6baef04d44d4a_prof);

        
        $__internal_5be6cc461d6046975decc08fe3670e78581a0ac9b4b58c6769e1dce3038e5100->leave($__internal_5be6cc461d6046975decc08fe3670e78581a0ac9b4b58c6769e1dce3038e5100_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
