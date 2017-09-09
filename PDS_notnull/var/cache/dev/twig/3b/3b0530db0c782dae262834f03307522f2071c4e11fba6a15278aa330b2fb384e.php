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
        $__internal_4398dafb375cd15bbb405cf7a62031a7111f6b4275896e98d71c3e76627e5284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4398dafb375cd15bbb405cf7a62031a7111f6b4275896e98d71c3e76627e5284->enter($__internal_4398dafb375cd15bbb405cf7a62031a7111f6b4275896e98d71c3e76627e5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_503dea2baeb702410ebf9c193ac927243ace059ecf56c99a4b2b3a7cf650f310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503dea2baeb702410ebf9c193ac927243ace059ecf56c99a4b2b3a7cf650f310->enter($__internal_503dea2baeb702410ebf9c193ac927243ace059ecf56c99a4b2b3a7cf650f310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4398dafb375cd15bbb405cf7a62031a7111f6b4275896e98d71c3e76627e5284->leave($__internal_4398dafb375cd15bbb405cf7a62031a7111f6b4275896e98d71c3e76627e5284_prof);

        
        $__internal_503dea2baeb702410ebf9c193ac927243ace059ecf56c99a4b2b3a7cf650f310->leave($__internal_503dea2baeb702410ebf9c193ac927243ace059ecf56c99a4b2b3a7cf650f310_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f71518d6a9ebe6c8c34466ec164fa26720db170c6e8a56864bb2465e4405a495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71518d6a9ebe6c8c34466ec164fa26720db170c6e8a56864bb2465e4405a495->enter($__internal_f71518d6a9ebe6c8c34466ec164fa26720db170c6e8a56864bb2465e4405a495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc4a6b1b599f8eaa50a90d119040ee5d49a69929604e3e8a6dcd35503020debb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4a6b1b599f8eaa50a90d119040ee5d49a69929604e3e8a6dcd35503020debb->enter($__internal_fc4a6b1b599f8eaa50a90d119040ee5d49a69929604e3e8a6dcd35503020debb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fc4a6b1b599f8eaa50a90d119040ee5d49a69929604e3e8a6dcd35503020debb->leave($__internal_fc4a6b1b599f8eaa50a90d119040ee5d49a69929604e3e8a6dcd35503020debb_prof);

        
        $__internal_f71518d6a9ebe6c8c34466ec164fa26720db170c6e8a56864bb2465e4405a495->leave($__internal_f71518d6a9ebe6c8c34466ec164fa26720db170c6e8a56864bb2465e4405a495_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce7b998cd4af925f83485476c17a088bf185508664c007d3cd29d8deeba7cdeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7b998cd4af925f83485476c17a088bf185508664c007d3cd29d8deeba7cdeb->enter($__internal_ce7b998cd4af925f83485476c17a088bf185508664c007d3cd29d8deeba7cdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7af2efae881a6d241fb768310308e65a543b56f2315acd1fc4a26caed77e06c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af2efae881a6d241fb768310308e65a543b56f2315acd1fc4a26caed77e06c4->enter($__internal_7af2efae881a6d241fb768310308e65a543b56f2315acd1fc4a26caed77e06c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7af2efae881a6d241fb768310308e65a543b56f2315acd1fc4a26caed77e06c4->leave($__internal_7af2efae881a6d241fb768310308e65a543b56f2315acd1fc4a26caed77e06c4_prof);

        
        $__internal_ce7b998cd4af925f83485476c17a088bf185508664c007d3cd29d8deeba7cdeb->leave($__internal_ce7b998cd4af925f83485476c17a088bf185508664c007d3cd29d8deeba7cdeb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f2abd8514d05ca8803ac2705225f96b430e5f738cfac49d558475d1c8a8ad1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2abd8514d05ca8803ac2705225f96b430e5f738cfac49d558475d1c8a8ad1d->enter($__internal_2f2abd8514d05ca8803ac2705225f96b430e5f738cfac49d558475d1c8a8ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11620d8207d3bc00ced00d182bf4d1ccbfd5f4576e1549e3d314d131cc0d6818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11620d8207d3bc00ced00d182bf4d1ccbfd5f4576e1549e3d314d131cc0d6818->enter($__internal_11620d8207d3bc00ced00d182bf4d1ccbfd5f4576e1549e3d314d131cc0d6818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_11620d8207d3bc00ced00d182bf4d1ccbfd5f4576e1549e3d314d131cc0d6818->leave($__internal_11620d8207d3bc00ced00d182bf4d1ccbfd5f4576e1549e3d314d131cc0d6818_prof);

        
        $__internal_2f2abd8514d05ca8803ac2705225f96b430e5f738cfac49d558475d1c8a8ad1d->leave($__internal_2f2abd8514d05ca8803ac2705225f96b430e5f738cfac49d558475d1c8a8ad1d_prof);

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
