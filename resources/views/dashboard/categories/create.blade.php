@extends('partials.dashboard.master')
@section('content')
    <!-- begin :: Subheader -->
    <div class="toolbar">

        <div class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                <!-- begin :: Title -->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                    <a href="{{ route('dashboard.categories.index') }}"
                        class="text-muted text-hover-primary">{{ __('Categories') }}</a>
                </h1>
                <!-- end   :: Title -->

                <!-- begin :: Separator -->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!-- end   :: Separator -->

                <!-- begin :: Breadcrumb -->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!-- begin :: Item -->
                    <li class="breadcrumb-item text-muted">
                        {{ __('Categories list') }}
                    </li>
                    <!-- end   :: Item -->
                </ul>
                <!-- end   :: Breadcrumb -->

            </div>




        </div>

    </div>
    <!-- end   :: Subheader -->

    <div class="card">
        <!-- begin :: Card body -->
        <div class="card-body p-0">
            <!-- begin :: Form -->
            <form action="{{ route('dashboard.categories.store') }}" class="form" method="post" id="submitted-form"
                data-redirection-url="{{ route('dashboard.categories.index') }}">
                @csrf
                <!-- begin :: Card header -->
                <div class="card-header d-flex align-items-center">
                    <h3 class="fw-bolder text-dark">{{ __('Add new category') }}</h3>
                </div>
                <!-- end   :: Card header -->

                <!-- begin :: Inputs wrapper -->
                <div class="inputs-wrapper">



                    <!-- begin :: Row -->
                    <div class="row mb-10">

                        <!-- begin :: Column -->
                        <div class="col-md-3 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Name in arabic') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_ar_inp" name="name_ar"
                                    placeholder="example" />
                                <label for="name_ar_inp">{{ __('Enter the name in arabic') }}</label>
                            </div>
                            <p class="invalid-feedback" id="name_ar"></p>


                        </div>
                        <!-- end   :: Column -->

                        <!-- begin :: Column -->
                        <div class="col-md-3 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Name in english') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name_en_inp" name="name_en"
                                    placeholder="example" />
                                <label for="name_en_inp">{{ __('Enter the name in english') }}</label>
                            </div>
                            <p class="invalid-feedback" id="name_en"></p>
                        </div>
                        <!-- end   :: Column -->
                    {{-- Brand Dropdown --}}
<div class="col-md-3 fv-row">
    <label class="fs-5 fw-bold mb-2">{{ __('Brand') }}</label>
    <select class="form-select" data-control="select2" name="brand_id" id="brand-select"
        data-placeholder="{{ __('Choose the brand') }}" data-dir="{{ isArabic() ? 'rtl' : 'ltr' }}">
        <option value="" selected></option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select>
</div>

{{-- Model Dropdown --}}
<div class="col-md-3 fv-row">
    <label class="fs-5 fw-bold mb-2">{{ __('Model') }}</label>
    <select class="form-select" data-control="select2" name="car_model_id" id="model-select"
        data-placeholder="{{ __('Choose the model') }}" data-dir="{{ isArabic() ? 'rtl' : 'ltr' }}">
        <option value="" selected></option>
        {{-- Models will be loaded dynamically here --}}
    </select>
    <p class="invalid-feedback" id="car_model_id"></p>
</div>


                    </div>
                    <!-- end   :: Row -->

                    <!-- begin :: Row -->
                    <div class="row mb-10">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Meta tag keywords in arabic') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="meta_keyword_ar_inp" name="meta_keyword_ar"
                                    placeholder="{{ __('Enter the meta tag keywords in arabic') }}" />
                              
                            </div>
                            <p class="invalid-feedback" id="meta_keyword_ar"></p>


                        </div>
                        <!-- end   :: Column -->

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Meta tag keywords in english') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="meta_keyword_en_inp" name="meta_keyword_en"
                                    placeholder="{{ __('Enter the meta tag keywords in english') }}" />
                                
                            </div>
                            <p class="invalid-feedback" id="meta_keyword_en"></p>


                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <!-- end   :: Row -->

                    <!-- begin :: Row -->
                    <div class="row mb-10">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Meta description in arabic') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="meta_desc_ar_inp" name="meta_desc_ar"
                                    placeholder="example" />
                                <label for="meta_desc_ar_inp">{{ __('Enter the meta tag description in arabic') }}</label>
                            </div>
                            <p class="invalid-feedback" id="meta_desc_ar"></p>


                        </div>
                        <!-- end   :: Column -->

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">{{ __('Meta description in english') }}</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="meta_desc_en_inp" name="meta_desc_en"
                                    placeholder="example" />
                                <label
                                    for="meta_desc_en_inp">{{ __('Enter the meta tag description in english') }}</label>
                            </div>
                            <p class="invalid-feedback" id="meta_desc_en"></p>


                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <!-- end   :: Row -->


                </div>
                <!-- end   :: Inputs wrapper -->

                <!-- begin :: Form footer -->
                <div class="form-footer">

                    <!-- begin :: Submit btn -->
                    <button type="submit" class="btn btn-primary" id="submit-btn">

                        <span class="indicator-label">{{ __('Save') }}</span>

                        <!-- begin :: Indicator -->
                        <span class="indicator-progress">{{ __('Please wait ...') }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        <!-- end   :: Indicator -->

                    </button>
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
<script>
    $('#brand-select').on('change', function () {
        const brandId = $(this).val();

        // Clear existing models
        $('#model-select').empty().append('<option value="" selected></option>');

        if (brandId) {
            $.ajax({
                url: '/api/brands/' + brandId + '/models',
                method: 'GET',
                success: function (response) {
                    response.forEach(model => {
                        $('#model-select').append(`<option value="${model.id}">${model.name}</option>`);
                    });
                },
                error: function () {
                    alert('Something went wrong while fetching models.');
                }
            });
        }
    });
</script>

    <script>
        new Tagify(document.getElementById('meta_keyword_ar_inp'), {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });
        new Tagify(document.getElementById('meta_keyword_en_inp'), {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });
    </script>
@endpush
