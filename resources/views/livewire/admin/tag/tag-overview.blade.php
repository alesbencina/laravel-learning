<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tags</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Url alias
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td class="px-2 py-1">
                                            <div class="progress-wrapper w-75">
                                                <span class="text-xs font-weight-bold">{{ $tag->name }}</span>
                                            </div>
                                        </td>


                                        <td>
                                            <div class="progress-wrapper w-75">
                                                <span class="text-xs font-weight-bold">{{ $tag->url_alias }}</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="/admin/tag/edit/{{ $tag->id }}"
                                               class="font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="edit tag">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="/admin/tag/delete/{{ $tag->id }}"
                                               class="text-danger font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Delete tag">
                                                Delete
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-2">
                        {{ $tags->links('pagination::simple-tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.admin>
