<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68dcf10749fbcbfdfc8432a5f57547ddbc4cd1f2c57d8b52e076cfbcc0f06206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3464fcac4c280cf1e6c94763fd4b92951da2fda117922350886a0a35f6aee157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3464fcac4c280cf1e6c94763fd4b92951da2fda117922350886a0a35f6aee157->enter($__internal_3464fcac4c280cf1e6c94763fd4b92951da2fda117922350886a0a35f6aee157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_96941e768d4b397713935b89de4daaf7a87782a69f4643e40386cd7aaa6e6fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96941e768d4b397713935b89de4daaf7a87782a69f4643e40386cd7aaa6e6fb4->enter($__internal_96941e768d4b397713935b89de4daaf7a87782a69f4643e40386cd7aaa6e6fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3464fcac4c280cf1e6c94763fd4b92951da2fda117922350886a0a35f6aee157->leave($__internal_3464fcac4c280cf1e6c94763fd4b92951da2fda117922350886a0a35f6aee157_prof);

        
        $__internal_96941e768d4b397713935b89de4daaf7a87782a69f4643e40386cd7aaa6e6fb4->leave($__internal_96941e768d4b397713935b89de4daaf7a87782a69f4643e40386cd7aaa6e6fb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2626fb919ad50383e0968ff31ebc872d09e6636f6c7ce378896f88581858e0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2626fb919ad50383e0968ff31ebc872d09e6636f6c7ce378896f88581858e0c0->enter($__internal_2626fb919ad50383e0968ff31ebc872d09e6636f6c7ce378896f88581858e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d8b2e560e98b441ce4c4fea6db2c973b82e52536bbc02df057b55db18933466f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b2e560e98b441ce4c4fea6db2c973b82e52536bbc02df057b55db18933466f->enter($__internal_d8b2e560e98b441ce4c4fea6db2c973b82e52536bbc02df057b55db18933466f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d8b2e560e98b441ce4c4fea6db2c973b82e52536bbc02df057b55db18933466f->leave($__internal_d8b2e560e98b441ce4c4fea6db2c973b82e52536bbc02df057b55db18933466f_prof);

        
        $__internal_2626fb919ad50383e0968ff31ebc872d09e6636f6c7ce378896f88581858e0c0->leave($__internal_2626fb919ad50383e0968ff31ebc872d09e6636f6c7ce378896f88581858e0c0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc942898e49ba95cafd09bc43227a7cfb4e6760fdeac829f203538feef5aa2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc942898e49ba95cafd09bc43227a7cfb4e6760fdeac829f203538feef5aa2b8->enter($__internal_dc942898e49ba95cafd09bc43227a7cfb4e6760fdeac829f203538feef5aa2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d591bd2d48919885f20a55db6e8713ff4d17d17d8c7f53e7ae06b02ee85e55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d591bd2d48919885f20a55db6e8713ff4d17d17d8c7f53e7ae06b02ee85e55a->enter($__internal_2d591bd2d48919885f20a55db6e8713ff4d17d17d8c7f53e7ae06b02ee85e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2d591bd2d48919885f20a55db6e8713ff4d17d17d8c7f53e7ae06b02ee85e55a->leave($__internal_2d591bd2d48919885f20a55db6e8713ff4d17d17d8c7f53e7ae06b02ee85e55a_prof);

        
        $__internal_dc942898e49ba95cafd09bc43227a7cfb4e6760fdeac829f203538feef5aa2b8->leave($__internal_dc942898e49ba95cafd09bc43227a7cfb4e6760fdeac829f203538feef5aa2b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7298926408000850b3580679f670f4eee5d55bbf88195c5da5787043725866a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7298926408000850b3580679f670f4eee5d55bbf88195c5da5787043725866a8->enter($__internal_7298926408000850b3580679f670f4eee5d55bbf88195c5da5787043725866a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d47b3aa5c8ef310bf96226ea09308e611e70b9e86fa3a7ad0218c5ca56d23d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47b3aa5c8ef310bf96226ea09308e611e70b9e86fa3a7ad0218c5ca56d23d31->enter($__internal_d47b3aa5c8ef310bf96226ea09308e611e70b9e86fa3a7ad0218c5ca56d23d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d47b3aa5c8ef310bf96226ea09308e611e70b9e86fa3a7ad0218c5ca56d23d31->leave($__internal_d47b3aa5c8ef310bf96226ea09308e611e70b9e86fa3a7ad0218c5ca56d23d31_prof);

        
        $__internal_7298926408000850b3580679f670f4eee5d55bbf88195c5da5787043725866a8->leave($__internal_7298926408000850b3580679f670f4eee5d55bbf88195c5da5787043725866a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
