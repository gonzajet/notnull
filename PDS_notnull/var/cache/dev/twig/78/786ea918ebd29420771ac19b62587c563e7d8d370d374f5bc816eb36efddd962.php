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
        $__internal_0037bfe004ce6d03803cdee9688fbea421ebee702760fdca8ea6fade2c9c1052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0037bfe004ce6d03803cdee9688fbea421ebee702760fdca8ea6fade2c9c1052->enter($__internal_0037bfe004ce6d03803cdee9688fbea421ebee702760fdca8ea6fade2c9c1052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_90b4fbf783c0d150010e138919271d5a7f50a782a2773e0d1f6cebc6364c2abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b4fbf783c0d150010e138919271d5a7f50a782a2773e0d1f6cebc6364c2abd->enter($__internal_90b4fbf783c0d150010e138919271d5a7f50a782a2773e0d1f6cebc6364c2abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0037bfe004ce6d03803cdee9688fbea421ebee702760fdca8ea6fade2c9c1052->leave($__internal_0037bfe004ce6d03803cdee9688fbea421ebee702760fdca8ea6fade2c9c1052_prof);

        
        $__internal_90b4fbf783c0d150010e138919271d5a7f50a782a2773e0d1f6cebc6364c2abd->leave($__internal_90b4fbf783c0d150010e138919271d5a7f50a782a2773e0d1f6cebc6364c2abd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ad4462299adf194f946d9793424a0631e129f5b1bc691aecc3f90959c00808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ad4462299adf194f946d9793424a0631e129f5b1bc691aecc3f90959c00808->enter($__internal_74ad4462299adf194f946d9793424a0631e129f5b1bc691aecc3f90959c00808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fceac195409b9836fad072fe9c961935cb46937c94d3887ef1668d59edae0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fceac195409b9836fad072fe9c961935cb46937c94d3887ef1668d59edae0b9->enter($__internal_2fceac195409b9836fad072fe9c961935cb46937c94d3887ef1668d59edae0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2fceac195409b9836fad072fe9c961935cb46937c94d3887ef1668d59edae0b9->leave($__internal_2fceac195409b9836fad072fe9c961935cb46937c94d3887ef1668d59edae0b9_prof);

        
        $__internal_74ad4462299adf194f946d9793424a0631e129f5b1bc691aecc3f90959c00808->leave($__internal_74ad4462299adf194f946d9793424a0631e129f5b1bc691aecc3f90959c00808_prof);

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
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Usuario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "usuario/new.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
