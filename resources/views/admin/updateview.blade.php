

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
        @include("admin.admincss")


  
  </head>
  <body>
           
         <div class="container-scroller" >

      @include("admin.navbar1")

      @include("admin.navbar")

<div style="background-color:blue;margin-left:200px">

     <form    action="{{url('/updateview',$data->id)}}"  
     method="post"  enctype="multipart/form-data"
     style="margin-top:100px; margin-left:100px;margin-right:60px;align:'center'">
@csrf


      <div>
      <label>Description</label>
      <input class="form-control"  type="text" name="description" value="{{$data->description}}" required>
      </div>


      <div>
      <label>Catégorie</label>
      <input class="form-control"  type="text" name="catégorie" value="{{$data->catégorie}}"required>
      </div>

       <div>
      <label>Adresse</label>
      <input class="form-control"  type="text" name="adresse" value="{{$data->adresse}}" required>
      </div>

      <div>
      <label>Surface</label>
      <input class="form-control"  type="text" name="surface" value="{{$data->surface}}" required>
      </div>

      
       <div>
      <label>Ancienne Image</label>
      <img height="200px"  width="200px" src="/maisonimage/{{$data->image}}">
       </div>
 
 
      <div>
      <label>Nouvelle Image</label>
      <input class="form-control"  type="file" name="image" required>
      </div>



      <div>
      <label>Prix</label>
      <input class="form-control"  type="num" name="prix" value="{{$data->prix}}" required>
      </div>

      
       <div>
     
      <input  class="form-control"  type="submit" value="enregistrer" >
      </div>


 </form>
</div>



      </div>
            @include("admin.adminscript")

   
  </body>
</html>