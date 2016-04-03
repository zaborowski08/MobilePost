<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3379204bace644e405ee672b30f561bba9cc790eec63c33fafca49205a335ae4 extends Twig_Template
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
        $__internal_5f96da5a7a5e9436e147b7cf0b8c61680712871203088462c47edc58feadf357 = $this->env->getExtension("native_profiler");
        $__internal_5f96da5a7a5e9436e147b7cf0b8c61680712871203088462c47edc58feadf357->enter($__internal_5f96da5a7a5e9436e147b7cf0b8c61680712871203088462c47edc58feadf357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f96da5a7a5e9436e147b7cf0b8c61680712871203088462c47edc58feadf357->leave($__internal_5f96da5a7a5e9436e147b7cf0b8c61680712871203088462c47edc58feadf357_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4f44c5b9ebf4b7d1aab2dcb4450c19cd4ce6f2782d7e32138637c62103e71be = $this->env->getExtension("native_profiler");
        $__internal_e4f44c5b9ebf4b7d1aab2dcb4450c19cd4ce6f2782d7e32138637c62103e71be->enter($__internal_e4f44c5b9ebf4b7d1aab2dcb4450c19cd4ce6f2782d7e32138637c62103e71be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4f44c5b9ebf4b7d1aab2dcb4450c19cd4ce6f2782d7e32138637c62103e71be->leave($__internal_e4f44c5b9ebf4b7d1aab2dcb4450c19cd4ce6f2782d7e32138637c62103e71be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b57d2dff1c2c68e665b24ed355ec1ae535381f2e47ee9401654347a344055f18 = $this->env->getExtension("native_profiler");
        $__internal_b57d2dff1c2c68e665b24ed355ec1ae535381f2e47ee9401654347a344055f18->enter($__internal_b57d2dff1c2c68e665b24ed355ec1ae535381f2e47ee9401654347a344055f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b57d2dff1c2c68e665b24ed355ec1ae535381f2e47ee9401654347a344055f18->leave($__internal_b57d2dff1c2c68e665b24ed355ec1ae535381f2e47ee9401654347a344055f18_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e50c7ae5ad3bf08fd7dcaa0711d9a50d36e4351adba26d4e6e09936a1552f11c = $this->env->getExtension("native_profiler");
        $__internal_e50c7ae5ad3bf08fd7dcaa0711d9a50d36e4351adba26d4e6e09936a1552f11c->enter($__internal_e50c7ae5ad3bf08fd7dcaa0711d9a50d36e4351adba26d4e6e09936a1552f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e50c7ae5ad3bf08fd7dcaa0711d9a50d36e4351adba26d4e6e09936a1552f11c->leave($__internal_e50c7ae5ad3bf08fd7dcaa0711d9a50d36e4351adba26d4e6e09936a1552f11c_prof);

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
