<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_47da10ef6d250fa774b05e53912038d0ea137160a8c1aa2a30f29030a3647d8e extends Twig_Template
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
        $__internal_d1b818bf6b670688f564ea53d197003669be289411dfece16f794290280b74a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b818bf6b670688f564ea53d197003669be289411dfece16f794290280b74a5->enter($__internal_d1b818bf6b670688f564ea53d197003669be289411dfece16f794290280b74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fe3f1ff53ce939b55b33cc7cea6040d759c451f256ef0bc8cd74b1570a05a58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3f1ff53ce939b55b33cc7cea6040d759c451f256ef0bc8cd74b1570a05a58a->enter($__internal_fe3f1ff53ce939b55b33cc7cea6040d759c451f256ef0bc8cd74b1570a05a58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d1b818bf6b670688f564ea53d197003669be289411dfece16f794290280b74a5->leave($__internal_d1b818bf6b670688f564ea53d197003669be289411dfece16f794290280b74a5_prof);

        
        $__internal_fe3f1ff53ce939b55b33cc7cea6040d759c451f256ef0bc8cd74b1570a05a58a->leave($__internal_fe3f1ff53ce939b55b33cc7cea6040d759c451f256ef0bc8cd74b1570a05a58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
