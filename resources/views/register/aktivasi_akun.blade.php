@include('layout.header')

<main>
	<div class="content-search">

		<div class="container container-100">
			<i class="far fa-times-circle" id="close-search"></i>
			<h3 class="text-center">what are your looking for ?</h3>
			<form method="get" action="/search" role="search" style="position: relative;">
				<input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

				<button class="button_search" type="submit">search</button>
			</form>
		</div>

	</div>

	<div class="container">
		<div class="page-404" style="margin-top:40px;">
			<!-- End images -->
			<div class="text center">
				<div class="icon-box box">
					<img src="{{ asset('ladun/ebunga_asset/image/others/unicorn.png') }}" style="width: 200px;" alt="icon">
				</div>
				<h3>Thanks for activate account, u can login at Ebunga now</h3>
				<p>U can login from <a href="{{ url('/auth/account') }}" title="link"><strong>Login page </strong><i class="fa fa-angle-double-right"></i></a></p>
			</div>
			<!-- End text -->
		</div>
		<!-- End page404 -->
	</div>
	<!-- End container -->
	
</main>

@include('layout.footer')