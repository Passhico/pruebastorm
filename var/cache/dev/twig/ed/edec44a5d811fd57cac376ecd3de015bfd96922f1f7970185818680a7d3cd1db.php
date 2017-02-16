<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_233743bf1949f65284ef9018d7f13e581881da25b654df5d36bb7d02f3def313 extends Twig_Template
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
        $__internal_2a853f7e7957005571c2813496540db377ba1298ac1c1775e09a0eb463cd9408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a853f7e7957005571c2813496540db377ba1298ac1c1775e09a0eb463cd9408->enter($__internal_2a853f7e7957005571c2813496540db377ba1298ac1c1775e09a0eb463cd9408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_73e2bbdecfc7520225136b77cb94d6c19fcf4cdbee37b568654cc20ff9b4b326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e2bbdecfc7520225136b77cb94d6c19fcf4cdbee37b568654cc20ff9b4b326->enter($__internal_73e2bbdecfc7520225136b77cb94d6c19fcf4cdbee37b568654cc20ff9b4b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2a853f7e7957005571c2813496540db377ba1298ac1c1775e09a0eb463cd9408->leave($__internal_2a853f7e7957005571c2813496540db377ba1298ac1c1775e09a0eb463cd9408_prof);

        
        $__internal_73e2bbdecfc7520225136b77cb94d6c19fcf4cdbee37b568654cc20ff9b4b326->leave($__internal_73e2bbdecfc7520225136b77cb94d6c19fcf4cdbee37b568654cc20ff9b4b326_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
