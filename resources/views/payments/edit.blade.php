@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payment Page</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Enrollment No</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control"  value="{{$payments->id}}" >
          @foreach($enrollments as $id => $enroll_no)
          <option value="{{ $id }}">{{ $enroll_no }}</option>
          @endforeach
        </select>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"  value="{{$payments->paid_date}}" ></br>
        
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"  value="{{$payments->amount}}" ></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop