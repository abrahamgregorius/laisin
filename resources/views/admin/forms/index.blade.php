@extends('admin.layout.app')
@section('content')

<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Respondent</h3>
</div>
<div class="row">
    <div class="col-12">
        <div class="col-lg-4 col-12 mb-4">
            <div class="search d-flex" style="gap: 10px;">
                <input type="text" placeholder="Search Response" class="form-control">
                <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></button>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                       <tr>
                        <td>
                           Name
                        </td>
                        <td>
                           Email
                        </td>
                        <td>
                           Message
                        </td>
                        <td>
                            Action
                        </td>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            <tr>
                                <td>{{ $form->name }}</td>
                                <td>{{ $form->email }}</td>
                                <td>{{ $form->message }}</td>
                                <td>
                                    <form action="{{ route('delete.form',$form->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $form->id }}">
                                        <button id="confirmdeletebtn" class="btn btn-primary text-white" type="submit">
                                            <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                              </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
@endsection