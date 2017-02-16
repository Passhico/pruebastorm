<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de6efc14ab1a62deaf06eede932e75e835399205f93629e4ec3c93bf4d1a8410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ba7e2e620088abe65001154b35ba9728cb7ef0dc455106b6bf05fcda952c1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba7e2e620088abe65001154b35ba9728cb7ef0dc455106b6bf05fcda952c1a2->enter($__internal_0ba7e2e620088abe65001154b35ba9728cb7ef0dc455106b6bf05fcda952c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_513a77e90c60142b66b71e24a42944d598ccc3b7eae443ce84a9044617400146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513a77e90c60142b66b71e24a42944d598ccc3b7eae443ce84a9044617400146->enter($__internal_513a77e90c60142b66b71e24a42944d598ccc3b7eae443ce84a9044617400146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ba7e2e620088abe65001154b35ba9728cb7ef0dc455106b6bf05fcda952c1a2->leave($__internal_0ba7e2e620088abe65001154b35ba9728cb7ef0dc455106b6bf05fcda952c1a2_prof);

        
        $__internal_513a77e90c60142b66b71e24a42944d598ccc3b7eae443ce84a9044617400146->leave($__internal_513a77e90c60142b66b71e24a42944d598ccc3b7eae443ce84a9044617400146_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaf077f4221ac9246795805899911cc923647b399e52d63c1b6a3e3610e72ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf077f4221ac9246795805899911cc923647b399e52d63c1b6a3e3610e72ac8->enter($__internal_aaf077f4221ac9246795805899911cc923647b399e52d63c1b6a3e3610e72ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55e4f4bca6a3bf13a2cde918fa7cbd7352d8b367594468df62a099a3e6bc91d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e4f4bca6a3bf13a2cde918fa7cbd7352d8b367594468df62a099a3e6bc91d0->enter($__internal_55e4f4bca6a3bf13a2cde918fa7cbd7352d8b367594468df62a099a3e6bc91d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_55e4f4bca6a3bf13a2cde918fa7cbd7352d8b367594468df62a099a3e6bc91d0->leave($__internal_55e4f4bca6a3bf13a2cde918fa7cbd7352d8b367594468df62a099a3e6bc91d0_prof);

        
        $__internal_aaf077f4221ac9246795805899911cc923647b399e52d63c1b6a3e3610e72ac8->leave($__internal_aaf077f4221ac9246795805899911cc923647b399e52d63c1b6a3e3610e72ac8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a20cc205da239a8ed5e4dd0b042b87bba7e6380d055087286522b919462763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a20cc205da239a8ed5e4dd0b042b87bba7e6380d055087286522b919462763->enter($__internal_89a20cc205da239a8ed5e4dd0b042b87bba7e6380d055087286522b919462763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8387ae50b89a7159646ae703dae1290e4991a831261f9350a3e6caa9630d2f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8387ae50b89a7159646ae703dae1290e4991a831261f9350a3e6caa9630d2f44->enter($__internal_8387ae50b89a7159646ae703dae1290e4991a831261f9350a3e6caa9630d2f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8387ae50b89a7159646ae703dae1290e4991a831261f9350a3e6caa9630d2f44->leave($__internal_8387ae50b89a7159646ae703dae1290e4991a831261f9350a3e6caa9630d2f44_prof);

        
        $__internal_89a20cc205da239a8ed5e4dd0b042b87bba7e6380d055087286522b919462763->leave($__internal_89a20cc205da239a8ed5e4dd0b042b87bba7e6380d055087286522b919462763_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf3713da0ffe9e96c9bf33756e0e1fc86fe7cdf3c314ad0e21cbe3d6aab37caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3713da0ffe9e96c9bf33756e0e1fc86fe7cdf3c314ad0e21cbe3d6aab37caf->enter($__internal_bf3713da0ffe9e96c9bf33756e0e1fc86fe7cdf3c314ad0e21cbe3d6aab37caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c4e0ea5220139d588fcc70b82dd4f9f89c84294979ac1dbcfb9bb021ab3ca16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4e0ea5220139d588fcc70b82dd4f9f89c84294979ac1dbcfb9bb021ab3ca16->enter($__internal_7c4e0ea5220139d588fcc70b82dd4f9f89c84294979ac1dbcfb9bb021ab3ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c4e0ea5220139d588fcc70b82dd4f9f89c84294979ac1dbcfb9bb021ab3ca16->leave($__internal_7c4e0ea5220139d588fcc70b82dd4f9f89c84294979ac1dbcfb9bb021ab3ca16_prof);

        
        $__internal_bf3713da0ffe9e96c9bf33756e0e1fc86fe7cdf3c314ad0e21cbe3d6aab37caf->leave($__internal_bf3713da0ffe9e96c9bf33756e0e1fc86fe7cdf3c314ad0e21cbe3d6aab37caf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
