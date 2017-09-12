<?php

/* usuario/new.html.twig */
class __TwigTemplate_7239c496dd62e91583fa85eb21a48355bb571abfe5acf48623f9075ecc0e1850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
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
        $__internal_76a56a54c130f1a1c9727ab44404967f0ca0ab595ea747a52412a83c173b3be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a56a54c130f1a1c9727ab44404967f0ca0ab595ea747a52412a83c173b3be8->enter($__internal_76a56a54c130f1a1c9727ab44404967f0ca0ab595ea747a52412a83c173b3be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_dbe50c6c447e7c267674ad2f23b58e5572a161885464b1f6fad9603543e22190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe50c6c447e7c267674ad2f23b58e5572a161885464b1f6fad9603543e22190->enter($__internal_dbe50c6c447e7c267674ad2f23b58e5572a161885464b1f6fad9603543e22190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a56a54c130f1a1c9727ab44404967f0ca0ab595ea747a52412a83c173b3be8->leave($__internal_76a56a54c130f1a1c9727ab44404967f0ca0ab595ea747a52412a83c173b3be8_prof);

        
        $__internal_dbe50c6c447e7c267674ad2f23b58e5572a161885464b1f6fad9603543e22190->leave($__internal_dbe50c6c447e7c267674ad2f23b58e5572a161885464b1f6fad9603543e22190_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f28e02deb20a0f964fcd9f50066f102cf3f557304af2b34cea17d9592264d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f28e02deb20a0f964fcd9f50066f102cf3f557304af2b34cea17d9592264d4->enter($__internal_91f28e02deb20a0f964fcd9f50066f102cf3f557304af2b34cea17d9592264d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9e88f634b9fed155d7ca137ba768d690fa42df5288a180eb6631332caf15b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e88f634b9fed155d7ca137ba768d690fa42df5288a180eb6631332caf15b4b->enter($__internal_d9e88f634b9fed155d7ca137ba768d690fa42df5288a180eb6631332caf15b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form>
  <div class=\"row\">
      <div class=\"form-group\">
      <label for=\"exampleInputEmail1\">Email address</label>
      <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>
      <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Password</label>
        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
      </div>
   </div>
  <div class=\"form-group\">
    <label for=\"exampleInputFile\">File input</label>
    <input type=\"file\" id=\"exampleInputFile\">
    <p class=\"help-block\">Example block-level help text here.</p>
  </div>
     
  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\"> Check me out
    </label>
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>
";
        
        $__internal_d9e88f634b9fed155d7ca137ba768d690fa42df5288a180eb6631332caf15b4b->leave($__internal_d9e88f634b9fed155d7ca137ba768d690fa42df5288a180eb6631332caf15b4b_prof);

        
        $__internal_91f28e02deb20a0f964fcd9f50066f102cf3f557304af2b34cea17d9592264d4->leave($__internal_91f28e02deb20a0f964fcd9f50066f102cf3f557304af2b34cea17d9592264d4_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
{#    <link href=\"{{asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" type=\"text.css\" href=\"{{ asset('public/css/style.css')}}\">#}
<form>
  <div class=\"row\">
      <div class=\"form-group\">
      <label for=\"exampleInputEmail1\">Email address</label>
      <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>
      <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Password</label>
        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
      </div>
   </div>
  <div class=\"form-group\">
    <label for=\"exampleInputFile\">File input</label>
    <input type=\"file\" id=\"exampleInputFile\">
    <p class=\"help-block\">Example block-level help text here.</p>
  </div>
     
  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\"> Check me out
    </label>
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>
{% endblock %}
", "usuario/new.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
