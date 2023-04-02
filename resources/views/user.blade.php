@extends('layouts.app')
@section('title', 'User Edit Form')

@section('pagecontent')
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                      <h2>{{ $user->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>Name : {{ $user->name }}</p>
                        <p>User Name : {{ $user->user_name }}</p>
                        <p>Email : {{ $user->email }}</p>
                        <p>Address : {{ $user->address }}</p>

                        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                     </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection