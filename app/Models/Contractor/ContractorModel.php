<?php


namespace App\Models\Contractor;


use App\Models\Database;


class ContractorModel
{
    public function getContractorDetailsById($contractorId){
        $data = $this->getContractorDetailsDataById($contractorId);
        return $this->mapContractorDetailsData($data);
    }

    public function getContractorDetailsDataById($contractorId){
        $queryString = "SELECT con.contractor_id, con.contractor_name, con.contractor_name_kana, con.zipcode, con.address_01, con.address_02,
                        con.tel_no, con.mail_address, con.company_id, con.group_id, con.temporary, con.type_contractor, con.update_date,
                        con.update_user_id, con.insert_date, con.insert_user_id, con.delete_flag, com.company_name, com.company_name_kana,
                        com.daihyousha_name AS companyDaihyousha, com.daihyousha_name_kana AS companyDaihyoushaKana, com.zipcode AS companyZip,
                        com.address_01 AS companyAddress01, com.address_02 AS companyAddress02, com.tel_no AS companyPhn, com.mail_address
                        AS companyMail, com.update_date AS companyUpdate, com.update_user_id AS companyUpdateUser, com.insert_date AS
                        companyInsertDate, com.insert_user_id AS companyInsertUser, grp.group_name, grp.group_name_kana, grp.daihyousha_name
                        AS groupDaihyousha, grp.daihyousha_name_kana AS groupDaihyoushaKana, grp.zipcode AS groupZip, grp.address_01
                        AS groupAddress01, grp.address_02 AS groupAddress02, grp.tel_no AS groupPhn, grp.mail_address AS groupMail, grp.update_date
                        AS groupUpdateDate, grp.update_user_id AS groupUpdateUser, grp.insert_date AS groupInsertDate, grp.insert_user_id AS
                        groupInsertUser FROM mst_contractor AS con LEFT JOIN mst_company AS com ON con.company_id = com.company_id LEFT JOIN
                        mst_group AS grp ON con.group_id = grp.group_id WHERE con.contractor_id = ? AND con.delete_flag = ?";

        $queryParameter = array($contractorId, 1);

        return (new Database())->readQueryExecution($queryString, $queryParameter);
    }

    public function mapContractorDetailsData($data){
        return $data;
    }
}