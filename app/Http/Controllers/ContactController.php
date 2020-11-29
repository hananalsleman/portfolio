<?php namespace 

App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Contact; 
use Mail; 

class ContactController extends Controller { 

      public function getContact() { 

       return view('index'); 

     } 

      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();
        
        return back()->with('success', 'Thank you for contact us!');

    }
}