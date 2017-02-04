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
        $__internal_6ff554e30b027889b86dea2aa0c842a24470549810c153ddfb5affcc22d77a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff554e30b027889b86dea2aa0c842a24470549810c153ddfb5affcc22d77a8d->enter($__internal_6ff554e30b027889b86dea2aa0c842a24470549810c153ddfb5affcc22d77a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b81a0287a8005b5df8195c0df5d43a6f449850192777c6e7e46c3c93e4b3feec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81a0287a8005b5df8195c0df5d43a6f449850192777c6e7e46c3c93e4b3feec->enter($__internal_b81a0287a8005b5df8195c0df5d43a6f449850192777c6e7e46c3c93e4b3feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff554e30b027889b86dea2aa0c842a24470549810c153ddfb5affcc22d77a8d->leave($__internal_6ff554e30b027889b86dea2aa0c842a24470549810c153ddfb5affcc22d77a8d_prof);

        
        $__internal_b81a0287a8005b5df8195c0df5d43a6f449850192777c6e7e46c3c93e4b3feec->leave($__internal_b81a0287a8005b5df8195c0df5d43a6f449850192777c6e7e46c3c93e4b3feec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1fdb61f0af4dcc029e34a60124b6a10891b83cdb97e5a7af86aea8165e82842f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdb61f0af4dcc029e34a60124b6a10891b83cdb97e5a7af86aea8165e82842f->enter($__internal_1fdb61f0af4dcc029e34a60124b6a10891b83cdb97e5a7af86aea8165e82842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a3a278b9887d3dc19000c7154b9c9663350070b9bd7ac15d018abf13db31bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3a278b9887d3dc19000c7154b9c9663350070b9bd7ac15d018abf13db31bb8->enter($__internal_6a3a278b9887d3dc19000c7154b9c9663350070b9bd7ac15d018abf13db31bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a3a278b9887d3dc19000c7154b9c9663350070b9bd7ac15d018abf13db31bb8->leave($__internal_6a3a278b9887d3dc19000c7154b9c9663350070b9bd7ac15d018abf13db31bb8_prof);

        
        $__internal_1fdb61f0af4dcc029e34a60124b6a10891b83cdb97e5a7af86aea8165e82842f->leave($__internal_1fdb61f0af4dcc029e34a60124b6a10891b83cdb97e5a7af86aea8165e82842f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7f6ecabcb82723c2dcbb3ed9999a5dbd97a622224456a6fe9ab7ae337ec4e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f6ecabcb82723c2dcbb3ed9999a5dbd97a622224456a6fe9ab7ae337ec4e21->enter($__internal_f7f6ecabcb82723c2dcbb3ed9999a5dbd97a622224456a6fe9ab7ae337ec4e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24caf4906a253c5052f6dc30a9fc9bd8140e7272a0118833bdb717f4693c591a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24caf4906a253c5052f6dc30a9fc9bd8140e7272a0118833bdb717f4693c591a->enter($__internal_24caf4906a253c5052f6dc30a9fc9bd8140e7272a0118833bdb717f4693c591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24caf4906a253c5052f6dc30a9fc9bd8140e7272a0118833bdb717f4693c591a->leave($__internal_24caf4906a253c5052f6dc30a9fc9bd8140e7272a0118833bdb717f4693c591a_prof);

        
        $__internal_f7f6ecabcb82723c2dcbb3ed9999a5dbd97a622224456a6fe9ab7ae337ec4e21->leave($__internal_f7f6ecabcb82723c2dcbb3ed9999a5dbd97a622224456a6fe9ab7ae337ec4e21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed91797433a7322b7b90e896b450bce401dc93e23cfcfd7d1911a4ed57b195d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed91797433a7322b7b90e896b450bce401dc93e23cfcfd7d1911a4ed57b195d4->enter($__internal_ed91797433a7322b7b90e896b450bce401dc93e23cfcfd7d1911a4ed57b195d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca71e45cf22cca554fe33142875c8b0a1ec1de255c2c52f0fa62c0d6ce665c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca71e45cf22cca554fe33142875c8b0a1ec1de255c2c52f0fa62c0d6ce665c58->enter($__internal_ca71e45cf22cca554fe33142875c8b0a1ec1de255c2c52f0fa62c0d6ce665c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca71e45cf22cca554fe33142875c8b0a1ec1de255c2c52f0fa62c0d6ce665c58->leave($__internal_ca71e45cf22cca554fe33142875c8b0a1ec1de255c2c52f0fa62c0d6ce665c58_prof);

        
        $__internal_ed91797433a7322b7b90e896b450bce401dc93e23cfcfd7d1911a4ed57b195d4->leave($__internal_ed91797433a7322b7b90e896b450bce401dc93e23cfcfd7d1911a4ed57b195d4_prof);

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
