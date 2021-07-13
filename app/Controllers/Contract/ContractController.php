<?php

namespace App\Controllers\Contract;


use App\Controllers\BaseController;
use App\Models\Contract\ContractModel;

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
}