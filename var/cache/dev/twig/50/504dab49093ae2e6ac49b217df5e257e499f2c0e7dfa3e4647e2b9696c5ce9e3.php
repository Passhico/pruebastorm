<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_95dbbded481a5c1142dd486faae7ea4679dd00e4ba17d38ee16dc820f1a4ea17 extends Twig_Template
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
        $__internal_c1aad688f8a30adf0f644ab6cfc9064e6be2b5db9e4f31e48707b3a316cce4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1aad688f8a30adf0f644ab6cfc9064e6be2b5db9e4f31e48707b3a316cce4f1->enter($__internal_c1aad688f8a30adf0f644ab6cfc9064e6be2b5db9e4f31e48707b3a316cce4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_03e246bc267d4d78fbb187680be7aaca3442f732293de9a28726ebba93657174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e246bc267d4d78fbb187680be7aaca3442f732293de9a28726ebba93657174->enter($__internal_03e246bc267d4d78fbb187680be7aaca3442f732293de9a28726ebba93657174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c1aad688f8a30adf0f644ab6cfc9064e6be2b5db9e4f31e48707b3a316cce4f1->leave($__internal_c1aad688f8a30adf0f644ab6cfc9064e6be2b5db9e4f31e48707b3a316cce4f1_prof);

        
        $__internal_03e246bc267d4d78fbb187680be7aaca3442f732293de9a28726ebba93657174->leave($__internal_03e246bc267d4d78fbb187680be7aaca3442f732293de9a28726ebba93657174_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
