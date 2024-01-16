<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Mail\Message;
class ContactController extends Controller
{

    public function main()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
   {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();




        Mail::to('jishann44@gmail.com')->send(new ContactFormMail($contact->name, $contact->email, $contact->subject, $contact->message));
       

        return redirect()->route('contact')->with('message','Your message has been sent. Thank you!');
   }
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index',compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Contact::find($id)->delete();
        return redirect()->route('admin.contact.index');
    }
}
