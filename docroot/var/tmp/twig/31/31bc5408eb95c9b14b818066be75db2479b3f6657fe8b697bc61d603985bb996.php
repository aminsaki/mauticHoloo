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

/* :blank:message.html.twig */
class __TwigTemplate_d1244bd5de77e747f438d716a660e0ac3469bbc6f61612bf9e6f0c173bf95c7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . ($context["template"] ?? null)) . ":base.html.twig"), ":blank:message.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" />
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div>
        ";
        // line 7
        echo ($context["message"] ?? null);
        echo "
        ";
        // line 8
        if (array_key_exists("content", $context)) {
            // line 9
            echo "        <div>";
            echo ($context["content"] ?? null);
            echo "</div>
        ";
        }
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":blank:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 9,  66 => 8,  62 => 7,  59 => 6,  55 => 5,  50 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":blank:message.html.twig", "/var/www/html/some-dir/docroot/themes/blank/html/message.html.twig");
    }
}
