<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Customizing installed commands: p11-kit</title>
<meta name="generator" content="DocBook XSL Stylesheets Vsnapshot">
<link rel="home" href="index.html" title="p11-kit">
<link rel="up" href="devel.html" title="Building, Packaging, and Contributing to p11-kit">
<link rel="prev" href="devel-paths.html" title="Packaging PKCS#11 module configs">
<link rel="next" href="devel-building.html" title="Compiling p11-kit from Source">
<meta name="generator" content="GTK-Doc V1.33.1 (XML mode)">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
<table class="navigation" id="top" width="100%" summary="Navigation header" cellpadding="2" cellspacing="5"><tr valign="middle">
<td width="100%" align="left" class="shortcuts"></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="16" height="16" border="0" alt="Home"></a></td>
<td><a accesskey="u" href="devel.html"><img src="up.png" width="16" height="16" border="0" alt="Up"></a></td>
<td><a accesskey="p" href="devel-paths.html"><img src="left.png" width="16" height="16" border="0" alt="Prev"></a></td>
<td><a accesskey="n" href="devel-building.html"><img src="right.png" width="16" height="16" border="0" alt="Next"></a></td>
</tr></table>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="devel-commands"></a>Customizing installed commands</h2></div></div></div>
<p>The <code class="literal">p11-kit</code> tool provides a
		<code class="literal">extract-trust</code> command which extracts trust
		policy information such as certificate anchors and so on
		into files for use with libraries that cannot read this trust
		information directly.</p>
<p>In order to be useful the <code class="literal">extract-trust</code>
		command needs to be custom