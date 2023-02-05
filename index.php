<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';


?>
<!DOCTYPE html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<title>Bootstrap v5 Bug Report Template</title>
<link rel="dns-prefetch" href="https://fast.appcues.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CodePen">
<meta name="twitter:title" content="Bootstrap v5 Bug Report Template">
<meta name="twitter:description" content="A Bootstrap v5 bug report template....">
<meta name="twitter:image" content="https://shots.codepen.io/team/bootstrap/pen/qBamdLj-800.jpg?version=1652284874">
<meta property="og:image" content="https://shots.codepen.io/team/bootstrap/pen/qBamdLj-800.jpg?version=1652284874" itemprop="thumbnailUrl">
<meta property="og:title" content="Bootstrap v5 Bug Report Template">
<meta property="og:url" content="https://codepen.io/team/bootstrap/details/qBamdLj">
<meta property="og:site_name" content="CodePen">
<meta property="og:description" content="A Bootstrap v5 bug report template....">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https%3A%2F%2Fcodepen.io%2Fteam%2Fbootstrap%2Fpen%2FqBamdLj&format=json" title="Bootstrap v5 Bug Report Template" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/global/global-0b932d80445462f790a3461ec6768eb7290edbe769dd2e1c4efaedafa5582d5c.css" />
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-b6b2efde.css" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/editor/editor-f7fe2b17a4e996509b86608d7cd3f58f9c115715b6157070005c6e7df9ecf341.css" />
<meta name="description" content="A Bootstrap v5 bug report template....">
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/editor/themes/twilight-19c825839a52a64ea677dad9fb60edc18e80419bf29879c0353d1de3c5e9ac42.css" id="cm-theme" />
<style id="cm-font-family" class="cm-font-family" nonce="6/WuQBx9hgc=">
  
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-family: SFMono-Regular, Consolas, Liberation Mono, Menlo,
  monospace;
  }
</style>
<style id="cm-font-size" nonce="6/WuQBx9hgc=">
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-size: 14px;
  }
</style>
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="WBc7te+4i0HWjNZOsHVIvwA3/T3oTvfRQXVZKX5uILrznzEw35sm5yu+FQ9F9OP0rX+PqTiRp8yxxRRiU8t5Fw==" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="monetization" content="$ilp.uphold.com/biyqg2MkQKbe">
<script nonce="6/WuQBx9hgc=">
  /* Firefox needs this to prevent FOUT */
</script>
</head>
  <body class="d-flex flex-column h-100">
    
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Hello, <? echo $name; ?></h1>
    <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
    <p>Use <a href="/docs/5.2/examples/sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>
  </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>


    
  </body>
</html>
