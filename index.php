<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php include('slides/clientname.php'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="stylesheet" href="http://vpmdev.com/files/reveal/css/reveal.css">
		<link rel="stylesheet" href="http://vpmdev.com/files/reveal/css/theme/black.css" id="theme">
		<link rel="stylesheet" href="http://vpmdev.com/files/reveal/css/custom.css">
		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="http://vpmdev.com/files/reveal/lib/css/zenburn.css">
		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'http://vpmdev.com/files/reveal/css/print/pdf.css' : 'http://vpmdev.com/files/reveal/css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="reveal">
			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
			<?php
				$types = array();
				$arr = array_filter(glob('slides/*'),'is_dir');
				foreach($arr as $k => $v){
					$segments = explode('/', rtrim($v, '/'));
					$types[] = $segments[1];
				}
				//print_r($types);
				$count=array();
				foreach($types as $k => $v){
					$count[$v] = -2;
					$files = scandir('slides/'.$v.'/');
					foreach($files as $file){
						$count[$v]++;
					}
				}
				$total = max($count);
				for($i = 1 ; $i <= $total ; $i++){
					echo('<section>');
						foreach($types as $k => $v){
							$x = substr($v,1);
							//need to update this to allow specific filetypes rather than brute forcing it
							if(file_exists('slides/'.$v.'/'.$i.'.png')){
								echo ('<section class="'.$x.'-size"><span>'.$x.'</span><span class="ov">'.strtoupper(substr($x,0,1)).'-'.$i.'</span><img src="slides/'.$v.'/'.$i.'.png"/></section>');
							}else if(file_exists('slides/'.$v.'/'.$i.'.gif')){
								echo ('<section class="'.$x.'-size"><span>'.$x.'</span><span class="ov">'.strtoupper(substr($x,0,1)).'-'.$i.'</span><img src="slides/'.$v.'/'.$i.'.gif"/></section>');
							}else if(file_exists('slides/'.$v.'/'.$i.'.jpg')){
								echo ('<section class="'.$x.'-size"><span>'.$x.'</span><span class="ov">'.strtoupper(substr($x,0,1)).'-'.$i.'</span><img src="slides/'.$v.'/'.$i.'.jpg"/></section>');
							}
						}
					echo ('</section>');
				}
			?>
			</div>
		</div>
		<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
		<script src="http://vpmdev.com/files/reveal/lib/js/head.min.js"></script>
		<script src="http://vpmdev.com/files/reveal/js/reveal.js"></script>
		<script>
			$( document ).ready(function() {
				// Full list of configuration options available at:
				// https://github.com/hakimel/reveal.js#configuration
				Reveal.initialize({
					controls: true,
					history: true,
					center: true,
					overview:true,
					loop:true,
					transition: 'slide', // none/fade/slide/convex/concave/zoom
					// Optional reveal.js plugins
					dependencies: [
						{ src: 'http://vpmdev.com/files/reveal/lib/js/classList.js', condition: function() { return !document.body.classList; } },
						{ src: 'http://vpmdev.com/files/reveal/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
						{ src: 'http://vpmdev.com/files/reveal/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
						{ src: 'http://vpmdev.com/files/reveal/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
						{ src: 'http://vpmdev.com/files/reveal/plugin/zoom-js/zoom.js', async: true },
						{ src: 'http://vpmdev.com/files/reveal/plugin/notes/notes.js', async: true }
					]
				});
			});
		</script>
	</body>
</html>