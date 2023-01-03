<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
        @include("admin.admincss")


  
  </head>
  <body>
           <div class="container-scroller">
      

       @include("admin.navbar1") 
      @include("admin.navbar")


  


       <div >
             <table class="table table-success table-striped" style="margin-left:100px;margin-top:80px">
          
          <tr align="center">
             <th style="padding:20px">Description</th>
             <th style="padding:20px">Catégorie</th>
             <th style="padding:20px">Adresse</th>
             <th style="padding:20px">Surface</th>
             <th style="padding:20px">Image</th>
             <th style="padding:20px">Prix</th>
             <th style="padding:20px">Action1</th>
             <th style="padding:20px">Action2</th>
          </tr>



      @foreach ($data as $data )
            
      
          <tr align="center">
          <td>{{$data->description}}</td>
          <td>{{$data->catégorie}}</td>
          <td>{{$data->adresse}}</td>
          <td>{{$data->surface}}</td>
          <td><img height="200px" src="/maisonimage/{{$data->image}}"></td>
          <td>{{$data->prix}}</td>
          <td><a href="{{url('/deletemaison',$data->id)}}">supprimer</a></td>
          <td><a href="{{url('/updateview',$data->id)}}">modifier</a></td>


          </tr>


       @endforeach
             </table>
 
       </div>

      </div>

            @include("admin.adminscript")

   
  </body>
</html>