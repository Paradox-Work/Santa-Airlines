<?php
class Flight{
    public function __construct(public $FCode,
                                public $From,
                                public $To,
                                public $Time,
                                public $Plane){

    }
    public function getDistance() {
        $R = 6371; // Earth's radius in kilometers
    
        // Convert latitudes and longitudes from degrees to radians
        $lat1 = deg2rad($this->From->latitude);
        $lon1 = deg2rad($this->From->longitude);
        $lat2 = deg2rad($this->To->latitude);
        $lon2 = deg2rad($this->To->longitude);
        
        // Differences in coordinates
        $deltaLat = $lat2 - $lat1;
        $deltaLon = $lon2 - $lon1;
        
        // Haversine formula
        $a = sin($deltaLat / 2) * sin($deltaLat / 2) +
             cos($lat1) * cos($lat2) *
             sin($deltaLon / 2) * sin($deltaLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        
        // Distance in kilometers
        $distance = $R * $c;
        return $distance;
    }
    public function getDuration() {
        // Get the distance using the getDistance() method
        $distance = $this->getDistance();
        
        // Aircraft speed in km/h (assuming 962 km/h)
        $speed = 962; 
        
        // Calculate duration in hours
        $Duration = $distance / $speed;
        
        return $Duration;
    }
}