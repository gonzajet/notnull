<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_992cf07bf0eacc83641b3a5d7d7e7bd789b4c75900cd4aeca5e0c48c2a80acad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df74eda8aaaa7d11f0f17c8e26b0088388f65d0b96602607d37f2c8c717e0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df74eda8aaaa7d11f0f17c8e26b0088388f65d0b96602607d37f2c8c717e0ff->enter($__internal_8df74eda8aaaa7d11f0f17c8e26b0088388f65d0b96602607d37f2c8c717e0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_f60fd9c588720c07ecca219ea74b5142ca5400ce3bfcd3137722f9a4f23e082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60fd9c588720c07ecca219ea74b5142ca5400ce3bfcd3137722f9a4f23e082e->enter($__internal_f60fd9c588720c07ecca219ea74b5142ca5400ce3bfcd3137722f9a4f23e082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8df74eda8aaaa7d11f0f17c8e26b0088388f65d0b96602607d37f2c8c717e0ff->leave($__internal_8df74eda8aaaa7d11f0f17c8e26b0088388f65d0b96602607d37f2c8c717e0ff_prof);

        
        $__internal_f60fd9c588720c07ecca219ea74b5142ca5400ce3bfcd3137722f9a4f23e082e->leave($__internal_f60fd9c588720c07ecca219ea74b5142ca5400ce3bfcd3137722f9a4f23e082e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
