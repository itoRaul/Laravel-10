<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateForum;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller{

    public function index(Forum $forum){

        $forums = $forum->all();

        return view('admin/forum/index', compact('forums'));// compact serve para criar um array associativo para a view e dessa forma podemos acessar as variáveis na view de forma mais simples
    }

    public function show(string | int $id){

        //Forum::where('id', $id)->first(); // também poderia pegar o id dessa forma
        if(!$forum = Forum::find($id)){
            return back();
        }

        return view('admin/forum/show', compact('forum'));

    }

    public function create(){

        return view('admin/forum/create');
    }

    public function store(StoreUpdateForum $request, Forum $forum){

        $data = $request->validated();
        $data['status'] = 'a';

        $forum->create($data);

        return redirect()->route('forum.index');
    }

    public function edit(Forum $forum, string | int $id){

        if(!$forum = Forum::find($id)){
            return back();
        }

        return view('admin/forum/edit', compact('forum'));
    }

    public function update(StoreUpdateForum $request, Forum $forum, string | int $id){

        if(!$forum = Forum::find($id)){
            return back();
        }

        $forum->update($request->validated());

        return redirect()->route('forum.index');
    }

    public function destroy(string | int $id){

        if (!$forum = Forum::find($id)){
            return back();
        }

        $forum->delete();
        return redirect()->route('forum.index');
        
    }

}