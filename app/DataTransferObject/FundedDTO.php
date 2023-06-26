<?php

namespace App\DataTransferObject;

class FundedDTO {

   public function __construct(
      public string $fullname, 
      public string $email, 
      public string $phone,
      public string $whatsappId,
      public string $jTitle,
      public string $gender,
      public string $location,
      public string $ageRange,
      public string $bio,
      public string $startupName,
      public string $businessStage,
      public string $industry_id,
      public string $foundYear,
      public string $raisedAmount,
      public string $annualRevenue,
      public string $raiseDesire,
      public string $founderExperience,
      public string $helpWith,
      public string $joiningGoal,
      public string $specialExpertiseOrExperience,
      public string $jobsToCreate,
      public string $haveAccount,
      public int    $accountNumber,
      public string $debitConfirmation,

      public ?string $errorMessage = null
      ) {}
      

}