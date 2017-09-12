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
        $__internal_f8e731580804c79bb7d6f2ff47e81e28db2f81208cfb9798d038bfb5ea65c489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e731580804c79bb7d6f2ff47e81e28db2f81208cfb9798d038bfb5ea65c489->enter($__internal_f8e731580804c79bb7d6f2ff47e81e28db2f81208cfb9798d038bfb5ea65c489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_488967c87c8024e6dfd9cd3f2da78d68709db1a142f6e836e5e1de87d0f2afe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488967c87c8024e6dfd9cd3f2da78d68709db1a142f6e836e5e1de87d0f2afe2->enter($__internal_488967c87c8024e6dfd9cd3f2da78d68709db1a142f6e836e5e1de87d0f2afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_f8e731580804c79bb7d6f2ff47e81e28db2f81208cfb9798d038bfb5ea65c489->leave($__internal_f8e731580804c79bb7d6f2ff47e81e28db2f81208cfb9798d038bfb5ea65c489_prof);

        
        $__internal_488967c87c8024e6dfd9cd3f2da78d68709db1a142f6e836e5e1de87d0f2afe2->leave($__internal_488967c87c8024e6dfd9cd3f2da78d68709db1a142f6e836e5e1de87d0f2afe2_prof);

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
