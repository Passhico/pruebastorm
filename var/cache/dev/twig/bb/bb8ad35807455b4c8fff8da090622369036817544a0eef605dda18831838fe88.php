<?php

/* articulo/show.html.twig */
class __TwigTemplate_16b6f1411b9f21eecea84a0622c1bb76e2e26957f82ec0a436bc82b6cc396b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articulo/show.html.twig", 1);
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
        $__internal_0cf5def49c57702041c533312ddfd6234b5609e416febbc3e110dc961ad69ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf5def49c57702041c533312ddfd6234b5609e416febbc3e110dc961ad69ab2->enter($__internal_0cf5def49c57702041c533312ddfd6234b5609e416febbc3e110dc961ad69ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/show.html.twig"));

        $__internal_07105a6646dfb31f78afa5b20869fc8394a7203a10a7de35be364d02399d5d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07105a6646dfb31f78afa5b20869fc8394a7203a10a7de35be364d02399d5d71->enter($__internal_07105a6646dfb31f78afa5b20869fc8394a7203a10a7de35be364d02399d5d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf5def49c57702041c533312ddfd6234b5609e416febbc3e110dc961ad69ab2->leave($__internal_0cf5def49c57702041c533312ddfd6234b5609e416febbc3e110dc961ad69ab2_prof);

        
        $__internal_07105a6646dfb31f78afa5b20869fc8394a7203a10a7de35be364d02399d5d71->leave($__internal_07105a6646dfb31f78afa5b20869fc8394a7203a10a7de35be364d02399d5d71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58815c8bb5d0788fe46e0522ed6a3a120e96f1fb7bd3a4d4858164372337cbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58815c8bb5d0788fe46e0522ed6a3a120e96f1fb7bd3a4d4858164372337cbf5->enter($__internal_58815c8bb5d0788fe46e0522ed6a3a120e96f1fb7bd3a4d4858164372337cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35bba51eea3baa0a39c53a9dec41bfa29eedfba77c68df0b1b7402aeef96e0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bba51eea3baa0a39c53a9dec41bfa29eedfba77c68df0b1b7402aeef96e0e9->enter($__internal_35bba51eea3baa0a39c53a9dec41bfa29eedfba77c68df0b1b7402aeef96e0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articulo</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 14, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Puntos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 18, $this->getSourceContext()); })()), "puntos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_index");
        echo "\" class=\"btn btn-success\">Listado completo</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Edit</a>
        </li>
        <li>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscador", array("nombre" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 31, $this->getSourceContext()); })()), "nombre", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Buscar Similares</a>
        </li>
        <li>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar Artículo\"  class=\"btn btn-danger\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new Twig_Error_Runtime('Variable "articulo" does not exist.', 39, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_35bba51eea3baa0a39c53a9dec41bfa29eedfba77c68df0b1b7402aeef96e0e9->leave($__internal_35bba51eea3baa0a39c53a9dec41bfa29eedfba77c68df0b1b7402aeef96e0e9_prof);

        
        $__internal_58815c8bb5d0788fe46e0522ed6a3a120e96f1fb7bd3a4d4858164372337cbf5->leave($__internal_58815c8bb5d0788fe46e0522ed6a3a120e96f1fb7bd3a4d4858164372337cbf5_prof);

    }

    public function getTemplateName()
    {
        return "articulo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  104 => 36,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Articulo</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ articulo.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ articulo.nombre }}</td>
            </tr>
            <tr>
                <th>Puntos</th>
                <td>{{ articulo.puntos }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('articulo_index') }}\" class=\"btn btn-success\">Listado completo</a>
        </li>
        <li>
            <a href=\"{{ path('articulo_edit', { 'id': articulo.id }) }}\" class=\"btn btn-success\">Edit</a>
        </li>
        <li>
            <a href=\"{{ path('buscador', { 'nombre': articulo.nombre }) }}\" class=\"btn btn-success\">Buscar Similares</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar Artículo\"  class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    {{ dump(articulo) }}
{% endblock %}
", "articulo/show.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/show.html.twig");
    }
}
