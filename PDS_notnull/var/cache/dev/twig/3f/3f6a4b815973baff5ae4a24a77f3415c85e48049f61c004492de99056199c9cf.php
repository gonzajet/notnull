<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_9c3232e37cba3b751001c594343e5cc7099ef29c1c8efb7c87cf6da9330d7cd8 extends Twig_Template
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
        $__internal_f0abe043f11de5c5a4c9d27e4312dff0cc5bcc0be9d5b63684e4ff2a0470e7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0abe043f11de5c5a4c9d27e4312dff0cc5bcc0be9d5b63684e4ff2a0470e7c1->enter($__internal_f0abe043f11de5c5a4c9d27e4312dff0cc5bcc0be9d5b63684e4ff2a0470e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_8a27fcb7482e27831f87b83bb2738249ba040c8fcfbc77700a2e0b9851c94ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a27fcb7482e27831f87b83bb2738249ba040c8fcfbc77700a2e0b9851c94ab7->enter($__internal_8a27fcb7482e27831f87b83bb2738249ba040c8fcfbc77700a2e0b9851c94ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f0abe043f11de5c5a4c9d27e4312dff0cc5bcc0be9d5b63684e4ff2a0470e7c1->leave($__internal_f0abe043f11de5c5a4c9d27e4312dff0cc5bcc0be9d5b63684e4ff2a0470e7c1_prof);

        
        $__internal_8a27fcb7482e27831f87b83bb2738249ba040c8fcfbc77700a2e0b9851c94ab7->leave($__internal_8a27fcb7482e27831f87b83bb2738249ba040c8fcfbc77700a2e0b9851c94ab7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
