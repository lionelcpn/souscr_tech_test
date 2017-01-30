<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8432f4ab7bfa7e4beef8becc940c8f3fdd4c1891d5789a3801d8ffe97026435c extends Twig_Template
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
        $__internal_3267521db63da2350c4bb69ec71181cb1e60d313fae28ce3d2c4f3312df644d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3267521db63da2350c4bb69ec71181cb1e60d313fae28ce3d2c4f3312df644d3->enter($__internal_3267521db63da2350c4bb69ec71181cb1e60d313fae28ce3d2c4f3312df644d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9dfbcd454a129635aea5d8439a3678030c54bd7ff143f4d4b9a7f73869f0f565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfbcd454a129635aea5d8439a3678030c54bd7ff143f4d4b9a7f73869f0f565->enter($__internal_9dfbcd454a129635aea5d8439a3678030c54bd7ff143f4d4b9a7f73869f0f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3267521db63da2350c4bb69ec71181cb1e60d313fae28ce3d2c4f3312df644d3->leave($__internal_3267521db63da2350c4bb69ec71181cb1e60d313fae28ce3d2c4f3312df644d3_prof);

        
        $__internal_9dfbcd454a129635aea5d8439a3678030c54bd7ff143f4d4b9a7f73869f0f565->leave($__internal_9dfbcd454a129635aea5d8439a3678030c54bd7ff143f4d4b9a7f73869f0f565_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
