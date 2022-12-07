<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use App\Rules\Nozero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\Mail\ReceptMail;

class ReceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recept.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recept.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $request->validate([
            'recept'    => ['required', new Nozero, 'min:12', 'max:12'],
            'mobile'    => 'required',
            'pharmacy'  => 'required',
            'status'    => 'required'
        ]);

        $encryptRecept = Crypt::encryptString($request->recept);
        $encryptMobile = Crypt::encryptString($request->mobile);


        Recept::create([
            'recept'    => $encryptRecept,
            'mobile'    => $encryptMobile,
            'pharmacy'  => $request->pharmacy,
            'status'    => $request->status
        ]);

        $erecept = Recept::latest()->first();

        $data = [
            'recept'        => strtoupper(Crypt::decryptString($erecept->recept)),
            'mobile'        => Crypt::decryptString($erecept->mobile),
            'pharmacy'      => $erecept->pharmacy,
            'status'        => $erecept->status,
            'created_at'    => $erecept->created_at,
        ];

        if($erecept->pharmacy == 'KHN') {
            Mail::to('klika@khn.cz')->send(new ReceptMail($data));
        } if($erecept->pharmacy == 'RÁJ') {
            Mail::to('klika@khn.cz')->send(new ReceptMail($data));
        }

        return redirect(route('erecept.create'))->with('message', 'eRecept rezervován! Léky vám připravíme a zašleme SMS zprávu, kdy si léky můžete vyvednout.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recept  $recept
     * @return \Illuminate\Http\Response
     */
    public function show(Recept $recept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recept  $recept
     * @return \Illuminate\Http\Response
     */
    public function edit(Recept $recept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recept  $recept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recept $recept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recept  $recept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recept $recept)
    {
        //
    }
}
