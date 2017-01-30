<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_ee4dcd1f4b3554c9c4db6ef058e21808e1de30636ceb904241c4b2a12cdc37b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4dcd1f4b3554c9c4db6ef058e21808e1de30636ceb904241c4b2a12cdc37b6->enter($__internal_ee4dcd1f4b3554c9c4db6ef058e21808e1de30636ceb904241c4b2a12cdc37b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1f9bc7713d3a83999467786a70b6cb13a867321491fb0d7b3f152a87b22c120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9bc7713d3a83999467786a70b6cb13a867321491fb0d7b3f152a87b22c120f->enter($__internal_1f9bc7713d3a83999467786a70b6cb13a867321491fb0d7b3f152a87b22c120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ee4dcd1f4b3554c9c4db6ef058e21808e1de30636ceb904241c4b2a12cdc37b6->leave($__internal_ee4dcd1f4b3554c9c4db6ef058e21808e1de30636ceb904241c4b2a12cdc37b6_prof);

        
        $__internal_1f9bc7713d3a83999467786a70b6cb13a867321491fb0d7b3f152a87b22c120f->leave($__internal_1f9bc7713d3a83999467786a70b6cb13a867321491fb0d7b3f152a87b22c120f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
