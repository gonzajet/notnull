<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_26ce063fe9be192b956753213ac612bba2e41dc305aa519593807e55e9632f55 extends Twig_Template
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
        $__internal_0f1a1121ffbc67765a0fb750b0625cb22b8c686cd3eff983e84c14097bb0b05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1a1121ffbc67765a0fb750b0625cb22b8c686cd3eff983e84c14097bb0b05f->enter($__internal_0f1a1121ffbc67765a0fb750b0625cb22b8c686cd3eff983e84c14097bb0b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_be8e15cfae203ac0a787662ea2361451e2d8684b22a415dcfc2319e51474020f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e15cfae203ac0a787662ea2361451e2d8684b22a415dcfc2319e51474020f->enter($__internal_be8e15cfae203ac0a787662ea2361451e2d8684b22a415dcfc2319e51474020f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_0f1a1121ffbc67765a0fb750b0625cb22b8c686cd3eff983e84c14097bb0b05f->leave($__internal_0f1a1121ffbc67765a0fb750b0625cb22b8c686cd3eff983e84c14097bb0b05f_prof);

        
        $__internal_be8e15cfae203ac0a787662ea2361451e2d8684b22a415dcfc2319e51474020f->leave($__internal_be8e15cfae203ac0a787662ea2361451e2d8684b22a415dcfc2319e51474020f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ac91b104832c84c213ca2b9ab25e22874b3b4c75c17ab92b625b293fbadde0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac91b104832c84c213ca2b9ab25e22874b3b4c75c17ab92b625b293fbadde0b->enter($__internal_3ac91b104832c84c213ca2b9ab25e22874b3b4c75c17ab92b625b293fbadde0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2fb0530b6036fed0e89ee1f00b8a4bf122bc5faedf1d8d524b6631380a2066e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fb0530b6036fed0e89ee1f00b8a4bf122bc5faedf1d8d524b6631380a2066e->enter($__internal_c2fb0530b6036fed0e89ee1f00b8a4bf122bc5faedf1d8d524b6631380a2066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c2fb0530b6036fed0e89ee1f00b8a4bf122bc5faedf1d8d524b6631380a2066e->leave($__internal_c2fb0530b6036fed0e89ee1f00b8a4bf122bc5faedf1d8d524b6631380a2066e_prof);

        
        $__internal_3ac91b104832c84c213ca2b9ab25e22874b3b4c75c17ab92b625b293fbadde0b->leave($__internal_3ac91b104832c84c213ca2b9ab25e22874b3b4c75c17ab92b625b293fbadde0b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bd32b718fe1b1ec81ecfa6dc33b60a19159fbef64d92b003848d03c77f179ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd32b718fe1b1ec81ecfa6dc33b60a19159fbef64d92b003848d03c77f179ed->enter($__internal_7bd32b718fe1b1ec81ecfa6dc33b60a19159fbef64d92b003848d03c77f179ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_399641f8d653252bf28bce4e832a88d9c970fd46d464f51885103b1d808ea5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399641f8d653252bf28bce4e832a88d9c970fd46d464f51885103b1d808ea5ab->enter($__internal_399641f8d653252bf28bce4e832a88d9c970fd46d464f51885103b1d808ea5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_399641f8d653252bf28bce4e832a88d9c970fd46d464f51885103b1d808ea5ab->leave($__internal_399641f8d653252bf28bce4e832a88d9c970fd46d464f51885103b1d808ea5ab_prof);

        
        $__internal_7bd32b718fe1b1ec81ecfa6dc33b60a19159fbef64d92b003848d03c77f179ed->leave($__internal_7bd32b718fe1b1ec81ecfa6dc33b60a19159fbef64d92b003848d03c77f179ed_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_84367f2159e71487b91ab509572056d05d098d72cfab1d127427402ae5cadbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84367f2159e71487b91ab509572056d05d098d72cfab1d127427402ae5cadbab->enter($__internal_84367f2159e71487b91ab509572056d05d098d72cfab1d127427402ae5cadbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cd5228b1b58f2f74dca64067fd115bdbd203c9cf6e084fb98f87a298537bc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd5228b1b58f2f74dca64067fd115bdbd203c9cf6e084fb98f87a298537bc96->enter($__internal_0cd5228b1b58f2f74dca64067fd115bdbd203c9cf6e084fb98f87a298537bc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cd5228b1b58f2f74dca64067fd115bdbd203c9cf6e084fb98f87a298537bc96->leave($__internal_0cd5228b1b58f2f74dca64067fd115bdbd203c9cf6e084fb98f87a298537bc96_prof);

        
        $__internal_84367f2159e71487b91ab509572056d05d098d72cfab1d127427402ae5cadbab->leave($__internal_84367f2159e71487b91ab509572056d05d098d72cfab1d127427402ae5cadbab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
