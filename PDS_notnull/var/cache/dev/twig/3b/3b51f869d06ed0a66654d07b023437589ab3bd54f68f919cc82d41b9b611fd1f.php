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
        $__internal_4833de71aceaccc17987f12e254cd0f67c117b634c55fb4a9aedb66b762f87d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4833de71aceaccc17987f12e254cd0f67c117b634c55fb4a9aedb66b762f87d3->enter($__internal_4833de71aceaccc17987f12e254cd0f67c117b634c55fb4a9aedb66b762f87d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_f37ab3d05ae3aef0dba24da65a39aa05f9718f0d31d0f173864f2833e3d12661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37ab3d05ae3aef0dba24da65a39aa05f9718f0d31d0f173864f2833e3d12661->enter($__internal_f37ab3d05ae3aef0dba24da65a39aa05f9718f0d31d0f173864f2833e3d12661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4833de71aceaccc17987f12e254cd0f67c117b634c55fb4a9aedb66b762f87d3->leave($__internal_4833de71aceaccc17987f12e254cd0f67c117b634c55fb4a9aedb66b762f87d3_prof);

        
        $__internal_f37ab3d05ae3aef0dba24da65a39aa05f9718f0d31d0f173864f2833e3d12661->leave($__internal_f37ab3d05ae3aef0dba24da65a39aa05f9718f0d31d0f173864f2833e3d12661_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3ced777f8bf6b384ae167100807afb85dedc6ce43cd59cd3a29ec9ae650f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ced777f8bf6b384ae167100807afb85dedc6ce43cd59cd3a29ec9ae650f0d4->enter($__internal_f3ced777f8bf6b384ae167100807afb85dedc6ce43cd59cd3a29ec9ae650f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b644e4f8d139ca8aa0c74d0fabedbd60a9d8a86756d16bee940a27b094050c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b644e4f8d139ca8aa0c74d0fabedbd60a9d8a86756d16bee940a27b094050c6e->enter($__internal_b644e4f8d139ca8aa0c74d0fabedbd60a9d8a86756d16bee940a27b094050c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Usuario</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "rol", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "eMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b644e4f8d139ca8aa0c74d0fabedbd60a9d8a86756d16bee940a27b094050c6e->leave($__internal_b644e4f8d139ca8aa0c74d0fabedbd60a9d8a86756d16bee940a27b094050c6e_prof);

        
        $__internal_f3ced777f8bf6b384ae167100807afb85dedc6ce43cd59cd3a29ec9ae650f0d4->leave($__internal_f3ced777f8bf6b384ae167100807afb85dedc6ce43cd59cd3a29ec9ae650f0d4_prof);

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
        return array (  133 => 53,  128 => 51,  122 => 48,  116 => 45,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Usuario</th>
                <td>{{ usuario.usuario }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ usuario.password }}</td>
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
                <th>Rol</th>
                <td>{{ usuario.rol }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ usuario.eMail }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ usuario.telefono }}</td>
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
