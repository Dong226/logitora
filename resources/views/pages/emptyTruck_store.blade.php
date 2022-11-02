@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body">
        <div class="kt-widget5__content">
            <div class="row">
                <div class="col-4 text-right"></div>
                <div class="col-4 text-center"><h2 class="kt-widget5__normal text-dark"><img src="{{asset('media/img/freight.png')}}" class="mr-3">空車情報新規登録
                    </h2>
                </div>
                <div class="col-4 text-right mt-4">
                        <label class="kt-radio kt-radio--brand text-dark kt-font-lg">
                            <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
                        </label>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body bg-grey text-dark">
        <div class="kt-form mt-5">
            <div class="kt-portlet__body">
                <form class="kt-form form_style" action="/emptyTruck_store" method="post">
                    @csrf
                    <input type="hidden" name="emptyplaceSpec" value="">
                    <input type="hidden" name="beginplace" value="">
                    <input type="hidden" name="endplace" value="">
                    <div class="form-group">
                        <label class="kt-checkbox kt-checkbox--brand kt-font-xl text-dark">
                            <input type="checkbox" name="emergency_case">緊急案件
                            <span class="bg-white border-dark"></span>
                        </label>
                        <label class="form-group kt-font-xl text-dark ml-5">
                            ※大至急手配しなくてはいけない案件の場合はチェックしてください。
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group mr-xl-5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車日時
                                            </label>
                                            <div class="input-group">
                                            <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="loading_date">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">時間
                                            </label>
                                            <select class="col form-control input_style kt-font-xl" id="loading_time" name="loading_time">
                                                <option value="0">0時</option>
                                                <option value="1">1時</option>
                                                <option value="2">2時</option>
                                                <option value="3">3時</option>
                                                <option value="4">4時</option>
                                                <option value="5">5時</option>
                                                <option value="6">6時</option>
                                                <option value="7">7時</option>
                                                <option value="8">8時</option>
                                                <option value="9">9時</option>
                                                <option value="10">10時</option>
                                                <option value="11">11時</option>
                                                <option value="12">12時</option>
                                                <option value="13">13時</option>
                                                <option value="14">14時</option>
                                                <option value="15">15時</option>
                                                <option value="16">16時</option>
                                                <option value="17">17時</option>
                                                <option value="18">18時</option>
                                                <option value="19">19時</option>
                                                <option value="20">20時</option>
                                                <option value="21">21時</option>
                                                <option value="22">22時</option>
                                                <option value="23">23時</option>
                                                <option value="30">午前</option>
                                                <option value="31" selected>午後</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mr-xl-5">
                                    <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>積可能地
                                    </label>
                                    <div class="input-group">
                                        <div class="box_left form-control kt-font-xl input_style" id="box_left"></div>  
                                    </div>
                                </div>
                                <div class="form-group mr-xl-5">
                                    <div class="row mt-5">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>降日時
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="drop_date">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">時間
                                            </label>
                                            <select class="col form-control input_style kt-font-xl" id="drop_time" name="drop_time">
                                                <option value="0">0時</option>
                                                <option value="1">1時</option>
                                                <option value="2">2時</option>
                                                <option value="3">3時</option>
                                                <option value="4">4時</option>
                                                <option value="5">5時</option>
                                                <option value="6">6時</option>
                                                <option value="7">7時</option>
                                                <option value="8">8時</option>
                                                <option value="9">9時</option>
                                                <option value="10">10時</option>
                                                <option value="11">11時</option>
                                                <option value="12">12時</option>
                                                <option value="13">13時</option>
                                                <option value="14">14時</option>
                                                <option value="15">15時</option>
                                                <option value="16">16時</option>
                                                <option value="17">17時</option>
                                                <option value="18">18時</option>
                                                <option value="19">19時</option>
                                                <option value="20">20時</option>
                                                <option value="21">21時</option>
                                                <option value="22">22時</option>
                                                <option value="23">23時</option>
                                                <option value="30">午前</option>
                                                <option value="31" selected>午後</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mr-xl-5">
                                    <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>降可能地
                                    </label>
                                    <div class="input-group">
                                        <div class="box_right form-control kt-font-xl input_style" id="box_right"></div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group ml-xl-5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車地
                                            </label>
                                            <div class="input-group">
                                                <div class="box_empty_spec form-control kt-font-xl input_style" id="box_empty_spec" style="height:60px"></div>  
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">市区町村
                                            </label>
                                            <div class="input-group">
                                                <input class="col form-control kt-font-xl input_style" name="city">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('includes.map')
                    <div class="kt-portlet__content text-dark">
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>降可能地</label>
                            <div class="col-10 mt-3">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="vehicle" value="15t">15t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="10t">10t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="7t">7t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="4t">4t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="2t">2t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="軽">軽
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle" value="トレーラー">トレーラー
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>種類1</label>
                            <div class="col-10 mt-3">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="type1" value="ウイング">ウイング
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="箱">箱
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="平">平
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="ユニック">ユニック
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="ウイング・箱">ウイング・箱
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="type1" value="ウイング・平">ウイング・平
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="平・ユニック">平・ユニック
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type1" value="その他">その他
                                        <span></span>
                                    </label>
                                    <label class="kt-text kt-text--brand kt-font-lg">
                                        <input type="text" class="form-control kt-font-xl input_style" name="typeOther">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">種類2</label>
                            <div class="col-10">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="type2" value="高床">高床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="中低床">中低床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="低床">低床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="フルワイド">フルワイド
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="セミワイド">セミワイド
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="type2" value="標準">標準
                                        <span></span>
                                    </label><br>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="ロング">ロング
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type2" value="ショート">ショート
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">種類3</label>
                            <div class="col-10">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="type3" name="総輪エアサス">総輪エアサス
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="後輪エアサス">後輪エアサス
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="エアサスゲート">エアサスゲート
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="アルミ">アルミ
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="幌">幌
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="type3" name="パワーゲート">パワーゲート
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="フラット">フラット
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="スタンション">スタンション
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="ジョルダー">ジョルダー
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="冷凍">冷凍
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="type3" name="冷蔵">冷蔵
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">備考</label>
                            <div class="col-10 mt-3">
                                <textarea class="form-control kt-font-lg input_style" spellcheck="true" rows="7" name="bigo"></textarea>
                                <label class="col-form-label kt-font-xl" style="color: #ff6600">※備考には金額、連絡先等は明記しないでください</label>
                            </div>
                        </div>
                        <!--end::Form-->
                        <!--begin::Form-->
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>電話番号</label>
                            <div class="col-10 mt-2">
                                <input class="col form-control kt-font-xl input_style" name="phone">
                            </div>
                        </div>
                        <!--end::Form-->
                        <!--begin::Form-->
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>担当者</label>
                            <div class="col-10 mt-2">
                                <input class="col form-control kt-font-xl input_style" name="person_charge">
                            </div>
                        </div>
                        <div class="form-group row mb-5 mt-5">
                            <button class="btn btn-primary first_time_btn custom-btn" style="max-width: 300px; height: 80px; border-radius: 10px 10px">登錄内容確認</button>
                        </div>
                        <!--end::Form-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
  @include('includes.sidebar02')
@endsection
