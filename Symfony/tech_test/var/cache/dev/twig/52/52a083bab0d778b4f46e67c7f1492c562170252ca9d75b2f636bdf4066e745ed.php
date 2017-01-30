<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8dc9e6c82196d273eff516f503cb02cd1de7ad444fd39dc242077a723ca70405 extends Twig_Template
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
        $__internal_e37dd775b84500e231d8dfdf3a6a41f4d8f2eacf7eecb8fc0dd2a8ff4121a422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37dd775b84500e231d8dfdf3a6a41f4d8f2eacf7eecb8fc0dd2a8ff4121a422->enter($__internal_e37dd775b84500e231d8dfdf3a6a41f4d8f2eacf7eecb8fc0dd2a8ff4121a422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_90d8cb8cec7a958257bcaf93d4de8c4f00764405441aeebaf8cac5cf56c283bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d8cb8cec7a958257bcaf93d4de8c4f00764405441aeebaf8cac5cf56c283bc->enter($__internal_90d8cb8cec7a958257bcaf93d4de8c4f00764405441aeebaf8cac5cf56c283bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e37dd775b84500e231d8dfdf3a6a41f4d8f2eacf7eecb8fc0dd2a8ff4121a422->leave($__internal_e37dd775b84500e231d8dfdf3a6a41f4d8f2eacf7eecb8fc0dd2a8ff4121a422_prof);

        
        $__internal_90d8cb8cec7a958257bcaf93d4de8c4f00764405441aeebaf8cac5cf56c283bc->leave($__internal_90d8cb8cec7a958257bcaf93d4de8c4f00764405441aeebaf8cac5cf56c283bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
