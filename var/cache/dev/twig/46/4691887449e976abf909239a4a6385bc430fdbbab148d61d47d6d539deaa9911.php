<?php

/* :articulo:apiArticulo.html.twig */
class __TwigTemplate_714d12c2b400f70341a9ca79aa5e4f440a75ca9b7f3a995d9d5b47ac580b8c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articulo:apiArticulo.html.twig", 1);
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
        $__internal_8a9d6e2e89e13016b7eb89e9b15d952cdf0ce0bb0dc426a5e63987b14e214b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9d6e2e89e13016b7eb89e9b15d952cdf0ce0bb0dc426a5e63987b14e214b31->enter($__internal_8a9d6e2e89e13016b7eb89e9b15d952cdf0ce0bb0dc426a5e63987b14e214b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articulo:apiArticulo.html.twig"));

        $__internal_ac205bad378399b8d21beb829eb1e954cf0a4032c97051a1eac3939c07e727c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac205bad378399b8d21beb829eb1e954cf0a4032c97051a1eac3939c07e727c8->enter($__internal_ac205bad378399b8d21beb829eb1e954cf0a4032c97051a1eac3939c07e727c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articulo:apiArticulo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9d6e2e89e13016b7eb89e9b15d952cdf0ce0bb0dc426a5e63987b14e214b31->leave($__internal_8a9d6e2e89e13016b7eb89e9b15d952cdf0ce0bb0dc426a5e63987b14e214b31_prof);

        
        $__internal_ac205bad378399b8d21beb829eb1e954cf0a4032c97051a1eac3939c07e727c8->leave($__internal_ac205bad378399b8d21beb829eb1e954cf0a4032c97051a1eac3939c07e727c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f23624673e5ab1f1c7f060ee8f9ea0b08c6bfd7c17c90951939b0c5b4b94ea73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23624673e5ab1f1c7f060ee8f9ea0b08c6bfd7c17c90951939b0c5b4b94ea73->enter($__internal_f23624673e5ab1f1c7f060ee8f9ea0b08c6bfd7c17c90951939b0c5b4b94ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a772c1eb2dcdab1eb0007eaa42558b23615e5b421c1e243cc0763bebb427ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a772c1eb2dcdab1eb0007eaa42558b23615e5b421c1e243cc0763bebb427ebd->enter($__internal_7a772c1eb2dcdab1eb0007eaa42558b23615e5b421c1e243cc0763bebb427ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Articulo</h1>

    <table class=\"table table-striped\">
        <tbody>
        <tr>
            <th>Id Articulo</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["articulo_idArticle"]) || array_key_exists("articulo_idArticle", $context) ? $context["articulo_idArticle"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_idArticle" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre Artículo</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["articulo_nombre"]) || array_key_exists("articulo_nombre", $context) ? $context["articulo_nombre"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_nombre" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["articulo_price"]) || array_key_exists("articulo_price", $context) ? $context["articulo_price"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_price" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>imagen</th>
            <td>
                <a href=\"";
        // line 23
        echo (isset($context["articulo_image"]) || array_key_exists("articulo_image", $context) ? $context["articulo_image"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_image" does not exist.', 23, $this->getSourceContext()); })());
        echo "\" class=\"btn btn-success\">Ver Imagen</a>
            </td>
        </tr>
        <tr>
            <th>Detalle</th>
            <td>";
        // line 28
        echo (isset($context["articulo_detalle"]) || array_key_exists("articulo_detalle", $context) ? $context["articulo_detalle"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_detalle" does not exist.', 28, $this->getSourceContext()); })());
        echo "</td>
        </tr>
        <tr>
            <th>Stock Murcia</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["articulo_stockMurcia"]) || array_key_exists("articulo_stockMurcia", $context) ? $context["articulo_stockMurcia"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_stockMurcia" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Stock Madrid</th>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["articulo_stockMadrid"]) || array_key_exists("articulo_stockMadrid", $context) ? $context["articulo_stockMadrid"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_stockMadrid" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_index");
        echo "\" class=\"btn btn-success\">Listado completo</a>
        </li>

    </ul>
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["articulo_arrayCompleto"]) || array_key_exists("articulo_arrayCompleto", $context) ? $context["articulo_arrayCompleto"] : (function () { throw new Twig_Error_Runtime('Variable "articulo_arrayCompleto" does not exist.', 47, $this->getSourceContext()); })()));
        echo "

";
        
        $__internal_7a772c1eb2dcdab1eb0007eaa42558b23615e5b421c1e243cc0763bebb427ebd->leave($__internal_7a772c1eb2dcdab1eb0007eaa42558b23615e5b421c1e243cc0763bebb427ebd_prof);

        
        $__internal_f23624673e5ab1f1c7f060ee8f9ea0b08c6bfd7c17c90951939b0c5b4b94ea73->leave($__internal_f23624673e5ab1f1c7f060ee8f9ea0b08c6bfd7c17c90951939b0c5b4b94ea73_prof);

    }

    public function getTemplateName()
    {
        return ":articulo:apiArticulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  111 => 43,  101 => 36,  94 => 32,  87 => 28,  79 => 23,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Articulo</h1>

    <table class=\"table table-striped\">
        <tbody>
        <tr>
            <th>Id Articulo</th>
            <td>{{ articulo_idArticle }}</td>
        </tr>
        <tr>
            <th>Nombre Artículo</th>
            <td>{{ articulo_nombre }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ articulo_price }}</td>
        </tr>
        <tr>
            <th>imagen</th>
            <td>
                <a href=\"{{ articulo_image | raw}}\" class=\"btn btn-success\">Ver Imagen</a>
            </td>
        </tr>
        <tr>
            <th>Detalle</th>
            <td>{{ articulo_detalle | raw }}</td>
        </tr>
        <tr>
            <th>Stock Murcia</th>
            <td>{{ articulo_stockMurcia }}</td>
        </tr>
        <tr>
            <th>Stock Madrid</th>
            <td>{{ articulo_stockMadrid }}</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('articulo_index') }}\" class=\"btn btn-success\">Listado completo</a>
        </li>

    </ul>
    {{ dump(articulo_arrayCompleto) }}

{% endblock %}
", ":articulo:apiArticulo.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/apiArticulo.html.twig");
    }
}
