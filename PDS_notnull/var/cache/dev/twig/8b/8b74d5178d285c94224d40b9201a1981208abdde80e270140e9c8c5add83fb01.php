<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_0d0913e1ce74b1f316479c9287f44890673d3d6467cf15f16718e01da55c258e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9acf5f36619bc93bad1e129c2b0395c70e7230ca4e63748906c3e225735edb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acf5f36619bc93bad1e129c2b0395c70e7230ca4e63748906c3e225735edb3c->enter($__internal_9acf5f36619bc93bad1e129c2b0395c70e7230ca4e63748906c3e225735edb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_5716df256242c42e04a6264b4a898c7799349fe1f9b99edb1e7d0717a367dba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5716df256242c42e04a6264b4a898c7799349fe1f9b99edb1e7d0717a367dba9->enter($__internal_5716df256242c42e04a6264b4a898c7799349fe1f9b99edb1e7d0717a367dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_9acf5f36619bc93bad1e129c2b0395c70e7230ca4e63748906c3e225735edb3c->leave($__internal_9acf5f36619bc93bad1e129c2b0395c70e7230ca4e63748906c3e225735edb3c_prof);

        
        $__internal_5716df256242c42e04a6264b4a898c7799349fe1f9b99edb1e7d0717a367dba9->leave($__internal_5716df256242c42e04a6264b4a898c7799349fe1f9b99edb1e7d0717a367dba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
