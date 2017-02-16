<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8fb12636ea1a7232483bccf66a60a087e6582136a31e717cf10ac9f0fe95716b extends Twig_Template
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
        $__internal_7eb411c11fd812f4180c9f46704b1e9fc021302f26fd5b2467fbe83bf97a4c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb411c11fd812f4180c9f46704b1e9fc021302f26fd5b2467fbe83bf97a4c0f->enter($__internal_7eb411c11fd812f4180c9f46704b1e9fc021302f26fd5b2467fbe83bf97a4c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f65e83a0b195773971300cbb32d7a183f541bd2b78f78a1c0eb0a035bb15dcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65e83a0b195773971300cbb32d7a183f541bd2b78f78a1c0eb0a035bb15dcff->enter($__internal_f65e83a0b195773971300cbb32d7a183f541bd2b78f78a1c0eb0a035bb15dcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7eb411c11fd812f4180c9f46704b1e9fc021302f26fd5b2467fbe83bf97a4c0f->leave($__internal_7eb411c11fd812f4180c9f46704b1e9fc021302f26fd5b2467fbe83bf97a4c0f_prof);

        
        $__internal_f65e83a0b195773971300cbb32d7a183f541bd2b78f78a1c0eb0a035bb15dcff->leave($__internal_f65e83a0b195773971300cbb32d7a183f541bd2b78f78a1c0eb0a035bb15dcff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
