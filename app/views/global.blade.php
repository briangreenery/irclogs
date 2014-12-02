<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BigFix IRC logs</title>
	{{ Basset::show('application.css') }}
</head>
<body>

	<header class="header">
		<input name="search" value="{{ isset($search) ? $search : null }}" class="header-search" action="{{ URL::to('search/') }}" contenteditable placeholder="Search #platdev" autofocus autocomplete="off" spellcheck="false">
		<div class="links">
			Powered by <a href="http://glose.com">Glose</a> · <a href="http://github.com/briangreenery/irclogs" target="_blank">Fork on Github</a>
		</div>
	</header>

	<section class='container'>
		<main class='content'>
			@yield('content')
		</main>
		<aside class='timeline'>
			@include('partials.timeline')
		</aside>
	</section>

	{{ Basset::show('application.js') }}
</body>
</html>