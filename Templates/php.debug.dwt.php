<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="ie iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7) ]><html class="ie" lang="en"><![endif]-->
<!--[if !(IEMobile) | !(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<?php virtual("/wdn/templates_3.1/includes/metanfavico.html"); ?>
<!--
    Membership and regular participation in the UNL Web Developer Network
    is required to use the UNL templates. Visit the WDN site at
    http://wdn.unl.edu/. Click the WDN Registry link to log in and
    register your unl.edu site.
    All UNL template code is the property of the UNL Web Developer Network.
    The code seen in a source code view is not, and may not be used as, a
    template. You may not use this code, a reverse-engineered version of
    this code, or its associated visual presentation in whole or in part to
    create a derivative work.
    This message may not be removed from any pages based on the UNL site template.

    $Id$
-->
<?php virtual("/wdn/templates_3.1/includes/scriptsandstyles_debug.html"); ?>
<!-- TemplateBeginEditable name="doctitle" -->
<title>Use a descriptive page title | Optional Site Title (use for context) | University of Nebraska&ndash;Lincoln</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- Place optional header elements here -->

<!-- TemplateEndEditable -->
<!-- TemplateParam name="class" type="text" value="fixed debug" -->
</head>
<body class="@@(_document['class'])@@" data-version="$HTML_VERSION$">
    <nav class="skipnav" role="navigation">
        <a class="skipnav" href="#maincontent">Skip Navigation</a>
    </nav>
    <div id="wdn_wrapper">
        <header id="header" role="banner">
            <a id="logo" href="http://www.unl.edu/" title="UNL website">UNL</a>
            <span id="wdn_institution_title">University of Nebraska&ndash;Lincoln</span>
            <span id="wdn_site_title"><!-- TemplateBeginEditable name="titlegraphic" -->The Title of My Site<!-- TemplateEndEditable --></span>
            <?php virtual("/wdn/templates_3.1/includes/idm.html"); ?>
            <?php virtual("/wdn/templates_3.1/includes/wdnTools.html"); ?>
        </header>
        <div id="wdn_navigation_bar" role="navigation">
            <nav id="breadcrumbs">
                <!-- WDN: see glossary item 'breadcrumbs' -->
                <h3 class="wdn_list_descriptor hidden">Breadcrumbs</h3>
                <!-- TemplateBeginEditable name="breadcrumbs" -->
                <ul>
                    <li><a href="http://www.unl.edu/" title="University of Nebraska&ndash;Lincoln">UNL</a></li>
                    <li class="selected"><a href="#" title="Site Title">Site Title</a></li>
                    <li>Page Title</li>
                </ul>
                <!-- TemplateEndEditable -->
            </nav>
            <div id="wdn_navigation_wrapper">
                <nav id="navigation" role="navigation">
                    <h3 class="wdn_list_descriptor hidden">Navigation</h3>
                    <!-- TemplateBeginEditable name="navlinks" -->
                    <?php include "../sharedcode/navigation.html"; ?>
                    <!-- TemplateEndEditable -->
                </nav>
            </div>
        </div>
        <div id="wdn_content_wrapper" role="main">
            <div id="pagetitle">
                <!-- TemplateBeginEditable name="pagetitle" -->
                <h1>Please Title Your Page Here</h1>
                <!-- TemplateEndEditable -->
            </div>
            <div id="maincontent">
                <!--THIS IS THE MAIN CONTENT AREA; WDN: see glossary item 'main content area' -->
                <!-- TemplateBeginEditable name="maincontentarea" -->
                <h2>This is a blank page</h2>
                <p>Impress your audience with awesome content!</p>
                <!-- TemplateEndEditable -->
                <div class="clear"></div>
                <?php virtual("/wdn/templates_3.1/includes/noscript.html"); ?>
                <!--THIS IS THE END OF THE MAIN CONTENT AREA.-->
            </div>
        </div>
        <footer id="footer">
            <div id="footer_floater"></div>
            <div class="footer_col" id="wdn_footer_feedback">
                <?php virtual("/wdn/templates_3.1/includes/feedback.html"); ?>
            </div>
            <div class="footer_col" id="wdn_footer_related">
                <!-- TemplateBeginEditable name="leftcollinks" -->
                <?php include "../sharedcode/relatedLinks.html"; ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_contact">
                <!-- TemplateBeginEditable name="contactinfo" -->
                <?php include "../sharedcode/footerContactInfo.html"; ?>
                <!-- TemplateEndEditable --></div>
            <div class="footer_col" id="wdn_footer_share">
                <?php virtual("/wdn/templates_3.1/includes/socialmediashare.html"); ?>
            </div>
            <!-- TemplateBeginEditable name="optionalfooter" -->
            <!-- TemplateEndEditable -->
            <div id="wdn_copyright">
                <div>
                    <!-- TemplateBeginEditable name="footercontent" -->
                    <?php include "../sharedcode/footer.html"; ?>
                    <!-- TemplateEndEditable -->
                    <?php virtual("/wdn/templates_3.1/includes/wdn.html"); ?>
                </div>
                <?php virtual("/wdn/templates_3.1/includes/logos.html"); ?>
            </div>
        </footer>
    </div>
</body>
</html>
