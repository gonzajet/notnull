<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fe30afbd8ca42b46b37af1de9f09f70dd3ba0857853ca7b5796aab6b913699d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe30afbd8ca42b46b37af1de9f09f70dd3ba0857853ca7b5796aab6b913699d->enter($__internal_6fe30afbd8ca42b46b37af1de9f09f70dd3ba0857853ca7b5796aab6b913699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4f05b9794434649f96b9d06d196f562dd45fc608270bf4c6a90771836adfd9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f05b9794434649f96b9d06d196f562dd45fc608270bf4c6a90771836adfd9a3->enter($__internal_4f05b9794434649f96b9d06d196f562dd45fc608270bf4c6a90771836adfd9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe30afbd8ca42b46b37af1de9f09f70dd3ba0857853ca7b5796aab6b913699d->leave($__internal_6fe30afbd8ca42b46b37af1de9f09f70dd3ba0857853ca7b5796aab6b913699d_prof);

        
        $__internal_4f05b9794434649f96b9d06d196f562dd45fc608270bf4c6a90771836adfd9a3->leave($__internal_4f05b9794434649f96b9d06d196f562dd45fc608270bf4c6a90771836adfd9a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0f2e5fcda6709750ca5910be58106f62cd3b0ac7402c3082c9b2d890a8258f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f2e5fcda6709750ca5910be58106f62cd3b0ac7402c3082c9b2d890a8258f1->enter($__internal_d0f2e5fcda6709750ca5910be58106f62cd3b0ac7402c3082c9b2d890a8258f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15c2199b702fdddc45bd717be057ec40a69939d764c3e0e5a549a705c6494315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c2199b702fdddc45bd717be057ec40a69939d764c3e0e5a549a705c6494315->enter($__internal_15c2199b702fdddc45bd717be057ec40a69939d764c3e0e5a549a705c6494315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15c2199b702fdddc45bd717be057ec40a69939d764c3e0e5a549a705c6494315->leave($__internal_15c2199b702fdddc45bd717be057ec40a69939d764c3e0e5a549a705c6494315_prof);

        
        $__internal_d0f2e5fcda6709750ca5910be58106f62cd3b0ac7402c3082c9b2d890a8258f1->leave($__internal_d0f2e5fcda6709750ca5910be58106f62cd3b0ac7402c3082c9b2d890a8258f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2249af2627f4e2e6c43bc1be09d674396c49470214ff4330935ea3c1612e18d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2249af2627f4e2e6c43bc1be09d674396c49470214ff4330935ea3c1612e18d7->enter($__internal_2249af2627f4e2e6c43bc1be09d674396c49470214ff4330935ea3c1612e18d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1331c3094855ce685d5a96a57ed1bd199d1f85ec8b28565d791fa9a320f1505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1331c3094855ce685d5a96a57ed1bd199d1f85ec8b28565d791fa9a320f1505->enter($__internal_b1331c3094855ce685d5a96a57ed1bd199d1f85ec8b28565d791fa9a320f1505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b1331c3094855ce685d5a96a57ed1bd199d1f85ec8b28565d791fa9a320f1505->leave($__internal_b1331c3094855ce685d5a96a57ed1bd199d1f85ec8b28565d791fa9a320f1505_prof);

        
        $__internal_2249af2627f4e2e6c43bc1be09d674396c49470214ff4330935ea3c1612e18d7->leave($__internal_2249af2627f4e2e6c43bc1be09d674396c49470214ff4330935ea3c1612e18d7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06d93bcb20e65ea162477dbf661888708fec58648585e36ed9e2ed86cf0cba39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d93bcb20e65ea162477dbf661888708fec58648585e36ed9e2ed86cf0cba39->enter($__internal_06d93bcb20e65ea162477dbf661888708fec58648585e36ed9e2ed86cf0cba39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55aad7a5f26ba0b863532c33face03227f7406cd6dfd2e8b4394908442191024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aad7a5f26ba0b863532c33face03227f7406cd6dfd2e8b4394908442191024->enter($__internal_55aad7a5f26ba0b863532c33face03227f7406cd6dfd2e8b4394908442191024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_55aad7a5f26ba0b863532c33face03227f7406cd6dfd2e8b4394908442191024->leave($__internal_55aad7a5f26ba0b863532c33face03227f7406cd6dfd2e8b4394908442191024_prof);

        
        $__internal_06d93bcb20e65ea162477dbf661888708fec58648585e36ed9e2ed86cf0cba39->leave($__internal_06d93bcb20e65ea162477dbf661888708fec58648585e36ed9e2ed86cf0cba39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
