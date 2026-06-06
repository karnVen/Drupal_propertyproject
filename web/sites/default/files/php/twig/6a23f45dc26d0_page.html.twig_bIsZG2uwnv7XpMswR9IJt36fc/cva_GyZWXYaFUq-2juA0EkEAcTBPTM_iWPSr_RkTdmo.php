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

/* themes/custom/villaagency/templates/page.html.twig */
class __TwigTemplate_631c3c09781763e108c93f3105f7205b extends Template
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
        yield "<div class=\"sub-header\">
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
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_header", [], "any", false, false, true, 11), "html", null, true);
        yield "
      </div>
    </div>
  </div>
</div>
<header class=\"header-area header-sticky\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-12\">
              <nav class=\"main-nav\">
                  <a href=\"";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\" class=\"logo\">
                      <h1>Villa</h1>
                  </a>
                  ";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sticky_header", [], "any", false, false, true, 24), "html", null, true);
        yield "
                  <a class=\x27menu-trigger\x27>
                      <span>Menu</span>
                  </a>
                  </nav>
          </div>
      </div>
  </div>
</header>
";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_banner", [], "any", false, false, true, 33), "html", null, true);
        yield "

";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 35), "html", null, true);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/villaagency/templates/page.html.twig";
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
        return array (  91 => 35,  86 => 33,  74 => 24,  68 => 21,  55 => 11,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/villaagency/templates/page.html.twig", "/home/karnven/drupal_propertyproject/web/themes/custom/villaagency/templates/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 11];
        static $functions = ["url" => 21];

        try {
            $this->sandbox->checkSecurity(
                [],
                [0 => "escape"],
                [0 => "url"],
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
