<?php

namespace App\Http\Controllers;
namespace par\lara\src\http;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\bookAdd;
use Validator;
use Redirect;

class bookAddController extends Controller
{

    public function add_book(Request $request)
      {
          $validator = Validator :: make($request -> all(),[
                    'name' => 'required',
                    'contact_NUMber' => 'required',
                    ]);
                  if($validator -> fails())
                    {
                      $error  =   $validator->errors();
                      return $error;
                    }

                    $name =  $request->get('name');
                    $mobile = $request->get('contact_NUMber');


                    $book = new bookAdd;

                    $book->name   =   trim($name);
                    $book->contact_number   =   trim($mobile);

                    $book->save();


                    return redirect() -> to(route('book.list'));

                  //  return redirect()->to(route('author.list'));
      }

      public function list_books()
      {
      $lists  =   bookAdd::all();
      return view('page.showdata',compact('lists'));
      }


        public function delete_book($id)
        {
          $book = bookAdd::find($id);


         if( $book == null)
           {
             return "BOOK NOT EXITS";
           }
            $book->delete();
          return Redirect::to(route('book.list'))->with('messaage','delete is success full prerfrom');
      }

      public function edit ($id)
      {
        $lists = bookAdd :: find($id);

        if($lists == null)
        {
          return "Book Not exits";
        }

        return view('page.edit',compact('lists'));
      }


      public function update($id,Request $request)
      {

        $validator= Validator::make($request->all(),[
          'name'  => 'required',
          'mobile'  =>  'required'
        ]);
        $update = bookAdd::find($id);
        $update->name= $request->get('name');
        $update->contact_number= $request->get('mobile');
        $update->save();
  // redirect
      return Redirect::to(route('book.list'))->with('messaage','update is success full prerfrom');
    }

      public function sorting()
      {

        $lists = bookAdd::orderBy('name','desc')->take(3)->get();
        return view('page.sortByData',compact('lists'));

      }


}
