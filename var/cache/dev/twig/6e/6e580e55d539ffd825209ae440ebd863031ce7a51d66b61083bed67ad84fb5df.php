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
        $__internal_4ebf0f2f2920a4ed4eb4326e0c7521a2b544486fd6afe44aed49bf68a13e89b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebf0f2f2920a4ed4eb4326e0c7521a2b544486fd6afe44aed49bf68a13e89b8->enter($__internal_4ebf0f2f2920a4ed4eb4326e0c7521a2b544486fd6afe44aed49bf68a13e89b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_40efdf25b07d00a015278f35f68eb5573e2ee581ac19f5029881d0c528ef5e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40efdf25b07d00a015278f35f68eb5573e2ee581ac19f5029881d0c528ef5e0d->enter($__internal_40efdf25b07d00a015278f35f68eb5573e2ee581ac19f5029881d0c528ef5e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebf0f2f2920a4ed4eb4326e0c7521a2b544486fd6afe44aed49bf68a13e89b8->leave($__internal_4ebf0f2f2920a4ed4eb4326e0c7521a2b544486fd6afe44aed49bf68a13e89b8_prof);

        
        $__internal_40efdf25b07d00a015278f35f68eb5573e2ee581ac19f5029881d0c528ef5e0d->leave($__internal_40efdf25b07d00a015278f35f68eb5573e2ee581ac19f5029881d0c528ef5e0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d755f7968ac39eab65b5979d7513ffb767f216751caf82bed4d0820d2b4cca30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d755f7968ac39eab65b5979d7513ffb767f216751caf82bed4d0820d2b4cca30->enter($__internal_d755f7968ac39eab65b5979d7513ffb767f216751caf82bed4d0820d2b4cca30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_401708e893b257940add30410222198dc17085f83520123e025bfde1f472d309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401708e893b257940add30410222198dc17085f83520123e025bfde1f472d309->enter($__internal_401708e893b257940add30410222198dc17085f83520123e025bfde1f472d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_401708e893b257940add30410222198dc17085f83520123e025bfde1f472d309->leave($__internal_401708e893b257940add30410222198dc17085f83520123e025bfde1f472d309_prof);

        
        $__internal_d755f7968ac39eab65b5979d7513ffb767f216751caf82bed4d0820d2b4cca30->leave($__internal_d755f7968ac39eab65b5979d7513ffb767f216751caf82bed4d0820d2b4cca30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11472cfa91c7ac7fcdcbbf82c653cf07068f9b7e2599a287d00d9642f200f9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11472cfa91c7ac7fcdcbbf82c653cf07068f9b7e2599a287d00d9642f200f9d2->enter($__internal_11472cfa91c7ac7fcdcbbf82c653cf07068f9b7e2599a287d00d9642f200f9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f3126e0e9118806dffffa83708f8ec4de96e3d359950ebe3bd4f43426213cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3126e0e9118806dffffa83708f8ec4de96e3d359950ebe3bd4f43426213cfc->enter($__internal_2f3126e0e9118806dffffa83708f8ec4de96e3d359950ebe3bd4f43426213cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2f3126e0e9118806dffffa83708f8ec4de96e3d359950ebe3bd4f43426213cfc->leave($__internal_2f3126e0e9118806dffffa83708f8ec4de96e3d359950ebe3bd4f43426213cfc_prof);

        
        $__internal_11472cfa91c7ac7fcdcbbf82c653cf07068f9b7e2599a287d00d9642f200f9d2->leave($__internal_11472cfa91c7ac7fcdcbbf82c653cf07068f9b7e2599a287d00d9642f200f9d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e50bb1cf691110ad5371650a08bf021db36a5035517ab3bfdc5169ebe9e394a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50bb1cf691110ad5371650a08bf021db36a5035517ab3bfdc5169ebe9e394a7->enter($__internal_e50bb1cf691110ad5371650a08bf021db36a5035517ab3bfdc5169ebe9e394a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b283d71bc0c7a4cbd38d312ef13d13403ad46e8fca07db55770921fc016b390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b283d71bc0c7a4cbd38d312ef13d13403ad46e8fca07db55770921fc016b390->enter($__internal_0b283d71bc0c7a4cbd38d312ef13d13403ad46e8fca07db55770921fc016b390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0b283d71bc0c7a4cbd38d312ef13d13403ad46e8fca07db55770921fc016b390->leave($__internal_0b283d71bc0c7a4cbd38d312ef13d13403ad46e8fca07db55770921fc016b390_prof);

        
        $__internal_e50bb1cf691110ad5371650a08bf021db36a5035517ab3bfdc5169ebe9e394a7->leave($__internal_e50bb1cf691110ad5371650a08bf021db36a5035517ab3bfdc5169ebe9e394a7_prof);

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
