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

/* themes/custom/villa_agency_theme/templates/layout/page.html.twig */
class __TwigTemplate_6c6a53338bae3af12ced8881222affbc extends Template
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
        yield "<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader\">
  <div class=\"preloader-inner\">
    <span class=\"dot\"></span>
    <div class=\"dots\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class=\"sub-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-8\">
        <ul class=\"info\">
          <li><i class=\"fa fa-envelope\"></i> info@company.com</li>
          <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class=\"col-lg-4 col-md-4\">
        <ul class=\"social-links\">
          <li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
          <li><a href=\"https://x.com/minthu\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
          <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i></a></li>
          <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-12\">
              <nav class=\"main-nav\">
                  <!-- ***** Logo Start ***** -->
                  <a href=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\" class=\"logo\">
                      <h1>Villa</h1>
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 48), "html", null, true);
            yield "
                  ";
        } else {
            // line 50
            yield "                    <ul class=\"nav\">
                      <li><a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\" class=\"active\">Home</a></li>
                      <li><a href=\"#\">Properties</a></li>
                      <li><a href=\"#\">Property Details</a></li>
                      <li><a href=\"#\">Contact Us</a></li>
                      <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a></li>
                    </ul>
                  ";
        }
        // line 58
        yield "                  <a class=\x27menu-trigger\x27>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "  <div class=\"header-region\">
    ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), "html", null, true);
            yield "
  </div>
";
        }
        // line 74
        yield "
<main id=\"main-content\" role=\"main\">
  <div class=\"container my-5\">
    ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), "html", null, true);
        yield "
  </div>
</main>

<footer>
  <div class=\"container\">
    <div class=\"col-lg-8\">
      ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85), "html", null, true);
            yield "
      ";
        } else {
            // line 87
            yield "        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
      ";
        }
        // line 90
        yield "    </div>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/villa_agency_theme/templates/layout/page.html.twig";
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
        return array (  167 => 90,  162 => 87,  156 => 85,  154 => 84,  144 => 77,  139 => 74,  133 => 71,  130 => 70,  128 => 69,  115 => 58,  105 => 51,  102 => 50,  96 => 48,  94 => 47,  86 => 42,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/villa_agency_theme/templates/layout/page.html.twig", "/home/karnven/drupal_propertyproject/web/themes/custom/villa_agency_theme/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 47];
        static $filters = ["escape" => 48];
        static $functions = ["url" => 42];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
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
