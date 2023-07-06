<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Noticia;
use PhpParser\Node\NullableType;
class EventController extends Controller
{

    public function index() {
        $noticias = Noticia::all();
        return view('welcome',['noticias'=> $noticias]);
    }
    public function create() {
        return view('news.create');
    }
    public function store(Request $request) {
        $noticia = new Noticia;
        $noticia->titulo = $request->title;
        $noticia->resumo = $request->resumo;
        $noticia->texto = $request->texto;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $file = $request->imagem;

            $extension = $request->imagem->extension();

            $imageName = md5($file->getClientOriginalName()).strtotime("now").".".$extension;
            
            $request->imagem->move(public_path('storage'), $imageName);

            $noticia->imagem = $imageName;
        }
        //$file = $request->file('imagem');
        //$a =  Storage::put( 'public', $file);
        //$url = Storage::url('app/'.$a);
        //$noticia->imagem = $url;
        //$noticia->save();
        $noticia->save();
        return redirect('/')->with('msg','Notícia criada com sucesso!');
    }

    public function show($id){
        $noticia = Noticia::findOrFail($id);
        return view('news.show',['id' => $id], ['noticia' => $noticia]);
    }
}