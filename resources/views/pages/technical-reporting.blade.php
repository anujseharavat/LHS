@extends('pages.common')

@section('page-header')
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> -Technical Report</h4>
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
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Technical Report</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>

        </ul>
    </div>
@endsection

@section('content')
    <!-- Dashboard content -->
    <div class="row">

        <!-- Quick stats boxes -->

        <!-- /quick stats boxes -->

        <!-- Marketing campaigns -->

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Generate Reports - Technical</h6>
                <div class="panel-heading">
                    <div class="col-md-4">

                        <select name="select" class="form-control">
                            <option value="opt1">All Domains</option>
                            <option value="opt2">All Sub domains</option>
                            <option value="opt3">dynamic values</option>

                        </select>

                    </div>
                    <div class="form-group">

                        <label class="checkbox-inline checkbox-right">
                            <div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
                            All
                        </label>

                        <label class="checkbox-inline checkbox-right">
                            <div class="checker"><span><input type="checkbox" class="styled"></span></div>
                            Critical
                        </label>

                        <label class="checkbox-inline checkbox-right">
                            <div class="checker"><span><input type="checkbox" class="styled"></span></div>
                            High
                        </label>

                        <label class="checkbox-inline checkbox-right">
                            <div class="checker"><span><input type="checkbox" class="styled"></span></div>
                            Medium
                        </label>

                    </div>

                </div>
                <div class="heading-elements">
                    <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                        <i class="icon-calendar3 position-left"></i> <span>March 27 - April 25</span> <b class="caret"></b>
                    </button>
                </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

            <div class="table-responsive">
                <table class="table table-xlg text-nowrap">
                    <tbody>
                    <tr>
                        <td class="col-md-4">
                            <div class="media-left media-middle">
                                <div id="tickets-status"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -12.326087772183463,-14.459168725498342L-6.163043886091732,-7.229584362749171A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(41, 182, 246);"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(102, 187, 106);" d="M-12.326087772183463,-14.459168725498342A19,19 0 0,1 14.331188229058796,-12.474656065130077L7.165594114529398,-6.237328032565038A9.5,9.5 0 0,0 -6.163043886091732,-7.229584362749171Z"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(239, 83, 80);" d="M14.331188229058796,-12.474656065130077A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.165594114529398,-6.237328032565038Z"></path></g></g></svg></div>
                            </div>

                            <div class="media-left">
                                <h5 class="text-semibold no-margin">14,327 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+2.9%)</small></h5>
                                <span class="text-muted"><span class="status-mark border-success position-left"></span> Jun 16, 10:00 am</span>
                            </div>
                        </td>

                        <td class="col-md-3">
                            <div class="media-left media-middle">
                                <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
                            </div>

                            <div class="media-left">
                                <h5 class="text-semibold no-margin">
                                    1,132 <small class="display-block no-margin">total tickets</small>
                                </h5>
                            </div>
                        </td>

                        <td class="col-md-3">
                            <div class="media-left media-middle">
                                <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-spinner11"></i></a>
                            </div>

                            <div class="media-left">
                                <h5 class="text-semibold no-margin">
                                    06:25:00 <small class="display-block no-margin">response time</small>
                                </h5>
                            </div>
                        </td>

                        <td class="text-right col-md-2">
                            <a href="#" class="btn bg-teal-400"><i class="icon-statistics position-left"></i> Technical Report</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="table-responsive">

        </div>

        <div class="table-responsive">

        </div>
    </div>
    <!-- /marketing campaigns -->

    </div>

    <div class="col-lg-4">

        <!-- Progress counters -->
        <div class="row"> </div>
        <!-- /progress counters -->
        <!-- My messages -->

    </div>
    <!-- /dashboard content -->
@endsection