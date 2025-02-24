@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body">
        <div class="luggage-header">
            <div class="luggage-search kt-align-center mb-3">
                <img class="kt-widget7__img tooltip_sty" src="{{asset('media/img/truck_icon-2.png')}}" alt="">
                空車情報検索結果
            </div>
            <div class="message row mt-3 mb-5">
                <div class="col-3"></div>
                <div class="search_message-blue carry kt-align-center col-6 mt-4">
                    <span class = "search_message_carry">お電話にて問合番号・担当をお伝えください。</span>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
        <!--begin::Portlet-->
        <div class="luggage_search">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head luggage row align-items-center">
                    <div class="kt-portlet__head-label col-xl-4">
                        <h3 class="kt-portlet__head-title">
                            空車情報登録件数：325 件
                        </h3>
                    </div>
                    <div class="col-xl-6"></div>
                    <div class=" col-xl-2 order-2 order-xl-1">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label filter__number">
                                    <label>表示数選択:</label>
                                </div>
                                <div class="kt-form__control">
                                    <select class="form-control bootstrap-select" id="kt_form">
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="4">30</option>
                                        <option value="3">50</option>
                                        <option value="6">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right">
                        <div class="row">
                            <div class="col-xl-1 sort_sign row  align-items-center">
                                並べ替え
                            </div>
                            <div class="col-xl-10 row align-items-center">
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
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
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
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
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
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
                            <div class="col-xl-1">
                                <div class="kt-margin-b-20-tablet-and-mobile">
                                    <button type="button" class="btn btn-brand btn-elevate btn-pill-blue"> 並べ替え</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!--end: Search Form -->
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="row">
                    <!--begin: Datatable -->
                        <table class="table table-bordered ">
                            <thead class="blue">
                                <tr>
                                    <th width="75px;">問合番号</th>
                                    <th width="53px;">荷主<br>会社</th>
                                    <th width="59px;">担当</th>
                                    <th width="108px;">TEL</th>
                                    <th width="72px;">空車日時</th>
                                    <th width="90px;">空車地</th>
                                    <th width="82px;">積可能地</th>
                                    <th width="82px;">荷降日時</th>
                                    <th width="123px;">降可能地</th>
                                    <th width="45px;">車輌</th>
                                    <th width="55px;">種類１</th>
                                    <th width="53px;">種類２</th>
                                    <th width="53px;">種類３</th>
                                    <th width="74px;">備考</th>
                                    <th width="83px;">入力日時</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>257432</td>
                                    <td>㈱ロジとら</td>
                                    <td>菊地祐介</td>
                                    <td>050-3536-0883</td>
                                    <td>07/03(水)13時</td>
                                    <td>青森県青森市</td>
                                    <td>青森県、岩手県、秋田県</td>
                                    <td>07/04(木)午前</td>
                                    <td>滋賀県、京都府、兵庫県、大阪府、和歌山県、奈良県</td>
                                    <td>15t</td>
                                    <td>ウ</td>
                                    <td></td>
                                    <td>冷蔵</td>
                                    <td>6.6ｔ積載　6ｍ荷台</td>
                                    <td>07/02 09:16</td>
                                </tr>
                                <tr>
                                    <td>265421</td>
                                    <td>㈱ロジとら</td>
                                    <td>菊地祐介</td>
                                    <td>050-3536-0883</td>
                                    <td>07/03(水)13時</td>
                                    <td>青森県青森市</td>
                                    <td>秋田県</td>
                                    <td>07/04(木)午前</td>
                                    <td>福島県福島市</td>
                                    <td>15t</td>
                                    <td>ウイング</td>
                                    <td></td>
                                    <td>冷蔵</td>
                                    <td>6.6ｔ積載　6ｍ荷台</td>
                                    <td>07/02 09:16</td>
                                </tr>
                                <tr>
                                    <td>356847</td>
                                    <td>㈱ロジとら</td>
                                    <td>菊地祐介</td>
                                    <td>050-3536-0883</td>
                                    <td>07/03(水)13時</td>
                                    <td>青森県青森市</td>
                                    <td>青森県、岩手県、秋田県</td>
                                    <td>07/04(木)午前</td>
                                    <td>福島県福島市</td>
                                    <td>15t</td>
                                    <td>ウイング</td>
                                    <td></td>
                                    <td>冷蔵</td>
                                    <td>6.6ｔ積載　6ｍ荷台</td>
                                    <td>07/02 09:16</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-lg justify-content-center mt-3">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous" style = "border-radius:50%;background-color:#fff">
                            <i style='font-size:12px; color:#396ec2' class='fas' >&#xf0d9;</i>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next" style = "border-radius:50%; background-color:#fff">
                                <i style='font-size:12px;color:#396ec2' class='fas' >&#xf0da;</i>
                            </a>
                            </li>
                        </ul>
                    </nav>
                    
                        <div class="kt-action_info__content kt-align-center mt-4">
                            <div class="kt-widget5_section-right">
                                <button type="button" class="btn  btn-wide luggage-search-btn" style = "width:20%">条件入力に戻る</button>
                            </div>
                        </div>
                    

                    
                    
                    <!--end: Datatable -->
                </div>
            </div>

        </div>
        <!--end::Portlet-->
        
    </div>
</div>   
@endsection

@section('sidebar')
  @include('includes.sidebar02')
@endsection
