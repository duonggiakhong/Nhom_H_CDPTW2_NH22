@extends('templates.admins.layout')
@section('content')
<div class="main">
    <main class="content">
        <div class="container-fluid p-0">
            <!-- <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1> -->

            <div class="row" style="gap:20px;">
                <div class="col show-visitor text-view-visitor" style="background-color: aquamarine;padding-top:30px;padding-bottom:30px;text-align:center;margin: 0%
                                                                                ">
                    <h3>Truy cập hôm nay</h3>
                    <span id="visitor_views" style="font-size: 24px">112</span>
                </div>
                <div class="col sale-by-date text-view-visitor" id="statis-view"
                    style="background-color: aquamarine;padding-top:30px;padding-bottom:30px;text-align:center;margin: 0%;font-weight:bold">
                    <h3>Doanh thu hôm nay</h3><span style="font-size: 24px" id="numberMoney">400000</span> đ

                </div>
                <div class="col"
                    style="background-color: aquamarine;padding-top:30px;padding-bottom:30px;text-align:center;margin: 0%;font-weight:bold; border-radius: 16px;">
                    <h3>Sản phẩm</h3>
                    <span style="font-size: 24px">213</span>
                </div>
                <div class="col"
                    style="background-color: aquamarine;padding-top:30px;padding-bottom:30px;text-align:center;margin: 0%;font-weight:bold; border-radius: 16px;">
                    <h3>Đơn hàng hôm nay</h3>
                    <span style="font-size: 24px">32</span>
                </div>
            </div>
        </div>
        
    </main>
</div>


{{-- modal 'exportFile' --}}
@section('script')
<script src="https://code.highcharts.com/highcharts.js">
</script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

@stop
@stop