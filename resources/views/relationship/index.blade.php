@extends('layouts.app')
@section('content')
    {{-- Add Relationship --}}
    <div class="modal fade" id="add_relationshipModel">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Relationship</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <form id="add_relationshipform">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <input type="hidden" name="url" id="url" value="{{ route('relationship.store') }}">
                            <input type="text" class="form-control" id="relationship_type" name="relationship_type"
                                placeholder="Relationship Type">
                            <div class="text-start text-danger relationship_type"></div>

                        </div>
                        <div class="form-group">
                            <select name="status" id="status" class="form-control form-select">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <div class="text-start text-danger status"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button class="btn-start btn btn-primary m-1">Add</button>
                            <a class="btn btn-light" data-bs-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Relationship --}}
    <div class="modal fade" id="edit_relationtmodel">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Relationship</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <form id="edit_relationshipform">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="hidden" name="relation_id" id="relation_id">
                            <input type="text" class="form-control" id="edit_relationship_type"
                                name="edit_relationship_type" placeholder="Relationship Type">
                            <div class="text-start text-danger edit_relationship_type"></div>

                        </div>
                        <div class="form-group">
                            <select name="edit_status" id="edit_status" class="form-control form-select">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <div class="text-start text-danger edit_status"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button class="btn btn-primary m-1">Update</button>
                            <a class="btn btn-light" data-bs-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-5 -->
    <div class="row row-sm mt-3">
        <div class="col-12 col-sm-12">
            <div class="card ">
                <div class="card-header d-flex aligin-items-center justify-content-between">
                    <h3 class="card-title mb-0">Relationship</h3>
                    <button class="modal-effect add_master_btn" data-bs-effect="effect-fall" data-bs-toggle="modal"
                        href="#add_relationshipModel"><span>
                            <i class="fe fe-plus"></i>
                        </span> Add New</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="relationship_lists" class="table table-bordered text-nowrap mb-0">
                            <thead class="border-top">
                                <tr>
                                    <th class="bg-transparent border-bottom-0 w-5">S.no</th>
                                    <th class="bg-transparent border-bottom-0">Relationship</th>
                                    <th class="bg-transparent border-bottom-0">Status</th>
                                    <th class="bg-transparent border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($relationships as $relationship)
                                    <tr class="border-bottom">
                                        <td class="text-muted fs-12 fw-semibold text-center">{{ $i++ }}</td>
                                        <td>
                                            {{ $relationship->relationship_type }}
                                        </td>
                                        @if ($relationship->status == 1)
                                            <td class="text-success fs-12 fw-semibold">Active</td>
                                        @else
                                            <td class="text-danger fs-12 fw-semibold">Inactive</td>
                                        @endif
                                        <td class="">
                                            <button class="bg-primary border-0 me-1" data-bs-effect="effect-fall"
                                                data-bs-toggle="modal"
                                                onclick="return EditRelation({{ $relationship->id }})"
                                                style="border-radius: 5px;">

                                                <i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg"
                                                        height="16" viewBox="0 0 24 24" width="12">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                                    </svg></i>
                                            </button>
                                            <button class="bg-danger border-0" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete" style="border-radius: 5px;"><i><svg
                                                        class="table-delete" xmlns="http://www.w3.org/2000/svg"
                                                        height="16" viewBox="0 0 24 24" width="12"
                                                        onclick="deleteOrder('{{ $relationship->id }}')">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                    </svg></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div><!-- ROW-5 END -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#relationship_lists').DataTable();
        });

        // edit relation type
        function EditRelation(id) {
            $('#edit_relationtmodel').modal('show');
            var edit_url =
                $('meta[name="base_url"]').attr("content") + "/relationship/" + id + "/edit";
            $.ajax({
                url: edit_url,
                method: "GET",
                data: {
                    id: id
                },
                contentType: false,
                processData: false,
                success: function(res) {
                    $("#edit_relationship_type").val(res.data.relationship_type);
                    $("#edit_status").val(res.data.status);
                    $("#relation_id").val(res.data.id);
                },
            });
        }

        function deleteOrder(id) {
            swal({
                    title: "Are you sure?",
                    text: "Confirm to delete this Relationship Type?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        var redirect = $('meta[name="base_url"]').attr('content') + '/relationship';
                        var token = $('meta[name="csrf-token"]').attr("content");
                        var formData = new FormData();
                        formData.append("_token", "{{ csrf_token() }}");
                        formData.append("id", id);
                        $.ajax({
                            url: "{{ route('relationship.destroy', '') }}" + "/" + id,
                            data: formData,
                            type: 'DELETE',
                            contentType: false,
                            processData: false,
                            dataType: "json",
                            success: function(res) {
                                if (res) {
                                    swal("Deleted!", "Relationship Type has been deleted.", "success");
                                    window.location.href = redirect;

                                } else {
                                    swal("Relationship Type Delete Failed", "Please try again. :)",
                                        "error");
                                }
                            }
                        });

                    } else {
                        swal("Cancelled", "Cancelled", "error");
                    }
                });
        }
    </script>
@endsection
