<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_574e281efbbfa9068f0b354f6f70a620d52db8543d9eec1da6094ef89d5d810e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574e281efbbfa9068f0b354f6f70a620d52db8543d9eec1da6094ef89d5d810e->enter($__internal_574e281efbbfa9068f0b354f6f70a620d52db8543d9eec1da6094ef89d5d810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b4addb8c56489bceba19fb53332f39649eae1b0df7f7a189d6d10820b77d28dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4addb8c56489bceba19fb53332f39649eae1b0df7f7a189d6d10820b77d28dd->enter($__internal_b4addb8c56489bceba19fb53332f39649eae1b0df7f7a189d6d10820b77d28dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_574e281efbbfa9068f0b354f6f70a620d52db8543d9eec1da6094ef89d5d810e->leave($__internal_574e281efbbfa9068f0b354f6f70a620d52db8543d9eec1da6094ef89d5d810e_prof);

        
        $__internal_b4addb8c56489bceba19fb53332f39649eae1b0df7f7a189d6d10820b77d28dd->leave($__internal_b4addb8c56489bceba19fb53332f39649eae1b0df7f7a189d6d10820b77d28dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
