<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home () {

        return view('index');
    }

    public function name(){
    
        $name = "noi siamo una compagnia di viaggi europea";
    
        return view('chiSiamo', ['descrizione'=>$name]);
    
    }

    public function nostriViaggi(){

        $elements=[
            ['id'=>'1','name'=>'Roma','costo'=>'500£','durata'=>'2 settimane','img'=>'/img/Colosseo_2020.jpg'],
            ['id'=>'2','name'=>'Dubai','costo'=>'900£','durata'=>'3 settimane','img'=>'/img/dubai.jpg'],
            ['id'=>'3','name'=>'Los Angeles','costo'=>'700£','durata'=>'1 settimana','img'=>'/img/los angeles.jpg']
        ];
    
        return view('nostriViaggi', ['trips'=>$elements]);
    }

    public function showViaggio($id){

        $elements=[
            ['id'=>'1','name'=>'Roma','costo'=>'500£','durata'=>'2 settimane','img'=>'/img/Colosseo_2020.jpg'],
            ['id'=>'2','name'=>'Dubai','costo'=>'900£','durata'=>'3 settimane','img'=>'/img/dubai.jpg'],
            ['id'=>'3','name'=>'Los Angeles','costo'=>'700£','durata'=>'1 settimana','img'=>'/img/los angeles.jpg']
        ];
    
        foreach ($elements as $element) {
            if($element['id'] == $id){
                return view('showViaggio', ['trip'=> $element]);
            }
        }
    }

    public function contactUs() {
        return view('contactUs');
    }

    public function sendMail(Request $request){
        // dd($request->all());

        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $text = $request->input('text');

        // dd($name, $surname, $email, $text);

        $data = compact('name', 'surname', 'email', 'text');

        Mail::to($email)->send(new ContactMail($data));


        return redirect(route('home'))->with('message', 'Complimenti, hai inviato correttamente la mail');
    }

    public function allUser(){
        $users = User::all();

        return view('allUser', compact('users'));

        
    }

    public function destroy(User $user)
    {
        foreach($user->stores as $store){
            $store->user()->dissociate();
            $store->save();

        }

        $user->delete();

        return redirect(route('home'))->with('message', 'Hai cancellato correttamente lutente');
    }

}

