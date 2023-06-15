<x-layouts.admin>
        <div class="row">
            {{--            <div class="row">--}}
            {{--                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body p-3">--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-8">--}}
            {{--                                    <div class="numbers">--}}
            {{--                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>--}}
            {{--                                        <h5 class="font-weight-bolder mb-0">--}}
            {{--                                            $53,000--}}
            {{--                                            <span class="text-success text-sm font-weight-bolder">+55%</span>--}}
            {{--                                        </h5>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="col-4 text-end">--}}
            {{--                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">--}}
            {{--                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body p-3">--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-8">--}}
            {{--                                    <div class="numbers">--}}
            {{--                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>--}}
            {{--                                        <h5 class="font-weight-bolder mb-0">--}}
            {{--                                            2,300--}}
            {{--                                            <span class="text-success text-sm font-weight-bolder">+3%</span>--}}
            {{--                                        </h5>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="col-4 text-end">--}}
            {{--                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">--}}
            {{--                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body p-3">--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-8">--}}
            {{--                                    <div class="numbers">--}}
            {{--                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>--}}
            {{--                                        <h5 class="font-weight-bolder mb-0">--}}
            {{--                                            +3,462--}}
            {{--                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>--}}
            {{--                                        </h5>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="col-4 text-end">--}}
            {{--                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">--}}
            {{--                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-xl-3 col-sm-6">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body p-3">--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-8">--}}
            {{--                                    <div class="numbers">--}}
            {{--                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>--}}
            {{--                                        <h5 class="font-weight-bolder mb-0">--}}
            {{--                                            $103,430--}}
            {{--                                            <span class="text-success text-sm font-weight-bolder">+5%</span>--}}
            {{--                                        </h5>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="col-4 text-end">--}}
            {{--                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">--}}
            {{--                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="row my-4">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Blog posts</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">{{$blogPosts->count()}} completed</span>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-secondary"></i>
                                        </a>
                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                            aria-labelledby="dropdownTable">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                    action</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                    else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Blog Title
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Author
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creation date
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Last change date
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogPosts as $blogPost)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg"
                                                             class="avatar avatar-sm me-3">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $blogPost->title }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    <a href="/author/{{$blogPost->author->id}}">
                                                        {{ $blogPost->author->name }}
                                                    </a>
                                                </div>
                                            </td>

                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <span class="text-xs font-weight-bold">{{ $blogPost->created_at }}</span>
                                                </div>
                                            </td>

                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <span class="text-xs font-weight-bold">{{ $blogPost->updated_at }}</span>
                                                </div>
                                            </td>

                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <span class="text-xs font-weight-bold">{{ $blogPost->status }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                {{ $blogPosts->links('pagination::simple-tailwind') }}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-layouts.admin>


