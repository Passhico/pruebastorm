<?php

/* articulo/edit.html.twig */
class __TwigTemplate_2bdd3bcbde964ad39fa623358e027669d086e56185b8bbd7f525b58b631ef303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articulo/edit.html.twig", 1);
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
        $__internal_4a47dae862568f7ff344470b60f2238442265af89255e7f6e922c03d36d7d854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a47dae862568f7ff344470b60f2238442265af89255e7f6e922c03d36d7d854->enter($__internal_4a47dae862568f7ff344470b60f2238442265af89255e7f6e922c03d36d7d854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/edit.html.twig"));

        $__internal_f4a5e025d04f5302049997d88264bdc2732a526aca4dc7475efa43d74d429454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a5e025d04f5302049997d88264bdc2732a526aca4dc7475efa43d74d429454->enter($__internal_f4a5e025d04f5302049997d88264bdc2732a526aca4dc7475efa43d74d429454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articulo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a47dae862568f7ff344470b60f2238442265af89255e7f6e922c03d36d7d854->leave($__internal_4a47dae862568f7ff344470b60f2238442265af89255e7f6e922c03d36d7d854_prof);

        
        $__internal_f4a5e025d04f5302049997d88264bdc2732a526aca4dc7475efa43d74d429454->leave($__internal_f4a5e025d04f5302049997d88264bdc2732a526aca4dc7475efa43d74d429454_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57ac8f5fffb763dd40f72c8d67eb350bc52a6541e0223b1825e9cc5727a492b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ac8f5fffb763dd40f72c8d67eb350bc52a6541e0223b1825e9cc5727a492b6->enter($__internal_57ac8f5fffb763dd40f72c8d67eb350bc52a6541e0223b1825e9cc5727a492b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16929ba439be2bb2cbccc1109f49bec63b203b94090502eacc37909e67a32af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16929ba439be2bb2cbccc1109f49bec63b203b94090502eacc37909e67a32af0->enter($__internal_16929ba439be2bb2cbccc1109f49bec63b203b94090502eacc37909e67a32af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cambiar los puntos del artículo</h1>

    <form name=\"appbundle_articulo\" method=\"post\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" class=\"btn btn-warning\"/>
    </form>

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articulo_index");
        echo "\" class='btn btn-success'>Listado completo</a>
        </li>

        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
            <input type=\"submit\" value=\"Borrar\" class=\"btn btn-danger\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>



";
        
        $__internal_16929ba439be2bb2cbccc1109f49bec63b203b94090502eacc37909e67a32af0->leave($__internal_16929ba439be2bb2cbccc1109f49bec63b203b94090502eacc37909e67a32af0_prof);

        
        $__internal_57ac8f5fffb763dd40f72c8d67eb350bc52a6541e0223b1825e9cc5727a492b6->leave($__internal_57ac8f5fffb763dd40f72c8d67eb350bc52a6541e0223b1825e9cc5727a492b6_prof);

    }

    public function getTemplateName()
    {
        return "articulo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  70 => 17,  63 => 13,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Cambiar los puntos del artículo</h1>

    <form name=\"appbundle_articulo\" method=\"post\">
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" class=\"btn btn-warning\"/>
    </form>

    <ul>
        <li>
            <a href=\"{{ path('articulo_index') }}\" class='btn btn-success'>Listado completo</a>
        </li>

        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Borrar\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>



{% endblock %}
", "articulo/edit.html.twig", "/home/pascual/pruebastorm/app/Resources/views/articulo/edit.html.twig");
    }
}
