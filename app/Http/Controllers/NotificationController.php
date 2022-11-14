<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;

class NotificationController extends Controller
{
	public function index(User $user)
	{
		$userNotifications = Contact::where('user_id', $user->id)->paginate(10);
		return view('panel.notification', compact('user', 'userNotifications'));
	}

	public function destroy(Contact $contact)
	{
		Contact::findOrFail($contact->id)->delete();
		return back();
	}
}
