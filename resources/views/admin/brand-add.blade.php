@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">

        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Add Brand</h3>

            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">

                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>

                <li><i class="icon-chevron-right"></i></li>

                <li>
                    <a href="{{ route('admin.brands') }}">
                        <div class="text-tiny">Brands</div>
                    </a>
                </li>

                <li><i class="icon-chevron-right"></i></li>

                <li>
                    <div class="text-tiny">Add Brand</div>
                </li>

            </ul>
        </div>

        <form class="tf-section-2 form-add-product"
              method="POST"
              enctype="multipart/form-data"
              action="{{ route('admin.brand.store') }}">

            @csrf

            <div class="wg-box">

                <fieldset class="name">
                    <div class="body-title mb-10">
                        Brand Name <span class="tf-color-1">*</span>
                    </div>

                    <input class="mb-10"
                           type="text"
                           placeholder="Enter brand name"
                           name="name"
                           value="{{ old('name') }}"
                           required>
                </fieldset>

                <fieldset class="name">
                    <div class="body-title mb-10">
                        Slug <span class="tf-color-1">*</span>
                    </div>

                    <input class="mb-10"
                           type="text"
                           placeholder="Enter brand slug"
                           name="slug"
                           value="{{ old('slug') }}"
                           required>
                </fieldset>

                <fieldset class="shortdescription">
                    <div class="body-title mb-10">
                        Short Description
                    </div>

                    <textarea class="mb-10 ht-150"
                              name="short_description"
                              placeholder="Short Description">{{ old('short_description') }}</textarea>
                </fieldset>

                <fieldset class="description">
                    <div class="body-title mb-10">
                        Description
                    </div>

                    <textarea class="mb-10"
                              name="description"
                              placeholder="Description">{{ old('description') }}</textarea>
                </fieldset>

            </div>

            <div class="wg-box">

                <fieldset>
                    <div class="body-title">
                        Upload Brand Image <span class="tf-color-1">*</span>
                    </div>

                    <div class="upload-image flex-grow">

                        <div class="item" id="imgpreview" style="display:none">
                            <img src="" class="effect8" alt="">
                        </div>

                        <div id="upload-file" class="item up-load">

                            <label class="uploadfile" for="myFile">

                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>

                                <span class="body-text">
                                    Drop your image here or select
                                    <span class="tf-color">click to browse</span>
                                </span>

                                <input type="file"
                                       id="myFile"
                                       name="image"
                                       accept="image/*">

                            </label>

                        </div>

                    </div>
                </fieldset>

                <div class="cols gap10">
                    <button class="tf-button w-full" type="submit">
                        Add Brand
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>

@endsection