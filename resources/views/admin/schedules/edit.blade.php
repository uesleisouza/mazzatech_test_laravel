@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Schedule</h1>

                <form action="{{route('schedules.update', ['id' => $schedule->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="" value="{{$schedule->name}}">
                        @if($errors->has('name'))
                            <span class="invalid-feedback">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Patient:</label>
                        <select name="patient_id" class="form-control">
                            <option value="">Select an option</option>
                            @foreach($patients as $opt)
                                <option value="{{$opt->id}}">{{$opt->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('patient_id'))
                            <span class="invalid-feedback">{{$errors->first('patient_id')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Doctor:</label>
                        <select name="doctor_id" class="form-control">
                            <option value="">Select an option</option>
                            @foreach($doctors as $opt)
                                <option value="{{$opt->id}}">{{$opt->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('doctor_id'))
                            <span class="invalid-feedback">{{$errors->first('doctor_id')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('schedules.index')}}" class="btn btn-outline-primary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
