@extends('layouts/layouts')

@section('title')
    Details
@endsection

@section('body')
    <div class="container-xl">
        <div class="row text-danger">
            <div class="col-12 col-md-5">
                <img class="card-img-top " src="{{asset('img/mainslidephoto2.jpg')}}" alt="image" style="width:100%">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="h1 fw-normal pb-1">{{$product->name_tm}}</h4>
                <div class=" h3 fw-normal pb-2">{{$product->price}} TMT</div>
                <div class="h5 fw-normal ">barcode: {{$product->barcode}}</div>
                <div class="h5 fw-normal ">brand: {{$product->brand->name}}</div>
                <div class="h5 fw-normal">category: {{$product->category->name}}</div>
                <div class="h5 fw-normal pb-2">Description: {{$product->description_tm}}</div>
            </div>
        </div>
    </div>
@endsection