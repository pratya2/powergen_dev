<?php

/* powergenBundle:Transaction:index.html.twig */
class __TwigTemplate_cc1e9ee114a1ac13dc0cd08621ea012c extends Twig_Template
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
        echo "<h1>Transaction list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Powerhouseid</th>
            <th>Transactiondate</th>
            <th>Businesstype</th>
            <th>Transactioncompletedate</th>
            <th>Transactionverifydate</th>
            <th>Iscertificate</th>
            <th>Isproxy</th>
            <th>Isidcard</th>
            <th>Ismap</th>
            <th>Ischartlocation</th>
            <th>Ischartcapacity</th>
            <th>Ispower</th>
            <th>Islatlong</th>
            <th>Islicense</th>
            <th>Id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "        <tr>
            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "powerhouseId"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 28
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionDate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "businessType"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionCompleteDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionCompleteDate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 31
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionVerifyDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transactionVerifyDate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iscertificate"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isproxy"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isidcard"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ismap"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ischartlocation"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ischartcapacity"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ispower"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "islatlong"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "islicense"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "powergenBundle:Transaction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 59,  141 => 54,  129 => 48,  123 => 45,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  74 => 31,  68 => 30,  64 => 29,  58 => 28,  52 => 27,  49 => 26,  45 => 25,  19 => 1,);
    }
}
