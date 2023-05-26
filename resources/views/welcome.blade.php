@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <form action="/" method="get">
            <select class="form-control mb-3" name="category" id="">
                <option selected disabled value="">Choose</option>
                @foreach($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="row">
        @foreach($post as $item)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 100%; height: 100%">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <span class="card-subtitle mb-2 text-body-secondary">{{ $item->user->name }} {{ $item->created_at->format('m/d/y') }}</span>
                    <p class="card-text">{!! $item->body !!}</p>
                    <a href="/blog/{{ $item->slug }}" class="card-link">See More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection