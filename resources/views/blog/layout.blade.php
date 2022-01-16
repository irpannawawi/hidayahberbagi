
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hidayah Berbagi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Official Website for Hidayah Berbagi" />
	<meta name="keywords" content="Hidayah, berbagi, hidayahberbagi, donasi, rajadesa, jatinagara, ciamis, bantuan" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->



	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{ url('hidayah-berbagi-assets') }}/icon/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('hidayah-berbagi-assets') }}/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ url('hidayah-berbagi-assets') }}/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('hidayah-berbagi-assets') }}/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{ url('hidayah-berbagi-assets') }}/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('hidayah-berbagi-assets') }}/icon/favicon-16x16.png">
<link rel="manifest" href="{{ url('hidayah-berbagi-assets') }}/icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


	<!-- Bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/323b2ad32c.js" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="{{ url('charity') }}/css/bootstrap.css"> -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ url('charity') }}/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div class="container-fluid p-0 m-0">
			@include('partial.header')
			
			@yield('content')
			
			@include('partial.footer')
		</div>

		

	<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript">
	
</script>
	</body>
</html>

