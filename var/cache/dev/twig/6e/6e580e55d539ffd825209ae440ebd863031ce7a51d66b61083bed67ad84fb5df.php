<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c22d97982730d0d4058b9bea1bb74a2f52595da1deb791b793bc1f9f9d92daa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e63aaf0818a8281f34078c708e3e9a6f61f799233f139461e17605c95c9e0ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63aaf0818a8281f34078c708e3e9a6f61f799233f139461e17605c95c9e0ada->enter($__internal_e63aaf0818a8281f34078c708e3e9a6f61f799233f139461e17605c95c9e0ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_af7f42e169d5766b1784ef2e995622c16de27d1aa742ed6b180e904bce1319a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7f42e169d5766b1784ef2e995622c16de27d1aa742ed6b180e904bce1319a2->enter($__internal_af7f42e169d5766b1784ef2e995622c16de27d1aa742ed6b180e904bce1319a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63aaf0818a8281f34078c708e3e9a6f61f799233f139461e17605c95c9e0ada->leave($__internal_e63aaf0818a8281f34078c708e3e9a6f61f799233f139461e17605c95c9e0ada_prof);

        
        $__internal_af7f42e169d5766b1784ef2e995622c16de27d1aa742ed6b180e904bce1319a2->leave($__internal_af7f42e169d5766b1784ef2e995622c16de27d1aa742ed6b180e904bce1319a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ad793bb6665d67ac2bd9ae06a54145ea9201593a79fab02cd1e70a034a9cec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad793bb6665d67ac2bd9ae06a54145ea9201593a79fab02cd1e70a034a9cec0->enter($__internal_0ad793bb6665d67ac2bd9ae06a54145ea9201593a79fab02cd1e70a034a9cec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_849c22e5cf11408c37a68567bcdd62c4903863cc0fc3bb04187b747c7a7632bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849c22e5cf11408c37a68567bcdd62c4903863cc0fc3bb04187b747c7a7632bb->enter($__internal_849c22e5cf11408c37a68567bcdd62c4903863cc0fc3bb04187b747c7a7632bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_849c22e5cf11408c37a68567bcdd62c4903863cc0fc3bb04187b747c7a7632bb->leave($__internal_849c22e5cf11408c37a68567bcdd62c4903863cc0fc3bb04187b747c7a7632bb_prof);

        
        $__internal_0ad793bb6665d67ac2bd9ae06a54145ea9201593a79fab02cd1e70a034a9cec0->leave($__internal_0ad793bb6665d67ac2bd9ae06a54145ea9201593a79fab02cd1e70a034a9cec0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13d2ef6567358bcc39998e8db823615998412ed0db36b8ee60d411d87c666b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d2ef6567358bcc39998e8db823615998412ed0db36b8ee60d411d87c666b01->enter($__internal_13d2ef6567358bcc39998e8db823615998412ed0db36b8ee60d411d87c666b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e12dbd84bf4f9c93b13daceabd55de5952a76f70bb329e8fd06c84ab898959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e12dbd84bf4f9c93b13daceabd55de5952a76f70bb329e8fd06c84ab898959c->enter($__internal_8e12dbd84bf4f9c93b13daceabd55de5952a76f70bb329e8fd06c84ab898959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8e12dbd84bf4f9c93b13daceabd55de5952a76f70bb329e8fd06c84ab898959c->leave($__internal_8e12dbd84bf4f9c93b13daceabd55de5952a76f70bb329e8fd06c84ab898959c_prof);

        
        $__internal_13d2ef6567358bcc39998e8db823615998412ed0db36b8ee60d411d87c666b01->leave($__internal_13d2ef6567358bcc39998e8db823615998412ed0db36b8ee60d411d87c666b01_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8afd7777aa8b63562a8662003045ecbf3b099cf40ef7de6f14dbc5302f25aba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afd7777aa8b63562a8662003045ecbf3b099cf40ef7de6f14dbc5302f25aba0->enter($__internal_8afd7777aa8b63562a8662003045ecbf3b099cf40ef7de6f14dbc5302f25aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba1368eb7a6a28d0dd8e1c22863a3e1bad4a9fc4844c472cc634bece0b90b8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1368eb7a6a28d0dd8e1c22863a3e1bad4a9fc4844c472cc634bece0b90b8ee->enter($__internal_ba1368eb7a6a28d0dd8e1c22863a3e1bad4a9fc4844c472cc634bece0b90b8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ba1368eb7a6a28d0dd8e1c22863a3e1bad4a9fc4844c472cc634bece0b90b8ee->leave($__internal_ba1368eb7a6a28d0dd8e1c22863a3e1bad4a9fc4844c472cc634bece0b90b8ee_prof);

        
        $__internal_8afd7777aa8b63562a8662003045ecbf3b099cf40ef7de6f14dbc5302f25aba0->leave($__internal_8afd7777aa8b63562a8662003045ecbf3b099cf40ef7de6f14dbc5302f25aba0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
