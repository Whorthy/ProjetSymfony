<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_3357210ec3cd9d8b40ac23e5b6daa33ec9b969edfa71ecf3082b5ee0a51af3b7 extends Twig_Template
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
        $__internal_9eb9dec68b78475662bc6234c4d34c64565eadd93d4e373673cfbdc29cbe9ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb9dec68b78475662bc6234c4d34c64565eadd93d4e373673cfbdc29cbe9ed7->enter($__internal_9eb9dec68b78475662bc6234c4d34c64565eadd93d4e373673cfbdc29cbe9ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_f858eba46ca43fd9469e92eab25ca1e859cc7394b82c67434ff170549c204023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f858eba46ca43fd9469e92eab25ca1e859cc7394b82c67434ff170549c204023->enter($__internal_f858eba46ca43fd9469e92eab25ca1e859cc7394b82c67434ff170549c204023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>";
        
        $__internal_9eb9dec68b78475662bc6234c4d34c64565eadd93d4e373673cfbdc29cbe9ed7->leave($__internal_9eb9dec68b78475662bc6234c4d34c64565eadd93d4e373673cfbdc29cbe9ed7_prof);

        
        $__internal_f858eba46ca43fd9469e92eab25ca1e859cc7394b82c67434ff170549c204023->leave($__internal_f858eba46ca43fd9469e92eab25ca1e859cc7394b82c67434ff170549c204023_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf1fd19cc9603de4c6ca15fad998de9251297e99aebceaa6048c0b4d4851ad05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1fd19cc9603de4c6ca15fad998de9251297e99aebceaa6048c0b4d4851ad05->enter($__internal_cf1fd19cc9603de4c6ca15fad998de9251297e99aebceaa6048c0b4d4851ad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee8e6294f689ec5df10105d816daa0ca013cdfd7e3804d093c37e5ae6a2c15ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8e6294f689ec5df10105d816daa0ca013cdfd7e3804d093c37e5ae6a2c15ea->enter($__internal_ee8e6294f689ec5df10105d816daa0ca013cdfd7e3804d093c37e5ae6a2c15ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee8e6294f689ec5df10105d816daa0ca013cdfd7e3804d093c37e5ae6a2c15ea->leave($__internal_ee8e6294f689ec5df10105d816daa0ca013cdfd7e3804d093c37e5ae6a2c15ea_prof);

        
        $__internal_cf1fd19cc9603de4c6ca15fad998de9251297e99aebceaa6048c0b4d4851ad05->leave($__internal_cf1fd19cc9603de4c6ca15fad998de9251297e99aebceaa6048c0b4d4851ad05_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_498ff4a6de89a5e29b74246f4ee63c34c35651a47de2a61d8402af53b1da2630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498ff4a6de89a5e29b74246f4ee63c34c35651a47de2a61d8402af53b1da2630->enter($__internal_498ff4a6de89a5e29b74246f4ee63c34c35651a47de2a61d8402af53b1da2630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5acd7608dcd256129600a05d9f72451b7f3c0dbd703f19b964bfd590f89bb721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acd7608dcd256129600a05d9f72451b7f3c0dbd703f19b964bfd590f89bb721->enter($__internal_5acd7608dcd256129600a05d9f72451b7f3c0dbd703f19b964bfd590f89bb721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5acd7608dcd256129600a05d9f72451b7f3c0dbd703f19b964bfd590f89bb721->leave($__internal_5acd7608dcd256129600a05d9f72451b7f3c0dbd703f19b964bfd590f89bb721_prof);

        
        $__internal_498ff4a6de89a5e29b74246f4ee63c34c35651a47de2a61d8402af53b1da2630->leave($__internal_498ff4a6de89a5e29b74246f4ee63c34c35651a47de2a61d8402af53b1da2630_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_007beda8572f8db424f8034fadce47b77e2dce4d89b682c8b9ebc91489515df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007beda8572f8db424f8034fadce47b77e2dce4d89b682c8b9ebc91489515df0->enter($__internal_007beda8572f8db424f8034fadce47b77e2dce4d89b682c8b9ebc91489515df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3df8950da06103520a84c761bcb1c10fc1ebef57a9342622c4a1aa77a4c8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3df8950da06103520a84c761bcb1c10fc1ebef57a9342622c4a1aa77a4c8eb->enter($__internal_8e3df8950da06103520a84c761bcb1c10fc1ebef57a9342622c4a1aa77a4c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_8e3df8950da06103520a84c761bcb1c10fc1ebef57a9342622c4a1aa77a4c8eb->leave($__internal_8e3df8950da06103520a84c761bcb1c10fc1ebef57a9342622c4a1aa77a4c8eb_prof);

        
        $__internal_007beda8572f8db424f8034fadce47b77e2dce4d89b682c8b9ebc91489515df0->leave($__internal_007beda8572f8db424f8034fadce47b77e2dce4d89b682c8b9ebc91489515df0_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_607034df7eaff15aff22551bd31a82742ff077fd328eb234c70d280ede742fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607034df7eaff15aff22551bd31a82742ff077fd328eb234c70d280ede742fa5->enter($__internal_607034df7eaff15aff22551bd31a82742ff077fd328eb234c70d280ede742fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b804af034d8bfe56021d9a2570e256749e7f0531c30145fba278316f651745db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b804af034d8bfe56021d9a2570e256749e7f0531c30145fba278316f651745db->enter($__internal_b804af034d8bfe56021d9a2570e256749e7f0531c30145fba278316f651745db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b804af034d8bfe56021d9a2570e256749e7f0531c30145fba278316f651745db->leave($__internal_b804af034d8bfe56021d9a2570e256749e7f0531c30145fba278316f651745db_prof);

        
        $__internal_607034df7eaff15aff22551bd31a82742ff077fd328eb234c70d280ede742fa5->leave($__internal_607034df7eaff15aff22551bd31a82742ff077fd328eb234c70d280ede742fa5_prof);

    }

    public function getTemplateName()
    {
        return "BunkerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  109 => 12,  100 => 11,  83 => 6,  65 => 5,  54 => 15,  51 => 14,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    {% block body %}
        <h1>SUPRISE MOTHERFUCKER</h1>
    {% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
