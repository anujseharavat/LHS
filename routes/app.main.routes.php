<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 01:29 AM
 */

Route::get('/', [ 'as' => '/', 'uses' => 'MainDataController@index' ]);
Route::post('logout', [ 'as' => 'logout', 'uses' => 'MainDataController@logout']);

Route::get('knowledge-center', [ 'as' => 'knowledge-center', 'uses' => 'MainDataController@knowledgeCenter' ]);
Route::get('help', [ 'as' => 'help', 'uses' => 'MainDataController@help' ]);

Route::get('reporting-executive', [ 'as' => 'reporting-executive', 'uses' => 'MainDataController@executiveReporting' ]);
Route::get('reporting-technical', [ 'as' => 'reporting-technical', 'uses' => 'MainDataController@technicalReporting' ]);
Route::get('order-history', [ 'as' => 'order-history', 'uses' => 'MainDataController@orderHistory' ]);

Route::get('drag-drop', [ 'as' => 'drag-drop', 'uses' => 'MainDataController@dragDrop' ]);
Route::get('debug', [ 'as' => 'debug', 'uses' => 'MainDataController@debugInfo' ]);
Route::post('save-drag-drop-list', [ 'as' => 'save_drag_drop_list', 'uses' => 'MainDataController@saveDragDrop' ]);
Route::post('get-ajax-html', [ 'as' => 'get_ajax_html', 'uses' => 'MainDataController@getAjaxHtml' ]);


