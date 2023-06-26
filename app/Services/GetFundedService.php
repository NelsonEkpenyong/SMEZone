<?php

namespace App\Services;


use App\DataTransferObject\FundedDTO;
use App\Models\GetFundedAfrica;

class GetFundedService
{
  public static function getFunded(FundedDTO $fundedDTO): FundedDTO
  {
    try {
      $funded                    = new GetFundedAfrica;
      $funded->fullname          = $fundedDTO->fullname;
      $funded->email             = $fundedDTO->email;
      $funded->phone             = $fundedDTO->phone;
      $funded->whatsappId        = $fundedDTO->whatsappId;
      $funded->jTitle            = $fundedDTO->jTitle;
      $funded->gender            = $fundedDTO->gender;
      $funded->location          = $fundedDTO->location;
      $funded->ageRange          = $fundedDTO->ageRange;
      $funded->bio               = $fundedDTO->bio;
      $funded->startupName       = $fundedDTO->startupName;
      $funded->businessStage     = $fundedDTO->businessStage;
      $funded->industry_id       = $fundedDTO->industry_id;
      $funded->foundYear         = $fundedDTO->foundYear;
      $funded->annualRevenue     = $fundedDTO->annualRevenue;
      $funded->raisedAmount      = $fundedDTO->raisedAmount;
      $funded->raiseDesire       = $fundedDTO->raiseDesire;
      $funded->founderExperience = $fundedDTO->founderExperience;
      $funded->helpWith          = $fundedDTO->helpWith;
      $funded->joiningGoal       = $fundedDTO->joiningGoal;
      $funded->specialExpertiseOrExperience  = $fundedDTO->specialExpertiseOrExperience;
      $funded->jobsToCreate      = $fundedDTO->jobsToCreate;
      $funded->haveAccount       = $fundedDTO->haveAccount;
      $funded->accountNumber     = $fundedDTO->accountNumber;
      $funded->debitConfirmation = $fundedDTO->debitConfirmation;
      
      $funded->save();

      return $fundedDTO;

    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());

    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }

}
