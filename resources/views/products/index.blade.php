@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hawa Ba</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>N°</th>
            <th>Nom du projet</th>
            <th>Porteur</th>
            <th>Fonds</th>
            <th>Date de soumission</th>
            <th>Actions</th>
        </tr>
    </thead>
        @foreach ($products as $products)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $products->nom_projet }}</td>
            <td>{{ $products->porteur_projet }}</td>
            <td>{{ $products->fonds }}</td>
            <td>11/10/1023</td>
            <td>
                <form action="{{ route('products.destroy',$products->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection