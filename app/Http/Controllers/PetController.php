<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = DB::table('pets')
        ->orderBy('id', 'asc')
        ->get();

        return view('adopt', ['pets'=>$pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pet = new Pet();
        $pet->id = IdGenerator::generate(['table' => 'pets', 'length' => 6, 'prefix' =>'PET']);
        $pet->pet_name=$request->petName;
        $pet->pet_type=$request->petType;
        $pet->pet_age=$request->petAge;
        $pet->pet_sex=$request->petSex;

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('petpic', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $pet->file_path=$request->file->hashName();
        }

        $pet->save(); // Finally, save the record.

        return redirect('add-pet');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDetails($id)
    {

        $petDetails= Pet::find($id);

        return view('pet-info', ['petDetails'=>$petDetails]);

    }
}
