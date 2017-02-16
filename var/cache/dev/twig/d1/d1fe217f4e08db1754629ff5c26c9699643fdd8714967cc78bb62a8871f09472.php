<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_beff339c502e54f26dbdb1a82cd68d5fc0fab2e9f72450a9c660d65ca809fcfa extends Twig_Template
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
        $__internal_1eb4923bce26e0a308e383537dde7c4f3a9faaa37166414f6e0499d8370dd408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb4923bce26e0a308e383537dde7c4f3a9faaa37166414f6e0499d8370dd408->enter($__internal_1eb4923bce26e0a308e383537dde7c4f3a9faaa37166414f6e0499d8370dd408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e59a752ee44caffb5433a1ea6f6a9367636fc36f75e9a14481a30cc2fdbf26d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59a752ee44caffb5433a1ea6f6a9367636fc36f75e9a14481a30cc2fdbf26d8->enter($__internal_e59a752ee44caffb5433a1ea6f6a9367636fc36f75e9a14481a30cc2fdbf26d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_1eb4923bce26e0a308e383537dde7c4f3a9faaa37166414f6e0499d8370dd408->leave($__internal_1eb4923bce26e0a308e383537dde7c4f3a9faaa37166414f6e0499d8370dd408_prof);

        
        $__internal_e59a752ee44caffb5433a1ea6f6a9367636fc36f75e9a14481a30cc2fdbf26d8->leave($__internal_e59a752ee44caffb5433a1ea6f6a9367636fc36f75e9a14481a30cc2fdbf26d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
