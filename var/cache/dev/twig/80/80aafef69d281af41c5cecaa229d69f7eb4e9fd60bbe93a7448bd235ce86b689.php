<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
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
        $__internal_de84d98cae0043bc307b0c4551d36725ff03ad33753c32ae26e9e16934249f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de84d98cae0043bc307b0c4551d36725ff03ad33753c32ae26e9e16934249f59->enter($__internal_de84d98cae0043bc307b0c4551d36725ff03ad33753c32ae26e9e16934249f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f607470bd83e29e7f591314645b4717546e5b0c45cd414d358b83ae8941c80cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f607470bd83e29e7f591314645b4717546e5b0c45cd414d358b83ae8941c80cc->enter($__internal_f607470bd83e29e7f591314645b4717546e5b0c45cd414d358b83ae8941c80cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de84d98cae0043bc307b0c4551d36725ff03ad33753c32ae26e9e16934249f59->leave($__internal_de84d98cae0043bc307b0c4551d36725ff03ad33753c32ae26e9e16934249f59_prof);

        
        $__internal_f607470bd83e29e7f591314645b4717546e5b0c45cd414d358b83ae8941c80cc->leave($__internal_f607470bd83e29e7f591314645b4717546e5b0c45cd414d358b83ae8941c80cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_992cc48fe3d8ae48fec292a8c6d7a0fa219eb228d1d2b5fc198c6a038d8c41f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992cc48fe3d8ae48fec292a8c6d7a0fa219eb228d1d2b5fc198c6a038d8c41f2->enter($__internal_992cc48fe3d8ae48fec292a8c6d7a0fa219eb228d1d2b5fc198c6a038d8c41f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23dfcfaccc7cd0384399ec62c77997ede27a6a10bc519891802204bd807852c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dfcfaccc7cd0384399ec62c77997ede27a6a10bc519891802204bd807852c0->enter($__internal_23dfcfaccc7cd0384399ec62c77997ede27a6a10bc519891802204bd807852c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_23dfcfaccc7cd0384399ec62c77997ede27a6a10bc519891802204bd807852c0->leave($__internal_23dfcfaccc7cd0384399ec62c77997ede27a6a10bc519891802204bd807852c0_prof);

        
        $__internal_992cc48fe3d8ae48fec292a8c6d7a0fa219eb228d1d2b5fc198c6a038d8c41f2->leave($__internal_992cc48fe3d8ae48fec292a8c6d7a0fa219eb228d1d2b5fc198c6a038d8c41f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b756d3d13c18296037327d2dc2d8fb9c62b9aaec663932bc8f6260282c1000fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b756d3d13c18296037327d2dc2d8fb9c62b9aaec663932bc8f6260282c1000fb->enter($__internal_b756d3d13c18296037327d2dc2d8fb9c62b9aaec663932bc8f6260282c1000fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4744d54524f67945f085fe95ad208f00ab0486b32c1cbe277819017ad4cd3af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4744d54524f67945f085fe95ad208f00ab0486b32c1cbe277819017ad4cd3af1->enter($__internal_4744d54524f67945f085fe95ad208f00ab0486b32c1cbe277819017ad4cd3af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4744d54524f67945f085fe95ad208f00ab0486b32c1cbe277819017ad4cd3af1->leave($__internal_4744d54524f67945f085fe95ad208f00ab0486b32c1cbe277819017ad4cd3af1_prof);

        
        $__internal_b756d3d13c18296037327d2dc2d8fb9c62b9aaec663932bc8f6260282c1000fb->leave($__internal_b756d3d13c18296037327d2dc2d8fb9c62b9aaec663932bc8f6260282c1000fb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3df4626ea75ca69cddcdb4cdf029646730c19c35cc21161bfaa413467a9246a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3df4626ea75ca69cddcdb4cdf029646730c19c35cc21161bfaa413467a9246a->enter($__internal_d3df4626ea75ca69cddcdb4cdf029646730c19c35cc21161bfaa413467a9246a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80ecca27cc35b25446e91a267b9a4e8b13a4e0489897ad4830bbfd3215305662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ecca27cc35b25446e91a267b9a4e8b13a4e0489897ad4830bbfd3215305662->enter($__internal_80ecca27cc35b25446e91a267b9a4e8b13a4e0489897ad4830bbfd3215305662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_80ecca27cc35b25446e91a267b9a4e8b13a4e0489897ad4830bbfd3215305662->leave($__internal_80ecca27cc35b25446e91a267b9a4e8b13a4e0489897ad4830bbfd3215305662_prof);

        
        $__internal_d3df4626ea75ca69cddcdb4cdf029646730c19c35cc21161bfaa413467a9246a->leave($__internal_d3df4626ea75ca69cddcdb4cdf029646730c19c35cc21161bfaa413467a9246a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
