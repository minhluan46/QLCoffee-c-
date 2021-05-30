<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
	public function indexper() {
		
		return view('backend.account.permission.index');
	}

	public function indexif() {
		
		return view('backend.account.info_admin.index');
	}

	public function indexusr() {
		
		return view('backend.account.account_users.index');
	}

	public function indexmeb() {
		
		return view('backend.account.account_member.index');
	}
	public function addusr() {
		
		return view('backend.account.account_member.add_user');
	}
	public function addmemb() {
		
		return view('backend.account.account_member.add_member');
	}
}
