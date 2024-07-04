
@extends('layouts.nowhere')
@section('content')
    
    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('donations.store')}}"  class="donation_form">
                        @csrf
                        <div class="form-row align-items-center">
                            
                              
                                    <div class="input_field ">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" name="amount" class="form-control" placeholder="10000000" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    
                               
                            </div>
                            
                        </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <button type="submit"class="boxed-btn4">Donate Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
@endsection

  
