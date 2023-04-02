@extends('layouts.app')
@section('title', 'User Sign Up')

@section('pagecontent')
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                      <h2>Sign Up</h2>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('user.insert') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ ('Enter Your Full Name') }}</div>
                        @enderror
                        </div>
                        
                        <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" placeholder="User Name" value="{{ old('user_name') }}">
                        @error('user_name')
                        <div class="text-danger">{{ ('Enter Your User Name') }}</div>
                    @enderror
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                        <input type="submit" value="Sign Up" class="btn btn-success form-control">
                        </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection