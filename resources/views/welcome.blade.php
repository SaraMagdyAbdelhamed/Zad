@extends('layouts.app')
@section('content')
<h1>Sara Magdy</h1>

<form>
     <div class="col-sm-12 col-xs-12">
                            <div class="master_field">
                              <label class="master_label">@lang('keywords.woking_days')</label>
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
</form>
@endsection