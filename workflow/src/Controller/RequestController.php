<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class RequestController extends AppController {

    // TODO:Holiday、Workdayにも正しく登録できるようにする。
    public $uses = array('ApplyTable', 'HolidayTable', 'WorkdayTable');

    public function index() {
        
    }

    /**
     * 休暇申請情報の追加
     */
    public function restRequestAdd() {
        $applicationDate = $this->request->data('applicationDate');
        $employeeNumber = $this->request->data('employeeNumber');
        $division = $this->request->data('division');
        $applicant = $this->request->data('applicant');
        $applicationType = $this->request->data('applicationType');
        $leaveDate = $this->request->data('leaveDate');
        $leaveType = $this->request->data('leaveType');
        var_dump('登録完了しました');
//        var_dump($applicationDate,$employeeNumber,$division,$applicant,$applicationType,$leaveDate,$leaveType);]
        // TODO: 申請日と承認休暇種別以外べたで登録しているので、正しいものを登録する
        $applyInsert = [
            "user_id" => '1',
            "apply_date" => $applicationDate,
            "type" => $applicationType,
            "reasun" => '発熱の為',
            "check_control" => '1',
            "check_after" => '1',
            "check_manager" => '1',
            "check_bossock" => '1',
            "status" => '1',
            "_____date" => '2018-01-01',
            "feedback_reason" => '不備があった為'
        ];
        $trUsers = TableRegistry::get('Apply');
        $entity = $trUsers->newEntity();
        $entity = $trUsers->patchEntity($entity, $applyInsert);
        $result = $trUsers->save($entity);

        exit();
    }

}
?>	
