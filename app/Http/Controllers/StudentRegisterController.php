<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\StudentRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentRegisterController extends Controller
{
    /**
     * list student details.
     *
     * @param
     * @return json  message, data, statusCode, status
     */
    public function dashboard()
    {
        try {
            $response = StudentRegister::with('education')->orderBy('id', 'desc')->get();
// dd(($response->toArray()));
            if (empty($response->toArray())) {
                throw new \Exception('No results found.');
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong.',
                'error' => $e->getMessage(),
                'statusCode' => 400,
                'status' => 'failed',
                'errorMessages' =>  ['Something went wrong.']
            ], 400);
        }

        return view('dashboard')->with(array('response' => $response));
    }
    /**
     * Insert student details.
     *
     * @param
     * @return  
     */
    public function insert(Request $request)
    {


        return view('welcome');
    }

    /**
     * create student details.
     *
     * @param
     * @return   message, data, statusCode, status
     */
    public function create(Request $request)
    {

        try {

            // check student data is valid
            $error = $this->validateStudent($request);
            if (!empty($error['statusCode']) == 400) return response()->json($error, 400);

            $student = StudentRegister::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'gender' => $request->gender,
                'state' => $request->state,
                'district' => $request->district,
                'address' => $request->address,
            ]);

            $education = Education::create([
                'course' => implode(' , ', $request->course),
                'college' => implode(' , ', $request->college),
                'passOut' => implode(' , ', $request->passOut),
                'percentage' => implode(' , ', $request->percentage),
                'studentId' => $student['id'],

            ]);


            return redirect('register/insert');
        } catch (\Exception $e) {
            $error = [
                'errorMessage' => $e->getMessage(),
                'filePath' => $e->getFile(),
                'lineNumber' => $e->getLine(),
            ];

            return response()->json([
                'message' => 'response creation failed.',
                'error' => $error,
                'statusCode' => 400,
                'status' => 'failed',
                'errorMessages' =>  [$error]
            ], 400);
        }
    }


    /**
     * check student data is valid
     *
     * @param $request
     * @return json  message, statusCode, status
     */
    public function validateStudent($request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [

                'firstName' => 'required|max:255|string',
                'lastName' => 'required|max:255|string',
                'gender' => 'required|string',
                'state' => 'required|string',
                'district' => 'required|string',
                'address' => 'required|string',
                'state' => 'required|string',
                'course' => 'required|array',
                'college' => 'required|array',
                'passOut' => 'required|array',
                'percentage' => 'required|array',

            ]
        );

        if ($validator->fails()) {
            $error = [
                'message' => 'student creation failed.',
                'error' => $validator->errors(),
                'statusCode' => 400,
                'status' => 'failed',
                'errorMessages' =>  $validator->errors()->all()
            ];
            return $error;
        }
    }
}
