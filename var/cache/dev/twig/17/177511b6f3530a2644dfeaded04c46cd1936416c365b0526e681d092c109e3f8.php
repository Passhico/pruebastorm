<?php

/* base.html.twig */
class __TwigTemplate_6529893593af1e71ea103b33721ce554e83d841cfe884088e23ffb37dbdda3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31ed580b4c207ffe9922aa3382f4beb69f23fd7efedabd2006ca99c7b155d82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ed580b4c207ffe9922aa3382f4beb69f23fd7efedabd2006ca99c7b155d82f->enter($__internal_31ed580b4c207ffe9922aa3382f4beb69f23fd7efedabd2006ca99c7b155d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e3d5f29748cba9f2fb8242d3ac39122e8f4357baf900f29ef0fc2a6d6b4cd0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d5f29748cba9f2fb8242d3ac39122e8f4357baf900f29ef0fc2a6d6b4cd0f6->enter($__internal_e3d5f29748cba9f2fb8242d3ac39122e8f4357baf900f29ef0fc2a6d6b4cd0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>


";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "</body>
</html>
";
        
        $__internal_31ed580b4c207ffe9922aa3382f4beb69f23fd7efedabd2006ca99c7b155d82f->leave($__internal_31ed580b4c207ffe9922aa3382f4beb69f23fd7efedabd2006ca99c7b155d82f_prof);

        
        $__internal_e3d5f29748cba9f2fb8242d3ac39122e8f4357baf900f29ef0fc2a6d6b4cd0f6->leave($__internal_e3d5f29748cba9f2fb8242d3ac39122e8f4357baf900f29ef0fc2a6d6b4cd0f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_236d01b45ad164036386bd9d58b504f9a821a62fe6bf111c15aa558bfddc0ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236d01b45ad164036386bd9d58b504f9a821a62fe6bf111c15aa558bfddc0ce4->enter($__internal_236d01b45ad164036386bd9d58b504f9a821a62fe6bf111c15aa558bfddc0ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_010917ded42caff41e576b2de382e4d9500010954a8a93f4b7ec7d1f4eb3f8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010917ded42caff41e576b2de382e4d9500010954a8a93f4b7ec7d1f4eb3f8e1->enter($__internal_010917ded42caff41e576b2de382e4d9500010954a8a93f4b7ec7d1f4eb3f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prueba de Pascual M.!";
        
        $__internal_010917ded42caff41e576b2de382e4d9500010954a8a93f4b7ec7d1f4eb3f8e1->leave($__internal_010917ded42caff41e576b2de382e4d9500010954a8a93f4b7ec7d1f4eb3f8e1_prof);

        
        $__internal_236d01b45ad164036386bd9d58b504f9a821a62fe6bf111c15aa558bfddc0ce4->leave($__internal_236d01b45ad164036386bd9d58b504f9a821a62fe6bf111c15aa558bfddc0ce4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a70eb1896834393a170331cac1c2cb051c54cd0d12946f1722a4d224316b55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a70eb1896834393a170331cac1c2cb051c54cd0d12946f1722a4d224316b55b->enter($__internal_5a70eb1896834393a170331cac1c2cb051c54cd0d12946f1722a4d224316b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5f7fedaf55faad1efb5a0841a3d313212600c8d78218f0ebb19cfee001e80c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7fedaf55faad1efb5a0841a3d313212600c8d78218f0ebb19cfee001e80c34->enter($__internal_5f7fedaf55faad1efb5a0841a3d313212600c8d78218f0ebb19cfee001e80c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>";
        
        $__internal_5f7fedaf55faad1efb5a0841a3d313212600c8d78218f0ebb19cfee001e80c34->leave($__internal_5f7fedaf55faad1efb5a0841a3d313212600c8d78218f0ebb19cfee001e80c34_prof);

        
        $__internal_5a70eb1896834393a170331cac1c2cb051c54cd0d12946f1722a4d224316b55b->leave($__internal_5a70eb1896834393a170331cac1c2cb051c54cd0d12946f1722a4d224316b55b_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_faa34ca053f34ca07a779192cb64e6cb538a04aca392a7715ad0b4baea38f886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa34ca053f34ca07a779192cb64e6cb538a04aca392a7715ad0b4baea38f886->enter($__internal_faa34ca053f34ca07a779192cb64e6cb538a04aca392a7715ad0b4baea38f886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adc6f71bd5029d196f0588b3b3e6ebe736ad161f0cf910ac8419f5783b1518ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc6f71bd5029d196f0588b3b3e6ebe736ad161f0cf910ac8419f5783b1518ef->enter($__internal_adc6f71bd5029d196f0588b3b3e6ebe736ad161f0cf910ac8419f5783b1518ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 31
        echo "

";
        
        $__internal_adc6f71bd5029d196f0588b3b3e6ebe736ad161f0cf910ac8419f5783b1518ef->leave($__internal_adc6f71bd5029d196f0588b3b3e6ebe736ad161f0cf910ac8419f5783b1518ef_prof);

        
        $__internal_faa34ca053f34ca07a779192cb64e6cb538a04aca392a7715ad0b4baea38f886->leave($__internal_faa34ca053f34ca07a779192cb64e6cb538a04aca392a7715ad0b4baea38f886_prof);

    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_16a16ea67176086068226efe95a0953da58c2a6eb82d279ab11e2149fd0de06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a16ea67176086068226efe95a0953da58c2a6eb82d279ab11e2149fd0de06a->enter($__internal_16a16ea67176086068226efe95a0953da58c2a6eb82d279ab11e2149fd0de06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_91c901d899e7eec1dc8178f68fd7e437c7418f85bb9ade2ccccc09fdfab32023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c901d899e7eec1dc8178f68fd7e437c7418f85bb9ade2ccccc09fdfab32023->enter($__internal_91c901d899e7eec1dc8178f68fd7e437c7418f85bb9ade2ccccc09fdfab32023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 25
        echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" class=\"btn btn-success\">buscador</a>
            </div>
        </nav>
    ";
        
        $__internal_91c901d899e7eec1dc8178f68fd7e437c7418f85bb9ade2ccccc09fdfab32023->leave($__internal_91c901d899e7eec1dc8178f68fd7e437c7418f85bb9ade2ccccc09fdfab32023_prof);

        
        $__internal_16a16ea67176086068226efe95a0953da58c2a6eb82d279ab11e2149fd0de06a->leave($__internal_16a16ea67176086068226efe95a0953da58c2a6eb82d279ab11e2149fd0de06a_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_119b53e747930fb7284b9a954ace87b98a029d2741135bb9fa0602ba2c1c7b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119b53e747930fb7284b9a954ace87b98a029d2741135bb9fa0602ba2c1c7b85->enter($__internal_119b53e747930fb7284b9a954ace87b98a029d2741135bb9fa0602ba2c1c7b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af2c0148dd8a2d0809f638276b6a9a3b1a6a538700dc36c920c6b05cfc20506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2c0148dd8a2d0809f638276b6a9a3b1a6a538700dc36c920c6b05cfc20506c->enter($__internal_af2c0148dd8a2d0809f638276b6a9a3b1a6a538700dc36c920c6b05cfc20506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af2c0148dd8a2d0809f638276b6a9a3b1a6a538700dc36c920c6b05cfc20506c->leave($__internal_af2c0148dd8a2d0809f638276b6a9a3b1a6a538700dc36c920c6b05cfc20506c_prof);

        
        $__internal_119b53e747930fb7284b9a954ace87b98a029d2741135bb9fa0602ba2c1c7b85->leave($__internal_119b53e747930fb7284b9a954ace87b98a029d2741135bb9fa0602ba2c1c7b85_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 34,  151 => 27,  147 => 25,  138 => 24,  126 => 31,  123 => 24,  114 => 23,  85 => 6,  67 => 5,  55 => 35,  53 => 34,  51 => 23,  42 => 18,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Prueba de Pascual M.!{% endblock %}</title>
    {% block stylesheets %}<!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
            crossorigin=\"anonymous\"></script>{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>


{% block body %}
    {% block navbar %}
        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <a href=\"{{ path(\"buscar\") }}\" class=\"btn btn-success\">buscador</a>
            </div>
        </nav>
    {% endblock %}


{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/pascual/pruebastorm/app/Resources/views/base.html.twig");
    }
}
