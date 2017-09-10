<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
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
        $__internal_1ef59ec8c4b5ab795e44e535864c36746f08be3b0940bd3e5bd37c1a8cd7be06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef59ec8c4b5ab795e44e535864c36746f08be3b0940bd3e5bd37c1a8cd7be06->enter($__internal_1ef59ec8c4b5ab795e44e535864c36746f08be3b0940bd3e5bd37c1a8cd7be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_085b91fe4e000abeeb05e6f2d2588a43af8e33814acefb708ee70b2dfa3296ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085b91fe4e000abeeb05e6f2d2588a43af8e33814acefb708ee70b2dfa3296ce->enter($__internal_085b91fe4e000abeeb05e6f2d2588a43af8e33814acefb708ee70b2dfa3296ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1ef59ec8c4b5ab795e44e535864c36746f08be3b0940bd3e5bd37c1a8cd7be06->leave($__internal_1ef59ec8c4b5ab795e44e535864c36746f08be3b0940bd3e5bd37c1a8cd7be06_prof);

        
        $__internal_085b91fe4e000abeeb05e6f2d2588a43af8e33814acefb708ee70b2dfa3296ce->leave($__internal_085b91fe4e000abeeb05e6f2d2588a43af8e33814acefb708ee70b2dfa3296ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d5f2e140f720b3f2df8d5de336a30e0b76fafce4849fc70cf89a6137b599e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5f2e140f720b3f2df8d5de336a30e0b76fafce4849fc70cf89a6137b599e90->enter($__internal_7d5f2e140f720b3f2df8d5de336a30e0b76fafce4849fc70cf89a6137b599e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0d49fe1754ca6f4aae091704484098e0baec55dd52fca2606e45dc6d89b7de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d49fe1754ca6f4aae091704484098e0baec55dd52fca2606e45dc6d89b7de2->enter($__internal_d0d49fe1754ca6f4aae091704484098e0baec55dd52fca2606e45dc6d89b7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d0d49fe1754ca6f4aae091704484098e0baec55dd52fca2606e45dc6d89b7de2->leave($__internal_d0d49fe1754ca6f4aae091704484098e0baec55dd52fca2606e45dc6d89b7de2_prof);

        
        $__internal_7d5f2e140f720b3f2df8d5de336a30e0b76fafce4849fc70cf89a6137b599e90->leave($__internal_7d5f2e140f720b3f2df8d5de336a30e0b76fafce4849fc70cf89a6137b599e90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
