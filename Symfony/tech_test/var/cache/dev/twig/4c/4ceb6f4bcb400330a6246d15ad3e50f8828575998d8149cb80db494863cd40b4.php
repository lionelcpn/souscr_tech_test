<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_2221a944b6dfd8ee0a0ce71a74aa1abdea4d91d18e0f30ba43e8ca7e9db98f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2221a944b6dfd8ee0a0ce71a74aa1abdea4d91d18e0f30ba43e8ca7e9db98f5f->enter($__internal_2221a944b6dfd8ee0a0ce71a74aa1abdea4d91d18e0f30ba43e8ca7e9db98f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7ea92c2d0c3c40155705dd9b2b2b596d9fa467a65718b9aec229127a98d1d6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea92c2d0c3c40155705dd9b2b2b596d9fa467a65718b9aec229127a98d1d6e3->enter($__internal_7ea92c2d0c3c40155705dd9b2b2b596d9fa467a65718b9aec229127a98d1d6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2221a944b6dfd8ee0a0ce71a74aa1abdea4d91d18e0f30ba43e8ca7e9db98f5f->leave($__internal_2221a944b6dfd8ee0a0ce71a74aa1abdea4d91d18e0f30ba43e8ca7e9db98f5f_prof);

        
        $__internal_7ea92c2d0c3c40155705dd9b2b2b596d9fa467a65718b9aec229127a98d1d6e3->leave($__internal_7ea92c2d0c3c40155705dd9b2b2b596d9fa467a65718b9aec229127a98d1d6e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
