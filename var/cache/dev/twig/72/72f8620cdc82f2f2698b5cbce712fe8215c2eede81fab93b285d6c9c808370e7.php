<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_852b47481b15a2d07e3d2e80e71a13bb0741753de61bb4960aa45085de922d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852b47481b15a2d07e3d2e80e71a13bb0741753de61bb4960aa45085de922d03->enter($__internal_852b47481b15a2d07e3d2e80e71a13bb0741753de61bb4960aa45085de922d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4809ed423ac635240f839b7ec7bf052f4dc3a4311d7a825df3b44865709b8bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4809ed423ac635240f839b7ec7bf052f4dc3a4311d7a825df3b44865709b8bb8->enter($__internal_4809ed423ac635240f839b7ec7bf052f4dc3a4311d7a825df3b44865709b8bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_852b47481b15a2d07e3d2e80e71a13bb0741753de61bb4960aa45085de922d03->leave($__internal_852b47481b15a2d07e3d2e80e71a13bb0741753de61bb4960aa45085de922d03_prof);

        
        $__internal_4809ed423ac635240f839b7ec7bf052f4dc3a4311d7a825df3b44865709b8bb8->leave($__internal_4809ed423ac635240f839b7ec7bf052f4dc3a4311d7a825df3b44865709b8bb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1822e68d3947e3a4f7de6672c6cb112e5ed4b6c6e841bce2f6fdc902e8b69e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1822e68d3947e3a4f7de6672c6cb112e5ed4b6c6e841bce2f6fdc902e8b69e4->enter($__internal_c1822e68d3947e3a4f7de6672c6cb112e5ed4b6c6e841bce2f6fdc902e8b69e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68ba88e16e12dcbf9ea3997afcfdbb8061dba10939a3331add94575fd6db7e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ba88e16e12dcbf9ea3997afcfdbb8061dba10939a3331add94575fd6db7e87->enter($__internal_68ba88e16e12dcbf9ea3997afcfdbb8061dba10939a3331add94575fd6db7e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68ba88e16e12dcbf9ea3997afcfdbb8061dba10939a3331add94575fd6db7e87->leave($__internal_68ba88e16e12dcbf9ea3997afcfdbb8061dba10939a3331add94575fd6db7e87_prof);

        
        $__internal_c1822e68d3947e3a4f7de6672c6cb112e5ed4b6c6e841bce2f6fdc902e8b69e4->leave($__internal_c1822e68d3947e3a4f7de6672c6cb112e5ed4b6c6e841bce2f6fdc902e8b69e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f700c1318f9d455eedb4f00efa9ebb2241619a0ecf58264f1b0ab62f8587a5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f700c1318f9d455eedb4f00efa9ebb2241619a0ecf58264f1b0ab62f8587a5b8->enter($__internal_f700c1318f9d455eedb4f00efa9ebb2241619a0ecf58264f1b0ab62f8587a5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06e6a945834d2571f53dc06d5db7e9b0c06174a6692baaf679bd7cc84711245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e6a945834d2571f53dc06d5db7e9b0c06174a6692baaf679bd7cc84711245b->enter($__internal_06e6a945834d2571f53dc06d5db7e9b0c06174a6692baaf679bd7cc84711245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_06e6a945834d2571f53dc06d5db7e9b0c06174a6692baaf679bd7cc84711245b->leave($__internal_06e6a945834d2571f53dc06d5db7e9b0c06174a6692baaf679bd7cc84711245b_prof);

        
        $__internal_f700c1318f9d455eedb4f00efa9ebb2241619a0ecf58264f1b0ab62f8587a5b8->leave($__internal_f700c1318f9d455eedb4f00efa9ebb2241619a0ecf58264f1b0ab62f8587a5b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8eb3fa844702f10964d90e47957a0ad342d0d3b1de9d807bca5689ea0bf160d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8eb3fa844702f10964d90e47957a0ad342d0d3b1de9d807bca5689ea0bf160d->enter($__internal_a8eb3fa844702f10964d90e47957a0ad342d0d3b1de9d807bca5689ea0bf160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09eae08b39c0214a4c2a779d2816ec68cce6cd781d58ca2995a3348432167f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09eae08b39c0214a4c2a779d2816ec68cce6cd781d58ca2995a3348432167f3b->enter($__internal_09eae08b39c0214a4c2a779d2816ec68cce6cd781d58ca2995a3348432167f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09eae08b39c0214a4c2a779d2816ec68cce6cd781d58ca2995a3348432167f3b->leave($__internal_09eae08b39c0214a4c2a779d2816ec68cce6cd781d58ca2995a3348432167f3b_prof);

        
        $__internal_a8eb3fa844702f10964d90e47957a0ad342d0d3b1de9d807bca5689ea0bf160d->leave($__internal_a8eb3fa844702f10964d90e47957a0ad342d0d3b1de9d807bca5689ea0bf160d_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7450a03d1865dd6c5fd59c6a99361c17acb07e09f1751e530f23e3b2fdb21f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7450a03d1865dd6c5fd59c6a99361c17acb07e09f1751e530f23e3b2fdb21f8->enter($__internal_a7450a03d1865dd6c5fd59c6a99361c17acb07e09f1751e530f23e3b2fdb21f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a37f9a751b39d0a4c92e42a1aff6b90fe65d885da19edc8ab137c190f4e675b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37f9a751b39d0a4c92e42a1aff6b90fe65d885da19edc8ab137c190f4e675b4->enter($__internal_a37f9a751b39d0a4c92e42a1aff6b90fe65d885da19edc8ab137c190f4e675b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a37f9a751b39d0a4c92e42a1aff6b90fe65d885da19edc8ab137c190f4e675b4->leave($__internal_a37f9a751b39d0a4c92e42a1aff6b90fe65d885da19edc8ab137c190f4e675b4_prof);

        
        $__internal_a7450a03d1865dd6c5fd59c6a99361c17acb07e09f1751e530f23e3b2fdb21f8->leave($__internal_a7450a03d1865dd6c5fd59c6a99361c17acb07e09f1751e530f23e3b2fdb21f8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/base.html.twig");
    }
}
