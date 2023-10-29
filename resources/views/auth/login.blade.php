@extends('web.base.base2')

@section('content')

<!--start logon content-->
<section class="">
	<div class="container">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="row row-cols-1 row-cols-xl-2">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">
								<div class="text-center">
									<h3 class="">Sign in</h3>
									<p>Don't have an account yet? <a href="{{ route('register') }}"><u>Sign up here</u></a>
									</p>
								</div>
								{{-- <div class="d-grid">
									<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
										<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
										<span>Sign in with Google</span>
										</span>
									</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
								</div> --}}
								<div class="login-separater text-center mb-4"> <span> SIGN IN WITH EMAIL</span>
									<hr/>
								</div>
								<div class="form-body">

									<div style="color: red;">
										<x-jet-validation-errors class="mb-4" />
									</div>
									
									<form class="row g-3" method="POST" action="{{ route('login') }}">
										@csrf
										<div class="col-12">
											<label for="email" class="form-label">Email Address</label>
											<input type="email" class="form-control" id="email" placeholder="Email Address" name="email" :value="old('email')" required autofocus>
										</div>
										<div class="col-12">
											<label for="password" class="form-label">Enter Password</label>
											<div class="input-group" id="show_hide_password">
												<input type="password" class="form-control border-end-0" id="password" placeholder="Enter Password" name="password" required autocomplete="current-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" id="remember_me" name="remember">
												<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
											</div>
										</div>
										<div class="col-md-6 text-end">	<a href="{{ route('password.request') }}">Forgot Password ?</a>
										</div>
										<div class="col-12">
											<div class="d-grid">
												<button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Sign in</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end row-->
		</div>
	</div>
</section>
<!--end logon content-->


@push('scripts')

<!--Password show & hide js -->
<script src="{{ asset('assets/js/show-hide-password.js') }}"></script>

@endpush

@endsection