<?php

class Aircraft {
    public function __construct(public $manufacture,
                                public $model,
                                public $seat,
                                public $speed) {
        
    }
}
