@extends('layout.default')
  
@section('content')
<div>
    <div>
        <div>
            <div>
                <div>Manage Product</div>
  
                <div>
                      
                    <a href="{{ route('formulario.step.one') }}">Create Product</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$alumno->nombres}}</td>
                                <td>{{$alumno->apellidos}}</td>
                                <td>{{$alumno->email}}</td>
                                <td>{{$alumno->residente}}</td>
                                <!-- <td>{{$alumno->rango_edad}}</td> -->
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