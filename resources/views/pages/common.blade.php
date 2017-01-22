<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LHS</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <link href="/css/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/screen.css" type="text/css"/>
    <link rel="stylesheet" href="css/theme.css" type="text/css"/>
    <link rel="stylesheet" href="css/theme-fixes.css" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" type="text/css"/>
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/loaders/blockui.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.contextMenu.js" type="text/javascript"></script>
    <script src="js/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/bootbox.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>


    <script src="js/main.js" type="text/javascript"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="js/core/app.js"></script>
    <script type="text/javascript" src="js/pages/dashboard.js"></script>
    <!-- /theme JS files -->


</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src="images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

        <ul class="nav navbar-nav">
            <li>
                <a class="sidebar-control sidebar-main-toggle hidden-xs">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                <div class="media-annotation">2 hours ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Have Carousel ignore keyboard events
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
            <li class="active"><a href="/"><i class="icon-display4 position-left"></i> Dashboard</a></li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Menu 2 <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Sub Menu 1</span>
                                <div class="dd-wrapper" id="dd-wrapper-0"><div id="dd-header-0" class="dd-header"><h6>Back to parent</h6></div><ul class="menu-list has-children dd-menu" style="overflow: hidden; outline: none;" tabindex="0">
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-pencil3"></i> Item 1<span class="dd-icon"></span></a>
                                            <ul rel="11" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="form_inputs_basic.html">Sub Menu Item 1</a></li>
                                                <li><a href="form_checkboxes_radios.html">Sub Menu Item 2</a></li>
                                                <li><a href="form_input_groups.html">Sub Menu Item 3</a></li>
                                                <li><a href="form_controls_extended.html">Sub Menu Item 4</a></li>
                                                <li><a href="form_floating_labels.html">Sub Menu Item 5</a></li>
                                                <li class="dd-parent">
                                                    <a href="#" class="dd-parent-a">Sub Menu 2<span class="dd-icon"></span></a>
                                                    <ul rel="4" style="margin-right: 0px; margin-top: 0px;">
                                                        <li><a href="form_select2.html">Sub Menu Item 1</a></li>
                                                        <li><a href="form_multiselect.html">Sub Menu Item 2</a></li>
                                                        <li><a href="form_select_box_it.html">Sub Menu Item 3</a></li>
                                                        <li class="last"><a href="form_bootstrap_select.html">Sub Menu Item 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="form_tag_inputs.html">Sub Menu 3</a></li>
                                                <li><a href="form_dual_listboxes.html">Sub Menu Item 1</a></li>
                                                <li><a href="form_editable.html">Sub Menu Item 2</a></li>
                                                <li><a href="form_validation.html">Sub Menu Item 3</a></li>
                                                <li class="last"><a href="form_inputs_grid.html">Inputs grid</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-file-css"></i> Item 2<span class="dd-icon"></span></a>
                                            <ul rel="3" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                                <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                                <li class="last"><a href="alpaca_controls.html">Controls</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-footprint"></i> Item 3<span class="dd-icon"></span></a>
                                            <ul rel="3" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="wizard_steps.html">Steps wizard</a></li>
                                                <li><a href="wizard_form.html">Form wizard</a></li>
                                                <li class="last"><a href="wizard_stepy.html">Stepy wizard</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-spell-check"></i> Item 4<span class="dd-icon"></span></a>
                                            <ul rel="4" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="editor_summernote.html">Summernote editor</a></li>
                                                <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                                <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                                <li class="last"><a href="editor_code.html">Code editor</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-select2"></i> Item 5<span class="dd-icon"></span></a>
                                            <ul rel="3" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                                                <li><a href="picker_color.html">Color pickers</a></li>
                                                <li class="last"><a href="picker_location.html">Location pickers</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent last">
                                            <a href="#" class="dd-parent-a"><i class="icon-insert-template"></i> Item 6<span class="dd-icon"></span></a>
                                            <ul rel="2" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="form_layout_vertical.html">Vertical form</a></li>
                                                <li class="last"><a href="form_layout_horizontal.html">Horizontal form</a></li>
                                            </ul>
                                        </li>
                                    </ul></div>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Sub Menu 2</span>
                                <div class="dd-wrapper" id="dd-wrapper-1"><div id="dd-header-1" class="dd-header"><h6>Back to parent</h6></div><ul class="menu-list has-children dd-menu" style="overflow: hidden; outline: none;" tabindex="1">
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-grid"></i> Item 1<span class="dd-icon"></span></a>
                                            <ul rel="18" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="components_modals.html">Modals</a></li>
                                                <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                                <li><a href="components_tabs.html">Tabs component</a></li>
                                                <li><a href="components_pills.html">Pills component</a></li>
                                                <li><a href="components_navs.html">Accordion and navs</a></li>
                                                <li><a href="components_buttons.html">Buttons</a></li>
                                                <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                                <li><a href="components_notifications_others.html">Other notifications</a></li>
                                                <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                                <li><a href="components_alerts.html">Alerts</a></li>
                                                <li><a href="components_pagination.html">Pagination</a></li>
                                                <li><a href="components_labels.html">Labels and badges</a></li>
                                                <li><a href="components_loaders.html">Loaders and bars</a></li>
                                                <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                                <li><a href="components_page_header.html">Page header</a></li>
                                                <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                                <li><a href="components_media.html">Media objects</a></li>
                                                <li class="last"><a href="components_affix.html">Affix and Scrollspy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-browser"></i> Item 2<span class="dd-icon"></span></a>
                                            <ul rel="4" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="panels.html">Panels</a></li>
                                                <li><a href="panels_heading.html">Heading elements</a></li>
                                                <li><a href="panels_footer.html">Footer elements</a></li>
                                                <li class="last"><a href="panels_draggable.html">Draggable panels</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-droplets"></i> Item 3<span class="dd-icon"></span></a>
                                            <ul rel="5" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="appearance_text_styling.html">Text styling</a></li>
                                                <li><a href="appearance_typography.html">Typography</a></li>
                                                <li><a href="appearance_helpers.html">Helper classes</a></li>
                                                <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                                                <li class="last"><a href="appearance_content_grid.html">Grid system</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-gift"></i> Item 4<span class="dd-icon"></span></a>
                                            <ul rel="5" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                                                <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                                                <li><a href="extra_trees.html">Dynamic tree views</a></li>
                                                <li><a href="extra_context_menu.html">Context menu</a></li>
                                                <li class="last"><a href="extra_fab.html">Floating action buttons</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent last">
                                            <a href="#" class="dd-parent-a"><i class="icon-wrench3"></i> Item 5<span class="dd-icon"></span></a>
                                            <ul rel="2" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="tools_session_timeout.html">Session timeout</a></li>
                                                <li class="last"><a href="tools_idle_timeout.html">Idle timeout</a></li>
                                            </ul>
                                        </li>
                                    </ul></div>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Sub Menu 3</span>
                                <div class="dd-wrapper" id="dd-wrapper-2"><div id="dd-header-2" class="dd-header"><h6>Back to parent</h6></div><ul class="menu-list has-children dd-menu" style="overflow: hidden; outline: none;" tabindex="2">
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-puzzle4"></i> Item 1<span class="dd-icon"></span></a>
                                            <ul rel="3" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="extension_image_cropper.html">Image cropper</a></li>
                                                <li><a href="extension_blockui.html">Block UI</a></li>
                                                <li class="last"><a href="extension_dnd.html">Drag and drop</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-popout"></i> Item 2<span class="dd-icon"></span></a>
                                            <ul rel="5" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="jqueryui_interactions.html">Interactions</a></li>
                                                <li><a href="jqueryui_forms.html">Forms</a></li>
                                                <li><a href="jqueryui_components.html">Components</a></li>
                                                <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                                <li class="last"><a href="jqueryui_navigation.html">Navigation</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-upload"></i> Item 3<span class="dd-icon"></span></a>
                                            <ul rel="3" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="uploader_plupload.html">Plupload</a></li>
                                                <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                                                <li class="last"><a href="uploader_dropzone.html">Dropzone</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-calendar3"></i> Item 4<span class="dd-icon"></span></a>
                                            <ul rel="4" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="fullcalendar_views.html">Basic views</a></li>
                                                <li><a href="fullcalendar_styling.html">Event styling</a></li>
                                                <li><a href="fullcalendar_formats.html">Language and time</a></li>
                                                <li class="last"><a href="fullcalendar_advanced.html">Advanced usage</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent last">
                                            <a href="#" class="dd-parent-a"><i class="icon-sphere"></i> Item 5<span class="dd-icon"></span></a>
                                            <ul rel="6" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                                                <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                                                <li><a href="internationalization_on_init.html">Set language on init</a></li>
                                                <li><a href="internationalization_after_init.html">Set language after init</a></li>
                                                <li><a href="internationalization_fallback.html">Language fallback</a></li>
                                                <li class="last"><a href="internationalization_callbacks.html">Callbacks</a></li>
                                            </ul>
                                        </li>
                                    </ul></div>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Sub Menu 4</span>
                                <div class="dd-wrapper" id="dd-wrapper-3"><div id="dd-header-3" class="dd-header"><h6>Item 1</h6></div><ul class="menu-list has-children dd-menu" style="overflow: hidden; outline: none;" tabindex="3">
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-table2"></i> Item 1<span class="dd-icon"></span></a>
                                            <ul rel="5" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="table_basic.html">Basic examples</a></li>
                                                <li><a href="table_sizing.html">Table sizing</a></li>
                                                <li><a href="table_borders.html">Table borders</a></li>
                                                <li><a href="table_styling.html">Table styling</a></li>
                                                <li class="last"><a href="table_elements.html">Table elements</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-grid7"></i> Item 2<span class="dd-icon"></span></a>
                                            <ul rel="6" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="datatable_basic.html">Basic initialization</a></li>
                                                <li><a href="datatable_styling.html">Basic styling</a></li>
                                                <li><a href="datatable_advanced.html">Advanced examples</a></li>
                                                <li><a href="datatable_sorting.html">Sorting options</a></li>
                                                <li><a href="datatable_api.html">Using API</a></li>
                                                <li class="last"><a href="datatable_data_sources.html">Data sources</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-alignment-unalign"></i> Item 3<span class="dd-icon"></span></a>
                                            <ul rel="10" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                                                <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                                                <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                                                <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                                                <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                                                <li><a href="datatable_extension_key_table.html">Key table</a></li>
                                                <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                                                <li><a href="datatable_extension_select.html">Select</a></li>
                                                <li class="dd-parent">
                                                    <a href="#" class="dd-parent-a">Item 4<span class="dd-icon"></span></a>
                                                    <ul rel="4" style="margin-right: 0px; margin-top: 0px;">
                                                        <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                                        <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                                        <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                                        <li class="last"><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                                    </ul>
                                                </li>

                                                <li class="last"><a href="datatable_extension_colvis.html">Item 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent">
                                            <a href="#" class="dd-parent-a"><i class="icon-file-spreadsheet"></i> Item 5<span class="dd-icon"></span></a>
                                            <ul rel="9" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="handsontable_basic.html">Basic configuration</a></li>
                                                <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                                                <li><a href="handsontable_cols.html">Column features</a></li>
                                                <li><a href="handsontable_cells.html">Cell features</a></li>
                                                <li><a href="handsontable_types.html">Basic cell types</a></li>
                                                <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                                                <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                                                <li><a href="handsontable_search.html">Search</a></li>
                                                <li class="last"><a href="handsontable_context.html">Context menu</a></li>
                                            </ul>
                                        </li>
                                        <li class="dd-parent last">
                                            <a href="#" class="dd-parent-a"><i class="icon-versions"></i> Item 6<span class="dd-icon"></span></a>
                                            <ul rel="2" style="margin-right: 0px; margin-top: 0px;">
                                                <li><a href="table_responsive.html">Responsive basic tables</a></li>
                                                <li class="last"><a href="datatable_responsive.html">Responsive data tables</a></li>
                                            </ul>
                                        </li>
                                    </ul></div>
                            </div>
                        </div>
                    </div>
                    <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="padding-right: 0.5px; width: 3px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -3.5px; height: 0px; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 3px; z-index: 1000; top: -3px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="padding-right: 0.5px; width: 3px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -3.5px; height: 0px; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 3px; z-index: 1000; top: -3px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="padding-right: 0.5px; width: 3px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -3.5px; height: 0px; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 3px; z-index: 1000; top: -3px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2003" class="nicescroll-rails nicescroll-rails-vr" style="padding-right: 0.5px; width: 3px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -3.5px; height: 0px; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 3px; z-index: 1000; top: -3px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px;"></div></div></div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
            </li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/placeholder.jpg" alt="">
                    <span>{{$user_name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#" onclick="logout();"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Victoria Baker</span>
                                <div class="text-size-mini text-muted">
                                    &nbsp;Company name
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <!-- Main -->

                            @foreach($nav_list as $nav_list_item)
                                <li>
                                    <a @if(!isset($nav_list_item['sub_menu'])) href="{{$nav_list_item['page_url']}}" @else href="#" @endif>
                                        <i class="{{$nav_icons[$nav_list_item['main_name']]}}"></i> <span>{{$nav_list_item['main_name']}}</span>
                                    </a>
                                    @if(isset($nav_list_item['sub_menu']))
                                        <ul>
                                            @foreach($nav_list_item['sub_menu'] as $sub_list_item)
                                                <li><a href="{{$sub_list_item['page_url']}}">{{$sub_list_item['sub_name']}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                        @endforeach

                        <li>
                            <a href="drag-drop" class="drag-drop">
                                <i class="icon-copy "></i> <span>Drag Drop</span>
                            </a>
                        </li>
                        @if($privilege_level == 1)
                        <li>
                            <a href="debug">
                                <i class="icon-copy "></i> <span>Debug</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="debug">
                                <i class="icon-copy "></i> <span>{{ date('y-m-d H:m:s e') }}</span>
                            </a>
                        </li>

                        {{--<li><a href="#help"><i class="icon-list-unordered"></i> <span>Need Help</span></a></li>--}}
                        <!-- /main -->
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                @yield('page-header')
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                @yield('content')
            </div>

            <!-- /Timeline -->
            <!-- Combination and connection -->



            <!-- /dashboard content -->

            <!-- Footer -->
            <div class="footer text-muted">
                © 2016. <a href="https://jnb.com" target="_blank" >LHS™</a><a href="https://lhs.com/" target="_blank">by JNB</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<script type="text/javascript">
    function logout()
    {
        var input = {
            url: '{{route('logout')}}',
            data: {
                '_token': '{{ csrf_token() }}'
            },

            success: function (best_response) {

                window.location = '{{route('login')}}';

            },
            type: 'POST'

        };

        var temp = $.ajax(input);
    }

    $.ajaxSetup({
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        data: {
            '_token': '{{ csrf_token() }}'
        }
    });

    $(document).ready(function () {
        contextMenuBind();
    });

    function contextMenuBind()
    {
        $(function() {
            $.contextMenu({
                selector: '.drag-drop',
                callback: function(key, options) {

                    var m = "clicked: " + key;
                    bootbox.alert(m);

                },
                items: {
                    "Drag": {name: "Drag", icon: "drag"},
                    "Drop": {name: "Drop", icon: "drop"},
                    "Save": {name: "Save", icon: function(){
                        return 'save save-icon';
                    }}
                }
            });

        });
    }



</script>
@yield('page-specific-scripts')

</body>
</html>
