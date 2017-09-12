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
        $__internal_fda09823495013ce1003808448184bea618b43ae52fa29be2d264e6b03157176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda09823495013ce1003808448184bea618b43ae52fa29be2d264e6b03157176->enter($__internal_fda09823495013ce1003808448184bea618b43ae52fa29be2d264e6b03157176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a426fac869bcea0a4fb86b49509c607f8b17939b73ae45586d5b2781b141f6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a426fac869bcea0a4fb86b49509c607f8b17939b73ae45586d5b2781b141f6d5->enter($__internal_a426fac869bcea0a4fb86b49509c607f8b17939b73ae45586d5b2781b141f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fda09823495013ce1003808448184bea618b43ae52fa29be2d264e6b03157176->leave($__internal_fda09823495013ce1003808448184bea618b43ae52fa29be2d264e6b03157176_prof);

        
        $__internal_a426fac869bcea0a4fb86b49509c607f8b17939b73ae45586d5b2781b141f6d5->leave($__internal_a426fac869bcea0a4fb86b49509c607f8b17939b73ae45586d5b2781b141f6d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_487474a64cbb4f7e41928abbbfc00d477edbd90b26374104a9dab00467778c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487474a64cbb4f7e41928abbbfc00d477edbd90b26374104a9dab00467778c9a->enter($__internal_487474a64cbb4f7e41928abbbfc00d477edbd90b26374104a9dab00467778c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ab57f79ffcf0fef3b4eb8cb52d0add111046183bcac57e35b7465643ff1f0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab57f79ffcf0fef3b4eb8cb52d0add111046183bcac57e35b7465643ff1f0b2->enter($__internal_4ab57f79ffcf0fef3b4eb8cb52d0add111046183bcac57e35b7465643ff1f0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto!";
        
        $__internal_4ab57f79ffcf0fef3b4eb8cb52d0add111046183bcac57e35b7465643ff1f0b2->leave($__internal_4ab57f79ffcf0fef3b4eb8cb52d0add111046183bcac57e35b7465643ff1f0b2_prof);

        
        $__internal_487474a64cbb4f7e41928abbbfc00d477edbd90b26374104a9dab00467778c9a->leave($__internal_487474a64cbb4f7e41928abbbfc00d477edbd90b26374104a9dab00467778c9a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7a18d5584fc4ab0208f0772f0695a5704a9db3061380ad6b1b6c11e80e63e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a18d5584fc4ab0208f0772f0695a5704a9db3061380ad6b1b6c11e80e63e04->enter($__internal_c7a18d5584fc4ab0208f0772f0695a5704a9db3061380ad6b1b6c11e80e63e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_763f7e956f47cec480611ea5399e8ce9a6e8acf1eb8df940d293308145127376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763f7e956f47cec480611ea5399e8ce9a6e8acf1eb8df940d293308145127376->enter($__internal_763f7e956f47cec480611ea5399e8ce9a6e8acf1eb8df940d293308145127376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
           
        ";
        
        $__internal_763f7e956f47cec480611ea5399e8ce9a6e8acf1eb8df940d293308145127376->leave($__internal_763f7e956f47cec480611ea5399e8ce9a6e8acf1eb8df940d293308145127376_prof);

        
        $__internal_c7a18d5584fc4ab0208f0772f0695a5704a9db3061380ad6b1b6c11e80e63e04->leave($__internal_c7a18d5584fc4ab0208f0772f0695a5704a9db3061380ad6b1b6c11e80e63e04_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_504746c794d8d70c4ee15708adb5344caa7342abb4bd8c8fd9de676009c344f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504746c794d8d70c4ee15708adb5344caa7342abb4bd8c8fd9de676009c344f0->enter($__internal_504746c794d8d70c4ee15708adb5344caa7342abb4bd8c8fd9de676009c344f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fc7c3da1dc3f7641333aeb81ef747953b47560fdcbaabe3de7bbdeb16a2ecf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc7c3da1dc3f7641333aeb81ef747953b47560fdcbaabe3de7bbdeb16a2ecf6->enter($__internal_8fc7c3da1dc3f7641333aeb81ef747953b47560fdcbaabe3de7bbdeb16a2ecf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fc7c3da1dc3f7641333aeb81ef747953b47560fdcbaabe3de7bbdeb16a2ecf6->leave($__internal_8fc7c3da1dc3f7641333aeb81ef747953b47560fdcbaabe3de7bbdeb16a2ecf6_prof);

        
        $__internal_504746c794d8d70c4ee15708adb5344caa7342abb4bd8c8fd9de676009c344f0->leave($__internal_504746c794d8d70c4ee15708adb5344caa7342abb4bd8c8fd9de676009c344f0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_851d9208563c622d720e5f99e0426059f7d00bf1c76e35ee313c1ce590d94b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851d9208563c622d720e5f99e0426059f7d00bf1c76e35ee313c1ce590d94b6f->enter($__internal_851d9208563c622d720e5f99e0426059f7d00bf1c76e35ee313c1ce590d94b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5001af2c51dd81899aa6dd3d7c0fe35ac6d5a4ca13b37aae656cc783ccc27dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5001af2c51dd81899aa6dd3d7c0fe35ac6d5a4ca13b37aae656cc783ccc27dc0->enter($__internal_5001af2c51dd81899aa6dd3d7c0fe35ac6d5a4ca13b37aae656cc783ccc27dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5001af2c51dd81899aa6dd3d7c0fe35ac6d5a4ca13b37aae656cc783ccc27dc0->leave($__internal_5001af2c51dd81899aa6dd3d7c0fe35ac6d5a4ca13b37aae656cc783ccc27dc0_prof);

        
        $__internal_851d9208563c622d720e5f99e0426059f7d00bf1c76e35ee313c1ce590d94b6f->leave($__internal_851d9208563c622d720e5f99e0426059f7d00bf1c76e35ee313c1ce590d94b6f_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app/Resources\\views/base.html.twig");
    }
}
