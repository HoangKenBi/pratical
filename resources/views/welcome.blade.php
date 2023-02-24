@include("admin.html.css")
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">#</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Age</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Address</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">Telephone</th></tr>
                        </thead>
                        <tbody>
                        <tr role="row" class="odd">
                            <td class="" tabindex="0">Other browsers</td>
                            <td class="sorting_1">All others</td>
                            <td>-</td>
                            <td>-</td>
                            <td style="">U</td>
                        </tr><tr role="row" class="even">
                            <td tabindex="0" class="">Trident</td>
                            <td class="sorting_1">AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td>6</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="odd">
                            <td class="" tabindex="0">Gecko</td>
                            <td class="sorting_1">Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td>1.8</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="even">
                            <td class="" tabindex="0">Gecko</td>
                            <td class="sorting_1">Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td>1.8</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="odd">
                            <td class="" tabindex="0">Misc</td>
                            <td class="sorting_1">Dillo 0.8</td>
                            <td>Embedded devices</td>
                            <td>-</td>
                            <td style="">X</td>
                        </tr><tr role="row" class="even">
                            <td class="" tabindex="0">Gecko</td>
                            <td class="sorting_1">Epiphany 2.20</td>
                            <td>Gnome</td>
                            <td>1.8</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="odd">
                            <td tabindex="0" class="">Gecko</td>
                            <td class="sorting_1">Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="even">
                            <td tabindex="0" class="">Gecko</td>
                            <td class="sorting_1">Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="odd">
                            <td tabindex="0" class="">Gecko</td>
                            <td class="sorting_1">Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td style="">A</td>
                        </tr><tr role="row" class="even">
                            <td tabindex="0" class="">Gecko</td>
                            <td class="sorting_1">Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td>1.9</td>
                            <td style="">A</td>
                        </tr></tbody>
                        <tfoot>
                        </tfoot>
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
    <!-- /.card-body -->
</div>
@include('admin.html.js')
