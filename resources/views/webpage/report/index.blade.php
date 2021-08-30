<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('report') }}
        </h2>
    </x-slot>
    {{-- หน้า index.blade.phpasdsd --}}

    <div class="row anybt">
        <div class="col-md-4">
            <div class="btn shadow p-4 mb-4 bg-white w-100">รายงานติดตามรถ</div>
        </div>
        <div class="col-md-4">
            <div class="btn shadow p-4 mb-4 bg-white w-100">รายงานสถานี-สถานี</div>
        </div>
        <div class="col-md-4">
            <div class=" btn shadow p-4 mb-4 bg-white w-100">การรูดบัตร</div>
        </div>
        <div class="col-md-4">
            <div class="btn shadow p-4 mb-4 bg-white w-100">การแจ้งเตือน</div>
        </div>
        <div class="col-md-4">
            <div class="btn shadow p-4 mb-4 bg-white w-100">สรุปกิจกรรมประจำวัน(ตามช่วงเวลา)</div>
        </div>
        <div class="col-md-4">
            <div class="btn shadow p-4 mb-4 bg-white w-100">กราฟน้ำมัน-ความเร็ว</div>
        </div>
    </div>
    {{-- <div class="" style="min-height: calc(100vh - 150px);">
        <h5 class="no-margin"><span class="fa-stack fa-lg" style="color: rgb(33, 150, 243);"><i
                    class="fa fa-circle fa-stack-2x "></i><i class="fa fa-bars fa-stack-1x"
                    style="color: white;"></i></span>รายงานข้อมูล</h5>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>สรุปการใช้งาน</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>สรุปการใช้งานรายคัน</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>สรุปการใช้งานตามกลุ่ม</button></div>
            </div>
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>ชั่วโมงการทำงาน</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>รายงานการแจ้งเตือน</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>รายงานเส้นทางการวิ่ง</button></div>
            </div>
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>รายงานระยะทางการวิ่ง</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>รายงานการจอดรถ</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>เข้า-ออก POI</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>เข้า-ออก พื้นที่</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>การรูดบัตร</button></div>
            </div>
        </div>
        <hr>
        <h5 class="no-margin"><span class="fa-stack fa-lg" style="color: rgb(244, 67, 54);"><i
                    class="fa fa-circle fa-stack-2x"></i><i class="fas fa-chart-bar fa-stack-1x"
                    style="color: white;"></i></span>รายงานกราฟ</h5>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กราฟน้ำมัน</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กราฟก๊าซ</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กราฟความเร็ว</button></div>
            </div>
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กราฟอุณหภูมิ</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กราฟแรงดันไฟฟ้า</button></div>
            </div>
        </div>
        <hr>
        <h5 class="no-margin"><span class="fa-stack fa-lg" style="color: rgb(76, 175, 80);"><i
                    class="fa fa-circle fa-stack-2x"></i><i class="fa fa-images fa-stack-1x"
                    style="color: white;"></i></span>รายงานรูปภาพ</h5>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>รูปภาพจากตัวอุปกรณ์</button></div>
                <div class="col-md-4"><button type="button" class="btn btn-block btn-light text-left"
                        style="border: 1px solid rgb(204, 204, 204); margin: 5px 0px; padding: 10px;"><i
                            class="fa fa-fw fa-file-text-o"></i>กล้อง DVR</button></div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
