@extends('pages.common')
@section('page-header')
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Debug</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Debug</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>

        </ul>
    </div>
@endsection

@section('content')

    <!-- Dashboard content -->
    <div class="row">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Debug Info</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>

                    </ul>
                </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

            <div class="panel-body">
                List down all user related Debug info: <code>Successful</code> and <code>UnSuccessful</code> ones.
            </div>

            <table class="table table-bordered table-hover datatable-highlight dataTable no-footer"
                   id="debug_table" role="grid" aria-describedby="DataTables_Table_2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="First Name: activate to sort column descending">Debug Id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Last Name: activate to sort column ascending">Debug type
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Job Title: activate to sort column ascending">Description
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="DOB: activate to sort column ascending">Status
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="DOB: activate to sort column ascending">Time
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                        aria-label="Status: activate to sort column ascending">Action
                    </th>

                </tr>
                </thead>
                <tbody>

                @foreach($debug_info_list as $debug_info_list_item)
                <tr role="row" class="odd">
                    <td>{{$debug_info_list_item['debug_id']}}</td>
                    <td>{!! $debug_info_list_item['debug_type'] !!}</td>
                    <td>{{$debug_info_list_item['description']}}</td>
                    <td>{!! $debug_info_list_item['status'] !!}</td>
                    <td>{{$debug_info_list_item['time']}}</td>
                    <td>
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i ></i> Read</a></li>
                                    <li><a href="#"><i ></i> UnRead</a></li>
                                    <li><a href="#"><i ></i> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- Quick stats boxes -->


        <!-- /quick stats boxes -->

        <!-- Marketing campaigns -->


        <div class="table-responsive">

        </div>

        <div class="table-responsive">

        </div>
    </div>
    <!-- /marketing campaigns -->

@endsection

@section('page-specific-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#debug_table').DataTable();
            console.log('init dt');
        });
    </script>
@endsection