@extends('layouts.app')
@section('content')

@php
  $order=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->get();
@endphp

    <div class="contact_form">
        <div class="container">
            <div class="row">

               <div class="col-9 card">
                 <table class="table table-response table-hover ">
                   <thead>
                     <tr>
                       <th scope="col">PaymentType</th>
                       <th scope="col">Payment ID</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status Code</th>
                        <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    @foreach($order as $row)
                     <tr>
                       <th >{{ $row->payment_type }}</th>
                       <td>{{ $row->payment_id }}</td>
                       <td>{{ $row->total }} $</td>
                       <td>{{ $row->date }}</td>
                       <td>
                       	@if($row->status == 0)
                       	 <span class="badge badge-warning">Pending</span>
                       	 <span class="btn badge badge-danger">Cancel Order?</span>
                       	@elseif($row->status == 1)
                       	<span class="badge badge-info">Payment Accept</span>
                       	@elseif($row->status == 2)
                       	 <span class="badge badge-primary">Progress </span>
                       	 @elseif($row->status == 3)
                       	 <span class="badge badge-success">Delevered </span>
                       	 @else
                       	 <span class="badge badge-dark">Canceled </span>
                       	 @endif
                       </td>
                       <td>{{ $row->status_code }}</td>
                       <td>
                        <a href="{{ URL::to('user/view/order/'.$row->id) }}" class="btn btn-sm btn-info">View</a>
                       </td>
                     </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div>


               <div class="col-3">
                 <div class="card" style="width: 18rem;">
                  <img src="{{ asset('public/avatar.jpg') }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Edit Profile </a></li>
                    <li class="list-group-item"><a href="{{ route('success.orderlist') }}"> Return Order </a></li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>


            </div>
        </div>
    </div>

@endsection
