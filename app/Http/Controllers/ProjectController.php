<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use App\Models\ContactResponse;
class ProjectController extends Controller
{
    //
      //
      public function makeform(Request $request)
      {
        // protected $fillable = ['id','contactName','contactSurname','contactPhone','contactOccupation','contactAddress'];
        // protected $fillable = ['id_new','contactEmail','contactSubject','contactMessage','contactImage'];
          ContactInfo::create([ 
            //   'id' => $request->id,
              'contactName' => $request->contactName,
              'contactSurname' => $request->contactSurname,
              'contactPhone' => $request->contactPhone,
              'contactOccupation' => $request->contactOccupation,
              'contactAddress' => $request->contactAddress
          ]);
          ContactResponse::create([
            //'id_new' => $request->id_new,
            'contactEmail' => $request->contactEmail,
            'contactSubject' => $request->contactSubject,
            'contactMessage' => $request->contactMessage,
            'contactImage' => $request->contactImage
          ]);
          return redirect('mail/send');
          }
}

