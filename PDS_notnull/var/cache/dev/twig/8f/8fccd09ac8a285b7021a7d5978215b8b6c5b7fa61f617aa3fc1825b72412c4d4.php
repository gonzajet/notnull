<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_a2961df32e9406d86098bfdc59e6cdd531b54c2dd86e5423b6b9336c071d0fd2 extends Twig_Template
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
        $__internal_929efd75364c78ee68414e353cbf952b09122b97c778c0cf4269a89841b711a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929efd75364c78ee68414e353cbf952b09122b97c778c0cf4269a89841b711a7->enter($__internal_929efd75364c78ee68414e353cbf952b09122b97c778c0cf4269a89841b711a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        $__internal_77a4b7b5a42b4f94077857f4e18d61e1b8581197e0d7500e8c4584facf22b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a4b7b5a42b4f94077857f4e18d61e1b8581197e0d7500e8c4584facf22b09f->enter($__internal_77a4b7b5a42b4f94077857f4e18d61e1b8581197e0d7500e8c4584facf22b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_929efd75364c78ee68414e353cbf952b09122b97c778c0cf4269a89841b711a7->leave($__internal_929efd75364c78ee68414e353cbf952b09122b97c778c0cf4269a89841b711a7_prof);

        
        $__internal_77a4b7b5a42b4f94077857f4e18d61e1b8581197e0d7500e8c4584facf22b09f->leave($__internal_77a4b7b5a42b4f94077857f4e18d61e1b8581197e0d7500e8c4584facf22b09f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
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
        return new Twig_Source("<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
", "@Framework/Form/choice_widget_collapsed.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_collapsed.html.php");
    }
}
