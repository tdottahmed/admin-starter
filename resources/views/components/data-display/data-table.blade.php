<table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
    <thead>
        <tr>
            <th scope="col" style="width: 10px;">
                <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                </div>
            </th>
            <th>SR No.</th>
            <th>ID</th>
            <th>Purchase ID</th>
            <th>Title</th>
            <th>User</th>
            <th>Assigned To</th>
            <th>Created By</th>
            <th>Create Date</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @for ($i = 0; $i < 15; $i++) --}}
        <tr>
            <th scope="row">
                <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                </div>
            </th>
            <td>01</td>
            <td>VLZ-452</td>
            <td>VLZ1400087402</td>
            <td><a href="#!">Post launch reminder/ post list</a></td>
            <td>Joseph Parker</td>
            <td>Alexis Clarke</td>
            <td>Joseph Parker</td>
            <td>03 Oct, 2021</td>
            <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
            <td><span class="badge bg-danger">High</span></td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-more-fill align-middle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="#!" class="dropdown-item"><i
                                    class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                        <li><a class="dropdown-item edit-item-btn"><i
                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                        <li>
                            <a class="dropdown-item remove-item-btn">
                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        {{-- @endfor --}}
    </tbody>
</table>

@push('styles')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="/assets/admin/js/pages/datatables.init.js"></script>
    <!-- App js -->
@endpush
