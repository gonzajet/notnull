<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
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
        $__internal_a25d38b414cfc3384292b2f93fea883e81fcc8ef7074c090a918ff82356155b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25d38b414cfc3384292b2f93fea883e81fcc8ef7074c090a918ff82356155b5->enter($__internal_a25d38b414cfc3384292b2f93fea883e81fcc8ef7074c090a918ff82356155b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d7c78a4b734ac5f47270e2ea7d778994f30f27823bb8a97828009e9b53687551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c78a4b734ac5f47270e2ea7d778994f30f27823bb8a97828009e9b53687551->enter($__internal_d7c78a4b734ac5f47270e2ea7d778994f30f27823bb8a97828009e9b53687551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" 
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_a25d38b414cfc3384292b2f93fea883e81fcc8ef7074c090a918ff82356155b5->leave($__internal_a25d38b414cfc3384292b2f93fea883e81fcc8ef7074c090a918ff82356155b5_prof);

        
        $__internal_d7c78a4b734ac5f47270e2ea7d778994f30f27823bb8a97828009e9b53687551->leave($__internal_d7c78a4b734ac5f47270e2ea7d778994f30f27823bb8a97828009e9b53687551_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a17eb0af9f3de99ba77bd35cf9faa8766d4f49f42dc4811df33e3c1e4004a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a17eb0af9f3de99ba77bd35cf9faa8766d4f49f42dc4811df33e3c1e4004a2e->enter($__internal_5a17eb0af9f3de99ba77bd35cf9faa8766d4f49f42dc4811df33e3c1e4004a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48d0b1383a32394413828e26b2c7ea5f23e5b9bc6f4b3bbcc81c5a45a6a5f021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d0b1383a32394413828e26b2c7ea5f23e5b9bc6f4b3bbcc81c5a45a6a5f021->enter($__internal_48d0b1383a32394413828e26b2c7ea5f23e5b9bc6f4b3bbcc81c5a45a6a5f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto!";
        
        $__internal_48d0b1383a32394413828e26b2c7ea5f23e5b9bc6f4b3bbcc81c5a45a6a5f021->leave($__internal_48d0b1383a32394413828e26b2c7ea5f23e5b9bc6f4b3bbcc81c5a45a6a5f021_prof);

        
        $__internal_5a17eb0af9f3de99ba77bd35cf9faa8766d4f49f42dc4811df33e3c1e4004a2e->leave($__internal_5a17eb0af9f3de99ba77bd35cf9faa8766d4f49f42dc4811df33e3c1e4004a2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32cbf1b05a2708d60dd3eabae2e53f0d6ece513eb774d1a54146f8af5b6b75bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cbf1b05a2708d60dd3eabae2e53f0d6ece513eb774d1a54146f8af5b6b75bf->enter($__internal_32cbf1b05a2708d60dd3eabae2e53f0d6ece513eb774d1a54146f8af5b6b75bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d965d27b042fbb8c2e42ce3ef9d701e169c7122bd8f23a3d31dd5b8b7610027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d965d27b042fbb8c2e42ce3ef9d701e169c7122bd8f23a3d31dd5b8b7610027->enter($__internal_7d965d27b042fbb8c2e42ce3ef9d701e169c7122bd8f23a3d31dd5b8b7610027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
           
        ";
        
        $__internal_7d965d27b042fbb8c2e42ce3ef9d701e169c7122bd8f23a3d31dd5b8b7610027->leave($__internal_7d965d27b042fbb8c2e42ce3ef9d701e169c7122bd8f23a3d31dd5b8b7610027_prof);

        
        $__internal_32cbf1b05a2708d60dd3eabae2e53f0d6ece513eb774d1a54146f8af5b6b75bf->leave($__internal_32cbf1b05a2708d60dd3eabae2e53f0d6ece513eb774d1a54146f8af5b6b75bf_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_47d42bf45179cc50dfcf5236dd7d776944584368f66d75bf72a86508bfb647c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d42bf45179cc50dfcf5236dd7d776944584368f66d75bf72a86508bfb647c9->enter($__internal_47d42bf45179cc50dfcf5236dd7d776944584368f66d75bf72a86508bfb647c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6043820254a33ae66c78e25458ccc5461b2de9c08297ba39cc89e22c1e8ab9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6043820254a33ae66c78e25458ccc5461b2de9c08297ba39cc89e22c1e8ab9fb->enter($__internal_6043820254a33ae66c78e25458ccc5461b2de9c08297ba39cc89e22c1e8ab9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6043820254a33ae66c78e25458ccc5461b2de9c08297ba39cc89e22c1e8ab9fb->leave($__internal_6043820254a33ae66c78e25458ccc5461b2de9c08297ba39cc89e22c1e8ab9fb_prof);

        
        $__internal_47d42bf45179cc50dfcf5236dd7d776944584368f66d75bf72a86508bfb647c9->leave($__internal_47d42bf45179cc50dfcf5236dd7d776944584368f66d75bf72a86508bfb647c9_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86408097d2c037c648a607f7d0b3aed109b568b676f2856963bf616e8f1471fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86408097d2c037c648a607f7d0b3aed109b568b676f2856963bf616e8f1471fc->enter($__internal_86408097d2c037c648a607f7d0b3aed109b568b676f2856963bf616e8f1471fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c06a426c39b43465ab8213055dae5fa5892c169ed1ff2b31696cae31bef5f31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06a426c39b43465ab8213055dae5fa5892c169ed1ff2b31696cae31bef5f31b->enter($__internal_c06a426c39b43465ab8213055dae5fa5892c169ed1ff2b31696cae31bef5f31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c06a426c39b43465ab8213055dae5fa5892c169ed1ff2b31696cae31bef5f31b->leave($__internal_c06a426c39b43465ab8213055dae5fa5892c169ed1ff2b31696cae31bef5f31b_prof);

        
        $__internal_86408097d2c037c648a607f7d0b3aed109b568b676f2856963bf616e8f1471fc->leave($__internal_86408097d2c037c648a607f7d0b3aed109b568b676f2856963bf616e8f1471fc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 17,  136 => 16,  127 => 15,  110 => 14,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 19,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Proyecto!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('public/css/style.css')}}\" rel=\"stylesheet\" >
            <link href=\"{{asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
           
        {% endblock %}
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" 
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-3.2.1.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\base.html.twig");
    }
}
