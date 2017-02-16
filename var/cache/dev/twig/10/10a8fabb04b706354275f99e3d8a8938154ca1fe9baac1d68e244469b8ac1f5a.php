<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f696b73d31cfee365e3dfb14b3f2fbf17163b3ccfd3147e89dcc1c20fd5df3d extends Twig_Template
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
        $__internal_6c042f5a9b0b3f830921a865cc808901c813f283f60f81563fd92b6343e47536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c042f5a9b0b3f830921a865cc808901c813f283f60f81563fd92b6343e47536->enter($__internal_6c042f5a9b0b3f830921a865cc808901c813f283f60f81563fd92b6343e47536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_43b797c08085de0666a35cd04c350358831fb26e9e9a8bd90c639b392f41b9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b797c08085de0666a35cd04c350358831fb26e9e9a8bd90c639b392f41b9a3->enter($__internal_43b797c08085de0666a35cd04c350358831fb26e9e9a8bd90c639b392f41b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6c042f5a9b0b3f830921a865cc808901c813f283f60f81563fd92b6343e47536->leave($__internal_6c042f5a9b0b3f830921a865cc808901c813f283f60f81563fd92b6343e47536_prof);

        
        $__internal_43b797c08085de0666a35cd04c350358831fb26e9e9a8bd90c639b392f41b9a3->leave($__internal_43b797c08085de0666a35cd04c350358831fb26e9e9a8bd90c639b392f41b9a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
