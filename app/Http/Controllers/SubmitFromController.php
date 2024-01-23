<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class SubmitFromController extends Controller
{

    public function main()
    {
        return view('instant');
    }
    public function submitForm(Request $request)
    {
        
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'port_of_origin' => 'required',
                'port_of_destination' => 'required',
                'cargo_weight' => 'required',
                'commodity_details' => 'required',
            ]);
            $instantQuote = new FormData();
            $instantQuote->name = $request->name;
            $instantQuote->email = $request->email;
            $instantQuote->port_of_origin = $request->port_of_origin;
            $instantQuote->port_of_destination = $request->port_of_destination;
            $instantQuote->cargo_weight = $request->cargo_weight;
            $instantQuote->commodity_details = $request->commodity_details;
            $instantQuote->save();
            if ($this->isOnline()) {
              $mail_data = [
                'userMail' => ['jishann44@gmail.com','jishan15-11200@diu.edu.bd'],
                'name' => $request->name,
                'email' => $request->email,
                'port_of_origin' => $request->port_of_origin,
                'port_of_destination' => $request->port_of_destination,
                'cargo_weight' => $request->cargo_weight,
                'commodity_details' => $request->commodity_details
              ];
              \Mail::send('emails.submit_form',$mail_data, function($message) use($mail_data){
                $message->to($mail_data['userMail'])
                ->from($mail_data['email'],$mail_data['name'])
                ->subject($mail_data['commodity_details']);
              });
              return redirect()->to('/')->with('message','Your message has been sent. Thank you!');
            }
                 
              else{
                return redirect()->back()->withInput()->with('error','Check your internet connection');
              }
    
        
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
        $instant = FormData::all();
        return view('admin.instant.index',compact('instant'));
    }
    public function destroy($id)
    {
        $instant = FormData::find($id)->delete();
        return redirect()->route('admin.instant.index');
    }
}
