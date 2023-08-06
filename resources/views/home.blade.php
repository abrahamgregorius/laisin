@extends('layout.app')
@section('content')
{{-- Shadowed hero --}}
<div class="container my-5">
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
    <h1 class="display-4 fw-bold lh-1">Laisindo Autoparts - Elevate Your Drive</h1>
    <p class="lead">Welcome to Laisindo Autoparts – your trusted source for premium automotive solutions. Find genuine parts and expert advice to keep your vehicles running smoothly. Elevate your driving experience with us.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="{{ route('products.index') }}"><button type="button" class="btn btn-warning btn-lg px-4 me-md-2 fw-bold">Find A Part</button></a>
        <a href="{{ route('contacts.index') }}"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Contacts</button></a>
    </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3 rounded" src="{{ asset('assets/image3.jpg') }}" alt="" width="720">
    </div>
</div>
</div>

{{-- No shadow hero --}}
<div class="px-4 py-5 my-5 text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
        <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
      </svg>  
    <h1 class="display-5 fw-bold">Laisindo Autoparts</h1>

    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Welcome to Laisindo Autoparts – your trusted source for premium automotive solutions. Find genuine parts and expert advice to keep your vehicles running smoothly. Elevate your driving experience with us.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ route('products.index') }}"><button type="button" class="btn btn-warning btn-lg px-4 me-md-2 fw-bold">Find A Part</button></a>
            <a href="{{ route('contacts.index') }}"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Contacts</button></a>
        </div>
    </div>
</div>




@endsection