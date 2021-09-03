<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('report') }}
        </h2>
    </x-slot>
    <div class="container-fluid show" style="display: block;">
        <div class="lv1" style="background-color: #FFFFFF;">

            <div class="border m-3" style="background-color:#FFFFFF;white-space: nowrap; overflow: hidden;">
                <div class="d-flex border-bottom" style="background-color: aliceblue;">
                    <div class="p-2 pl-3 pr-3 border-right"><i class="fa fa-info-circle text-danger"></i></div>
                    <div class="pl-2 align-self-center"><strong>เงื่อนไขการค้นหา</strong></div>
                </div>
                <div class="p-3 pl-5 pr-5">
                    <div class="d-flex">
                        <div class="w-50">
                            <div class="d-flex">
                                <div class="text-right" style="width: 78.25px;">กลุ่มรถ : </div>
                                <div class="flex-grow-1 pl-1">
                                    <select onclick="$('#sts_car_select_2').hide();" id="sts_group_select" class="form-control form-control-sm">
                                        <option value="all">กลุ่มรถทั้งหมด</option>
                                        <option value="120191130103842">KDR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="text-right" style="width: 78.25px;">วันที่เริ่มต้น : </div>
                                <div class="flex-grow-1 pl-1"><input autocomplete="off" id="sts_date_st" type="text" class="form-control form-control-sm hasDatepicker"></div>
                                <div class="text-right ml-2" style="width: 78.25px;">สิ้นสุด : </div>
                                <div class="flex-grow-1 pl-1"><input autocomplete="off" id="sts_date_en" type="text" class="form-control form-control-sm hasDatepicker"></div>
                            </div>
                        </div>
                        <div class="w-50 pl-2">
                            <div class="d-flex">
                                <div class="text-right " style="min-width: 100px; width:100px;">เลือกรถ : </div>
                                <div class="flex-grow-1 pl-1">
                                    <select onclick="$('#sts_car_select_2').hide();" id="sts_group_select" class="form-control form-control-sm">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                    </select>
                                </div>
                                <!-- <div class="flex-grow-1 pl-1">
                                    <div id="sts_car_select" class="border rounded" style="max-height: 50px;min-height: 31px; overflow: auto;font-size: 10px;">
                                        <div id="sts_car_value_select" class="d-flex flex-wrap p-1"></div>
                                    </div>

                                    <div id="sts_car_select_2" class="form-control form-control-sm bg-light" style="position: absolute; display: none; width: 375.5px;">
                                        <input id="sts_search_car" type="text" class="form-control" placeholder="Search...">
                                        <div class="form-control mt-1 mb-1" style="height: 250px;overflow: auto;">
                                            <div id="sts_chk_car" class="p-1 border-bottom">
                                                <input id="sts_all_in" type="checkbox">
                                                ทั้งหมด
                                            </div>
                                            <div id="sts_car_value">
                                                <div class="p-1 border-bottom">
                                                    <input type="checkbox" />
                                                    10-0001
                                                </div>
                                                <div class="p-1 border-bottom">
                                                    <input type="checkbox" />
                                                    10-0002
                                                </div>
                                            </div>
                                        </div>
                                        <select onchange="$('#sts_car_select_2').hide();" multiple class="form-control mt-1 mb-1">
                                            <option>ทั้งหมด</option>
                                            <option>10-1101</option>
                                            <option>10-1102</option>
                                            <option>10-1103</option>
                                            <option>10-1101</option>
                                            <option>10-1102</option>
                                            <option>10-1103</option>
                                        </select>

                                        <div class="d-flex justify-content-end">
                                            <div class="btn-group">
                                                <button onclick="$('#sts_car_select_2').hide();" class="btn btn-sm btn-warning">Cancel</button>
                                                <button id="sts_confirm" class="btn btn-sm btn-success">Confirm</button>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->

                            </div>
                            <div class="d-flex mt-2">
                                <div id="sts_station_type_1" style="min-width: 100px; width:100px;visibility: hidden;">ประเภทสถานี : </div>
                                <div id="sts_station_type_2" class="flex-fill pl-1" style="visibility: hidden;"><select id="sts_station_type" class="form-control form-control-sm">
                                        <option value="all">ทั้งหมด</option>
                                        <option value="8">BP</option>
                                        <option value="10">CJ</option>
                                        <option value="6">ESSO</option>
                                        <option value="7">S&amp;P</option>
                                        <option value="9">Starbuck</option>

                                    </select></div>
                                <div><button id="sts_btn_search" class="btn btn-sm btn-info ml-1">ค้นหา</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border m-3">
                <div class="d-flex border-bottom" style="background-color: aliceblue;white-space: nowrap;overflow: hidden;">
                    <div class="p-2 pl-3 pr-3 border-right"><i class="fa fa-server text-info"></i></div>
                    <div class="pl-2 align-self-center"><strong>รายงานสถานี-สถานี</strong></div>
                    <div class="flex-fill text-right align-self-center">
                        <div class="mr-1">
                            <button id="sts_bt_calculate" class="btn btn-sm btn-primary">คำนวณ</button>
                            <button id="sts_bt_main_excel" class="btn btn-sm btn-success">Excel</button>
                        </div>

                    </div>
                </div>

                <!-- <div id="sts_Box1" class="d-flex border-bottom" style="white-space: nowrap;overflow: hidden;">

                    <div id="sts_h_1" class="text-center border-right" style="min-width: 40px;max-width: 40px;width: 40px;">
                        <div class="p-1" style="background-color:linen;"><input id="sts_check_all" type="checkbox"></div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input type="text" class="form-control form-control-sm" disabled=""></div>
                    </div>

                    <div id="sts_h_2" class="text-center border-right" style="min-width: 70px;max-width: 70px;width: 70px;">
                        <div class="p-1" style="background-color: linen;">ลำดับ</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_1" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_3" class="text-center border-right" style="width: 45px; min-width: 45px; max-width: 45px;">
                        <div class="p-1" style="background-color: linen;">ชื่อรถ</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_2" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_4" class="text-center border-right" style="min-width: 120px;max-width:120px;width:120px;">
                        <div class="p-1" style="background-color: linen;">วันที่ออก</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_3" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_5" class="text-center border-right" style="width: 45px; min-width: 45px; max-width: 45px;">
                        <div class="p-1" style="background-color: linen;">ออกจาก</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_4" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_6" class="text-center border-right" style="min-width: 100px;max-width:100px;width:100px;">
                        <div class="p-1" style="background-color: linen;">เวลาที่ออก</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_5" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_7" class="text-center border-right" style="min-width: 120px;max-width:120px;width:120px;">
                        <div class="p-1" style="background-color: linen;">วันที่ถึง</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_6" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_8" class="text-center border-right" style="width: 45px; min-width: 45px; max-width: 45px;">
                        <div class="p-1" style="background-color: linen;">ถึง</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_7" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_9" class="text-center border-right" style="min-width: 100px;max-width:100px;width:100px;">
                        <div class="p-1" style="background-color: linen;">เวลาถึง</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_8" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_10" class="text-center border-right" style="min-width: 190px;max-width:190px;width:190px;">
                        <div class="p-1" style="background-color: linen;">เวลารวม</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_9" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_11" class="text-center border-right" style="min-width: 100px;max-width:100px;width:100px;">
                        <div class="p-1" style="background-color: linen;">ระยะทางรวม</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input id="sts_txt_10" type="text" class="form-control form-control-sm"></div>
                    </div>

                    <div id="sts_h_12" class="text-center border-right" style="min-width: 100px;max-width:100px;width:100px;">
                        <div class="p-1" style="background-color: linen;">*</div>
                        <div class="p-1 border-top" style="background-color: aliceblue;"><input type="text" class="form-control form-control-sm" disabled=""></div>
                    </div>

                    <div style="min-width: 100px;max-width:100px;width:100px;"></div>

                </div> -->

                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อรถ</th>
                            <th>วันที่ล่าสุด</th>
                            <th>สถานะล่าสุด</th>
                            <th>สถานที่ล่าสุด</th>
                            <th>จำนวนวันที่ค้าง</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>หมายเหตุ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>2ฒศ-7715</td>
                            <td>28-08-2021 12:03:54</td>
                            <td>ไม่อัพเดต</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>0 วัน 2 ชม. 17 นาที 6 วินาที</td>
                            <td>13.653792</td>
                            <td>100.648635</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">2</td>
                            <td>2ฒศ-7716</td>
                            <td>18-08-2021 23:49:09</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางแก้ว - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>9 วัน 14 ชม. 31 นาที 51 วินาที</td>
                            <td>13.652742</td>
                            <td>100.648133</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>2ฒศ-7717</td>
                            <td>18-03-2021 06:38:32</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.อู่ทอง - อ.อู่ทอง - จ.สุพรรณบุรี</td>
                            <td>163 วัน 7 ชม. 42 นาที 28 วินาที</td>
                            <td>14.359870</td>
                            <td>99.883228</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">4</td>
                            <td>2ฒศ-7718</td>
                            <td>09-03-2021 15:56:14</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.เขาคันทรง - อ.ศรีราชา - จ.ชลบุรี</td>
                            <td>171 วัน 22 ชม. 24 นาที 46 วินาที</td>
                            <td>13.094397</td>
                            <td>101.114472</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">5</td>
                            <td>2ฒศ-8392</td>
                            <td>23-08-2021 20:18:45</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางแก้ว - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>4 วัน 18 ชม. 2 นาที 15 วินาที</td>
                            <td>13.656062</td>
                            <td>100.664962</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">6</td>
                            <td>2ฒศ-8393</td>
                            <td>28-08-2021 13:32:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงสามวาตะวันตก - เขตคลองสามวา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.893352</td>
                            <td>100.721540</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">7</td>
                            <td>2ฒศ-8395</td>
                            <td>28-08-2021 13:34:28</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางพลีใหญ่ - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.606658</td>
                            <td>100.695568</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">8</td>
                            <td>2ฒศ-9066</td>
                            <td>28-08-2021 12:34:52</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงคลองจั่น - เขตบางกะปิ - กรุงเทพมหานคร</td>
                            <td>0 วัน 1 ชม. 46 นาที 8 วินาที</td>
                            <td>13.795468</td>
                            <td>100.630478</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">9</td>
                            <td>2ฒส-100</td>
                            <td>22-08-2021 18:28:06</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงบางเชือกหนัง - เขตตลิ่งชัน - กรุงเทพมหานคร</td>
                            <td>5 วัน 19 ชม. 52 นาที 54 วินาที</td>
                            <td>13.742045</td>
                            <td>100.446408</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">10</td>
                            <td>2ฒส-102</td>
                            <td>28-08-2021 13:04:35</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ในเมือง - อ.พิมาย - จ.นครราชสีมา</td>
                            <td>0 วัน 1 ชม. 16 นาที 25 วินาที</td>
                            <td>15.201193</td>
                            <td>102.498245</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">11</td>
                            <td>2ฒส-104</td>
                            <td>28-08-2021 13:31:43</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ศรีสงคราม - อ.ศรีสงคราม - จ.นครพนม</td>
                            <td>-</td>
                            <td>17.625488</td>
                            <td>104.259697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">12</td>
                            <td>2ฒส-106</td>
                            <td>28-08-2021 14:20:58</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.หนองปรือ - อ.บางละมุง - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>12.936938</td>
                            <td>100.928685</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">13</td>
                            <td>2ฒส-108</td>
                            <td>10-01-2021 14:07:51</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ธาตุพนม - อ.ธาตุพนม - จ.นครพนม</td>
                            <td>230 วัน 0 ชม. 13 นาที 9 วินาที</td>
                            <td>16.936400</td>
                            <td>104.708735</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">14</td>
                            <td>2ฒส-109</td>
                            <td>28-08-2021 14:09:15</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.เทพนคร - อ.เมืองกำแพงเพชร - จ.กำแพงเพชร</td>
                            <td>-</td>
                            <td>16.475248</td>
                            <td>99.560863</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">15</td>
                            <td>2ฒส-110</td>
                            <td>28-08-2021 13:50:25</td>
                            <td>ดับเครื่อง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653982</td>
                            <td>100.648658</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">16</td>
                            <td>2ฒส-112</td>
                            <td>28-08-2021 14:08:26</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.ช่องแคบ - อ.พบพระ - จ.ตาก</td>
                            <td>-</td>
                            <td>16.510818</td>
                            <td>98.703642</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">17</td>
                            <td>2ฒส-113</td>
                            <td>28-08-2021 13:11:56</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงฉิมพลี - เขตตลิ่งชัน - กรุงเทพมหานคร</td>
                            <td>0 วัน 1 ชม. 9 นาที 4 วินาที</td>
                            <td>13.793592</td>
                            <td>100.418900</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">18</td>
                            <td>2ฒส-114</td>
                            <td>28-03-2020 17:27:31</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางเดชะ - อ.เมืองปราจีนบุรี - จ.ปราจีนบุรี</td>
                            <td>517 วัน 20 ชม. 53 นาที 29 วินาที</td>
                            <td>14.010302</td>
                            <td>101.336528</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">19</td>
                            <td>2ฒส-120</td>
                            <td>28-08-2021 13:05:53</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.แม่สอด - อ.แม่สอด - จ.ตาก</td>
                            <td>0 วัน 1 ชม. 15 นาที 7 วินาที</td>
                            <td>16.709325</td>
                            <td>98.555428</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">20</td>
                            <td>2ฒส-121</td>
                            <td>28-08-2021 14:11:00</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงจอมพล - เขตจตุจักร - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.802590</td>
                            <td>100.572457</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">21</td>
                            <td>2ฒส-122</td>
                            <td>28-08-2021 13:39:45</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ปากแคว - อ.เมืองสุโขทัย - จ.สุโขทัย</td>
                            <td>-</td>
                            <td>17.020147</td>
                            <td>99.829388</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">22</td>
                            <td>2ฒส-131</td>
                            <td>28-08-2021 13:11:49</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.คลองสาม - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>0 วัน 1 ชม. 9 นาที 11 วินาที</td>
                            <td>14.023575</td>
                            <td>100.665038</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">23</td>
                            <td>2ฒส-132</td>
                            <td>28-08-2021 13:58:01</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.บางกระสั้น - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>-</td>
                            <td>14.182037</td>
                            <td>100.572843</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">24</td>
                            <td>2ฒห-8428</td>
                            <td>24-08-2021 14:07:57</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บ้านลาน - อ.บ้านไผ่ - จ.ขอนแก่น</td>
                            <td>4 วัน 0 ชม. 13 นาที 3 วินาที</td>
                            <td>15.993128</td>
                            <td>102.884445</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">25</td>
                            <td>2ฒห-8431</td>
                            <td>28-08-2021 14:20:34</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.คลองสอง - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.099793</td>
                            <td>100.641907</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">26</td>
                            <td>2ฒห-8432</td>
                            <td>28-08-2021 14:20:55</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.มหาชัย - อ.เมืองสมุทรสาคร - จ.สมุทรสาคร</td>
                            <td>-</td>
                            <td>13.551060</td>
                            <td>100.276382</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">27</td>
                            <td>2ฒห-8433</td>
                            <td>28-08-2021 14:20:56</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.ไกรนอก - อ.กงไกรลาศ - จ.สุโขทัย</td>
                            <td>-</td>
                            <td>16.971118</td>
                            <td>100.020285</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">28</td>
                            <td>2ฒห-8434</td>
                            <td>17-08-2021 23:16:45</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>10 วัน 15 ชม. 4 นาที 15 วินาที</td>
                            <td>14.201127</td>
                            <td>100.649428</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">29</td>
                            <td>2ฒฬ-3060</td>
                            <td>28-08-2021 14:08:19</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>คลองจั่น</td>
                            <td>-</td>
                            <td>13.801632</td>
                            <td>100.629532</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">30</td>
                            <td>2ฒฬ-3061</td>
                            <td>28-08-2021 08:27:00</td>
                            <td>ไม่อัพเดต</td>
                            <td>KDR service gas station</td>
                            <td>0 วัน 5 ชม. 54 นาที 0 วินาที</td>
                            <td>13.653675</td>
                            <td>100.648712</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">31</td>
                            <td>2ฒฬ-3064</td>
                            <td>28-08-2021 13:24:35</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางครุ - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.631638</td>
                            <td>100.519790</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">32</td>
                            <td>2ฒฬ-3065</td>
                            <td>28-08-2021 13:33:34</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงบางแค - เขตบางแค - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.694290</td>
                            <td>100.412192</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">33</td>
                            <td>2ฒฬ-3066</td>
                            <td>28-08-2021 14:20:50</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงสายไหม - เขตสายไหม - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.927703</td>
                            <td>100.627333</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">34</td>
                            <td>2ฒอ-248</td>
                            <td>28-08-2021 14:16:39</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.คลองหนึ่ง - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.122953</td>
                            <td>100.620955</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">35</td>
                            <td>2ฒอ-250</td>
                            <td>28-08-2021 14:02:59</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676707</td>
                            <td>100.634392</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">36</td>
                            <td>2ฒอ-253</td>
                            <td>28-08-2021 14:20:36</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.สลกบาตร - อ.ขาณุวรลักษบุรี - จ.กำแพงเพชร</td>
                            <td>-</td>
                            <td>15.990902</td>
                            <td>99.813575</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">37</td>
                            <td>2ฒอ-254</td>
                            <td>28-08-2021 14:20:34</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>Dc บางใหญ่</td>
                            <td>-</td>
                            <td>13.844262</td>
                            <td>100.404502</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">38</td>
                            <td>2ฒอ-260กทม</td>
                            <td>28-08-2021 13:45:38</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางเสร่ - อ.สัตหีบ - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>12.737780</td>
                            <td>100.900527</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">39</td>
                            <td>2ฒอ-261กทม</td>
                            <td>28-08-2021 12:59:56</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.หมอนทอง - อ.บางน้ำเปรี้ยว - จ.ฉะเชิงเทรา</td>
                            <td>0 วัน 1 ชม. 21 นาที 4 วินาที</td>
                            <td>13.875358</td>
                            <td>101.043883</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">40</td>
                            <td>2ฒอ-262 (4wj isuzu)</td>
                            <td>28-08-2021 14:20:06</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.วัฒนานคร - อ.วัฒนานคร - จ.สระแก้ว</td>
                            <td>-</td>
                            <td>13.738763</td>
                            <td>102.345465</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">41</td>
                            <td>2ฒอ-265</td>
                            <td>28-08-2021 13:43:16</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.วังสมบูรณ์ - อ.วังสมบูรณ์ - จ.สระแก้ว</td>
                            <td>-</td>
                            <td>13.396598</td>
                            <td>102.197852</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">42</td>
                            <td>2ฒอ-5478 (4w7cbm)</td>
                            <td>25-08-2021 01:54:12</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>3 วัน 12 ชม. 26 นาที 48 วินาที</td>
                            <td>14.199768</td>
                            <td>100.650725</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">43</td>
                            <td>2ฒอ-5479</td>
                            <td>28-08-2021 14:18:24</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>KDR service gas station</td>
                            <td>-</td>
                            <td>13.653790</td>
                            <td>100.648697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">44</td>
                            <td>2ฒอ-5480</td>
                            <td>28-08-2021 13:43:56</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>KDR service gas station</td>
                            <td>-</td>
                            <td>13.653458</td>
                            <td>100.648857</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">45</td>
                            <td>2ฒอ-5491 (4w7cbm)</td>
                            <td>28-08-2021 13:39:34</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.มหาชัย - อ.เมืองสมุทรสาคร - จ.สมุทรสาคร</td>
                            <td>-</td>
                            <td>13.551637</td>
                            <td>100.276260</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">46</td>
                            <td>2ฒอ-5492</td>
                            <td>28-08-2021 14:14:02</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653868</td>
                            <td>100.648757</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">47</td>
                            <td>2ฒอ-5493 (7cbm)</td>
                            <td>28-08-2021 13:23:16</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ห้วยโป่ง - อ.เมืองระยอง - จ.ระยอง</td>
                            <td>-</td>
                            <td>12.741967</td>
                            <td>101.151320</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">48</td>
                            <td>2ฒอ-9644</td>
                            <td>28-08-2021 14:20:57</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.บางหญ้าแพรก - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.651873</td>
                            <td>100.548438</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">49</td>
                            <td>2ฒอ-9648</td>
                            <td>28-08-2021 13:49:19</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงตลาดบางเขน - เขตหลักสี่ - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.889102</td>
                            <td>100.588325</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">50</td>
                            <td>2ฒอ-9649</td>
                            <td>28-08-2021 13:32:39</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.อู่ทอง - อ.อู่ทอง - จ.สุพรรณบุรี</td>
                            <td>-</td>
                            <td>14.387248</td>
                            <td>99.893607</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">51</td>
                            <td>2ฒอ-9650</td>
                            <td>28-08-2021 14:13:47</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองบัวน้อย - อ.สีคิ้ว - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>15.007955</td>
                            <td>101.704872</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">52</td>
                            <td>2ฒอ-9651</td>
                            <td>28-08-2021 13:54:58</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางริ้น - อ.เมืองระนอง - จ.ระนอง</td>
                            <td>-</td>
                            <td>9.938665</td>
                            <td>98.633223</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">53</td>
                            <td>2ฒอ-9652</td>
                            <td>28-08-2021 14:12:05</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.พานทอง - อ.พานทอง - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>13.459300</td>
                            <td>101.088133</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">54</td>
                            <td>2ฒอ-9653</td>
                            <td>28-08-2021 13:30:58</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงสนามบิน - เขตดอนเมือง - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.936155</td>
                            <td>100.617690</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">55</td>
                            <td>2ฒอ-9660</td>
                            <td>28-08-2021 14:04:21</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.โพนทอง - อ.สีดา - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>15.539018</td>
                            <td>102.546722</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">56</td>
                            <td>2ฒอ-9661</td>
                            <td>28-08-2021 13:25:56</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองหาร - อ.สันทราย - จ.เชียงใหม่</td>
                            <td>-</td>
                            <td>18.940698</td>
                            <td>98.987747</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">57</td>
                            <td>3ฒข-3538</td>
                            <td>28-08-2021 14:00:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.คลองสาม - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.053965</td>
                            <td>100.662750</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">58</td>
                            <td>3ฒข-3540</td>
                            <td>28-08-2021 13:39:05</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงหนองบอน - เขตประเวศ - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.680075</td>
                            <td>100.657600</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">59</td>
                            <td>3ฒข-3543</td>
                            <td>28-08-2021 14:09:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676565</td>
                            <td>100.634200</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">60</td>
                            <td>3ฒข-3546</td>
                            <td>02-01-2021 00:05:24</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.จรเข้ร้อง - อ.ไชโย - จ.อ่างทอง</td>
                            <td>238 วัน 14 ชม. 15 นาที 36 วินาที</td>
                            <td>14.663873</td>
                            <td>100.470878</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">61</td>
                            <td>3ฒข-3547</td>
                            <td>28-08-2021 14:19:25</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงคลองเตย - เขตคลองเตย - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.709280</td>
                            <td>100.583488</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">62</td>
                            <td>3ฒข-3548</td>
                            <td>28-08-2021 14:01:57</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางปูใหม่ - อ.เมืองสมุทรปราการ - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.509790</td>
                            <td>100.682463</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">63</td>
                            <td>3ฒข-3549</td>
                            <td>28-08-2021 14:20:23</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.บางหญ้าแพรก - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.652015</td>
                            <td>100.541022</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">64</td>
                            <td>3ฒข-3550</td>
                            <td>28-08-2021 14:20:04</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางโฉลง - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.604670</td>
                            <td>100.768958</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">65</td>
                            <td>3ฒข-3551</td>
                            <td>28-08-2021 13:40:00</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653757</td>
                            <td>100.648887</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">66</td>
                            <td>3ฒข-3556</td>
                            <td>28-08-2021 14:20:57</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงบางโคล่ - เขตบางคอแหลม - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.698742</td>
                            <td>100.528373</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">67</td>
                            <td>3ฒข-3559</td>
                            <td>28-08-2021 14:01:57</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ทุ่งครุ</td>
                            <td>-</td>
                            <td>13.636653</td>
                            <td>100.486548</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">68</td>
                            <td>3ฒข-3561</td>
                            <td>28-08-2021 14:01:50</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676560</td>
                            <td>100.634445</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">69</td>
                            <td>3ฒข-3562</td>
                            <td>23-07-2021 21:16:37</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงหลักสอง - เขตบางแค - กรุงเทพมหานคร</td>
                            <td>35 วัน 17 ชม. 4 นาที 23 วินาที</td>
                            <td>13.680067</td>
                            <td>100.406768</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">70</td>
                            <td>3ฒข-3568</td>
                            <td>28-08-2021 14:18:10</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.แพรกษาใหม่ - อ.เมืองสมุทรปราการ - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.545632</td>
                            <td>100.680945</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">71</td>
                            <td>65-5434</td>
                            <td>28-08-2021 14:20:13</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.อ่าวน้อย - อ.เมืองประจวบคีรีขันธ์ - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>11.849363</td>
                            <td>99.782363</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">72</td>
                            <td>65-5438</td>
                            <td>28-08-2021 13:29:45</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.เวียงพางคำ - อ.แม่สาย - จ.เชียงราย</td>
                            <td>-</td>
                            <td>20.403832</td>
                            <td>99.883853</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">73</td>
                            <td>65-5441</td>
                            <td>28-08-2021 14:20:20</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.แม่ทะ - อ.แม่ทะ - จ.ลำปาง</td>
                            <td>-</td>
                            <td>18.163807</td>
                            <td>99.590710</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">74</td>
                            <td>65-5445</td>
                            <td>28-08-2021 14:12:19</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.สารภี - อ.สารภี - จ.เชียงใหม่</td>
                            <td>-</td>
                            <td>18.673730</td>
                            <td>99.053213</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">75</td>
                            <td>65-5447</td>
                            <td>28-08-2021 14:18:58</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.เขาไชยราช - อ.ปะทิว - จ.ชุมพร</td>
                            <td>-</td>
                            <td>10.938845</td>
                            <td>99.294495</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">76</td>
                            <td>65-5450</td>
                            <td>28-08-2021 13:16:24</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.พันดอน - อ.กุมภวาปี - จ.อุดรธานี</td>
                            <td>0 วัน 1 ชม. 4 นาที 36 วินาที</td>
                            <td>17.118550</td>
                            <td>102.941838</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">77</td>
                            <td>65-5451</td>
                            <td>28-08-2021 14:19:52</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.นาแส่ง - อ.เกาะคา - จ.ลำปาง</td>
                            <td>-</td>
                            <td>18.108500</td>
                            <td>99.396783</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">78</td>
                            <td>65-5452</td>
                            <td>28-08-2021 13:31:41</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองหงส์ - อ.ทุ่งสง - จ.นครศรีธรรมราช</td>
                            <td>-</td>
                            <td>8.187648</td>
                            <td>99.609897</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">79</td>
                            <td>65-5453</td>
                            <td>28-08-2021 14:20:31</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.บ่อนอก - อ.เมืองประจวบคีรีขันธ์ - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>11.936760</td>
                            <td>99.818985</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">80</td>
                            <td>65-5454</td>
                            <td>28-08-2021 14:20:27</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.ศิลาลอย - อ.สามร้อยยอด - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>12.309983</td>
                            <td>99.876963</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">81</td>
                            <td>65-8021 (6w 5.5)</td>
                            <td>05-05-2021 19:08:53</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.คุ้งลาน - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>114 วัน 19 ชม. 12 นาที 7 วินาที</td>
                            <td>14.298473</td>
                            <td>100.627067</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">82</td>
                            <td>65-8022 (6w5.5)</td>
                            <td>21-08-2021 17:15:26</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.นาขา - อ.หลังสวน - จ.ชุมพร</td>
                            <td>6 วัน 21 ชม. 5 นาที 34 วินาที</td>
                            <td>10.012153</td>
                            <td>99.066367</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">83</td>
                            <td>65-8023 6w5.5</td>
                            <td>28-08-2021 13:40:26</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.654007</td>
                            <td>100.648697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">84</td>
                            <td>65-8024 กทม.</td>
                            <td>28-08-2021 14:20:44</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.หนองสาหร่าย - อ.ปากช่อง - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>14.806640</td>
                            <td>101.539657</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">85</td>
                            <td>65-8025 6w5.5</td>
                            <td>28-08-2021 13:37:54</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองแหน - อ.พนมสารคาม - จ.ฉะเชิงเทรา</td>
                            <td>-</td>
                            <td>13.681393</td>
                            <td>101.335205</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">86</td>
                            <td>65-8027</td>
                            <td>28-08-2021 13:36:02</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.654185</td>
                            <td>100.648688</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">87</td>
                            <td>65-8029 (6w5.5)</td>
                            <td>28-08-2021 13:38:31</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ปลายโพงพาง - อ.อัมพวา - จ.สมุทรสงคราม</td>
                            <td>-</td>
                            <td>13.389782</td>
                            <td>99.940147</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">88</td>
                            <td>CZ-04839</td>
                            <td>08-07-2021 01:57:16</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>51 วัน 12 ชม. 23 นาที 44 วินาที</td>
                            <td>14.204648</td>
                            <td>100.662300</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">89</td>
                            <td>CZ-05280</td>
                            <td>30-08-2020 04:07:31</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.เชียงรากน้อย - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>363 วัน 10 ชม. 13 นาที 29 วินาที</td>
                            <td>14.172108</td>
                            <td>100.605330</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</x-app-layout>