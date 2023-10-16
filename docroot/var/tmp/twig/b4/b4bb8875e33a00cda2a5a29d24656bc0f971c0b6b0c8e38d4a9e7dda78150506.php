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

/* :blank:page.html.twig */
class __TwigTemplate_8675e38fec8686b75743b0b807fe2fdc8a549c4f5e48670b0fee9b13a3f01864 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . ($context["template"] ?? null)) . ":base.html.twig"), ":blank:page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"width: 600;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td>
                        <div data-slot-container=\"1\" style=\"min-height: 30px\">
                            <div data-slot=\"text\">
                                <br>
                                <h2>Hello there!</h2>
                                <br>
                                We haven't heard from you for a while...
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</div>
";
    }

    public function getTemplateName()
    {
        return ":blank:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":blank:page.html.twig", "/var/www/html/some-dir/docroot/themes/blank/html/page.html.twig");
    }
}
