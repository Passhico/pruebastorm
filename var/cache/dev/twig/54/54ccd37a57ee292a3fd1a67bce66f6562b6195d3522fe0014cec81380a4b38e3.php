<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6552dfd4b786628aab194f7e325d29938757f72bb0e692b8229f2b30c2eff144 extends Twig_Template
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
        $__internal_c6a4aa41bb0f6d81964fb551ef06effa4f3ba37aaa0622a44d02aebcc7b861cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a4aa41bb0f6d81964fb551ef06effa4f3ba37aaa0622a44d02aebcc7b861cd->enter($__internal_c6a4aa41bb0f6d81964fb551ef06effa4f3ba37aaa0622a44d02aebcc7b861cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7bd5402ce1fe189097d33cde8b4b03c956eec5b980c1ff7a2247a123834086c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd5402ce1fe189097d33cde8b4b03c956eec5b980c1ff7a2247a123834086c2->enter($__internal_7bd5402ce1fe189097d33cde8b4b03c956eec5b980c1ff7a2247a123834086c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_c6a4aa41bb0f6d81964fb551ef06effa4f3ba37aaa0622a44d02aebcc7b861cd->leave($__internal_c6a4aa41bb0f6d81964fb551ef06effa4f3ba37aaa0622a44d02aebcc7b861cd_prof);

        
        $__internal_7bd5402ce1fe189097d33cde8b4b03c956eec5b980c1ff7a2247a123834086c2->leave($__internal_7bd5402ce1fe189097d33cde8b4b03c956eec5b980c1ff7a2247a123834086c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
