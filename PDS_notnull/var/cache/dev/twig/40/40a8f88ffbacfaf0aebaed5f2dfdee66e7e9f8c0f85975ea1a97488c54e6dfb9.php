<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_15873c21bff32ef736fa007ac2f8d2a3ddac4bf99d22d1eb3cb7ba91e6bc4cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15873c21bff32ef736fa007ac2f8d2a3ddac4bf99d22d1eb3cb7ba91e6bc4cac->enter($__internal_15873c21bff32ef736fa007ac2f8d2a3ddac4bf99d22d1eb3cb7ba91e6bc4cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2293e58668f38c9e5bdbc206e3906d9522685b6c9d0b573ad0e726289def4d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2293e58668f38c9e5bdbc206e3906d9522685b6c9d0b573ad0e726289def4d26->enter($__internal_2293e58668f38c9e5bdbc206e3906d9522685b6c9d0b573ad0e726289def4d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15873c21bff32ef736fa007ac2f8d2a3ddac4bf99d22d1eb3cb7ba91e6bc4cac->leave($__internal_15873c21bff32ef736fa007ac2f8d2a3ddac4bf99d22d1eb3cb7ba91e6bc4cac_prof);

        
        $__internal_2293e58668f38c9e5bdbc206e3906d9522685b6c9d0b573ad0e726289def4d26->leave($__internal_2293e58668f38c9e5bdbc206e3906d9522685b6c9d0b573ad0e726289def4d26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b843e87e92d2cdf5c1f45c4ca8000e8591f27cc78b2830c53929faabf4a3bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b843e87e92d2cdf5c1f45c4ca8000e8591f27cc78b2830c53929faabf4a3bc2->enter($__internal_2b843e87e92d2cdf5c1f45c4ca8000e8591f27cc78b2830c53929faabf4a3bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_089d594f21d82edf3b587ec67881d306f81d5a38c09b0053e21cdf4919118beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089d594f21d82edf3b587ec67881d306f81d5a38c09b0053e21cdf4919118beb->enter($__internal_089d594f21d82edf3b587ec67881d306f81d5a38c09b0053e21cdf4919118beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_089d594f21d82edf3b587ec67881d306f81d5a38c09b0053e21cdf4919118beb->leave($__internal_089d594f21d82edf3b587ec67881d306f81d5a38c09b0053e21cdf4919118beb_prof);

        
        $__internal_2b843e87e92d2cdf5c1f45c4ca8000e8591f27cc78b2830c53929faabf4a3bc2->leave($__internal_2b843e87e92d2cdf5c1f45c4ca8000e8591f27cc78b2830c53929faabf4a3bc2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03ceba8e7dcaf43e6f7237e9311ec945d0fe0743fa200659b509514629432ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ceba8e7dcaf43e6f7237e9311ec945d0fe0743fa200659b509514629432ebb->enter($__internal_03ceba8e7dcaf43e6f7237e9311ec945d0fe0743fa200659b509514629432ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8196378623e2220254b6cd1dd35f8c8ecfce3660876ce9dcd07a010c1df4736a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8196378623e2220254b6cd1dd35f8c8ecfce3660876ce9dcd07a010c1df4736a->enter($__internal_8196378623e2220254b6cd1dd35f8c8ecfce3660876ce9dcd07a010c1df4736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8196378623e2220254b6cd1dd35f8c8ecfce3660876ce9dcd07a010c1df4736a->leave($__internal_8196378623e2220254b6cd1dd35f8c8ecfce3660876ce9dcd07a010c1df4736a_prof);

        
        $__internal_03ceba8e7dcaf43e6f7237e9311ec945d0fe0743fa200659b509514629432ebb->leave($__internal_03ceba8e7dcaf43e6f7237e9311ec945d0fe0743fa200659b509514629432ebb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7239658e89b696ea7b87b1fd29657850ca2d531b4e66535a13939e25d30ec08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7239658e89b696ea7b87b1fd29657850ca2d531b4e66535a13939e25d30ec08->enter($__internal_e7239658e89b696ea7b87b1fd29657850ca2d531b4e66535a13939e25d30ec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_154ff3e48500a01185f81f87c43c86f8d72726f2bbb99bc5e1daa196d5ea1331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154ff3e48500a01185f81f87c43c86f8d72726f2bbb99bc5e1daa196d5ea1331->enter($__internal_154ff3e48500a01185f81f87c43c86f8d72726f2bbb99bc5e1daa196d5ea1331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_154ff3e48500a01185f81f87c43c86f8d72726f2bbb99bc5e1daa196d5ea1331->leave($__internal_154ff3e48500a01185f81f87c43c86f8d72726f2bbb99bc5e1daa196d5ea1331_prof);

        
        $__internal_e7239658e89b696ea7b87b1fd29657850ca2d531b4e66535a13939e25d30ec08->leave($__internal_e7239658e89b696ea7b87b1fd29657850ca2d531b4e66535a13939e25d30ec08_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
