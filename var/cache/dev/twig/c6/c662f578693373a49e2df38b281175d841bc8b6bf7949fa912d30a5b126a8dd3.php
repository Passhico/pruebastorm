<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e93e244241aa74f7b1bb9c64640364470f0d5fc5547f4c97ee98c8ef2fa5906b extends Twig_Template
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
        $__internal_314493b408cbccee92346d361fb3413c9e47b8332a506bc4ca63bd055c38b512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314493b408cbccee92346d361fb3413c9e47b8332a506bc4ca63bd055c38b512->enter($__internal_314493b408cbccee92346d361fb3413c9e47b8332a506bc4ca63bd055c38b512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d39fe4aa5db152409c2ab85f100e29ff473f1bd442538887d72e1f15d8dc02a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39fe4aa5db152409c2ab85f100e29ff473f1bd442538887d72e1f15d8dc02a4->enter($__internal_d39fe4aa5db152409c2ab85f100e29ff473f1bd442538887d72e1f15d8dc02a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_314493b408cbccee92346d361fb3413c9e47b8332a506bc4ca63bd055c38b512->leave($__internal_314493b408cbccee92346d361fb3413c9e47b8332a506bc4ca63bd055c38b512_prof);

        
        $__internal_d39fe4aa5db152409c2ab85f100e29ff473f1bd442538887d72e1f15d8dc02a4->leave($__internal_d39fe4aa5db152409c2ab85f100e29ff473f1bd442538887d72e1f15d8dc02a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
