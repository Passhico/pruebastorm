<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_537469691a419581e155e825d2a852c7552f2c2533fb89732035ae6b9b3861f3 extends Twig_Template
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
        $__internal_6d912f997c84a43fe1cfffb46999e0386de1b8ad1f300a5fce4e4fa72c947c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d912f997c84a43fe1cfffb46999e0386de1b8ad1f300a5fce4e4fa72c947c3f->enter($__internal_6d912f997c84a43fe1cfffb46999e0386de1b8ad1f300a5fce4e4fa72c947c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0b2b1189969ff95f143703f151aa0fb3ab3243f3e9a65e5dd34b5900c40ebc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2b1189969ff95f143703f151aa0fb3ab3243f3e9a65e5dd34b5900c40ebc76->enter($__internal_0b2b1189969ff95f143703f151aa0fb3ab3243f3e9a65e5dd34b5900c40ebc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6d912f997c84a43fe1cfffb46999e0386de1b8ad1f300a5fce4e4fa72c947c3f->leave($__internal_6d912f997c84a43fe1cfffb46999e0386de1b8ad1f300a5fce4e4fa72c947c3f_prof);

        
        $__internal_0b2b1189969ff95f143703f151aa0fb3ab3243f3e9a65e5dd34b5900c40ebc76->leave($__internal_0b2b1189969ff95f143703f151aa0fb3ab3243f3e9a65e5dd34b5900c40ebc76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
