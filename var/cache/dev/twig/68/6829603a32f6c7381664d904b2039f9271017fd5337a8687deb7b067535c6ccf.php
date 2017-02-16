<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b0d5d880a24cc82359c48a6920bd0f10fc52a63912a2883b554ff9c7d88f634 extends Twig_Template
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
        $__internal_19dd12b79fa962b90760a3bee2bc63f8c20b646c1f0282054d3e8286f5337b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dd12b79fa962b90760a3bee2bc63f8c20b646c1f0282054d3e8286f5337b30->enter($__internal_19dd12b79fa962b90760a3bee2bc63f8c20b646c1f0282054d3e8286f5337b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8b809a834b4eca2e08212829755eb5369469e284f5132d3c8d9d4a52634afebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b809a834b4eca2e08212829755eb5369469e284f5132d3c8d9d4a52634afebf->enter($__internal_8b809a834b4eca2e08212829755eb5369469e284f5132d3c8d9d4a52634afebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_19dd12b79fa962b90760a3bee2bc63f8c20b646c1f0282054d3e8286f5337b30->leave($__internal_19dd12b79fa962b90760a3bee2bc63f8c20b646c1f0282054d3e8286f5337b30_prof);

        
        $__internal_8b809a834b4eca2e08212829755eb5369469e284f5132d3c8d9d4a52634afebf->leave($__internal_8b809a834b4eca2e08212829755eb5369469e284f5132d3c8d9d4a52634afebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
