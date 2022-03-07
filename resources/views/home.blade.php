@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Emoloyee</th>
      <th scope="col">count</th>
      <th scope="col">References</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employes as $employee)
    <tr>
      <td>{{$employee->id}}</td>
      <td>{{$employee->name}}</td>
      <td>{{$employee->name}}</td>
      <td>{{$employee->rafreance_id}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
