<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_9a0535ad8ea0d227084202383af6e97acc5496d48ab8432cc261e5cc988fe3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0535ad8ea0d227084202383af6e97acc5496d48ab8432cc261e5cc988fe3bc->enter($__internal_9a0535ad8ea0d227084202383af6e97acc5496d48ab8432cc261e5cc988fe3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ca0f0c61278c9071053911619c910e2e6e24b93d86fb79303ed39ce8bba80416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0f0c61278c9071053911619c910e2e6e24b93d86fb79303ed39ce8bba80416->enter($__internal_ca0f0c61278c9071053911619c910e2e6e24b93d86fb79303ed39ce8bba80416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9a0535ad8ea0d227084202383af6e97acc5496d48ab8432cc261e5cc988fe3bc->leave($__internal_9a0535ad8ea0d227084202383af6e97acc5496d48ab8432cc261e5cc988fe3bc_prof);

        
        $__internal_ca0f0c61278c9071053911619c910e2e6e24b93d86fb79303ed39ce8bba80416->leave($__internal_ca0f0c61278c9071053911619c910e2e6e24b93d86fb79303ed39ce8bba80416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
