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

/* :confirmme:email.mjml.twig */
class __TwigTemplate_d8f07f7663ad27c29e8a0bb9406c0e49ef218d26b0fc38d18d8d9e791f16e44c extends Template
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
        echo "<mjml>
  <mj-body>
    <mj-raw>
      <!-- Company Header -->
    </mj-raw>
    <mj-section background-color=\"#f0f0f0\">
      <mj-column>
        <mj-text font-style=\"bold\" font-size=\"24px\" color=\"#6f6f6f\">My Company</mj-text>
      </mj-column>
    </mj-section>
    <mj-raw>
      <!-- Confirm  text -->
    </mj-raw>
    <mj-section background-color=\"#fafafa\">
      <mj-column width=\"400px\">
        <mj-text font-style=\"bold\" font-size=\"22px\" font-family=\"Helvetica Neue\" color=\"#626262\">Please confirm your subscription!</mj-text>
        <mj-button background-color=\"#F45E43\" font-style=\"bold\" href=\"#\">Yes, subscribe me to the list</mj-button>
        <mj-text color=\"#525252\" font-size=\"16\" line-height=\"1.5\">If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation link above.<br/><br/>For questions about this list, please contact:
email@email.com</mj-text>
      </mj-column>
    </mj-section>
        <mj-raw>
      <!-- Confirm  text -->
    </mj-raw>
        <mj-section background-color=\"#fafafa\">
      <mj-column width=\"400px\">
        <mj-text color=\"#525252\" line-height=\"1.2\">
          <p>Company Name<br/>111 Amazing Street<br/>
            Beautiful City</p></mj-text>
        
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>";
    }

    public function getTemplateName()
    {
        return ":confirmme:email.mjml.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":confirmme:email.mjml.twig", "/var/www/html/some-dir/docroot/themes/confirmme/html/email.mjml.twig");
    }
}
