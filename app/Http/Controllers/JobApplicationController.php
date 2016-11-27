<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JobApplication as Application;
use App\Models\Listing as Listing;

class JobApplicationController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create($listing_id)
  {

    $listing = Listing::findOrFail($listing_id);

    return view('application.createupdate', [
        'listing' => $listing
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $this->validate($request, [
      'listing_id' => 'required|exists:listings,id|unique:job_applications,listing_id,NULL,id,user_id,'.$request->input('user_id'),
      'user_id' => 'required',
      'cover_letter' => 'required'
    ]);

    $application = new Application($request->all());
    $application->save();

    return redirect()->back()->with('success', 'Application Created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return view('application.show', [
        'application' => Application::findOrFail($id)
      ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>