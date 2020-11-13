@extends('layouts.base')

@section('title')
Contact Us
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feeback</title>

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

    <style>
        .page{
            display : inline-flex;
            justify-content : center;
        }
        form{
            width : 500px;
            margin : 2rem 0;
            display : flex;
            flex-direction : column;
            align-items : center;
        }
        input,textarea{
            margin : 1rem 0;
        }
        .title{
            color : gray;
            font-size : 24px;
            font-weight : bold;
        }
        .success{
            width : 500px;
            margin : 5rem 0;
            text-align : center;
        }
        .article {
                float: left;
                padding: 20px;
                text-align: center;
                background-color: #f1f1f1;
                height: 500px; 
                }

    </style>
</head>
<body>
    <div class = "container-fluid page">
        <form class="form-group" id = "feedback">
            <div class = "title">Contact Us</div>
            <input class = "form-control" type = "text" name = "name" placeholder = "Name"/>
            <input class = "form-control" type = "text" name = "email" placeholder = "Email"/>
            <textarea class = "form-control" name="content" cols="50" rows="10" placeholder = "Content"></textarea>
            <button class="btn btn-primary">
                Send
                <i class="fa fa-spinner fa-spin"></i>
            </button>
            <p>
                    Or contact us directly:<br></p>
                    <p>Our email: savefood2020@gmail.com</p>
                    <p>Phone number: 09XXXXXX</p>
        </form>

        <div class = "success">Thank you for your message!</div>
    </div>
</body>

<script>
    $('.success').hide();
    $('.fa-spin').hide();
    $('#feedback').submit(function(event){
        event.preventDefault();
        $('.fa-spin').show();
        $.post('/api/sendmail',$("#feedback").serialize(),function(data){
            $('#feedback').hide();
            $('.success').show();
        })
    })
</script>
</html>

@endsection
