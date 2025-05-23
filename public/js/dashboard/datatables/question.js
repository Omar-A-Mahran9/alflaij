"use strict";
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Class definition
let KTDatatable = (function () {
    // Shared variables
    let table;
    let datatable;
    let filter;

    // Private functions
    let initDatatable = function () {
        datatable = $("#kt_datatable").DataTable({
            orderable: false,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[4, "desc"]], // display records number and ordering type
            stateSave: false,
            select: {
                style: "os",
                selector: "td:first-child",
                className: "row-selected",
            },
            ajax: {
                data: function () {
                    let datatable = $("#kt_datatable");
                    let info = datatable.DataTable().page.info();
                    datatable
                        .DataTable()
                        .ajax.url(
                            `/dashboard/questions?page=${info.page + 1}&per_page=${
                                info.length
                            }`
                        );
                },
            },
            columns: [
                { data: "id" },
                { data: "question_ar" },
                { data: "question_en" },
                { data: "answer_ar" },
                { data: "answer_en" },
                { data: "created_at", name: "created_at" },
                { data: null },
            ],
            columnDefs: [
                // {
                //     targets: 4,
                //     width:150,
                //     render:function (data , type , row) {
                //         return data.join(' , ');
                //     }
                // },

                // {
                //     targets: 4,
                //     render: function (data, type, row) {
                //         if (data !== null)
                //             return `<img style="height:50px;width:80px;border-radius:4px" src="${getImagePathFromDirectory(
                //                 data,
                //                 "News"
                //             )}" class="me-3" >`;
                //         else return "<h1>-</h1>";
                //     },
                // },
                        
                {
                    targets: -1,
                    data: null,
                    render: function (data, type, row) {
                        return `
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                ${__("Actions")}
                                <span class="svg-icon svg-icon-5 m-0">
                                    <i class="fa fa-angle-down mx-1"></i>
                                </span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/dashboard/questions/${
                                        row.id
                                    }/edit" class="menu-link px-3 d-flex justify-content-between edit-row" >
                                       <span> ${__("Edit")} </span>
                                       <span>  <i class="fa fa-edit text-primary"></i> </span>
                                    </a>

                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/dashboard/questions/${row.id}" class="menu-link px-3 d-flex justify-content-between" >
                                       <span> ${__("Show")} </span>
                                       <span>  <i class="fa fa-eye text-black-50"></i> </span>
                                    </a>

                                </div>
                                <!--end::Menu item-->
 
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                <form action="{{ route('dashboard.questions.destroy',['question'=>${row.id}]) }}" class="form" method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <a href="#" class="menu-link px-3 d-flex justify-content-between delete-row" data-row-id="${
                                    row.id
                                }" data-type="${__("question")}">
                              
                                       <span> ${__("Delete")} </span>
                                       <span>  <i class="fa fa-trash text-danger"></i> </span>
                                    </a>
                                      </form>
                                </div>
                                <!--end::Menu item-->

                                <!--end::Menu item-->

                            </div>
                                <!--end::Menu item-->

                            </div>
                            <!--end::Menu-->
                        `;
                    },
                },
            ],
        });

        table = datatable.$;

        datatable.on("draw", function () {
            KTMenu.createInstances();
            handleFilterDatatable();
            handleDeleteRows();
        });
    };

    // general search in datatable
    let handleSearchDatatable = () => {
        $("#general-search-inp").keyup(function () {
            datatable.search($(this).val()).draw();
        });
    };

    //
    let handleDeleteRows = () => {
        $(".delete-row").click(function () {
            let rowId = $(this).data("row-id");
            let type = $(this).data("type");
    
            deleteAlert(type).then(function (result) {
                if (result.value) {
                    loadingAlert(__("deleting now ..."));
    
                    $.ajax({
                        method: "delete",
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        url: "/dashboard/questions/" + rowId,
                        success: () => {
                            setTimeout(() => {
                                successAlert(`${__('You have deleted the') + ' ' + type + ' ' + __('successfully !')} `)
                                    .then(function () {
                                        datatable.draw();
                                    });
                            }, 1000);
                        },
                        error: (err) => {
                            let errorMessage = err.responseJSON.errors && err.responseJSON.errors["partner"] ? err.responseJSON.errors["partner"] : __("An error occurred.");
                            errorAlert(errorMessage);
                        },
                    });
                } else if (result.dismiss === "cancel") {
                    errorAlert(__("was not deleted !"));
                }
            });
        });
    };
    



    // Filter Datatable
    let handleFilterDatatable = () => {
        $(".filter-datatable-inp").each((index, element) => {
            $(element).change(function () {
                let columnIndex = $(this).data("filter-index"); // index of the searching column

                datatable.column(columnIndex).search($(this).val()).draw();
            });
        });
    };

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatable.init();
});
