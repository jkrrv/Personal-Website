<html>
<head>
    <style><?php include 'style/inline.min.css'; ?></style>
    <title>James Kurtz</title>
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta property="og:site_name" content="James Kurtz's Personal Site" />
    <meta property="og:title" content="James Kurtz" />
    <meta property="og:description" content="Someday, this page will be interesting.  In the meantime, here are some links and a pretty picture from a recent hike." />
    <meta property="og:image:url" content="https://kurtz.es/static/bierstadtOG.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@jkrrv">
    <meta name="twitter:creator" content="@jkrrv">
    <meta property="twitter:title" content="James Kurtz" />
    <meta property="twitter:description" content="Someday, this page will be interesting.  In the meantime, here are some links and a pretty picture from a recent hike." />
    <meta property="twitter:image" content="https://kurtz.es/static/bierstadtOG.jpg" />

    <meta name="application-name" content="James Kurtz"/>
    <meta name="msapplication-TileColor" content="#223659"/>
    <meta name="msapplication-starturl" content="/" />
    <meta name="msapplication-navbutton-color" content="#223659" />

    <meta name="theme-color" content="#223659">

    <meta property="og:type" content="profile" />
	<?php if ($mode !== 'work') { ?>
    <meta property="og:url" content="https://kurtz.es/" />
	<?php } else { ?>
    <meta property="og:url" content="https://kurtz.es/work" />
	<?php } ?>
    <meta property="fb:admins" content="590301109">
    <meta property="og:profile:first_name" content="James">
    <meta property="og:profile:last_name" content="Kurtz">
    <meta property="og:profile:gender" content="male">
</head>
<body>
<div>
	<?php if ($mode !== 404) { ?>
    <span>The personal page of</span>
    <h1>James Kurtz.</h1>
    <span>Someday, this page will be interesting.</span>
    <span>In the meantime, here are some links and a pretty picture from a recent hike.</span>
	<?php } else { ?>
    <h1>Uhh oh</h1>
    <span>Couldn't find the thing you were looking for.</span>
    <span>But, here are some links and a pretty picture from a hike last summer.</span>
	<?php } ?>
    <a href="/github" class="fa-github" title="GitHub"></a>
    <a href="/linkedin" class="fa-linkedin" title="LinkedIn"></a>
    <?php if ($mode !== 'work') { ?>
    <a href="/facebook" class="fa-facebook" title="Facebook"></a>
    <?php } ?>
    <a href="/twitter" class="fa-twitter" title="Twitter"></a>
    <!--<a href="soundcloud" class="fa-soundcloud" title="Soundcloud"></a>-->
    <a href="/availability" class="fa-calendar-check-o" title="Availability"></a>
	<?php if ($mode !== 'work') { ?>
    <a href="mailto:jkrrv@jkrrv.org" class="fa-envelope-o" title="email"></a>
	<?php } else { ?>
    <a href="mailto:jkurtz@ieee.org" class="fa-envelope-o" title="email"></a>
	<?php } ?>
    <a href="/resume" class="fa-file-text" title="R&#xE9;sum&#xE9;"></a>
</div>
<script><?php include 'scripts/inline.min.js'; ?></script>
</body>
</html>