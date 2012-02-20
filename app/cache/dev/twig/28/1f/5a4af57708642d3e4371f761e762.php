<?php

/* SandboxFrontendBundle:Default:index.html.twig */
class __TwigTemplate_281f5a4af57708642d3e4371f761e762 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "SandboxFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
