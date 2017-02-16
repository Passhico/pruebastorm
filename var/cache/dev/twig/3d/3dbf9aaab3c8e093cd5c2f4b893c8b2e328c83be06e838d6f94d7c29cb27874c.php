<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22f3a65ee96c06e042ec1cd4ab29c8c36d728429225e3dcada3ecda10a89d83e extends Twig_Template
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
        $__internal_8f7c1d176266ebac0befabc218815a7849946ffacf866d3e277a9116e5b8d21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7c1d176266ebac0befabc218815a7849946ffacf866d3e277a9116e5b8d21d->enter($__internal_8f7c1d176266ebac0befabc218815a7849946ffacf866d3e277a9116e5b8d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_08b60c032c9b59ce5c6046b5349684384cf650e5e29f5699dbcf28ee7e1378fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b60c032c9b59ce5c6046b5349684384cf650e5e29f5699dbcf28ee7e1378fb->enter($__internal_08b60c032c9b59ce5c6046b5349684384cf650e5e29f5699dbcf28ee7e1378fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8f7c1d176266ebac0befabc218815a7849946ffacf866d3e277a9116e5b8d21d->leave($__internal_8f7c1d176266ebac0befabc218815a7849946ffacf866d3e277a9116e5b8d21d_prof);

        
        $__internal_08b60c032c9b59ce5c6046b5349684384cf650e5e29f5699dbcf28ee7e1378fb->leave($__internal_08b60c032c9b59ce5c6046b5349684384cf650e5e29f5699dbcf28ee7e1378fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
