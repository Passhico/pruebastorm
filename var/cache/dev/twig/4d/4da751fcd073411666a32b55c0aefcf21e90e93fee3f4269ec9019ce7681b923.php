<?php

/* articulo/index.html.twig */
class __TwigTemplate_1e816549b4782a7fd71653d50361cafb37be23a18b670c68fec2ef2c19f1af00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articulo/index.html.twig", 1);
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
        $__internal_00aebcb32efdb38e15ef952fb8a34a53ffe93fab8f73e7fb160fe04bbf53723d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aebcb32efdb38e15ef952fb8a34a53ffe93fab8f73e7fb160fe04bbf53723d->enter($__internal_00aebcb32efdb38e15ef952fb8a34a53ffe93fab8f73e7fb160fe04bbf53723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/index.html.twig"));

        $__internal_917fe50912d567c942bb185b60dfe0df2fa74e9ab295679c169051f6c2c51d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917fe50912d567c942bb185b60dfe0df2fa74e9ab295679c169051f6c2c51d2b->enter($__internal_917fe50912d567c942bb185b60dfe0df2fa74e9ab295679c169051f6c2c51d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00aebcb32efdb38e15ef952fb8a34a53ffe93fab8f73e7fb160fe04bbf53723d->leave($__internal_00aebcb32efdb38e15ef952fb8a34a53ffe93fab8f73e7fb160fe04bbf53723d_prof);

        
        $__internal_917fe50912d567c942bb185b60dfe0df2fa74e9ab295679c169051f6c2c51d2b->leave($__internal_917fe50912d567c942bb185b60dfe0df2fa74e9ab295679c169051f6c2c51d2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a4353365c72a2a2f8cd34643faa3d3818c57d8ea4ee2e9d7e016a23bfc2f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a4353365c72a2a2f8cd34643faa3d3818c57d8ea4ee2e9d7e016a23bfc2f9b->enter($__internal_e4a4353365c72a2a2f8cd34643faa3d3818c57d8ea4ee2e9d7e016a23bfc2f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_010432dd5d3cf9100d6cee1f606b0536020eeeb8266d1e5b483e7a27f5750b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010432dd5d3cf9100d6cee1f606b0536020eeeb8266d1e5b483e7a27f5750b88->enter($__internal_010432dd5d3cf9100d6cee1f606b0536020eeeb8266d1e5b483e7a27f5750b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_new");
        echo "\" class=\"btn btn-success\">Crear un Artículo</a>
    </li>

    <h1>Todos los Artículos</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id Artículo</th>
                <th>Nombre Articulo</th>
                <th>Puntos Asociados</th>
                <th>Acciones sobre el artículo</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new Twig_Error_Runtime('Variable "articulos" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "puntos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Cambiar Puntos</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscador", array("nombre" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "nombre", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Buscar similar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    ";
        
        $__internal_010432dd5d3cf9100d6cee1f606b0536020eeeb8266d1e5b483e7a27f5750b88->leave($__internal_010432dd5d3cf9100d6cee1f606b0536020eeeb8266d1e5b483e7a27f5750b88_prof);

        
        $__internal_e4a4353365c72a2a2f8cd34643faa3d3818c57d8ea4ee2e9d7e016a23bfc2f9b->leave($__internal_e4a4353365c72a2a2f8cd34643faa3d3818c57d8ea4ee2e9d7e016a23bfc2f9b_prof);

    }

    public function getTemplateName()
    {
        return "articulo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  106 => 34,  100 => 31,  94 => 28,  87 => 24,  83 => 23,  77 => 22,  74 => 21,  70 => 20,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <li>
        <a href=\"{{ path(\"articulo_new\") }}\" class=\"btn btn-success\">Crear un Artículo</a>
    </li>

    <h1>Todos los Artículos</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id Artículo</th>
                <th>Nombre Articulo</th>
                <th>Puntos Asociados</th>
                <th>Acciones sobre el artículo</th>
            </tr>
        </thead>
        <tbody>
        {% for articulo in articulos %}
            <tr>
                <td><a href=\"{{ path('articulo_show', { 'id': articulo.id }) }}\">{{ articulo.id }}</a></td>
                <td>{{ articulo.nombre }}</td>
                <td>{{ articulo.puntos }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('articulo_show', { 'id': articulo.id }) }}\" class=\"btn btn-warning\">Ver</a>
                        </li>
                        <li>
                            <a href=\"{{ path('articulo_edit', { 'id': articulo.id }) }}\" class=\"btn btn-warning\">Cambiar Puntos</a>
                        </li>
                        <li>
                            <a href=\"{{ path('buscador', { 'nombre': articulo.nombre }) }}\" class=\"btn btn-warning\">Buscar similar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {#{{ dump(articulos) }}#}
{% endblock %}
", "articulo/index.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/index.html.twig");
    }
}
