<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e0fed36b718775700246342bf3dbfa62ad66932b0478ffe42c039bb14725b538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_548159a4c84ca7dc00a20c655ac77e832afd3b246c0d097cfbfc4551ebf223f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548159a4c84ca7dc00a20c655ac77e832afd3b246c0d097cfbfc4551ebf223f8->enter($__internal_548159a4c84ca7dc00a20c655ac77e832afd3b246c0d097cfbfc4551ebf223f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bb03cde96584c5bfc729913a2cda33f45ddb5554ee8753a1501b2c751f39e1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb03cde96584c5bfc729913a2cda33f45ddb5554ee8753a1501b2c751f39e1e3->enter($__internal_bb03cde96584c5bfc729913a2cda33f45ddb5554ee8753a1501b2c751f39e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_548159a4c84ca7dc00a20c655ac77e832afd3b246c0d097cfbfc4551ebf223f8->leave($__internal_548159a4c84ca7dc00a20c655ac77e832afd3b246c0d097cfbfc4551ebf223f8_prof);

        
        $__internal_bb03cde96584c5bfc729913a2cda33f45ddb5554ee8753a1501b2c751f39e1e3->leave($__internal_bb03cde96584c5bfc729913a2cda33f45ddb5554ee8753a1501b2c751f39e1e3_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_52528044ce35079f5ce945ae91e59ee9eac212bbd6fdc3cf7468d66af978f6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52528044ce35079f5ce945ae91e59ee9eac212bbd6fdc3cf7468d66af978f6e4->enter($__internal_52528044ce35079f5ce945ae91e59ee9eac212bbd6fdc3cf7468d66af978f6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_17c7d3f6ff8869712a014d544b2e8cd335352e1c5cb4068ebd4af98bc45ff157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7d3f6ff8869712a014d544b2e8cd335352e1c5cb4068ebd4af98bc45ff157->enter($__internal_17c7d3f6ff8869712a014d544b2e8cd335352e1c5cb4068ebd4af98bc45ff157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_17c7d3f6ff8869712a014d544b2e8cd335352e1c5cb4068ebd4af98bc45ff157->leave($__internal_17c7d3f6ff8869712a014d544b2e8cd335352e1c5cb4068ebd4af98bc45ff157_prof);

        
        $__internal_52528044ce35079f5ce945ae91e59ee9eac212bbd6fdc3cf7468d66af978f6e4->leave($__internal_52528044ce35079f5ce945ae91e59ee9eac212bbd6fdc3cf7468d66af978f6e4_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_95d0d599384f8e1486e1bf16d2064b5403a97a7cd119bd8a50a3ad141c069650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d0d599384f8e1486e1bf16d2064b5403a97a7cd119bd8a50a3ad141c069650->enter($__internal_95d0d599384f8e1486e1bf16d2064b5403a97a7cd119bd8a50a3ad141c069650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_22c1f700c8f87acfb49c1cc406f655d861e0ea82aaee706e4ee853cd8407f8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c1f700c8f87acfb49c1cc406f655d861e0ea82aaee706e4ee853cd8407f8d9->enter($__internal_22c1f700c8f87acfb49c1cc406f655d861e0ea82aaee706e4ee853cd8407f8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_22c1f700c8f87acfb49c1cc406f655d861e0ea82aaee706e4ee853cd8407f8d9->leave($__internal_22c1f700c8f87acfb49c1cc406f655d861e0ea82aaee706e4ee853cd8407f8d9_prof);

        
        $__internal_95d0d599384f8e1486e1bf16d2064b5403a97a7cd119bd8a50a3ad141c069650->leave($__internal_95d0d599384f8e1486e1bf16d2064b5403a97a7cd119bd8a50a3ad141c069650_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_84a4a3d979718683e0031556af70cdc997cbc3281d7c29c6d41f196504daa074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a4a3d979718683e0031556af70cdc997cbc3281d7c29c6d41f196504daa074->enter($__internal_84a4a3d979718683e0031556af70cdc997cbc3281d7c29c6d41f196504daa074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e0557bdb2dafd1654c56c8208fd5e53f6232a6d92d2b744dc117645e7f51f7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0557bdb2dafd1654c56c8208fd5e53f6232a6d92d2b744dc117645e7f51f7a5->enter($__internal_e0557bdb2dafd1654c56c8208fd5e53f6232a6d92d2b744dc117645e7f51f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e0557bdb2dafd1654c56c8208fd5e53f6232a6d92d2b744dc117645e7f51f7a5->leave($__internal_e0557bdb2dafd1654c56c8208fd5e53f6232a6d92d2b744dc117645e7f51f7a5_prof);

        
        $__internal_84a4a3d979718683e0031556af70cdc997cbc3281d7c29c6d41f196504daa074->leave($__internal_84a4a3d979718683e0031556af70cdc997cbc3281d7c29c6d41f196504daa074_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5aa316fce67e5a3184eaa45e5e0f5654c03a0a7aa60273504142bc4b5f9c7829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa316fce67e5a3184eaa45e5e0f5654c03a0a7aa60273504142bc4b5f9c7829->enter($__internal_5aa316fce67e5a3184eaa45e5e0f5654c03a0a7aa60273504142bc4b5f9c7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_68403ee06a7e65507ee6ce62a7bb23b3a0bd6607f6ef8da59d63a9f6d55d6bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68403ee06a7e65507ee6ce62a7bb23b3a0bd6607f6ef8da59d63a9f6d55d6bb9->enter($__internal_68403ee06a7e65507ee6ce62a7bb23b3a0bd6607f6ef8da59d63a9f6d55d6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e3a49db51f4274eabde80071b0765ca22e63d7b2f5132769ca149713fa44b8aa = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_9496880d1ca5c272af80beca945d26125102263c8e9d660f84bb5aa76a190dab = "{{") && ('' === $__internal_9496880d1ca5c272af80beca945d26125102263c8e9d660f84bb5aa76a190dab || 0 === strpos($__internal_e3a49db51f4274eabde80071b0765ca22e63d7b2f5132769ca149713fa44b8aa, $__internal_9496880d1ca5c272af80beca945d26125102263c8e9d660f84bb5aa76a190dab)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_68403ee06a7e65507ee6ce62a7bb23b3a0bd6607f6ef8da59d63a9f6d55d6bb9->leave($__internal_68403ee06a7e65507ee6ce62a7bb23b3a0bd6607f6ef8da59d63a9f6d55d6bb9_prof);

        
        $__internal_5aa316fce67e5a3184eaa45e5e0f5654c03a0a7aa60273504142bc4b5f9c7829->leave($__internal_5aa316fce67e5a3184eaa45e5e0f5654c03a0a7aa60273504142bc4b5f9c7829_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6c75528ae07a111bf0b455adccdb39e65bb09ee0d2f6f6cce5f2b9cb13f5da5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c75528ae07a111bf0b455adccdb39e65bb09ee0d2f6f6cce5f2b9cb13f5da5e->enter($__internal_6c75528ae07a111bf0b455adccdb39e65bb09ee0d2f6f6cce5f2b9cb13f5da5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a5993852bfac339ea9e88446824a3961bd96c9576174337db046cc956fbd9d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5993852bfac339ea9e88446824a3961bd96c9576174337db046cc956fbd9d19->enter($__internal_a5993852bfac339ea9e88446824a3961bd96c9576174337db046cc956fbd9d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a5993852bfac339ea9e88446824a3961bd96c9576174337db046cc956fbd9d19->leave($__internal_a5993852bfac339ea9e88446824a3961bd96c9576174337db046cc956fbd9d19_prof);

        
        $__internal_6c75528ae07a111bf0b455adccdb39e65bb09ee0d2f6f6cce5f2b9cb13f5da5e->leave($__internal_6c75528ae07a111bf0b455adccdb39e65bb09ee0d2f6f6cce5f2b9cb13f5da5e_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_80cfc0669a4cbfde047c3ed9be95eff663e9cc0e490e74ae738129bd4f14cc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cfc0669a4cbfde047c3ed9be95eff663e9cc0e490e74ae738129bd4f14cc43->enter($__internal_80cfc0669a4cbfde047c3ed9be95eff663e9cc0e490e74ae738129bd4f14cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2cbf5ee5949c19870f0c1c04ef1d496ed67c15a9c11b566298fdbcebccf76481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbf5ee5949c19870f0c1c04ef1d496ed67c15a9c11b566298fdbcebccf76481->enter($__internal_2cbf5ee5949c19870f0c1c04ef1d496ed67c15a9c11b566298fdbcebccf76481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_2cbf5ee5949c19870f0c1c04ef1d496ed67c15a9c11b566298fdbcebccf76481->leave($__internal_2cbf5ee5949c19870f0c1c04ef1d496ed67c15a9c11b566298fdbcebccf76481_prof);

        
        $__internal_80cfc0669a4cbfde047c3ed9be95eff663e9cc0e490e74ae738129bd4f14cc43->leave($__internal_80cfc0669a4cbfde047c3ed9be95eff663e9cc0e490e74ae738129bd4f14cc43_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4dbb99369a0a4c1fc1b2b0bd3d7b345e78068e94e601eeddea5c92f51a0c3643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbb99369a0a4c1fc1b2b0bd3d7b345e78068e94e601eeddea5c92f51a0c3643->enter($__internal_4dbb99369a0a4c1fc1b2b0bd3d7b345e78068e94e601eeddea5c92f51a0c3643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7ede274b721b1aa4857ae2a07fd7378081a4de0d6004a8015ad6462aaee7dc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ede274b721b1aa4857ae2a07fd7378081a4de0d6004a8015ad6462aaee7dc14->enter($__internal_7ede274b721b1aa4857ae2a07fd7378081a4de0d6004a8015ad6462aaee7dc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_7ede274b721b1aa4857ae2a07fd7378081a4de0d6004a8015ad6462aaee7dc14->leave($__internal_7ede274b721b1aa4857ae2a07fd7378081a4de0d6004a8015ad6462aaee7dc14_prof);

        
        $__internal_4dbb99369a0a4c1fc1b2b0bd3d7b345e78068e94e601eeddea5c92f51a0c3643->leave($__internal_4dbb99369a0a4c1fc1b2b0bd3d7b345e78068e94e601eeddea5c92f51a0c3643_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c5039144d356a9dfce89bccd946bc523fc0c98672049fb475f7e4c59a7a83eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5039144d356a9dfce89bccd946bc523fc0c98672049fb475f7e4c59a7a83eab->enter($__internal_c5039144d356a9dfce89bccd946bc523fc0c98672049fb475f7e4c59a7a83eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3e3ca379b5f8ed6ab43bec01d1487bac288989a19f525818c9a90bb083ef1f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3ca379b5f8ed6ab43bec01d1487bac288989a19f525818c9a90bb083ef1f3a->enter($__internal_3e3ca379b5f8ed6ab43bec01d1487bac288989a19f525818c9a90bb083ef1f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_3e3ca379b5f8ed6ab43bec01d1487bac288989a19f525818c9a90bb083ef1f3a->leave($__internal_3e3ca379b5f8ed6ab43bec01d1487bac288989a19f525818c9a90bb083ef1f3a_prof);

        
        $__internal_c5039144d356a9dfce89bccd946bc523fc0c98672049fb475f7e4c59a7a83eab->leave($__internal_c5039144d356a9dfce89bccd946bc523fc0c98672049fb475f7e4c59a7a83eab_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c8e7fca6f0084bbdc95d255493f9e48882566f1a9f4a4b5acd8ae2f440b2714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e7fca6f0084bbdc95d255493f9e48882566f1a9f4a4b5acd8ae2f440b2714f->enter($__internal_c8e7fca6f0084bbdc95d255493f9e48882566f1a9f4a4b5acd8ae2f440b2714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6ddf09dd1d5d596c6d6e3614ce090683c5f0f11489aadb65f385117644d1dee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddf09dd1d5d596c6d6e3614ce090683c5f0f11489aadb65f385117644d1dee9->enter($__internal_6ddf09dd1d5d596c6d6e3614ce090683c5f0f11489aadb65f385117644d1dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_6ddf09dd1d5d596c6d6e3614ce090683c5f0f11489aadb65f385117644d1dee9->leave($__internal_6ddf09dd1d5d596c6d6e3614ce090683c5f0f11489aadb65f385117644d1dee9_prof);

        
        $__internal_c8e7fca6f0084bbdc95d255493f9e48882566f1a9f4a4b5acd8ae2f440b2714f->leave($__internal_c8e7fca6f0084bbdc95d255493f9e48882566f1a9f4a4b5acd8ae2f440b2714f_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e285e1f1011963da940b29e2e5c0e780e4fb35319e3c2584f80024aa99e5b0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e285e1f1011963da940b29e2e5c0e780e4fb35319e3c2584f80024aa99e5b0d6->enter($__internal_e285e1f1011963da940b29e2e5c0e780e4fb35319e3c2584f80024aa99e5b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e5f88eee43a55bb49419fdc77e5d0386d4604b3458e69e7dcf0b8298e9571090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f88eee43a55bb49419fdc77e5d0386d4604b3458e69e7dcf0b8298e9571090->enter($__internal_e5f88eee43a55bb49419fdc77e5d0386d4604b3458e69e7dcf0b8298e9571090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_e5f88eee43a55bb49419fdc77e5d0386d4604b3458e69e7dcf0b8298e9571090->leave($__internal_e5f88eee43a55bb49419fdc77e5d0386d4604b3458e69e7dcf0b8298e9571090_prof);

        
        $__internal_e285e1f1011963da940b29e2e5c0e780e4fb35319e3c2584f80024aa99e5b0d6->leave($__internal_e285e1f1011963da940b29e2e5c0e780e4fb35319e3c2584f80024aa99e5b0d6_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_97797968f6a642f2698c7b0b9a145224bb922cd0561f22cdd08e5fb9cda60265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97797968f6a642f2698c7b0b9a145224bb922cd0561f22cdd08e5fb9cda60265->enter($__internal_97797968f6a642f2698c7b0b9a145224bb922cd0561f22cdd08e5fb9cda60265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cc07a7791f5d72e6047d542112b233f14e6137c0cf22c7501e79273c6352609f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc07a7791f5d72e6047d542112b233f14e6137c0cf22c7501e79273c6352609f->enter($__internal_cc07a7791f5d72e6047d542112b233f14e6137c0cf22c7501e79273c6352609f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_cc07a7791f5d72e6047d542112b233f14e6137c0cf22c7501e79273c6352609f->leave($__internal_cc07a7791f5d72e6047d542112b233f14e6137c0cf22c7501e79273c6352609f_prof);

        
        $__internal_97797968f6a642f2698c7b0b9a145224bb922cd0561f22cdd08e5fb9cda60265->leave($__internal_97797968f6a642f2698c7b0b9a145224bb922cd0561f22cdd08e5fb9cda60265_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_31dd5acb0bbc9036278cd939f6d7c6a1d968d17dabbc3ffe2541a69c8e5c923f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31dd5acb0bbc9036278cd939f6d7c6a1d968d17dabbc3ffe2541a69c8e5c923f->enter($__internal_31dd5acb0bbc9036278cd939f6d7c6a1d968d17dabbc3ffe2541a69c8e5c923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_017bf0b6d095c1ec3b557faeda9a6df1d783badd3016753fd45c5d962ce141bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017bf0b6d095c1ec3b557faeda9a6df1d783badd3016753fd45c5d962ce141bf->enter($__internal_017bf0b6d095c1ec3b557faeda9a6df1d783badd3016753fd45c5d962ce141bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_017bf0b6d095c1ec3b557faeda9a6df1d783badd3016753fd45c5d962ce141bf->leave($__internal_017bf0b6d095c1ec3b557faeda9a6df1d783badd3016753fd45c5d962ce141bf_prof);

        
        $__internal_31dd5acb0bbc9036278cd939f6d7c6a1d968d17dabbc3ffe2541a69c8e5c923f->leave($__internal_31dd5acb0bbc9036278cd939f6d7c6a1d968d17dabbc3ffe2541a69c8e5c923f_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c3868138abb46f7cc1e1b34d0a98b6543e1c76114f6cd7435c791a93793fb70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3868138abb46f7cc1e1b34d0a98b6543e1c76114f6cd7435c791a93793fb70a->enter($__internal_c3868138abb46f7cc1e1b34d0a98b6543e1c76114f6cd7435c791a93793fb70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7ce72675fd86f877dff6a1cb416c793d378a2a2a008ade9ab041d11c037c830f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce72675fd86f877dff6a1cb416c793d378a2a2a008ade9ab041d11c037c830f->enter($__internal_7ce72675fd86f877dff6a1cb416c793d378a2a2a008ade9ab041d11c037c830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_7ce72675fd86f877dff6a1cb416c793d378a2a2a008ade9ab041d11c037c830f->leave($__internal_7ce72675fd86f877dff6a1cb416c793d378a2a2a008ade9ab041d11c037c830f_prof);

        
        $__internal_c3868138abb46f7cc1e1b34d0a98b6543e1c76114f6cd7435c791a93793fb70a->leave($__internal_c3868138abb46f7cc1e1b34d0a98b6543e1c76114f6cd7435c791a93793fb70a_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b61a758abfd0cd32034f6c30b305ba2b1c15bb7291c098c0d77a19e358256e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61a758abfd0cd32034f6c30b305ba2b1c15bb7291c098c0d77a19e358256e00->enter($__internal_b61a758abfd0cd32034f6c30b305ba2b1c15bb7291c098c0d77a19e358256e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7f13bd5533a4d0a6678c9ff673465253a5b96865a7160d47ca9f4444bcc9b806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f13bd5533a4d0a6678c9ff673465253a5b96865a7160d47ca9f4444bcc9b806->enter($__internal_7f13bd5533a4d0a6678c9ff673465253a5b96865a7160d47ca9f4444bcc9b806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7f13bd5533a4d0a6678c9ff673465253a5b96865a7160d47ca9f4444bcc9b806->leave($__internal_7f13bd5533a4d0a6678c9ff673465253a5b96865a7160d47ca9f4444bcc9b806_prof);

        
        $__internal_b61a758abfd0cd32034f6c30b305ba2b1c15bb7291c098c0d77a19e358256e00->leave($__internal_b61a758abfd0cd32034f6c30b305ba2b1c15bb7291c098c0d77a19e358256e00_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6d612a51b05e0f33ff3fb049abb2eabd9b70fbe258113412943825aec2722bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d612a51b05e0f33ff3fb049abb2eabd9b70fbe258113412943825aec2722bdc->enter($__internal_6d612a51b05e0f33ff3fb049abb2eabd9b70fbe258113412943825aec2722bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_115cbe7fe264916234b2b660b145ec05df466752be8cf2866c8a7d1de1a00483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115cbe7fe264916234b2b660b145ec05df466752be8cf2866c8a7d1de1a00483->enter($__internal_115cbe7fe264916234b2b660b145ec05df466752be8cf2866c8a7d1de1a00483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_115cbe7fe264916234b2b660b145ec05df466752be8cf2866c8a7d1de1a00483->leave($__internal_115cbe7fe264916234b2b660b145ec05df466752be8cf2866c8a7d1de1a00483_prof);

        
        $__internal_6d612a51b05e0f33ff3fb049abb2eabd9b70fbe258113412943825aec2722bdc->leave($__internal_6d612a51b05e0f33ff3fb049abb2eabd9b70fbe258113412943825aec2722bdc_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ab6986a572414dd98f8846f8472e654a33bdc945e6c483f9c530290b8f3b1278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6986a572414dd98f8846f8472e654a33bdc945e6c483f9c530290b8f3b1278->enter($__internal_ab6986a572414dd98f8846f8472e654a33bdc945e6c483f9c530290b8f3b1278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bc86c8bb2603ded25e90523306fb2aa8229e11a14a093c48fe7aa733e7d03877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc86c8bb2603ded25e90523306fb2aa8229e11a14a093c48fe7aa733e7d03877->enter($__internal_bc86c8bb2603ded25e90523306fb2aa8229e11a14a093c48fe7aa733e7d03877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bc86c8bb2603ded25e90523306fb2aa8229e11a14a093c48fe7aa733e7d03877->leave($__internal_bc86c8bb2603ded25e90523306fb2aa8229e11a14a093c48fe7aa733e7d03877_prof);

        
        $__internal_ab6986a572414dd98f8846f8472e654a33bdc945e6c483f9c530290b8f3b1278->leave($__internal_ab6986a572414dd98f8846f8472e654a33bdc945e6c483f9c530290b8f3b1278_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5b33a363bcf3bdff3ea63658672fe528a4505e1de8189d4aaa6820d32fecb76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b33a363bcf3bdff3ea63658672fe528a4505e1de8189d4aaa6820d32fecb76d->enter($__internal_5b33a363bcf3bdff3ea63658672fe528a4505e1de8189d4aaa6820d32fecb76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a1f160d4a316f4c674bba6f4a8e62d75e170c759ae4769485297a86474549c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f160d4a316f4c674bba6f4a8e62d75e170c759ae4769485297a86474549c35->enter($__internal_a1f160d4a316f4c674bba6f4a8e62d75e170c759ae4769485297a86474549c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a1f160d4a316f4c674bba6f4a8e62d75e170c759ae4769485297a86474549c35->leave($__internal_a1f160d4a316f4c674bba6f4a8e62d75e170c759ae4769485297a86474549c35_prof);

        
        $__internal_5b33a363bcf3bdff3ea63658672fe528a4505e1de8189d4aaa6820d32fecb76d->leave($__internal_5b33a363bcf3bdff3ea63658672fe528a4505e1de8189d4aaa6820d32fecb76d_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_46bffcf8517e0245be147fcd9c7141bd09fb2cfc9bc83612152b486112475af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bffcf8517e0245be147fcd9c7141bd09fb2cfc9bc83612152b486112475af9->enter($__internal_46bffcf8517e0245be147fcd9c7141bd09fb2cfc9bc83612152b486112475af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0a2dea9b179d4ae957461e7b5c3e9e7087434214fe5ff36203eadae072fa1fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2dea9b179d4ae957461e7b5c3e9e7087434214fe5ff36203eadae072fa1fb1->enter($__internal_0a2dea9b179d4ae957461e7b5c3e9e7087434214fe5ff36203eadae072fa1fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_0a2dea9b179d4ae957461e7b5c3e9e7087434214fe5ff36203eadae072fa1fb1->leave($__internal_0a2dea9b179d4ae957461e7b5c3e9e7087434214fe5ff36203eadae072fa1fb1_prof);

        
        $__internal_46bffcf8517e0245be147fcd9c7141bd09fb2cfc9bc83612152b486112475af9->leave($__internal_46bffcf8517e0245be147fcd9c7141bd09fb2cfc9bc83612152b486112475af9_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_da5ea62262c7ca81208d1154f4662a7f5e7e76ee39abf7051baefc1021424c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5ea62262c7ca81208d1154f4662a7f5e7e76ee39abf7051baefc1021424c9c->enter($__internal_da5ea62262c7ca81208d1154f4662a7f5e7e76ee39abf7051baefc1021424c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4668ced2b11c62e3c344fa073d2fc722a62cd2407db6210dba3f8107c0737ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4668ced2b11c62e3c344fa073d2fc722a62cd2407db6210dba3f8107c0737ff4->enter($__internal_4668ced2b11c62e3c344fa073d2fc722a62cd2407db6210dba3f8107c0737ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_4668ced2b11c62e3c344fa073d2fc722a62cd2407db6210dba3f8107c0737ff4->leave($__internal_4668ced2b11c62e3c344fa073d2fc722a62cd2407db6210dba3f8107c0737ff4_prof);

        
        $__internal_da5ea62262c7ca81208d1154f4662a7f5e7e76ee39abf7051baefc1021424c9c->leave($__internal_da5ea62262c7ca81208d1154f4662a7f5e7e76ee39abf7051baefc1021424c9c_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f21b3e30602079ac9f6d07b4ec47d79dbe7f7d26f9c8cce6efa78b9e9c8e010e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21b3e30602079ac9f6d07b4ec47d79dbe7f7d26f9c8cce6efa78b9e9c8e010e->enter($__internal_f21b3e30602079ac9f6d07b4ec47d79dbe7f7d26f9c8cce6efa78b9e9c8e010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c2f9c1fbe62e9c55186062d8cd10723cf31386ea2a3e2a24bbdfde05e78c2eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f9c1fbe62e9c55186062d8cd10723cf31386ea2a3e2a24bbdfde05e78c2eba->enter($__internal_c2f9c1fbe62e9c55186062d8cd10723cf31386ea2a3e2a24bbdfde05e78c2eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_c2f9c1fbe62e9c55186062d8cd10723cf31386ea2a3e2a24bbdfde05e78c2eba->leave($__internal_c2f9c1fbe62e9c55186062d8cd10723cf31386ea2a3e2a24bbdfde05e78c2eba_prof);

        
        $__internal_f21b3e30602079ac9f6d07b4ec47d79dbe7f7d26f9c8cce6efa78b9e9c8e010e->leave($__internal_f21b3e30602079ac9f6d07b4ec47d79dbe7f7d26f9c8cce6efa78b9e9c8e010e_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_984b39aa8c821e0a8c105cb757fa0e3952d680dea837b92e6a5009b6ae2dcc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984b39aa8c821e0a8c105cb757fa0e3952d680dea837b92e6a5009b6ae2dcc78->enter($__internal_984b39aa8c821e0a8c105cb757fa0e3952d680dea837b92e6a5009b6ae2dcc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f5614b95caa7deee73ea4f0af9ba48592e989050b6d9b879ce11f408d19d4ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5614b95caa7deee73ea4f0af9ba48592e989050b6d9b879ce11f408d19d4ab0->enter($__internal_f5614b95caa7deee73ea4f0af9ba48592e989050b6d9b879ce11f408d19d4ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f5614b95caa7deee73ea4f0af9ba48592e989050b6d9b879ce11f408d19d4ab0->leave($__internal_f5614b95caa7deee73ea4f0af9ba48592e989050b6d9b879ce11f408d19d4ab0_prof);

        
        $__internal_984b39aa8c821e0a8c105cb757fa0e3952d680dea837b92e6a5009b6ae2dcc78->leave($__internal_984b39aa8c821e0a8c105cb757fa0e3952d680dea837b92e6a5009b6ae2dcc78_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bbf265112bd7eab16d513c5bfe5ed03664e01b38cfec6ce58c4b148599759145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf265112bd7eab16d513c5bfe5ed03664e01b38cfec6ce58c4b148599759145->enter($__internal_bbf265112bd7eab16d513c5bfe5ed03664e01b38cfec6ce58c4b148599759145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9f6245d557c0e3d3b3c3d9767824feb8e0980fc3740e50f181a4bfb5895467c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6245d557c0e3d3b3c3d9767824feb8e0980fc3740e50f181a4bfb5895467c9->enter($__internal_9f6245d557c0e3d3b3c3d9767824feb8e0980fc3740e50f181a4bfb5895467c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9f6245d557c0e3d3b3c3d9767824feb8e0980fc3740e50f181a4bfb5895467c9->leave($__internal_9f6245d557c0e3d3b3c3d9767824feb8e0980fc3740e50f181a4bfb5895467c9_prof);

        
        $__internal_bbf265112bd7eab16d513c5bfe5ed03664e01b38cfec6ce58c4b148599759145->leave($__internal_bbf265112bd7eab16d513c5bfe5ed03664e01b38cfec6ce58c4b148599759145_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4ae987d43ce34f309787b732dba780769f9d2c8c3806c29c134ac3aafa707f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae987d43ce34f309787b732dba780769f9d2c8c3806c29c134ac3aafa707f1d->enter($__internal_4ae987d43ce34f309787b732dba780769f9d2c8c3806c29c134ac3aafa707f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_be218f474115948d879c2882943f05fadc3e65948ec81a2f080ffa7bd30845db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be218f474115948d879c2882943f05fadc3e65948ec81a2f080ffa7bd30845db->enter($__internal_be218f474115948d879c2882943f05fadc3e65948ec81a2f080ffa7bd30845db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_be218f474115948d879c2882943f05fadc3e65948ec81a2f080ffa7bd30845db->leave($__internal_be218f474115948d879c2882943f05fadc3e65948ec81a2f080ffa7bd30845db_prof);

        
        $__internal_4ae987d43ce34f309787b732dba780769f9d2c8c3806c29c134ac3aafa707f1d->leave($__internal_4ae987d43ce34f309787b732dba780769f9d2c8c3806c29c134ac3aafa707f1d_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_09704ca3ec90c6a75196a397401d005a5ce4d71a923c8ffe3ec38ccc2498710f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09704ca3ec90c6a75196a397401d005a5ce4d71a923c8ffe3ec38ccc2498710f->enter($__internal_09704ca3ec90c6a75196a397401d005a5ce4d71a923c8ffe3ec38ccc2498710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_07b38db97eabed9a7f101ff9624b7ceb446a2da8fbb5a1130ce6a3b723fb791c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b38db97eabed9a7f101ff9624b7ceb446a2da8fbb5a1130ce6a3b723fb791c->enter($__internal_07b38db97eabed9a7f101ff9624b7ceb446a2da8fbb5a1130ce6a3b723fb791c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_07b38db97eabed9a7f101ff9624b7ceb446a2da8fbb5a1130ce6a3b723fb791c->leave($__internal_07b38db97eabed9a7f101ff9624b7ceb446a2da8fbb5a1130ce6a3b723fb791c_prof);

        
        $__internal_09704ca3ec90c6a75196a397401d005a5ce4d71a923c8ffe3ec38ccc2498710f->leave($__internal_09704ca3ec90c6a75196a397401d005a5ce4d71a923c8ffe3ec38ccc2498710f_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c24059ac7ec00c0d2645f641afee374ab71267c54d2262750dd6a93999e95358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24059ac7ec00c0d2645f641afee374ab71267c54d2262750dd6a93999e95358->enter($__internal_c24059ac7ec00c0d2645f641afee374ab71267c54d2262750dd6a93999e95358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_39f363969e12225548a0a08923ce60ce24cda4a66a75856905563f0a32b2d9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f363969e12225548a0a08923ce60ce24cda4a66a75856905563f0a32b2d9f4->enter($__internal_39f363969e12225548a0a08923ce60ce24cda4a66a75856905563f0a32b2d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_39f363969e12225548a0a08923ce60ce24cda4a66a75856905563f0a32b2d9f4->leave($__internal_39f363969e12225548a0a08923ce60ce24cda4a66a75856905563f0a32b2d9f4_prof);

        
        $__internal_c24059ac7ec00c0d2645f641afee374ab71267c54d2262750dd6a93999e95358->leave($__internal_c24059ac7ec00c0d2645f641afee374ab71267c54d2262750dd6a93999e95358_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e507a766543402cd32923eb71594dc8311a3e245096957ab3e602fbc9420bd4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e507a766543402cd32923eb71594dc8311a3e245096957ab3e602fbc9420bd4a->enter($__internal_e507a766543402cd32923eb71594dc8311a3e245096957ab3e602fbc9420bd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8411a3a21eda40f587a3ea4a30fc6904b03b83e786f706487009c1a4632bed52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8411a3a21eda40f587a3ea4a30fc6904b03b83e786f706487009c1a4632bed52->enter($__internal_8411a3a21eda40f587a3ea4a30fc6904b03b83e786f706487009c1a4632bed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_8411a3a21eda40f587a3ea4a30fc6904b03b83e786f706487009c1a4632bed52->leave($__internal_8411a3a21eda40f587a3ea4a30fc6904b03b83e786f706487009c1a4632bed52_prof);

        
        $__internal_e507a766543402cd32923eb71594dc8311a3e245096957ab3e602fbc9420bd4a->leave($__internal_e507a766543402cd32923eb71594dc8311a3e245096957ab3e602fbc9420bd4a_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8e0c693dc99672601954f00ed79040e18f90179e1f01aedd8ad682f2098c66cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0c693dc99672601954f00ed79040e18f90179e1f01aedd8ad682f2098c66cd->enter($__internal_8e0c693dc99672601954f00ed79040e18f90179e1f01aedd8ad682f2098c66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_138b8c39525a084ff3562172ca7940cee766f6cbdf4e0476cf0bc490166ddec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138b8c39525a084ff3562172ca7940cee766f6cbdf4e0476cf0bc490166ddec4->enter($__internal_138b8c39525a084ff3562172ca7940cee766f6cbdf4e0476cf0bc490166ddec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_138b8c39525a084ff3562172ca7940cee766f6cbdf4e0476cf0bc490166ddec4->leave($__internal_138b8c39525a084ff3562172ca7940cee766f6cbdf4e0476cf0bc490166ddec4_prof);

        
        $__internal_8e0c693dc99672601954f00ed79040e18f90179e1f01aedd8ad682f2098c66cd->leave($__internal_8e0c693dc99672601954f00ed79040e18f90179e1f01aedd8ad682f2098c66cd_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
