<?php

namespace App\assets;
use App\Models\Licenses;
use Carbon\Carbon;

class Utility {
    /**
     * Extracts the id's of a specific property from an array of objects
     * and stores them in another array.
     *
     * @param array $dataSourceArray The datasource array of objects to extract the ids from.
     * @param string $property The name of the property to be extracted e.g Class->id
     * @param array $arrayStore The array to store the extracted ids in.
     *
     * @return array The array store with the extracted values.
     */
    public static function extractIdsFromArray($dataSourceArray,$property, &$arrayStore ) :array
    {
        foreach( $dataSourceArray as $dataSourceArrayIds){ $arrayStore[] = $dataSourceArrayIds->$property;}
        $arrayStore = array_unique($arrayStore);
        return $arrayStore;
    }


    /**
     * Function that saves a user license if a license hasn't been saved already
     *
     * @param string $activityType The type of activity performed that counts as a license
     * @param string $user The authenticated user object
     *
     */
    public static function recordLicense($activityType, $user){
        
        $license = Licenses::where('user_id', $user->id)->first();
        if(!$license){
            Licenses::create([
                'user_id'       => $user->id,
                'activity_type' => $activityType,
                'expires_at'    => Carbon::now()->addYear(),
            ]);
        }
          
    }

    
}