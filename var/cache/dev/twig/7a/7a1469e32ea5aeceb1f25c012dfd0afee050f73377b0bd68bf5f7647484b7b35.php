<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9e456e542bb6cc25c538375f79d3167c12d27fc4f3b4531eabd8a1440eb8ad14 extends Twig_Template
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
        $__internal_12389a9ac8055609717fd9bde942677fd10035f71f97398bd8863b30ef3fe32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12389a9ac8055609717fd9bde942677fd10035f71f97398bd8863b30ef3fe32a->enter($__internal_12389a9ac8055609717fd9bde942677fd10035f71f97398bd8863b30ef3fe32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c6de918971fd38693f59dcecb5dc2a93c6e3306a45435e43c16e0f8469923fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6de918971fd38693f59dcecb5dc2a93c6e3306a45435e43c16e0f8469923fb0->enter($__internal_c6de918971fd38693f59dcecb5dc2a93c6e3306a45435e43c16e0f8469923fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_12389a9ac8055609717fd9bde942677fd10035f71f97398bd8863b30ef3fe32a->leave($__internal_12389a9ac8055609717fd9bde942677fd10035f71f97398bd8863b30ef3fe32a_prof);

        
        $__internal_c6de918971fd38693f59dcecb5dc2a93c6e3306a45435e43c16e0f8469923fb0->leave($__internal_c6de918971fd38693f59dcecb5dc2a93c6e3306a45435e43c16e0f8469923fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/pascual/pruebastorm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
