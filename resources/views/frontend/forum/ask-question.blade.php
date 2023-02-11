@extends('frontend.layouts.app')
@section('content')
    <div class="">
        <!-- Forum Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap banner-less-header-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content">

                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item font-14"><a href="{{ route('main.index') }}"><span class="iconify" data-icon="bx:home-alt"></span> {{ __('Home') }}</a>
                                            </li>
                                            <li class="breadcrumb-item font-14" aria-current="page"><a href="{{ route('forum.index') }}">{{ __('Forum') }}</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">{{ __('Ask a Question') }}</li>
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Forum Page Header End -->

        <!-- Ask a question area start -->
        <section class="ask-a-question-area section-b-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('forum.question.store') }}" class="ask-question-form radius-4 p-30" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3">{{ __('Topic Title') }}</label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="Enter your topic title" value="" required="">
                                    @if ($errors->has('title'))
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-30">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3">{{ __('Forum Category') }}</label>
                                    <select name="forum_category_id" id="inputState" class="form-select contact_us_issue_id" required>
                                        <option value="">{{ __('Select a Category') }}</option>
                                        @foreach($forumCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('forum_category_id'))
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('forum_category_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3">{{ __('Description') }}</label>
                                    <textarea name="description" id="summernote" required></textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="theme-btn default-hover-btn theme-button1">{{ __('Publish Question') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ask a question area end -->

        @if(count($blogs) >= 1)
            <!-- Forum community blog articles Area Start -->
            <section class="community-blog-articles-area section-t-space section-b-85-space bg-page">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="section-heading">{{ __('Community Blog Articles') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($blogs as $blog)
                            <!-- Blog Item Start -->
                            <div class="col-md-6">
                                <div class="blog-item">

                                    <div class="blog-item-img-wrap overflow-hidden position-relative">
                                        <a href="{{ route('blog-details', $blog->slug) }}"><img src="{{ getImageFile($blog->image) }}" alt="img" class="img-fluid"></a>
                                        <div
                                            class="blog-item-tag position-absolute text-uppercase font-12 font-semi-bold text-white bg-hover radius-3">{{ __(@$blog->category->name) }}</div>
                                    </div>

                                    <div class="blog-item-bottom-part">
                                        <h3 class="card-title blog-title"><a href="{{ route('blog-details', $blog->slug) }}">{{ Str::limit($blog->title, 50) }}</a></h3>
                                        <p class="blog-author-name-publish-date font-13 font-medium color-gray text-uppercase">{{ $blog->user->name }}
                                            / {{ $blog->created_at->format(' j  M, Y')  }}</p>
                                        <p class="card-text blog-content">{!!  Str::limit($blog->details, 200) !!}</p>

                                        <div class="blog-read-more-btn">
                                            <a href="{{ route('blog-details', $blog->slug) }}" class="theme-btn font-15 ps-0 font-medium text-capitalize color-hover">{{ __('Read More') }}
                                                <i data-feather="arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item Start -->
                        @endforeach
                        <!-- section button start-->
                        <div class="col-12 text-center section-btn">
                            <a href="{{ route('blogs') }}" class="theme-btn default-hover-btn theme-button1">{{ __('All Blogs') }} <i data-feather="arrow-right"></i></a>
                        </div>
                        <!-- section button end-->
                    </div>
                </div>
            </section>
            <!-- Forum community blog articles Area End -->
        @endif
    </div>
@endsection

@push('style')
    <!-- Summernote CSS - CDN Link -->
    <link href="{{ asset('common/css/summernote/summernote.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/css/summernote/summernote-lite.min.css') }}" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
@endpush

@push('script')
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
