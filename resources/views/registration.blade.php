<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/medic/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medic/css/bootstrap-icons.css" rel="stylesheet">
    <title>E-Klinik | Registration</title>
    <style>
        body{
            background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container contact-form">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session()->get('success')}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{session()->get('error')}}
        </div>
    @else

    @endif
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post" action="{{route('store-registration')}}">
        @csrf
        <input type="hidden" name="patien_id" value="{{$patient->id}}">
        <h3>Registration</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Doctor :</label>
                    <select name="doctor_id" class="form-control">
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Date :</label>
                    <input type="date" name="registration_date" class="form-control mt-2"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-2" value="Submit" />
                    <a href="/" class="btn btn-secondary mt-2">Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="/medic/js/jquery.min.js"></script>
<script src="/medic/js/bootstrap.bundle.min.js"></script>
<script src="/medic/js/custom.js"></script>
</body>
</html>
