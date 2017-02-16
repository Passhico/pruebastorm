<?php

/* articulo/busca.html.twig */
class __TwigTemplate_b9363e35daccf3509ab2ca7757a2b4c50382abd0b211b804b973946383cc162c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articulo/busca.html.twig", 1);
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
        $__internal_44b6d2fd4f137130512fa6f2a5d3d780b94cb724365423665e4e311bca3e2ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b6d2fd4f137130512fa6f2a5d3d780b94cb724365423665e4e311bca3e2ef8->enter($__internal_44b6d2fd4f137130512fa6f2a5d3d780b94cb724365423665e4e311bca3e2ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/busca.html.twig"));

        $__internal_051f53f84342a2564e0f6ddc96e6be2c0db4008d4c57aa07eeedcca38ace8bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051f53f84342a2564e0f6ddc96e6be2c0db4008d4c57aa07eeedcca38ace8bd6->enter($__internal_051f53f84342a2564e0f6ddc96e6be2c0db4008d4c57aa07eeedcca38ace8bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/busca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b6d2fd4f137130512fa6f2a5d3d780b94cb724365423665e4e311bca3e2ef8->leave($__internal_44b6d2fd4f137130512fa6f2a5d3d780b94cb724365423665e4e311bca3e2ef8_prof);

        
        $__internal_051f53f84342a2564e0f6ddc96e6be2c0db4008d4c57aa07eeedcca38ace8bd6->leave($__internal_051f53f84342a2564e0f6ddc96e6be2c0db4008d4c57aa07eeedcca38ace8bd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b1a0096df3a69b6605207d7db8850aeccdd03ea389686c7f1d84bab5503f105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1a0096df3a69b6605207d7db8850aeccdd03ea389686c7f1d84bab5503f105->enter($__internal_0b1a0096df3a69b6605207d7db8850aeccdd03ea389686c7f1d84bab5503f105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1fd8d0590eb076ce50287701abfe3216106fb1c699ef0b95faaae1133f9ce2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fd8d0590eb076ce50287701abfe3216106fb1c699ef0b95faaae1133f9ce2f->enter($__internal_f1fd8d0590eb076ce50287701abfe3216106fb1c699ef0b95faaae1133f9ce2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Buscador de Artículos</h1>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formArticulo"]) || array_key_exists("formArticulo", $context) ? $context["formArticulo"] : (function () { throw new Twig_Error_Runtime('Variable "formArticulo" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "

    ";
        // line 8
        $context["counterPuntos"] = 0;
        // line 9
        echo "<table class=\"table table-bordered\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Puntos</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new Twig_Error_Runtime('Variable "articulos" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 20
            echo "        <tr>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "nombre", array()), "html", null, true);
            echo "</td>
            ";
            // line 24
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "puntos", array()), "html", null, true);
            $context["counterPuntos"] = ((isset($context["counterPuntos"]) || array_key_exists("counterPuntos", $context) ? $context["counterPuntos"] : (function () { throw new Twig_Error_Runtime('Variable "counterPuntos" does not exist.', 24, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "puntos", array()));
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
            echo "\" class=\"btn btn-warning\">Cambiar puntos</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["articulo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Buscar Id en Api PCcomponentes</a>
                    </li>

                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_new");
        echo "\" class=\"btn btn-warning\">Crear nuevo Artículo</a>
    </li>
    <li>
        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_index");
        echo "\" class=\"btn btn-warning\">indice Articulos</a>
    </li>

</ul>
<h1> El total de puntos de todos los artículos seleccionados es :  ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["counterPuntos"]) || array_key_exists("counterPuntos", $context) ? $context["counterPuntos"] : (function () { throw new Twig_Error_Runtime('Variable "counterPuntos" does not exist.', 53, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>




";
        
        $__internal_f1fd8d0590eb076ce50287701abfe3216106fb1c699ef0b95faaae1133f9ce2f->leave($__internal_f1fd8d0590eb076ce50287701abfe3216106fb1c699ef0b95faaae1133f9ce2f_prof);

        
        $__internal_0b1a0096df3a69b6605207d7db8850aeccdd03ea389686c7f1d84bab5503f105->leave($__internal_0b1a0096df3a69b6605207d7db8850aeccdd03ea389686c7f1d84bab5503f105_prof);

    }

    public function getTemplateName()
    {
        return "articulo/busca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  136 => 49,  130 => 46,  123 => 41,  110 => 34,  104 => 31,  98 => 28,  89 => 24,  85 => 22,  79 => 21,  76 => 20,  72 => 19,  60 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>Buscador de Artículos</h1>

{{ form(formArticulo) }}

    {%  set counterPuntos = 0 %}
<table class=\"table table-bordered\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Puntos</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    {% for articulo in articulos %}
        <tr>
            <td><a href=\"{{ path('articulo_show', { 'id': articulo.id }) }}\">{{ articulo.id }}</a></td>
            <td>{{ articulo.nombre }}</td>
            {#http://stackoverflow.com/questions/8990146/increment-declared-integer-variable#}
            <td>{{ articulo.puntos }}{% set counterPuntos = counterPuntos + articulo.puntos %}</td>
            <td>
                <ul>
                    <li>
                        <a href=\"{{ path('articulo_show', { 'id': articulo.id }) }}\" class=\"btn btn-warning\">Ver</a>
                    </li>
                    <li>
                        <a href=\"{{ path('articulo_edit', { 'id': articulo.id }) }}\" class=\"btn btn-warning\">Cambiar puntos</a>
                    </li>
                    <li>
                        <a href=\"{{ path('api', { 'id': articulo.id }) }}\" class=\"btn btn-warning\">Buscar Id en Api PCcomponentes</a>
                    </li>

                </ul>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<ul>
    <li>
        <a href=\"{{ path('articulo_new') }}\" class=\"btn btn-warning\">Crear nuevo Artículo</a>
    </li>
    <li>
        <a href=\"{{ path(\"articulo_index\") }}\" class=\"btn btn-warning\">indice Articulos</a>
    </li>

</ul>
<h1> El total de puntos de todos los artículos seleccionados es :  {{ counterPuntos }}</h1>




{% endblock %}

", "articulo/busca.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/busca.html.twig");
    }
}
