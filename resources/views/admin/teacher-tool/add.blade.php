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
                                <h2>{{ __('Update Teacher Profile') }}</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('Update Teacher Profile') }}</li>
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
                            <h2>{{ __('Update Teacher Profile') }}</h2>
                        </div>
                        <form action="{{route('teacher-profile.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$data['teacher_profile']->id}}" name="id" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label>{{__('Title')}} <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{$data['teacher_profile']->title ?? old('title')}}" placeholder="{{ __('Title') }}" class="form-control" required>
                                        @if ($errors->has('title'))
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label>{{__('Hobbies')}} <span class="text-danger">*</span></label>
                                        <input type="text" name="hobbies" value="{{$data['teacher_profile']->hobbies ?? old('hobbies')}}" placeholder="{{ __('Hobbies') }}" class="form-control" required>
                                        @if ($errors->has('hobbies'))
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('hobbies') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label>{{__('Youtube Intro Link')}} <span class="text-danger">*</span></label>
                                        <input type="text" name="youtube_intro" value="{{$data['teacher_profile']->youtube_intro ?? old('youtube_intro')}}" placeholder="{{ __('Paste Link') }}" class="form-control" required>
                                        @if ($errors->has('youtube_intro'))
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('youtube_intro') }}</span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="row col-md-6">
                                <div class="col-md-12">
                                    <div class="upload-img-box mb-25">
                                        <img src="{{getImageFile($data['teacher_profile']->thumbnail ? @"teacher_profile/thumbnail/".$data['teacher_profile']->thumbnail : '')}}">
                                        <input type="file" name="thumbnail" id="image" accept="image/*" onchange="previewFile(this)">
                                        <div class="upload-img-box-icon">
                                            <i class="fa fa-camera"></i>
                                            <p class="m-0">{{__('Thumbnail')}}</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('thumbnail'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('thumbnail') }}</span>
                                @endif
                            </div>
                                 <div class="col-md-12">
                                <div class="custom-form-group mb-3">
                                <label for="desc" class="text-lg-right text-black"> {{ __('Description') }} </label>
                                <div class="col-lg-12">
                                    <textarea name="tool_desc" class="form-control" rows="5" id="tool_desc">{{$data['teacher_profile']->tool_desc ?? old('tool_desc')}}</textarea>
                                    @if ($errors->has('tool_desc'))
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('tool_desc') }}</span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="upload-img-box mb-25">
                                        <img src="{{getImageFile($data['teacher_profile']->image ? @"teacher_profile/".$data['teacher_profile']->image : '')}}">
                                        <input type="file" name="image" id="image" accept="image/*" onchange="previewFile(this)">
                                        <div class="upload-img-box-icon">
                                            <i class="fa fa-camera"></i>
                                            <p class="m-0">{{__('Image')}}</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('image') }}</span>
                                @endif
                                <p>{{ __('Accepted Image Files') }}: JPEG, JPG, PNG <br> {{ __('Accepted Size') }}: 300 x 300 (1MB)</p>
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
    <link rel="stylesheet" href="{{asset('admin/css/custom/image-preview.css')}}">
      <link href="{{ asset('common/css/summernote/summernote.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/css/summernote/summernote-lite.min.css') }}" rel="stylesheet">
@endpush

@push('script')
    <script src="{{asset('admin/js/custom/image-preview.js')}}"></script>
    <script src="{{asset('admin/js/custom/admin-profile.js')}}"></script>
    <script src="{{asset('admin/js/custom/slug.js')}}"></script>
    <script src="{{asset('admin/js/custom/form-editor.js')}}"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="{{ asset('common/js/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#tool_desc").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush


