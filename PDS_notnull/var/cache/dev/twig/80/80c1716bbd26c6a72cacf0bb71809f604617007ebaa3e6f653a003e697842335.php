<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_14ab2d7c696c7d32414ade94c06ef05d852ea5ec6e8abab7c33d8ddb1d0e29cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e558fc0c959b8f86089b256cef780209c56dd24cd370930d60d029a5a37ffb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e558fc0c959b8f86089b256cef780209c56dd24cd370930d60d029a5a37ffb7a->enter($__internal_e558fc0c959b8f86089b256cef780209c56dd24cd370930d60d029a5a37ffb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e7529c4fefcaddd4d12802813767a92620fa3806a0f647241b40127eab7183be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7529c4fefcaddd4d12802813767a92620fa3806a0f647241b40127eab7183be->enter($__internal_e7529c4fefcaddd4d12802813767a92620fa3806a0f647241b40127eab7183be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e558fc0c959b8f86089b256cef780209c56dd24cd370930d60d029a5a37ffb7a->leave($__internal_e558fc0c959b8f86089b256cef780209c56dd24cd370930d60d029a5a37ffb7a_prof);

        
        $__internal_e7529c4fefcaddd4d12802813767a92620fa3806a0f647241b40127eab7183be->leave($__internal_e7529c4fefcaddd4d12802813767a92620fa3806a0f647241b40127eab7183be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_362879732c1fd8c348bbc48c7b2768d91fd71dcd7318b94d19a6a596d077aae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362879732c1fd8c348bbc48c7b2768d91fd71dcd7318b94d19a6a596d077aae9->enter($__internal_362879732c1fd8c348bbc48c7b2768d91fd71dcd7318b94d19a6a596d077aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1c6188916964806f1e473d4f2a3271d140edcb9b0fb16cbd33ef7b88da1221b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6188916964806f1e473d4f2a3271d140edcb9b0fb16cbd33ef7b88da1221b2->enter($__internal_1c6188916964806f1e473d4f2a3271d140edcb9b0fb16cbd33ef7b88da1221b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1c6188916964806f1e473d4f2a3271d140edcb9b0fb16cbd33ef7b88da1221b2->leave($__internal_1c6188916964806f1e473d4f2a3271d140edcb9b0fb16cbd33ef7b88da1221b2_prof);

        
        $__internal_362879732c1fd8c348bbc48c7b2768d91fd71dcd7318b94d19a6a596d077aae9->leave($__internal_362879732c1fd8c348bbc48c7b2768d91fd71dcd7318b94d19a6a596d077aae9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/gonzalo/notnull/PDS_notnull/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
