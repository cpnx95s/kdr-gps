<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold h4 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- หน้า index.blade.php -->

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-primary">
                        สรุปเหตุการณ์ปัจจุบัน
                    </h2>

                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item list-group-item-success">ออนไลน์ 0 คัน</li>
                        <li class="list-group-item list-group-item-danger">ไม่ออนไลน์เกิน 7 วัน 0 คัน</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">สถานะการใช้รถ (คัน)</h5>
                        <p class="card-text">
                        {!! $chart->container() !!}
                        {!! $chart->script() !!}
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">10 อันดับความเร็วเกิน</h5>
                        <p class="card-text">
                        {!! $chart2->container() !!}
                        {!! $chart2->script() !!}
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">สถานะการใช้ความเร็ว (คัน)</h5>
                        <p class="card-text">
                        {!! $chart3->container() !!}
                        {!! $chart3->script() !!}
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"> 10 อันดับรถจอดนาน</h5>
                        <p class="card-text">
                        {!! $chart4->container() !!}
                        {!! $chart4->script() !!}
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-12">
            <h2>ข้อมูลรถทั้งหมด 0 คัน</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</x-app-layout>