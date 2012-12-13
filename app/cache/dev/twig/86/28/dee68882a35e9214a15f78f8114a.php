<?php

/* powergenBundle:Establishment:show.html.twig */
class __TwigTemplate_8628dee68882a35e9214a15f78f8114a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Establishment</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Name</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lane</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lane"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Street</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "street"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Village</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "village"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Subdistrict</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subdistrict"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>District</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "district"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Province</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "province"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Region</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "region"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Poscode</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poscode"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telnumber</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Faxnumber</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "faxNumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lat</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lat"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Lng</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lng"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Location</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Idnumber</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idnumber"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Id</th>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("establishment"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("establishment_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("establishment_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "powergenBundle:Establishment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 89,  165 => 88,  157 => 83,  149 => 78,  139 => 71,  132 => 67,  125 => 63,  118 => 59,  111 => 55,  104 => 51,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  69 => 31,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  34 => 11,  27 => 7,  19 => 1,);
    }
}
