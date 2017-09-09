<?php

/* ::base.html.twig */
class __TwigTemplate_7ba426c3fd6db79c519a62bea0910f1177809241c289686031b107a8977fbd24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d34af0c24cd80c8be9507d0b8e6fecd2e0beeb1f6cff5f5691f5448b5cdd0dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34af0c24cd80c8be9507d0b8e6fecd2e0beeb1f6cff5f5691f5448b5cdd0dba->enter($__internal_d34af0c24cd80c8be9507d0b8e6fecd2e0beeb1f6cff5f5691f5448b5cdd0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b8b3d15d19106d89b8b97c812377c564cd85fde69a09aa6bb1209fc922c34479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b3d15d19106d89b8b97c812377c564cd85fde69a09aa6bb1209fc922c34479->enter($__internal_b8b3d15d19106d89b8b97c812377c564cd85fde69a09aa6bb1209fc922c34479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d34af0c24cd80c8be9507d0b8e6fecd2e0beeb1f6cff5f5691f5448b5cdd0dba->leave($__internal_d34af0c24cd80c8be9507d0b8e6fecd2e0beeb1f6cff5f5691f5448b5cdd0dba_prof);

        
        $__internal_b8b3d15d19106d89b8b97c812377c564cd85fde69a09aa6bb1209fc922c34479->leave($__internal_b8b3d15d19106d89b8b97c812377c564cd85fde69a09aa6bb1209fc922c34479_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b7699a979f21c5608c1d78136769b2802d37f2202244138c8c62b6317693de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b7699a979f21c5608c1d78136769b2802d37f2202244138c8c62b6317693de->enter($__internal_44b7699a979f21c5608c1d78136769b2802d37f2202244138c8c62b6317693de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f4b24f8fcf76c1393833df05f7ab9f8fe496bfd1baf67ed951e9478defe80f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4b24f8fcf76c1393833df05f7ab9f8fe496bfd1baf67ed951e9478defe80f5->enter($__internal_6f4b24f8fcf76c1393833df05f7ab9f8fe496bfd1baf67ed951e9478defe80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f4b24f8fcf76c1393833df05f7ab9f8fe496bfd1baf67ed951e9478defe80f5->leave($__internal_6f4b24f8fcf76c1393833df05f7ab9f8fe496bfd1baf67ed951e9478defe80f5_prof);

        
        $__internal_44b7699a979f21c5608c1d78136769b2802d37f2202244138c8c62b6317693de->leave($__internal_44b7699a979f21c5608c1d78136769b2802d37f2202244138c8c62b6317693de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9fb33a5e097d61875d1b0f04ca28f28a5ce1386ec5261584523c106a8d6ae9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fb33a5e097d61875d1b0f04ca28f28a5ce1386ec5261584523c106a8d6ae9b->enter($__internal_b9fb33a5e097d61875d1b0f04ca28f28a5ce1386ec5261584523c106a8d6ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd161364562079221bf26adf5a61460b818fd94080d006d3b6c8145da48f66eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd161364562079221bf26adf5a61460b818fd94080d006d3b6c8145da48f66eb->enter($__internal_fd161364562079221bf26adf5a61460b818fd94080d006d3b6c8145da48f66eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd161364562079221bf26adf5a61460b818fd94080d006d3b6c8145da48f66eb->leave($__internal_fd161364562079221bf26adf5a61460b818fd94080d006d3b6c8145da48f66eb_prof);

        
        $__internal_b9fb33a5e097d61875d1b0f04ca28f28a5ce1386ec5261584523c106a8d6ae9b->leave($__internal_b9fb33a5e097d61875d1b0f04ca28f28a5ce1386ec5261584523c106a8d6ae9b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33187a1c6323530af0192a74c2bd1148b7268f1c52f9a9ceb3f63f7dd6bf90e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33187a1c6323530af0192a74c2bd1148b7268f1c52f9a9ceb3f63f7dd6bf90e1->enter($__internal_33187a1c6323530af0192a74c2bd1148b7268f1c52f9a9ceb3f63f7dd6bf90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a0c2dc470413242e310591f5082afcedc5f50f83e5faa36b2a7c397ce04870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a0c2dc470413242e310591f5082afcedc5f50f83e5faa36b2a7c397ce04870->enter($__internal_f1a0c2dc470413242e310591f5082afcedc5f50f83e5faa36b2a7c397ce04870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1a0c2dc470413242e310591f5082afcedc5f50f83e5faa36b2a7c397ce04870->leave($__internal_f1a0c2dc470413242e310591f5082afcedc5f50f83e5faa36b2a7c397ce04870_prof);

        
        $__internal_33187a1c6323530af0192a74c2bd1148b7268f1c52f9a9ceb3f63f7dd6bf90e1->leave($__internal_33187a1c6323530af0192a74c2bd1148b7268f1c52f9a9ceb3f63f7dd6bf90e1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5576cb5d82c2cc636e9a06c6f862ae35e21710205b53f0b25e7d4e89a708e6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5576cb5d82c2cc636e9a06c6f862ae35e21710205b53f0b25e7d4e89a708e6ad->enter($__internal_5576cb5d82c2cc636e9a06c6f862ae35e21710205b53f0b25e7d4e89a708e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2d23f2f69d764419a89dba35ace68346ecf0815e2f2de599c7c46e704af3b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d23f2f69d764419a89dba35ace68346ecf0815e2f2de599c7c46e704af3b4c->enter($__internal_d2d23f2f69d764419a89dba35ace68346ecf0815e2f2de599c7c46e704af3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2d23f2f69d764419a89dba35ace68346ecf0815e2f2de599c7c46e704af3b4c->leave($__internal_d2d23f2f69d764419a89dba35ace68346ecf0815e2f2de599c7c46e704af3b4c_prof);

        
        $__internal_5576cb5d82c2cc636e9a06c6f862ae35e21710205b53f0b25e7d4e89a708e6ad->leave($__internal_5576cb5d82c2cc636e9a06c6f862ae35e21710205b53f0b25e7d4e89a708e6ad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app/Resources\\views/base.html.twig");
    }
}
