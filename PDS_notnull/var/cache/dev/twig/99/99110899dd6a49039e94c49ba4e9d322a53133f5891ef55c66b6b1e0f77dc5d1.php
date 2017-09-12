<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0447a5b26578c982271d3959bc31fe1d29de4baea38b3240c66ed77af9056adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_779cbd7018cae80f1f81d69dab08b48b54bc45ffa86fdcb08f8d237d12d64ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779cbd7018cae80f1f81d69dab08b48b54bc45ffa86fdcb08f8d237d12d64ba2->enter($__internal_779cbd7018cae80f1f81d69dab08b48b54bc45ffa86fdcb08f8d237d12d64ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4ea7058d65ca6cdf040d4a7a423325999662aac3c9d536164f74272e4aa20d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea7058d65ca6cdf040d4a7a423325999662aac3c9d536164f74272e4aa20d9c->enter($__internal_4ea7058d65ca6cdf040d4a7a423325999662aac3c9d536164f74272e4aa20d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_779cbd7018cae80f1f81d69dab08b48b54bc45ffa86fdcb08f8d237d12d64ba2->leave($__internal_779cbd7018cae80f1f81d69dab08b48b54bc45ffa86fdcb08f8d237d12d64ba2_prof);

        
        $__internal_4ea7058d65ca6cdf040d4a7a423325999662aac3c9d536164f74272e4aa20d9c->leave($__internal_4ea7058d65ca6cdf040d4a7a423325999662aac3c9d536164f74272e4aa20d9c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cae101ed3bd014529dd9c98d6cf4c414a1d1f7209f345b7cb355b3613e416f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cae101ed3bd014529dd9c98d6cf4c414a1d1f7209f345b7cb355b3613e416f6->enter($__internal_4cae101ed3bd014529dd9c98d6cf4c414a1d1f7209f345b7cb355b3613e416f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78690d2b858dba87f323e087c4f8eac877a76b705b11a0a2371bad93b968fff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78690d2b858dba87f323e087c4f8eac877a76b705b11a0a2371bad93b968fff0->enter($__internal_78690d2b858dba87f323e087c4f8eac877a76b705b11a0a2371bad93b968fff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_78690d2b858dba87f323e087c4f8eac877a76b705b11a0a2371bad93b968fff0->leave($__internal_78690d2b858dba87f323e087c4f8eac877a76b705b11a0a2371bad93b968fff0_prof);

        
        $__internal_4cae101ed3bd014529dd9c98d6cf4c414a1d1f7209f345b7cb355b3613e416f6->leave($__internal_4cae101ed3bd014529dd9c98d6cf4c414a1d1f7209f345b7cb355b3613e416f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
