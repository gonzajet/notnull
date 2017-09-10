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
        $__internal_9362e198199bc3af6d411efe0cd59cfb76389a557b1c99300ee8288269ed1d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9362e198199bc3af6d411efe0cd59cfb76389a557b1c99300ee8288269ed1d6d->enter($__internal_9362e198199bc3af6d411efe0cd59cfb76389a557b1c99300ee8288269ed1d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fc1d742ed568d3a2281a0faa14709101da21125ab4f97c53d1b2e8046c909f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1d742ed568d3a2281a0faa14709101da21125ab4f97c53d1b2e8046c909f3e->enter($__internal_fc1d742ed568d3a2281a0faa14709101da21125ab4f97c53d1b2e8046c909f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9362e198199bc3af6d411efe0cd59cfb76389a557b1c99300ee8288269ed1d6d->leave($__internal_9362e198199bc3af6d411efe0cd59cfb76389a557b1c99300ee8288269ed1d6d_prof);

        
        $__internal_fc1d742ed568d3a2281a0faa14709101da21125ab4f97c53d1b2e8046c909f3e->leave($__internal_fc1d742ed568d3a2281a0faa14709101da21125ab4f97c53d1b2e8046c909f3e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75b103dbf6d68ea0cea4aa807cfe831bcf7c6f5950a8d40ebfe2a3601228d5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b103dbf6d68ea0cea4aa807cfe831bcf7c6f5950a8d40ebfe2a3601228d5a9->enter($__internal_75b103dbf6d68ea0cea4aa807cfe831bcf7c6f5950a8d40ebfe2a3601228d5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e85b89888edb373e007b7f63a4fddd79c8b3591259bc104d1a9fd6d563a41731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85b89888edb373e007b7f63a4fddd79c8b3591259bc104d1a9fd6d563a41731->enter($__internal_e85b89888edb373e007b7f63a4fddd79c8b3591259bc104d1a9fd6d563a41731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e85b89888edb373e007b7f63a4fddd79c8b3591259bc104d1a9fd6d563a41731->leave($__internal_e85b89888edb373e007b7f63a4fddd79c8b3591259bc104d1a9fd6d563a41731_prof);

        
        $__internal_75b103dbf6d68ea0cea4aa807cfe831bcf7c6f5950a8d40ebfe2a3601228d5a9->leave($__internal_75b103dbf6d68ea0cea4aa807cfe831bcf7c6f5950a8d40ebfe2a3601228d5a9_prof);

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
