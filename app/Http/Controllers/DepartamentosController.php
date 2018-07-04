<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class DepartamentosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function index()
 {
     $client = new Client([
             'base_uri' => 'https://api.salud.gob.sv/',
             'timeout'  => 30.0
         ]);
     $response = $client->request('GET', 'departamentos',
             [
                 'headers' => [
                     'Accept'     => 'application/json'
                 ]
             ]
         );
     $departamentos = json_decode($response->getBody()->getContents());
     return view('departamentos.index', compact('departamentos'));
 }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
