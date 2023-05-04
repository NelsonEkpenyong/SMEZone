<?php

namespace App\assets;

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
        foreach( $dataSourceArray as $dataSourceArrayIds){
            $arrayStore[] = $dataSourceArrayIds->$property;
        }
        $arrayStore = array_unique($arrayStore);
        return $arrayStore;
    }

    
}