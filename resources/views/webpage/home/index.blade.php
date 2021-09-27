
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
axios.get('http://openapi.18gps.net/GetDateServices.asmx/loginSystem?LoginName=monitor&LoginPassword=123456&LoginType=ENTERPRISE&language=cn&ISMD5=0&timeZone=+08&apply=APP&loginUrl=http://vipapi.18gps.net/')
.then((resp1) => {
    co1 = resp1;
    gow = co1.data.mds;

const pp = 'http://api.18gps.net//GetDateServices.asmx/GetDate?method=getDeviceList&mds='
axios.get(pp + gow)
.then((resp12) => {
    co12 = resp12;
    go2 = co12.data.rows;
    console.log(go2)
})
.catch((err) => {
    console.log(err)
})
});
</script>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="row justify-content-center my-3">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <!-- <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                <div class="mx-3 my-3">
                    <div>
                        <x-jet-application-logo style="width: 317px;" />
                    </div>

                    <h3 class="h3 my-4">
                        Welcome to your Jetstream application!
                    </h3>

                    <div class="text-muted">
                        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                        ecosystem to be a breath of fresh air. We hope you love it.
                    </div>
                </div>
            </div> -->
                <div class="row g-0">
                    <div class="col-md-4 pr-3 ">
                        <div class="card-body bg-white p-3 h-100 ">
                            <div class="bd-highlight mb-3">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active bg-success text-light font-weight-bold" data-toggle="tab" href="#home">ณ ปัจจุบัน <span class="badge badge-warning">99</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-warning text-dark font-weight-bold" data-toggle="tab" href="#menu1">ข้อมูลย้อนหลัง</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-danger text-light font-weight-bold" data-toggle="tab" href="#menu2">สรุปสถานะ</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <script>
                                        // new SimpleBar(document.querySelector('div'));
                                    </script>

                                    <div id="home" class="anyClass container tab-pane active"><br>

                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="Search" placeholder="Search" name="Search">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" id="truckgroupe">
                                                        <option>Allำ</option>
                                                        <option>KDR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="card flex-row flex-wrap my-3">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/longtime.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>

                                        <div class="card flex-row flex-wrap my-3">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/longtime.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>

                                        <div class="card flex-row flex-wrap my-3">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/stop.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>

                                        <div class="card flex-row flex-wrap my-3">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/loss.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>

                                        <div class="card flex-row flex-wrap my-3">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/idles.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>

                                        <div class="card flex-row flex-wrap">
                                            <div class="card-header border-0 d-flex align-items-center">
                                                <div class="info-box-icon">
                                                    <div id="V_8966051809426332546">2ฒศ-7715</div>
                                                    <img id="I_8966051809426332546" src="{{ asset('asset/images/normal.png') }}">
                                                    <div> <span id="SP_8966051809426332546">0</span> km./h</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>17-08-2021 13:56:13</div>
                                                <div>สะพาน [90 เมตร]</div>
                                                <div>จอดนานเกินชั่วโมง</div>
                                                <div>แพรกษา</div>
                                            </div>
                                        </div>


                                    </div>




                                    <div id="menu1" class="anyClass container tab-pane fade"><br>



                                        <div id="his_set" style="border:solid 1px lightgray; border-radius:3px;padding:10px;">
                                            <label id="lbl_mi_plate">ทะเบียน</label>
                                            <select id="list-car" class="form-control">
                                                <option value="8966051809426332546">2ฒศ-7715</option>
                                                <option value="8966051809426332603">2ฒศ-7716</option>
                                                <option value="8966051809426332504">2ฒศ-7717</option>
                                                <option value="8966051809426332587">2ฒศ-7718</option>
                                                <option value="8966051809426332520">2ฒศ-8392</option>
                                                <option value="8966051809426332561">2ฒศ-8393</option>
                                                <option value="8966051809426332553">2ฒศ-8395</option>
                                                <option value="8966051809426332595">2ฒศ-9066</option>
                                                <option value="8966051810444210540">2ฒส-100</option>
                                                <option value="8966051810444210490">2ฒส-102</option>
                                                <option value="8966051810444210524">2ฒส-104</option>
                                                <option value="8966051810444210581">2ฒส-106</option>
                                                <option value="8966051810444210615">2ฒส-108</option>
                                                <option value="8966051809426343709">2ฒส-109</option>
                                                <option value="8966051810444210458">2ฒส-110</option>
                                                <option value="8966051810444210532">2ฒส-112</option>
                                                <option value="8966051810444210516">2ฒส-113</option>
                                                <option value="8966051810444210565">2ฒส-114</option>
                                                <option value="8966051810444210482">2ฒส-120</option>
                                                <option value="8966051810444210433">2ฒส-121</option>
                                                <option value="8966051810444210508">2ฒส-122</option>
                                                <option value="8966051810444210474">2ฒส-131</option>
                                                <option value="8966051810444210557">2ฒส-132</option>
                                                <option value="8966051810444217750">2ฒห-8428</option>
                                                <option value="8966051810444217768">2ฒห-8431</option>
                                                <option value="8966051810444217776">2ฒห-8432</option>
                                                <option value="8966051810444217743">2ฒห-8433</option>
                                                <option value="8966051810444217784">2ฒห-8434</option>
                                                <option value="8966051810444224905">2ฒฬ-3060</option>
                                                <option value="8966051810444224814">2ฒฬ-3061</option>
                                                <option value="8966051810444224897">2ฒฬ-3064</option>
                                                <option value="8966051810444224285">2ฒฬ-3065</option>
                                                <option value="8966051810444224913">2ฒฬ-3066</option>
                                                <option value="8966051810444228260">2ฒอ-248</option>
                                                <option value="8966051810444228302">2ฒอ-250</option>
                                                <option value="8966051810444228278">2ฒอ-253</option>
                                                <option value="8966051810444228294">2ฒอ-254</option>
                                                <option value="8966051810444227734">2ฒอ-260กทม</option>
                                                <option value="8966051810444227700">2ฒอ-261กทม</option>
                                                <option value="8966051810444227742">2ฒอ-262 (4wj isuzu)</option>
                                                <option value="8966051810444225407">2ฒอ-265</option>
                                                <option value="8966051810444236495">2ฒอ-5478 (4w7cbm)</option>
                                                <option value="8966051810444412492">2ฒอ-5479</option>
                                                <option value="8966051810444412500">2ฒอ-5480</option>
                                                <option value="8966051810444236453">2ฒอ-5491 (4w7cbm)</option>
                                                <option value="8966051810444412443">2ฒอ-5492</option>
                                                <option value="8966051810444236503">2ฒอ-5493 (7cbm)</option>
                                                <option value="8966051810444236156">2ฒอ-9644</option>
                                                <option value="8966051810444236107">2ฒอ-9648</option>
                                                <option value="8966051810444236149">2ฒอ-9649</option>
                                                <option value="8966051810444236081">2ฒอ-9650</option>
                                                <option value="8966051810444236073">2ฒอ-9651</option>
                                                <option value="8966051810444236123">2ฒอ-9652</option>
                                                <option value="8966051810444236115">2ฒอ-9653</option>
                                                <option value="8966051810444236164">2ฒอ-9660</option>
                                                <option value="8966051810444236099">2ฒอ-9661</option>
                                                <option value="8966051810444425924">3ฒข-3538</option>
                                                <option value="8966051810444425940">3ฒข-3540</option>
                                                <option value="8966051810444425932">3ฒข-3543</option>
                                                <option value="8966051810444426013">3ฒข-3546</option>
                                                <option value="8966051810444426203">3ฒข-3547</option>
                                                <option value="8966051810444426211">3ฒข-3548</option>
                                                <option value="8966051810444426187">3ฒข-3549</option>
                                                <option value="8966051810444425957">3ฒข-3550</option>
                                                <option value="8966051810444216653">3ฒข-3551</option>
                                                <option value="8966051810444425981">3ฒข-3556</option>
                                                <option value="8966051810444425973">3ฒข-3559</option>
                                                <option value="8966051810444426229">3ฒข-3561</option>
                                                <option value="8966051810444426195">3ฒข-3562</option>
                                                <option value="8966051810444426005">3ฒข-3568</option>
                                                <option value="8966051809426334500">65-5434</option>
                                                <option value="8966051809426334575">65-5438</option>
                                                <option value="8966051809426334534">65-5441</option>
                                                <option value="8966051809426334526">65-5445</option>
                                                <option value="8966051809426334583">65-5447</option>
                                                <option value="8966051809426334559">65-5450</option>
                                                <option value="8966051809426334542">65-5451</option>
                                                <option value="8966051809426334567">65-5452</option>
                                                <option value="8966051809426334419">65-5453</option>
                                                <option value="8966051809426334518">65-5454</option>
                                                <option value="8966051810444227635">65-8021 (6w 5.5)</option>
                                                <option value="8966051810444227650">65-8022 (6w5.5)</option>
                                                <option value="8966051810444227759">65-8023 6w5.5</option>
                                                <option value="8966051810444227692">65-8024 กทม.</option>
                                                <option value="8966051810444227643">65-8025 6w5.5</option>
                                                <option value="8966051810444227684">65-8027</option>
                                                <option value="8966051810444227676">65-8029 (6w5.5)</option>
                                                <option value="8966051810444227197">CZ-04839</option>
                                                <option value="8966051810444425965">CZ-05280</option>
                                            </select>
                                            <label id="lab_mi_timeI">ระยะเวลา</label>
                                            <select id="list-time" class="form-control">
                                                <option id="opt_mi_1hr" value="1">ย้อนหลัง 1 ชั่วโมง</option>
                                                <option id="opt_mi_3hr" value="3">ย้อนหลัง 3 ชั่วโมง</option>
                                                <option id="opt_mi_6hr" value="6">ย้อนหลัง 6 ชั่วโมง</option>
                                                <option id="opt_mi_12hr" value="12">ย้อนหลัง 12 ชั่วโมง</option>
                                                <option id="opt_mi_today" value="91">ย้อนหลัง วันนี้</option>
                                                <option id="opt_mi_yesterday" value="92">ย้อนหลัง เมื่อวาน</option>
                                                <option id="opt_mi_ownset" value="93">กำหนดเอง</option>
                                            </select>
                                            <label id="lab_mi_startdate">วันที่ - เวลา เริ่มต้น</label>
                                            <div>
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td><input id="dateStart" type="text" class="form-control hasDatepicker" placeholder="yyyy-mm-dd" onkeydown="return false;" disabled="disabled"></td>
                                                            <td width="68"><select id="hourStart" class="form-control" disabled="disabled">
                                                                    <option>00</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                </select></td>
                                                            <td width="68"><select id="minuteStart" class="form-control" disabled="disabled">
                                                                    <option>00</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                    <option>31</option>
                                                                    <option>32</option>
                                                                    <option>33</option>
                                                                    <option>34</option>
                                                                    <option>35</option>
                                                                    <option>36</option>
                                                                    <option>37</option>
                                                                    <option>38</option>
                                                                    <option>39</option>
                                                                    <option>40</option>
                                                                    <option>41</option>
                                                                    <option>42</option>
                                                                    <option>43</option>
                                                                    <option>44</option>
                                                                    <option>45</option>
                                                                    <option>46</option>
                                                                    <option>47</option>
                                                                    <option>48</option>
                                                                    <option>49</option>
                                                                    <option>50</option>
                                                                    <option>51</option>
                                                                    <option>52</option>
                                                                    <option>53</option>
                                                                    <option>54</option>
                                                                    <option>55</option>
                                                                    <option>56</option>
                                                                    <option>57</option>
                                                                    <option>58</option>
                                                                    <option>59</option>
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <label id="lab_mi_enddate">วันที่ - เวลา สิ้นสุด</label>
                                            <div>
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td><input id="dateStop" type="text" class="form-control hasDatepicker" placeholder="yyyy-mm-dd" onkeydown="return false;" disabled="disabled"></td>
                                                            <td width="68"><select id="hourStop" class="form-control" disabled="disabled">
                                                                    <option>00</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                </select></td>
                                                            <td width="68"><select id="minuteStop" class="form-control" disabled="disabled">
                                                                    <option>00</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                    <option>31</option>
                                                                    <option>32</option>
                                                                    <option>33</option>
                                                                    <option>34</option>
                                                                    <option>35</option>
                                                                    <option>36</option>
                                                                    <option>37</option>
                                                                    <option>38</option>
                                                                    <option>39</option>
                                                                    <option>40</option>
                                                                    <option>41</option>
                                                                    <option>42</option>
                                                                    <option>43</option>
                                                                    <option>44</option>
                                                                    <option>45</option>
                                                                    <option>46</option>
                                                                    <option>47</option>
                                                                    <option>48</option>
                                                                    <option>49</option>
                                                                    <option>50</option>
                                                                    <option>51</option>
                                                                    <option>52</option>
                                                                    <option>53</option>
                                                                    <option>54</option>
                                                                    <option>55</option>
                                                                    <option>56</option>
                                                                    <option>57</option>
                                                                    <option>58</option>
                                                                    <option>59</option>
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <table style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td><button id="btn_get_history" class="btn btn-success" style="width:100%;">ตกลง</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div style="margin-top:10px; display:none; text-align:center;" class="alert alert-danger"></div>
                                        </div>

                                    </div>




                                    <div id="menu2" class="anyClass container tab-pane fade"><br>
                                        <div id="pie" style="font-size: 12px; " class="bg-light p-2 ui-draggable ui-draggable-handle">
                                            <i id="pie_close" style="font-size:14px; cursor:pointer;" class="fa fa-close"></i>
                                            <table>
                                                {!! $chart->container() !!}

                                                {!! $chart->script() !!}
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                                </div>
                                                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                                </div>
                                                            </div><canvas width="150" height="150" id="pie_canv" style="display: block;" class="chartjs-render-monitor"></canvas>
                                                        </td>
                                                        <td>

                                                            <div class="p-2">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:#969595;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_1" class="pie_link"><span id="txt_mi_stop">จอดดับเครื่อง</span><span id="pie_stop">10</span><span id="txt_mi_car1"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:#ffc107;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_2" class="pie_link"><span id="txt_mi_idle">จอดไม่ดับเครื่อง</span><span id="pie_idle">8</span><span id="txt_mi_car2"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:green;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_3" class="pie_link"><span id="txt_mi_normal">วิ่งปกติ</span><span id="pie_normal">4</span><span id="txt_mi_car3"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:deeppink;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_4" class="pie_link"><span id="txt_mi_overspeed">ความเร็วเกิน</span><span id="pie_overspeed">0</span><span id="txt_mi_car4"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:blue;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_5" class="pie_link"><span id="txt_mi_BlackBox">ไฟกล่องดำ</span><span id="pie_boxpower">1</span><span id="txt_mi_car5"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:red;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_6" class="pie_link"><span id="txt_mi_Offline">ไม่อัพเดท</span><span id="pie_lose">14</span><span id="txt_mi_car6"> คัน</span></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="border:1px solid #ccc;padding:1px;">
                                                                                    <div style="background-color:pink;" class="border border-secondary p-1"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="pie_7" class="pie_link"><span id="txt_mi_Longtime">จอดนานเกินชั่วโมง</span><span id="pie_longtime">52</span> <span id="txt_mi_car7"> คัน</span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pl-3 ">
                        <style type="text/css">
                            html {
                                height: 100%;
                            }

                            body {
                                margin: 0px;
                                height: 100%;
                            }

                            #map {
                                height: 100%;
                            }

                            #result {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                right: 0;
                                width: 1px;
                                height: 80%;
                                margin: auto;
                                border: 4px solid #dddddd;
                                background: #ffffff;
                                overflow: auto;
                                z-index: 2;
                            }
                        </style>

                        <script type="text/javascript" src="https://api.longdo.com/map/?key=0e2384cd542e68a77e96b5df4516be86"></script>
                        <script>


                        var marker1 = new longdo.Marker({
                            lon: 101.2,
                            lat: 12.8
                        }, {
                            title: 'Marker',
                            icon: {
                                html:'<img src="{{ asset('asset/images/stop.png') }}">',
                                offset: {
                                    x: 12,
                                    y: 45
                                }
                            },
                            detail: 'Drag me',
                            visibleRange: {
                                min: 1,
                                max: 20
                            },
                            draggable: true,
                            weight: longdo.OverlayWeight.Top,
                        });

                        // 2
                        var marker30 = new longdo.Marker({
                            lon: 100.56,
                            lat: 13.74
                        }, {
                            title: 'Marker',
                            icon: {
                                html:'<img src="{{ asset('asset/images/stop.png') }}">',
                                offset: {
                                    x: 12,
                                    y: 45
                                }
                            },
                            detail: 'Drag me',
                            visibleRange: {
                                min: 1,
                                max: 20
                            },
                            draggable: true,
                            weight: longdo.OverlayWeight.Top,
                        });

                        // 3
                        var marker31 = new longdo.Marker({
                            lon: 101.51,
                            lat: 13.65
                        }, {
                            title: 'Marker',
                            icon: {
                                html:'<img src="{{ asset('asset/images/stop.png') }}">',
                                offset: {
                                    x: 12,
                                    y: 45
                                }
                            },
                            detail: 'Drag me',
                            visibleRange: {
                                min: 1,
                                max: 20
                            },
                            draggable: true,
                            weight: longdo.OverlayWeight.Top,
                        });

                        function init() {
                            var map = new longdo.Map({
                                placeholder: document.getElementById('map')
                            });
                            // map.Overlays.add(marker);
                            map.Overlays.add(marker1);
                            map.Overlays.add(marker30);
                            map.Overlays.add(marker31);
                        }
                        </script>

                        <body onload="init();">
                            <div id="map"></div>
                            <div id="result"></div>
                        </body>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
