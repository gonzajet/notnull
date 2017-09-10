<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_34a41a51c4765311566ede0c4e7a4e826dfe1286c67b8019ae1220c87cb20d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a41a51c4765311566ede0c4e7a4e826dfe1286c67b8019ae1220c87cb20d3d->enter($__internal_34a41a51c4765311566ede0c4e7a4e826dfe1286c67b8019ae1220c87cb20d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_dcc25f5a2d5f57a3356964f0c9f4402d3d0d4910dff546d9f52123e1d3365168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc25f5a2d5f57a3356964f0c9f4402d3d0d4910dff546d9f52123e1d3365168->enter($__internal_dcc25f5a2d5f57a3356964f0c9f4402d3d0d4910dff546d9f52123e1d3365168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_34a41a51c4765311566ede0c4e7a4e826dfe1286c67b8019ae1220c87cb20d3d->leave($__internal_34a41a51c4765311566ede0c4e7a4e826dfe1286c67b8019ae1220c87cb20d3d_prof);

        
        $__internal_dcc25f5a2d5f57a3356964f0c9f4402d3d0d4910dff546d9f52123e1d3365168->leave($__internal_dcc25f5a2d5f57a3356964f0c9f4402d3d0d4910dff546d9f52123e1d3365168_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
