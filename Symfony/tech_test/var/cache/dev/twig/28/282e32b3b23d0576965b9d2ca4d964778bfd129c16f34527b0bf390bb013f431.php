<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_231ccc60b28c8fe6b4a4abccbbb76838642cda8211276a358d5586d8c5285b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231ccc60b28c8fe6b4a4abccbbb76838642cda8211276a358d5586d8c5285b25->enter($__internal_231ccc60b28c8fe6b4a4abccbbb76838642cda8211276a358d5586d8c5285b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_becb7916140c6209cdc938d80b0dd087a8313742b87b97d6ea1721859fa1e68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becb7916140c6209cdc938d80b0dd087a8313742b87b97d6ea1721859fa1e68e->enter($__internal_becb7916140c6209cdc938d80b0dd087a8313742b87b97d6ea1721859fa1e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231ccc60b28c8fe6b4a4abccbbb76838642cda8211276a358d5586d8c5285b25->leave($__internal_231ccc60b28c8fe6b4a4abccbbb76838642cda8211276a358d5586d8c5285b25_prof);

        
        $__internal_becb7916140c6209cdc938d80b0dd087a8313742b87b97d6ea1721859fa1e68e->leave($__internal_becb7916140c6209cdc938d80b0dd087a8313742b87b97d6ea1721859fa1e68e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5abe056bb420b80d2ba94c19f0c7424080908ce2e2425eef8303aa3ed66452c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5abe056bb420b80d2ba94c19f0c7424080908ce2e2425eef8303aa3ed66452c->enter($__internal_d5abe056bb420b80d2ba94c19f0c7424080908ce2e2425eef8303aa3ed66452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_699834c2a494b480ca068deec6a1dd372c4f77a6037ac13e3c5f98c1fdfd54f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699834c2a494b480ca068deec6a1dd372c4f77a6037ac13e3c5f98c1fdfd54f3->enter($__internal_699834c2a494b480ca068deec6a1dd372c4f77a6037ac13e3c5f98c1fdfd54f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_699834c2a494b480ca068deec6a1dd372c4f77a6037ac13e3c5f98c1fdfd54f3->leave($__internal_699834c2a494b480ca068deec6a1dd372c4f77a6037ac13e3c5f98c1fdfd54f3_prof);

        
        $__internal_d5abe056bb420b80d2ba94c19f0c7424080908ce2e2425eef8303aa3ed66452c->leave($__internal_d5abe056bb420b80d2ba94c19f0c7424080908ce2e2425eef8303aa3ed66452c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_897902db434c36435ac8ed9b6b9fdd647543f0b1776fe0e1b885dce20cbdb2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897902db434c36435ac8ed9b6b9fdd647543f0b1776fe0e1b885dce20cbdb2a7->enter($__internal_897902db434c36435ac8ed9b6b9fdd647543f0b1776fe0e1b885dce20cbdb2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_569ed7e4786dbf3783600f66c4e433be6d79ee9b620aa02c809455f933c645f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569ed7e4786dbf3783600f66c4e433be6d79ee9b620aa02c809455f933c645f5->enter($__internal_569ed7e4786dbf3783600f66c4e433be6d79ee9b620aa02c809455f933c645f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_569ed7e4786dbf3783600f66c4e433be6d79ee9b620aa02c809455f933c645f5->leave($__internal_569ed7e4786dbf3783600f66c4e433be6d79ee9b620aa02c809455f933c645f5_prof);

        
        $__internal_897902db434c36435ac8ed9b6b9fdd647543f0b1776fe0e1b885dce20cbdb2a7->leave($__internal_897902db434c36435ac8ed9b6b9fdd647543f0b1776fe0e1b885dce20cbdb2a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f7891e974aca0425bea2eb22ce48edd0caf7eb4b6b93ea89bf629aa764fe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f7891e974aca0425bea2eb22ce48edd0caf7eb4b6b93ea89bf629aa764fe6f->enter($__internal_00f7891e974aca0425bea2eb22ce48edd0caf7eb4b6b93ea89bf629aa764fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3b0fb58e19388ca9fd8a0f70ff207a83053abb32af2ec16f006c4522082f201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b0fb58e19388ca9fd8a0f70ff207a83053abb32af2ec16f006c4522082f201->enter($__internal_b3b0fb58e19388ca9fd8a0f70ff207a83053abb32af2ec16f006c4522082f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b3b0fb58e19388ca9fd8a0f70ff207a83053abb32af2ec16f006c4522082f201->leave($__internal_b3b0fb58e19388ca9fd8a0f70ff207a83053abb32af2ec16f006c4522082f201_prof);

        
        $__internal_00f7891e974aca0425bea2eb22ce48edd0caf7eb4b6b93ea89bf629aa764fe6f->leave($__internal_00f7891e974aca0425bea2eb22ce48edd0caf7eb4b6b93ea89bf629aa764fe6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/lionel/Projets/souscr_tech_test/Symfony/tech_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
