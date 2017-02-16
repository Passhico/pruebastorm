<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_487981bf662ed4082231ba7d604437b178e370e6681feecfa1be186f27716e5f extends Twig_Template
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
        $__internal_2c47df1243a5e706c1a9c01545e4e61445ea5b1c8c75213717c1009825622334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c47df1243a5e706c1a9c01545e4e61445ea5b1c8c75213717c1009825622334->enter($__internal_2c47df1243a5e706c1a9c01545e4e61445ea5b1c8c75213717c1009825622334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6265e2c1300d302e5c7d29bd08be2e09e84a907e826bc2d570379158a63ae285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6265e2c1300d302e5c7d29bd08be2e09e84a907e826bc2d570379158a63ae285->enter($__internal_6265e2c1300d302e5c7d29bd08be2e09e84a907e826bc2d570379158a63ae285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_2c47df1243a5e706c1a9c01545e4e61445ea5b1c8c75213717c1009825622334->leave($__internal_2c47df1243a5e706c1a9c01545e4e61445ea5b1c8c75213717c1009825622334_prof);

        
        $__internal_6265e2c1300d302e5c7d29bd08be2e09e84a907e826bc2d570379158a63ae285->leave($__internal_6265e2c1300d302e5c7d29bd08be2e09e84a907e826bc2d570379158a63ae285_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
