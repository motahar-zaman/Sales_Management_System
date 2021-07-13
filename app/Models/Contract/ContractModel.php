<?php

namespace App\Models\Contract;


use App\Models\Database;

class ContractModel
{
    public function getContractApprovalList(){
        $data = $this->getApprovalListData();
        return $this->mapContractData($data);
    }

    public function getApprovalListData(){
        $queryString = "SELECT c.contract_id, c.contractor_id, c.tantou_id, c.status, c.note, c.update_date, c.update_user_id, c.insert_date,
            c.insert_user_id, c.delete_flag, branch_no, p.product_id, p.status AS contract_product_status, p.note AS contract_product_note,
            DATE_FORMAT(mp.start_date, '%Y/%m/%d') AS start_date, DATE_FORMAT(mp.end_date, '%Y/%m/%d') AS end_date, mp.shop_type, mp.service_type,
            mp.product_type, mp.product_name, mp.product_note, mp.price, s.shop_id, s.shop_name, s.zipcode, s.address_01, s.tel_no, s.mail_address,
            si.shop_daihyo_name, si.notificate_file_path, si.business, cntr.contractor_name FROM trn_web_contract_base AS c LEFT JOIN trn_contract_product AS p
            ON c.contract_id = p.contract_id LEFT JOIN mst_product AS mp ON mp.product_id = p.product_id LEFT JOIN mst_shop AS s ON
            s.shop_id = p.shop_id LEFT JOIN trn_shop_info AS si ON s.shop_id = si.shop_id LEFT JOIN mst_contractor AS cntr ON
            cntr.contractor_id = c.contractor_id WHERE c.delete_flag = ? AND c.status = ?";

        $queryParameter = array(1, 2);

        return (new Database())->readQueryExecution($queryString, $queryParameter);
    }

    public function mapContractData($datas = array()){
        if(isset($datas) && is_array($datas)){
            $length = count($datas);
            $mappedData = array();

            for($i = 0; $i < $length; $i++){
                $data = $datas[$i];
                if(isset($data)){
                    if(isset($mappedData[$data->contract_id])) {
                        $mappedData[$data->contract_id]->setContractProduct($this->mapContractProduct($data));
                    }
                    else{
                        $contract = new Contract();
                        $contract->setId($data->contract_id ?? NULL);
                        $contract->setContractorId($data->contractor_id ?? NULL);
                        $contract->setTantouId($data->tantou_id ?? NULL);
                        $contract->setStatus($data->status ?? NULL);
                        $contract->setNote($data->note ?? NULL);
                        $contract->setUpdateDate($data->update_date ?? NULL);
                        $contract->setUpdateUserId($data->update_user_id ?? NULL);
                        $contract->setInsertDate($data->insert_date ?? NULL);
                        $contract->setInsertUserId($data->insert_user_id ?? NULL);
                        $contract->setDeleteFlag($data->delete_flag ?? NULL);
                        if($data->product_id){
                            $contract->setContractProduct($this->mapContractProduct($data));
                        }

                        $mappedData[$contract->getId()] = $contract;
                    }
                }
            }
            return $mappedData;
        }
        else{
            return $datas;
        }
    }

    public function mapContractProduct($data){
        $mapData = array();
        $shopBusiness = array();

        $mapData["shopBusiness"] = NULL;

        if(count($shopBusiness) > 0){
            $mapData["shopBusiness"] = $shopBusiness[0]->getCodeName() ?? NULL;
        }

        $mapData["branchNo"] = $data->branch_no ?? NULL;
        $mapData["productId"] = $data->product_id ?? NULL;
        $mapData["name"] = $data->product_name ?? NULL;
        $mapData["shopId"] = $data->shop_id ?? NULL;
        $mapData["shopName"] = $data->shop_name ?? NULL;
        $mapData["shopNotification"] = $data->notificate_file_path ?? NULL;
        $mapData["status"] = $data->product_status ?? NULL;
        $mapData["price"] = $data->price ?? NULL;
        $mapData["productType"] = $data->product_type ?? NULL;
        $mapData["shopType"] = $data->shop_type ?? NULL;
        $mapData["startDate"] = $data->start_date ?? NULL;
        $mapData["endDate"] = $data->end_date ?? NULL;
        $mapData["tantouId"] = $data->tantou_id ?? NULL;
        $mapData["note"] = $data->product_note ?? NULL;
        $mapData["shopDaihyoName"] = $data->shop_daihyo_name ?? NULL;

        return $mapData;
    }

    public function getContractById($id){
        $data = $this->getContractDataById($id);
        return $this->mapContractData($data);
    }

    public function getContractDataById($id){
        $queryString = "SELECT c.contract_id, c.contractor_id, c.tantou_id, c.status, c.note, c.update_date, c.update_user_id, c.insert_date,
            c.insert_user_id, c.delete_flag, branch_no, p.shop_id, p.product_id, p.status AS product_status, DATE_FORMAT(mp.start_date, '%Y/%m/%d') AS start_date,
            DATE_FORMAT(mp.end_date, '%Y/%m/%d') AS end_date, mp.product_note, mp.product_name, mp.price, mp.product_note, mp.service_type, mp.product_type,
            mp.campaign_flag, mp.shop_type, s.shop_name, s.zipcode, s.address_01, s.tel_no, s.mail_address, si.shop_daihyo_name, si.notificate_file_path,
            si.business FROM trn_web_contract_base AS c LEFT JOIN trn_contract_product AS p ON c.contract_id = p.contract_id LEFT JOIN mst_product AS mp ON
            mp.product_id = p.product_id LEFT JOIN mst_shop AS s ON s.shop_id = p.shop_id LEFT JOIN trn_shop_info AS si ON s.shop_id = si.shop_id
            WHERE c.contract_id = ? AND c.delete_flag = ?";

        $queryParameter = array($id, 1);

        return (new Database())->readQueryExecution($queryString, $queryParameter);
    }
}