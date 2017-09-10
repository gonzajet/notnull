<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b415fa1bae06cfa94cff24c1f54b359fdbd2ebc52c9a375b86ea5924533e1c1d extends Twig_Template
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
        $__internal_938795e5c5a891424087b8a521cf121ea5f6413c4c02f9b87a983143c9223508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938795e5c5a891424087b8a521cf121ea5f6413c4c02f9b87a983143c9223508->enter($__internal_938795e5c5a891424087b8a521cf121ea5f6413c4c02f9b87a983143c9223508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_6134f1c5337ab6dd78a42a7dde50ca4ee2390c4e8973a8fa7130c073d38493e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6134f1c5337ab6dd78a42a7dde50ca4ee2390c4e8973a8fa7130c073d38493e2->enter($__internal_6134f1c5337ab6dd78a42a7dde50ca4ee2390c4e8973a8fa7130c073d38493e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_938795e5c5a891424087b8a521cf121ea5f6413c4c02f9b87a983143c9223508->leave($__internal_938795e5c5a891424087b8a521cf121ea5f6413c4c02f9b87a983143c9223508_prof);

        
        $__internal_6134f1c5337ab6dd78a42a7dde50ca4ee2390c4e8973a8fa7130c073d38493e2->leave($__internal_6134f1c5337ab6dd78a42a7dde50ca4ee2390c4e8973a8fa7130c073d38493e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
