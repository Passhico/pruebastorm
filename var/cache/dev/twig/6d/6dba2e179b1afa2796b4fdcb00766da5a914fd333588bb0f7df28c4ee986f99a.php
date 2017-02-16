<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_98cd367ea2eecbb2deb77c8ee96b175a8189adac1e128ed83188c923ec19c8e6 extends Twig_Template
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
        $__internal_31d3d0158e21da0154943b75a1ef1a9aa852b13f8f669b68b3724984b23aa4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d3d0158e21da0154943b75a1ef1a9aa852b13f8f669b68b3724984b23aa4e5->enter($__internal_31d3d0158e21da0154943b75a1ef1a9aa852b13f8f669b68b3724984b23aa4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ba845f9f7aa5b190e112bfada8309f0cd9b70a5abb45067929474702f5693ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba845f9f7aa5b190e112bfada8309f0cd9b70a5abb45067929474702f5693ce1->enter($__internal_ba845f9f7aa5b190e112bfada8309f0cd9b70a5abb45067929474702f5693ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_31d3d0158e21da0154943b75a1ef1a9aa852b13f8f669b68b3724984b23aa4e5->leave($__internal_31d3d0158e21da0154943b75a1ef1a9aa852b13f8f669b68b3724984b23aa4e5_prof);

        
        $__internal_ba845f9f7aa5b190e112bfada8309f0cd9b70a5abb45067929474702f5693ce1->leave($__internal_ba845f9f7aa5b190e112bfada8309f0cd9b70a5abb45067929474702f5693ce1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
