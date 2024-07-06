@extends('layouts.app')

@section('content')
<form class="container my-5" action="/patients/add" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <h1 class="text-center display-4">Patient</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" min="3" id="name" name="name" placeholder="Muhammad Fida" required/>
                <label for="name">Name</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="date" class="form-control" min="1939-01-01" max="{{date('Y-m-d')}}" id="dob" name="dob" placeholder="23/02/2001" required/>
                <label for="dob">Date of Birth</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <select class="form-select" id="gender" name="gender" aria-label="Floating label select example" required/>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <label for="gender">Gender</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="country" name="country" placeholder="Pakistan, Quetta" required/>
                <label for="country">Country and city</label>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" min="10" max="13" id="contact" name="contact" placeholder="03003879255" required/>
                <label for="contact">Mobile No</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="history" name="history" placeholder="Enter patient health history." required/>
                <label for="text">Medical History</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="medication" name="medication" placeholder="Enter patient medication." required/>
                <label for="medication">Current Medication</label>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md d-grid">
            <input type="submit" class="btn btn-primary" value="Save"/>
        </div>
        <div class="col-md d-grid">
            <input type="submit" class="btn btn-success" value="Edit"/>
        </div>
    </div>
</form>
@endsection
