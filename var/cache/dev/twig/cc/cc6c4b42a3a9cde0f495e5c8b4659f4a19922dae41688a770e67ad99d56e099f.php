<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6c8f98ad5d7b90883be1077a30832d9fcc474350e73672138617f67dda13e08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a36ee64116eeb85847ffaeed8e410c0e1255968b7f1909ca50754a22bfee038f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36ee64116eeb85847ffaeed8e410c0e1255968b7f1909ca50754a22bfee038f->enter($__internal_a36ee64116eeb85847ffaeed8e410c0e1255968b7f1909ca50754a22bfee038f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_94c2fa2c669090ec99aca115ed9ce16599ff503b06c964f06fa81ed122f23ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c2fa2c669090ec99aca115ed9ce16599ff503b06c964f06fa81ed122f23ce6->enter($__internal_94c2fa2c669090ec99aca115ed9ce16599ff503b06c964f06fa81ed122f23ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36ee64116eeb85847ffaeed8e410c0e1255968b7f1909ca50754a22bfee038f->leave($__internal_a36ee64116eeb85847ffaeed8e410c0e1255968b7f1909ca50754a22bfee038f_prof);

        
        $__internal_94c2fa2c669090ec99aca115ed9ce16599ff503b06c964f06fa81ed122f23ce6->leave($__internal_94c2fa2c669090ec99aca115ed9ce16599ff503b06c964f06fa81ed122f23ce6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4345a3a4399852531dc0d4008841c800c43066efabe0fafdb55809d147328f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4345a3a4399852531dc0d4008841c800c43066efabe0fafdb55809d147328f7b->enter($__internal_4345a3a4399852531dc0d4008841c800c43066efabe0fafdb55809d147328f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_166e66486abe623037c716d27c16f6e433f6864c003277460d9de41ea686a58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166e66486abe623037c716d27c16f6e433f6864c003277460d9de41ea686a58d->enter($__internal_166e66486abe623037c716d27c16f6e433f6864c003277460d9de41ea686a58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_166e66486abe623037c716d27c16f6e433f6864c003277460d9de41ea686a58d->leave($__internal_166e66486abe623037c716d27c16f6e433f6864c003277460d9de41ea686a58d_prof);

        
        $__internal_4345a3a4399852531dc0d4008841c800c43066efabe0fafdb55809d147328f7b->leave($__internal_4345a3a4399852531dc0d4008841c800c43066efabe0fafdb55809d147328f7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6874eeff60de89df7dfe7a04580ec1d71dd5f26f413e72f330684d066cc5e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6874eeff60de89df7dfe7a04580ec1d71dd5f26f413e72f330684d066cc5e7d->enter($__internal_f6874eeff60de89df7dfe7a04580ec1d71dd5f26f413e72f330684d066cc5e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed5bb4dc1598358ae5ff4f0b74a64f5ca2f36dcc0490493823f47545c16408ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5bb4dc1598358ae5ff4f0b74a64f5ca2f36dcc0490493823f47545c16408ac->enter($__internal_ed5bb4dc1598358ae5ff4f0b74a64f5ca2f36dcc0490493823f47545c16408ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ed5bb4dc1598358ae5ff4f0b74a64f5ca2f36dcc0490493823f47545c16408ac->leave($__internal_ed5bb4dc1598358ae5ff4f0b74a64f5ca2f36dcc0490493823f47545c16408ac_prof);

        
        $__internal_f6874eeff60de89df7dfe7a04580ec1d71dd5f26f413e72f330684d066cc5e7d->leave($__internal_f6874eeff60de89df7dfe7a04580ec1d71dd5f26f413e72f330684d066cc5e7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
