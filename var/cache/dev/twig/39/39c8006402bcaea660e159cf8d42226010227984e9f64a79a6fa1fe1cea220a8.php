<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43c88f2387885de758eb9736a172f8e2ba5c2acf90722011df0f2c4eb911130c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e12bcc45112ac5f785159fa5e3ae0ac60f3b80bfb8c93d77f8229c4c24728f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12bcc45112ac5f785159fa5e3ae0ac60f3b80bfb8c93d77f8229c4c24728f03->enter($__internal_e12bcc45112ac5f785159fa5e3ae0ac60f3b80bfb8c93d77f8229c4c24728f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d224ac3fc84d197bc5848d8b297dbcbb14f6c4fc199c1bc44018f37db31b6085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d224ac3fc84d197bc5848d8b297dbcbb14f6c4fc199c1bc44018f37db31b6085->enter($__internal_d224ac3fc84d197bc5848d8b297dbcbb14f6c4fc199c1bc44018f37db31b6085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12bcc45112ac5f785159fa5e3ae0ac60f3b80bfb8c93d77f8229c4c24728f03->leave($__internal_e12bcc45112ac5f785159fa5e3ae0ac60f3b80bfb8c93d77f8229c4c24728f03_prof);

        
        $__internal_d224ac3fc84d197bc5848d8b297dbcbb14f6c4fc199c1bc44018f37db31b6085->leave($__internal_d224ac3fc84d197bc5848d8b297dbcbb14f6c4fc199c1bc44018f37db31b6085_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34e466a3c1004ed0bccd86a88762eb3b5353d58920f034969377fee0dcf13374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e466a3c1004ed0bccd86a88762eb3b5353d58920f034969377fee0dcf13374->enter($__internal_34e466a3c1004ed0bccd86a88762eb3b5353d58920f034969377fee0dcf13374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44c538a6b7f5c70b46fce29e1dd65b0fae5a637d859bf7a26741929ef2f312b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c538a6b7f5c70b46fce29e1dd65b0fae5a637d859bf7a26741929ef2f312b5->enter($__internal_44c538a6b7f5c70b46fce29e1dd65b0fae5a637d859bf7a26741929ef2f312b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44c538a6b7f5c70b46fce29e1dd65b0fae5a637d859bf7a26741929ef2f312b5->leave($__internal_44c538a6b7f5c70b46fce29e1dd65b0fae5a637d859bf7a26741929ef2f312b5_prof);

        
        $__internal_34e466a3c1004ed0bccd86a88762eb3b5353d58920f034969377fee0dcf13374->leave($__internal_34e466a3c1004ed0bccd86a88762eb3b5353d58920f034969377fee0dcf13374_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bca3d7db8cb94b26ebba45da9e183cc43a5ed8fe3e8607117eb40db2c61e17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bca3d7db8cb94b26ebba45da9e183cc43a5ed8fe3e8607117eb40db2c61e17a->enter($__internal_2bca3d7db8cb94b26ebba45da9e183cc43a5ed8fe3e8607117eb40db2c61e17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1aa3bdc63f0d759d17a1dea6422d08595e279a85c15b6c625c54e98887f5f9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa3bdc63f0d759d17a1dea6422d08595e279a85c15b6c625c54e98887f5f9b0->enter($__internal_1aa3bdc63f0d759d17a1dea6422d08595e279a85c15b6c625c54e98887f5f9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1aa3bdc63f0d759d17a1dea6422d08595e279a85c15b6c625c54e98887f5f9b0->leave($__internal_1aa3bdc63f0d759d17a1dea6422d08595e279a85c15b6c625c54e98887f5f9b0_prof);

        
        $__internal_2bca3d7db8cb94b26ebba45da9e183cc43a5ed8fe3e8607117eb40db2c61e17a->leave($__internal_2bca3d7db8cb94b26ebba45da9e183cc43a5ed8fe3e8607117eb40db2c61e17a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e34b1bb6f672c077adab19026df13f52a7358e2115950f9153d413fca57631b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e34b1bb6f672c077adab19026df13f52a7358e2115950f9153d413fca57631b->enter($__internal_4e34b1bb6f672c077adab19026df13f52a7358e2115950f9153d413fca57631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c137c3947a063f268f9e16646a57f4ec2d84ef5925541a16139f3c2924871c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c137c3947a063f268f9e16646a57f4ec2d84ef5925541a16139f3c2924871c0a->enter($__internal_c137c3947a063f268f9e16646a57f4ec2d84ef5925541a16139f3c2924871c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c137c3947a063f268f9e16646a57f4ec2d84ef5925541a16139f3c2924871c0a->leave($__internal_c137c3947a063f268f9e16646a57f4ec2d84ef5925541a16139f3c2924871c0a_prof);

        
        $__internal_4e34b1bb6f672c077adab19026df13f52a7358e2115950f9153d413fca57631b->leave($__internal_4e34b1bb6f672c077adab19026df13f52a7358e2115950f9153d413fca57631b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
