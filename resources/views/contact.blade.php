<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-full bg-primary">
<div class="row">
<div class="col-md-3 col-lg-3 col-xl-3">

</div>
<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
<div class="mx-auto" style="width: 400px;">
<h3 class="text-center">PhoneBook</h3>



<div class="container-fluid mt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm bg-dark text-white p-3">My Contacts</div>
      <div class="col-sm bg-dark text-white p-3 text-end" id="addEmployeeModal">
        <!-- <button class="btn btn-outline-success">+ Add New</button> -->

        <div class="dropdown">
  <button class="btn btn-outline-success" type="button" id="btn-add" data-bs-toggle="dropdown" aria-expanded="false">
    + Add New
  </button>
  <ul class="dropdown-menu p-3" style="width: 300px;">
  <form action="{{route('contact.store')}}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" req>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" required>
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  
  <button type="submit"  class="btn btn-primary" value="add">Add</button>
  
</form>
  </ul>
</div>
      
      </div>
    </div>  
  </div>
  <br>
  
  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <br>
      @foreach($contacts as $data)
      <table class="table">
  
  <tbody>
    
      <th scope="row">{{$data->id}}</th>
      <td><img src="{{asset('img/IMG20220724175216.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="40" height="40"><span class="px-2">{{$data->name}} </span></td>
      
    </tr>
    
    
  </tbody>
</table>
@endforeach
</div>
<br>
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        contact
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>







</script>


  
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>