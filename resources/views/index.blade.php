@extends('layouts.app')

  @section('content')
  <h1>Halaman Home</h1>
  <a href="{{ url('/home') }}" >Employee</a>
  <a href="{{ url('/company') }}" class="register">Company</a><br/><br/>

  <form method="GET" action="{{ url('employee/search') }}">
    @csrf @method('get')
    <input type="text" name="search">
    <button>Cari</button>
  </form>


  @endsection

  <script>
    $('.register').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal.fire({
            title: "Please register first",
            text: "Do you already have an account",
            icon: 'warning',
            showCancelButton: !0,
            confirmButtonText: "Yes, I will sign in",
            cancelButtonText: "No, I will sign up",
            reverseButtons: !0,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',

        }).then(function(event) {

            if (event.value === true) {
                window.location.href = url;
            }

        }, function(dismiss) {
            return false;
        });
    });
</script>

