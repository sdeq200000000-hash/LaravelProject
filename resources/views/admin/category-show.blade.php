@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Category Details</h3>

            <a href="{{ route('admin.categories') }}" class="tf-button style-1 w208">
                ← Back
            </a>
        </div>

        <div class="tf-section-2">

            <div class="wg-box text-center">

                @if($category->image)
                    <img src="{{ asset('uploads/categories/' . $category->image) }}"
                         style="width:120px;height:120px;object-fit:cover;border-radius:10px;">
                @else
                    <p>No Image</p>
                @endif

                <h3>{{ $category->name }}</h3>
                <p>Slug: {{ $category->slug }}</p>

            </div>

            <div class="wg-box">

                <h5>Category Info</h5>

                <p>
                    <b>Category Name:</b><br>
                    {{ $category->name }}
                </p>

                <p>
                    <b>Slug:</b><br>
                    {{ $category->slug }}
                </p>

                <p>
                    <b>Created:</b><br>
                    {{ $category->created_at }}
                </p>

                <p>
                    <b>Updated:</b><br>
                    {{ $category->updated_at }}
                </p>

            </div>

        </div>

    </div>
</div>

@endsection