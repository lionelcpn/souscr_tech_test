<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4fb7cc18625e4a162a8e8b53b07c35b37a1eeda398e94458abbc14c92bada940 extends Twig_Template
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
        $__internal_be8c7f8da0adcb9a00a528e2d9a9e8d7cdf067b7c599a61c9018c3a4786c5709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8c7f8da0adcb9a00a528e2d9a9e8d7cdf067b7c599a61c9018c3a4786c5709->enter($__internal_be8c7f8da0adcb9a00a528e2d9a9e8d7cdf067b7c599a61c9018c3a4786c5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fab5acad7ee8aee579ced4ad04051c52ff33c7ca3a00f0f44dcdc170b03f0638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab5acad7ee8aee579ced4ad04051c52ff33c7ca3a00f0f44dcdc170b03f0638->enter($__internal_fab5acad7ee8aee579ced4ad04051c52ff33c7ca3a00f0f44dcdc170b03f0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_be8c7f8da0adcb9a00a528e2d9a9e8d7cdf067b7c599a61c9018c3a4786c5709->leave($__internal_be8c7f8da0adcb9a00a528e2d9a9e8d7cdf067b7c599a61c9018c3a4786c5709_prof);

        
        $__internal_fab5acad7ee8aee579ced4ad04051c52ff33c7ca3a00f0f44dcdc170b03f0638->leave($__internal_fab5acad7ee8aee579ced4ad04051c52ff33c7ca3a00f0f44dcdc170b03f0638_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
