<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\model\email;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('backstage.email.index');
        $email = email::all(); //STEP1 news:: 的news是對應 model 的table name,這段的意思是把model news table中的內容放入$news這個變數
        return view('backstage.email.index',compact('email')); //compact 是傳送變數給view,'news'是傳過去的變數名稱,news.index 是view的檔案名稱
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $email = new email;
        $email->name = $input['name'];
        $email->email = $input['email'];
        $email->save();
        return redirect('/email');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email = email::find($id); //用傳來的值去資料庫搜尋
        return view('email.edit',compact('email'));//導向edit頁面，並且將變數news傳過去
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all(); //接收from傳來的資料

        $email = email::find($id);
        $email->name = $input['name']; //將$input裡面的資料中的title指定到table中的title欄位
        $email->email = $input['email'];
        $email->save();
        return redirect('/email');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = email::find($id);
        $email->delete();
        return redirect('/email');
    }
}
