<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6ae024c41279d8423aae664a0b86bfcfe567c2110059207f73d44b01d72f73e0 extends Twig_Template
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
        $__internal_0db3f881701d9fb94f166d8481038413107adee49f0ee2f8089c866787c0c8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db3f881701d9fb94f166d8481038413107adee49f0ee2f8089c866787c0c8ed->enter($__internal_0db3f881701d9fb94f166d8481038413107adee49f0ee2f8089c866787c0c8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7e7521a4e95c4d73edb8a0bf1156e20f13b537e388e6b7a4f8c4be6c2296bb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7521a4e95c4d73edb8a0bf1156e20f13b537e388e6b7a4f8c4be6c2296bb39->enter($__internal_7e7521a4e95c4d73edb8a0bf1156e20f13b537e388e6b7a4f8c4be6c2296bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0db3f881701d9fb94f166d8481038413107adee49f0ee2f8089c866787c0c8ed->leave($__internal_0db3f881701d9fb94f166d8481038413107adee49f0ee2f8089c866787c0c8ed_prof);

        
        $__internal_7e7521a4e95c4d73edb8a0bf1156e20f13b537e388e6b7a4f8c4be6c2296bb39->leave($__internal_7e7521a4e95c4d73edb8a0bf1156e20f13b537e388e6b7a4f8c4be6c2296bb39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
