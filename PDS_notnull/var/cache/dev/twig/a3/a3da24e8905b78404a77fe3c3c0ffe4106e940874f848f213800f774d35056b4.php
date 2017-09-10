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
        $__internal_c266ed55649bdfc0383666a81174e8e6d9155793feac31c448b8d3d3c8c4dbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c266ed55649bdfc0383666a81174e8e6d9155793feac31c448b8d3d3c8c4dbc8->enter($__internal_c266ed55649bdfc0383666a81174e8e6d9155793feac31c448b8d3d3c8c4dbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_63a7400fdc4005351957d6bd5077729bda8c21b71ae3149aebd32e79fb494698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a7400fdc4005351957d6bd5077729bda8c21b71ae3149aebd32e79fb494698->enter($__internal_63a7400fdc4005351957d6bd5077729bda8c21b71ae3149aebd32e79fb494698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_c266ed55649bdfc0383666a81174e8e6d9155793feac31c448b8d3d3c8c4dbc8->leave($__internal_c266ed55649bdfc0383666a81174e8e6d9155793feac31c448b8d3d3c8c4dbc8_prof);

        
        $__internal_63a7400fdc4005351957d6bd5077729bda8c21b71ae3149aebd32e79fb494698->leave($__internal_63a7400fdc4005351957d6bd5077729bda8c21b71ae3149aebd32e79fb494698_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b95490cc061dc8240a1a41920b1a889f02ef47587c91ce0e5378c62287da7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b95490cc061dc8240a1a41920b1a889f02ef47587c91ce0e5378c62287da7c4->enter($__internal_3b95490cc061dc8240a1a41920b1a889f02ef47587c91ce0e5378c62287da7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9fdfc3ea1742805c83c3cbd3e5e30b04dfa08e3ad35854916d0ac5ebb7a49f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fdfc3ea1742805c83c3cbd3e5e30b04dfa08e3ad35854916d0ac5ebb7a49f8->enter($__internal_c9fdfc3ea1742805c83c3cbd3e5e30b04dfa08e3ad35854916d0ac5ebb7a49f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9fdfc3ea1742805c83c3cbd3e5e30b04dfa08e3ad35854916d0ac5ebb7a49f8->leave($__internal_c9fdfc3ea1742805c83c3cbd3e5e30b04dfa08e3ad35854916d0ac5ebb7a49f8_prof);

        
        $__internal_3b95490cc061dc8240a1a41920b1a889f02ef47587c91ce0e5378c62287da7c4->leave($__internal_3b95490cc061dc8240a1a41920b1a889f02ef47587c91ce0e5378c62287da7c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_adefee817d5855bd38ec735efb1dff75c2a5e6f90a677cb35c046ca5b8fa6b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adefee817d5855bd38ec735efb1dff75c2a5e6f90a677cb35c046ca5b8fa6b6c->enter($__internal_adefee817d5855bd38ec735efb1dff75c2a5e6f90a677cb35c046ca5b8fa6b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f9469ccc79260a8cac794ea755db1539b39249edba8ed5d6bc73cc0e809eaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9469ccc79260a8cac794ea755db1539b39249edba8ed5d6bc73cc0e809eaf2->enter($__internal_8f9469ccc79260a8cac794ea755db1539b39249edba8ed5d6bc73cc0e809eaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text.css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/booptstrap.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_8f9469ccc79260a8cac794ea755db1539b39249edba8ed5d6bc73cc0e809eaf2->leave($__internal_8f9469ccc79260a8cac794ea755db1539b39249edba8ed5d6bc73cc0e809eaf2_prof);

        
        $__internal_adefee817d5855bd38ec735efb1dff75c2a5e6f90a677cb35c046ca5b8fa6b6c->leave($__internal_adefee817d5855bd38ec735efb1dff75c2a5e6f90a677cb35c046ca5b8fa6b6c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca8d797e08a0bee963a2a474d37491379bacd32ec7d32afa7eab6df16919c056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8d797e08a0bee963a2a474d37491379bacd32ec7d32afa7eab6df16919c056->enter($__internal_ca8d797e08a0bee963a2a474d37491379bacd32ec7d32afa7eab6df16919c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c13024f948930534308100f9080d6c5388b3ed038adc27cbfc655d1fad2f400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c13024f948930534308100f9080d6c5388b3ed038adc27cbfc655d1fad2f400->enter($__internal_6c13024f948930534308100f9080d6c5388b3ed038adc27cbfc655d1fad2f400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c13024f948930534308100f9080d6c5388b3ed038adc27cbfc655d1fad2f400->leave($__internal_6c13024f948930534308100f9080d6c5388b3ed038adc27cbfc655d1fad2f400_prof);

        
        $__internal_ca8d797e08a0bee963a2a474d37491379bacd32ec7d32afa7eab6df16919c056->leave($__internal_ca8d797e08a0bee963a2a474d37491379bacd32ec7d32afa7eab6df16919c056_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d75bc80b9e13db0b3912ad64b605fd6e963876e5058e59a06183b2ad78b4a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d75bc80b9e13db0b3912ad64b605fd6e963876e5058e59a06183b2ad78b4a74->enter($__internal_7d75bc80b9e13db0b3912ad64b605fd6e963876e5058e59a06183b2ad78b4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f467f9797931851f83e1c6af466d9c6ef45c36560fe6bd790c26bcdc25b5a488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f467f9797931851f83e1c6af466d9c6ef45c36560fe6bd790c26bcdc25b5a488->enter($__internal_f467f9797931851f83e1c6af466d9c6ef45c36560fe6bd790c26bcdc25b5a488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f467f9797931851f83e1c6af466d9c6ef45c36560fe6bd790c26bcdc25b5a488->leave($__internal_f467f9797931851f83e1c6af466d9c6ef45c36560fe6bd790c26bcdc25b5a488_prof);

        
        $__internal_7d75bc80b9e13db0b3912ad64b605fd6e963876e5058e59a06183b2ad78b4a74->leave($__internal_7d75bc80b9e13db0b3912ad64b605fd6e963876e5058e59a06183b2ad78b4a74_prof);

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
        return array (  140 => 16,  136 => 15,  131 => 14,  122 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 18,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text.css\" href=\"{{ asset('css/booptstrap.min.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.2.1.min.js')}}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
            <script src=\"{{ asset('js/popper.min.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\base.html.twig");
    }
}
