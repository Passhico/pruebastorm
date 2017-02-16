<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4374d80b1c28ea19892f9ca61b7421b8737ebfe7eaa7c9c830615e313086e4b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_466a083e12eeb94f0c5603861637e04f73502ba3789bde6be8c178f1d29bfd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466a083e12eeb94f0c5603861637e04f73502ba3789bde6be8c178f1d29bfd60->enter($__internal_466a083e12eeb94f0c5603861637e04f73502ba3789bde6be8c178f1d29bfd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5114aa1e32a54eba3fd66ef1c64a5e1713a7b669d38e85101106bdbf29499be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5114aa1e32a54eba3fd66ef1c64a5e1713a7b669d38e85101106bdbf29499be7->enter($__internal_5114aa1e32a54eba3fd66ef1c64a5e1713a7b669d38e85101106bdbf29499be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466a083e12eeb94f0c5603861637e04f73502ba3789bde6be8c178f1d29bfd60->leave($__internal_466a083e12eeb94f0c5603861637e04f73502ba3789bde6be8c178f1d29bfd60_prof);

        
        $__internal_5114aa1e32a54eba3fd66ef1c64a5e1713a7b669d38e85101106bdbf29499be7->leave($__internal_5114aa1e32a54eba3fd66ef1c64a5e1713a7b669d38e85101106bdbf29499be7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f22923329269a1ab475593e42bf24823532cc7ac7e8540364221288a6d57c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f22923329269a1ab475593e42bf24823532cc7ac7e8540364221288a6d57c2c->enter($__internal_9f22923329269a1ab475593e42bf24823532cc7ac7e8540364221288a6d57c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00bd2c9c3e63582c6284ddb1fc6bd0adfb225951b8cb76e16426e8b6b746d10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bd2c9c3e63582c6284ddb1fc6bd0adfb225951b8cb76e16426e8b6b746d10c->enter($__internal_00bd2c9c3e63582c6284ddb1fc6bd0adfb225951b8cb76e16426e8b6b746d10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_00bd2c9c3e63582c6284ddb1fc6bd0adfb225951b8cb76e16426e8b6b746d10c->leave($__internal_00bd2c9c3e63582c6284ddb1fc6bd0adfb225951b8cb76e16426e8b6b746d10c_prof);

        
        $__internal_9f22923329269a1ab475593e42bf24823532cc7ac7e8540364221288a6d57c2c->leave($__internal_9f22923329269a1ab475593e42bf24823532cc7ac7e8540364221288a6d57c2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
