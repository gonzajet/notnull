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
        $__internal_f500ffb2afc81366679307a1f06f87bfd38a353072aeabf8b30405af5442964c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f500ffb2afc81366679307a1f06f87bfd38a353072aeabf8b30405af5442964c->enter($__internal_f500ffb2afc81366679307a1f06f87bfd38a353072aeabf8b30405af5442964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_07467225b7efe479b453a2e46930861ba5f8e74866fdb29df9fc75fde9b086c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07467225b7efe479b453a2e46930861ba5f8e74866fdb29df9fc75fde9b086c1->enter($__internal_07467225b7efe479b453a2e46930861ba5f8e74866fdb29df9fc75fde9b086c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f500ffb2afc81366679307a1f06f87bfd38a353072aeabf8b30405af5442964c->leave($__internal_f500ffb2afc81366679307a1f06f87bfd38a353072aeabf8b30405af5442964c_prof);

        
        $__internal_07467225b7efe479b453a2e46930861ba5f8e74866fdb29df9fc75fde9b086c1->leave($__internal_07467225b7efe479b453a2e46930861ba5f8e74866fdb29df9fc75fde9b086c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41466752a1be5315107d7f93d34b1e4c93468ff8651f126d83147fd9e9607e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41466752a1be5315107d7f93d34b1e4c93468ff8651f126d83147fd9e9607e82->enter($__internal_41466752a1be5315107d7f93d34b1e4c93468ff8651f126d83147fd9e9607e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ca3ac13bfb879719daaefb7a36d45177d601ffd543efeab8b8af4484621380c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca3ac13bfb879719daaefb7a36d45177d601ffd543efeab8b8af4484621380c->enter($__internal_0ca3ac13bfb879719daaefb7a36d45177d601ffd543efeab8b8af4484621380c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0ca3ac13bfb879719daaefb7a36d45177d601ffd543efeab8b8af4484621380c->leave($__internal_0ca3ac13bfb879719daaefb7a36d45177d601ffd543efeab8b8af4484621380c_prof);

        
        $__internal_41466752a1be5315107d7f93d34b1e4c93468ff8651f126d83147fd9e9607e82->leave($__internal_41466752a1be5315107d7f93d34b1e4c93468ff8651f126d83147fd9e9607e82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b03db71898ddd566cb902bbe146edccbbb87fac3dd7b21584be9fa45c4d4613d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03db71898ddd566cb902bbe146edccbbb87fac3dd7b21584be9fa45c4d4613d->enter($__internal_b03db71898ddd566cb902bbe146edccbbb87fac3dd7b21584be9fa45c4d4613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed49d37b3e2b83c6ece9d1727a9bdc3707a5f9aa61801ecf1f3999939ff16c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed49d37b3e2b83c6ece9d1727a9bdc3707a5f9aa61801ecf1f3999939ff16c85->enter($__internal_ed49d37b3e2b83c6ece9d1727a9bdc3707a5f9aa61801ecf1f3999939ff16c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ed49d37b3e2b83c6ece9d1727a9bdc3707a5f9aa61801ecf1f3999939ff16c85->leave($__internal_ed49d37b3e2b83c6ece9d1727a9bdc3707a5f9aa61801ecf1f3999939ff16c85_prof);

        
        $__internal_b03db71898ddd566cb902bbe146edccbbb87fac3dd7b21584be9fa45c4d4613d->leave($__internal_b03db71898ddd566cb902bbe146edccbbb87fac3dd7b21584be9fa45c4d4613d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abd58427617d610e81e6f419d4a979414af0690e96b0ac5cd98ac26c9740c57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd58427617d610e81e6f419d4a979414af0690e96b0ac5cd98ac26c9740c57a->enter($__internal_abd58427617d610e81e6f419d4a979414af0690e96b0ac5cd98ac26c9740c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04bab8236c4e8fe9288082471283ff7642360484aa8efc17f5b77c32b0367127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bab8236c4e8fe9288082471283ff7642360484aa8efc17f5b77c32b0367127->enter($__internal_04bab8236c4e8fe9288082471283ff7642360484aa8efc17f5b77c32b0367127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_04bab8236c4e8fe9288082471283ff7642360484aa8efc17f5b77c32b0367127->leave($__internal_04bab8236c4e8fe9288082471283ff7642360484aa8efc17f5b77c32b0367127_prof);

        
        $__internal_abd58427617d610e81e6f419d4a979414af0690e96b0ac5cd98ac26c9740c57a->leave($__internal_abd58427617d610e81e6f419d4a979414af0690e96b0ac5cd98ac26c9740c57a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "E:\\Users\\Carlitos\\Documents\\EstacionAR\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
