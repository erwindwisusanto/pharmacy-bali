<?php
namespace App\Http\Services;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Throwable;

class ApiEprescriptionService
{
    protected $qontakService;
    public function __construct(QontakService $qontakService)
    {
        $this->qontakService = $qontakService;
    }
    
    public function SaveNewUser($array)
    {
        DB::beginTransaction();

        try {
            $array['uuid'] = Str::uuid()->toString(); 
            $array['date'] = Carbon::today();
            $array['password'] = bcrypt($array['password']);

            DB::table('t_user')->insert($array);
            
            DB::commit();
            
            return ['success' => true, 'message' => 'success', 'status_code' => 200];
        } catch (Throwable $e) {
            DB::rollBack();
            return ['success' => false, 'message' => $e->getMessage(), 'status_code' => 500];
        }
    }

    public function CheckCredential($req)
    {
        try {
            $user = $this->checkIsValidEmail($req['email']);
            if ($user['error']) {
                return ['success' => false, 'message' => 'record not found', 'status_code' => 422];
            }

            $user = !empty($user['data']) ? $user['data'] : [];

            if ($user && Hash::check($req['password'], $user->password)) {
                $responseData = ['success' => true, "user_id" => $user->uuid, 'message' => 'record found', 'status_code' => 200];
                return $responseData;
            }

            return ['success' => false, 'message' => 'record not found', 'status_code' => 422];
            
        } catch (Throwable $e) {
            return ['success' => false, 'message' => $e->getMessage(), 'status_code' => 500];
        }
    }

    private function checkIsValidEmail($email)
    {
        try {
            $user = DB::table('t_user')->where('email', $email)->first();
            return ['error' => false, 'data' => $user];
        } catch (Throwable $e) {
            return ['error' => true, 'data' => []];
        }
    }

    public function SavePrescription($param)
    {
        DB::beginTransaction();

        try {
            $data = [
                "uuid" => Str::uuid()->toString(),
                "doctor" => $param['doctor'],
                "patient_name" => $param['patientName'],
                "patient_phone" => $param['patientPhoneNumber'],
                "patient_age" => $param['patientAge'],
                "patient_address" => $param['patientAddress'],
                "patient_sex" => $param['patientSex'],
                "patient_weight" => $param['patientWeight'],
                "diagnosis" => $param['diagnosis'],
                "medications" => json_encode($param['medications']),
                "alergi" => $param['alergi'],
                "alergi_desc" => $param['alergiInfo'],
                "user_id" => $this->getIDByUUID($param['user_id']),
                "date" => Carbon::today()
            ];

            $respDB = DB::table('eprescription')->insert($data);

            if (!$respDB) {
                return 'Failed insert';
            }

            DB::commit();


            
            return true;
        } catch (Throwable $e) {
            DB::rollBack();

            return $e->getMessage();
        }
    }

    private function getIDByUUID($uuid)
    {
        try {
            $user = DB::table('t_user')->select('id')->where('uuid', $uuid)->first();

            return $user->id;
        } catch (Throwable $e) {
            return false;
        }
    }
}
