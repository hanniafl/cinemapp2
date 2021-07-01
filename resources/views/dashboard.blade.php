@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('CINEMA')])

@section('content')
  <div class="content">
    <h1>CINEMA</h1>
  <div>
  <div class="card-group">
  <div class="card">
    <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">GREASE</h5>
      <p class="card-text">El rebelde Danny Zuko y la inocente australiana Sandy mantienen un romance durante las vacaciones, creyendo que no se volverán a ver.</p>
      <p class="card-text"><small class="text-muted">Director: Randal Kleiser</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/2.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">RAPIDO Y FURIOSOS 9</h5>
      <p class="card-text">F9 titulada: Veloces y cabreados 9 en España y Rápidos y Furiosos 9 en Hispanoamérica es una película de acción estadounidense de 2021 dirigida por Justin Lin, que también coescribió el guion con Daniel Casey. </p>
      <p class="card-text"><small class="text-muted">Director: Justin Lin</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/shrek.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SHREK</h5>
      <p class="card-text">Shrek es el primer largometraje de la saga Shrek producida por DreamWorks y protagonizada por Mike Myers (Shrek)</p>
      <p class="card-text"><small class="text-muted">Directores: Andrew Adamson</small></p>
    </div>
  </div>
</div>
  </div> 
  <div class="card-group">
  <div class="card">
    <img src="{{asset('img/3.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">RESIDENT EVIL</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/4.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">HOTEL TRANSILVANIA 3</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('img/5.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">HIGH SCHOOL MUSICAL </h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
  </div>
@endsection
