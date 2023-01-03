@include("profile.head")

@include("profile.header")


<div class="container" style="margin-top:10px">
   <div class="row mb-2">
@foreach ($data as $data)
@if ($data->catégorie == 'maison')
     
  <div class="card mb-3" style="widht:100px;margin-top:20px" >
  <img src="/maisonimage/{{$data->image}}"  class="card-img-top" alt="..." style="height:250px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text" >{{$data->description}}</p>
    <p class="card-text" >{{$data->adresse}}</p>
   <p class="card-text" >{{$data->surface}}</p>
       <p class="card-text" >{{$data->prix}}</p>
    <p class="card-text"><small class="text-muted">{{$data->updated_at}}</small></p>

       <a href="{{url('/ForInteresse',$data->id)}}"> <button><span class="bi bi-star"></span>Intéressé</button></a>

  </div>
</div>
       @endif
     @endforeach
     </div>
     </div>
   

@include("profile.footer")
@include("profile.script")


