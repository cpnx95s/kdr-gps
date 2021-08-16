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
                            {{-- <div>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div class="pl-3">
                                <div class="mb-2">
                                    <a href="https://laravel.com/docs" class="h4 font-weight-bolder text-decoration-none text-dark">Documentation</a>
                                </div>
                                <p class="text-muted">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
                                </p>
                                <a href="https://laravel.com/docs" class="text-decoration-none">
                                    <div class="mt-3 d-flex align-content-center font-weight-bold text-primary">
                                        <div>Explore the documentation</div>

                                        <div class="ml-1 text-primary">
                                            <svg viewBox="0 0 20 20" fill="currentColor" width="16" class="arrow-right w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}


                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active bg-success text-light font-weight-bold" data-toggle="tab"
                                        href="#home">ณ ปัจจุบัน <span class="badge badge-warning">99</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-warning text-dark font-weight-bold" data-toggle="tab"
                                        href="#menu1">ข้อมูลย้อนหลัง</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-danger text-light font-weight-bold" data-toggle="tab"
                                        href="#menu2">สรุปสถานะ</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active"><br>
                                    <div class="card flex-row flex-wrap">
                                        <div class="card-header border-0">
                                            <div>
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                            </div>
                                        </div>
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn btn-primary">BUTTON</a>
                                        </div>
                                        <div class="w-100"></div>
                                        {{-- <div class="card-footer w-100 text-muted">
                                            FOOTER
                                        </div> --}}
                                    </div>
                                </div>
                                <div id="menu1" class="container tab-pane fade"><br>
                                    <h3>ข้อมูลย้อนหลัง</h3>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                </div>
                                <div id="menu2" class="container tab-pane fade"><br>
                                    <h3>สรุปสถานะ</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 pl-3 ">
                    <div class="card-body bg-white p-3 h-100 ">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32">
                                    <path
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-3">
                                <div class="mb-2">
                                    <a href="https://laracasts.com"
                                        class="h4 font-weight-bolder text-decoration-none text-dark">Laracasts</a>
                                </div>
                                <p class="text-muted">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                    development. Check them out, see for yourself, and massively level up your
                                    development skills in the process.
                                </p>
                                <a href="https://laravel.com/docs" class="text-decoration-none">
                                    <div class="mt-3 d-flex align-content-center font-weight-bold text-primary">
                                        <div>Start watching Laracasts</div>

                                        <div class="ml-1 text-primary">
                                            <svg viewBox="0 0 20 20" fill="currentColor" width="16"
                                                class="arrow-right w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
