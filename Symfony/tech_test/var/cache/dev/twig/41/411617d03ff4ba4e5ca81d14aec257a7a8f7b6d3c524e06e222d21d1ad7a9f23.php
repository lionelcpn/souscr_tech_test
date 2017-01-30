<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b4a29dee895eb44c4fc4c769a9bf6a6cd17510742296424531ade6a971944754 extends Twig_Template
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
        $__internal_ab7afe174bdf1b838463cced55cdc7704f6bff522c92be172d8c278ac77012cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7afe174bdf1b838463cced55cdc7704f6bff522c92be172d8c278ac77012cc->enter($__internal_ab7afe174bdf1b838463cced55cdc7704f6bff522c92be172d8c278ac77012cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8c3bdcc4a0bb8468e2e152515378cafe590399217a8907f6db355024a4ed7bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3bdcc4a0bb8468e2e152515378cafe590399217a8907f6db355024a4ed7bd3->enter($__internal_8c3bdcc4a0bb8468e2e152515378cafe590399217a8907f6db355024a4ed7bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ab7afe174bdf1b838463cced55cdc7704f6bff522c92be172d8c278ac77012cc->leave($__internal_ab7afe174bdf1b838463cced55cdc7704f6bff522c92be172d8c278ac77012cc_prof);

        
        $__internal_8c3bdcc4a0bb8468e2e152515378cafe590399217a8907f6db355024a4ed7bd3->leave($__internal_8c3bdcc4a0bb8468e2e152515378cafe590399217a8907f6db355024a4ed7bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
