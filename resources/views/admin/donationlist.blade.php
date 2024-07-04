@extends('layouts.admindashboard')
@section('content') 

<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">amount</th>
        <th scope="col">donator id</th>
        <th scope="col">donator email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($donations as $donation)
        <tr>
        <th scope="row">{{$donation->id}}</th>
        <td>{{$donation->amount}}</td>
        <td>{{$donation->user_id}}</td>
        <td>{{$donation->user ? $donation->user->email : 'not found'}}</td>
      </tr>  
        @endforeach
     
      
    </tbody>
  </table>
  

 @endsection
         