<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_34007627bba0e5980010c65379064e70952ec5ebbbdf254de1c6315baf56e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34007627bba0e5980010c65379064e70952ec5ebbbdf254de1c6315baf56e4d8->enter($__internal_34007627bba0e5980010c65379064e70952ec5ebbbdf254de1c6315baf56e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c0bdf7d6a7f65bf02f41496530f0c5e0e58bfc2c6f407147aa7b6a272468d90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bdf7d6a7f65bf02f41496530f0c5e0e58bfc2c6f407147aa7b6a272468d90a->enter($__internal_c0bdf7d6a7f65bf02f41496530f0c5e0e58bfc2c6f407147aa7b6a272468d90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34007627bba0e5980010c65379064e70952ec5ebbbdf254de1c6315baf56e4d8->leave($__internal_34007627bba0e5980010c65379064e70952ec5ebbbdf254de1c6315baf56e4d8_prof);

        
        $__internal_c0bdf7d6a7f65bf02f41496530f0c5e0e58bfc2c6f407147aa7b6a272468d90a->leave($__internal_c0bdf7d6a7f65bf02f41496530f0c5e0e58bfc2c6f407147aa7b6a272468d90a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd6110d564ed5eeb513e85f02ed4070eab9810e5420baf815f9431c327d604ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6110d564ed5eeb513e85f02ed4070eab9810e5420baf815f9431c327d604ee->enter($__internal_fd6110d564ed5eeb513e85f02ed4070eab9810e5420baf815f9431c327d604ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a8b226447b7798c7733d02e38ecca6e22a3db61a655ef915058a06ea389dbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8b226447b7798c7733d02e38ecca6e22a3db61a655ef915058a06ea389dbc0->enter($__internal_6a8b226447b7798c7733d02e38ecca6e22a3db61a655ef915058a06ea389dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6a8b226447b7798c7733d02e38ecca6e22a3db61a655ef915058a06ea389dbc0->leave($__internal_6a8b226447b7798c7733d02e38ecca6e22a3db61a655ef915058a06ea389dbc0_prof);

        
        $__internal_fd6110d564ed5eeb513e85f02ed4070eab9810e5420baf815f9431c327d604ee->leave($__internal_fd6110d564ed5eeb513e85f02ed4070eab9810e5420baf815f9431c327d604ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_682203bec465250a552848284b654314ace789673b760263667677f361e8c907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682203bec465250a552848284b654314ace789673b760263667677f361e8c907->enter($__internal_682203bec465250a552848284b654314ace789673b760263667677f361e8c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_426b4c1c275ed1371d18a07818ba90f71a0da4d9e124657423cf5e952f37be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426b4c1c275ed1371d18a07818ba90f71a0da4d9e124657423cf5e952f37be6d->enter($__internal_426b4c1c275ed1371d18a07818ba90f71a0da4d9e124657423cf5e952f37be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_426b4c1c275ed1371d18a07818ba90f71a0da4d9e124657423cf5e952f37be6d->leave($__internal_426b4c1c275ed1371d18a07818ba90f71a0da4d9e124657423cf5e952f37be6d_prof);

        
        $__internal_682203bec465250a552848284b654314ace789673b760263667677f361e8c907->leave($__internal_682203bec465250a552848284b654314ace789673b760263667677f361e8c907_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8f3342db50931d730908148027fb4b7eb00b86a79c0c6ff4953f83bda111f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f3342db50931d730908148027fb4b7eb00b86a79c0c6ff4953f83bda111f3a->enter($__internal_d8f3342db50931d730908148027fb4b7eb00b86a79c0c6ff4953f83bda111f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14d7ea43f1390092defb9e9316e64cf9b3cd1d25f66b447f1fed2d0c97fe9182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d7ea43f1390092defb9e9316e64cf9b3cd1d25f66b447f1fed2d0c97fe9182->enter($__internal_14d7ea43f1390092defb9e9316e64cf9b3cd1d25f66b447f1fed2d0c97fe9182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_14d7ea43f1390092defb9e9316e64cf9b3cd1d25f66b447f1fed2d0c97fe9182->leave($__internal_14d7ea43f1390092defb9e9316e64cf9b3cd1d25f66b447f1fed2d0c97fe9182_prof);

        
        $__internal_d8f3342db50931d730908148027fb4b7eb00b86a79c0c6ff4953f83bda111f3a->leave($__internal_d8f3342db50931d730908148027fb4b7eb00b86a79c0c6ff4953f83bda111f3a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
