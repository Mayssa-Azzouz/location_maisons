
<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
        @include("admin.admincss")


  
  </head>
  <body>
           <div class="container-scroller"  >
      

       @include("admin.navbar1") 
      @include("admin.navbar")


<div style="background-color:blue;margin-left:200px">


<form    action="{{url('/uploadmaison')}}"  method="post"  enctype="multipart/form-data" 
 style="margin-top:100px; margin-left:100px;margin-right:60px;align:'center'">
@csrf

      <div>
      <label>Description</label>
      <input    class="form-control" type="text" name="description" placeholder="entrer une description" required>
      </div>


      <div>
      <label>Catégorie</label>
      <input class="form-control" type="text" name="catégorie" placeholder="entrer la catégorie" required>
      </div>

       <div>
      <label>Adresse</label>
      <input  class="form-control" type="text" name="adresse" placeholder="entrer l'adresse" required>
      </div>

      <div>
      <label>Surface</label>
      <input class="form-control" type="text" name="surface" placeholder="entrer la surface" required>
      </div>

       <div>
      <label>Image</label>
      <input class="form-control" type="file" name="image" required>
      </div>

       

      <div>
      <label>Prix</label>
      <input class="form-control" type="num" name="prix" placeholder="entrer le prix" required>
      </div>

      
       <div>
      <input   class="btn btn-primary"  type="submit" value="enregistrer" >
      </div>

</form>
</div>


</div>

            @include("admin.adminscript")

  </body>
</html>