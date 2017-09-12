<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6428b4abae5d306971ded0d0883ca72b5878154f4977e15eabb1b37bde4c5bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_6f9f8c280eeb6d6b3d550a061349dbf44c662ba4ea756f1bd8f111e7f04faea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9f8c280eeb6d6b3d550a061349dbf44c662ba4ea756f1bd8f111e7f04faea8->enter($__internal_6f9f8c280eeb6d6b3d550a061349dbf44c662ba4ea756f1bd8f111e7f04faea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_180b1d6bbad6cf0cdbeb1a4fb48d35e94bdc0f2e418fbd0f3f1a3024526063ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180b1d6bbad6cf0cdbeb1a4fb48d35e94bdc0f2e418fbd0f3f1a3024526063ea->enter($__internal_180b1d6bbad6cf0cdbeb1a4fb48d35e94bdc0f2e418fbd0f3f1a3024526063ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f9f8c280eeb6d6b3d550a061349dbf44c662ba4ea756f1bd8f111e7f04faea8->leave($__internal_6f9f8c280eeb6d6b3d550a061349dbf44c662ba4ea756f1bd8f111e7f04faea8_prof);

        
        $__internal_180b1d6bbad6cf0cdbeb1a4fb48d35e94bdc0f2e418fbd0f3f1a3024526063ea->leave($__internal_180b1d6bbad6cf0cdbeb1a4fb48d35e94bdc0f2e418fbd0f3f1a3024526063ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca8bd75685635545815546296d72eae1a74a7281611d050195cc5fa11f295f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8bd75685635545815546296d72eae1a74a7281611d050195cc5fa11f295f9b->enter($__internal_ca8bd75685635545815546296d72eae1a74a7281611d050195cc5fa11f295f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64c86f10cd15314dcc0b25cf8db54eb8c913fb7e3bb3adf9b82e366b6aed16f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c86f10cd15314dcc0b25cf8db54eb8c913fb7e3bb3adf9b82e366b6aed16f2->enter($__internal_64c86f10cd15314dcc0b25cf8db54eb8c913fb7e3bb3adf9b82e366b6aed16f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_64c86f10cd15314dcc0b25cf8db54eb8c913fb7e3bb3adf9b82e366b6aed16f2->leave($__internal_64c86f10cd15314dcc0b25cf8db54eb8c913fb7e3bb3adf9b82e366b6aed16f2_prof);

        
        $__internal_ca8bd75685635545815546296d72eae1a74a7281611d050195cc5fa11f295f9b->leave($__internal_ca8bd75685635545815546296d72eae1a74a7281611d050195cc5fa11f295f9b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
