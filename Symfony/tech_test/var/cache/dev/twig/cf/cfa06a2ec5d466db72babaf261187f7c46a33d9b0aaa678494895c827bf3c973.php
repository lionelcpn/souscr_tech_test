<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_95e4f1b57397c07fa02fb65450c9f807153e06a60dba0ac9179853c241bfb429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e4f1b57397c07fa02fb65450c9f807153e06a60dba0ac9179853c241bfb429->enter($__internal_95e4f1b57397c07fa02fb65450c9f807153e06a60dba0ac9179853c241bfb429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9d1015be944ec17a123113075e24c3b2a7eae151b0b471600f663360fe60ce00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1015be944ec17a123113075e24c3b2a7eae151b0b471600f663360fe60ce00->enter($__internal_9d1015be944ec17a123113075e24c3b2a7eae151b0b471600f663360fe60ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_95e4f1b57397c07fa02fb65450c9f807153e06a60dba0ac9179853c241bfb429->leave($__internal_95e4f1b57397c07fa02fb65450c9f807153e06a60dba0ac9179853c241bfb429_prof);

        
        $__internal_9d1015be944ec17a123113075e24c3b2a7eae151b0b471600f663360fe60ce00->leave($__internal_9d1015be944ec17a123113075e24c3b2a7eae151b0b471600f663360fe60ce00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
