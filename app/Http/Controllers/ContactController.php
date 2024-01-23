<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Auth;
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
        if ($this->isOnline()) {
          $mail_data = [
            'userMail' => 'jishann44@gmail.com',
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message
          ];
          \Mail::send('emails.contact_form',$mail_data, function($message) use($mail_data){
            $message->to($mail_data['userMail'])
            ->from($mail_data['email'],$mail_data['name'])
            ->subject($mail_data['subject']);
          });
          return redirect()->route('contact')->with('message','Your message has been sent. Thank you!');
        }
             
          else{
            return redirect()->back()->withInput()->with('error','Check your internet connection');
          }

    
        // Mail::to('jishann44@gmail.com')->send(new ContactFormMail($contact->name, $contact->email, $contact->subject, $contact->message)); 
   }
   public function isOnline($site = "https://www.youtube.com/")
   {
    if(@fopen($site, 'r')){
        return true;
    }
    else{
        return false;
    }

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
