<?php

/* base.html.twig */
class __TwigTemplate_e7fdb6d8ffb974ea58591b681394e51698b31e7553ee9b48a910005832322fbb extends Twig_Template
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
        $__internal_489a3f210707ce105e58790325c3f8f97d896eefb4b3d2511a38092464bb7ceb = $this->env->getExtension("native_profiler");
        $__internal_489a3f210707ce105e58790325c3f8f97d896eefb4b3d2511a38092464bb7ceb->enter($__internal_489a3f210707ce105e58790325c3f8f97d896eefb4b3d2511a38092464bb7ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_489a3f210707ce105e58790325c3f8f97d896eefb4b3d2511a38092464bb7ceb->leave($__internal_489a3f210707ce105e58790325c3f8f97d896eefb4b3d2511a38092464bb7ceb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b8715daf15343cf865c9b7faa12123329dfd91d122b70aca6df832a3b141621 = $this->env->getExtension("native_profiler");
        $__internal_3b8715daf15343cf865c9b7faa12123329dfd91d122b70aca6df832a3b141621->enter($__internal_3b8715daf15343cf865c9b7faa12123329dfd91d122b70aca6df832a3b141621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3b8715daf15343cf865c9b7faa12123329dfd91d122b70aca6df832a3b141621->leave($__internal_3b8715daf15343cf865c9b7faa12123329dfd91d122b70aca6df832a3b141621_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b7dd78ac928dd8d4f0b46114a7e9850c1e56dbb90e2007f73b8c995752ede10 = $this->env->getExtension("native_profiler");
        $__internal_0b7dd78ac928dd8d4f0b46114a7e9850c1e56dbb90e2007f73b8c995752ede10->enter($__internal_0b7dd78ac928dd8d4f0b46114a7e9850c1e56dbb90e2007f73b8c995752ede10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b7dd78ac928dd8d4f0b46114a7e9850c1e56dbb90e2007f73b8c995752ede10->leave($__internal_0b7dd78ac928dd8d4f0b46114a7e9850c1e56dbb90e2007f73b8c995752ede10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce844cbeafa532665bf7207ad8c45b5adedf99323c47c8b0a61834274b98c2ba = $this->env->getExtension("native_profiler");
        $__internal_ce844cbeafa532665bf7207ad8c45b5adedf99323c47c8b0a61834274b98c2ba->enter($__internal_ce844cbeafa532665bf7207ad8c45b5adedf99323c47c8b0a61834274b98c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce844cbeafa532665bf7207ad8c45b5adedf99323c47c8b0a61834274b98c2ba->leave($__internal_ce844cbeafa532665bf7207ad8c45b5adedf99323c47c8b0a61834274b98c2ba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cdb8329d6b52afbec6797e94f90bb530e8fff6d9dde1945f3911ce2917042cd = $this->env->getExtension("native_profiler");
        $__internal_1cdb8329d6b52afbec6797e94f90bb530e8fff6d9dde1945f3911ce2917042cd->enter($__internal_1cdb8329d6b52afbec6797e94f90bb530e8fff6d9dde1945f3911ce2917042cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1cdb8329d6b52afbec6797e94f90bb530e8fff6d9dde1945f3911ce2917042cd->leave($__internal_1cdb8329d6b52afbec6797e94f90bb530e8fff6d9dde1945f3911ce2917042cd_prof);

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
