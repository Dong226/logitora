@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body luggage-header luggage-search kt-align-center mb-3">
        <div class="luggage-header luggage-search kt-align-center mb-3">
        <img class="kt-widget7__img tooltip_sty" src="{{asset('media/img/truck_icon-2.png')}}" alt="">
                空車情報修正・削除
        </div>
    </div>
    <!--begin::Portlet-->
    <div class="kt-portlet__body bg-grey pt-3 pb-3"> 
        <div class="row">
            <div class="kt-portlet__head-label col-lg-6">
                <h3 class="kt-portlet__head-title">
                    荷物情報登録件数：0 件
                </h3>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-2 text-right">
                <label>表示数選択:</label>
                    <select class="form-control col-5 bootstrap-select" id="kt_form">
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="4">30</option>
                        <option value="3">50</option>
                        <option value="6">100</option>
                    </select>
            </div>
        </div> 
    </div>
    <div class="kt-portlet__body kt-form pr-0 pl-0 pt-2 pb-1">
        <!--begin: Search Form -->
        <div class="row ml-0">
            <div class="col-lg-1 bg-custom-grey form-control text-center">
               並べ替え
            </div>
            <div class="col-lg-10 row">
                <div class="col-md-4">
                    <div class="kt-form__group kt-form__group--inline check-sort">
                        <div class="kt-form__label filter_sort">
                            <label>1番目:</label>
                        </div>
                        <div class="kt-form__control first_control">
                            <select class="form-control bootstrap-select">
                                <option value="1">指定しない</option>
                                <option value="2">20</option>
                                <option value="4">30</option>
                                <option value="3">50</option>
                                <option value="6">100</option>
                            </select>
                        </div>
                        <div class="kt-form__control second_control">
                            <select class="form-control bootstrap-select" >
                                <option value="">昇順</option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>
                                <option value="3">Canceled</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kt-form__group kt-form__group--inline check-sort">
                        <div class="kt-form__label filter_sort">
                            <label>2番目:</label>
                        </div>
                        <div class="kt-form__control first_control">
                            <select class="form-control bootstrap-select">
                                <option value="">指定しない</option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>

                            </select>
                        </div>
                        <div class="kt-form__control second_control">
                            <select class="form-control bootstrap-select" >
                                <option value="">昇順</option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>
                                <option value="3">Canceled</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kt-form__group kt-form__group--inline check-sort">
                        <div class="kt-form__label filter_sort">
                            <label>3番目:</label>
                        </div>
                        <div class="kt-form__control first_control">
                            <select class="form-control bootstrap-select">
                                <option value="">指定しない</option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>
                            </select>
                        </div>
                        <div class="kt-form__control second_control">
                            <select class="form-control bootstrap-select" >
                                <option value="">昇順</option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>
                                <option value="3">Canceled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 pl-0 pr-0 text-right">
                <button type="button" class="btn btn-brand btn-pill btn-yellow"> 並べ替え</button>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body pt-0 pb-2 pl-0">
        <div class="row">
            <div class="col-xl-2">
                <button type="button" class="btn btn-elevate"> 一消去</button>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

        <!--begin: Datatable -->
        <table class="table table-bordered luggage_edit">
            <thead >
                <tr>
                    <th>一斉消去</th>
                    <th>消去</th>
                    <th>修正</th>
                    <th>問合番号</th>
                    <th>積込日時</th>
                    <th>積地</th>
                    <th>荷降日時</th>
                    <th>降地</th>
                    <th>車輌</th>
                    <th>種類１</th>
                    <th>種類２</th>
                    <th>種類３</th>
                    <th>担当</th>
                    <th>備考</th>
                    
                </tr>
            </thead>
            <tbody>
                
                <tr class="odd">
                    <td valign="top" colspan="14" class="dataTables_empty ">荷物情報のデータがありません</td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-lg justify-content-center mt-3">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous" style = "border-radius:50%;background-color:#fff">
                <i style='font-size:12px; color:#396ec2' class='fas' >&#xf0d9;</i>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next" style = "border-radius:50%; background-color:#fff">
                    <i style='font-size:12px;color:#396ec2' class='fas' >&#xf0da;</i>
                </a>
                </li>
            </ul>
        </nav>
                                        
        <!--end: Datatable -->
    </div>
    <!--end::Portlet-->
    <!--end::Portlet-->
</div>

@endsection

@section('sidebar')
  @include('includes.sidebar02')
@endsection
