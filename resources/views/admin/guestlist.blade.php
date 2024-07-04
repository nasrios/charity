@extends('layouts.admindashboard')
@section('content') 

<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($guests as $guest)
        <tr>
        <th scope="row">{{$guest->id}}</th>
        <td>{{$guest->name}}</td>
        <td>{{$guest->email}}</td>
        <td>
          <form style="display: inline" method="POST" action="{{route('guests.destroy',$guest['id'])}}" >
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">delete</button>
          </form>

      </td>
      </tr>  
        @endforeach
     
      
    </tbody>
  </table>
  

 @endsection
         