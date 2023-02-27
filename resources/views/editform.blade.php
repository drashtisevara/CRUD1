
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Query Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    
                      <label for="">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{$student->name}}"       >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">City</label>
                      <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" value="{{$student->city}}">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="mb-3">
                      <label for="">Marks</label>
                      <input type="number" name="marks" id="marks" class="form-control" placeholder="" aria-describedby="helpId" value="{{$student->marks}}">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
</div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    
               
            </form>
             @if (session()->has('status'))
             <div class = "alert- alert-success">

                {{session('status')}}
             </div>
             @endif
            </div>
            
            
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>
