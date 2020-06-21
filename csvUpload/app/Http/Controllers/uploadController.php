<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class uploadController extends Controller
{
  public function test(){

  }
  public function uploadFileAdvamContacts(Request $request){


    $file = $request->file('fileCSV1');

    $categoryName = $request->input('fileCSV1');

    // File Details
    $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $tempPath = $file->getRealPath();
    $fileSize = $file->getSize();
    $mimeType = $file->getMimeType();

    // Valid File Extensions
    $valid_extension = array("csv");

    // 2MB in Bytes
    $maxFileSize = 2097152;

    // Check file extension
    if(in_array(strtolower($extension),$valid_extension)){

      // Check file size
      if($fileSize <= $maxFileSize){

        // File upload location
        $location = 'uploads';

        // Upload file
        $file->move($location,$filename);

        // Import CSV to Database
        $filepath = public_path($location."/".$filename);

        // Reading file
        $file = fopen($filepath,"r");

        $importData_arr = array();
        $i = 0;

        while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
           $num = count($filedata );

           for ($c=0; $c < $num; $c++) {
             $importData_arr[$i][] = $filedata [$c];
           }
           $i++;
        }
        fclose($file);

        DB::table('AdvamContacts')->truncate();
        DB::table('AdvamVehicles')->truncate();
        $AdvamContacts = array();
        // Insert to MySQL database
        foreach($importData_arr as $importData){


          $AdvamContacts = array(

             "Parker_ID"=>$importData[0],
             "First_Name"=>$importData[1],
             "Surname"=>$importData[2],
             "Address_Line1"=>$importData[4],
             "Address_Line2"=>$importData[5],
             "Address_City"=>$importData[6],
             "Address_Postcode"=>$importData[7],
             "Mobile_Number"=>$importData[10],
             "Accept_Marketing_Info"=>$importData[11]

           );

           $AdvamVehicles = array(

              "Parker_ID"=>$importData[0],
              "Access_Identity"=>$importData[3],
              "Vehicle_Make"=>$importData[8],
              "Vehicle_Model"=>$importData[9]

            );




          $tt = DB::table('advamcontacts')->where('Parker_ID', '=' ,$importData[0])->count();

          if ($tt>0) {

          }else {
            DB::table('advamcontacts')->insert($AdvamContacts);
          }
          DB::table('advamvehicles')->insert($AdvamVehicles);



        }
        // if (!in_array($importData[0],$AdvamContacts)) {
        //
        // }

        Session::flash('message','Import Successful.');
      }else{
        Session::flash('message','File too large. File must be less than 2MB.');
      }

    }else{
       Session::flash('message','Invalid File Extension.');
    }



  // Redirect to index
  // return redirect()->action('uploadController@index');


  return Redirect::back();
  }
}
