<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d819ad1ea57074ff2f41162cb635825c28603dd30bda87fb7484cab791a14bb5 extends Twig_Template
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
        $__internal_3b4fafbe5173d4b26a8a26d2631ddf6b5f40364049e2962f0c5b133e5a9d0a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4fafbe5173d4b26a8a26d2631ddf6b5f40364049e2962f0c5b133e5a9d0a62->enter($__internal_3b4fafbe5173d4b26a8a26d2631ddf6b5f40364049e2962f0c5b133e5a9d0a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cb3ac7b4c0aedc4df9a468874edc63750d5775d7b78f3e1a4e9f39db0c58c59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3ac7b4c0aedc4df9a468874edc63750d5775d7b78f3e1a4e9f39db0c58c59e->enter($__internal_cb3ac7b4c0aedc4df9a468874edc63750d5775d7b78f3e1a4e9f39db0c58c59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_3b4fafbe5173d4b26a8a26d2631ddf6b5f40364049e2962f0c5b133e5a9d0a62->leave($__internal_3b4fafbe5173d4b26a8a26d2631ddf6b5f40364049e2962f0c5b133e5a9d0a62_prof);

        
        $__internal_cb3ac7b4c0aedc4df9a468874edc63750d5775d7b78f3e1a4e9f39db0c58c59e->leave($__internal_cb3ac7b4c0aedc4df9a468874edc63750d5775d7b78f3e1a4e9f39db0c58c59e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
