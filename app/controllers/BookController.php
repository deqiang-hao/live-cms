<?php

class BookController extends \BaseController {

	// public function __construct(BookRepositoryInterface $books) {
	// 	$this->books = $books;
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array();
		$data['book'] = $book = Book::find(1);

		$s = $book->getPresenter();
		var_dump($s);
		$s2 = $book->getPresenter();
		var_dump($s2);

		// $book = new Book;
		// $book->title = '你說地方';
		// $book->info = 'sdf';
		// $book->save();

		//$user = DB::table('books')->first();
// $se = DB::connection()->getQueryLog();
// print_r($se);
		//var_dump($user);

		// // 分頁
		// $books->query();

		// // // Tree
		// $tree = $book->getBaseTree();
		// $book->getFirstLevelTree();
		// $tree->getChild();
		// $tree->getFamily();
		// $tree->getFirstImage();

		// // Image::hasIn($book); // {{  }}
		// // Image::allIn($book);
		// $book->hasImage();
		// $book->getFirstImage();
		// $book->getFirstImage()->path();
		// $book->getAllImages();

		// $book->hasFile();
		// $book->getAllFiles();

		// $book->hasTree();
		// $book->getAllTree();

		// $this->images->hasIn($book);

		return View::make('book.index', $data);
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