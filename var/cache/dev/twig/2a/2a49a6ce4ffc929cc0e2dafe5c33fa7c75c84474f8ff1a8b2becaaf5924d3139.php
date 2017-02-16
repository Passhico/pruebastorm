<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_73ba59c048b21ff758756d1dda142f7796c005c4654d50e8ea977e982dc3b0cd extends Twig_Template
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
        $__internal_b97606ba23b5f7f86b4ac67e27c53a60bbeca332477a725bcf079fa9e5aaaf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97606ba23b5f7f86b4ac67e27c53a60bbeca332477a725bcf079fa9e5aaaf09->enter($__internal_b97606ba23b5f7f86b4ac67e27c53a60bbeca332477a725bcf079fa9e5aaaf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6305934bddf9802965ddb31c2a2fb8cb3221d05480323e1badeddacca5681b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6305934bddf9802965ddb31c2a2fb8cb3221d05480323e1badeddacca5681b25->enter($__internal_6305934bddf9802965ddb31c2a2fb8cb3221d05480323e1badeddacca5681b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b97606ba23b5f7f86b4ac67e27c53a60bbeca332477a725bcf079fa9e5aaaf09->leave($__internal_b97606ba23b5f7f86b4ac67e27c53a60bbeca332477a725bcf079fa9e5aaaf09_prof);

        
        $__internal_6305934bddf9802965ddb31c2a2fb8cb3221d05480323e1badeddacca5681b25->leave($__internal_6305934bddf9802965ddb31c2a2fb8cb3221d05480323e1badeddacca5681b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
