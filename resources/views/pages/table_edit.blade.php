@extends('layouts.app')

@section('content')
{{var_dump($editdata->id)}}
 <!--begin:: Widgets/Blog-->
 <div class="kt-current_info__wrapper" style="padding-top: 50px;">
        <div class="kt-current_info__text1 kt-align-center mb-3">
            Edit luggage table
        </div>
    </div>
    <div class="kt-portlet" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;">
        <!--begin::Form-->
        <form class="kt-form" action="/luggage/4/update" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Errors ! Please check the fields.
                    </div>
                @endif
                <div class="form-group ">
                    <label class="font-weight-bolder">積込日時</label>
                    <input type="text" class="form-control" id="loading_time" name="loading_time" value="{{old('loading_time',$editdata->loading_time)}}">
                    @if ($errors->has("loading_time"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("loading_time")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">積地</label>
                    <input type="text" name="loading_space" id="loading_space" class="form-control" value="{{old('loading_space,$editdata->loading_sapce')}}">
                    @if ($errors->has("loading_space"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("loading_space")}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">荷降日時</label>
                    <input type="text" id="drop_time" name="drop_time" class="form-control" value="{{old('drop_time',$editdata->drop_time)}}">
                    @if ($errors->has("drop_time"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("drop_time")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">降地</label>
                    <input type="text" class="form-control" id="drop_space" name="drop_space" value="{{old('drop_space',$editdata->drop_space)}}">
                    @if ($errors->has("drop_space"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("drop_space")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">車輌</label>
                    <input type="text" id="vehicle_inf" name="vehicle_inf" class="form-control" value="{{old('vehicle_inf',$editdata->vehicle_inf)}}">
                    @if ($errors->has("vehicle_inf"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("vehicle_inf")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">種類１</label>
                    <input type="text" class="form-control" id="vehicle_type1" name="vehicle_type1" value="{{old('vehicle_type1',$editdata->vehicle_type1)}}">
                    @if ($errors->has("vehicle_type1"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("vehicle_type1")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">種類２</label>
                    <input type="text" class="form-control" id="vehicle_type2" name="vehicle_type2" value="{{old('vehicle_type2',$editdata->vehicle_type2)}}">
                    @if ($errors->has("vehicle_type2"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("vehicle_type2")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">種類３</label>
                    <input type="text" class="form-control" id="vehicle_type3" name="vehicle_type3" value="{{old('vehicle_type3', $editdata->vehicle_type3)}}">
                    @if ($errors->has("vehicle_type3"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("vehicle_type3")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">担当</label>
                    <input type="text" class="form-control" id="person_charge" name="person_charge" value="{{old('person_charge',$editdata->person_charge)}}">
                    @if ($errors->has("person_charge"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("person_charge")}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">備考</label>
                    <input type="text" class="form-control" id="bigo" name="bigo" value="{{old('bigo',$editdata->bigo)}}">
                    @if ($errors->has("bigo"))
                        <div class="alert alert-danger" role="alert">
                        {{$errors->first("bigo")}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions d-flex justify-content-center flex-wrap">
                    <button class="btn first_time_btn" type="submit">登録内容確認</button>
                </div>
            </div>
            <div class="kt-space-40"></div>
            <div class="kt-space-20"></div>
        </form>

        <!--end::Form-->
    </div>
    <!--end:: Widgets/Blog-->
@endsection