<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8162e324f6e8bfb137908f5729c55ae47fa8ba8615eb63d29456769a793a52d4 extends Twig_Template
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
        $__internal_6a6ab289fb9eb772bdad8fa830cf24bac23e01be764491b26b50a1e365af81d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6ab289fb9eb772bdad8fa830cf24bac23e01be764491b26b50a1e365af81d3->enter($__internal_6a6ab289fb9eb772bdad8fa830cf24bac23e01be764491b26b50a1e365af81d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2c6bb2c453e06cd9491f0fc6cd5f04024c45a7c8fcac411193fcea35d46eef0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6bb2c453e06cd9491f0fc6cd5f04024c45a7c8fcac411193fcea35d46eef0f->enter($__internal_2c6bb2c453e06cd9491f0fc6cd5f04024c45a7c8fcac411193fcea35d46eef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6a6ab289fb9eb772bdad8fa830cf24bac23e01be764491b26b50a1e365af81d3->leave($__internal_6a6ab289fb9eb772bdad8fa830cf24bac23e01be764491b26b50a1e365af81d3_prof);

        
        $__internal_2c6bb2c453e06cd9491f0fc6cd5f04024c45a7c8fcac411193fcea35d46eef0f->leave($__internal_2c6bb2c453e06cd9491f0fc6cd5f04024c45a7c8fcac411193fcea35d46eef0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
