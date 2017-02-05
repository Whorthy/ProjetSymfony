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
        $__internal_db9ee7e05d5beecb36b714f564adc877b7bf2752e55c525b6c17a95499d11ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9ee7e05d5beecb36b714f564adc877b7bf2752e55c525b6c17a95499d11ae5->enter($__internal_db9ee7e05d5beecb36b714f564adc877b7bf2752e55c525b6c17a95499d11ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1f4436c98136a6548af663b07fc05227cb40c60c167c6b4829d22c81544f735a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4436c98136a6548af663b07fc05227cb40c60c167c6b4829d22c81544f735a->enter($__internal_1f4436c98136a6548af663b07fc05227cb40c60c167c6b4829d22c81544f735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_db9ee7e05d5beecb36b714f564adc877b7bf2752e55c525b6c17a95499d11ae5->leave($__internal_db9ee7e05d5beecb36b714f564adc877b7bf2752e55c525b6c17a95499d11ae5_prof);

        
        $__internal_1f4436c98136a6548af663b07fc05227cb40c60c167c6b4829d22c81544f735a->leave($__internal_1f4436c98136a6548af663b07fc05227cb40c60c167c6b4829d22c81544f735a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e788a52b6f144aa769a85ad92d33a605ae2ca5ba1072c8ddaab52996b2395e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e788a52b6f144aa769a85ad92d33a605ae2ca5ba1072c8ddaab52996b2395e1->enter($__internal_7e788a52b6f144aa769a85ad92d33a605ae2ca5ba1072c8ddaab52996b2395e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad1b2a7ccd255a444fd969efa3d31bbfe2cbeb53cc5023904940b6575bbb3f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1b2a7ccd255a444fd969efa3d31bbfe2cbeb53cc5023904940b6575bbb3f93->enter($__internal_ad1b2a7ccd255a444fd969efa3d31bbfe2cbeb53cc5023904940b6575bbb3f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad1b2a7ccd255a444fd969efa3d31bbfe2cbeb53cc5023904940b6575bbb3f93->leave($__internal_ad1b2a7ccd255a444fd969efa3d31bbfe2cbeb53cc5023904940b6575bbb3f93_prof);

        
        $__internal_7e788a52b6f144aa769a85ad92d33a605ae2ca5ba1072c8ddaab52996b2395e1->leave($__internal_7e788a52b6f144aa769a85ad92d33a605ae2ca5ba1072c8ddaab52996b2395e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24ffba0bbf6058bb4264fd29fc85cc9183f8d42aae06cda548428666813d7394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ffba0bbf6058bb4264fd29fc85cc9183f8d42aae06cda548428666813d7394->enter($__internal_24ffba0bbf6058bb4264fd29fc85cc9183f8d42aae06cda548428666813d7394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dc29058c54e177f8af8aa121a8b492b7814f7bce58dfd5a96148143b70e433ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc29058c54e177f8af8aa121a8b492b7814f7bce58dfd5a96148143b70e433ce->enter($__internal_dc29058c54e177f8af8aa121a8b492b7814f7bce58dfd5a96148143b70e433ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc29058c54e177f8af8aa121a8b492b7814f7bce58dfd5a96148143b70e433ce->leave($__internal_dc29058c54e177f8af8aa121a8b492b7814f7bce58dfd5a96148143b70e433ce_prof);

        
        $__internal_24ffba0bbf6058bb4264fd29fc85cc9183f8d42aae06cda548428666813d7394->leave($__internal_24ffba0bbf6058bb4264fd29fc85cc9183f8d42aae06cda548428666813d7394_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a51455ceeca1f76d9c373b48c8e8a67a69cd8bf574fdf2568c73c95847a1a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a51455ceeca1f76d9c373b48c8e8a67a69cd8bf574fdf2568c73c95847a1a3f->enter($__internal_0a51455ceeca1f76d9c373b48c8e8a67a69cd8bf574fdf2568c73c95847a1a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5889affc4ee063ecdb9e9eaff56e3e1f6a326a6e4a2a78516e9e03bdfd2d5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5889affc4ee063ecdb9e9eaff56e3e1f6a326a6e4a2a78516e9e03bdfd2d5e7->enter($__internal_e5889affc4ee063ecdb9e9eaff56e3e1f6a326a6e4a2a78516e9e03bdfd2d5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5889affc4ee063ecdb9e9eaff56e3e1f6a326a6e4a2a78516e9e03bdfd2d5e7->leave($__internal_e5889affc4ee063ecdb9e9eaff56e3e1f6a326a6e4a2a78516e9e03bdfd2d5e7_prof);

        
        $__internal_0a51455ceeca1f76d9c373b48c8e8a67a69cd8bf574fdf2568c73c95847a1a3f->leave($__internal_0a51455ceeca1f76d9c373b48c8e8a67a69cd8bf574fdf2568c73c95847a1a3f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf188ba4f102d4a26d49097db879c1cf680aa052001ef7a7dab42c204be5a61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf188ba4f102d4a26d49097db879c1cf680aa052001ef7a7dab42c204be5a61e->enter($__internal_bf188ba4f102d4a26d49097db879c1cf680aa052001ef7a7dab42c204be5a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a3e6a6a28a54800face4db5debdfab727b26d1c1169c05f8ebd56a4e6a96014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3e6a6a28a54800face4db5debdfab727b26d1c1169c05f8ebd56a4e6a96014->enter($__internal_2a3e6a6a28a54800face4db5debdfab727b26d1c1169c05f8ebd56a4e6a96014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a3e6a6a28a54800face4db5debdfab727b26d1c1169c05f8ebd56a4e6a96014->leave($__internal_2a3e6a6a28a54800face4db5debdfab727b26d1c1169c05f8ebd56a4e6a96014_prof);

        
        $__internal_bf188ba4f102d4a26d49097db879c1cf680aa052001ef7a7dab42c204be5a61e->leave($__internal_bf188ba4f102d4a26d49097db879c1cf680aa052001ef7a7dab42c204be5a61e_prof);

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
