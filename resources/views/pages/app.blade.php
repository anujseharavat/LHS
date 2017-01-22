@extends('pages.common')

@section('page-header')
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
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
            <li class="active">Dashboard</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>

        </ul>
    </div>
@endsection
@section('content')
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-lg-7">

                <!-- Traffic sources -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Traffic sources<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <form class="heading-form"
                                  action="http://demo.interface.club/limitless/layout_1/LTR/default/index.html#">
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                        <input type="checkbox" class="switch" checked="checked" style="display: none;"
                                               data-switchery="true">
                                        Live update:
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="http://demo.interface.club/limitless/layout_1/LTR/default/index.html#"
                                           class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-plus3"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">New visitors</div>
                                        <div class="text-muted">2,349 avg</div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="new-visitors">
                                        <svg width="130.421875" height="35"><g transform="translate(0,0)" width="130.421875"><defs><clipPath id="load-clip-new-visitors"><rect class="load-clip" width="130.421875" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-new-visitors)"><path d="M-5.016225961538462,20.833333333333332L-4.180188301282051,17.77777777777778C-3.344150641025641,14.72222222222222,-1.6720753205128205,8.611111111111109,0,5.555555555555553C1.6720753205128205,2.4999999999999973,3.344150641025641,2.4999999999999973,5.016225961538462,3.4722222222222197C6.688301282051282,4.444444444444442,8.360376602564102,6.388888888888887,10.032451923076923,9.861111111111109C11.704527243589745,13.333333333333332,13.376602564102564,18.333333333333332,15.048677884615385,17.638888888888886C16.720753205128204,16.944444444444443,18.392828525641026,10.555555555555554,20.064903846153847,10.416666666666664C21.736979166666664,10.277777777777775,23.409054487179485,16.38888888888889,25.081129807692307,18.61111111111111C26.753205128205128,20.833333333333332,28.42528044871795,19.166666666666664,30.097355769230766,17.22222222222222C31.769431089743588,15.277777777777777,33.44150641025641,13.055555555555554,35.113581730769226,10.416666666666666C36.785657051282044,7.777777777777777,38.45773237179487,4.722222222222221,40.12980769230769,5.694444444444445C41.80188301282051,6.666666666666666,43.47395833333333,11.666666666666666,45.14603365384615,12.5C46.81810897435897,13.333333333333332,48.490184294871796,10,50.16225961538461,8.472222222222221C51.83433493589743,6.944444444444443,53.50641025641025,7.222222222222221,55.178485576923066,8.194444444444443C56.85056089743589,9.166666666666666,58.522636217948715,10.833333333333334,60.19471153846153,12.63888888888889C61.86678685897436,14.444444444444445,63.538862179487175,16.38888888888889,65.21093749999999,14.583333333333334C66.88301282051282,12.777777777777777,68.55508814102564,7.222222222222221,70.22716346153845,5.972222222222221C71.89923878205127,4.722222222222221,73.57131410256409,7.777777777777777,75.24338942307692,9.722222222222221C76.91546474358974,11.666666666666666,78.58754006410257,12.5,80.25961538461539,12.083333333333334C81.9316907051282,11.666666666666666,83.60376602564102,10,85.27584134615385,9.166666666666666C86.94791666666666,8.333333333333332,88.61999198717947,8.333333333333332,90.2920673076923,10.416666666666664C91.96414262820511,12.499999999999998,93.63621794871793,16.666666666666664,95.30829326923076,18.055555555555554C96.98036858974358,19.444444444444443,98.65244391025641,18.055555555555554,100.32451923076923,18.888888888888886C101.99659455128204,19.72222222222222,103.66866987179486,22.77777777777778,105.34074519230768,20.97222222222222C107.0128205128205,19.166666666666664,108.68489583333331,12.5,110.35697115384613,9.722222222222221C112.02904647435895,6.944444444444444,113.70112179487178,8.055555555555555,115.37319711538461,7.499999999999999C117.04527243589743,6.944444444444443,118.71734775641025,4.72222222222222,120.38942307692307,4.861111111111109C122.0614983974359,4.999999999999997,123.73357371794872,7.499999999999997,125.40564903846152,11.111111111111109C127.07772435897435,14.722222222222221,128.74979967948718,19.444444444444443,130.421875,18.055555555555557C132.09395032051282,16.666666666666668,133.76602564102564,9.166666666666666,135.43810096153845,5.694444444444445C137.11017628205127,2.2222222222222223,138.7822516025641,2.7777777777777777,139.6182892628205,3.0555555555555554L140.4543269230769,3.3333333333333335" class="d3-line d3-line-medium" style="stroke: rgb(38, 166, 154); opacity: 1;" transform="translate(-5.016225814819336,0)"></path></g></g></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="http://demo.interface.club/limitless/layout_1/LTR/default/index.html#"
                                           class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-watch2"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">New sessions</div>
                                        <div class="text-muted">08:20 avg</div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="new-sessions">
                                        <svg width="130.421875" height="35"><g transform="translate(0,0)" width="130.421875"><defs><clipPath id="load-clip-new-sessions"><rect class="load-clip" width="130.421875" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-new-sessions)"><path d="M-5.016225961538462,3.3333333333333335L-4.180188301282051,4.861111111111111C-3.344150641025641,6.388888888888889,-1.6720753205128205,9.444444444444445,0,12.222222222222221C1.6720753205128205,15,3.344150641025641,17.5,5.016225961538462,18.88888888888889C6.688301282051282,20.277777777777775,8.360376602564102,20.555555555555554,10.032451923076923,18.88888888888889C11.704527243589745,17.22222222222222,13.376602564102564,13.611111111111109,15.048677884615385,11.111111111111109C16.720753205128204,8.611111111111109,18.392828525641026,7.222222222222221,20.064903846153847,7.777777777777777C21.736979166666664,8.333333333333332,23.409054487179485,10.833333333333334,25.081129807692307,14.166666666666666C26.753205128205128,17.5,28.42528044871795,21.666666666666664,30.097355769230766,21.944444444444443C31.769431089743588,22.22222222222222,33.44150641025641,18.61111111111111,35.113581730769226,15.277777777777777C36.785657051282044,11.944444444444445,38.45773237179487,8.88888888888889,40.12980769230769,10.694444444444443C41.80188301282051,12.5,43.47395833333333,19.166666666666664,45.14603365384615,19.72222222222222C46.81810897435897,20.27777777777778,48.490184294871796,14.722222222222221,50.16225961538461,14.583333333333332C51.83433493589743,14.444444444444443,53.50641025641025,19.72222222222222,55.178485576923066,22.083333333333332C56.85056089743589,24.444444444444443,58.522636217948715,23.888888888888886,60.19471153846153,20C61.86678685897436,16.11111111111111,63.538862179487175,8.888888888888888,65.21093749999999,8.75C66.88301282051282,8.61111111111111,68.55508814102564,15.555555555555555,70.22716346153845,19.583333333333336C71.89923878205127,23.61111111111111,73.57131410256409,24.72222222222222,75.24338942307692,22.22222222222222C76.91546474358974,19.72222222222222,78.58754006410257,13.61111111111111,80.25961538461539,10.97222222222222C81.9316907051282,8.333333333333332,83.60376602564102,9.166666666666664,85.27584134615385,10.833333333333332C86.94791666666666,12.499999999999998,88.61999198717947,14.999999999999998,90.2920673076923,14.444444444444443C91.96414262820511,13.888888888888888,93.63621794871793,10.277777777777777,95.30829326923076,7.916666666666666C96.98036858974358,5.555555555555555,98.65244391025641,4.444444444444445,100.32451923076923,4.722222222222221C101.99659455128204,5,103.66866987179486,6.666666666666666,105.34074519230768,8.749999999999998C107.0128205128205,10.833333333333332,108.68489583333331,13.33333333333333,110.35697115384613,14.583333333333332C112.02904647435895,15.83333333333333,113.70112179487178,15.83333333333333,115.37319711538461,15.277777777777777C117.04527243589743,14.722222222222221,118.71734775641025,13.61111111111111,120.38942307692307,15.138888888888888C122.0614983974359,16.666666666666664,123.73357371794872,20.833333333333332,125.40564903846152,19.027777777777775C127.07772435897435,17.22222222222222,128.74979967948718,9.444444444444443,130.421875,8.194444444444443C132.09395032051282,6.944444444444445,133.76602564102564,12.222222222222221,135.43810096153845,13.194444444444445C137.11017628205127,14.166666666666666,138.7822516025641,10.833333333333332,139.6182892628205,9.166666666666666L140.4543269230769,7.499999999999999" class="d3-line d3-line-medium" style="stroke: rgb(255, 112, 67); opacity: 1;" transform="translate(-5.016225814819336,0)"></path></g></g></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="http://demo.interface.club/limitless/layout_1/LTR/default/index.html#"
                                           class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-people"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">Total online</div>
                                        <div class="text-muted"><span
                                                    class="status-mark border-success position-left"></span> 5,378 avg
                                        </div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="total-online">
                                        <svg width="130.421875" height="35"><g transform="translate(0,0)" width="130.421875"><defs><clipPath id="load-clip-total-online"><rect class="load-clip" width="130.421875" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-total-online)"><path d="M-5.016225961538462,7.499999999999999L-4.180188301282051,8.75C-3.344150641025641,10,-1.6720753205128205,12.5,0,13.88888888888889C1.6720753205128205,15.277777777777777,3.344150641025641,15.555555555555554,5.016225961538462,16.527777777777775C6.688301282051282,17.499999999999996,8.360376602564102,19.166666666666664,10.032451923076923,18.055555555555554C11.704527243589745,16.944444444444443,13.376602564102564,13.055555555555554,15.048677884615385,13.055555555555554C16.720753205128204,13.055555555555554,18.392828525641026,16.944444444444443,20.064903846153847,18.47222222222222C21.736979166666664,20,23.409054487179485,19.166666666666664,25.081129807692307,16.25C26.753205128205128,13.333333333333332,28.42528044871795,8.333333333333332,30.097355769230766,7.638888888888888C31.769431089743588,6.944444444444444,33.44150641025641,10.555555555555554,35.113581730769226,12.916666666666664C36.785657051282044,15.277777777777775,38.45773237179487,16.388888888888886,40.12980769230769,15.833333333333332C41.80188301282051,15.277777777777777,43.47395833333333,13.055555555555554,45.14603365384615,11.388888888888888C46.81810897435897,9.722222222222221,48.490184294871796,8.61111111111111,50.16225961538461,7.499999999999998C51.83433493589743,6.3888888888888875,53.50641025641025,5.277777777777775,55.178485576923066,8.055555555555554C56.85056089743589,10.833333333333332,58.522636217948715,17.5,60.19471153846153,17.36111111111111C61.86678685897436,17.22222222222222,63.538862179487175,10.277777777777779,65.21093749999999,9.305555555555555C66.88301282051282,8.333333333333332,68.55508814102564,13.333333333333332,70.22716346153845,14.166666666666666C71.89923878205127,14.999999999999998,73.57131410256409,11.666666666666664,75.24338942307692,11.38888888888889C76.91546474358974,11.11111111111111,78.58754006410257,13.888888888888888,80.25961538461539,16.52777777777778C81.9316907051282,19.166666666666664,83.60376602564102,21.666666666666664,85.27584134615385,21.38888888888889C86.94791666666666,21.11111111111111,88.61999198717947,18.055555555555557,90.2920673076923,17.63888888888889C91.96414262820511,17.22222222222222,93.63621794871793,19.444444444444446,95.30829326923076,21.111111111111114C96.98036858974358,22.77777777777778,98.65244391025641,23.888888888888886,100.32451923076923,21.527777777777775C101.99659455128204,19.166666666666664,103.66866987179486,13.333333333333332,105.34074519230768,9.444444444444443C107.0128205128205,5.5555555555555545,108.68489583333331,3.6111111111111107,110.35697115384613,4.305555555555555C112.02904647435895,5,113.70112179487178,8.333333333333334,115.37319711538461,10.416666666666668C117.04527243589743,12.5,118.71734775641025,13.333333333333332,120.38942307692307,14.583333333333332C122.0614983974359,15.833333333333332,123.73357371794872,17.5,125.40564903846152,16.52777777777778C127.07772435897435,15.555555555555555,128.74979967948718,11.944444444444443,130.421875,12.083333333333332C132.09395032051282,12.222222222222221,133.76602564102564,16.11111111111111,135.43810096153845,15C137.11017628205127,13.888888888888888,138.7822516025641,7.777777777777777,139.6182892628205,4.722222222222222L140.4543269230769,1.666666666666667" class="d3-line d3-line-medium" style="stroke: rgb(92, 107, 192); opacity: 1;" transform="translate(-5.016225814819336,0)"></path></g></g></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative" id="traffic-sources">
                        <div class="d3-tip e" style="display: none; top: -38.5px; left: 263px;">
                            <ul class="list-unstyled mb-5">
                                <li>
                                    <div class="text-size-base mt-5 mb-5"><i
                                                class="icon-circle-left2 position-left"></i>Amazon ads
                                    </div>
                                </li>
                                <li>Visits: &nbsp;<span class="text-semibold pull-right">170</span></li>
                                <li>Time: &nbsp; <span class="text-semibold pull-right">08:00</span></li>
                            </ul>
                            <div class="d3-tip-arrow"></div>
                        </div>

                        <div class="d3-tip e" style="display: none;"></div>
                    </div>
                </div>
                <!-- /traffic sources -->

            </div>

            <div class="col-lg-5">

                <!-- Sales stats -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Sales statistics<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <form class="heading-form"
                                  action="http://demo.interface.club/limitless/layout_1/LTR/default/index.html#">
                                <div class="form-group">
                                    <select class="change-date select-sm" id="select_date" style="display: none;">
                                        <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                            <option value="val1">June, 29 - July, 5</option>
                                            <option value="val2">June, 22 - June 28</option>
                                            <option value="val3" selected="selected">June, 15 - June, 21</option>
                                            <option value="val4">June, 8 - June, 14</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                                class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                    <span class="text-muted text-size-small">orders weekly</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                                class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                    <span class="text-muted text-size-small">orders monthly</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                                class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                    <span class="text-muted text-size-small">average revenue</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-group-sm" id="app_sales"></div>
                    <div id="monthly-sales-stats"></div>
                </div>
                <!-- /sales stats -->

            </div>
        </div>
        <!-- /main charts -->


        <!-- Dashboard content -->
        <div class="row">
            <div class="col-lg-8">

            </div>

            <div class="col-lg-4">
            </div>
        </div>
        <!-- /dashboard content -->

    </div>
    <div class="daterangepicker dropdown-menu ltr opensleft">
        <div class="calendars">
            <div class="calendar left">
                <div class="calendar-table"></div>
                <div class="daterangepicker_input">
                    <div class="calendar-time" style="display: none;">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="calendar right">
                <div class="calendar-table"></div>
                <div class="daterangepicker_input">
                    <div class="calendar-time" style="display: none;">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
            <div class="daterangepicker-inputs">
                <div class="daterangepicker_input"><span class="start-date-label">Start date:</span><input
                            class="form-control" type="text" name="daterangepicker_start" value=""><i
                            class="icon-calendar3"></i></div>
                <div class="daterangepicker_input"><span class="end-date-label">End date:</span><input
                            class="form-control" type="text" name="daterangepicker_end" value=""><i
                            class="icon-calendar3"></i></div>
            </div>
            <div class="range_inputs">
                <button class="applyBtn btn btn-sm btn-small bg-slate-600 btn-block" disabled="disabled" type="button">
                    Apply
                </button>
                <button class="cancelBtn btn btn-sm btn-small btn-default btn-block" type="button">Cancel</button>
            </div>
        </div>
    </div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
    <div class="d3-tip"
         style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div>
@endsection

@section('page-specific-scripts')
    <script>

    </script>
@endsection