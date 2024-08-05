@extends('bootstrap5')

@section('konten')
    <div class="row mt-5">
        <!-- Kolom untuk gambar -->
        <div class="col-md-4 text-center mb-4 mb-10 md-10">
            <img src="{{ asset('gambar-login.png') }}" alt="logo" class="img-fluid" style="max-width: 100%; height: 100%;">
        </div>
        

        <!-- Kolom untuk form login -->
        <div class="col-md-8 d-flex align-items-center">
            <div class="card w-200">
                <div class="card-body">
                    <h2 class="fw-light mb-4">Hi, Welcome Back!</h2>
                    <h3 class="mb-4">Form Login Worksheet</h3>
                    <form class="d-grid gap-5" action="" method="post">
                        @csrf <!-- Pastikan untuk menyertakan token CSRF jika menggunakan Laravel -->
                        
                        <input 
                            placeholder="Masukkan username" 
                            class="form-control" 
                            type="text" 
                            name="username" 
                            required>
                            
                        <input 
                            placeholder="Masukkan password" 
                            class="form-control" 
                            type="password" 
                            name="password" 
                            required>
                            
                        <div class="d-flex gap-2">
                            <a href="{{ url('/Schedules/')}}" class="btn btn-primary" type="submit">Login</a>
                            <a href="{{ url('/upload/')}}" class="btn btn-primary" type="submit">upload</a>
                            <a href="{{ url('/register/')}}" class="btn btn-primary" type="submit">register</a>
                            
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
