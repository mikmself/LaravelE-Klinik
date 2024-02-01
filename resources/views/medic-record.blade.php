<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="/medic/css/bootstrap.min.css" rel="stylesheet">
<link href="/medic/css/bootstrap-icons.css" rel="stylesheet">
<title>E-Klinik | Medic Record</title>
</head>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Medic Record</h6>
        <a href="/" class="btn btn-primary">Back</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Doctor</th>
                    <th>Patient</th>
                    <th>Date of Checking</th>
                    <th>Diagnoses</th>
                    <th>Prescription Medicine</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medicRecords as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->doctor->name }}</td>
                        <td>{{ $record->patien->user->name }}</td>
                        <td>{{ $record->date_of_checking }}</td>
                        <td>{{ $record->diagnoses }}</td>
                        <td>{{ $record->prescription_medicine }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="/medic/js/jquery.min.js"></script>
<script src="/medic/js/bootstrap.bundle.min.js"></script>
<script src="/medic/js/custom.js"></script>
</body>
</html>
