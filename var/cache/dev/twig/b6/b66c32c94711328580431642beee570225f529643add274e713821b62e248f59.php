<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4002810325d4562e06062f9b1adb5c00f77191955a936d79b211c327b1afcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4002810325d4562e06062f9b1adb5c00f77191955a936d79b211c327b1afcf8->enter($__internal_a4002810325d4562e06062f9b1adb5c00f77191955a936d79b211c327b1afcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_440b10f986a3696ee3b22e5b033ffa7a953ff6de4fce2264610e025ec28db464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440b10f986a3696ee3b22e5b033ffa7a953ff6de4fce2264610e025ec28db464->enter($__internal_440b10f986a3696ee3b22e5b033ffa7a953ff6de4fce2264610e025ec28db464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4002810325d4562e06062f9b1adb5c00f77191955a936d79b211c327b1afcf8->leave($__internal_a4002810325d4562e06062f9b1adb5c00f77191955a936d79b211c327b1afcf8_prof);

        
        $__internal_440b10f986a3696ee3b22e5b033ffa7a953ff6de4fce2264610e025ec28db464->leave($__internal_440b10f986a3696ee3b22e5b033ffa7a953ff6de4fce2264610e025ec28db464_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb083cf4552e5e97da5b1f44d125208b18eedfbbc37786b242b6bec3000d306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb083cf4552e5e97da5b1f44d125208b18eedfbbc37786b242b6bec3000d306b->enter($__internal_cb083cf4552e5e97da5b1f44d125208b18eedfbbc37786b242b6bec3000d306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80728ca6ae0def02559d5bbbe7853412e1a9f1004b16c3fd1a6e86e01ddf6210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80728ca6ae0def02559d5bbbe7853412e1a9f1004b16c3fd1a6e86e01ddf6210->enter($__internal_80728ca6ae0def02559d5bbbe7853412e1a9f1004b16c3fd1a6e86e01ddf6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80728ca6ae0def02559d5bbbe7853412e1a9f1004b16c3fd1a6e86e01ddf6210->leave($__internal_80728ca6ae0def02559d5bbbe7853412e1a9f1004b16c3fd1a6e86e01ddf6210_prof);

        
        $__internal_cb083cf4552e5e97da5b1f44d125208b18eedfbbc37786b242b6bec3000d306b->leave($__internal_cb083cf4552e5e97da5b1f44d125208b18eedfbbc37786b242b6bec3000d306b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_447da9c34ec35b2eb5c47e7b195919906cccd3983d3153ad866222aef32f28a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447da9c34ec35b2eb5c47e7b195919906cccd3983d3153ad866222aef32f28a5->enter($__internal_447da9c34ec35b2eb5c47e7b195919906cccd3983d3153ad866222aef32f28a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_327334c2c33fceb47c77ed933344348a8951d8f1ce065ca611edf80a2807e671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327334c2c33fceb47c77ed933344348a8951d8f1ce065ca611edf80a2807e671->enter($__internal_327334c2c33fceb47c77ed933344348a8951d8f1ce065ca611edf80a2807e671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_327334c2c33fceb47c77ed933344348a8951d8f1ce065ca611edf80a2807e671->leave($__internal_327334c2c33fceb47c77ed933344348a8951d8f1ce065ca611edf80a2807e671_prof);

        
        $__internal_447da9c34ec35b2eb5c47e7b195919906cccd3983d3153ad866222aef32f28a5->leave($__internal_447da9c34ec35b2eb5c47e7b195919906cccd3983d3153ad866222aef32f28a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa0287097abd1e7f31a239e165db13f1d899f38a938a28c6a07dd78ec8e8e822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0287097abd1e7f31a239e165db13f1d899f38a938a28c6a07dd78ec8e8e822->enter($__internal_fa0287097abd1e7f31a239e165db13f1d899f38a938a28c6a07dd78ec8e8e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83afd2f89f553adca043dc41784d20e0602564fd3843b19a19143bd1fecdd750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83afd2f89f553adca043dc41784d20e0602564fd3843b19a19143bd1fecdd750->enter($__internal_83afd2f89f553adca043dc41784d20e0602564fd3843b19a19143bd1fecdd750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83afd2f89f553adca043dc41784d20e0602564fd3843b19a19143bd1fecdd750->leave($__internal_83afd2f89f553adca043dc41784d20e0602564fd3843b19a19143bd1fecdd750_prof);

        
        $__internal_fa0287097abd1e7f31a239e165db13f1d899f38a938a28c6a07dd78ec8e8e822->leave($__internal_fa0287097abd1e7f31a239e165db13f1d899f38a938a28c6a07dd78ec8e8e822_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
