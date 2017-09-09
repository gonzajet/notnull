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
        $__internal_14995b3d22da050a64b0dbd0a315e8884effbce8694e8764dab828232459e526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14995b3d22da050a64b0dbd0a315e8884effbce8694e8764dab828232459e526->enter($__internal_14995b3d22da050a64b0dbd0a315e8884effbce8694e8764dab828232459e526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_38c16b95079954274fecd379bf52c71eaae2e205806e1ff919d8383689fa4b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c16b95079954274fecd379bf52c71eaae2e205806e1ff919d8383689fa4b3d->enter($__internal_38c16b95079954274fecd379bf52c71eaae2e205806e1ff919d8383689fa4b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14995b3d22da050a64b0dbd0a315e8884effbce8694e8764dab828232459e526->leave($__internal_14995b3d22da050a64b0dbd0a315e8884effbce8694e8764dab828232459e526_prof);

        
        $__internal_38c16b95079954274fecd379bf52c71eaae2e205806e1ff919d8383689fa4b3d->leave($__internal_38c16b95079954274fecd379bf52c71eaae2e205806e1ff919d8383689fa4b3d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdab859828ea6052081fd07a16da63966999fdc562deea8f86f846c3bd6a7452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdab859828ea6052081fd07a16da63966999fdc562deea8f86f846c3bd6a7452->enter($__internal_bdab859828ea6052081fd07a16da63966999fdc562deea8f86f846c3bd6a7452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_347b44b6ca0e187a475943f5b92c8dc6512f9da037f75857b4370dba6adf849d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347b44b6ca0e187a475943f5b92c8dc6512f9da037f75857b4370dba6adf849d->enter($__internal_347b44b6ca0e187a475943f5b92c8dc6512f9da037f75857b4370dba6adf849d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_347b44b6ca0e187a475943f5b92c8dc6512f9da037f75857b4370dba6adf849d->leave($__internal_347b44b6ca0e187a475943f5b92c8dc6512f9da037f75857b4370dba6adf849d_prof);

        
        $__internal_bdab859828ea6052081fd07a16da63966999fdc562deea8f86f846c3bd6a7452->leave($__internal_bdab859828ea6052081fd07a16da63966999fdc562deea8f86f846c3bd6a7452_prof);

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
