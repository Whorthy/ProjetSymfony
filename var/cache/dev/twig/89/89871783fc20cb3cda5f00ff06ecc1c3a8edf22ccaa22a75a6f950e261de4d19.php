<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_510bbd4b9592d98741f734032b758c82fe00d876ddba9d69d8e1035d0fdc103f extends Twig_Template
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
        $__internal_e6c4e7762762909db6d19fc72440c0223371826dfd6f1ca046c94f2c3f6c9331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c4e7762762909db6d19fc72440c0223371826dfd6f1ca046c94f2c3f6c9331->enter($__internal_e6c4e7762762909db6d19fc72440c0223371826dfd6f1ca046c94f2c3f6c9331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2c16552c0c7a16dd59f50b86ad5d36966ed973c5b5dd0ea081653ffcd7e2e22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c16552c0c7a16dd59f50b86ad5d36966ed973c5b5dd0ea081653ffcd7e2e22e->enter($__internal_2c16552c0c7a16dd59f50b86ad5d36966ed973c5b5dd0ea081653ffcd7e2e22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e6c4e7762762909db6d19fc72440c0223371826dfd6f1ca046c94f2c3f6c9331->leave($__internal_e6c4e7762762909db6d19fc72440c0223371826dfd6f1ca046c94f2c3f6c9331_prof);

        
        $__internal_2c16552c0c7a16dd59f50b86ad5d36966ed973c5b5dd0ea081653ffcd7e2e22e->leave($__internal_2c16552c0c7a16dd59f50b86ad5d36966ed973c5b5dd0ea081653ffcd7e2e22e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}