<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5050281a025901ccf12f747f91bee6db886e2642bbb06bb5fdcc7fc7bd22c63f extends Twig_Template
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
        $__internal_97d86874ae644b16bb7cc8501bba2e8125840cf187d6f1ce2a0a1ffe0fadc829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d86874ae644b16bb7cc8501bba2e8125840cf187d6f1ce2a0a1ffe0fadc829->enter($__internal_97d86874ae644b16bb7cc8501bba2e8125840cf187d6f1ce2a0a1ffe0fadc829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b051be666cc644adadbab06233d8ceaa2db86fdd00d3099db2b1a66e052973dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051be666cc644adadbab06233d8ceaa2db86fdd00d3099db2b1a66e052973dc->enter($__internal_b051be666cc644adadbab06233d8ceaa2db86fdd00d3099db2b1a66e052973dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_97d86874ae644b16bb7cc8501bba2e8125840cf187d6f1ce2a0a1ffe0fadc829->leave($__internal_97d86874ae644b16bb7cc8501bba2e8125840cf187d6f1ce2a0a1ffe0fadc829_prof);

        
        $__internal_b051be666cc644adadbab06233d8ceaa2db86fdd00d3099db2b1a66e052973dc->leave($__internal_b051be666cc644adadbab06233d8ceaa2db86fdd00d3099db2b1a66e052973dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
