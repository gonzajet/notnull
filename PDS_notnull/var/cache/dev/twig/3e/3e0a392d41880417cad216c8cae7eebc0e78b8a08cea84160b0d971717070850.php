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
        $__internal_0be9fd56f117ae4ab1b104a84f80fb57d98e3d7ee7ebcdf26fd060d552504d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be9fd56f117ae4ab1b104a84f80fb57d98e3d7ee7ebcdf26fd060d552504d1d->enter($__internal_0be9fd56f117ae4ab1b104a84f80fb57d98e3d7ee7ebcdf26fd060d552504d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_a251844b346d29a25173d6712d454e412ec84b82cab37a756c055eb68f8d1f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a251844b346d29a25173d6712d454e412ec84b82cab37a756c055eb68f8d1f3f->enter($__internal_a251844b346d29a25173d6712d454e412ec84b82cab37a756c055eb68f8d1f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_0be9fd56f117ae4ab1b104a84f80fb57d98e3d7ee7ebcdf26fd060d552504d1d->leave($__internal_0be9fd56f117ae4ab1b104a84f80fb57d98e3d7ee7ebcdf26fd060d552504d1d_prof);

        
        $__internal_a251844b346d29a25173d6712d454e412ec84b82cab37a756c055eb68f8d1f3f->leave($__internal_a251844b346d29a25173d6712d454e412ec84b82cab37a756c055eb68f8d1f3f_prof);

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
