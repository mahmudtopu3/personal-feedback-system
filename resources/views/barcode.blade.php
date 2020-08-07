<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode Scanner Laravel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container contact-form">



                @if ($message = Session::get('success'))

                    <div class="alert alert-primary">

                        <p class="text-center">{{ $message }}</p>

                    </div>

                @endif

                @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

                @endif
            <div class="contact-image">
                <img class="img img-circle img-responsive" src="{{ asset('img/bcode.jpg') }}" alt="rocket_contact"/>
            </div>
          

            
            <form action="{{ route('barcodeSubmit') }}" method="POST" id="barcodeform">

                @csrf
                

              
              
               <div class="row boxform">
                    <div class="col-md-12">
                    <div class="text-center">
                    <h4>Laravel Barcode Scanner by <i>Topu</i> </h4>
                      <img class="img img-responsive" src="" id="output" alt="">
                      <br>
                      <span id="input"></span>
                    </div>
                    <br>
                    
                        <div class="form-group">
                            <input autofocus onmouseover="this.focus();" type="text" name="code" class="form-control" placeholder="Scan Barcode" value="" required/>
                        </div>
                       
                     
                        <div class="form-group">
                            <input type="submit" id="submitbutton" name="btnSubmit" class="btnContact btn-block" value="Submit" />
                        </div>
                       
                    </div>
                </div>
                
            </form>

            
          
</div>
</body>



<script>
$(document).ready(function(){
$('#barcodeform').on('submit', function(event){
    
 event.preventDefault();
 $("#submitbutton").val("Submitting");
 $.ajax({
  url:"{{ route('barcodeSubmit') }}",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(data)
  {

       
       $("#output").attr("src","data:image/jpg;base64," + data.code);
       $("#input").html(data.input);
       $('#barcodeform')[0].reset();
      
       $("#submitbutton").val("Submit");
       




       console.log(data.input);

   
   
  }
 })
});
});
</script>

</script>
</html>