<?php

/* usuario/index.html.twig */
class __TwigTemplate_9c3316275d23c1a93ae934c34ff844a50889291c01777a05e7580f0f867c4d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_094330b4349e5e1615bf6b5f39c2ed8721e6d6cdba292e6e81767bed421d0d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094330b4349e5e1615bf6b5f39c2ed8721e6d6cdba292e6e81767bed421d0d8c->enter($__internal_094330b4349e5e1615bf6b5f39c2ed8721e6d6cdba292e6e81767bed421d0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_a524d53dea1ee7ba52cb0ba0ee947c0509214f22fecb78c55a8018d9e8d53f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a524d53dea1ee7ba52cb0ba0ee947c0509214f22fecb78c55a8018d9e8d53f59->enter($__internal_a524d53dea1ee7ba52cb0ba0ee947c0509214f22fecb78c55a8018d9e8d53f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094330b4349e5e1615bf6b5f39c2ed8721e6d6cdba292e6e81767bed421d0d8c->leave($__internal_094330b4349e5e1615bf6b5f39c2ed8721e6d6cdba292e6e81767bed421d0d8c_prof);

        
        $__internal_a524d53dea1ee7ba52cb0ba0ee947c0509214f22fecb78c55a8018d9e8d53f59->leave($__internal_a524d53dea1ee7ba52cb0ba0ee947c0509214f22fecb78c55a8018d9e8d53f59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bcf9f21714bd0eaa0661d324d2009451bdc1799ad44dbe3aa6233d94f2b96b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcf9f21714bd0eaa0661d324d2009451bdc1799ad44dbe3aa6233d94f2b96b4->enter($__internal_0bcf9f21714bd0eaa0661d324d2009451bdc1799ad44dbe3aa6233d94f2b96b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40a4d3adde7e5fd72113d304cdcbe8d0af7ddd7aab88b54b1e2106501d92a9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a4d3adde7e5fd72113d304cdcbe8d0af7ddd7aab88b54b1e2106501d92a9c9->enter($__internal_40a4d3adde7e5fd72113d304cdcbe8d0af7ddd7aab88b54b1e2106501d92a9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rol", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "eMail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
        echo "\">Create a new usuario</a>
        </li>
    </ul>
";
        
        $__internal_40a4d3adde7e5fd72113d304cdcbe8d0af7ddd7aab88b54b1e2106501d92a9c9->leave($__internal_40a4d3adde7e5fd72113d304cdcbe8d0af7ddd7aab88b54b1e2106501d92a9c9_prof);

        
        $__internal_0bcf9f21714bd0eaa0661d324d2009451bdc1799ad44dbe3aa6233d94f2b96b4->leave($__internal_0bcf9f21714bd0eaa0661d324d2009451bdc1799ad44dbe3aa6233d94f2b96b4_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  130 => 43,  118 => 37,  112 => 34,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for usuario in usuarios %}
            <tr>
                <td><a href=\"{{ path('usuario_show', { 'id': usuario.id }) }}\">{{ usuario.id }}</a></td>
                <td>{{ usuario.usuario }}</td>
                <td>{{ usuario.password }}</td>
                <td>{{ usuario.nombre }}</td>
                <td>{{ usuario.apellido }}</td>
                <td>{{ usuario.rol }}</td>
                <td>{{ usuario.eMail }}</td>
                <td>{{ usuario.telefono }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('usuario_show', { 'id': usuario.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_new') }}\">Create a new usuario</a>
        </li>
    </ul>
{% endblock %}
", "usuario/index.html.twig", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}
