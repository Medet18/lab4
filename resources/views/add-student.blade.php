<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
   
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add New Student
                        </div>
                        <div class="card-body">
                        @if(Session::has('student_added'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('student_added')}}
                            </div>
                        @endif
                            <form action="{{ route('student-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="surname">Surname</label>
                                    <input type="text" name="surname" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                    <img src="previewImg" alt="profi" style="max-width:130px;margin-top:20px;">
                                </div>

                                <button type="submit" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script>
            function previewFile(input){
                var file=$("input[type=file]").get(0).files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src", reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>
</body>
</html>