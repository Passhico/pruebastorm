<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e96a5aa1e2f7381797e8d17d187ed19e5e2bafc1b940f42578421aaf124175ff extends Twig_Template
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
        $__internal_6f5ad19b99bb7801bce31c245031b71588fdbde1b8b1a4bb6fdeda311183962c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5ad19b99bb7801bce31c245031b71588fdbde1b8b1a4bb6fdeda311183962c->enter($__internal_6f5ad19b99bb7801bce31c245031b71588fdbde1b8b1a4bb6fdeda311183962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e38d8e6d15f0d07104b9e53ec2bc055ba61ba7c9ed74cd9e1ce3d7493e64268e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38d8e6d15f0d07104b9e53ec2bc055ba61ba7c9ed74cd9e1ce3d7493e64268e->enter($__internal_e38d8e6d15f0d07104b9e53ec2bc055ba61ba7c9ed74cd9e1ce3d7493e64268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6f5ad19b99bb7801bce31c245031b71588fdbde1b8b1a4bb6fdeda311183962c->leave($__internal_6f5ad19b99bb7801bce31c245031b71588fdbde1b8b1a4bb6fdeda311183962c_prof);

        
        $__internal_e38d8e6d15f0d07104b9e53ec2bc055ba61ba7c9ed74cd9e1ce3d7493e64268e->leave($__internal_e38d8e6d15f0d07104b9e53ec2bc055ba61ba7c9ed74cd9e1ce3d7493e64268e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
