<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1df70bc64be72dc9ac56e37d71f735001d2ecfd4645331bbc7529e0770dcd60c extends Twig_Template
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
        $__internal_4db6133f74762d1ae3a89ab5636dee9e48be0e67b2ab05905991d7458ffea3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db6133f74762d1ae3a89ab5636dee9e48be0e67b2ab05905991d7458ffea3e0->enter($__internal_4db6133f74762d1ae3a89ab5636dee9e48be0e67b2ab05905991d7458ffea3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_cd4498ae9a9e9998b04dd41d19fa9241e5a2df1a9e61341c93c04d38fd3bf0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4498ae9a9e9998b04dd41d19fa9241e5a2df1a9e61341c93c04d38fd3bf0f1->enter($__internal_cd4498ae9a9e9998b04dd41d19fa9241e5a2df1a9e61341c93c04d38fd3bf0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_4db6133f74762d1ae3a89ab5636dee9e48be0e67b2ab05905991d7458ffea3e0->leave($__internal_4db6133f74762d1ae3a89ab5636dee9e48be0e67b2ab05905991d7458ffea3e0_prof);

        
        $__internal_cd4498ae9a9e9998b04dd41d19fa9241e5a2df1a9e61341c93c04d38fd3bf0f1->leave($__internal_cd4498ae9a9e9998b04dd41d19fa9241e5a2df1a9e61341c93c04d38fd3bf0f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
