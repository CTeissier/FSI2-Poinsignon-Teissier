<?php

/* @ESIEAPlatform/Advert/assets/header-second-bar.css */
class __TwigTemplate_e31c5ad5c5bb09b8b8971988b389c36ff421d5a28eac7b3d69cb4fb75929c5ed extends Twig_Template
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
        $__internal_41ae5394014ae23c374ddf55af8986ec54f21ec83485d4cb70a1dc71be6dc2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ae5394014ae23c374ddf55af8986ec54f21ec83485d4cb70a1dc71be6dc2e1->enter($__internal_41ae5394014ae23c374ddf55af8986ec54f21ec83485d4cb70a1dc71be6dc2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/assets/header-second-bar.css"));

        // line 1
        echo ".header-two-bars{
\tfont:13px Arial, Helvetica, sans-serif;
}

.header-two-bars .header-limiter{
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-two-bars h1{
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-two-bars h1 span {
\tcolor: #bc40df;
}

/* The first bar */

.header-two-bars .header-first-bar{
\tbackground-color:#292c2f;
\tbox-shadow:0 1px 1px #ccc;
\tpadding: 20px 40px;
\theight: 80px;
\tcolor: #ffffff;
\tbox-sizing: border-box;
}

.header-two-bars .header-first-bar a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-two-bars .header-first-bar nav {
\tfont:14px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: left;
\tmargin: 0 0 0 60px;
\tpadding: 0;
}

.header-two-bars .header-first-bar nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\topacity: 0.9;
\ttext-decoration:none;
\tline-height: 1;
}

.header-two-bars .header-first-bar nav a:hover {
\topacity: 1;
}

.header-two-bars .header-first-bar nav a.selected {
\tborder-radius: 2px;
\tbackground-color: #2B5773;
\tpadding: 8px 12px;
}

.header-two-bars .header-first-bar a.logout-button {
\tfont-size: 13px;
\tfont-weight: bold;
\tfloat: right;
\tborder-radius: 3px;
\tbackground-color: rgba(58, 60, 62, 0);
\theight: 40px;
\tpadding: 0 20px;
\tborder: 1px solid #5E6367;
\tline-height: 40px;
\tbox-sizing: border-box;
}


/* Second Bar */

.header-two-bars .header-second-bar {
\tbackground-color: #ffffff;
\tbox-shadow: 1px 3px 3px 0 rgba(0, 0, 0, 0.05);
\tpadding: 20px 40px;
}

.header-two-bars .header-second-bar h2 {
\tline-height: 20px;
\tmargin: 0;
\tfloat: left;
}

.header-two-bars .header-second-bar h2 a {
\tfont-size: 16px;
\tcolor: #4e5359;
\ttext-decoration: none;
}

.header-two-bars .header-second-bar nav {
\ttext-align: right;
\tline-height: 20px;
\tfont-size: 16px;
\ttext-overflow: ellipsis;
\toverflow: hidden;
\twhite-space: nowrap;
}

.header-two-bars .header-second-bar nav a {
\tdisplay: inline-block;
\tcolor: #4e5359;
\ttext-decoration: none;
}

.header-two-bars .header-second-bar nav i.fa {
\tcolor: #A9B7BF;
\tmargin: 0 4px 0 15px;
}


/*\tMaking the header responsive. Remove these styles, if
\tyou don't need the header to work on mobile devices. */

@media all and (max-width: 800px) {

\t.header-two-bars .header-second-bar nav{
\t\tfont-size:14px;
\t}

}

@media all and (max-width: 600px) {

\t.header-two-bars .header-first-bar{
\t\tpadding:20px 0;
\t}

\t.header-two-bars .header-first-bar h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 2px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-two-bars .header-first-bar nav {
\t\tmargin: 0;
\t\tfloat: none;
\t\tfont-size:13px;
\t}

\t.header-two-bars .header-first-bar nav a.selected {
\t\tpadding: 5px 8px;
\t}

\t.header-two-bars .header-first-bar .logout-button {
\t\tdisplay: none;
\t}

\t.header-two-bars .header-second-bar{
\t\tpadding: 20px 0;
\t}

\t.header-two-bars .header-second-bar h2{
\t\tfloat:none;
\t\tmargin: 0 0 12px;
\t}

\t.header-two-bars .header-second-bar nav{
\t\ttext-align: center;
\t}

\t.header-two-bars .header-second-bar nav a{
\t\tdisplay: block;
\t\tpadding: 8px;
\t}

\t.header-two-bars .header-second-bar nav i.fa{
\t\tmargin-left:0;
\t}
}";
        
        $__internal_41ae5394014ae23c374ddf55af8986ec54f21ec83485d4cb70a1dc71be6dc2e1->leave($__internal_41ae5394014ae23c374ddf55af8986ec54f21ec83485d4cb70a1dc71be6dc2e1_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/assets/header-second-bar.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return ".header-two-bars{
\tfont:13px Arial, Helvetica, sans-serif;
}

.header-two-bars .header-limiter{
\tmax-width: 1200px;
\ttext-align: center;
\tmargin: 0 auto;
}

/* Logo */

.header-two-bars h1{
\tfloat: left;
\tfont: normal 28px Cookie, Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tmargin: 0;
}

.header-two-bars h1 span {
\tcolor: #bc40df;
}

/* The first bar */

.header-two-bars .header-first-bar{
\tbackground-color:#292c2f;
\tbox-shadow:0 1px 1px #ccc;
\tpadding: 20px 40px;
\theight: 80px;
\tcolor: #ffffff;
\tbox-sizing: border-box;
}

.header-two-bars .header-first-bar a {
\tcolor: #ffffff;
\ttext-decoration: none;
}

.header-two-bars .header-first-bar nav {
\tfont:14px Arial, Helvetica, sans-serif;
\tline-height: 40px;
\tfloat: left;
\tmargin: 0 0 0 60px;
\tpadding: 0;
}

.header-two-bars .header-first-bar nav a{
\tdisplay: inline-block;
\tpadding: 0 5px;
\topacity: 0.9;
\ttext-decoration:none;
\tline-height: 1;
}

.header-two-bars .header-first-bar nav a:hover {
\topacity: 1;
}

.header-two-bars .header-first-bar nav a.selected {
\tborder-radius: 2px;
\tbackground-color: #2B5773;
\tpadding: 8px 12px;
}

.header-two-bars .header-first-bar a.logout-button {
\tfont-size: 13px;
\tfont-weight: bold;
\tfloat: right;
\tborder-radius: 3px;
\tbackground-color: rgba(58, 60, 62, 0);
\theight: 40px;
\tpadding: 0 20px;
\tborder: 1px solid #5E6367;
\tline-height: 40px;
\tbox-sizing: border-box;
}


/* Second Bar */

.header-two-bars .header-second-bar {
\tbackground-color: #ffffff;
\tbox-shadow: 1px 3px 3px 0 rgba(0, 0, 0, 0.05);
\tpadding: 20px 40px;
}

.header-two-bars .header-second-bar h2 {
\tline-height: 20px;
\tmargin: 0;
\tfloat: left;
}

.header-two-bars .header-second-bar h2 a {
\tfont-size: 16px;
\tcolor: #4e5359;
\ttext-decoration: none;
}

.header-two-bars .header-second-bar nav {
\ttext-align: right;
\tline-height: 20px;
\tfont-size: 16px;
\ttext-overflow: ellipsis;
\toverflow: hidden;
\twhite-space: nowrap;
}

.header-two-bars .header-second-bar nav a {
\tdisplay: inline-block;
\tcolor: #4e5359;
\ttext-decoration: none;
}

.header-two-bars .header-second-bar nav i.fa {
\tcolor: #A9B7BF;
\tmargin: 0 4px 0 15px;
}


/*\tMaking the header responsive. Remove these styles, if
\tyou don't need the header to work on mobile devices. */

@media all and (max-width: 800px) {

\t.header-two-bars .header-second-bar nav{
\t\tfont-size:14px;
\t}

}

@media all and (max-width: 600px) {

\t.header-two-bars .header-first-bar{
\t\tpadding:20px 0;
\t}

\t.header-two-bars .header-first-bar h1 {
\t\tfloat: none;
\t\tmargin: -8px 0 2px;
\t\ttext-align: center;
\t\tfont-size: 24px;
\t\tline-height: 1;
\t}

\t.header-two-bars .header-first-bar nav {
\t\tmargin: 0;
\t\tfloat: none;
\t\tfont-size:13px;
\t}

\t.header-two-bars .header-first-bar nav a.selected {
\t\tpadding: 5px 8px;
\t}

\t.header-two-bars .header-first-bar .logout-button {
\t\tdisplay: none;
\t}

\t.header-two-bars .header-second-bar{
\t\tpadding: 20px 0;
\t}

\t.header-two-bars .header-second-bar h2{
\t\tfloat:none;
\t\tmargin: 0 0 12px;
\t}

\t.header-two-bars .header-second-bar nav{
\t\ttext-align: center;
\t}

\t.header-two-bars .header-second-bar nav a{
\t\tdisplay: block;
\t\tpadding: 8px;
\t}

\t.header-two-bars .header-second-bar nav i.fa{
\t\tmargin-left:0;
\t}
}";
    }
}
