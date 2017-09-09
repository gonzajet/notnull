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
        $__internal_5186907fbfd7601d4cfc3d41205acd4f1ac2f43bb5a72ed6bb5b885472e584fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5186907fbfd7601d4cfc3d41205acd4f1ac2f43bb5a72ed6bb5b885472e584fa->enter($__internal_5186907fbfd7601d4cfc3d41205acd4f1ac2f43bb5a72ed6bb5b885472e584fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e6645567f0b281ea43b6ea61c9ccb345b047e7f32a5f4502c19e032b8462b592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6645567f0b281ea43b6ea61c9ccb345b047e7f32a5f4502c19e032b8462b592->enter($__internal_e6645567f0b281ea43b6ea61c9ccb345b047e7f32a5f4502c19e032b8462b592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_5186907fbfd7601d4cfc3d41205acd4f1ac2f43bb5a72ed6bb5b885472e584fa->leave($__internal_5186907fbfd7601d4cfc3d41205acd4f1ac2f43bb5a72ed6bb5b885472e584fa_prof);

        
        $__internal_e6645567f0b281ea43b6ea61c9ccb345b047e7f32a5f4502c19e032b8462b592->leave($__internal_e6645567f0b281ea43b6ea61c9ccb345b047e7f32a5f4502c19e032b8462b592_prof);

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
