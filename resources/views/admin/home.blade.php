@extends('layouts.portal_theme')

@section('title')Dashboard @endsection

@section('content')
    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Welcome back
                        <span>{{Auth::user()->name}}!</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('member')}}" class="full-width">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">{{ $member_count }}</h2>
                            <span class="desc">Members</span>
                            <div class="icon">
                                <i class="fa fa-table"></i>
                            </div>
                        </div></a>
                    <a href="{{route('new_member')}}" class="dash-action">Add member</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('event')}}" class="full-width">
                        <div class="statistic__item statistic__item--orange">
                            <h2 class="number">{{ $event_count }}</h2>
                            <span class="desc">Events</span>
                            <div class="icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('new_event')}}" class="dash-action">Add Event</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('partner')}}" class="full-width">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">{{ $partner_count }}</h2>
                            <span class="desc">Partners</span>
                            <div class="icon">
                                <i class="fa fa-partners"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('new_partner')}}" class="dash-action">New Partner</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('slide')}}" class="full-width">
                    <div class="statistic__item statistic__item--red">
                            <h2 class="number">{{ $slide_count }}</h2>
                            <span class="desc">Slides Showing</span>
                            <div class="icon">
                                <i class="fa fa-comments"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('new_slide')}}" class="dash-action">Add Slide</a>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('edit_message')}}" class="dash-action">Edit Chairman's Message.</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('edit_document', 1)}}" class="dash-action">Manage Registration form</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{route('edit_document', 2)}}" class="dash-action">Manage Membership terms</a>
                </div>
                </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    {{--<!-- STATISTIC CHART-->--}}
    {{--<section class="statistic-chart">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<h3 class="title-5 m-b-35">statistics</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-lg-4">--}}
                    {{--<!-- CHART-->--}}
                    {{--<div class="statistic-chart-1">--}}
                        {{--<h3 class="title-3 m-b-30">chart</h3>--}}
                        {{--<div class="chart-wrap">--}}
                            {{--<canvas id="widgetChart5"></canvas>--}}
                        {{--</div>--}}
                        {{--<div class="statistic-chart-1-note">--}}
                            {{--<span class="big">10,368</span>--}}
                            {{--<span>/ 16220 items sold</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- END CHART-->--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-4">--}}
                    {{--<!-- TOP CAMPAIGN-->--}}
                    {{--<div class="top-campaign">--}}
                        {{--<h3 class="title-3 m-b-30">top campaigns</h3>--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table class="table table-top-campaign">--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>1. Australia</td>--}}
                                    {{--<td>$70,261.65</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>2. United Kingdom</td>--}}
                                    {{--<td>$46,399.22</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>3. Turkey</td>--}}
                                    {{--<td>$35,364.90</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>4. Germany</td>--}}
                                    {{--<td>$20,366.96</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>5. France</td>--}}
                                    {{--<td>$10,366.96</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- END TOP CAMPAIGN-->--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-4">--}}
                    {{--<!-- CHART PERCENT-->--}}
                    {{--<div class="chart-percent-2">--}}
                        {{--<h3 class="title-3 m-b-30">chart by %</h3>--}}
                        {{--<div class="chart-wrap">--}}
                            {{--<canvas id="percent-chart2"></canvas>--}}
                            {{--<div id="chartjs-tooltip">--}}
                                {{--<table></table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="chart-info">--}}
                            {{--<div class="chart-note">--}}
                                {{--<span class="dot dot--blue"></span>--}}
                                {{--<span>products</span>--}}
                            {{--</div>--}}
                            {{--<div class="chart-note">--}}
                                {{--<span class="dot dot--red"></span>--}}
                                {{--<span>Services</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- END CHART PERCENT-->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- END STATISTIC CHART-->--}}

    {{--<!-- DATA TABLE-->--}}
    {{--<section class="p-t-20">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<h3 class="title-5 m-b-35">data table</h3>--}}
                    {{--<div class="table-data__tool">--}}
                        {{--<div class="table-data__tool-left">--}}
                            {{--<div class="rs-select2--light rs-select2--md">--}}
                                {{--<select class="js-select2" name="property">--}}
                                    {{--<option selected="selected">All Properties</option>--}}
                                    {{--<option value="">Option 1</option>--}}
                                    {{--<option value="">Option 2</option>--}}
                                {{--</select>--}}
                                {{--<div class="dropDownSelect2"></div>--}}
                            {{--</div>--}}
                            {{--<div class="rs-select2--light rs-select2--sm">--}}
                                {{--<select class="js-select2" name="time">--}}
                                    {{--<option selected="selected">Today</option>--}}
                                    {{--<option value="">3 Days</option>--}}
                                    {{--<option value="">1 Week</option>--}}
                                {{--</select>--}}
                                {{--<div class="dropDownSelect2"></div>--}}
                            {{--</div>--}}
                            {{--<button class="au-btn-filter">--}}
                                {{--<i class="zmdi zmdi-filter-list"></i>filters</button>--}}
                        {{--</div>--}}
                        {{--<div class="table-data__tool-right">--}}
                            {{--<button class="au-btn au-btn-icon au-btn--green au-btn--small">--}}
                                {{--<i class="zmdi zmdi-plus"></i>add item</button>--}}
                            {{--<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">--}}
                                {{--<select class="js-select2" name="type">--}}
                                    {{--<option selected="selected">Export</option>--}}
                                    {{--<option value="">Option 1</option>--}}
                                    {{--<option value="">Option 2</option>--}}
                                {{--</select>--}}
                                {{--<div class="dropDownSelect2"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="table-responsive table-responsive-data2">--}}
                        {{--<table class="table table-data2">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>--}}
                                    {{--<label class="au-checkbox">--}}
                                        {{--<input type="checkbox">--}}
                                        {{--<span class="au-checkmark"></span>--}}
                                    {{--</label>--}}
                                {{--</th>--}}
                                {{--<th>name</th>--}}
                                {{--<th>email</th>--}}
                                {{--<th>description</th>--}}
                                {{--<th>date</th>--}}
                                {{--<th>status</th>--}}
                                {{--<th>price</th>--}}
                                {{--<th></th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<tr class="tr-shadow">--}}
                                {{--<td>--}}
                                    {{--<label class="au-checkbox">--}}
                                        {{--<input type="checkbox">--}}
                                        {{--<span class="au-checkmark"></span>--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                {{--<td>Lori Lynch</td>--}}
                                {{--<td>--}}
                                    {{--<span class="block-email">lori@example.com</span>--}}
                                {{--</td>--}}
                                {{--<td class="desc">Samsung S8 Black</td>--}}
                                {{--<td>2018-09-27 02:12</td>--}}
                                {{--<td>--}}
                                    {{--<span class="status--process">Processed</span>--}}
                                {{--</td>--}}
                                {{--<td>$679.00</td>--}}
                                {{--<td>--}}
                                    {{--<div class="table-data-feature">--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
                                            {{--<i class="zmdi zmdi-mail-send"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                            {{--<i class="zmdi zmdi-edit"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                            {{--<i class="zmdi zmdi-delete"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
                                            {{--<i class="zmdi zmdi-more"></i>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="spacer"></tr>--}}
                            {{--<tr class="tr-shadow">--}}
                                {{--<td>--}}
                                    {{--<label class="au-checkbox">--}}
                                        {{--<input type="checkbox">--}}
                                        {{--<span class="au-checkmark"></span>--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                {{--<td>Lori Lynch</td>--}}
                                {{--<td>--}}
                                    {{--<span class="block-email">john@example.com</span>--}}
                                {{--</td>--}}
                                {{--<td class="desc">iPhone X 64Gb Grey</td>--}}
                                {{--<td>2018-09-29 05:57</td>--}}
                                {{--<td>--}}
                                    {{--<span class="status--process">Processed</span>--}}
                                {{--</td>--}}
                                {{--<td>$999.00</td>--}}
                                {{--<td>--}}
                                    {{--<div class="table-data-feature">--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
                                            {{--<i class="zmdi zmdi-mail-send"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                            {{--<i class="zmdi zmdi-edit"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                            {{--<i class="zmdi zmdi-delete"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
                                            {{--<i class="zmdi zmdi-more"></i>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="spacer"></tr>--}}
                            {{--<tr class="tr-shadow">--}}
                                {{--<td>--}}
                                    {{--<label class="au-checkbox">--}}
                                        {{--<input type="checkbox">--}}
                                        {{--<span class="au-checkmark"></span>--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                {{--<td>Lori Lynch</td>--}}
                                {{--<td>--}}
                                    {{--<span class="block-email">lyn@example.com</span>--}}
                                {{--</td>--}}
                                {{--<td class="desc">iPhone X 256Gb Black</td>--}}
                                {{--<td>2018-09-25 19:03</td>--}}
                                {{--<td>--}}
                                    {{--<span class="status--denied">Denied</span>--}}
                                {{--</td>--}}
                                {{--<td>$1199.00</td>--}}
                                {{--<td>--}}
                                    {{--<div class="table-data-feature">--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
                                            {{--<i class="zmdi zmdi-mail-send"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                            {{--<i class="zmdi zmdi-edit"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                            {{--<i class="zmdi zmdi-delete"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
                                            {{--<i class="zmdi zmdi-more"></i>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="spacer"></tr>--}}
                            {{--<tr class="tr-shadow">--}}
                                {{--<td>--}}
                                    {{--<label class="au-checkbox">--}}
                                        {{--<input type="checkbox">--}}
                                        {{--<span class="au-checkmark"></span>--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                {{--<td>Lori Lynch</td>--}}
                                {{--<td>--}}
                                    {{--<span class="block-email">doe@example.com</span>--}}
                                {{--</td>--}}
                                {{--<td class="desc">Camera C430W 4k</td>--}}
                                {{--<td>2018-09-24 19:10</td>--}}
                                {{--<td>--}}
                                    {{--<span class="status--process">Processed</span>--}}
                                {{--</td>--}}
                                {{--<td>$699.00</td>--}}
                                {{--<td>--}}
                                    {{--<div class="table-data-feature">--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">--}}
                                            {{--<i class="zmdi zmdi-mail-send"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                            {{--<i class="zmdi zmdi-edit"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                            {{--<i class="zmdi zmdi-delete"></i>--}}
                                        {{--</button>--}}
                                        {{--<button class="item" data-toggle="tooltip" data-placement="top" title="More">--}}
                                            {{--<i class="zmdi zmdi-more"></i>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- END DATA TABLE-->--}}
@endsection