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
        $__internal_ce0bcd19863673d266f74e0e814b21798510161fba54f854e180327bd42fddd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0bcd19863673d266f74e0e814b21798510161fba54f854e180327bd42fddd4->enter($__internal_ce0bcd19863673d266f74e0e814b21798510161fba54f854e180327bd42fddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_f6bea063526871055fdbf32c2e9334c5a1baed5c99bafa0577aceaad8d75d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bea063526871055fdbf32c2e9334c5a1baed5c99bafa0577aceaad8d75d062->enter($__internal_f6bea063526871055fdbf32c2e9334c5a1baed5c99bafa0577aceaad8d75d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0bcd19863673d266f74e0e814b21798510161fba54f854e180327bd42fddd4->leave($__internal_ce0bcd19863673d266f74e0e814b21798510161fba54f854e180327bd42fddd4_prof);

        
        $__internal_f6bea063526871055fdbf32c2e9334c5a1baed5c99bafa0577aceaad8d75d062->leave($__internal_f6bea063526871055fdbf32c2e9334c5a1baed5c99bafa0577aceaad8d75d062_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_176cd65699513250b5d0c587f906d5ab8366c206373ac8c7336aa2ddee021f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176cd65699513250b5d0c587f906d5ab8366c206373ac8c7336aa2ddee021f21->enter($__internal_176cd65699513250b5d0c587f906d5ab8366c206373ac8c7336aa2ddee021f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_073035d2516f55507fb20b9c3f8694075536ff069e3de0a775d856cf492f880e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073035d2516f55507fb20b9c3f8694075536ff069e3de0a775d856cf492f880e->enter($__internal_073035d2516f55507fb20b9c3f8694075536ff069e3de0a775d856cf492f880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_073035d2516f55507fb20b9c3f8694075536ff069e3de0a775d856cf492f880e->leave($__internal_073035d2516f55507fb20b9c3f8694075536ff069e3de0a775d856cf492f880e_prof);

        
        $__internal_176cd65699513250b5d0c587f906d5ab8366c206373ac8c7336aa2ddee021f21->leave($__internal_176cd65699513250b5d0c587f906d5ab8366c206373ac8c7336aa2ddee021f21_prof);

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
