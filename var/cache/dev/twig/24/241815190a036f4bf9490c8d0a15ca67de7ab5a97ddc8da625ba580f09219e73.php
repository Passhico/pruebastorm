<?php

/* articulo/new.html.twig */
class __TwigTemplate_0cbbcfb0d35d07a66b41bc2621e34f61d37c0a13c74dbbbea47efe98031f6e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articulo/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff30ae4870e22c3361c6301c9fbcf403e28ceea552250d77a903f7a11769d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff30ae4870e22c3361c6301c9fbcf403e28ceea552250d77a903f7a11769d17->enter($__internal_dff30ae4870e22c3361c6301c9fbcf403e28ceea552250d77a903f7a11769d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/new.html.twig"));

        $__internal_f238256fdbc576fe7962c46df42a3e2d0b626da502181667825fadc9936b0d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f238256fdbc576fe7962c46df42a3e2d0b626da502181667825fadc9936b0d5e->enter($__internal_f238256fdbc576fe7962c46df42a3e2d0b626da502181667825fadc9936b0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff30ae4870e22c3361c6301c9fbcf403e28ceea552250d77a903f7a11769d17->leave($__internal_dff30ae4870e22c3361c6301c9fbcf403e28ceea552250d77a903f7a11769d17_prof);

        
        $__internal_f238256fdbc576fe7962c46df42a3e2d0b626da502181667825fadc9936b0d5e->leave($__internal_f238256fdbc576fe7962c46df42a3e2d0b626da502181667825fadc9936b0d5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06e2a1254ce5b6c34f2c204ab65948adf7c246d1115969800d6bb302eb7ffc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e2a1254ce5b6c34f2c204ab65948adf7c246d1115969800d6bb302eb7ffc20->enter($__internal_06e2a1254ce5b6c34f2c204ab65948adf7c246d1115969800d6bb302eb7ffc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12ee28faa7fab11f628a7cb26b2f0964810f76135a50c8a1ade396ce9c20a606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ee28faa7fab11f628a7cb26b2f0964810f76135a50c8a1ade396ce9c20a606->enter($__internal_12ee28faa7fab11f628a7cb26b2f0964810f76135a50c8a1ade396ce9c20a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de artículos</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear artículo Nuevo\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_index");
        echo "\">listado completo</a>
        </li>
    </ul>
";
        
        $__internal_12ee28faa7fab11f628a7cb26b2f0964810f76135a50c8a1ade396ce9c20a606->leave($__internal_12ee28faa7fab11f628a7cb26b2f0964810f76135a50c8a1ade396ce9c20a606_prof);

        
        $__internal_06e2a1254ce5b6c34f2c204ab65948adf7c246d1115969800d6bb302eb7ffc20->leave($__internal_06e2a1254ce5b6c34f2c204ab65948adf7c246d1115969800d6bb302eb7ffc20_prof);

    }

    public function getTemplateName()
    {
        return "articulo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Creación de artículos</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Crear artículo Nuevo\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('articulo_index') }}\">listado completo</a>
        </li>
    </ul>
{% endblock %}
", "articulo/new.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/new.html.twig");
    }
}
