<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8437aef2032c9f4f9e33ee3554e6b64542fdaf6d61caaea9d2338f893725ca20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8437aef2032c9f4f9e33ee3554e6b64542fdaf6d61caaea9d2338f893725ca20->enter($__internal_8437aef2032c9f4f9e33ee3554e6b64542fdaf6d61caaea9d2338f893725ca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2fd5256ed5db97a8a2956ca33517c54023fc21d73c014cf13f2d24ea43156ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd5256ed5db97a8a2956ca33517c54023fc21d73c014cf13f2d24ea43156ee0->enter($__internal_2fd5256ed5db97a8a2956ca33517c54023fc21d73c014cf13f2d24ea43156ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8437aef2032c9f4f9e33ee3554e6b64542fdaf6d61caaea9d2338f893725ca20->leave($__internal_8437aef2032c9f4f9e33ee3554e6b64542fdaf6d61caaea9d2338f893725ca20_prof);

        
        $__internal_2fd5256ed5db97a8a2956ca33517c54023fc21d73c014cf13f2d24ea43156ee0->leave($__internal_2fd5256ed5db97a8a2956ca33517c54023fc21d73c014cf13f2d24ea43156ee0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0b35e4ad2d572205f183c963ae7d20b5a1c38675a53e0973be255bf183d5ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b35e4ad2d572205f183c963ae7d20b5a1c38675a53e0973be255bf183d5ca2->enter($__internal_a0b35e4ad2d572205f183c963ae7d20b5a1c38675a53e0973be255bf183d5ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_130a19d8eb445066244dc9ca583997acdc0d5e4c13b1c4570c10080ecb4cf961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130a19d8eb445066244dc9ca583997acdc0d5e4c13b1c4570c10080ecb4cf961->enter($__internal_130a19d8eb445066244dc9ca583997acdc0d5e4c13b1c4570c10080ecb4cf961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_130a19d8eb445066244dc9ca583997acdc0d5e4c13b1c4570c10080ecb4cf961->leave($__internal_130a19d8eb445066244dc9ca583997acdc0d5e4c13b1c4570c10080ecb4cf961_prof);

        
        $__internal_a0b35e4ad2d572205f183c963ae7d20b5a1c38675a53e0973be255bf183d5ca2->leave($__internal_a0b35e4ad2d572205f183c963ae7d20b5a1c38675a53e0973be255bf183d5ca2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_09d401e89efe9e9ffc2ac13c308a92de8d0064288aadba09453201439ab0a187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d401e89efe9e9ffc2ac13c308a92de8d0064288aadba09453201439ab0a187->enter($__internal_09d401e89efe9e9ffc2ac13c308a92de8d0064288aadba09453201439ab0a187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60c33314629afab3972c82fb3cf32b70be1f0e1945266e3123537dffe803cef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c33314629afab3972c82fb3cf32b70be1f0e1945266e3123537dffe803cef1->enter($__internal_60c33314629afab3972c82fb3cf32b70be1f0e1945266e3123537dffe803cef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_60c33314629afab3972c82fb3cf32b70be1f0e1945266e3123537dffe803cef1->leave($__internal_60c33314629afab3972c82fb3cf32b70be1f0e1945266e3123537dffe803cef1_prof);

        
        $__internal_09d401e89efe9e9ffc2ac13c308a92de8d0064288aadba09453201439ab0a187->leave($__internal_09d401e89efe9e9ffc2ac13c308a92de8d0064288aadba09453201439ab0a187_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b133e9ebfdc8c10bc9bcc1f6aba7ccba2cc015918a132141f0fe8c9631aa9942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b133e9ebfdc8c10bc9bcc1f6aba7ccba2cc015918a132141f0fe8c9631aa9942->enter($__internal_b133e9ebfdc8c10bc9bcc1f6aba7ccba2cc015918a132141f0fe8c9631aa9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9c11a309b422b427ecf169c855776e00d4ba81a561036b866a8d6bab4df8ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c11a309b422b427ecf169c855776e00d4ba81a561036b866a8d6bab4df8ed8->enter($__internal_d9c11a309b422b427ecf169c855776e00d4ba81a561036b866a8d6bab4df8ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9c11a309b422b427ecf169c855776e00d4ba81a561036b866a8d6bab4df8ed8->leave($__internal_d9c11a309b422b427ecf169c855776e00d4ba81a561036b866a8d6bab4df8ed8_prof);

        
        $__internal_b133e9ebfdc8c10bc9bcc1f6aba7ccba2cc015918a132141f0fe8c9631aa9942->leave($__internal_b133e9ebfdc8c10bc9bcc1f6aba7ccba2cc015918a132141f0fe8c9631aa9942_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "E:\\Users\\Carlitos\\Documents\\EstacionAR\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
