<?php

namespace Arifikhsan\LaravelSecretroom\app\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function collect;

class SecretroomController extends Controller
{
//  public function __construct()
//  {
//    View::share('tables', $tables);
//  }

  public function overview()
  {
    $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
    dd($tables);
    $user = Auth::user();
    return view('secretroom::overview', compact('user', 'tables'));
  }

  public function index()
  {
    //
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

  private function getColumnNames(string $table): array
  {
    $columns = $this->getColumns($table);
    return array_column($columns, 'name');
  }

  private function getColumns(string $table): array
  {
    $tables = DB::getDoctrineSchemaManager()->listTables();
    $keys = [];

    foreach ($tables as $t) {
      if ($t->getName() == $table) {
        $keys = collect($t->getColumns())->keys();
      }
    }

    $columns = []; // id, name, type
    foreach ($keys as $index => $key) {
      $type = DB::connection()->getDoctrineColumn($table, $key)->getType()->getName();
      $item['id'] = $index + 1;
      $item['name'] = $key;
      $item['type'] = $type;

      array_push($columns, (object)$item);
    }

    return $columns;
  }
}
