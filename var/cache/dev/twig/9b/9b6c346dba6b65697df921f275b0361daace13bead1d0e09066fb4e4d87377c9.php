<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_28cf4185674586f5c044a18f01098339e4db996ff7d34f31618b9f5b587bcb6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b791f4adb5de1807a54f63421852936f02cae19ae4e1ff0a592185bf2110202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b791f4adb5de1807a54f63421852936f02cae19ae4e1ff0a592185bf2110202->enter($__internal_0b791f4adb5de1807a54f63421852936f02cae19ae4e1ff0a592185bf2110202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2516a503fc9c5e694106f267e3f47241c84581facb5ac611395998fbf1ff1f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2516a503fc9c5e694106f267e3f47241c84581facb5ac611395998fbf1ff1f3d->enter($__internal_2516a503fc9c5e694106f267e3f47241c84581facb5ac611395998fbf1ff1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0b791f4adb5de1807a54f63421852936f02cae19ae4e1ff0a592185bf2110202->leave($__internal_0b791f4adb5de1807a54f63421852936f02cae19ae4e1ff0a592185bf2110202_prof);

        
        $__internal_2516a503fc9c5e694106f267e3f47241c84581facb5ac611395998fbf1ff1f3d->leave($__internal_2516a503fc9c5e694106f267e3f47241c84581facb5ac611395998fbf1ff1f3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
