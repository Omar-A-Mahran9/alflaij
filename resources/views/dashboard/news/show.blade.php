@extends('partials.dashboard.master')
@section('content')

<!-- begin :: Subheader -->
<div class="toolbar">

    <div class="container-fluid d-flex flex-stack">

        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

            <!-- begin :: Title -->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"><a href="{{ route('dashboard.news.index') }}" class="text-muted text-hover-primary">{{ __("News") }}</a></h1>
            <!-- end   :: Title -->

            <!-- begin :: Separator -->
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            <!-- end   :: Separator -->

            <!-- begin :: Breadcrumb -->
           
            <!-- end   :: Breadcrumb -->

        </div>

    </div>

</div>
<!-- end   :: Subheader -->

<div class="card">
    <!-- begin :: Card body -->
    <div class="card-body p-0">
        <!-- begin :: Form -->
        <form class="form">
            <!-- begin :: Card header -->
            <div class="card-header d-flex align-items-center">
                <h3 class="fw-bolder text-dark">{{ __("News") . " : " . $news->title  }}</h3>
                <div class="card-title">
                    <div class="form-check form-switch form-check-custom form-check-solid mb-2">
                        <label class="fs-5 fw-bold mt-1">{{ __("highlighted news  ?") }}</label>
                        <input class="form-check-input mx-2" style="height: 28px;width:60px;" type="checkbox" disabled @if ( $news['highlighted_news'] ) checked @endif />
                        <label class="form-check-label"></label>
                    </div>

                </div>
            </div>
            <!-- end   :: Card header -->

            <!-- begin :: Inputs wrapper -->
            <div class="inputs-wrapper">


                <!-- begin :: Row -->
                <div class="row mb-10">

                    <!-- begin :: Column -->
                    <div class="col-md-12 fv-row d-flex justify-content-evenly">

                        <div class="d-flex flex-column">
                            <!-- begin :: Upload image component -->
                            <label class="text-center fw-bold mb-4">{{ __("Image") }}</label>
                            <x-dashboard.upload-image-inp name="main_image" :image="$news['main_image']" directory="News" placeholder="default.jpg" type="show"></x-dashboard.upload-image-inp>
                            <p class="invalid-feedback" id="main_image"></p>
                            <!-- end   :: Upload image component -->
                        </div>

                    </div>
                    <!-- end   :: Column -->

                </div>
                <!-- end   :: Row -->


                <!-- begin :: Row -->
                <div class="row mb-8">

                    <!-- begin :: Column -->
                    <div class="col-md-6 fv-row">

                        <label class="fs-5 fw-bold mb-2">{{ __("News title in arabic") }}</label>
                        <input type="text" class="form-control" readonly value="{{ $news['title_ar'] }}" />

                    </div>
                    <!-- end   :: Column -->

                    <!-- begin :: Column -->
                    <div class="col-md-6 fv-row">

                        <label class="fs-5 fw-bold mb-2">{{ __("News title in english") }}</label>
                        <input type="text" class="form-control" readonly value="{{ $news['title_en'] }}" />

                    </div>
                    <!-- end   :: Column -->

                </div>
                <!-- end   :: Row -->

                <!-- begin :: Row -->
 <div class="row mb-10">

                        <!-- begin :: Column -->
                         <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Description in arabic') }}</label>
 
                            <textarea     name="description_ar" id="meta_tag_description_ar_inp"
                                data-kt-autosize="true" class="tinymce">{{ $news->description_ar }}</textarea>

                            <p class="text-danger invalid-feedback" id="description_ar"></p>


                        </div>
                     
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Description in english') }}</label>
 
                            <textarea     name="description_en" id="meta_tag_description_en_inp"
                                data-kt-autosize="true" class="tinymce">{{ $news->description_en }}</textarea>

                            <p class="text-danger invalid-feedback" id="description_en"></p>


                        </div>
 
                    </div>
                    <!-- end   :: Row -->


                </div>
            <!-- begin :: Form footer -->
            <div class="form-footer">

                <!-- begin :: Submit btn -->
                <a href="{{ route('dashboard.news.index') }}" class="btn btn-primary">
                    <span class="indicator-label">{{ __("Back") }}</span>
                </a>
                <!-- end   :: Submit btn -->

            </div>
            <!-- end   :: Form footer -->
        </form>
        <!-- end   :: Form -->
    </div>
    <!-- end   :: Card body -->
</div>

@endsection
@push('scripts')
    <script src="{{ asset('dashboard-assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
        <script src="{{ asset('dashboard-assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        $(document).ready(() => {

            initTinyMc(true);

            new Tagify(document.getElementById('tags_inp'), {
                originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
            });


        });
    </script>
@endpush
