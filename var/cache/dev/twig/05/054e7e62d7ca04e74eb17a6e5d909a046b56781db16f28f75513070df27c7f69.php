<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfdbf3d78654b9e1c07ae8f1cbe6d324ea887356de82e98004ac68a0442ec56f extends Twig_Template
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
        $__internal_f4b8db8aced6d2fcc1423b2cd5ec96e534d597387b8c46ff60f2a1a29f74c964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b8db8aced6d2fcc1423b2cd5ec96e534d597387b8c46ff60f2a1a29f74c964->enter($__internal_f4b8db8aced6d2fcc1423b2cd5ec96e534d597387b8c46ff60f2a1a29f74c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_293640b0843e965a6674b676befdcb3fd6fd9694eda7ba58d454eec582b78683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293640b0843e965a6674b676befdcb3fd6fd9694eda7ba58d454eec582b78683->enter($__internal_293640b0843e965a6674b676befdcb3fd6fd9694eda7ba58d454eec582b78683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f4b8db8aced6d2fcc1423b2cd5ec96e534d597387b8c46ff60f2a1a29f74c964->leave($__internal_f4b8db8aced6d2fcc1423b2cd5ec96e534d597387b8c46ff60f2a1a29f74c964_prof);

        
        $__internal_293640b0843e965a6674b676befdcb3fd6fd9694eda7ba58d454eec582b78683->leave($__internal_293640b0843e965a6674b676befdcb3fd6fd9694eda7ba58d454eec582b78683_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
