<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7da5654b752e851dd52a2ece155eac67afa8f686c947d9bcdda1b9746067c20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da5654b752e851dd52a2ece155eac67afa8f686c947d9bcdda1b9746067c20d->enter($__internal_7da5654b752e851dd52a2ece155eac67afa8f686c947d9bcdda1b9746067c20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2d91dd04dec26286465cab083f0de3c025c6cbca975352bdbd458c23af112ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d91dd04dec26286465cab083f0de3c025c6cbca975352bdbd458c23af112ab7->enter($__internal_2d91dd04dec26286465cab083f0de3c025c6cbca975352bdbd458c23af112ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da5654b752e851dd52a2ece155eac67afa8f686c947d9bcdda1b9746067c20d->leave($__internal_7da5654b752e851dd52a2ece155eac67afa8f686c947d9bcdda1b9746067c20d_prof);

        
        $__internal_2d91dd04dec26286465cab083f0de3c025c6cbca975352bdbd458c23af112ab7->leave($__internal_2d91dd04dec26286465cab083f0de3c025c6cbca975352bdbd458c23af112ab7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b4a068f112bfbd2eba4c199a67ac93d297edf14351615b99ff8e79ebd63e67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4a068f112bfbd2eba4c199a67ac93d297edf14351615b99ff8e79ebd63e67c->enter($__internal_1b4a068f112bfbd2eba4c199a67ac93d297edf14351615b99ff8e79ebd63e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f31c6a6405cb3880daae1449cb3b9d038ffd1ff455d3dc91298555d1e41bf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f31c6a6405cb3880daae1449cb3b9d038ffd1ff455d3dc91298555d1e41bf17->enter($__internal_9f31c6a6405cb3880daae1449cb3b9d038ffd1ff455d3dc91298555d1e41bf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f31c6a6405cb3880daae1449cb3b9d038ffd1ff455d3dc91298555d1e41bf17->leave($__internal_9f31c6a6405cb3880daae1449cb3b9d038ffd1ff455d3dc91298555d1e41bf17_prof);

        
        $__internal_1b4a068f112bfbd2eba4c199a67ac93d297edf14351615b99ff8e79ebd63e67c->leave($__internal_1b4a068f112bfbd2eba4c199a67ac93d297edf14351615b99ff8e79ebd63e67c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bc8dd690e31f73e0ebf1c5ed3d25ab65ee90d021862b0fe8aba2289c39cf7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc8dd690e31f73e0ebf1c5ed3d25ab65ee90d021862b0fe8aba2289c39cf7de->enter($__internal_2bc8dd690e31f73e0ebf1c5ed3d25ab65ee90d021862b0fe8aba2289c39cf7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4330dc2cebcb49a05bc90645b8c0b42e9e2e073868d9d6cf98bfe2adff489cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4330dc2cebcb49a05bc90645b8c0b42e9e2e073868d9d6cf98bfe2adff489cd5->enter($__internal_4330dc2cebcb49a05bc90645b8c0b42e9e2e073868d9d6cf98bfe2adff489cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4330dc2cebcb49a05bc90645b8c0b42e9e2e073868d9d6cf98bfe2adff489cd5->leave($__internal_4330dc2cebcb49a05bc90645b8c0b42e9e2e073868d9d6cf98bfe2adff489cd5_prof);

        
        $__internal_2bc8dd690e31f73e0ebf1c5ed3d25ab65ee90d021862b0fe8aba2289c39cf7de->leave($__internal_2bc8dd690e31f73e0ebf1c5ed3d25ab65ee90d021862b0fe8aba2289c39cf7de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bb28704c730107c293a81cd5d2f4ee8368b0b5fa49d9d522c867d45037279c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb28704c730107c293a81cd5d2f4ee8368b0b5fa49d9d522c867d45037279c0->enter($__internal_0bb28704c730107c293a81cd5d2f4ee8368b0b5fa49d9d522c867d45037279c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db084f3e18ac705f4afbb27780626127a44e02a463b3f44d532dfff3c8719b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db084f3e18ac705f4afbb27780626127a44e02a463b3f44d532dfff3c8719b82->enter($__internal_db084f3e18ac705f4afbb27780626127a44e02a463b3f44d532dfff3c8719b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db084f3e18ac705f4afbb27780626127a44e02a463b3f44d532dfff3c8719b82->leave($__internal_db084f3e18ac705f4afbb27780626127a44e02a463b3f44d532dfff3c8719b82_prof);

        
        $__internal_0bb28704c730107c293a81cd5d2f4ee8368b0b5fa49d9d522c867d45037279c0->leave($__internal_0bb28704c730107c293a81cd5d2f4ee8368b0b5fa49d9d522c867d45037279c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
