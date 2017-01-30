<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_265affad53a97cc77d88566b267d289b6e731d430fc506783ea763af0d3f98e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265affad53a97cc77d88566b267d289b6e731d430fc506783ea763af0d3f98e2->enter($__internal_265affad53a97cc77d88566b267d289b6e731d430fc506783ea763af0d3f98e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_daea696412d2fb2924ea185f39641acaef5a437d6f6600617e4ffa8b6d87e1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daea696412d2fb2924ea185f39641acaef5a437d6f6600617e4ffa8b6d87e1cb->enter($__internal_daea696412d2fb2924ea185f39641acaef5a437d6f6600617e4ffa8b6d87e1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_265affad53a97cc77d88566b267d289b6e731d430fc506783ea763af0d3f98e2->leave($__internal_265affad53a97cc77d88566b267d289b6e731d430fc506783ea763af0d3f98e2_prof);

        
        $__internal_daea696412d2fb2924ea185f39641acaef5a437d6f6600617e4ffa8b6d87e1cb->leave($__internal_daea696412d2fb2924ea185f39641acaef5a437d6f6600617e4ffa8b6d87e1cb_prof);

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
", "@Framework/Form/form_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
