<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_83c664472da26bc2a294b545432d0ffec9de0885f24caef37bd081fbe9ca48ba extends Twig_Template
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
        $__internal_f02d93647fadc0b15bee4a2aeaa752f031ad324104b85536067e18659c9c868b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02d93647fadc0b15bee4a2aeaa752f031ad324104b85536067e18659c9c868b->enter($__internal_f02d93647fadc0b15bee4a2aeaa752f031ad324104b85536067e18659c9c868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c6e0202fe511b5637b082e6316be8637a9ef7064aa894c56799963f7ca222f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e0202fe511b5637b082e6316be8637a9ef7064aa894c56799963f7ca222f5f->enter($__internal_c6e0202fe511b5637b082e6316be8637a9ef7064aa894c56799963f7ca222f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f02d93647fadc0b15bee4a2aeaa752f031ad324104b85536067e18659c9c868b->leave($__internal_f02d93647fadc0b15bee4a2aeaa752f031ad324104b85536067e18659c9c868b_prof);

        
        $__internal_c6e0202fe511b5637b082e6316be8637a9ef7064aa894c56799963f7ca222f5f->leave($__internal_c6e0202fe511b5637b082e6316be8637a9ef7064aa894c56799963f7ca222f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
