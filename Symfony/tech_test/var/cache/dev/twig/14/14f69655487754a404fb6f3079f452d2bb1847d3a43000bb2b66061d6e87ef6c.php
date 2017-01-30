<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a623f963634d5f8026b1315c9a7acb1ea64121ba36d60bf53b59bb08b772402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a623f963634d5f8026b1315c9a7acb1ea64121ba36d60bf53b59bb08b772402->enter($__internal_1a623f963634d5f8026b1315c9a7acb1ea64121ba36d60bf53b59bb08b772402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_93ba3a1f7c75d00455151e7c8618c4eb41e7e6e990c14048895eb1e91dccb6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ba3a1f7c75d00455151e7c8618c4eb41e7e6e990c14048895eb1e91dccb6e9->enter($__internal_93ba3a1f7c75d00455151e7c8618c4eb41e7e6e990c14048895eb1e91dccb6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a623f963634d5f8026b1315c9a7acb1ea64121ba36d60bf53b59bb08b772402->leave($__internal_1a623f963634d5f8026b1315c9a7acb1ea64121ba36d60bf53b59bb08b772402_prof);

        
        $__internal_93ba3a1f7c75d00455151e7c8618c4eb41e7e6e990c14048895eb1e91dccb6e9->leave($__internal_93ba3a1f7c75d00455151e7c8618c4eb41e7e6e990c14048895eb1e91dccb6e9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_de4ae1fbbabf11ecbb4088c49f81ac1e04c87921c8fc5c142de201d3ec7b400f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4ae1fbbabf11ecbb4088c49f81ac1e04c87921c8fc5c142de201d3ec7b400f->enter($__internal_de4ae1fbbabf11ecbb4088c49f81ac1e04c87921c8fc5c142de201d3ec7b400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7637989d3c5ae6b7d397724ffe77ee1e00ead301aa543b8c49fea74332cd14b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7637989d3c5ae6b7d397724ffe77ee1e00ead301aa543b8c49fea74332cd14b4->enter($__internal_7637989d3c5ae6b7d397724ffe77ee1e00ead301aa543b8c49fea74332cd14b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7637989d3c5ae6b7d397724ffe77ee1e00ead301aa543b8c49fea74332cd14b4->leave($__internal_7637989d3c5ae6b7d397724ffe77ee1e00ead301aa543b8c49fea74332cd14b4_prof);

        
        $__internal_de4ae1fbbabf11ecbb4088c49f81ac1e04c87921c8fc5c142de201d3ec7b400f->leave($__internal_de4ae1fbbabf11ecbb4088c49f81ac1e04c87921c8fc5c142de201d3ec7b400f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53c3edb75c71a94de01135843965108685f0ba1f4b3a2bf1c113ac4362bcbef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c3edb75c71a94de01135843965108685f0ba1f4b3a2bf1c113ac4362bcbef2->enter($__internal_53c3edb75c71a94de01135843965108685f0ba1f4b3a2bf1c113ac4362bcbef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74e504b84d5da2a4527b2c0b4bc7d691de8f04fb7e292a55858db46967c311cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e504b84d5da2a4527b2c0b4bc7d691de8f04fb7e292a55858db46967c311cd->enter($__internal_74e504b84d5da2a4527b2c0b4bc7d691de8f04fb7e292a55858db46967c311cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_74e504b84d5da2a4527b2c0b4bc7d691de8f04fb7e292a55858db46967c311cd->leave($__internal_74e504b84d5da2a4527b2c0b4bc7d691de8f04fb7e292a55858db46967c311cd_prof);

        
        $__internal_53c3edb75c71a94de01135843965108685f0ba1f4b3a2bf1c113ac4362bcbef2->leave($__internal_53c3edb75c71a94de01135843965108685f0ba1f4b3a2bf1c113ac4362bcbef2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
