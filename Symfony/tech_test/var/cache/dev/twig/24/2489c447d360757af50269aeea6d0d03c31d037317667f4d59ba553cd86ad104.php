<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_b53061f1414d6c1fd7c393769889442bb7f64f59fac5b59a89bb463b316d46f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53061f1414d6c1fd7c393769889442bb7f64f59fac5b59a89bb463b316d46f5->enter($__internal_b53061f1414d6c1fd7c393769889442bb7f64f59fac5b59a89bb463b316d46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_edce84297de96678440f294f052dbd3fb6eaed51d98f37db331a7c65c78897f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edce84297de96678440f294f052dbd3fb6eaed51d98f37db331a7c65c78897f0->enter($__internal_edce84297de96678440f294f052dbd3fb6eaed51d98f37db331a7c65c78897f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b53061f1414d6c1fd7c393769889442bb7f64f59fac5b59a89bb463b316d46f5->leave($__internal_b53061f1414d6c1fd7c393769889442bb7f64f59fac5b59a89bb463b316d46f5_prof);

        
        $__internal_edce84297de96678440f294f052dbd3fb6eaed51d98f37db331a7c65c78897f0->leave($__internal_edce84297de96678440f294f052dbd3fb6eaed51d98f37db331a7c65c78897f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
