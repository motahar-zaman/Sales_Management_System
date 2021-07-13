<?php

namespace App\Controllers\Contract;


use App\Controllers\BaseController;
use App\Models\Contract\ContractModel;
use App\Models\Contractor\ContractorModel;

class ContractController extends BaseController
{
    public function contractApprovalList()
    {
        if (session() && session()->get('login')) {
            $contract = (new ContractModel())->getContractApprovalList();
            return view("Contract/contractApprovalList", ["title" => "contract Approval List", "contracts" => $contract]);
        } else {
            return redirect()->to("/login");
        }
    }

    public function contractDetails($contractId){
        if( session() && session()->get('login') ){
            $contract = (new ContractModel())->getContractById($contractId);
            $contractDetails = $contract[$contractId] ?? null;

            $contractorDetails = null;

            if(isset($contractDetails) && $contractDetails->getContractorId() ){
                $contractorDetails = (new ContractorModel())->getContractorDetailsById($contractDetails->getContractorId())[0] ?? null;
            }

            $data = array(
                "title" => "Contract Details",
                "contract" => $contractDetails,
                "contractorDetails" => $contractorDetails,
            );

            return view("Contract/contractDetails", $data);
        }
        else{
            return redirect()->to("/login");
        }
    }
}