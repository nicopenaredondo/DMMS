<?php

class ClientsController extends BaseController
{
	protected $client;
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
	 * Display a listing of the resource.
	 * GET /clients
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$data['clients_loop'] = $this->client->paginate(6);
		return View::make('app.clients.index')->with('data',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clients/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('app.clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clients
	 *
	 * @return Response
	 */
	public function postStore()
	{
		$validate = Validator::make(Input::all(),Client::$rules);
		if($validate->passes()){
			if($this->client->create(Input::all())){
				Session::flash('success','You have successfully added a new client');
				return Redirect::route('app.clients.index');
			}else{
				Session::flash('error','Failed to add a new client');
				return Redirect::route('app.clients.index');
			}
		}else{
			return Redirect::route('app.clients.create')
									  ->withErrors($validate)
									  ->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /clients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($clientId)
	{
		return View::make('app.clients.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /clients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($clientId)
	{
		return View::make('app.clients.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate($clientId)
	{
		var_dump(Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($clientId)
	{
		//
		var_dump($clientId);
	}

}