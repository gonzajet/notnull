<?php

/* usuario/show.html.twig */
class __TwigTemplate_b6d57585fc8a3c4bd1ba77b995c8a0caf18a42d7e069e5583a7b8eb39e32efa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a3c486d41be38fe41e4b11a29937aca687d9faa71db18b5a97c66bdaae1236b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3c486d41be38fe41e4b11a29937aca687d9faa71db18b5a97c66bdaae1236b->enter($__internal_4a3c486d41be38fe41e4b11a29937aca687d9faa71db18b5a97c66bdaae1236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_3398e3637786186b127f2b86c38e1ad550e14b5cb081340ac20631e1135870c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3398e3637786186b127f2b86c38e1ad550e14b5cb081340ac20631e1135870c9->enter($__internal_3398e3637786186b127f2b86c38e1ad550e14b5cb081340ac20631e1135870c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3c486d41be38fe41e4b11a29937aca687d9faa71db18b5a97c66bdaae1236b->leave($__internal_4a3c486d41be38fe41e4b11a29937aca687d9faa71db18b5a97c66bdaae1236b_prof);

        
        $__internal_3398e3637786186b127f2b86c38e1ad550e14b5cb081340ac20631e1135870c9->leave($__internal_3398e3637786186b127f2b86c38e1ad550e14b5cb081340ac20631e1135870c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34b1a6aadcaf3fd7fd57ef83584589aadc5ae1f023e18a1177755b8053a7e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34b1a6aadcaf3fd7fd57ef83584589aadc5ae1f023e18a1177755b8053a7e6f->enter($__internal_a34b1a6aadcaf3fd7fd57ef83584589aadc5ae1f023e18a1177755b8053a7e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4326b9bf71d577aa1999ca46a2772eea9eacd24662433d7153bee6352cc8d823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4326b9bf71d577aa1999ca46a2772eea9eacd24662433d7153bee6352cc8d823->enter($__internal_4326b9bf71d577aa1999ca46a2772eea9eacd24662433d7153bee6352cc8d823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4326b9bf71d577aa1999ca46a2772eea9eacd24662433d7153bee6352cc8d823->leave($__internal_4326b9bf71d577aa1999ca46a2772eea9eacd24662433d7153bee6352cc8d823_prof);

        
        $__internal_a34b1a6aadcaf3fd7fd57ef83584589aadc5ae1f023e18a1177755b8053a7e6f->leave($__internal_a34b1a6aadcaf3fd7fd57ef83584589aadc5ae1f023e18a1177755b8053a7e6f_prof);

    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ usuario.nombre }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ usuario.apellido }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ usuario.mail }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "usuario/show.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\show.html.twig");
    }
}
