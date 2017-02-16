<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3ab0db22834e39d41d78062cb9c8a9cb9731436a0dc6608a8be447376900f6bb extends Twig_Template
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
        $__internal_2c056894590ca1e037169a6f107141b4d3855824b93e990aed4aaf9e85c6b504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c056894590ca1e037169a6f107141b4d3855824b93e990aed4aaf9e85c6b504->enter($__internal_2c056894590ca1e037169a6f107141b4d3855824b93e990aed4aaf9e85c6b504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2744a7d665164c05f1dce9816a9d9f6eefd74a717d3d5f4c293433f42c29c133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2744a7d665164c05f1dce9816a9d9f6eefd74a717d3d5f4c293433f42c29c133->enter($__internal_2744a7d665164c05f1dce9816a9d9f6eefd74a717d3d5f4c293433f42c29c133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2c056894590ca1e037169a6f107141b4d3855824b93e990aed4aaf9e85c6b504->leave($__internal_2c056894590ca1e037169a6f107141b4d3855824b93e990aed4aaf9e85c6b504_prof);

        
        $__internal_2744a7d665164c05f1dce9816a9d9f6eefd74a717d3d5f4c293433f42c29c133->leave($__internal_2744a7d665164c05f1dce9816a9d9f6eefd74a717d3d5f4c293433f42c29c133_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
