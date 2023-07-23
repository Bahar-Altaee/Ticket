<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sassyslogController extends Controller
{
    public function index(Request $request)
{
    if (Auth()->user()->role == 5 || Auth()->user()->role == 6 || Auth()->user()->role == 7 ) {
        return view('errors.401');
    }
    $api = new SASController('admin.halasat-ftth.iq', 'admin', 'Rs2020092323@@');
    $api->login();
    $search = $request->input('search');
    $page = $request->input('page', 1);
    $defPerPage = 10;
    $perPageOpt = [10, 25, 50, 100];
    $perPage = $request->input('keytable_length', $defPerPage);

    $payload = [
        'sortBy' => "created_at",
        'direction' => "desc",
        'count' => $perPage,
        'page' => $page,
        'search' => $search,
    ];

    $res = $api->post('index/syslog', $payload);
    $response = json_decode($res, true);
    $totalRecords = $response['total'];
    $data = $response['data'];
    

    $currentPage = $page;

    $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
        $data,
        $totalRecords,
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view('log.syslog', compact('paginator', 'request', 'perPageOpt',));
}

    
}