@extends('layouts.app')
@section('title', 'User Edit Form')

@section('pagecontent')
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                      <h2>Update User</h2>
                    </div>
                    <div class="card-body">


                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ $user->name }}">
                        @error('name')
                            <div class="text-danger">{{ ('Enter Your Full Name') }}</div>
                        @enderror
                        </div>
                        
                        <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" placeholder="User Name" value="{{ $user->user_name }}">
                        @error('user_name')
                        <div class="text-danger">{{ ('Enter Your User Name') }}</div>
                    @enderror
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ $user->email }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="5">{{ $user->address }}</textarea>
                        </div>

                        <div class="mb-3">
                        <input type="submit" value="Update" class="btn btn-success form-control">
                        </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection