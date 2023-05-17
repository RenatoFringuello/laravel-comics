<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    /**
     * validate the form data before save them into the db
     *
     * @param Request $request
     * @return void
     */
    private function validateData(Request $request){
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required',
                'thumb' => 'required|url|',
                //prima metto numeric per validare che non sia una stringa poi con decimal verifico il numero di cifre decimali
                'price' => 'required|numeric|decimal:0,2',
                'series' => 'required|max:255',
                //|after_or_equal:today crea problemi con la edit
                'sale_date' => 'required|date',
                'type' => 'required|max:255',
            ],
            [
                'title.required' => 'Il titolo è un campo obbligatorio',
                'title.max' => 'Hai inserito troppi caratteri in title',
                'description.required' => 'La descrizione è un campo obbligatorio',
                'thumb.required' => 'Il path dell\'immagine è un campo obbligatorio',
                'thumb.url' => 'Il path dell\'immagine è deve essere un indirizzo valido',
                'price.required' => 'Il prezzo è un campo obbligatorio',
                'price.decimal' => 'Hai inserito troppe cifre decimali',
                'price.numeric' => 'Il prezzo è un numero non qualsiasi cosa tu abbia scritto (usa il punto per i decimali)',
                'series.required' => 'Il titolo della saga è un campo obbligatorio',
                'series.max' => 'Hai inserito troppi caratteri in series',
                'sale_date.required' => 'La data di uscita è un campo obbligatorio',
                'sale_date.date' => 'La data di uscita che hai scritto non esiste in nessun calendario neanche in quello dei maya',
                // 'sale_date.after_or_equal' => 'La data di uscita non può essere stata nel passato dal momento che sta uscendo oggi o uscirà in futuro',
                'type.required' => 'Il tipo è un campo obbligatorio',
                'type.max' => 'Hai inserito troppi caratteri in type',
            ]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $maxBookRequested = (isset($request->loadBook))? $request->loadBook : 12;
        $comics = Comic::limit($maxBookRequested)->get();
        $nComic = count(Comic::all());
        $isAllLoaded = ($maxBookRequested == $nComic);
        // dd($comics);
        return view('comics.index', compact('comics', 'isAllLoaded'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $this->validateData($request);
        
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find or fail mi restituisce un exception se c'è un error
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        //dd($data);
        $this->validateData($request);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->update();
        //non so perchè non va cosi
        // $comic->update($data);
        
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comic::destroy($id);

        return redirect()->route('comics.index');
    }
}
