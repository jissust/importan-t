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

/* hover/template/common/language.twig */
class __TwigTemplate_9ef4761c65535c99c27fedd6ad2d05eb34c9429a058141e42aeeedf9e52e02d0 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
   <ul class=\"lang\">
\t    <li class=\"dropdown-triangle\"></li>
     
    
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 9
                echo "        <li>
          <button class=\"language-select\" type=\"button\" name=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 10);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10);
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "      </ul>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 15
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "hover/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 13,  57 => 10,  54 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hover/template/common/language.twig", "");
    }
}
