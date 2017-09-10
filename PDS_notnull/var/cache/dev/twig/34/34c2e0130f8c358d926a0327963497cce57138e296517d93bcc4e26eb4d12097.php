<?php

/* ::base.html.twig */
class __TwigTemplate_7ba426c3fd6db79c519a62bea0910f1177809241c289686031b107a8977fbd24 extends Twig_Template
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
        $__internal_1e549ddf9896a14a9d45e11ef32819dedc5429b75f1bc9b9baf4c5cc14ff2224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e549ddf9896a14a9d45e11ef32819dedc5429b75f1bc9b9baf4c5cc14ff2224->enter($__internal_1e549ddf9896a14a9d45e11ef32819dedc5429b75f1bc9b9baf4c5cc14ff2224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d1ec4b7fabc7043e567b9aa078f1ee9e1002943a313b161f16bd11935916bd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ec4b7fabc7043e567b9aa078f1ee9e1002943a313b161f16bd11935916bd59->enter($__internal_d1ec4b7fabc7043e567b9aa078f1ee9e1002943a313b161f16bd11935916bd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1e549ddf9896a14a9d45e11ef32819dedc5429b75f1bc9b9baf4c5cc14ff2224->leave($__internal_1e549ddf9896a14a9d45e11ef32819dedc5429b75f1bc9b9baf4c5cc14ff2224_prof);

        
        $__internal_d1ec4b7fabc7043e567b9aa078f1ee9e1002943a313b161f16bd11935916bd59->leave($__internal_d1ec4b7fabc7043e567b9aa078f1ee9e1002943a313b161f16bd11935916bd59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e7351071a3d0c6a1cdb4a2ad2aeb2a8b626cbec2184ce853d8578a26de959a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7351071a3d0c6a1cdb4a2ad2aeb2a8b626cbec2184ce853d8578a26de959a7->enter($__internal_8e7351071a3d0c6a1cdb4a2ad2aeb2a8b626cbec2184ce853d8578a26de959a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fec2728b3938bc072f53f2e48f87afbc1af139b0cee6b5cc6bf7a743bc299f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec2728b3938bc072f53f2e48f87afbc1af139b0cee6b5cc6bf7a743bc299f96->enter($__internal_fec2728b3938bc072f53f2e48f87afbc1af139b0cee6b5cc6bf7a743bc299f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fec2728b3938bc072f53f2e48f87afbc1af139b0cee6b5cc6bf7a743bc299f96->leave($__internal_fec2728b3938bc072f53f2e48f87afbc1af139b0cee6b5cc6bf7a743bc299f96_prof);

        
        $__internal_8e7351071a3d0c6a1cdb4a2ad2aeb2a8b626cbec2184ce853d8578a26de959a7->leave($__internal_8e7351071a3d0c6a1cdb4a2ad2aeb2a8b626cbec2184ce853d8578a26de959a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19f945e21aa7320b1ddb2a07f51275b42754fac984e99f69cee20d898ca576bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f945e21aa7320b1ddb2a07f51275b42754fac984e99f69cee20d898ca576bf->enter($__internal_19f945e21aa7320b1ddb2a07f51275b42754fac984e99f69cee20d898ca576bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd0006a0d179dae8794605d11a5e14e134d47ed1720f59fec23d9089b3123f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0006a0d179dae8794605d11a5e14e134d47ed1720f59fec23d9089b3123f2b->enter($__internal_bd0006a0d179dae8794605d11a5e14e134d47ed1720f59fec23d9089b3123f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd0006a0d179dae8794605d11a5e14e134d47ed1720f59fec23d9089b3123f2b->leave($__internal_bd0006a0d179dae8794605d11a5e14e134d47ed1720f59fec23d9089b3123f2b_prof);

        
        $__internal_19f945e21aa7320b1ddb2a07f51275b42754fac984e99f69cee20d898ca576bf->leave($__internal_19f945e21aa7320b1ddb2a07f51275b42754fac984e99f69cee20d898ca576bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38b7896386a266f46516fd496b0a8a1a6fc265ac26f5cdb1807b9f981d624be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38b7896386a266f46516fd496b0a8a1a6fc265ac26f5cdb1807b9f981d624be->enter($__internal_e38b7896386a266f46516fd496b0a8a1a6fc265ac26f5cdb1807b9f981d624be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f83b60a8c7e653d7250f0c3b1ec697656a2f5fc57dd693c0caf070d87997301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f83b60a8c7e653d7250f0c3b1ec697656a2f5fc57dd693c0caf070d87997301->enter($__internal_9f83b60a8c7e653d7250f0c3b1ec697656a2f5fc57dd693c0caf070d87997301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f83b60a8c7e653d7250f0c3b1ec697656a2f5fc57dd693c0caf070d87997301->leave($__internal_9f83b60a8c7e653d7250f0c3b1ec697656a2f5fc57dd693c0caf070d87997301_prof);

        
        $__internal_e38b7896386a266f46516fd496b0a8a1a6fc265ac26f5cdb1807b9f981d624be->leave($__internal_e38b7896386a266f46516fd496b0a8a1a6fc265ac26f5cdb1807b9f981d624be_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bce471d33c55b3288e1b523ff9a6ea4086a3b0fce3718210bbe8dbe9ab970ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce471d33c55b3288e1b523ff9a6ea4086a3b0fce3718210bbe8dbe9ab970ef7->enter($__internal_bce471d33c55b3288e1b523ff9a6ea4086a3b0fce3718210bbe8dbe9ab970ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0988e9237ae2226c47ff014d91f6c9efc2c8e10c8dd19e387e05dceb944cdacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0988e9237ae2226c47ff014d91f6c9efc2c8e10c8dd19e387e05dceb944cdacb->enter($__internal_0988e9237ae2226c47ff014d91f6c9efc2c8e10c8dd19e387e05dceb944cdacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0988e9237ae2226c47ff014d91f6c9efc2c8e10c8dd19e387e05dceb944cdacb->leave($__internal_0988e9237ae2226c47ff014d91f6c9efc2c8e10c8dd19e387e05dceb944cdacb_prof);

        
        $__internal_bce471d33c55b3288e1b523ff9a6ea4086a3b0fce3718210bbe8dbe9ab970ef7->leave($__internal_bce471d33c55b3288e1b523ff9a6ea4086a3b0fce3718210bbe8dbe9ab970ef7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app/Resources\\views/base.html.twig");
    }
}
