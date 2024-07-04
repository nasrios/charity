@extends('layouts.guestdashboard')
@section('content') 

<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">donation Id</th>
        <th scope="col">amount</th>
        <th scope="col">created at</th>
        
        
      </tr>
    </thead>
    <tbody>
        @foreach ($donations as $donation)
        <tr>
        <th scope="row">{{$donation->id}}</th>
        <td>{{$donation->amount}}</td>
        <td>{{$donation->created_at}}</td>
        
      </tr>  
        @endforeach
     
      
    </tbody>
  </table>
  

 @endsection
         