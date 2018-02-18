@extends('layouts.app') 
@section('content')

<h1>Rekomenduojame įsigyti Bijūnų sodinukų!</h1>

<p><strong>Bijūnai</strong> – tai gražūs, sodybų darželiams būdingi dekoratyvūs, daugiamečiai žoliniai augalai, tinkantys gėlynams ir puokštėms bei turintys vaistinių savybių. Jie puošnūs ne vien puikiais žiedais, bet ir tamsiai žaliais lapais ir krūmo forma. Bijūnai žydi visomis spalvomis, išskyrus mėlyną.
</p>

<p><strong>Veislės.</strong> Šiuolaikinis pasaulyje auginamų bijūnų asortimentas labai didelis ir įvairus. Priskaičiuojama iki penkių tūkstančių naujų bijūnų veislių (oficialiai užregistruota Tarptautiniame bijūnų registre). Dauguma bijūnų veislių pagal prigimtį skirstoma į 3 grupes, tai: kiniški, hibridiniai ir vaistiniai.</p>


<div class="row">
    <div class="col-md-3 col-lg-3"></div>
    <div class="col-md-6 col-lg-6">
        {{ Html::Image('/images/peonies2.jpg', 'peonies', array( 'width' => '100%')) }}
    </div>        
    <div class="col-md-3 col-lg-3"></div>
</div> 


@endsection