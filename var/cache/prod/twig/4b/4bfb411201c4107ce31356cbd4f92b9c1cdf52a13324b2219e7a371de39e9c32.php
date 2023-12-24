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

/* index.html.twig */
class __TwigTemplate_62c82680a6839d3e27cd42a1f14114ae23bf28b34d4fe248c9af6726f59df1ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'indexContent' => [$this, 'block_indexContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_indexContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div>

        <section id=\"hero\" class=\"-mt-three py-36 mb-six -mx-2\">
            <div class=\"container mx-auto max-w-4xl\">
                <span class=\"text-6xl bold\">{JSON} Rest API</span>
                <h1 class=\"mt-two text-lg\">Test ve Prototip için kullanılabilecek Fake REST API</h1>
            </div>
        </section>

        <section class=\"container mx-auto max-w-4xl mb-four\">
            <h2 class=\"text-2xl mb-one\">Test Edin!</h2>
            <p>Kodda veya konsolda çalıştırın.</p>
            <pre class=\" language-javascript\"><code id=\"example\" class=\" language-javascript\">curl -X GET \"http://localhost:8000/users/1\"</code></pre>
            <button id=\"testEt\" class=\"
      bg-green-500
      hover:bg-green-700
      text-white
      font-bold
      py-quarter
      my-quarter
      px-4
      rounded
    \">
                Test Et
            </button>
            <pre class=\" language-javascript\"><code id=\"sonuc\" class=\" language-javascript\"><span class=\"token punctuation\">{</span><span class=\"token punctuation\">}</span></code></pre>
        </section>
        <main class=\"container mx-auto max-w-4xl\">
            <h2>Kaynaklar</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href=\"/posts\">/posts</a></td>
                    <td>100 posts</td>
                </tr>
                <tr>
                    <td><a href=\"/comments\">/comments</a></td>
                    <td>100 Comments</td>
                </tr>
                <tr>
                    <td><a href=\"/users\">/users</a></td>
                    <td>20 users</td>
                </tr>
                </tbody>
            </table>
            <p><strong>Not</strong>: Kaynaklar birbiriyle ilişkilidir. Daha fazla bilgi için <a href=\"/guide\">guide</a> bakabilirsiniz.</p>
            <h2>Routes</h2>
            <p>Bütün HTTP ve HTTPS isteklerinde kullanabilirsiniz.</p>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>GET</td>
                    <td><a href=\"/posts\">/posts</a></td>
                </tr>
                <tr>
                    <td>GET</td>
                    <td><a href=\"/posts/1\">/posts/1</a></td>
                </tr>
                <tr>
                    <td>GET</td>
                    <td><a href=\"/posts/1/comments\">/posts/1/comments</a></td>
                </tr>
                <tr>
                    <td>GET</td>
                    <td><a href=\"/users/1/posts\">/users/1/posts</a></td>
                </tr>
                <tr>
                    <td>POST</td>
                    <td>/posts</td>
                </tr>
                <tr>
                    <td>POST</td>
                    <td>/users</td>
                </tr>
                <tr>
                    <td>POST</td>
                    <td>/comments</td>
                </tr>
                <tr>
                    <td>PUT</td>
                    <td>/posts/1</td>
                </tr>
                <tr>
                    <td>PUT</td>
                    <td>/users/1</td>
                </tr>
                <tr>
                    <td>PUT</td>
                    <td>/comments/1</td>
                </tr>
                <tr>
                    <td>DELETE</td>
                    <td>/posts/1</td>
                </tr>
                <tr>
                    <td>DELETE</td>
                    <td>/users/1</td>
                </tr>
                <tr>
                    <td>DELETE</td>
                    <td>/comments/1</td>
                </tr>
                </tbody>
            </table>
            <p><strong>Not</strong>: örnekler için <a href=\"/guide\">guide</a> inceleyebilirisiniz.</p>
        </main>
    </div>

    <script>
        \$(function () {
            \$(\"#testEt\").on(\"click\", function () {
                \$.get({
                    url: \"/users/1\",
                    dataType: \"json\",
                    success: function (data) {
                        \$(\"#sonuc\").html(JSON.stringify(data));
                    },
                    error: function () {
                        alert(\"İstek başarısız!\");
                    }
                });
            });
        });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/var/www/html/templates/index.html.twig");
    }
}
