<?php

/* ApplicationSonataUserBundle::layout.html.twig */
class __TwigTemplate_ad57d6594e6b78ce04bd316cbb1d2826bfa9905af06bbde21383095cb8821442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_301a695eb28ab95984902506244b25c390896024dd7342cdc9aeb524f07373fc = $this->env->getExtension("native_profiler");
        $__internal_301a695eb28ab95984902506244b25c390896024dd7342cdc9aeb524f07373fc->enter($__internal_301a695eb28ab95984902506244b25c390896024dd7342cdc9aeb524f07373fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ";
        // line 2
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
<head>
    <meta charset=\"UTF-8\">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/select2/select2.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/select2/select2-bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/styles.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\">


    <script>
        window.SONATA_CONFIG = {
            CONFIRM_EXIT: true,
            USE_SELECT2: true,
            USE_ICHECK: true                };
        window.SONATA_TRANSLATIONS = {
            CONFIRM_EXIT:  'Vous\\x20avez\\x20effectu\\u00E9\\x20des\\x20modifications\\x20non\\x20sauvegard\\u00E9es.'
        };
    </script>

    <script src=\"/bundles/sonataadmin/vendor/jquery/dist/jquery.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/moment/min/moment.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js\"></script>
    <script src=\"/bundles/sonataadmin/jquery/jquery.form.js\"></script>
    <script src=\"/bundles/sonataadmin/jquery/jquery.confirmExit.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/select2/select2.min.js\"></script>
    <script src=\"/bundles/sonataadmin/App.js\"></script>
    <script src=\"/bundles/sonataadmin/Admin.js\"></script>


    <script src=\"/bundles/sonataadmin/vendor/select2/select2_locale_fr.js\"></script>
    <script src=\"/bundles/fosjsrouting/js/router.js\"></script>
    <script src=\"/js/routing?callback=fos.Router.setData\"></script>
    <title>
       YasminePress
    </title>
</head>
<body>

    ";
        // line 55
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 57
        echo "
</body></html>";
        
        $__internal_301a695eb28ab95984902506244b25c390896024dd7342cdc9aeb524f07373fc->leave($__internal_301a695eb28ab95984902506244b25c390896024dd7342cdc9aeb524f07373fc_prof);

    }

    // line 2
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_6c49320273ac56d5533ee282b8f6f394d3e9e5ecdf0274532af07fd010ae6bee = $this->env->getExtension("native_profiler");
        $__internal_6c49320273ac56d5533ee282b8f6f394d3e9e5ecdf0274532af07fd010ae6bee->enter($__internal_6c49320273ac56d5533ee282b8f6f394d3e9e5ecdf0274532af07fd010ae6bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_6c49320273ac56d5533ee282b8f6f394d3e9e5ecdf0274532af07fd010ae6bee->leave($__internal_6c49320273ac56d5533ee282b8f6f394d3e9e5ecdf0274532af07fd010ae6bee_prof);

    }

    // line 55
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_289420524b11534c2cbb4d89f809c28b24654bf1b7da4142b6618433e2151546 = $this->env->getExtension("native_profiler");
        $__internal_289420524b11534c2cbb4d89f809c28b24654bf1b7da4142b6618433e2151546->enter($__internal_289420524b11534c2cbb4d89f809c28b24654bf1b7da4142b6618433e2151546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 56
        echo "    ";
        
        $__internal_289420524b11534c2cbb4d89f809c28b24654bf1b7da4142b6618433e2151546->leave($__internal_289420524b11534c2cbb4d89f809c28b24654bf1b7da4142b6618433e2151546_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 56,  105 => 55,  93 => 2,  85 => 57,  83 => 55,  27 => 2,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/* */
/* */
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css">*/
/*     <link rel="stylesheet" href="/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/select2/select2.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/select2/select2-bootstrap.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/css/styles.css">*/
/*     <link rel="stylesheet" href="/bundles/sonataadmin/css/layout.css">*/
/* */
/* */
/*     <script>*/
/*         window.SONATA_CONFIG = {*/
/*             CONFIRM_EXIT: true,*/
/*             USE_SELECT2: true,*/
/*             USE_ICHECK: true                };*/
/*         window.SONATA_TRANSLATIONS = {*/
/*             CONFIRM_EXIT:  'Vous\x20avez\x20effectu\u00E9\x20des\x20modifications\x20non\x20sauvegard\u00E9es.'*/
/*         };*/
/*     </script>*/
/* */
/*     <script src="/bundles/sonataadmin/vendor/jquery/dist/jquery.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js"></script>*/
/*     <script src="/bundles/sonatacore/vendor/moment/min/moment.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*     <script src="/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/jquery/jquery.form.js"></script>*/
/*     <script src="/bundles/sonataadmin/jquery/jquery.confirmExit.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/vendor/select2/select2.min.js"></script>*/
/*     <script src="/bundles/sonataadmin/App.js"></script>*/
/*     <script src="/bundles/sonataadmin/Admin.js"></script>*/
/* */
/* */
/*     <script src="/bundles/sonataadmin/vendor/select2/select2_locale_fr.js"></script>*/
/*     <script src="/bundles/fosjsrouting/js/router.js"></script>*/
/*     <script src="/js/routing?callback=fos.Router.setData"></script>*/
/*     <title>*/
/*        YasminePress*/
/*     </title>*/
/* </head>*/
/* <body>*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* */
/* </body></html>*/
