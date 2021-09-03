<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('report') }}
        </h2>
    </x-slot>
    <!-- หน้า oilspgraph.blade.php -->
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-primary">
                    กราฟน้ำมัน - ความเร็ว
                </h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col">
                <form action="">
                    <h6> ระหว่างวันที่
                        <input type="time" class="from-control" id="fromDate" name="fromDate" />
                        <input type="date" class="from-control" id="fromDate" name="fromDate" required />
                        <input type="date" class="from-control" id="fromDate" name="fromDate" required />
                        <input type="time" class="from-control" id="fromDate" name="fromDate" />
                        <button type="button" class="btn btn-success">ยืนยัน</button>
                </form>
            </div>
            </h6>
            <div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            {!! $chart->container() !!}
            {!! $chart->script() !!}
        </div>
    </div>
</x-app-layout>