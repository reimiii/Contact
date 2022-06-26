<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index(Company $comp, Contact $cont)
    {
        $companies = $comp->comget();
        $contacts  = $cont->conget();

        return view('contacts.index', [
            'companies' => $companies,
            'contacts'  => $contacts,
        ]);
    }

    public function create(Company $comp)
    {
        $contact   = new Contact;
        $companies = $comp->comget();

        return view('contacts.create', [
            'companies' => $companies,
            'contact'   => $contact,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required',
            'email'      => 'required|email',
            'address'    => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Contact created successfully');
    }

    public function edit(Company $comp, Contact $cond, $id)
    {
        $companies = $comp->comget();
        $contact   = $cond->condit($id);

        return view('contacts.edit', [
            'companies' => $companies,
            'contact'   => $contact,
        ]);
    }

    public function update(Request $request, Contact $cond, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required',
            'email'      => 'required|email',
            'address'    => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        $cond->condit($id)->update($request->all());

        return redirect()->route('contact')->with('success', 'Contact updated successfully');
    }

    public function delete(Contact $cond, $id)
    {
        $cond->condit($id)->delete();

        return redirect()->route('contact')->with('success', 'Contact deleted successfully');
    }

    public function show($id)
    {
        $contact = Contact::with('company')->findOrFail($id);

        return view('contacts.show', [
            'contact' => $contact,
        ]);
    }

}
