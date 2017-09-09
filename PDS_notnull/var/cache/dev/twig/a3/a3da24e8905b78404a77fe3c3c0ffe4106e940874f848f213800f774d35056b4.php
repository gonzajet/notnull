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
        $__internal_17db037c7b54ebc186a75cba0135f865e6b07778d0a3ab83b56492e300857695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17db037c7b54ebc186a75cba0135f865e6b07778d0a3ab83b56492e300857695->enter($__internal_17db037c7b54ebc186a75cba0135f865e6b07778d0a3ab83b56492e300857695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_27d0263a0d60b719a13a060e6750fb872ce5f807741ad8d062070dbfde3262f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d0263a0d60b719a13a060e6750fb872ce5f807741ad8d062070dbfde3262f5->enter($__internal_27d0263a0d60b719a13a060e6750fb872ce5f807741ad8d062070dbfde3262f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_17db037c7b54ebc186a75cba0135f865e6b07778d0a3ab83b56492e300857695->leave($__internal_17db037c7b54ebc186a75cba0135f865e6b07778d0a3ab83b56492e300857695_prof);

        
        $__internal_27d0263a0d60b719a13a060e6750fb872ce5f807741ad8d062070dbfde3262f5->leave($__internal_27d0263a0d60b719a13a060e6750fb872ce5f807741ad8d062070dbfde3262f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e160e6832ceb6808b2711759d641cf002037a2b48aff9927cbc6c8140eb7294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e160e6832ceb6808b2711759d641cf002037a2b48aff9927cbc6c8140eb7294->enter($__internal_1e160e6832ceb6808b2711759d641cf002037a2b48aff9927cbc6c8140eb7294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c92a2a739ff6a86faa73f50af3abc29fb991228c8cc98791eb614698a903eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c92a2a739ff6a86faa73f50af3abc29fb991228c8cc98791eb614698a903eab->enter($__internal_1c92a2a739ff6a86faa73f50af3abc29fb991228c8cc98791eb614698a903eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c92a2a739ff6a86faa73f50af3abc29fb991228c8cc98791eb614698a903eab->leave($__internal_1c92a2a739ff6a86faa73f50af3abc29fb991228c8cc98791eb614698a903eab_prof);

        
        $__internal_1e160e6832ceb6808b2711759d641cf002037a2b48aff9927cbc6c8140eb7294->leave($__internal_1e160e6832ceb6808b2711759d641cf002037a2b48aff9927cbc6c8140eb7294_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a001164ffb9d368ed9dcfe498357278bc5eff503b14826988dc6651711f7ac76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a001164ffb9d368ed9dcfe498357278bc5eff503b14826988dc6651711f7ac76->enter($__internal_a001164ffb9d368ed9dcfe498357278bc5eff503b14826988dc6651711f7ac76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4753591b66c4110e2e7551c8ef730cbf94ed169a18133d0fb690ea47ca5991a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4753591b66c4110e2e7551c8ef730cbf94ed169a18133d0fb690ea47ca5991a4->enter($__internal_4753591b66c4110e2e7551c8ef730cbf94ed169a18133d0fb690ea47ca5991a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4753591b66c4110e2e7551c8ef730cbf94ed169a18133d0fb690ea47ca5991a4->leave($__internal_4753591b66c4110e2e7551c8ef730cbf94ed169a18133d0fb690ea47ca5991a4_prof);

        
        $__internal_a001164ffb9d368ed9dcfe498357278bc5eff503b14826988dc6651711f7ac76->leave($__internal_a001164ffb9d368ed9dcfe498357278bc5eff503b14826988dc6651711f7ac76_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ac70e9c55e943b6a567d69fb18436be4bc3696bee56d8c877be39e31b41c347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac70e9c55e943b6a567d69fb18436be4bc3696bee56d8c877be39e31b41c347->enter($__internal_6ac70e9c55e943b6a567d69fb18436be4bc3696bee56d8c877be39e31b41c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_784616bba2af1fb80d1dc56837542c3d54bb4864f89c8d33c2ffafb84bbf73f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784616bba2af1fb80d1dc56837542c3d54bb4864f89c8d33c2ffafb84bbf73f3->enter($__internal_784616bba2af1fb80d1dc56837542c3d54bb4864f89c8d33c2ffafb84bbf73f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_784616bba2af1fb80d1dc56837542c3d54bb4864f89c8d33c2ffafb84bbf73f3->leave($__internal_784616bba2af1fb80d1dc56837542c3d54bb4864f89c8d33c2ffafb84bbf73f3_prof);

        
        $__internal_6ac70e9c55e943b6a567d69fb18436be4bc3696bee56d8c877be39e31b41c347->leave($__internal_6ac70e9c55e943b6a567d69fb18436be4bc3696bee56d8c877be39e31b41c347_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a2feca5778537f8b58a5d7890ca22634eae1022e9b9752026b751921787288a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2feca5778537f8b58a5d7890ca22634eae1022e9b9752026b751921787288a->enter($__internal_3a2feca5778537f8b58a5d7890ca22634eae1022e9b9752026b751921787288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fad792e57e46dc6cdb786fb51e9c0a0605f2717632b405b1e4bbd738a45d508c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad792e57e46dc6cdb786fb51e9c0a0605f2717632b405b1e4bbd738a45d508c->enter($__internal_fad792e57e46dc6cdb786fb51e9c0a0605f2717632b405b1e4bbd738a45d508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fad792e57e46dc6cdb786fb51e9c0a0605f2717632b405b1e4bbd738a45d508c->leave($__internal_fad792e57e46dc6cdb786fb51e9c0a0605f2717632b405b1e4bbd738a45d508c_prof);

        
        $__internal_3a2feca5778537f8b58a5d7890ca22634eae1022e9b9752026b751921787288a->leave($__internal_3a2feca5778537f8b58a5d7890ca22634eae1022e9b9752026b751921787288a_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\base.html.twig");
    }
}
