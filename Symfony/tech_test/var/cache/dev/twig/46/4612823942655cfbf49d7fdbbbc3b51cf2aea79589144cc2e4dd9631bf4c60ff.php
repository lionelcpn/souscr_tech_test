<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_ed1b037b6ab781e2edc4baec215e910384afbf4cffb01e431c872390301941ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1b037b6ab781e2edc4baec215e910384afbf4cffb01e431c872390301941ce->enter($__internal_ed1b037b6ab781e2edc4baec215e910384afbf4cffb01e431c872390301941ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3d7f943a6da85eafedf07f43179af1e5bda1cbd1fcf75a95d51b9059a4f1c49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7f943a6da85eafedf07f43179af1e5bda1cbd1fcf75a95d51b9059a4f1c49d->enter($__internal_3d7f943a6da85eafedf07f43179af1e5bda1cbd1fcf75a95d51b9059a4f1c49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ed1b037b6ab781e2edc4baec215e910384afbf4cffb01e431c872390301941ce->leave($__internal_ed1b037b6ab781e2edc4baec215e910384afbf4cffb01e431c872390301941ce_prof);

        
        $__internal_3d7f943a6da85eafedf07f43179af1e5bda1cbd1fcf75a95d51b9059a4f1c49d->leave($__internal_3d7f943a6da85eafedf07f43179af1e5bda1cbd1fcf75a95d51b9059a4f1c49d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
