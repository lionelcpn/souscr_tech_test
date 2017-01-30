<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_e7ed1c35ff3d261b376a25b14585a16f1aaddea7cf9d1e9bc6e1f4adb56e594b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ed1c35ff3d261b376a25b14585a16f1aaddea7cf9d1e9bc6e1f4adb56e594b->enter($__internal_e7ed1c35ff3d261b376a25b14585a16f1aaddea7cf9d1e9bc6e1f4adb56e594b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_29f97364cb574693f956e583c6cb833bfab769eba7bb5835ea7a5a627499a26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f97364cb574693f956e583c6cb833bfab769eba7bb5835ea7a5a627499a26a->enter($__internal_29f97364cb574693f956e583c6cb833bfab769eba7bb5835ea7a5a627499a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7ed1c35ff3d261b376a25b14585a16f1aaddea7cf9d1e9bc6e1f4adb56e594b->leave($__internal_e7ed1c35ff3d261b376a25b14585a16f1aaddea7cf9d1e9bc6e1f4adb56e594b_prof);

        
        $__internal_29f97364cb574693f956e583c6cb833bfab769eba7bb5835ea7a5a627499a26a->leave($__internal_29f97364cb574693f956e583c6cb833bfab769eba7bb5835ea7a5a627499a26a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
