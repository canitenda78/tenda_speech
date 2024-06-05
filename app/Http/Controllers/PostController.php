<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //Postモデルを使うためのuse宣言

class PostController extends Controller
{
    //読書記録投稿画面を表示する
    public function create(){
        return view('post.create');
    }

    //保存ボタンを押した際に実行する関数
    public function  store(Request $request) {

        //テスト用コード
        // dd($request);

        //本の写真をstorage/publicに保存する
        // $image_book = $request->image_book->store('public');

        // \DB::table('book_image_path')->create(['image_book_path' => $image_book_path]);
        

        //Postインスタンスを生成して、create()を実行。postsテーブルにデータを挿入する
        $post = POST::create([
            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price
            // 'image_book_path' => $request->image_book,
        ]);

        //ディレクトリ名
        $dir = 'sample';

        //sampleディレクトリに画像を保存する
        // $request->file('image_book')->store('public/' . $dir);

        //アップロードされたファイル名を取得する
        $file_name = $request->file('image_book')->getClientOriginalName();

        //取得したファイル名でstorage/app/public/sampleに保存する
        $request->file('image_book')->storeAs('public/' . $dir, $file_name);

        //ファイル情報をＤＢに保存する
        // $post = new Post();
        $post->image_book_path = 'storage/' . $dir . '/' . $file_name;
        $post->save();
        
        //保存ボタンを押した際に保存しましたと表示する
        $request->session()->flash('message', '保存しました');

        return back();
    }

    //postsテーブルの中身を全て取得して表示する
    public function index() {

        //Postインスタンスを作成してall()ですべて取得する
        $posts = Post::all();

        //views/postディレクトリのindex.blade.phpにpostsを受け渡す
        return view('post.index', compact('posts'));

    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('post.index');
    }



}
