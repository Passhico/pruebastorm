<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7b7515ea65ce5fd2c2cf2350b14c109004010eac7ab979815bb0c51c44ed4072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84f57b5c2fdd2dd5f659ba3110db1b3bcd09920378793b88952aeb31c9881593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f57b5c2fdd2dd5f659ba3110db1b3bcd09920378793b88952aeb31c9881593->enter($__internal_84f57b5c2fdd2dd5f659ba3110db1b3bcd09920378793b88952aeb31c9881593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_108a97c290c323cb66c87b1954a8f9f1733444176c68fd0805990412a07630f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108a97c290c323cb66c87b1954a8f9f1733444176c68fd0805990412a07630f7->enter($__internal_108a97c290c323cb66c87b1954a8f9f1733444176c68fd0805990412a07630f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f57b5c2fdd2dd5f659ba3110db1b3bcd09920378793b88952aeb31c9881593->leave($__internal_84f57b5c2fdd2dd5f659ba3110db1b3bcd09920378793b88952aeb31c9881593_prof);

        
        $__internal_108a97c290c323cb66c87b1954a8f9f1733444176c68fd0805990412a07630f7->leave($__internal_108a97c290c323cb66c87b1954a8f9f1733444176c68fd0805990412a07630f7_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fb93a3e72608fd87bf5b1b54a43a9a9eaa3cb45206ada56b925fe2c0b568d9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb93a3e72608fd87bf5b1b54a43a9a9eaa3cb45206ada56b925fe2c0b568d9e4->enter($__internal_fb93a3e72608fd87bf5b1b54a43a9a9eaa3cb45206ada56b925fe2c0b568d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2a171dee51e4ab65cca46d0f9b81328b39118a4e469caa5a70285f76cf26f3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a171dee51e4ab65cca46d0f9b81328b39118a4e469caa5a70285f76cf26f3ad->enter($__internal_2a171dee51e4ab65cca46d0f9b81328b39118a4e469caa5a70285f76cf26f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2a171dee51e4ab65cca46d0f9b81328b39118a4e469caa5a70285f76cf26f3ad->leave($__internal_2a171dee51e4ab65cca46d0f9b81328b39118a4e469caa5a70285f76cf26f3ad_prof);

        
        $__internal_fb93a3e72608fd87bf5b1b54a43a9a9eaa3cb45206ada56b925fe2c0b568d9e4->leave($__internal_fb93a3e72608fd87bf5b1b54a43a9a9eaa3cb45206ada56b925fe2c0b568d9e4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e1acd040ccf3e3b0803950397cc1f20aa2b123dc7b90e068bfc380adee030ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1acd040ccf3e3b0803950397cc1f20aa2b123dc7b90e068bfc380adee030ac->enter($__internal_4e1acd040ccf3e3b0803950397cc1f20aa2b123dc7b90e068bfc380adee030ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4c1dd7164e4a70dd9785bc2775b2ff3aa909f3140b7245e9c18cb8b22c8efa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c1dd7164e4a70dd9785bc2775b2ff3aa909f3140b7245e9c18cb8b22c8efa8->enter($__internal_e4c1dd7164e4a70dd9785bc2775b2ff3aa909f3140b7245e9c18cb8b22c8efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e4c1dd7164e4a70dd9785bc2775b2ff3aa909f3140b7245e9c18cb8b22c8efa8->leave($__internal_e4c1dd7164e4a70dd9785bc2775b2ff3aa909f3140b7245e9c18cb8b22c8efa8_prof);

        
        $__internal_4e1acd040ccf3e3b0803950397cc1f20aa2b123dc7b90e068bfc380adee030ac->leave($__internal_4e1acd040ccf3e3b0803950397cc1f20aa2b123dc7b90e068bfc380adee030ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
