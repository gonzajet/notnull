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
        $__internal_52325f08ece376bd2351c5d591eff2560d64c45dfc9f1ab43c43bb1d1cba67d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52325f08ece376bd2351c5d591eff2560d64c45dfc9f1ab43c43bb1d1cba67d3->enter($__internal_52325f08ece376bd2351c5d591eff2560d64c45dfc9f1ab43c43bb1d1cba67d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_be3d6c6a2eddded1c565e8b5218497341e1ab8825351b4d76be2c4782339f44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3d6c6a2eddded1c565e8b5218497341e1ab8825351b4d76be2c4782339f44d->enter($__internal_be3d6c6a2eddded1c565e8b5218497341e1ab8825351b4d76be2c4782339f44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52325f08ece376bd2351c5d591eff2560d64c45dfc9f1ab43c43bb1d1cba67d3->leave($__internal_52325f08ece376bd2351c5d591eff2560d64c45dfc9f1ab43c43bb1d1cba67d3_prof);

        
        $__internal_be3d6c6a2eddded1c565e8b5218497341e1ab8825351b4d76be2c4782339f44d->leave($__internal_be3d6c6a2eddded1c565e8b5218497341e1ab8825351b4d76be2c4782339f44d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_660b5d97db321150e5b72bf81f0845c6df9561e2e5265aa54f310244c9a066f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660b5d97db321150e5b72bf81f0845c6df9561e2e5265aa54f310244c9a066f0->enter($__internal_660b5d97db321150e5b72bf81f0845c6df9561e2e5265aa54f310244c9a066f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_029cd166802e58d58f6ec7aacf6ea926d9bf8007dd5bef93b432c73b47c6b5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029cd166802e58d58f6ec7aacf6ea926d9bf8007dd5bef93b432c73b47c6b5eb->enter($__internal_029cd166802e58d58f6ec7aacf6ea926d9bf8007dd5bef93b432c73b47c6b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_029cd166802e58d58f6ec7aacf6ea926d9bf8007dd5bef93b432c73b47c6b5eb->leave($__internal_029cd166802e58d58f6ec7aacf6ea926d9bf8007dd5bef93b432c73b47c6b5eb_prof);

        
        $__internal_660b5d97db321150e5b72bf81f0845c6df9561e2e5265aa54f310244c9a066f0->leave($__internal_660b5d97db321150e5b72bf81f0845c6df9561e2e5265aa54f310244c9a066f0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83dfef73fe258c7db22a11832ce0258ae709b1bdf0f0bcb322731dc98e69ee05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dfef73fe258c7db22a11832ce0258ae709b1bdf0f0bcb322731dc98e69ee05->enter($__internal_83dfef73fe258c7db22a11832ce0258ae709b1bdf0f0bcb322731dc98e69ee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19cce5c80aadcd186c45272bc09d9411aff50eb0c263bde17fa54b874bad0497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cce5c80aadcd186c45272bc09d9411aff50eb0c263bde17fa54b874bad0497->enter($__internal_19cce5c80aadcd186c45272bc09d9411aff50eb0c263bde17fa54b874bad0497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_19cce5c80aadcd186c45272bc09d9411aff50eb0c263bde17fa54b874bad0497->leave($__internal_19cce5c80aadcd186c45272bc09d9411aff50eb0c263bde17fa54b874bad0497_prof);

        
        $__internal_83dfef73fe258c7db22a11832ce0258ae709b1bdf0f0bcb322731dc98e69ee05->leave($__internal_83dfef73fe258c7db22a11832ce0258ae709b1bdf0f0bcb322731dc98e69ee05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_701634db54c49c7fd59d4b6b7ff0fefe88320838b4a6f76f17e253879fa8d928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701634db54c49c7fd59d4b6b7ff0fefe88320838b4a6f76f17e253879fa8d928->enter($__internal_701634db54c49c7fd59d4b6b7ff0fefe88320838b4a6f76f17e253879fa8d928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31c4a9e4cec4eb9ff9dc57c798afcc7cb949e2bd2b4e49dbec9aa6f681fb9ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c4a9e4cec4eb9ff9dc57c798afcc7cb949e2bd2b4e49dbec9aa6f681fb9ead->enter($__internal_31c4a9e4cec4eb9ff9dc57c798afcc7cb949e2bd2b4e49dbec9aa6f681fb9ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_31c4a9e4cec4eb9ff9dc57c798afcc7cb949e2bd2b4e49dbec9aa6f681fb9ead->leave($__internal_31c4a9e4cec4eb9ff9dc57c798afcc7cb949e2bd2b4e49dbec9aa6f681fb9ead_prof);

        
        $__internal_701634db54c49c7fd59d4b6b7ff0fefe88320838b4a6f76f17e253879fa8d928->leave($__internal_701634db54c49c7fd59d4b6b7ff0fefe88320838b4a6f76f17e253879fa8d928_prof);

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
