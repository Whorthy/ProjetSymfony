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
        $__internal_d5972c51a14204518756e9a4c0bca56c95595d9ba0675f884d833aae680a30dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5972c51a14204518756e9a4c0bca56c95595d9ba0675f884d833aae680a30dd->enter($__internal_d5972c51a14204518756e9a4c0bca56c95595d9ba0675f884d833aae680a30dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_34bbb36c06ad8ed7367d4bd8b9119b8a361118a79323d0d1fff5a0e698c6a6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bbb36c06ad8ed7367d4bd8b9119b8a361118a79323d0d1fff5a0e698c6a6da->enter($__internal_34bbb36c06ad8ed7367d4bd8b9119b8a361118a79323d0d1fff5a0e698c6a6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
        
        $__internal_d5972c51a14204518756e9a4c0bca56c95595d9ba0675f884d833aae680a30dd->leave($__internal_d5972c51a14204518756e9a4c0bca56c95595d9ba0675f884d833aae680a30dd_prof);

        
        $__internal_34bbb36c06ad8ed7367d4bd8b9119b8a361118a79323d0d1fff5a0e698c6a6da->leave($__internal_34bbb36c06ad8ed7367d4bd8b9119b8a361118a79323d0d1fff5a0e698c6a6da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78d17cef65317b3db7ff0b7e2d6dee9301cee41181bee36a634655bdd216bc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d17cef65317b3db7ff0b7e2d6dee9301cee41181bee36a634655bdd216bc94->enter($__internal_78d17cef65317b3db7ff0b7e2d6dee9301cee41181bee36a634655bdd216bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6aeab30c76e7223749a3308665ce75c4a9591f5dbfa15d15c5c844bd6fb9571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aeab30c76e7223749a3308665ce75c4a9591f5dbfa15d15c5c844bd6fb9571->enter($__internal_c6aeab30c76e7223749a3308665ce75c4a9591f5dbfa15d15c5c844bd6fb9571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6aeab30c76e7223749a3308665ce75c4a9591f5dbfa15d15c5c844bd6fb9571->leave($__internal_c6aeab30c76e7223749a3308665ce75c4a9591f5dbfa15d15c5c844bd6fb9571_prof);

        
        $__internal_78d17cef65317b3db7ff0b7e2d6dee9301cee41181bee36a634655bdd216bc94->leave($__internal_78d17cef65317b3db7ff0b7e2d6dee9301cee41181bee36a634655bdd216bc94_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_365a0d55adce0ea670325a0e8981a0262ea6cf61ef5fc77ffd2f0cac609759a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365a0d55adce0ea670325a0e8981a0262ea6cf61ef5fc77ffd2f0cac609759a3->enter($__internal_365a0d55adce0ea670325a0e8981a0262ea6cf61ef5fc77ffd2f0cac609759a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cbcf49501a640fae4565423865e7ce94fae439b369fc072ab179e49e14984ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcf49501a640fae4565423865e7ce94fae439b369fc072ab179e49e14984ac2->enter($__internal_cbcf49501a640fae4565423865e7ce94fae439b369fc072ab179e49e14984ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbcf49501a640fae4565423865e7ce94fae439b369fc072ab179e49e14984ac2->leave($__internal_cbcf49501a640fae4565423865e7ce94fae439b369fc072ab179e49e14984ac2_prof);

        
        $__internal_365a0d55adce0ea670325a0e8981a0262ea6cf61ef5fc77ffd2f0cac609759a3->leave($__internal_365a0d55adce0ea670325a0e8981a0262ea6cf61ef5fc77ffd2f0cac609759a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f432bb111dbb7e84684c5aa0326ec23fc9e8e500d22a09907f1273c5900aa91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f432bb111dbb7e84684c5aa0326ec23fc9e8e500d22a09907f1273c5900aa91d->enter($__internal_f432bb111dbb7e84684c5aa0326ec23fc9e8e500d22a09907f1273c5900aa91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_108c14092d13972ede5d0c82df77aaa226914301a65075e6b71ff75b5083e693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108c14092d13972ede5d0c82df77aaa226914301a65075e6b71ff75b5083e693->enter($__internal_108c14092d13972ede5d0c82df77aaa226914301a65075e6b71ff75b5083e693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_108c14092d13972ede5d0c82df77aaa226914301a65075e6b71ff75b5083e693->leave($__internal_108c14092d13972ede5d0c82df77aaa226914301a65075e6b71ff75b5083e693_prof);

        
        $__internal_f432bb111dbb7e84684c5aa0326ec23fc9e8e500d22a09907f1273c5900aa91d->leave($__internal_f432bb111dbb7e84684c5aa0326ec23fc9e8e500d22a09907f1273c5900aa91d_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f2d914121ed7464358d59378989f5c172306df4afdaebc7021548a2031a5d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2d914121ed7464358d59378989f5c172306df4afdaebc7021548a2031a5d38->enter($__internal_4f2d914121ed7464358d59378989f5c172306df4afdaebc7021548a2031a5d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_defd4bd69494d7f99690aa6415e2276f7b2b569a2a6679457c5fcf257d638491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defd4bd69494d7f99690aa6415e2276f7b2b569a2a6679457c5fcf257d638491->enter($__internal_defd4bd69494d7f99690aa6415e2276f7b2b569a2a6679457c5fcf257d638491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_defd4bd69494d7f99690aa6415e2276f7b2b569a2a6679457c5fcf257d638491->leave($__internal_defd4bd69494d7f99690aa6415e2276f7b2b569a2a6679457c5fcf257d638491_prof);

        
        $__internal_4f2d914121ed7464358d59378989f5c172306df4afdaebc7021548a2031a5d38->leave($__internal_4f2d914121ed7464358d59378989f5c172306df4afdaebc7021548a2031a5d38_prof);

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
