<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fe30b528d3a03ed938d0e2d77dc666efa98a858d9aece164504762dc56e42f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1672dd6aaeb6fc7e7f4e55d67cd9370eafeec97154696b45d6fd56c5f2833054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1672dd6aaeb6fc7e7f4e55d67cd9370eafeec97154696b45d6fd56c5f2833054->enter($__internal_1672dd6aaeb6fc7e7f4e55d67cd9370eafeec97154696b45d6fd56c5f2833054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a366e5ef1d2c889c3d46a331031f92e9b3f8aa6ba57ae70a104b308d4494438a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a366e5ef1d2c889c3d46a331031f92e9b3f8aa6ba57ae70a104b308d4494438a->enter($__internal_a366e5ef1d2c889c3d46a331031f92e9b3f8aa6ba57ae70a104b308d4494438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1672dd6aaeb6fc7e7f4e55d67cd9370eafeec97154696b45d6fd56c5f2833054->leave($__internal_1672dd6aaeb6fc7e7f4e55d67cd9370eafeec97154696b45d6fd56c5f2833054_prof);

        
        $__internal_a366e5ef1d2c889c3d46a331031f92e9b3f8aa6ba57ae70a104b308d4494438a->leave($__internal_a366e5ef1d2c889c3d46a331031f92e9b3f8aa6ba57ae70a104b308d4494438a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f7fc4a3738bc02522929585e55b6b396e5b3a74c38059b00b581c24984d89fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7fc4a3738bc02522929585e55b6b396e5b3a74c38059b00b581c24984d89fe->enter($__internal_9f7fc4a3738bc02522929585e55b6b396e5b3a74c38059b00b581c24984d89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e18f17930a5c08e95169ec09a1d74caf21fbb1a1a8a944baba9577d601b49675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18f17930a5c08e95169ec09a1d74caf21fbb1a1a8a944baba9577d601b49675->enter($__internal_e18f17930a5c08e95169ec09a1d74caf21fbb1a1a8a944baba9577d601b49675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e18f17930a5c08e95169ec09a1d74caf21fbb1a1a8a944baba9577d601b49675->leave($__internal_e18f17930a5c08e95169ec09a1d74caf21fbb1a1a8a944baba9577d601b49675_prof);

        
        $__internal_9f7fc4a3738bc02522929585e55b6b396e5b3a74c38059b00b581c24984d89fe->leave($__internal_9f7fc4a3738bc02522929585e55b6b396e5b3a74c38059b00b581c24984d89fe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e697cb59e1a47d74a31e1ac307dd860b2450b6157fde36f5315702004c02b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e697cb59e1a47d74a31e1ac307dd860b2450b6157fde36f5315702004c02b6->enter($__internal_07e697cb59e1a47d74a31e1ac307dd860b2450b6157fde36f5315702004c02b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dfe3d07a84340174edfb25cf6666e2edda77b6dcfb2c14bac71ca374b51a757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfe3d07a84340174edfb25cf6666e2edda77b6dcfb2c14bac71ca374b51a757->enter($__internal_1dfe3d07a84340174edfb25cf6666e2edda77b6dcfb2c14bac71ca374b51a757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_1dfe3d07a84340174edfb25cf6666e2edda77b6dcfb2c14bac71ca374b51a757->leave($__internal_1dfe3d07a84340174edfb25cf6666e2edda77b6dcfb2c14bac71ca374b51a757_prof);

        
        $__internal_07e697cb59e1a47d74a31e1ac307dd860b2450b6157fde36f5315702004c02b6->leave($__internal_07e697cb59e1a47d74a31e1ac307dd860b2450b6157fde36f5315702004c02b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
