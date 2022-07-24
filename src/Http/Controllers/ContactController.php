<?php
namespace Pysosu\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Pysosu\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Pysosu\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact_us');
    }

    public function send(Request $request)
    {
        // return $request;
        $contact = Contact::create($request->all());

        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable(
                $request->message,
                $request->name,
            ));

        return redirect()->route('contact.index');
    }
}
