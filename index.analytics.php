<!DOCTYPE html>
<html>
<head>
	<title>GA Experiment</title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127149716-1"></script>
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127149716-2"></script> -->
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-127149716-1');
	  gtag('config', 'UA-127149716-2');
	</script>
</head>
<body>
	<h1>Hello World</h1>
	<button onClick="blah()">foobar</button>

	<script type="text/javascript">
		gtag('config', 'UA-127149716-1', { 'send_page_view': true });
		gtag('config', 'UA-127149716-2', { 'send_page_view': true });

		function blah(){
			gtag('event', 'Debugging', {
			  'event_category': 'Some Page',
			  'event_label': 'Redirect to Home',
			});
			
			ga('ga1.send','event','Some Page_2','Debugging_2','Redirect to Home_2');
			ga('ga2.send','event','Some Page_2','Debugging_2','Redirect to Home_2');
		}
	</script>
<script>  <!--// For ga() events-->
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-127149716-1', 'auto', 'ga1');
        ga('create', 'UA-127149716-2', 'auto', 'ga2');
</script>
</body>
</html>