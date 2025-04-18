<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('members.index', compact('members'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $classes = array(
            // 7º Ano
            '7ºA' => '7ºA',
            '7ºB' => '7ºB',
            '7ºC' => '7ºC',
            '7ºD' => '7ºD',
            '7ºE' => '7ºE',
            '7ºF' => '7ºF',
            '7ºG' => '7ºG',
            '7ºH' => '7ºH',

            // 8º Ano
            '8ºA' => '8ºA',
            '8ºB' => '8ºB',
            '8ºC' => '8ºC',
            '8ºD' => '8ºD',
            '8ºE' => '8ºE',
            '8ºF' => '8ºF',
            '8ºG' => '8ºG',
            '8ºH' => '8ºH',

            // 9º Ano
            '9ºA' => '9ºA',
            '9ºB' => '9ºB',
            '9ºC' => '9ºC',
            '9ºD' => '9ºD',
            '9ºE' => '9ºE',
            '9ºF' => '9ºF',
            '9ºG' => '9ºG',
            '9ºH' => '9ºH',

            // 10º Ano
            '10ºAV1' => '10ºAV1',
            '10ºAV2' => '10ºAV2',
            '10ºAV3' => '10ºAV3',
            '10ºAV4' => '10ºAV4',
            '10ºCS1' => '10ºCS1',
            '10ºCS2' => '10ºCS2',
            '10ºCS3' => '10ºCS3',
            '10ºCS4' => '10ºCS4',
            '10ºCT1' => '10ºCT1',
            '10ºCT2' => '10ºCT2',
            '10ºCT3' => '10ºCT3',
            '10ºCT4' => '10ºCT4',
            '10ºLH1' => '10ºLH1',
            '10ºLH2' => '10ºLH2',
            '10ºLH3' => '10ºLH3',
            '10ºLH4' => '10ºLH4',

            // 11º Ano
            '11ºAV1' => '11ºAV1',
            '11ºAV2' => '11ºAV2',
            '11ºAV3' => '11ºAV3',
            '11ºAV4' => '11ºAV4',
            '11ºCS1' => '11ºCS1',
            '11ºCS2' => '11ºCS2',
            '11ºCS3' => '11ºCS3',
            '11ºCS4' => '11ºCS4',
            '11ºCT1' => '11ºCT1',
            '11ºCT2' => '11ºCT2',
            '11ºCT3' => '11ºCT3',
            '11ºCT4' => '11ºCT4',
            '11ºLH1' => '11ºLH1',
            '11ºLH2' => '11ºLH2',
            '11ºLH3' => '11ºLH3',
            '11ºLH4' => '11ºLH4',

            // 12º Ano
            '12ºAV1' => '12ºAV1',
            '12ºAV2' => '12ºAV2',
            '12ºAV3' => '12ºAV3',
            '12ºAV4' => '12ºAV4',
            '12ºCS1' => '12ºCS1',
            '12ºCS2' => '12ºCS2',
            '12ºCS3' => '12ºCS3',
            '12ºCS4' => '12ºCS4',
            '12ºCT1' => '12ºCT1',
            '12ºCT2' => '12ºCT2',
            '12ºCT3' => '12ºCT3',
            '12ºCT4' => '12ºCT4',
            '12ºLH1' => '12ºLH1',
            '12ºLH2' => '12ºLH2',
            '12ºLH3' => '12ºLH3',
            '12ºLH4' => '12ºLH4',

            // PSI
            '1PSI' => '1PSI',
            '2PSI' => '2PSI',
            '3PSI' => '3PSI'
        );

        $sizes = array(
            "XS" => "XS",
            "S" => "S",
            "M" => "M",
            "L" => "L",
            "XL" => "XL",
            "XXL" => "XXL"
        );
        return view('members.create', compact('classes', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'schoolnumber' => 'required|numeric|digits_between:5,6|',
            'birth_date' => 'required|date',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@aerp\.pt$/|max:100',
            'phonenumber' => 'required|numeric|digits:9',
            'class' => 'required',
            'tshirt_size' => 'required',
            'food_allergies' => 'required',
            'image_authorization' => 'required',
            'allergies_description' => 'nullable|string|max:400',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:11920',
        ]);
        $member = new Member();
        $member->first_name = $request->input('first_name');
        $member->last_name = $request->input('last_name');
        $member->schoolnumber = $request->input('schoolnumber');
        $member->birth_date = $request->input('birth_date');
        $member->email = $request->input('email');
        $member->phonenumber = $request->input('phonenumber');
        $member->class = $request->input('class');
        $member->tshirt_size = $request->input('tshirt_size');
        $member->food_allergies = $request->input('food_allergies');
        $member->image_authorization = $request->input('image_authorization');
        $member->allergies_description = $request->input('allergies_description');

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            // Normaliza o nome removendo acentos, espaços e caracteres especiais
            $designation = preg_replace(
                array(
                    "/(á|à|ã|â|ä)/",
                    "/(Á|À|Ã|Â|Ä)/",
                    "/(é|è|ê|ë)/",
                    "/(É|È|Ê|Ë)/",
                    "/(í|ì|î|ï)/",
                    "/(Í|Ì|Î|Ï)/",
                    "/(ó|ò|õ|ô|ö)/",
                    "/(Ó|Ò|Õ|Ô|Ö)/",
                    "/(ú|ù|û|ü)/",
                    "/(Ú|Ù|Û|Ü)/",
                    "/(ñ)/",
                    "/(Ñ)/",
                    "/(ç)/",
                    "/(Ç)/"
                ),
                explode(" ", "a A e E i I o O u U n N c C"),
                pathinfo($originalName, PATHINFO_FILENAME)
            );

            $designation = preg_replace('/[^A-Za-z0-9\-]/', '', $designation); // Remove caracteres especiais
            $name = $designation . '_' . time() . '.' . $extension; // Adiciona timestamp para evitar conflitos

            // Armazena o arquivo no local correto
            $file->storeAs('public/images/members', $name);

            // Salva o nome do arquivo no banco de dados
            $member->profile_photo = $name;
        }
        $member->save();
        return redirect()->route('members')->with('Sucesso', 'Membro criado com sucesso!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
        $classes = array(
            // 7º Ano
            '7ºA' => '7ºA',
            '7ºB' => '7ºB',
            '7ºC' => '7ºC',
            '7ºD' => '7ºD',
            '7ºE' => '7ºE',
            '7ºF' => '7ºF',
            '7ºG' => '7ºG',
            '7ºH' => '7ºH',

            // 8º Ano
            '8ºA' => '8ºA',
            '8ºB' => '8ºB',
            '8ºC' => '8ºC',
            '8ºD' => '8ºD',
            '8ºE' => '8ºE',
            '8ºF' => '8ºF',
            '8ºG' => '8ºG',
            '8ºH' => '8ºH',

            // 9º Ano
            '9ºA' => '9ºA',
            '9ºB' => '9ºB',
            '9ºC' => '9ºC',
            '9ºD' => '9ºD',
            '9ºE' => '9ºE',
            '9ºF' => '9ºF',
            '9ºG' => '9ºG',
            '9ºH' => '9ºH',

            // 10º Ano
            '10ºAV1' => '10ºAV1',
            '10ºAV2' => '10ºAV2',
            '10ºAV3' => '10ºAV3',
            '10ºAV4' => '10ºAV4',
            '10ºCS1' => '10ºCS1',
            '10ºCS2' => '10ºCS2',
            '10ºCS3' => '10ºCS3',
            '10ºCS4' => '10ºCS4',
            '10ºCT1' => '10ºCT1',
            '10ºCT2' => '10ºCT2',
            '10ºCT3' => '10ºCT3',
            '10ºCT4' => '10ºCT4',
            '10ºLH1' => '10ºLH1',
            '10ºLH2' => '10ºLH2',
            '10ºLH3' => '10ºLH3',
            '10ºLH4' => '10ºLH4',

            // 11º Ano
            '11ºAV1' => '11ºAV1',
            '11ºAV2' => '11ºAV2',
            '11ºAV3' => '11ºAV3',
            '11ºAV4' => '11ºAV4',
            '11ºCS1' => '11ºCS1',
            '11ºCS2' => '11ºCS2',
            '11ºCS3' => '11ºCS3',
            '11ºCS4' => '11ºCS4',
            '11ºCT1' => '11ºCT1',
            '11ºCT2' => '11ºCT2',
            '11ºCT3' => '11ºCT3',
            '11ºCT4' => '11ºCT4',
            '11ºLH1' => '11ºLH1',
            '11ºLH2' => '11ºLH2',
            '11ºLH3' => '11ºLH3',
            '11ºLH4' => '11ºLH4',

            // 12º Ano
            '12ºAV1' => '12ºAV1',
            '12ºAV2' => '12ºAV2',
            '12ºAV3' => '12ºAV3',
            '12ºAV4' => '12ºAV4',
            '12ºCS1' => '12ºCS1',
            '12ºCS2' => '12ºCS2',
            '12ºCS3' => '12ºCS3',
            '12ºCS4' => '12ºCS4',
            '12ºCT1' => '12ºCT1',
            '12ºCT2' => '12ºCT2',
            '12ºCT3' => '12ºCT3',
            '12ºCT4' => '12ºCT4',
            '12ºLH1' => '12ºLH1',
            '12ºLH2' => '12ºLH2',
            '12ºLH3' => '12ºLH3',
            '12ºLH4' => '12ºLH4',

            // PSI
            '1PSI' => '1PSI',
            '2PSI' => '2PSI',
            '3PSI' => '3PSI'
        );

        $sizes = array(
            "XS" => "XS",
            "S" => "S",
            "M" => "M",
            "L" => "L",
            "XL" => "XL",
            "XXL" => "XXL"
        );
        return view('members.show', compact('member', 'classes', 'sizes'))->with(['readonly' => true, 'disabled' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
        $classes = array(
            // 7º Ano
            '7ºA' => '7ºA',
            '7ºB' => '7ºB',
            '7ºC' => '7ºC',
            '7ºD' => '7ºD',
            '7ºE' => '7ºE',
            '7ºF' => '7ºF',
            '7ºG' => '7ºG',
            '7ºH' => '7ºH',

            // 8º Ano
            '8ºA' => '8ºA',
            '8ºB' => '8ºB',
            '8ºC' => '8ºC',
            '8ºD' => '8ºD',
            '8ºE' => '8ºE',
            '8ºF' => '8ºF',
            '8ºG' => '8ºG',
            '8ºH' => '8ºH',

            // 9º Ano
            '9ºA' => '9ºA',
            '9ºB' => '9ºB',
            '9ºC' => '9ºC',
            '9ºD' => '9ºD',
            '9ºE' => '9ºE',
            '9ºF' => '9ºF',
            '9ºG' => '9ºG',
            '9ºH' => '9ºH',

            // 10º Ano
            '10ºAV1' => '10ºAV1',
            '10ºAV2' => '10ºAV2',
            '10ºAV3' => '10ºAV3',
            '10ºAV4' => '10ºAV4',
            '10ºCS1' => '10ºCS1',
            '10ºCS2' => '10ºCS2',
            '10ºCS3' => '10ºCS3',
            '10ºCS4' => '10ºCS4',
            '10ºCT1' => '10ºCT1',
            '10ºCT2' => '10ºCT2',
            '10ºCT3' => '10ºCT3',
            '10ºCT4' => '10ºCT4',
            '10ºLH1' => '10ºLH1',
            '10ºLH2' => '10ºLH2',
            '10ºLH3' => '10ºLH3',
            '10ºLH4' => '10ºLH4',

            // 11º Ano
            '11ºAV1' => '11ºAV1',
            '11ºAV2' => '11ºAV2',
            '11ºAV3' => '11ºAV3',
            '11ºAV4' => '11ºAV4',
            '11ºCS1' => '11ºCS1',
            '11ºCS2' => '11ºCS2',
            '11ºCS3' => '11ºCS3',
            '11ºCS4' => '11ºCS4',
            '11ºCT1' => '11ºCT1',
            '11ºCT2' => '11ºCT2',
            '11ºCT3' => '11ºCT3',
            '11ºCT4' => '11ºCT4',
            '11ºLH1' => '11ºLH1',
            '11ºLH2' => '11ºLH2',
            '11ºLH3' => '11ºLH3',
            '11ºLH4' => '11ºLH4',

            // 12º Ano
            '12ºAV1' => '12ºAV1',
            '12ºAV2' => '12ºAV2',
            '12ºAV3' => '12ºAV3',
            '12ºAV4' => '12ºAV4',
            '12ºCS1' => '12ºCS1',
            '12ºCS2' => '12ºCS2',
            '12ºCS3' => '12ºCS3',
            '12ºCS4' => '12ºCS4',
            '12ºCT1' => '12ºCT1',
            '12ºCT2' => '12ºCT2',
            '12ºCT3' => '12ºCT3',
            '12ºCT4' => '12ºCT4',
            '12ºLH1' => '12ºLH1',
            '12ºLH2' => '12ºLH2',
            '12ºLH3' => '12ºLH3',
            '12ºLH4' => '12ºLH4',

            // PSI
            '1PSI' => '1PSI',
            '2PSI' => '2PSI',
            '3PSI' => '3PSI'
        );

        $sizes = array(
            "XS" => "XS",
            "S" => "S",
            "M" => "M",
            "L" => "L",
            "XL" => "XL",
            "XXL" => "XXL"
        );
        return view('members.edit', compact('member', 'classes', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
        $request->validate([
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'schoolnumber' => 'required|numeric|digits_between:5,6|',
            'birth_date' => 'required|date',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@aerp\.pt$/|max:100',
            'phonenumber' => 'required|numeric|digits:9',
            'class' => 'required',
            'tshirt_size' => 'required',
            'food_allergies' => 'required',
            'image_authorization' => 'required',
            'allergies_description' => 'nullable|string|max:400',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:11920',
        ]);
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->schoolnumber = $request->schoolnumber;
        $member->birth_date = $request->birth_date;
        $member->email = $request->email;
        $member->phonenumber = $request->phonenumber;
        $member->class = $request->class;
        $member->tshirt_size = $request->tshirt_size;
        $member->food_allergies = $request->food_allergies;
        $member->image_authorization = $request->image_authorization;
        $member->allergies_description = $request->allergies_description;
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/storage/images/members', $name); // Salva o arquivo no local correto
            $member->profile_photo = $name;  // Alterado de 'photo' para 'profile_photo'
        }
        $member->save();
        return redirect()->route('members', $member->id)->with('message', 'Membro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
        $member->delete();
        return redirect()->route('members')->with('message', 'Membro eliminado com sucesso!');
    }
}
