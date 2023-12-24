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

/* footer.html.twig */
class __TwigTemplate_a5feb536c7c0c0bb73b78524bf8b0f2f078b16f6f2fdc8372b59f5262d38d217 extends Template
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
        echo "<footer class=\"container mx-auto max-w-4xl mt-four\">
    <div class=\"mb-one\">
        <a href=\"https://github.com/anillkas\"><strong>Github</strong></a>
        <a href=\"https://www.linkedin.com/in/anilkas/\"><strong>Linkedin</strong></a> © 2023
    </div>
</footer>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("prism.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317\"
        integrity=\"sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==\"
        data-cf-beacon='{\"rayId\":\"839fee045ea60071\",\"version\":\"2023.10.0\",\"r\":1,\"token\":\"2f059cbf58a24e59854ee0884c97b166\",\"b\":1}'
        crossorigin=\"anonymous\"></script>
</body>

</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/var/www/html/templates/footer.html.twig");
    }
}
