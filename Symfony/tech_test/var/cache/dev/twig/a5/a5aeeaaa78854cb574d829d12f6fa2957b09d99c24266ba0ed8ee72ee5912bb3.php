<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_f1e169678e5cff718ebe57b2fc88fa831dbf369479f55e3d39a8caeb6b194f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e169678e5cff718ebe57b2fc88fa831dbf369479f55e3d39a8caeb6b194f92->enter($__internal_f1e169678e5cff718ebe57b2fc88fa831dbf369479f55e3d39a8caeb6b194f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b4d44f3d272cd653756e395d05881f3d8750675d01a50ba86e0a5259ce593e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d44f3d272cd653756e395d05881f3d8750675d01a50ba86e0a5259ce593e1b->enter($__internal_b4d44f3d272cd653756e395d05881f3d8750675d01a50ba86e0a5259ce593e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f1e169678e5cff718ebe57b2fc88fa831dbf369479f55e3d39a8caeb6b194f92->leave($__internal_f1e169678e5cff718ebe57b2fc88fa831dbf369479f55e3d39a8caeb6b194f92_prof);

        
        $__internal_b4d44f3d272cd653756e395d05881f3d8750675d01a50ba86e0a5259ce593e1b->leave($__internal_b4d44f3d272cd653756e395d05881f3d8750675d01a50ba86e0a5259ce593e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
