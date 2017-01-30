<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_2d26891cbee8cc7dd37863e5235f1b7c6e25ca0ddd9b9e096f6bdc2fa782abfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d26891cbee8cc7dd37863e5235f1b7c6e25ca0ddd9b9e096f6bdc2fa782abfe->enter($__internal_2d26891cbee8cc7dd37863e5235f1b7c6e25ca0ddd9b9e096f6bdc2fa782abfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c0d4f89bcf03268d42f9ff9bb55c8d0fb4a5d931dee02d4192d725d5a4c6871e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d4f89bcf03268d42f9ff9bb55c8d0fb4a5d931dee02d4192d725d5a4c6871e->enter($__internal_c0d4f89bcf03268d42f9ff9bb55c8d0fb4a5d931dee02d4192d725d5a4c6871e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d26891cbee8cc7dd37863e5235f1b7c6e25ca0ddd9b9e096f6bdc2fa782abfe->leave($__internal_2d26891cbee8cc7dd37863e5235f1b7c6e25ca0ddd9b9e096f6bdc2fa782abfe_prof);

        
        $__internal_c0d4f89bcf03268d42f9ff9bb55c8d0fb4a5d931dee02d4192d725d5a4c6871e->leave($__internal_c0d4f89bcf03268d42f9ff9bb55c8d0fb4a5d931dee02d4192d725d5a4c6871e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
