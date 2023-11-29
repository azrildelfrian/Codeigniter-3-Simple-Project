<body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="<?php echo base_url('landing')?>" class="img logo rounded-circle mb-5" style="background-image: url(<?php base_url()?>assets/images/logo.webp);"></a>
	        <ul class="list-unstyled components mb-5">
            <li class="nav-item <?php if ($this->uri->segment(1) == 'landing') {echo 'active';} ?>" href="<?php echo base_url('landing'); ?>">
	              <a href="<?php echo base_url('landing')?>">Home</a>
	          </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'artikel') {echo 'active';} ?>" href="<?php echo base_url('artikel'); ?>">
	              <a href="<?php echo base_url('artikel')?>">Artikel</a>
	          </li>
	          <li class="nav-item <?php if ($this->uri->segment(1) == 'event') {echo 'active';} ?>" href="<?php echo base_url('event'); ?>">
	              <a href="<?php echo base_url('event')?>">Event</a>
	          </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'galeri') {echo 'active';} ?>" href="<?php echo base_url('galeri'); ?>">
              <a href="<?php echo base_url('galeri')?>">Gallery Foto</a>
	          </li>
	          <li class="nav-item <?php if ($this->uri->segment(1) == 'klien') {echo 'active';} ?>" href="<?php echo base_url('klien'); ?>">
              <a href="<?php echo base_url('klien')?>">Klien Kami</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Login/Daftar</a>
              <ul class="collapse list-unstyled show" id="pageSubmenu">
                <li class="nav-item <?php if ($this->uri->segment(1) == 'sign_in') {echo 'active';} ?>" href="<?php echo base_url('sign_in'); ?>">
                    <a href="" data-toggle="modal" data-target="#login">Sign In</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(1) == 'register') {echo 'active';} ?>" href="<?php echo base_url('register'); ?>">
                    <a href="" data-toggle="modal" data-target="#register">Sign Up</a>
                </li>
              </ul>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p></p>
	        </div>

			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
						<div class="form-group">
							<strong class="text-dark">Username</strong>
							<input type="text" name="username" placeholder="Masukkan username" class="form-control">
						</div>
						<div class="form-group">
							<strong class="text-dark">Password</strong>
							<input type="text" name="password" placeholder="Masukkan Password" class="form-control">
						</div>
						<div class="text-center">
                            <a class="small" href="#daftar">Belum Punya Akun? Daftar!</a>
                        </div>
						<a href=""></a>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Masuk</button>
				</div>
				</div>
			</div>
			</div>

			<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Daftar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
						<div class="form-group">
							<strong class="text-dark">Username</strong>
							<input type="text" name="username" placeholder="Masukkan username" class="form-control">
						</div>
						<div class="form-group">
							<strong class="text-dark">Email</strong>
							<input type="email" name="username" placeholder="anda@contoh.com" class="form-control">
						</div>
						<div class="form-group">
							<strong class="text-dark">Password</strong>
							<input type="text" name="password" placeholder="Masukkan password" class="form-control">
						</div>
						<div class="form-group">
							<strong class="text-dark">Ulangi Password</strong>
							<input type="text" name="password" placeholder="Ulangi password" class="form-control">
						</div>
						<div class="text-center">
                            <a class="small" href="#login">Sudah Punya Akun? Login Sekarang</a>
                        </div>
						<a href=""></a>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Daftar</button>
				</div>
				</div>
			</div>
			</div>

			<a class="btn btn-secondary fixed-bottom " 
			style="bottom: 15px;
					left: 30px;
					width: 50px;
					height: 40px;"
				href="">
              <i class="fas fa-angle-up"></i>
          </a>
          <script>$(document).ready(function() {
            $('.btn').click(function() {
              $('html, body').animate({
                scrollTop: $('#top').offset().top
              }, 1000);
            });
          });
          </script>

	      </div>
    	</nav>

		