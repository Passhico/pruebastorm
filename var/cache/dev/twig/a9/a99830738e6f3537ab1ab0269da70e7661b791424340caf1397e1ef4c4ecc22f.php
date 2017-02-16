<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_63a39efcfbab460dbf7aafa4deb0bdf21633a4b16029e82e2e5a864d4dad3237 extends Twig_Template
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
        $__internal_7f22b44ff65b0cedc4eedc6b942262734f73d43d010efd93a15f54a00e9ed04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f22b44ff65b0cedc4eedc6b942262734f73d43d010efd93a15f54a00e9ed04f->enter($__internal_7f22b44ff65b0cedc4eedc6b942262734f73d43d010efd93a15f54a00e9ed04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3fbfdd24a81a6d90f9c36652d5386c3e32cda395b208442172479b284dcdefe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbfdd24a81a6d90f9c36652d5386c3e32cda395b208442172479b284dcdefe4->enter($__internal_3fbfdd24a81a6d90f9c36652d5386c3e32cda395b208442172479b284dcdefe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_7f22b44ff65b0cedc4eedc6b942262734f73d43d010efd93a15f54a00e9ed04f->leave($__internal_7f22b44ff65b0cedc4eedc6b942262734f73d43d010efd93a15f54a00e9ed04f_prof);

        
        $__internal_3fbfdd24a81a6d90f9c36652d5386c3e32cda395b208442172479b284dcdefe4->leave($__internal_3fbfdd24a81a6d90f9c36652d5386c3e32cda395b208442172479b284dcdefe4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
