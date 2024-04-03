<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Contact;

class ContactsCountComposer
{
    public function compose(View $view)
    {
        $contactsCount = Contact::count();
        $view->with('contactsCount', $contactsCount);
    }
}