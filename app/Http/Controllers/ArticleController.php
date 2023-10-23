<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use App\Models\Article; //add Article Model
 
class ArticleController extends Controller
{
    public function index(){
        $article = DB::table('articles')
                    ->join('genders', 'genders.id', '=', 'articles.gender_id')
                    ->join('langues', 'langues.id', '=', 'articles.langue_id')
                    ->get();
  
        $gender = DB::table('genders')
                    ->get();
  
        $langue = DB::table('langues')
                    ->get();
  
                    return view('article', ['articles' => $article , 'genders' => $gender , 'langues' => $langue]);
    }
     
    public function save(Request $request){
        $article = new Article;
        $article->titre = $request->input('titre');
        $article->contenuu = $request->input('contenuu');
        $article->gender_id = $request->input('gender');
        $article->langue_id = $request->input('langue');
  
        $article->save();
  
        return redirect('/article');
    }
}