@extends('layouts.base')

@section('title')
Contact Us
@endsection

@section('content')
<style>
                section:after {
                content: "";
                display: table;
                clear: both;
                }

                article {
                float: left;
                padding: 20px;
                text-align: center;
                background-color: #f1f1f1;
                height: 500px; 
                }

</style>
</head>
<body>
<section>
    <!-- 需製作text.php -->
        <form action="text.php" method="post" text align="center"> 
            Your email:<br><input type="text"><br><br>
            Content:<br> <textarea name="Content"></textarea><br>
            <input type="submit" value="submit"><br><br>
            Or contact us directly:<br>
            Our email: 12345@gmail.com<br>
            Phone number: 09XXXXXX
        </form>
            
</section>

@endsection
