@extends('layouts.app')
@section('content')
<div class="cover-inside-container margin--small-top-bottom bradius--small bshadow--1" style="background:  url( '{{asset('img/covers/dummy2-m.jpg')}}') no-repeat center center; background-size:cover;">
<div class="row">
                      <div class="col-xs-12">
                        <div class="text-xs-center">
                          <div class="text-wraper">
                            <h4 class="cover-inside-title color--white">Read The Book <i class="fa fa-chevron-circle-right"></i>
                              <h4 class="cover-inside-title color--white">30 Chapter </h4>
                            </h4>
                          </div>
                        </div>
                      </div>
                      <div class="cover--actions"><span></span>
                      </div>
                    </div>
                    </div>
<div class="cover-inside-container margin--small-top-bottom bradius--no bshadow--0">
<form action="{{ route('sessions') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

    <div class="col-sm-12 col-xs-12">
    <label class="master_label mandatory">Starting Day</label>

    <select name="start_day" class="master_input select2" id="main_type" >
        <option value="choose" selected disabled>Choose Starting Day </option>
        @foreach($days as $day)
      <option value="{{$day->id}}">{{$day->day}}</option>
         @endforeach                            
    </select>
    </div>
     <div class="col-sm-12 col-xs-12">
        <div class="master_field">
                              <label class="master_label mandatory">@lang('keywords.woking_days')</label>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[1]" id="Opening_days_1">
                                <label for="Opening_days_1">@lang('keywords.saturday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[2]" id="Opening_days_2">
                                <label for="Opening_days_2">@lang('keywords.sunday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[3]" id="Opening_days_3">
                                <label for="Opening_days_3">@lang('keywords.monday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[4]" id="Opening_days_4">
                                <label for="Opening_days_4">@lang('keywords.tuesday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[5]" id="Opening_days_5">
                                <label for="Opening_days_5">@lang('keywords.wednesday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[6]" id="Opening_days_6">
                                <label for="Opening_days_6">@lang('keywords.thursday')</label>
                              </div>
                              <div class="funkyradio">
                                <input type="checkbox" name="days[7]" id="Opening_days_7">
                                <label for="Opening_days_7">@lang('keywords.friday')</label>
                              </div>
         </div>
       </div>

    <div class="col-sm-12 col-xs-12">
      <div class="master_field">
        <label class="master_label mandatory" for="type_main">Numbers of Sessions </label>
      <input name="sessions"  class="master_input" type="number" placeholder="Type numbers of sessions" >
       </div>
    </div>

    <div class="clearfix"></div><br>
     <div class="text-center">
           
     <button name="submit" value="one" class="sotre-sub remodal-confirm" type="submit">Calculate Sessions</button>
    </div>
</form>
</div>
@endsection