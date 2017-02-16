<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b62ff85b8710e0defec368ceded8067ac66015f4fc0b033f9ce5679ae5841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3216bbc42d33f5cd21d6bd0dbe8c57627116a9c2383c8cde3fbc96a771bfeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3216bbc42d33f5cd21d6bd0dbe8c57627116a9c2383c8cde3fbc96a771bfeca->enter($__internal_b3216bbc42d33f5cd21d6bd0dbe8c57627116a9c2383c8cde3fbc96a771bfeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_abcf38924dff14a20e8adb81826f625d56ee891f76f3ab27e2a3128e5a9a46e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf38924dff14a20e8adb81826f625d56ee891f76f3ab27e2a3128e5a9a46e3->enter($__internal_abcf38924dff14a20e8adb81826f625d56ee891f76f3ab27e2a3128e5a9a46e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3216bbc42d33f5cd21d6bd0dbe8c57627116a9c2383c8cde3fbc96a771bfeca->leave($__internal_b3216bbc42d33f5cd21d6bd0dbe8c57627116a9c2383c8cde3fbc96a771bfeca_prof);

        
        $__internal_abcf38924dff14a20e8adb81826f625d56ee891f76f3ab27e2a3128e5a9a46e3->leave($__internal_abcf38924dff14a20e8adb81826f625d56ee891f76f3ab27e2a3128e5a9a46e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c25407ebf2e072c33eb4064062abad8e4affb064736768452439f76998483685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25407ebf2e072c33eb4064062abad8e4affb064736768452439f76998483685->enter($__internal_c25407ebf2e072c33eb4064062abad8e4affb064736768452439f76998483685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39c97c4ec3cab60284a1cf668c1237376725b15e8965da34fd62e3d804709a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c97c4ec3cab60284a1cf668c1237376725b15e8965da34fd62e3d804709a17->enter($__internal_39c97c4ec3cab60284a1cf668c1237376725b15e8965da34fd62e3d804709a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39c97c4ec3cab60284a1cf668c1237376725b15e8965da34fd62e3d804709a17->leave($__internal_39c97c4ec3cab60284a1cf668c1237376725b15e8965da34fd62e3d804709a17_prof);

        
        $__internal_c25407ebf2e072c33eb4064062abad8e4affb064736768452439f76998483685->leave($__internal_c25407ebf2e072c33eb4064062abad8e4affb064736768452439f76998483685_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
