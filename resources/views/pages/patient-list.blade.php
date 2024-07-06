@extends('layouts.app')

@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center display-4">Patient</h1>
        </div>
    </div>
    <form class="row my-3" method="GET" action="">
        <div class="col-sm">
            <label for="category">Filter By</label>
            <select name="category" id="category" class="form-select">
                <option value="id">Id</option>
                <option value="name">Name</option>
                <option value="contact">contact</option>
            </select>
        </div>
        <div class="col-sm">
            <label for="search">Search</label>
            <input type="search" class="form-control" required placeholder="Search Here" id="search" name="search"/>
        </div>
        <div class="col-sm d-grid">
            <label class="text-white">dfdf</label>
            <input type="submit" value="Filter" class="btn btn-primary"/>
        </div>
    </form>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Country/City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $patients=App\Models\Patient::paginate(20);
                    if(Request::input("category")!=null and Request::input("search")!=null){
                        $patients=App\Models\Patient::where(Request::input("category"), 'LIKE', '%'.Request::input("search").'%')->paginate(20);
                    }
                    
                    ?>
                    @foreach($patients as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->contact}}</td>
                        <td>{{$p->gender}}</td>
                        <td>{{$p->country}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col ">
            {{$patients->onEachSide(1)->links()}}
        </div>
    </div>
</div>
@endsection
