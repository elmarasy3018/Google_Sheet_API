<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;


class SheetController extends Controller
{
    public function get()
    {
        $sheetdb = new SheetDB('Gett The Sheet Code From "https://sheetdb.io/app/apis"');
        $response = $sheetdb->get();
        return view('sheet', ['data' => $response]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $sheetdb = new SheetDB('Gett The Sheet Code From "https://sheetdb.io/app/apis"');

        $id = $request->id;
        $date = $request->date;
        $status = $request->status;
        $sheetdb->create(['id' => $id, 'date' => $date, 'status' => $status]);

        $response = $sheetdb->get();
        return view('sheet', ['data' => $response]);
    }

    public function delete(Request $request)
    {
        $sheetdb = new SheetDB('Gett The Sheet Code From "https://sheetdb.io/app/apis"');
        
        $id = $request->id;
        $sheetdb->delete('id', $id);

        $response = $sheetdb->get();
        return view('sheet', ['data' => $response]);
    }
}
