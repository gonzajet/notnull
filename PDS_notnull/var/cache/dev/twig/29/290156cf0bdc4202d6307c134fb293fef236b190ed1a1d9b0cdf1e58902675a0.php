<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_13d6abe4db688889006e99abf49b08cb6f14902caa17f0ae6661938f4a855ade extends Twig_Template
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
        $__internal_41a4226351a6b8cd6bc779e31864714355ca713d9317df2abfc2cfc7143c49d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a4226351a6b8cd6bc779e31864714355ca713d9317df2abfc2cfc7143c49d6->enter($__internal_41a4226351a6b8cd6bc779e31864714355ca713d9317df2abfc2cfc7143c49d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ca5a3efad6ca56f267e1c248bb6f545382ad5986b610e4b7f004bfbd14e64780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5a3efad6ca56f267e1c248bb6f545382ad5986b610e4b7f004bfbd14e64780->enter($__internal_ca5a3efad6ca56f267e1c248bb6f545382ad5986b610e4b7f004bfbd14e64780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_41a4226351a6b8cd6bc779e31864714355ca713d9317df2abfc2cfc7143c49d6->leave($__internal_41a4226351a6b8cd6bc779e31864714355ca713d9317df2abfc2cfc7143c49d6_prof);

        
        $__internal_ca5a3efad6ca56f267e1c248bb6f545382ad5986b610e4b7f004bfbd14e64780->leave($__internal_ca5a3efad6ca56f267e1c248bb6f545382ad5986b610e4b7f004bfbd14e64780_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
