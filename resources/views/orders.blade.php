@extends('layouts.app') 
@section('content')

<div class="container col-md-12 col-lg-12 text-center">
    <h1>Užsakymų sąrašas:</h1>
</div>



@if(count($flowers) > 0)
    <table class="table table-hover table-striped table-sm">
    <thead class="tablehead">
        <tr>
        <th scope="col">Eil.Nr.</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">El.pašto adresas</th>
        <th scope="col">Šalis</th>
        <th scope="col">Užsakytas kiekis</th>
        </tr>
    </thead>
    <?php $num = ($flowers->currentpage()-1)* $flowers->perpage() + 1;?>    
        <tbody>
            @foreach ($flowers as $flower)
            <tr>
            <th scope="row"><?= $num++ ?></th>
            <td>{{$flower->name}}</td>
            <td>{{$flower->lastname}}</td>
            <td>{{$flower->email}}</td>
            <td>{{$flower->country}}</td>
            <td class="text-center">{{$flower->orderqty}}</td>
            </tr>  
              @endforeach          
        </tbody>  
    </table>
    {{ $flowers->links() }}
@endif
@endsection