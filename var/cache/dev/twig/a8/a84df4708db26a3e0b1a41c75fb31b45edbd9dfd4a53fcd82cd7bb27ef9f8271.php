<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1bc2e7d661c47a731db1e918e99b3197d7b01be05977a20b906b447043736fa extends Twig_Template
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
        $__internal_f1b2ccb82cd83b1d38566fc9febd75585d811c0534ef0744715eaa05df8cf846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b2ccb82cd83b1d38566fc9febd75585d811c0534ef0744715eaa05df8cf846->enter($__internal_f1b2ccb82cd83b1d38566fc9febd75585d811c0534ef0744715eaa05df8cf846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9dcb5a6c8534ea2321a40495a005cef17555c16be85a11780d87d2f818b13df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcb5a6c8534ea2321a40495a005cef17555c16be85a11780d87d2f818b13df5->enter($__internal_9dcb5a6c8534ea2321a40495a005cef17555c16be85a11780d87d2f818b13df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f1b2ccb82cd83b1d38566fc9febd75585d811c0534ef0744715eaa05df8cf846->leave($__internal_f1b2ccb82cd83b1d38566fc9febd75585d811c0534ef0744715eaa05df8cf846_prof);

        
        $__internal_9dcb5a6c8534ea2321a40495a005cef17555c16be85a11780d87d2f818b13df5->leave($__internal_9dcb5a6c8534ea2321a40495a005cef17555c16be85a11780d87d2f818b13df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
