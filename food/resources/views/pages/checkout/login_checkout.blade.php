


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/login-user')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Tài khoản" />
							<input type="password" name="password_account" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-user')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="user_name" placeholder="Họ và tên"/>
							<input type="email" name="user_email" placeholder="Địa chỉ email"/>
							<input type="password" name="user_password" placeholder="Mật khẩu"/>
							<input type="text" name="user_phone" placeholder="Phone"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
                        <h2>Đăng ký làm shipper</h2>
                        <form action="{{URL::to('/add-shipper')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="shipper_name" placeholder="Họ và tên"/>
                            <input type="email" name="shipper_email" placeholder="Địa chỉ email"/>
                            <input type="password" name="shipper_password" placeholder="Mật khẩu"/>
                            <input type="text" name="shipper_phone" placeholder="Phone"/>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>

					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


