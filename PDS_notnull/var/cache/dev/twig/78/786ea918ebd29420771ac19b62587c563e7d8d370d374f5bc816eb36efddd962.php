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
        $__internal_d63cf8ef0b5cc1ba00cc625388aabca91de32e96b68791169b2f625e91b0ae88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63cf8ef0b5cc1ba00cc625388aabca91de32e96b68791169b2f625e91b0ae88->enter($__internal_d63cf8ef0b5cc1ba00cc625388aabca91de32e96b68791169b2f625e91b0ae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_cd3c56820d8ebd3c0578a2a077700c5fc2270bcde81111b3e4158367818a3d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3c56820d8ebd3c0578a2a077700c5fc2270bcde81111b3e4158367818a3d27->enter($__internal_cd3c56820d8ebd3c0578a2a077700c5fc2270bcde81111b3e4158367818a3d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63cf8ef0b5cc1ba00cc625388aabca91de32e96b68791169b2f625e91b0ae88->leave($__internal_d63cf8ef0b5cc1ba00cc625388aabca91de32e96b68791169b2f625e91b0ae88_prof);

        
        $__internal_cd3c56820d8ebd3c0578a2a077700c5fc2270bcde81111b3e4158367818a3d27->leave($__internal_cd3c56820d8ebd3c0578a2a077700c5fc2270bcde81111b3e4158367818a3d27_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e932e47dacc716de0b91c1651020d80ec9a31d5dde3fe974f3f24b239fc0b129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e932e47dacc716de0b91c1651020d80ec9a31d5dde3fe974f3f24b239fc0b129->enter($__internal_e932e47dacc716de0b91c1651020d80ec9a31d5dde3fe974f3f24b239fc0b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ac1962cacbb75b272ff4e35adb7a0d9c6d15c30b9d831fab34c9ea5571a7101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac1962cacbb75b272ff4e35adb7a0d9c6d15c30b9d831fab34c9ea5571a7101->enter($__internal_8ac1962cacbb75b272ff4e35adb7a0d9c6d15c30b9d831fab34c9ea5571a7101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    
<form>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"inputEmail4\" class=\"col-form-label\">usuario</label>
      <input type=\"text\" class=\"form-control\" id=\"inputEmail4\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\" class=\"col-form-label\">Password</label>
      <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputAddress\" class=\"col-form-label\">Email</label>
    <input type=\"Email\" class=\"form-control\" id=\"inputAddress\" >
  </div>
  <div class=\"form-group\">
    <label for=\"inputAddress2\" class=\"col-form-label\">Nombre</label>
    <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" >
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"inputCity\" class=\"col-form-label\">Apellido</label>
      <input type=\"text\" class=\"form-control\" id=\"inputCity\">
    </div>
    <div class=\"form-group col-md-4\">
      <label for=\"inputState\" class=\"col-form-label\">Rol</label>
      <select id=\"inputState\" class=\"form-control\">Choose</select>
    </div>
    <div class=\"form-group col-md-2\">
      <label for=\"inputZip\" class=\"col-form-label\">Telefono</label>
      <input type=\"text\" class=\"form-control\" id=\"inputZip\">
    </div>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Registrar</button>
</form>
";
        
        $__internal_8ac1962cacbb75b272ff4e35adb7a0d9c6d15c30b9d831fab34c9ea5571a7101->leave($__internal_8ac1962cacbb75b272ff4e35adb7a0d9c6d15c30b9d831fab34c9ea5571a7101_prof);

        
        $__internal_e932e47dacc716de0b91c1651020d80ec9a31d5dde3fe974f3f24b239fc0b129->leave($__internal_e932e47dacc716de0b91c1651020d80ec9a31d5dde3fe974f3f24b239fc0b129_prof);

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
        return array (  49 => 3,  40 => 2,  11 => 1,);
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

    
<form>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"inputEmail4\" class=\"col-form-label\">usuario</label>
      <input type=\"text\" class=\"form-control\" id=\"inputEmail4\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\" class=\"col-form-label\">Password</label>
      <input type=\"password\" class=\"form-control\" id=\"inputPassword4\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputAddress\" class=\"col-form-label\">Email</label>
    <input type=\"Email\" class=\"form-control\" id=\"inputAddress\" >
  </div>
  <div class=\"form-group\">
    <label for=\"inputAddress2\" class=\"col-form-label\">Nombre</label>
    <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" >
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"inputCity\" class=\"col-form-label\">Apellido</label>
      <input type=\"text\" class=\"form-control\" id=\"inputCity\">
    </div>
    <div class=\"form-group col-md-4\">
      <label for=\"inputState\" class=\"col-form-label\">Rol</label>
      <select id=\"inputState\" class=\"form-control\">Choose</select>
    </div>
    <div class=\"form-group col-md-2\">
      <label for=\"inputZip\" class=\"col-form-label\">Telefono</label>
      <input type=\"text\" class=\"form-control\" id=\"inputZip\">
    </div>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Registrar</button>
</form>
{% endblock %}
", "usuario/new.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
