<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_1880e901b84af981a262bb148049e00b1c4b29df3565996ccbefdc3119d4703f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1880e901b84af981a262bb148049e00b1c4b29df3565996ccbefdc3119d4703f->enter($__internal_1880e901b84af981a262bb148049e00b1c4b29df3565996ccbefdc3119d4703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b095440525f1ef5dac6643cf2e114d739823ef6e6df8a70354b8f70f97858d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b095440525f1ef5dac6643cf2e114d739823ef6e6df8a70354b8f70f97858d1e->enter($__internal_b095440525f1ef5dac6643cf2e114d739823ef6e6df8a70354b8f70f97858d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1880e901b84af981a262bb148049e00b1c4b29df3565996ccbefdc3119d4703f->leave($__internal_1880e901b84af981a262bb148049e00b1c4b29df3565996ccbefdc3119d4703f_prof);

        
        $__internal_b095440525f1ef5dac6643cf2e114d739823ef6e6df8a70354b8f70f97858d1e->leave($__internal_b095440525f1ef5dac6643cf2e114d739823ef6e6df8a70354b8f70f97858d1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
