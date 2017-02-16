<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bc9a463b3319d3ad33d480da0f0b802098e3d3f59ae6411873b6215bbd53ec63 extends Twig_Template
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
        $__internal_420ffc4e55dfb63c9e5f00cd5f335a8fc0230c173e99554b98fa89d15796f57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420ffc4e55dfb63c9e5f00cd5f335a8fc0230c173e99554b98fa89d15796f57a->enter($__internal_420ffc4e55dfb63c9e5f00cd5f335a8fc0230c173e99554b98fa89d15796f57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f1e0e2868a9b06ef6e828fe3b605c45759b56cbff396c961cb46a39d4ac3d881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e0e2868a9b06ef6e828fe3b605c45759b56cbff396c961cb46a39d4ac3d881->enter($__internal_f1e0e2868a9b06ef6e828fe3b605c45759b56cbff396c961cb46a39d4ac3d881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_420ffc4e55dfb63c9e5f00cd5f335a8fc0230c173e99554b98fa89d15796f57a->leave($__internal_420ffc4e55dfb63c9e5f00cd5f335a8fc0230c173e99554b98fa89d15796f57a_prof);

        
        $__internal_f1e0e2868a9b06ef6e828fe3b605c45759b56cbff396c961cb46a39d4ac3d881->leave($__internal_f1e0e2868a9b06ef6e828fe3b605c45759b56cbff396c961cb46a39d4ac3d881_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
