<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb1f99f49ab51ce71b0a458621775534a3fa0a386148fcaeb41657da028551c6 extends Twig_Template
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
        $__internal_af8cc18fc5f6d488ad6daf571470d9c879aa23213d23bc2e0653c42fd24efe81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8cc18fc5f6d488ad6daf571470d9c879aa23213d23bc2e0653c42fd24efe81->enter($__internal_af8cc18fc5f6d488ad6daf571470d9c879aa23213d23bc2e0653c42fd24efe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b2e6985fe5ab095aebe704dd1da51b35e8356a6a5faa2f762fb46089f39ea16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e6985fe5ab095aebe704dd1da51b35e8356a6a5faa2f762fb46089f39ea16d->enter($__internal_b2e6985fe5ab095aebe704dd1da51b35e8356a6a5faa2f762fb46089f39ea16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_af8cc18fc5f6d488ad6daf571470d9c879aa23213d23bc2e0653c42fd24efe81->leave($__internal_af8cc18fc5f6d488ad6daf571470d9c879aa23213d23bc2e0653c42fd24efe81_prof);

        
        $__internal_b2e6985fe5ab095aebe704dd1da51b35e8356a6a5faa2f762fb46089f39ea16d->leave($__internal_b2e6985fe5ab095aebe704dd1da51b35e8356a6a5faa2f762fb46089f39ea16d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
