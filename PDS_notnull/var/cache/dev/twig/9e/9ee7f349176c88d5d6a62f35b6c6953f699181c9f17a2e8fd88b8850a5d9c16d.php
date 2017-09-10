<?php

/* AppBundle:Auto:index.html.twig */
class __TwigTemplate_57105576a50603f98cf58ae332a0926a6e0082a18ae5709482084a9fdd08a462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Auto:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1a622229b87ee6825b173ade7d03df52baea44aa1d8563d3efdc347344e8532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a622229b87ee6825b173ade7d03df52baea44aa1d8563d3efdc347344e8532->enter($__internal_f1a622229b87ee6825b173ade7d03df52baea44aa1d8563d3efdc347344e8532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auto:index.html.twig"));

        $__internal_3ba5644b26c1e534ee432ab3f9806fbf139ad9c33beca6a0acd7a880021b03d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba5644b26c1e534ee432ab3f9806fbf139ad9c33beca6a0acd7a880021b03d2->enter($__internal_3ba5644b26c1e534ee432ab3f9806fbf139ad9c33beca6a0acd7a880021b03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auto:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a622229b87ee6825b173ade7d03df52baea44aa1d8563d3efdc347344e8532->leave($__internal_f1a622229b87ee6825b173ade7d03df52baea44aa1d8563d3efdc347344e8532_prof);

        
        $__internal_3ba5644b26c1e534ee432ab3f9806fbf139ad9c33beca6a0acd7a880021b03d2->leave($__internal_3ba5644b26c1e534ee432ab3f9806fbf139ad9c33beca6a0acd7a880021b03d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ead278b79b33734a457a76f32e4f0d737b3f3974c35273afca40aa0a6b647f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ead278b79b33734a457a76f32e4f0d737b3f3974c35273afca40aa0a6b647f->enter($__internal_75ead278b79b33734a457a76f32e4f0d737b3f3974c35273afca40aa0a6b647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18d138ab79b3a577ed30fa3d239e59f53d8af08b6b96ad463b009e4a7f301432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d138ab79b3a577ed30fa3d239e59f53d8af08b6b96ad463b009e4a7f301432->enter($__internal_18d138ab79b3a577ed30fa3d239e59f53d8af08b6b96ad463b009e4a7f301432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Auto:index";
        
        $__internal_18d138ab79b3a577ed30fa3d239e59f53d8af08b6b96ad463b009e4a7f301432->leave($__internal_18d138ab79b3a577ed30fa3d239e59f53d8af08b6b96ad463b009e4a7f301432_prof);

        
        $__internal_75ead278b79b33734a457a76f32e4f0d737b3f3974c35273afca40aa0a6b647f->leave($__internal_75ead278b79b33734a457a76f32e4f0d737b3f3974c35273afca40aa0a6b647f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e597e86f06faeb044bb859fea53298412b93228cffc443988eeaa1e6fbb74375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e597e86f06faeb044bb859fea53298412b93228cffc443988eeaa1e6fbb74375->enter($__internal_e597e86f06faeb044bb859fea53298412b93228cffc443988eeaa1e6fbb74375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55248c2c46fc8a669c07c1f163c6736a0a277602f2a617a803d56598ac6c5f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55248c2c46fc8a669c07c1f163c6736a0a277602f2a617a803d56598ac6c5f7a->enter($__internal_55248c2c46fc8a669c07c1f163c6736a0a277602f2a617a803d56598ac6c5f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Auto:index page</h1>
";
        
        $__internal_55248c2c46fc8a669c07c1f163c6736a0a277602f2a617a803d56598ac6c5f7a->leave($__internal_55248c2c46fc8a669c07c1f163c6736a0a277602f2a617a803d56598ac6c5f7a_prof);

        
        $__internal_e597e86f06faeb044bb859fea53298412b93228cffc443988eeaa1e6fbb74375->leave($__internal_e597e86f06faeb044bb859fea53298412b93228cffc443988eeaa1e6fbb74375_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Auto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Auto:index{% endblock %}

{% block body %}
<h1>Welcome to the Auto:index page</h1>
{% endblock %}
", "AppBundle:Auto:index.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\src\\AppBundle/Resources/views/Auto/index.html.twig");
    }
}
