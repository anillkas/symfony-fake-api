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

/* header.html.twig */
class __TwigTemplate_f258856e3b44dd69222cf25ace51b939836c2bca68084de183ad2ccd33af00f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"tr\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/>
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("prism-tomorrow.min.css"), "html", null, true);
        echo "\"/>
    <title>anillkas - Free Fake REST API</title>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>


</head>
<body class=\"px-2\">
<header class=\" container
        mx-auto
        max-w-4xl
        flex flex-col
        md:flex-row justify-between py-one mb-three\">
    <h1>
        <a href=\"/\" class=\"font-bold no-underline\">anillkas - Fake API</a>
    </h1>
    <nav>
        <ul class=\"flex\">
            <li><a href=\"/guide\" class=\"mr-4 no-underline\">Guide</a></li>
            <li>
                <a href=\"https://linux.tc\" class=\"mr-4 no-underline\">Blog</a>
            </li>
        </ul>
    </nav>
</header>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
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
        return array (  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/var/www/html/templates/header.html.twig");
    }
}
