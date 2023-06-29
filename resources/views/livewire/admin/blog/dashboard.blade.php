<x-layouts.admin>
        <div class="row">
            <div class="row my-4">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Blog posts</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">{{$blogPosts->count()}} blog posts</span>
                                    </p>
                                    <div>
                                        <a class="btn btn-primary" href="/admin/create-blog">Create new post</a>
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
                                                    <span class="text-xs font-weight-bold">{{ $blogPost->transformToString($blogPost->status) }}</span>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/edit-blog/{{ $blogPost->id }}" class="text-secondary font-weight-bold text-xs"
                                                   data-toggle="tooltip" data-original-title="Edit blog">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/delete-blog/{{ $blogPost->id }}" class="text-danger font-weight-bold text-xs"
                                                   data-toggle="tooltip" data-original-title="Delete blog">
                                                    Delete
                                                </a>
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


