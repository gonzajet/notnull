<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1f1beee5acd99dfd1f2ac8608205a38402ff94bec6cdb5914d17351015f8707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f1beee5acd99dfd1f2ac8608205a38402ff94bec6cdb5914d17351015f8707->enter($__internal_a1f1beee5acd99dfd1f2ac8608205a38402ff94bec6cdb5914d17351015f8707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3e920d97c2d13cfdcd5bb82639a97d86a6d122e4ad2cae79d9f14230f31dea30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e920d97c2d13cfdcd5bb82639a97d86a6d122e4ad2cae79d9f14230f31dea30->enter($__internal_3e920d97c2d13cfdcd5bb82639a97d86a6d122e4ad2cae79d9f14230f31dea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" 
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_a1f1beee5acd99dfd1f2ac8608205a38402ff94bec6cdb5914d17351015f8707->leave($__internal_a1f1beee5acd99dfd1f2ac8608205a38402ff94bec6cdb5914d17351015f8707_prof);

        
        $__internal_3e920d97c2d13cfdcd5bb82639a97d86a6d122e4ad2cae79d9f14230f31dea30->leave($__internal_3e920d97c2d13cfdcd5bb82639a97d86a6d122e4ad2cae79d9f14230f31dea30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eec3d4ee7399521d8efa00f74ea1db8a76f9fd7494f7b12ba23b02a3654b6cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec3d4ee7399521d8efa00f74ea1db8a76f9fd7494f7b12ba23b02a3654b6cf2->enter($__internal_eec3d4ee7399521d8efa00f74ea1db8a76f9fd7494f7b12ba23b02a3654b6cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1919628999488de3a40cf6766dcee7b85b319f39e30c769c8e6b9e50529edfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1919628999488de3a40cf6766dcee7b85b319f39e30c769c8e6b9e50529edfb->enter($__internal_a1919628999488de3a40cf6766dcee7b85b319f39e30c769c8e6b9e50529edfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto!";
        
        $__internal_a1919628999488de3a40cf6766dcee7b85b319f39e30c769c8e6b9e50529edfb->leave($__internal_a1919628999488de3a40cf6766dcee7b85b319f39e30c769c8e6b9e50529edfb_prof);

        
        $__internal_eec3d4ee7399521d8efa00f74ea1db8a76f9fd7494f7b12ba23b02a3654b6cf2->leave($__internal_eec3d4ee7399521d8efa00f74ea1db8a76f9fd7494f7b12ba23b02a3654b6cf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a57e31cfb45c8215e28caa1d3d39a5156f3c0f16c759118e45086c305bdabb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57e31cfb45c8215e28caa1d3d39a5156f3c0f16c759118e45086c305bdabb62->enter($__internal_a57e31cfb45c8215e28caa1d3d39a5156f3c0f16c759118e45086c305bdabb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb29fd9676f304d152eb662e37ff2b03ce9970a3c0462cf45df6cac5332a0432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb29fd9676f304d152eb662e37ff2b03ce9970a3c0462cf45df6cac5332a0432->enter($__internal_bb29fd9676f304d152eb662e37ff2b03ce9970a3c0462cf45df6cac5332a0432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
           
        ";
        
        $__internal_bb29fd9676f304d152eb662e37ff2b03ce9970a3c0462cf45df6cac5332a0432->leave($__internal_bb29fd9676f304d152eb662e37ff2b03ce9970a3c0462cf45df6cac5332a0432_prof);

        
        $__internal_a57e31cfb45c8215e28caa1d3d39a5156f3c0f16c759118e45086c305bdabb62->leave($__internal_a57e31cfb45c8215e28caa1d3d39a5156f3c0f16c759118e45086c305bdabb62_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b43e10293b959ff1dbf7c0f23f7f3af8387b09262f45434651bdf20e5292bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b43e10293b959ff1dbf7c0f23f7f3af8387b09262f45434651bdf20e5292bd->enter($__internal_d2b43e10293b959ff1dbf7c0f23f7f3af8387b09262f45434651bdf20e5292bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_811db87ec1860dfdf574ffa983092d5996f37a18e496cee10f3ccf37a240e78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811db87ec1860dfdf574ffa983092d5996f37a18e496cee10f3ccf37a240e78b->enter($__internal_811db87ec1860dfdf574ffa983092d5996f37a18e496cee10f3ccf37a240e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_811db87ec1860dfdf574ffa983092d5996f37a18e496cee10f3ccf37a240e78b->leave($__internal_811db87ec1860dfdf574ffa983092d5996f37a18e496cee10f3ccf37a240e78b_prof);

        
        $__internal_d2b43e10293b959ff1dbf7c0f23f7f3af8387b09262f45434651bdf20e5292bd->leave($__internal_d2b43e10293b959ff1dbf7c0f23f7f3af8387b09262f45434651bdf20e5292bd_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8748876fbe939ed8379af5ad36dba1260f2d71f9a82b4cc5b9877791308e3886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8748876fbe939ed8379af5ad36dba1260f2d71f9a82b4cc5b9877791308e3886->enter($__internal_8748876fbe939ed8379af5ad36dba1260f2d71f9a82b4cc5b9877791308e3886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_685617d45ea457d2fce3366dc63aba0d2cd686ce330303c78c75a43e52f8a823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685617d45ea457d2fce3366dc63aba0d2cd686ce330303c78c75a43e52f8a823->enter($__internal_685617d45ea457d2fce3366dc63aba0d2cd686ce330303c78c75a43e52f8a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_685617d45ea457d2fce3366dc63aba0d2cd686ce330303c78c75a43e52f8a823->leave($__internal_685617d45ea457d2fce3366dc63aba0d2cd686ce330303c78c75a43e52f8a823_prof);

        
        $__internal_8748876fbe939ed8379af5ad36dba1260f2d71f9a82b4cc5b9877791308e3886->leave($__internal_8748876fbe939ed8379af5ad36dba1260f2d71f9a82b4cc5b9877791308e3886_prof);

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
        return array (  141 => 17,  136 => 16,  127 => 15,  110 => 14,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 19,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Proyecto!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('public/css/style.css')}}\" rel=\"stylesheet\" >
            <link href=\"{{asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
           
        {% endblock %}
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" 
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-3.2.1.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\base.html.twig");
    }
}
