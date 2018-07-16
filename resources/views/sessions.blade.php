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
<table class="table table-striped table-bordered" >
                          <thead>
                            <tr class="bgcolor--gray_mm color--gray_d">
                              <th style="text-align:center;"><span class="cellcontent">Day</th>
                              <th style="text-align:center;"><span class="cellcontent">Date</span></th>
                              <th style="text-align:center;"><span class="cellcontent">Chapter</span></th>
                              
                            </tr>
                          </thead>
                          <tbody>
                             @foreach($total_days_in_weeks as $day)
                          <tr >
                           
                            <td><span class="cellcontent">{{$day['day_name']}}</td>
                            
                            <td><span class="cellcontent">{{$day['day_date']}}</span></td>
                            <td><span class="cellcontent">{{$day['chapter']}}</span></td>
                            
                          </tr>
                          @endforeach
                            
                          </tbody>
                        </table>
</div>
@endsection