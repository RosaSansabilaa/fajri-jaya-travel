@extends('layouts.app')

@section('content')
<div class="registerPage-card">
    <div class="container">
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 registerInput-container">
                        <div class="p-5 registerInput-content">
                            <div class="text-center">
                                <h1 class="h4 mb-4">Daftar Akun | Sign Up</h1>
                            </div>
                            <form class="user">
                                {{-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div> --}}
                                
                                <div class="form-group">
                                    <label class="text-gray-900">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-user" id="exampleName"
                                        placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-900">Email</label>
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan email" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-900">Nomor Telepon</label>
                                    <input type="tel" class="form-control form-control-user" id="examplePhoneNumber"
                                        placeholder="Masukkan nomor telepon (08xxxxxxxxxx)" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-900">Nama Pengguna</label>
                                    <input type="text" class="form-control form-control-user" id="exampleUsername"
                                        placeholder="Masukkan nama pengguna" required>
                                </div>
                                <label class="text-gray-900">Kata Sandi</label>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Masukkan kata sandi" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulangi kata sandi" required>
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-user btn-block register-button">
                                    Buat Akun
                                </a>
                                {{-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            {{-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                            </div> --}}
                            <div class="text-center">
                                <label class="small">Sudah punya akun?</label>
                                <a class="small" href="login.php">Masuk!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>    
                </div>
            </div>
        </div>
    </div>
{{-- 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script> --}}
</div>
@endsection
