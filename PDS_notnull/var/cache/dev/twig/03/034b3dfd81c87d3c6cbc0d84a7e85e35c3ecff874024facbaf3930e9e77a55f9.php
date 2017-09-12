<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e568e76763d98ac9505db7951ad289186f4ed7deefb913ecfcd110498437cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e568e76763d98ac9505db7951ad289186f4ed7deefb913ecfcd110498437cf5->enter($__internal_5e568e76763d98ac9505db7951ad289186f4ed7deefb913ecfcd110498437cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_df6e97883cd11c56ea4bbb49569349ee1e0369c61e90e52765ac2eb366ff5b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6e97883cd11c56ea4bbb49569349ee1e0369c61e90e52765ac2eb366ff5b03->enter($__internal_df6e97883cd11c56ea4bbb49569349ee1e0369c61e90e52765ac2eb366ff5b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e568e76763d98ac9505db7951ad289186f4ed7deefb913ecfcd110498437cf5->leave($__internal_5e568e76763d98ac9505db7951ad289186f4ed7deefb913ecfcd110498437cf5_prof);

        
        $__internal_df6e97883cd11c56ea4bbb49569349ee1e0369c61e90e52765ac2eb366ff5b03->leave($__internal_df6e97883cd11c56ea4bbb49569349ee1e0369c61e90e52765ac2eb366ff5b03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8b59146a2fba69b8c656a2caef97e4cffcfdbf241a29158194c07889cb94e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b59146a2fba69b8c656a2caef97e4cffcfdbf241a29158194c07889cb94e89->enter($__internal_d8b59146a2fba69b8c656a2caef97e4cffcfdbf241a29158194c07889cb94e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52ce57f50da75ea0dda824db4e5b602a79d2735febedcf3b6618d5bf5ab94ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ce57f50da75ea0dda824db4e5b602a79d2735febedcf3b6618d5bf5ab94ea0->enter($__internal_52ce57f50da75ea0dda824db4e5b602a79d2735febedcf3b6618d5bf5ab94ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_52ce57f50da75ea0dda824db4e5b602a79d2735febedcf3b6618d5bf5ab94ea0->leave($__internal_52ce57f50da75ea0dda824db4e5b602a79d2735febedcf3b6618d5bf5ab94ea0_prof);

        
        $__internal_d8b59146a2fba69b8c656a2caef97e4cffcfdbf241a29158194c07889cb94e89->leave($__internal_d8b59146a2fba69b8c656a2caef97e4cffcfdbf241a29158194c07889cb94e89_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f1deae8c66005052320dd3379bc72b1609e3634515996832f426170c40228eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1deae8c66005052320dd3379bc72b1609e3634515996832f426170c40228eb->enter($__internal_2f1deae8c66005052320dd3379bc72b1609e3634515996832f426170c40228eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24fab1963373081be1b934fcc0b00132401752afbc9bc201126f3528fba22666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fab1963373081be1b934fcc0b00132401752afbc9bc201126f3528fba22666->enter($__internal_24fab1963373081be1b934fcc0b00132401752afbc9bc201126f3528fba22666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_24fab1963373081be1b934fcc0b00132401752afbc9bc201126f3528fba22666->leave($__internal_24fab1963373081be1b934fcc0b00132401752afbc9bc201126f3528fba22666_prof);

        
        $__internal_2f1deae8c66005052320dd3379bc72b1609e3634515996832f426170c40228eb->leave($__internal_2f1deae8c66005052320dd3379bc72b1609e3634515996832f426170c40228eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
