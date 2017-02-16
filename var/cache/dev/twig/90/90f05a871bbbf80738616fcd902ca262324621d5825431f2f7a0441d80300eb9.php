<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62bbb8bbcdae280c08b7ec519012024119886eb42a34066e68dba2aead4fb7d1 extends Twig_Template
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
        $__internal_25ddc7438b4d9416b2b35ee07bcd0dfeee71ecd29cebf1be9ea7b75ec93a3ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ddc7438b4d9416b2b35ee07bcd0dfeee71ecd29cebf1be9ea7b75ec93a3ce5->enter($__internal_25ddc7438b4d9416b2b35ee07bcd0dfeee71ecd29cebf1be9ea7b75ec93a3ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_08b7a59e0d67dc1339afd12f12026b93b9e502f6f4c67b964dced946abadff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b7a59e0d67dc1339afd12f12026b93b9e502f6f4c67b964dced946abadff8f->enter($__internal_08b7a59e0d67dc1339afd12f12026b93b9e502f6f4c67b964dced946abadff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_25ddc7438b4d9416b2b35ee07bcd0dfeee71ecd29cebf1be9ea7b75ec93a3ce5->leave($__internal_25ddc7438b4d9416b2b35ee07bcd0dfeee71ecd29cebf1be9ea7b75ec93a3ce5_prof);

        
        $__internal_08b7a59e0d67dc1339afd12f12026b93b9e502f6f4c67b964dced946abadff8f->leave($__internal_08b7a59e0d67dc1339afd12f12026b93b9e502f6f4c67b964dced946abadff8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
