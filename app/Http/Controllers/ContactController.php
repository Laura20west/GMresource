<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(Request $req){
        $contact = Contact::all();
        return  view('displays')->with("contact",$contact);
    }
    public function add(Request $req){
        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->message = $req->message;
        $contact->save();
        return redirect()->back();
    }

    public function delete(Request $req){
        $contact = Contact::find($req->id);
        $contact->delete();
        return redirect()->back();
    }


}
