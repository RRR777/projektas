@section('sidebar')
        <div class="card card-body bg-light">
            @if(Request::is('/'))                
                <button type="button" class="btn btn-success" onclick="location.href='{{ url('/create') }}'">Užsakyti</button>
            @endif
            @show
            <h2 class="text-center">Bijūnai</h2>
            <p class="text-center">Bijūnas (žolinis) - Paeonia (Lactiflora) Lady Orchid DYDIS 3-5 GR</p> 
            {{ Html::Image('/images/peonies.jpg', 'peonies', array( 'width' => '100%')) }}
            <br>
            @if(Request::is('/'))                
                <button type="button" class="btn btn-success" onclick="location.href='{{ url('/create') }}'">Užsakyti</button>
            @endif
            @show
        </div>
     

