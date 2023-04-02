@extends('layouts.app')
@section('title', 'Home')

@section('pagecontent')

<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

            @if (session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
            @endif

          <table class="table">
              <tr class="table-dark">
                  <th>Id</th>
                  <th>Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  {{-- <th>Password</th> --}}
                  <th>Action</th>
              </tr>
              @foreach ($users as $user )
              <tr>
                  <td>{{ $user->id  }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->user_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->address }}</td>
                  {{-- <td>{{ $user->password }}</td> --}}
                  <td>
                    <a href="{{ route('user.view', $user->id) }}" class="btn btn-success">View</a>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    {{-- <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger delete_btn">Delete</a> --}}
                    <button class="btn btn-danger delete_btn" value="{{ route('user.delete', $user->id) }}">Delete</button>
                  </td>
              </tr>
              @endforeach
          </table>
          {{ $users->links() }}
        </div>
      </div>
    </div>
</section>

@endsection

@section('header-css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.min.css">
@endsection

@section('footer-js')
<script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.all.min.js"></script>

<script>
  $(function($){

      $('.delete_btn').on('click', function(){

        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        window.location.href = $(this).val();
        
        }
        else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }

     })
    });
  });

</script>

@endsection

    