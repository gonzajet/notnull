<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cab60bb41ec561f0c787e1233012b8388ea09d3e38890348c490e604b5bda992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61dcfc9276bf84b100b304af734c8508ac41385eb5c053391af3cedbbb557087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dcfc9276bf84b100b304af734c8508ac41385eb5c053391af3cedbbb557087->enter($__internal_61dcfc9276bf84b100b304af734c8508ac41385eb5c053391af3cedbbb557087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_857c0dc78c93fae1e68221d2a772064f8610f9ba341cb339aa17784e8407a79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857c0dc78c93fae1e68221d2a772064f8610f9ba341cb339aa17784e8407a79f->enter($__internal_857c0dc78c93fae1e68221d2a772064f8610f9ba341cb339aa17784e8407a79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61dcfc9276bf84b100b304af734c8508ac41385eb5c053391af3cedbbb557087->leave($__internal_61dcfc9276bf84b100b304af734c8508ac41385eb5c053391af3cedbbb557087_prof);

        
        $__internal_857c0dc78c93fae1e68221d2a772064f8610f9ba341cb339aa17784e8407a79f->leave($__internal_857c0dc78c93fae1e68221d2a772064f8610f9ba341cb339aa17784e8407a79f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
