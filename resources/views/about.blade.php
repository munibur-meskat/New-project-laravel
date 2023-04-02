@extends('layouts.app')
@section('title', 'About')

@section('pagecontent')
{{-- <h5>About Page {{ $data }}</h5> --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="header text-center my-3">
                    <h2>About Page</h2>
                </div>
                <p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details. <br> <br>  

                Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more. <br> <br>
                
                Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build. <br> <br>
            
                There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications. <br> <br>

                We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed. <br> <br>

                If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.
            </p>
            </div>
        </div>
    </div>
</section>
@endsection
