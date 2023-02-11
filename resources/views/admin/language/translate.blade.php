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
                                <h2>{{__('Translate language')}}</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('language.index')}}">{{__('Language Settings')}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{__('Translate Language')}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row admin-dashboard-translate-your-language-page">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <button class="btn btn-success btn-sm mb-2" type="button" data-bs-toggle="modal" data-bs-target="#add-todo-modal">
                            <i class="fa fa-plus"></i> {{ __('Import Keywords') }}
                        </button>
                        <form action="{{route('update.translate', [$language->id])}}" method="post" enctype="multipart/form-data" data-parsley-validate>

                            <div class="item-title d-flex justify-content-between">
                                <h2> Translate Your Language (English => {{$language->language}} ) </h2>
                                <div>
                                <button class="btn btn-primary addmore"> <i class="fa fa-plus"></i>
                                    {{ __('Add More') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('Update Language') }}</button>
                                </div>
                            </div>
                            <div class="card-body">

                                @csrf
                                <div class="row">
                                    <table class="row-border data-table-filter table-style">
                                        <thead>
                                        <tr>
                                            <th>{{ __('Key') }}</th>
                                            <th>{{ __('Value') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody id="append">
                                        @foreach($translators as $key => $value)
                                            <tr>
                                                <td>
                                                    <textarea type="text" name="key[]" class="form-control">{!! $key !!}</textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="value[]" class="form-control">{!! $value !!}</textarea>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="row justify-content-end">
                                        <div class="col-md-6">
                                            <div class="form-group float-end">
                                                <button type="submit" class="btn btn-blue">{{__('Update')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Page content area end -->

    <!-- Add Modal section start -->
    <div class="modal fade" id="add-todo-modal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Import Language') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('language.import') }}" method="post">
                    @csrf
                    <input type="hidden" name="current" value="{{ $language->iso_code }}">
                    <div class="modal-body">
                        <div class="mb-30">
                            <span class="text-danger text-center">{{ __('Note: If you import keywords, your current keywords will be deleted and replaced by the imported keywords.') }}</span>
                        </div>
                        <div class="input__group mb-30">
                            <label for="status" class="text-lg-right text-black"> {{__('Language')}} </label>
                            <select name="import" class="custom-select export" id="inputGroupSelect02">
                                <option selected> {{ __('Select Option') }} </option>
                                @foreach ($languages as $la)
                                    <option value="{{ $la->iso_code }}">{{ __($la->language) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-purple">{{ __('Import') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Modal section end -->
@endsection

@push('script')
    <script>
        $(function() {
            let i = {{ $translators != null ? count($translators) : 0 }};
            $('.addmore').on('click', function (e) {
                e.preventDefault()
                let html = `
                        <tr>
                            <td>
                                <textarea type="text" name="key[]" class="form-control"></textarea>
                            </td>
                            <td>
                                <textarea type="text" name="value[]" class="form-control"></textarea>
                            </td>
                        </tr>
            `;
                i++;
                $('#append').prepend(html);
            })
        });
    </script>
@endpush
