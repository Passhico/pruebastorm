<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74a5c5af01cddba92a0ac19d21c290d224776a01b14d02cd817a997e909fd70e extends Twig_Template
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
        $__internal_642bcc189ddf94b4f9efdc42ac5da91ef1282b03d67b3a311986f47fb3b8b7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642bcc189ddf94b4f9efdc42ac5da91ef1282b03d67b3a311986f47fb3b8b7df->enter($__internal_642bcc189ddf94b4f9efdc42ac5da91ef1282b03d67b3a311986f47fb3b8b7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6e4ccc48074be0582000bfdc1a8dcd329c732459d2d9776a8bb899de95aec0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4ccc48074be0582000bfdc1a8dcd329c732459d2d9776a8bb899de95aec0a1->enter($__internal_6e4ccc48074be0582000bfdc1a8dcd329c732459d2d9776a8bb899de95aec0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_642bcc189ddf94b4f9efdc42ac5da91ef1282b03d67b3a311986f47fb3b8b7df->leave($__internal_642bcc189ddf94b4f9efdc42ac5da91ef1282b03d67b3a311986f47fb3b8b7df_prof);

        
        $__internal_6e4ccc48074be0582000bfdc1a8dcd329c732459d2d9776a8bb899de95aec0a1->leave($__internal_6e4ccc48074be0582000bfdc1a8dcd329c732459d2d9776a8bb899de95aec0a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
