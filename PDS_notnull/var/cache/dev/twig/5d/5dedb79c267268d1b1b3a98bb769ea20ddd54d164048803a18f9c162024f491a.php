<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a63a8a9527c351e8b88ca7a3d2094206d2ad0f9ae68b1ea8ae4ae0eb62b045df extends Twig_Template
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
        $__internal_e4f71fbc5774b538a1a245159bd5ffbbcd82ce86a9e1661737a44c505600293a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f71fbc5774b538a1a245159bd5ffbbcd82ce86a9e1661737a44c505600293a->enter($__internal_e4f71fbc5774b538a1a245159bd5ffbbcd82ce86a9e1661737a44c505600293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_10a891894d4e3ebc46fb06e1309f39b50c863e6c91c6afe37c4cb2d75b41811a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a891894d4e3ebc46fb06e1309f39b50c863e6c91c6afe37c4cb2d75b41811a->enter($__internal_10a891894d4e3ebc46fb06e1309f39b50c863e6c91c6afe37c4cb2d75b41811a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e4f71fbc5774b538a1a245159bd5ffbbcd82ce86a9e1661737a44c505600293a->leave($__internal_e4f71fbc5774b538a1a245159bd5ffbbcd82ce86a9e1661737a44c505600293a_prof);

        
        $__internal_10a891894d4e3ebc46fb06e1309f39b50c863e6c91c6afe37c4cb2d75b41811a->leave($__internal_10a891894d4e3ebc46fb06e1309f39b50c863e6c91c6afe37c4cb2d75b41811a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\notnull\\PDS_notnull\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
