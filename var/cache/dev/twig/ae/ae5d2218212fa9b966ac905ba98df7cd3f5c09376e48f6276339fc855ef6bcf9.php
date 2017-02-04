<?php

/* CreatureFantastique/show.html.twig */
class __TwigTemplate_bdb8c12eff225b0cfdac1085b650aa6e4ebde572634485d1c3983955fe189c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CreatureFantastique/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d97bb380f45a52bfcc86a2017565013b91167c788b218a5945ad9558d8cb1293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97bb380f45a52bfcc86a2017565013b91167c788b218a5945ad9558d8cb1293->enter($__internal_d97bb380f45a52bfcc86a2017565013b91167c788b218a5945ad9558d8cb1293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/show.html.twig"));

        $__internal_6d8e6845532574bfaa9ac5d0751cc922cf7272f3ac1cbd619b488a2eb772854e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8e6845532574bfaa9ac5d0751cc922cf7272f3ac1cbd619b488a2eb772854e->enter($__internal_6d8e6845532574bfaa9ac5d0751cc922cf7272f3ac1cbd619b488a2eb772854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CreatureFantastique/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d97bb380f45a52bfcc86a2017565013b91167c788b218a5945ad9558d8cb1293->leave($__internal_d97bb380f45a52bfcc86a2017565013b91167c788b218a5945ad9558d8cb1293_prof);

        
        $__internal_6d8e6845532574bfaa9ac5d0751cc922cf7272f3ac1cbd619b488a2eb772854e->leave($__internal_6d8e6845532574bfaa9ac5d0751cc922cf7272f3ac1cbd619b488a2eb772854e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b84179f1824b414d7107aba4b1fa0ca924f71a973c8822f580f5f5833fb115df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84179f1824b414d7107aba4b1fa0ca924f71a973c8822f580f5f5833fb115df->enter($__internal_b84179f1824b414d7107aba4b1fa0ca924f71a973c8822f580f5f5833fb115df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_521f291398e0341de8785186d9289ea413bc218a72bfb6b5d3bcf6094ff77c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521f291398e0341de8785186d9289ea413bc218a72bfb6b5d3bcf6094ff77c6a->enter($__internal_521f291398e0341de8785186d9289ea413bc218a72bfb6b5d3bcf6094ff77c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Appbundle:CreatureFantastique:Show cacao";
        
        $__internal_521f291398e0341de8785186d9289ea413bc218a72bfb6b5d3bcf6094ff77c6a->leave($__internal_521f291398e0341de8785186d9289ea413bc218a72bfb6b5d3bcf6094ff77c6a_prof);

        
        $__internal_b84179f1824b414d7107aba4b1fa0ca924f71a973c8822f580f5f5833fb115df->leave($__internal_b84179f1824b414d7107aba4b1fa0ca924f71a973c8822f580f5f5833fb115df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8943f8baff8fd6b3728b4a0e08053bffaba4a8d2af43f9935b057319d45baae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8943f8baff8fd6b3728b4a0e08053bffaba4a8d2af43f9935b057319d45baae3->enter($__internal_8943f8baff8fd6b3728b4a0e08053bffaba4a8d2af43f9935b057319d45baae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd24138d08f2c62a35f00c6eed65327d3c12c99f4c2bc310db504c95023bc73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd24138d08f2c62a35f00c6eed65327d3c12c99f4c2bc310db504c95023bc73e->enter($__internal_dd24138d08f2c62a35f00c6eed65327d3c12c99f4c2bc310db504c95023bc73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the CreatureFantastique:index page</h1>
    <div>
        <h2>";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["creatureFantastique"] ?? $this->getContext($context, "creatureFantastique")), "nom", array()), "html", null, true));
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["creatureFantastique"] ?? $this->getContext($context, "creatureFantastique")), "superPower", array()), "html", null, true);
        echo "</p>
    </div>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_creaturefantastique_index");
        echo "\">Index</a>
";
        
        $__internal_dd24138d08f2c62a35f00c6eed65327d3c12c99f4c2bc310db504c95023bc73e->leave($__internal_dd24138d08f2c62a35f00c6eed65327d3c12c99f4c2bc310db504c95023bc73e_prof);

        
        $__internal_8943f8baff8fd6b3728b4a0e08053bffaba4a8d2af43f9935b057319d45baae3->leave($__internal_8943f8baff8fd6b3728b4a0e08053bffaba4a8d2af43f9935b057319d45baae3_prof);

    }

    public function getTemplateName()
    {
        return "CreatureFantastique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Appbundle:CreatureFantastique:Show cacao{% endblock %}

{% block body %}
<h1>Welcome to the CreatureFantastique:index page</h1>
    <div>
        <h2>{{ creatureFantastique.nom | nl2br }}</h2>
        <p>{{ creatureFantastique.superPower }}</p>
    </div>
    <a href=\"{{ path(\"app_creaturefantastique_index\") }}\">Index</a>
{% endblock %}", "CreatureFantastique/show.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/show.html.twig");
    }
}
