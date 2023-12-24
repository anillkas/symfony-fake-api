<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_27d0b5b24e3aea874d99e0f8a0e2cae3249733236abf109dd560f79504516126 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'indexContent' => [$this, 'block_indexContent'],
            'guideContent' => [$this, 'block_guideContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("header.html.twig", "base.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('indexContent', $context, $blocks);
        // line 3
        $this->displayBlock('guideContent', $context, $blocks);
        // line 4
        $this->loadTemplate("footer.html.twig", "base.html.twig", 4)->display($context);
    }

    // line 2
    public function block_indexContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_guideContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  55 => 3,  49 => 2,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
