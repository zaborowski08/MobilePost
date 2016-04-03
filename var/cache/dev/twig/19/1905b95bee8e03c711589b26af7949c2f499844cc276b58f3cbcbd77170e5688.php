<?php

/* base.html.twig */
class __TwigTemplate_d57dd9bd475161c7756a14e6147bb451741b7f9560328e48e52310ee83c71eee extends Twig_Template
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
        $__internal_9c2c945d9ebed08a534b991c116053bbe4385b90990da6a49aaef35f7ea9f2fb = $this->env->getExtension("native_profiler");
        $__internal_9c2c945d9ebed08a534b991c116053bbe4385b90990da6a49aaef35f7ea9f2fb->enter($__internal_9c2c945d9ebed08a534b991c116053bbe4385b90990da6a49aaef35f7ea9f2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9c2c945d9ebed08a534b991c116053bbe4385b90990da6a49aaef35f7ea9f2fb->leave($__internal_9c2c945d9ebed08a534b991c116053bbe4385b90990da6a49aaef35f7ea9f2fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e24de4cc55fff0cabec05cb127b136edee1d022600608a13f6f7e95adea34137 = $this->env->getExtension("native_profiler");
        $__internal_e24de4cc55fff0cabec05cb127b136edee1d022600608a13f6f7e95adea34137->enter($__internal_e24de4cc55fff0cabec05cb127b136edee1d022600608a13f6f7e95adea34137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e24de4cc55fff0cabec05cb127b136edee1d022600608a13f6f7e95adea34137->leave($__internal_e24de4cc55fff0cabec05cb127b136edee1d022600608a13f6f7e95adea34137_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb44ad0d0b7388e05b670e938fb383581bb52e5b2a521a1c8141d67b3d54795c = $this->env->getExtension("native_profiler");
        $__internal_cb44ad0d0b7388e05b670e938fb383581bb52e5b2a521a1c8141d67b3d54795c->enter($__internal_cb44ad0d0b7388e05b670e938fb383581bb52e5b2a521a1c8141d67b3d54795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb44ad0d0b7388e05b670e938fb383581bb52e5b2a521a1c8141d67b3d54795c->leave($__internal_cb44ad0d0b7388e05b670e938fb383581bb52e5b2a521a1c8141d67b3d54795c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_13abad424f11ec0ac6f24770f6dcc713a3c541e302ec8f391b116a8f21b2f914 = $this->env->getExtension("native_profiler");
        $__internal_13abad424f11ec0ac6f24770f6dcc713a3c541e302ec8f391b116a8f21b2f914->enter($__internal_13abad424f11ec0ac6f24770f6dcc713a3c541e302ec8f391b116a8f21b2f914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13abad424f11ec0ac6f24770f6dcc713a3c541e302ec8f391b116a8f21b2f914->leave($__internal_13abad424f11ec0ac6f24770f6dcc713a3c541e302ec8f391b116a8f21b2f914_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13078a7450422d47e5e6d97acc202450185fbeeb9e27a9e32405b403ba280822 = $this->env->getExtension("native_profiler");
        $__internal_13078a7450422d47e5e6d97acc202450185fbeeb9e27a9e32405b403ba280822->enter($__internal_13078a7450422d47e5e6d97acc202450185fbeeb9e27a9e32405b403ba280822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13078a7450422d47e5e6d97acc202450185fbeeb9e27a9e32405b403ba280822->leave($__internal_13078a7450422d47e5e6d97acc202450185fbeeb9e27a9e32405b403ba280822_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
