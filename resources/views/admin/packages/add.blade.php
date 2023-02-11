@extends('layouts.admin')

@section('content')
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>{{ __('Packages Add') }}</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
                                    <li class="breadcrumb-item">{{ __('Packages') }}</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('Packages Add') }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title d-flex justify-content-between">
                            <h2>{{ __('Packages Add') }}</h2>
                        </div>
                        <form action="{{route('packages.packages.create')}}" method="post" class="form-horizontal">
                            @csrf
                           <div class="input__group mb-25">
                                <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="{{ @$policy->title ?? old('title') }}" />

                                @if ($errors->has('title'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('title') }}</span>
                                @endif

                            </div>
                            
                             <div class="input__group mb-25">
                                <label>{{ __('Sub Title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="sub_title" value="{{ @$policy->sub_title ?? old('sub_title') }}" />

                                @if ($errors->has('sub_title'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('sub_title') }}</span>
                                @endif

                            </div>
                            
                             <div class="input__group mb-25">
                                <label>{{ __('Discounted Price') }} <span class="text-danger">*</span></label>
                                <input type="number" name="price" value="{{ @$policy->price ?? old('price') }}" />

                                @if ($errors->has('price'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('price') }}</span>
                                @endif

                            </div>
                            
                             <div class="input__group mb-25">
                                <label>{{ __('Original Price') }} <span class="text-danger">*</span></label>
                                <input type="number" name="real_price" value="{{ @$policy->real_price ?? old('real_price') }}" />

                                @if ($errors->has('real_price'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('real_price') }}</span>
                                @endif

                            </div>
                            
                            <div class="input__group mb-25">
                                <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                                <textarea name="description" id="summernote">{{ @$policy->description ?? old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('description') }}</span>
                                @endif

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page content area end -->
@endsection

@push('style')
    <!-- Summernote CSS - CDN Link -->
    <link href="{{ asset('common/css/summernote/summernote.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/css/summernote/summernote-lite.min.css') }}" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
@endpush

@push('script')
    <script src="{{asset('admin/js/custom/slug.js')}}"></script>
    <script src="{{asset('admin/js/custom/form-editor.js')}}"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="{{ asset('common/js/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
@endpush

