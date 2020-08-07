<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Give Me Your Feedback</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div class="container contact-form">
            <div class="contact-image">
                <img class="img img-circle img-responsive" src="{{ asset('img/topu.jpg') }}" alt="rocket_contact"/>
            </div>

                   <br>
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

            <form action="{{ route('form') }}" method="POST">

                @csrf

                <h3>Drop Me Your Thoughts About Me.Correct Me If I'm Wrong.</h3>
                <h5 class="text-center">Please Checkout My Google Site To Know About Me <a href="https://sites.google.com/view/im-mahmud/">Here</a>.</h5>
                <br>
               <div class="row">
                    <div class="col-md-12">
                    
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Your Subject" value="" required/>
                        </div>
                     
                      
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Your Message " style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact btn-block" value="Send Message" />
                        </div>
                       
                    </div>
                </div>
                
            </form>

            
          
</div>
</body>
</html>