<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_5cd7c590f11495533d9e18131c72ab64cefd1271bc766a0d997216c7b70dda45 extends Twig_Template
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
        $__internal_aa5b4245207dbc622cc187359bfd80998eb15e1aa76670faaaecca2795cbdf17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5b4245207dbc622cc187359bfd80998eb15e1aa76670faaaecca2795cbdf17->enter($__internal_aa5b4245207dbc622cc187359bfd80998eb15e1aa76670faaaecca2795cbdf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        $__internal_a8ac4f06e72c78b430d52f524a2fdebc77b15e29780fedf2ff50180d163bae49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ac4f06e72c78b430d52f524a2fdebc77b15e29780fedf2ff50180d163bae49->enter($__internal_a8ac4f06e72c78b430d52f524a2fdebc77b15e29780fedf2ff50180d163bae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_aa5b4245207dbc622cc187359bfd80998eb15e1aa76670faaaecca2795cbdf17->leave($__internal_aa5b4245207dbc622cc187359bfd80998eb15e1aa76670faaaecca2795cbdf17_prof);

        
        $__internal_a8ac4f06e72c78b430d52f524a2fdebc77b15e29780fedf2ff50180d163bae49->leave($__internal_a8ac4f06e72c78b430d52f524a2fdebc77b15e29780fedf2ff50180d163bae49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
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
        return new Twig_Source("<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_widget_options.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_options.html.php");
    }
}
