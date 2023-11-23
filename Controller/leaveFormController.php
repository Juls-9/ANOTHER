<?php 

    Class leaveController{
        public function getInfo($firstName, $lastName, $middleName, $startDate, $endDate, $phone, $reason, $paid){
            $new = new LeaveFormClass($firstName, $lastName, $middleName, $startDate, $endDate, $phone, $reason, $paid);
            $new->insertDb();
    }
    public function dataTable(){
        $dt = new LeaveFormClass();
        $data = $dt->showLeaveDb();

        return $data;
    }
}