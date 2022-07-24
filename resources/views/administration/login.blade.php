@extends('app/app')
@section('title','System admin')
@section('main-body')
    <section class="login-form bg-light">
        <div class="card">
            <div class="card-body p-5" id="login-form-body">
                <div class="text-center p-4">
                    <h3 class="text-secondary">Law <i class="fa-solid fa-gavel fa-2x text-secondary"></i>Firm</h3>
                </div>
                <form action="" method="POST">

                    @csrf
                    <div class="row">
                        <div class="col-2 text-center">
                            <i class="fa-solid fa-envelope pt-2 text-secondary"></i>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control m-1" name="email" type="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 text-center">
                            <i class="fa-solid fa-lock pt-2 text-secondary"></i>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control m-1" name="password" type="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 text-center">
                            <i class="fa-solid fa-user-lock pt-2 text-secondary"></i>
                        </div>
                        <div class="col-10">
                            <button class="btn btn-secondary w-100 m-1">Login </button>
                        </div>
                    </div>
                    <br>
                    <br>
                    
                </form>
            </div>
        </div>
    </section>
@endsection