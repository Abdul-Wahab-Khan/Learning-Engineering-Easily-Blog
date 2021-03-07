@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="image image-responsive col-md-4">
            <img src="{{asset('about/abdulWahabKhan.jpg')}}" width="100%" class="image-responsive" alt="Abdul Wahab Khan">
        </div>
        <div>
            <H2>Abdul Wahab Khan</H2>
            Abdul wahab khan is a software developer with {{$yearsOfExperience}}+ years of experience in this field.<br>
            You can get connected with him using following links

            <div><br>
                <h4>Links to Social Media</h4>
                <ul>
                    <i class="fa fa-whatsapp"> Whatsapp</i>: +93744503252 <br />
                    <a href="https://www.facebook.com/abdulwahab.khan.982845/" target="_blank" class="btn btn-outline-secondary mt-1"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="https://twitter.com/abdul-wahab-khan" target="_blank" class="btn btn-outline-secondary mt-1"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                    <a href="https://www.linkedin.com/in/abdul-wahab-khan-857642169/" target="_blank" class="btn btn-outline-secondary mt-1"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
                </ul>
            </div>
        </div>
    </div>

@endsection
