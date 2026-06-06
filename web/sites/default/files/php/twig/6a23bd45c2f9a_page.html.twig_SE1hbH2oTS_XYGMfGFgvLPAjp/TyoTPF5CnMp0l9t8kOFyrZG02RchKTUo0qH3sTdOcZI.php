<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/villaagency/templates/layout/page.html.twig */
class __TwigTemplate_41eabb76fec880f451e7c72e5690f299 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"system-messages-wrapper container mt-3\">
    ";
            // line 3
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 3), "html", null, true);
            yield "
  </div>
";
        }
        // line 6
        yield "
";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_header", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
          <ul class=\"info\">
            <li><i class=\"fa fa-envelope\"></i> info@company.com</li>
            <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class=\"col-lg-4 col-md-4\">
          ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_header", [], "any", false, false, true, 18), "html", null, true);
            yield "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 24
        yield "
";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_sticky", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "  <header class=\"header-area header-sticky\">
    ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_sticky", [], "any", false, false, true, 27), "html", null, true);
            yield "
  </header>
";
        }
        // line 30
        yield "
";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_banner", [], "any", false, false, true, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "  <div class=\"main-banner\">
    ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_banner", [], "any", false, false, true, 33), "html", null, true);
            yield "
  </div>
";
        }
        // line 36
        yield "
";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_section", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "  <div class=\"featured section\">
    ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_section", [], "any", false, false, true, 39), "html", null, true);
            yield "
  </div>
";
        }
        // line 42
        yield "
";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "video_section", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "  <div class=\"video section\">
    ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "video_section", [], "any", false, false, true, 45), "html", null, true);
            yield "
  </div>
";
        }
        // line 48
        yield "
";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "best_deal", [], "any", false, false, true, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "  <div class=\"section best-deal\">
    ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "best_deal", [], "any", false, false, true, 51), "html", null, true);
            yield "
  </div>
";
        }
        // line 54
        yield "
";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contact_section", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "  <div class=\"contact section\">
    ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contact_section", [], "any", false, false, true, 57), "html", null, true);
            yield "
  </div>
";
        }
        // line 60
        yield "
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  <div class=\"container layout-content\">
    ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), "html", null, true);
        yield "
  </div>
</main>

";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "  <footer>
    ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 70), "html", null, true);
            yield "
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/villaagency/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  182 => 70,  179 => 69,  177 => 68,  170 => 64,  164 => 60,  158 => 57,  155 => 56,  153 => 55,  150 => 54,  144 => 51,  141 => 50,  139 => 49,  136 => 48,  130 => 45,  127 => 44,  125 => 43,  122 => 42,  116 => 39,  113 => 38,  111 => 37,  108 => 36,  102 => 33,  99 => 32,  97 => 31,  94 => 30,  88 => 27,  85 => 26,  83 => 25,  80 => 24,  71 => 18,  59 => 8,  57 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/villaagency/templates/layout/page.html.twig", "/home/karnven/drupal_propertyproject/web/themes/custom/villaagency/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
