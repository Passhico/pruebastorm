<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eefc3d76e3eb04f468379b924cdea843c432b16a07c01916c255b985bb4e2d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_91216fd4b5fe63438769ae3f051284fbbaba512742b421f7785bd1c2f00232a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91216fd4b5fe63438769ae3f051284fbbaba512742b421f7785bd1c2f00232a4->enter($__internal_91216fd4b5fe63438769ae3f051284fbbaba512742b421f7785bd1c2f00232a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e1bfaca399318cbc7ea5928f5fec9b856f325aaecfa5499008fdf9b41fd4a72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bfaca399318cbc7ea5928f5fec9b856f325aaecfa5499008fdf9b41fd4a72b->enter($__internal_e1bfaca399318cbc7ea5928f5fec9b856f325aaecfa5499008fdf9b41fd4a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91216fd4b5fe63438769ae3f051284fbbaba512742b421f7785bd1c2f00232a4->leave($__internal_91216fd4b5fe63438769ae3f051284fbbaba512742b421f7785bd1c2f00232a4_prof);

        
        $__internal_e1bfaca399318cbc7ea5928f5fec9b856f325aaecfa5499008fdf9b41fd4a72b->leave($__internal_e1bfaca399318cbc7ea5928f5fec9b856f325aaecfa5499008fdf9b41fd4a72b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df390409210a039fb793a79a45c73af127de77967eba24c0ac4e563a94f26212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df390409210a039fb793a79a45c73af127de77967eba24c0ac4e563a94f26212->enter($__internal_df390409210a039fb793a79a45c73af127de77967eba24c0ac4e563a94f26212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_898ba56c7d0826df9fe55f74d474243a1cabc0ddcf29fbd1cf11eb988302bfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898ba56c7d0826df9fe55f74d474243a1cabc0ddcf29fbd1cf11eb988302bfdf->enter($__internal_898ba56c7d0826df9fe55f74d474243a1cabc0ddcf29fbd1cf11eb988302bfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_898ba56c7d0826df9fe55f74d474243a1cabc0ddcf29fbd1cf11eb988302bfdf->leave($__internal_898ba56c7d0826df9fe55f74d474243a1cabc0ddcf29fbd1cf11eb988302bfdf_prof);

        
        $__internal_df390409210a039fb793a79a45c73af127de77967eba24c0ac4e563a94f26212->leave($__internal_df390409210a039fb793a79a45c73af127de77967eba24c0ac4e563a94f26212_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9918280aa62848d5b928f144386b83c5a055753823964bd3584bcc35222e0931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9918280aa62848d5b928f144386b83c5a055753823964bd3584bcc35222e0931->enter($__internal_9918280aa62848d5b928f144386b83c5a055753823964bd3584bcc35222e0931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4ac857f04a3dfd5a6553fd1d53c1c8636da6b3157099e9e5556e2d966bfe10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ac857f04a3dfd5a6553fd1d53c1c8636da6b3157099e9e5556e2d966bfe10d->enter($__internal_d4ac857f04a3dfd5a6553fd1d53c1c8636da6b3157099e9e5556e2d966bfe10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d4ac857f04a3dfd5a6553fd1d53c1c8636da6b3157099e9e5556e2d966bfe10d->leave($__internal_d4ac857f04a3dfd5a6553fd1d53c1c8636da6b3157099e9e5556e2d966bfe10d_prof);

        
        $__internal_9918280aa62848d5b928f144386b83c5a055753823964bd3584bcc35222e0931->leave($__internal_9918280aa62848d5b928f144386b83c5a055753823964bd3584bcc35222e0931_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
