<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc83685e045a336ea97f2c09ad8699ad415350f223a691e05768eaf26ff272e0 extends Twig_Template
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
        $__internal_278d9b4c0821fffa373f6a5436c13a222ddaf54aae5713a32c8095d39bca6934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278d9b4c0821fffa373f6a5436c13a222ddaf54aae5713a32c8095d39bca6934->enter($__internal_278d9b4c0821fffa373f6a5436c13a222ddaf54aae5713a32c8095d39bca6934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6d5fa378397675d3ada02d08561361284ae3e77ad7260dc3c5d26a86949ab808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5fa378397675d3ada02d08561361284ae3e77ad7260dc3c5d26a86949ab808->enter($__internal_6d5fa378397675d3ada02d08561361284ae3e77ad7260dc3c5d26a86949ab808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_278d9b4c0821fffa373f6a5436c13a222ddaf54aae5713a32c8095d39bca6934->leave($__internal_278d9b4c0821fffa373f6a5436c13a222ddaf54aae5713a32c8095d39bca6934_prof);

        
        $__internal_6d5fa378397675d3ada02d08561361284ae3e77ad7260dc3c5d26a86949ab808->leave($__internal_6d5fa378397675d3ada02d08561361284ae3e77ad7260dc3c5d26a86949ab808_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
