<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Profile;
use App\Change;
use Carbon\Carbon;
class ProfileController extends Controller
{
  public function add()
  {
    return view('admin.profile.create');
  }

  public function create(Request $request)
  {
    $this->validate($request, Profile::$rules);

    $profile = new Profile;
    $form = $request->all();

    $profile->fill($form);
    $profile->save();
    return redirect('admin/profile/create');
  }

  public function edit(Request $request)
  {

    $news = Profile::find($request->id);
    if (empty($profile)) {
      abort(404);
    }
    return view('admin.profile.edit', ['profile_form' => $profile]);
  }
  public function update(Request $request)
  {
    // Validationをかける
    $this->validate($request, Profile::$rules);
    // News Modelからデータを取得する
    $profile = Profile::find($request->id);
    // 送信されてきたフォームデータを格納する
    $profile_form = $request->all();

    // 該当するデータを上書きして保存する
    $profile->fill($profile_form)->save();

    $change = new History;
    $change->news_id = $news->id;
    $change->edited_at = Carbon::now();
    $change->save();

    return view('admin.profile.edit');
  }
}
