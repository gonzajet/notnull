<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e80bd426376c58c1d5dca3b1cc12ff386d456005d8dcca2ea8a2fe02d8fa5d55 extends Twig_Template
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
        $__internal_fe9f3e1511d53a7b86ffe08557d17a1a105a40de0924836d22f0b219c5e8e550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9f3e1511d53a7b86ffe08557d17a1a105a40de0924836d22f0b219c5e8e550->enter($__internal_fe9f3e1511d53a7b86ffe08557d17a1a105a40de0924836d22f0b219c5e8e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_64a2e71153f274c9948dcaf52e0246cc020d8ef2d35c5339c38af022b327c5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a2e71153f274c9948dcaf52e0246cc020d8ef2d35c5339c38af022b327c5f4->enter($__internal_64a2e71153f274c9948dcaf52e0246cc020d8ef2d35c5339c38af022b327c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fe9f3e1511d53a7b86ffe08557d17a1a105a40de0924836d22f0b219c5e8e550->leave($__internal_fe9f3e1511d53a7b86ffe08557d17a1a105a40de0924836d22f0b219c5e8e550_prof);

        
        $__internal_64a2e71153f274c9948dcaf52e0246cc020d8ef2d35c5339c38af022b327c5f4->leave($__internal_64a2e71153f274c9948dcaf52e0246cc020d8ef2d35c5339c38af022b327c5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
