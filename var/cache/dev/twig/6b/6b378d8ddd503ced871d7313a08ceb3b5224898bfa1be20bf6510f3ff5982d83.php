<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_98f965d3e9e0dfaf2efcfa7797b8241222f517a01a9fd89fdf056b1832a7193c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549a0f63f10a4be43ea0a2740460e4ded4ac52eac5e129ee29f5a3bc7f9ac8d5 = $this->env->getExtension("native_profiler");
        $__internal_549a0f63f10a4be43ea0a2740460e4ded4ac52eac5e129ee29f5a3bc7f9ac8d5->enter($__internal_549a0f63f10a4be43ea0a2740460e4ded4ac52eac5e129ee29f5a3bc7f9ac8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549a0f63f10a4be43ea0a2740460e4ded4ac52eac5e129ee29f5a3bc7f9ac8d5->leave($__internal_549a0f63f10a4be43ea0a2740460e4ded4ac52eac5e129ee29f5a3bc7f9ac8d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b84d3371c3a7cf29751f73283d53029b14e3f153cdd7fa32f2c56819b177bd97 = $this->env->getExtension("native_profiler");
        $__internal_b84d3371c3a7cf29751f73283d53029b14e3f153cdd7fa32f2c56819b177bd97->enter($__internal_b84d3371c3a7cf29751f73283d53029b14e3f153cdd7fa32f2c56819b177bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b84d3371c3a7cf29751f73283d53029b14e3f153cdd7fa32f2c56819b177bd97->leave($__internal_b84d3371c3a7cf29751f73283d53029b14e3f153cdd7fa32f2c56819b177bd97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8e427fe758f45fe85f6992e98e9f291eeaf02210dba82fad3aa01d6c01f3eee = $this->env->getExtension("native_profiler");
        $__internal_b8e427fe758f45fe85f6992e98e9f291eeaf02210dba82fad3aa01d6c01f3eee->enter($__internal_b8e427fe758f45fe85f6992e98e9f291eeaf02210dba82fad3aa01d6c01f3eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8e427fe758f45fe85f6992e98e9f291eeaf02210dba82fad3aa01d6c01f3eee->leave($__internal_b8e427fe758f45fe85f6992e98e9f291eeaf02210dba82fad3aa01d6c01f3eee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46636f224686e8b566f811076cec226c30d834bb08184fa3adc374dec5880e16 = $this->env->getExtension("native_profiler");
        $__internal_46636f224686e8b566f811076cec226c30d834bb08184fa3adc374dec5880e16->enter($__internal_46636f224686e8b566f811076cec226c30d834bb08184fa3adc374dec5880e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46636f224686e8b566f811076cec226c30d834bb08184fa3adc374dec5880e16->leave($__internal_46636f224686e8b566f811076cec226c30d834bb08184fa3adc374dec5880e16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
