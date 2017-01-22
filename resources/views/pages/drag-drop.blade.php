@extends('pages.common')
@section('content')
    <form name="post">
        <div id="attribute_attachment_section" class="postbox">
            <h2 align="center">
                <span>Drag & Drop Demo</span>
            </h2>
            <div class="inside">
                <table id="tblAttachAttributes" class="postbox" border="1">
                    <colgroup>
                        @foreach($list_details as $list_detail_item)
                            <col width="150" >
                        @endforeach
                    </colgroup>
                    <thead>
                    <tr>
                        @foreach($list_details as $list_detail_item)
                            <th style="text-align: center; padding: 2px;">
                                {{$list_detail_item['list_name']}}
                            </th>
                       @endforeach
                    </tr>
                    </thead>
                    <tbody>

                    <tr style="text-align: center;">
                        @foreach($list_details as $list_detail_item)
                            <td>
                                <ul class="sortable draggable-item" id="li_{{$list_detail_item['list_id']}}" list-id="{{$list_detail_item['list_id']}}">
                                @foreach($list_detail_item['sub_items'] as $sub_items)
                                    <li style="border: solid black 1px;" sub-item-id="{{$sub_items['sub_item_id']}}">
                                        {{$sub_items['item_name']}}
                                    </li>
                                @endforeach
                                </ul>
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                <div style="padding: 10px 0px;">
                    <label for="saved_status">Save Status:</label>
                    <span id="saved_status" style="color: darkolivegreen">Unchanged</span>
                    <button type="button" onclick="saveLists();">Save</button>


                    <button type="button" onclick="testAjaxHTML();">testAjaxHTML</button>
                </div>
            </div>
        </div>
    </form>


    <div id="test_div">

    </div>

    <style>
        .draggable-item{
            list-style: none;
            min-height: 100px;
            padding: 5px 25px;
        }
        .draggable-item>li{
            margin: 2px 0px;
        }
    </style>

@endsection

@section('page-specific-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('table#tblAttachAttributes').find('ul.sortable').sortable({
                connectWith: 'ul.sortable'
            });

            $('.sortable').droppable({
                drop: function( event, ui ) {
                    $('#saved_status').html('Changed');
                    $('#saved_status').css('color', 'red');
                    setTimeout(function () {
                        saveLists();
                    }, 100);
                }
            });

            contextMenuBind();
        });


        function saveLists() {

            var lists = $('ul.sortable.draggable-item');
            var current_layout = [];

            $.each(lists, function(index, list_elt) {

                var list_id = $(list_elt).attr('list-id');
                var sub_items = $(list_elt).find('li');

                $.each(sub_items, function (sub_index, sut_item_elt) {

                    var sut_item_id = $(sut_item_elt).attr('sub-item-id');
                    current_layout.push({ list_id: list_id, sub_item_id: sut_item_id })
                });

            });

            var input = {
                url: '{{route('save_drag_drop_list')}}',
                data: { list_layout: JSON.stringify(current_layout) },
                success: function (response) {

                    $('#saved_status').html('Saved');
                    $('#saved_status').css('color', 'green');

                },
                type: 'POST'
            };
            $.ajax(input);

        }

        function testAjaxHTML()
        {
            var input = {
                url: '{{route('get_ajax_html')}}',
                data: {  },
                success: function (response) {

                    $('#test_div').html(response);

                },
                type: 'POST'
            };
            $.ajax(input);
        }


    </script>
@endsection