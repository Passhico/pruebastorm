<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5bf8d28d8517d5ab10f2f4a61e972d5cb09ce1cecff06a51576d101bc3aeeaa7 extends Twig_Template
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
        $__internal_45c4ce35d18ad41af435ddd0ebb8ffee2c04eae93910913215f67005320f91f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c4ce35d18ad41af435ddd0ebb8ffee2c04eae93910913215f67005320f91f9->enter($__internal_45c4ce35d18ad41af435ddd0ebb8ffee2c04eae93910913215f67005320f91f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ffe304a941fa77b4c4205ef5861a7a4238c8719a9d80d4ac4681775f615e946f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe304a941fa77b4c4205ef5861a7a4238c8719a9d80d4ac4681775f615e946f->enter($__internal_ffe304a941fa77b4c4205ef5861a7a4238c8719a9d80d4ac4681775f615e946f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45c4ce35d18ad41af435ddd0ebb8ffee2c04eae93910913215f67005320f91f9->leave($__internal_45c4ce35d18ad41af435ddd0ebb8ffee2c04eae93910913215f67005320f91f9_prof);

        
        $__internal_ffe304a941fa77b4c4205ef5861a7a4238c8719a9d80d4ac4681775f615e946f->leave($__internal_ffe304a941fa77b4c4205ef5861a7a4238c8719a9d80d4ac4681775f615e946f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
